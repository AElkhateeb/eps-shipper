<div class="form-group row align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
    <label for="name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.package.columns.name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.package.columns.name') }}">
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('weight'), 'has-success': fields.weight && fields.weight.valid }">
    <label for="weight" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.package.columns.weight') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.weight" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('weight'), 'form-control-success': fields.weight && fields.weight.valid}" id="weight" name="weight" placeholder="{{ trans('admin.package.columns.weight') }}">
        <div v-if="errors.has('weight')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('weight') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('number'), 'has-success': fields.number && fields.number.valid }">
    <label for="number" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.package.columns.number') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.number" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('number'), 'form-control-success': fields.number && fields.number.valid}" id="number" name="number" placeholder="{{ trans('admin.package.columns.number') }}">
        <div v-if="errors.has('number')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('number') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('is_published'), 'has-success': fields.is_published && fields.is_published.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="is_published" type="checkbox" v-model="form.is_published" v-validate="''" data-vv-name="is_published"  name="is_published_fake_element">
        <label class="form-check-label" for="is_published">
            {{ trans('admin.package.columns.is_published') }}
        </label>
        <input type="hidden" name="is_published" :value="form.is_published">
        <div v-if="errors.has('is_published')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('is_published') }}</div>
    </div>
</div>


