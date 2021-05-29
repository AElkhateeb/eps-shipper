@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.pay-way.actions.edit', ['name' => $payWay->name]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <pay-way-form
                :action="'{{ $payWay->resource_url }}'"
                :data="{{ $payWay->toJsonAllLocales() }}"
                :locales="{{ json_encode($locales) }}"
                :send-empty-locales="false"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.pay-way.actions.edit', ['name' => $payWay->name]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.pay-way.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </pay-way-form>

        </div>
    
</div>

@endsection