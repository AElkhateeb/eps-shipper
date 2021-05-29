@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.shipment.actions.index'))

@section('body')

    <shipment-listing
        :data="{{ $data->toJson() }}"
        :url="'{{ url('admin/shipments') }}'"
        :trans="{{ json_encode(trans('brackets/admin-ui::admin.dialogs')) }}"
        inline-template>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> {{ trans('admin.shipment.actions.index') }}
                        <a class="btn btn-primary btn-sm pull-right m-b-0 ml-2" href="{{ url('admin/shipments/export') }}" role="button"><i class="fa fa-file-excel-o"></i>&nbsp; {{ trans('admin.shipment.actions.export') }}</a>
                        <a class="btn btn-primary btn-spinner btn-sm pull-right m-b-0" href="{{ url('admin/shipments/create') }}" role="button"><i class="fa fa-plus"></i>&nbsp; {{ trans('admin.shipment.actions.create') }}</a>
                    </div>
                    <div class="card-body" v-cloak>
                        <div class="card-block">
                            <form @submit.prevent="">
                                <div class="row justify-content-md-between">
                                    <div class="col col-lg-7 col-xl-5 form-group">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="{{ trans('brackets/admin-ui::admin.placeholder.search') }}" v-model="search" @keyup.enter="filter('search', $event.target.value)" />
                                            <span class="input-group-append">
                                                <button type="button" class="btn btn-primary" @click="filter('search', search)"><i class="fa fa-search"></i>&nbsp; {{ trans('brackets/admin-ui::admin.btn.search') }}</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto form-group ">
                                        <select class="form-control" v-model="pagination.state.per_page">
                                            
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div>
                                </div>
                            </form>

                            <table class="table table-hover table-listing">
                                <thead>
                                    <tr>
                                        <th class="bulk-checkbox">
                                            <input class="form-check-input" id="enabled" type="checkbox" v-model="isClickedAll" v-validate="''" data-vv-name="enabled"  name="enabled_fake_element" @click="onBulkItemsClickedAllWithPagination()">
                                            <label class="form-check-label" for="enabled">
                                                #
                                            </label>
                                        </th>

                                        <th is='sortable' :column="'id'">{{ trans('admin.shipment.columns.id') }}</th>
                                        <th is='sortable' :column="'weight'">{{ trans('admin.shipment.columns.weight') }}</th>
                                        <th is='sortable' :column="'pkg_num'">{{ trans('admin.shipment.columns.pkg_num') }}</th>
                                        <th is='sortable' :column="'status'">{{ trans('admin.shipment.columns.status') }}</th>
                                        <th is='sortable' class="text-center" :column="'published_at'">{{ trans('admin.shipment.columns.published_at') }}</th>
                                        <th is='sortable' :column="'end_at'">{{ trans('admin.shipment.columns.end_at') }}</th>
                                        <th is='sortable' :column="'prod_kind'">{{ trans('admin.shipment.columns.prod_kind') }}</th>
                                        <th is='sortable' :column="'prod_price'">{{ trans('admin.shipment.columns.prod_price') }}</th>
                                        <th is='sortable' :column="'way_id'">{{ trans('admin.shipment.columns.way_id') }}</th>
                                        <th is='sortable' :column="'from_user_id'">{{ trans('admin.shipment.columns.from_user_id') }}</th>
                                        <th is='sortable' :column="'to_user_id'">{{ trans('admin.shipment.columns.to_user_id') }}</th>
                                        <th is='sortable' :column="'pay_way'">{{ trans('admin.shipment.columns.pay_way') }}</th>

                                        <th></th>
                                    </tr>
                                    <tr v-show="(clickedBulkItemsCount > 0) || isClickedAll">
                                        <td class="bg-bulk-info d-table-cell text-center" colspan="14">
                                            <span class="align-middle font-weight-light text-dark">{{ trans('brackets/admin-ui::admin.listing.selected_items') }} @{{ clickedBulkItemsCount }}.  <a href="#" class="text-primary" @click="onBulkItemsClickedAll('/admin/shipments')" v-if="(clickedBulkItemsCount < pagination.state.total)"> <i class="fa" :class="bulkCheckingAllLoader ? 'fa-spinner' : ''"></i> {{ trans('brackets/admin-ui::admin.listing.check_all_items') }} @{{ pagination.state.total }}</a> <span class="text-primary">|</span> <a
                                                        href="#" class="text-primary" @click="onBulkItemsClickedAllUncheck()">{{ trans('brackets/admin-ui::admin.listing.uncheck_all_items') }}</a>  </span>

                                            <span class="pull-right pr-2">
                                                <button class="btn btn-sm btn-danger pr-3 pl-3" @click="bulkDelete('/admin/shipments/bulk-destroy')">{{ trans('brackets/admin-ui::admin.btn.delete') }}</button>
                                            </span>

                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item, index) in collection" :key="item.id" :class="bulkItems[item.id] ? 'bg-bulk' : ''">
                                        <td class="bulk-checkbox">
                                            <input class="form-check-input" :id="'enabled' + item.id" type="checkbox" v-model="bulkItems[item.id]" v-validate="''" :data-vv-name="'enabled' + item.id"  :name="'enabled' + item.id + '_fake_element'" @click="onBulkItemClicked(item.id)" :disabled="bulkCheckingAllLoader">
                                            <label class="form-check-label" :for="'enabled' + item.id">
                                            </label>
                                        </td>

                                    <td>@{{ item.id }}</td>
                                        <td>@{{ item.weight }}</td>
                                        <td>@{{ item.pkg_num }}</td>
                                        <td>@{{ item.status }}</td>
                                            <td class="text-center text-nowrap">
                                            <span v-if="item.published_at <= now">
                                                @{{ item.published_at | datetime('DD.MM.YYYY, HH:mm') }}
                                            </span>
                                                <span v-if="item.published_at > now">
                                                <small>{{ trans('admin.shipment.actions.will_be_published') }}</small><br />
                                                @{{ item.published_at | datetime('DD.MM.YYYY, HH:mm') }}
                                                <span class="cursor-pointer" @click="publishLater(item.resource_url, collection[index], 'publishLaterDialog')" title="{{ trans('brackets/admin-ui::admin.operation.publish_later') }}" role="button"><i class="fa fa-calendar"></i></span>
                                            </span>
                                            <div v-if="!item.published_at">
                                                <span class="btn btn-sm btn-info text-white mb-1" @click="publishLater(item.resource_url, collection[index], 'publishLaterDialog')" title="{{ trans('brackets/admin-ui::admin.operation.publish_later') }}" role="button"><i class="fa fa-calendar"></i>&nbsp;&nbsp;{{ trans('brackets/admin-ui::admin.operation.publish_later') }}</span>
                                            </div>
                                            <div v-if="!item.published_at || item.published_at > now">
                                                <form class="d-inline" @submit.prevent="publishNow(item.resource_url, collection[index], 'publishNowDialog')">
                                                    <button type="submit" class="btn btn-sm btn-success text-white" title="{{ trans('brackets/admin-ui::admin.operation.publish_now') }}"><i class="fa fa-send"></i>&nbsp;&nbsp;{{ trans('brackets/admin-ui::admin.operation.publish_now') }}</button>
                                                </form>
                                            </div>
                                            <div v-if="item.published_at && item.published_at < now">
                                                <form class="d-inline" @submit.prevent="unpublishNow(item.resource_url, collection[index])">
                                                    <button type="submit" class="btn btn-sm btn-danger" title="{{ trans('brackets/admin-ui::admin.operation.unpublish_now') }}"><i class="fa fa-send"></i>&nbsp;&nbsp;{{ trans('brackets/admin-ui::admin.operation.unpublish_now') }}</button>
                                                </form>
                                            </div>
                                        </td>
                                        
                                        <td>@{{ item.end_at | datetime }}</td>
                                        <td>@{{ item.prod_kind }}</td>
                                        <td>@{{ item.prod_price }}</td>
                                        <td>@{{ item.way_id }}</td>
                                        <td>@{{ item.from_user_id }}</td>
                                        <td>@{{ item.to_user_id }}</td>
                                        <td>@{{ item.pay_way }}</td>
                                        
                                        <td>
                                            <div class="row no-gutters">
                                                <div class="col-auto">
                                                    <a class="btn btn-sm btn-spinner btn-info" :href="item.resource_url + '/edit'" title="{{ trans('brackets/admin-ui::admin.btn.edit') }}" role="button"><i class="fa fa-edit"></i></a>
                                                </div>
                                                <form class="col" @submit.prevent="deleteItem(item.resource_url)">
                                                    <button type="submit" class="btn btn-sm btn-danger" title="{{ trans('brackets/admin-ui::admin.btn.delete') }}"><i class="fa fa-trash-o"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="row" v-if="pagination.state.total > 0">
                                <div class="col-sm">
                                    <span class="pagination-caption">{{ trans('brackets/admin-ui::admin.pagination.overview') }}</span>
                                </div>
                                <div class="col-sm-auto">
                                    <pagination></pagination>
                                </div>
                            </div>

                            <div class="no-items-found" v-if="!collection.length > 0">
                                <i class="icon-magnifier"></i>
                                <h3>{{ trans('brackets/admin-ui::admin.index.no_items') }}</h3>
                                <p>{{ trans('brackets/admin-ui::admin.index.try_changing_items') }}</p>
                                <a class="btn btn-primary btn-spinner" href="{{ url('admin/shipments/create') }}" role="button"><i class="fa fa-plus"></i>&nbsp; {{ trans('admin.shipment.actions.create') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </shipment-listing>

@endsection