<div class="row form-inline" style="padding-bottom: 10px;" v-cloak>
    <div :class="{'col-xl-10 col-md-11 text-right': !isFormLocalized, 'col text-center': isFormLocalized, 'hidden': onSmallScreen }">
        <small>{{ trans('brackets/admin-ui::admin.forms.currently_editing_translation') }}<span v-if="!isFormLocalized && otherLocales.length > 1"> {{ trans('brackets/admin-ui::admin.forms.more_can_be_managed') }}</span><span v-if="!isFormLocalized"> | <a href="#" @click.prevent="showLocalization">{{ trans('brackets/admin-ui::admin.forms.manage_translations') }}</a></span></small>
        <i class="localization-error" v-if="!isFormLocalized && showLocalizedValidationError"></i>
    </div>

    <div class="col text-center" :class="{'language-mobile': onSmallScreen, 'has-error': !isFormLocalized && showLocalizedValidationError}" v-if="isFormLocalized || onSmallScreen" v-cloak>
        <small>{{ trans('brackets/admin-ui::admin.forms.choose_translation_to_edit') }}
            <select class="form-control" v-model="currentLocale">
                <option :value="defaultLocale" v-if="onSmallScreen">@{{defaultLocale.toUpperCase()}}</option>
                <option v-for="locale in otherLocales" :value="locale">@{{locale.toUpperCase()}}</option>
            </select>
            <i class="localization-error" v-if="isFormLocalized && showLocalizedValidationError"></i>
            <span>|</span>
            <a href="#" @click.prevent="hideLocalization">{{ trans('brackets/admin-ui::admin.forms.hide') }}</a>
        </small>
    </div>
</div>

<div class="row">
    @foreach($locales as $locale)
        <div class="col-md" v-show="shouldShowLangGroup('{{ $locale }}')" v-cloak>
            <div class="form-group row align-items-center" :class="{'has-danger': errors.has('status_{{ $locale }}'), 'has-success': fields.status_{{ $locale }} && fields.status_{{ $locale }}.valid }">
                <label for="status_{{ $locale }}" class="col-md-2 col-form-label text-md-right">{{ trans('admin.withdrawal.columns.status') }}</label>
                <div class="col-md-9" :class="{'col-xl-8': !isFormLocalized }">
                    <input type="text" v-model="form.status.{{ $locale }}" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('status_{{ $locale }}'), 'form-control-success': fields.status_{{ $locale }} && fields.status_{{ $locale }}.valid }" id="status_{{ $locale }}" name="status_{{ $locale }}" placeholder="{{ trans('admin.withdrawal.columns.status') }}">
                    <div v-if="errors.has('status_{{ $locale }}')" class="form-control-feedback form-text" v-cloak>{{'{{'}} errors.first('status_{{ $locale }}') }}</div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('price'), 'has-success': fields.price && fields.price.valid }">
    <label for="price" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.withdrawal.columns.price') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.price" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('price'), 'form-control-success': fields.price && fields.price.valid}" id="price" name="price" placeholder="{{ trans('admin.withdrawal.columns.price') }}">
        <div v-if="errors.has('price')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('price') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('in_out'), 'has-success': fields.in_out && fields.in_out.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="in_out" type="checkbox" v-model="form.in_out" v-validate="''" data-vv-name="in_out"  name="in_out_fake_element">
        <label class="form-check-label" for="in_out">
            {{ trans('admin.withdrawal.columns.in_out') }}
        </label>
        <input type="hidden" name="in_out" :value="form.in_out">
        <div v-if="errors.has('in_out')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('in_out') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('enabled'), 'has-success': fields.enabled && fields.enabled.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="enabled" type="checkbox" v-model="form.enabled" v-validate="''" data-vv-name="enabled"  name="enabled_fake_element">
        <label class="form-check-label" for="enabled">
            {{ trans('admin.withdrawal.columns.enabled') }}
        </label>
        <input type="hidden" name="enabled" :value="form.enabled">
        <div v-if="errors.has('enabled')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('enabled') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('from_id'), 'has-success': fields.from_id && fields.from_id.valid }">
    <label for="from_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.withdrawal.columns.from_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.from_id" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('from_id'), 'form-control-success': fields.from_id && fields.from_id.valid}" id="from_id" name="from_id" placeholder="{{ trans('admin.withdrawal.columns.from_id') }}">
        <div v-if="errors.has('from_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('from_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('to_id'), 'has-success': fields.to_id && fields.to_id.valid }">
    <label for="to_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.withdrawal.columns.to_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.to_id" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('to_id'), 'form-control-success': fields.to_id && fields.to_id.valid}" id="to_id" name="to_id" placeholder="{{ trans('admin.withdrawal.columns.to_id') }}">
        <div v-if="errors.has('to_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('to_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('way_id'), 'has-success': fields.way_id && fields.way_id.valid }">
    <label for="way_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.withdrawal.columns.way_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.way_id" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('way_id'), 'form-control-success': fields.way_id && fields.way_id.valid}" id="way_id" name="way_id" placeholder="{{ trans('admin.withdrawal.columns.way_id') }}">
        <div v-if="errors.has('way_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('way_id') }}</div>
    </div>
</div>


