<div class="form-group row align-items-center" :class="{'has-danger': errors.has('weight'), 'has-success': fields.weight && fields.weight.valid }">
    <label for="weight" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.shipment.columns.weight') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.weight" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('weight'), 'form-control-success': fields.weight && fields.weight.valid}" id="weight" name="weight" placeholder="{{ trans('admin.shipment.columns.weight') }}">
        <div v-if="errors.has('weight')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('weight') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('pkg_num'), 'has-success': fields.pkg_num && fields.pkg_num.valid }">
    <label for="pkg_num" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.shipment.columns.pkg_num') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.pkg_num" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('pkg_num'), 'form-control-success': fields.pkg_num && fields.pkg_num.valid}" id="pkg_num" name="pkg_num" placeholder="{{ trans('admin.shipment.columns.pkg_num') }}">
        <div v-if="errors.has('pkg_num')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('pkg_num') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('status'), 'has-success': fields.status && fields.status.valid }">
    <label for="status" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.shipment.columns.status') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.status" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('status'), 'form-control-success': fields.status && fields.status.valid}" id="status" name="status" placeholder="{{ trans('admin.shipment.columns.status') }}">
        <div v-if="errors.has('status')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('status') }}</div>
    </div>
</div>


<div class="form-group row align-items-center" :class="{'has-danger': errors.has('end_at'), 'has-success': fields.end_at && fields.end_at.valid }">
    <label for="end_at" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.shipment.columns.end_at') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.end_at" :config="datetimePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('end_at'), 'form-control-success': fields.end_at && fields.end_at.valid}" id="end_at" name="end_at" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_date_and_time') }}"></datetime>
        </div>
        <div v-if="errors.has('end_at')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('end_at') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('prod_kind'), 'has-success': fields.prod_kind && fields.prod_kind.valid }">
    <label for="prod_kind" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.shipment.columns.prod_kind') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.prod_kind" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('prod_kind'), 'form-control-success': fields.prod_kind && fields.prod_kind.valid}" id="prod_kind" name="prod_kind" placeholder="{{ trans('admin.shipment.columns.prod_kind') }}">
        <div v-if="errors.has('prod_kind')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('prod_kind') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('prod_price'), 'has-success': fields.prod_price && fields.prod_price.valid }">
    <label for="prod_price" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.shipment.columns.prod_price') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.prod_price" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('prod_price'), 'form-control-success': fields.prod_price && fields.prod_price.valid}" id="prod_price" name="prod_price" placeholder="{{ trans('admin.shipment.columns.prod_price') }}">
        <div v-if="errors.has('prod_price')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('prod_price') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('way_id'), 'has-success': fields.way_id && fields.way_id.valid }">
    <label for="way_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.shipment.columns.way_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.way_id" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('way_id'), 'form-control-success': fields.way_id && fields.way_id.valid}" id="way_id" name="way_id" placeholder="{{ trans('admin.shipment.columns.way_id') }}">
        <div v-if="errors.has('way_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('way_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('from_user_id'), 'has-success': fields.from_user_id && fields.from_user_id.valid }">
    <label for="from_user_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.shipment.columns.from_user_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.from_user_id" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('from_user_id'), 'form-control-success': fields.from_user_id && fields.from_user_id.valid}" id="from_user_id" name="from_user_id" placeholder="{{ trans('admin.shipment.columns.from_user_id') }}">
        <div v-if="errors.has('from_user_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('from_user_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('to_user_id'), 'has-success': fields.to_user_id && fields.to_user_id.valid }">
    <label for="to_user_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.shipment.columns.to_user_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.to_user_id" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('to_user_id'), 'form-control-success': fields.to_user_id && fields.to_user_id.valid}" id="to_user_id" name="to_user_id" placeholder="{{ trans('admin.shipment.columns.to_user_id') }}">
        <div v-if="errors.has('to_user_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('to_user_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('pay_way'), 'has-success': fields.pay_way && fields.pay_way.valid }">
    <label for="pay_way" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.shipment.columns.pay_way') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.pay_way" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('pay_way'), 'form-control-success': fields.pay_way && fields.pay_way.valid}" id="pay_way" name="pay_way" placeholder="{{ trans('admin.shipment.columns.pay_way') }}">
        <div v-if="errors.has('pay_way')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('pay_way') }}</div>
    </div>
</div>


