<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.content') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/sliders') }}"><i class="nav-icon icon-star"></i> {{ trans('admin.slider.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/identities') }}"><i class="nav-icon icon-ghost"></i> {{ trans('admin.identity.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/pros') }}"><i class="nav-icon icon-umbrella"></i> {{ trans('admin.pro.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/services') }}"><i class="nav-icon icon-energy"></i> {{ trans('admin.service.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/jobs') }}"><i class="nav-icon icon-ghost"></i> {{ trans('admin.job.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/applications') }}"><i class="nav-icon icon-energy"></i> {{ trans('admin.application.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/testimonials') }}"><i class="nav-icon icon-ghost"></i> {{ trans('admin.testimonial.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/socials') }}"><i class="nav-icon icon-book-open"></i> {{ trans('admin.social.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/packages') }}"><i class="nav-icon icon-drop"></i> {{ trans('admin.package.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/pages') }}"><i class="nav-icon icon-umbrella"></i> {{ trans('admin.page.title') }}</a></li>
            <li class="nav-title">System</li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/shipments') }}"><i class="nav-icon icon-star"></i> {{ trans('admin.shipment.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/places') }}"><i class="nav-icon icon-book-open"></i> {{ trans('admin.place.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/ways') }}"><i class="nav-icon icon-umbrella"></i> {{ trans('admin.way.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/pay-ways') }}"><i class="nav-icon icon-graduation"></i> {{ trans('admin.pay-way.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/withdrawals') }}"><i class="nav-icon icon-globe"></i> {{ trans('admin.withdrawal.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/wallets') }}"><i class="nav-icon icon-diamond"></i> {{ trans('admin.wallet.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/contacts') }}"><i class="nav-icon icon-globe"></i> {{ trans('admin.contact.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/branches') }}"><i class="nav-icon icon-graduation"></i> {{ trans('admin.branch.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/receiveres') }}"><i class="nav-icon icon-book-open"></i> {{ trans('admin.receivere.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/clients') }}"><i class="nav-icon icon-ghost"></i> {{ trans('admin.client.title') }}</a></li>
           {{-- Do not delete me :) I'm used for auto-generation menu items --}}

            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i class="nav-icon icon-user"></i> {{ __('Manage access') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i class="nav-icon icon-location-pin"></i> {{ __('Translations') }}</a></li>
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{--<li class="nav-item"><a class="nav-link" href="{{ url('admin/configuration') }}"><i class="nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li>--}}
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
