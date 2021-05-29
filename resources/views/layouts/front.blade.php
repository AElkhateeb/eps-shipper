<?php
use App\Models\Identity;
use Illuminate\Support\Facades\App;
use App\Models\Service;

$base = str_replace(url(App::currentLocale().'/')."/", '', Request::url());
if(($base== URL::to('/') ) || ($base==url(App::currentLocale())) ){
    $base="";
}
?>
<!DOCTYPE html>
<html lang="{{ App::currentLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>@yield('title')</title>
    <meta name="description"
          content="@yield('description')">
    <!-- All Plugins Css -->
    <link rel="stylesheet" href="{{URL::asset('site/css/plugins.css')}}">
    <link rel="stylesheet" href="{{URL::asset('site/css/nav.css')}}" />


    <!-- Custom CSS -->
    <link href="{{URL::asset('site/css/styles_'.App::currentLocale().'.css')}}" rel="stylesheet">

    <!-- Custom Color Option -->
    <link href="{{URL::asset('site/css/colors.css')}}" rel="stylesheet">

</head>

<body  <?= (App::currentLocale()=='en')? 'dir="ltr"': 'dir="rtl" '?> class="green-skin" >
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div id="preloader"><div class="preloader"><span></span><span></span></div></div>


<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
    <!-- Start Navigation -->
    <div class="header header-light nav-left-side">
        <nav class="headnavbar ">
            <div class="nav-header">
                <a href="{{ url(App::currentLocale().'/') }}" class="brand"><img style="width: 108px; height: 44px;"src="{{URL::asset('site/img/logo.png')}}" alt="" /></a>
                <button class="toggle-bar"><span class="ti-align-justify"></span></button>
            </div>
            <ul class="menu arabic">

                <li><a {!! ($base=='home'|| $base==url() ||$base==url(App::currentLocale())  )? 'class="active"' :'' !!} href="{{ url(App::currentLocale().'/') }}">{{__('front.home')}}</a></li>
                <li class="dropdown">
                    <a {!! ($base=='services')? 'class="active"' :'' !!} href="{{ url(App::currentLocale().'/services') }}">{{__('front.services')}}</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url(App::currentLocale().'/services') }}">{{__('front.services')}}</a></li>
                        <?php
                        $services = Service::limit(6)->get(); // return collection
                        $services->makeHidden(['resource_url']);
                        //$services->title['en']
                        ?>
                        @foreach($services as $service)
                            <li><a href="{{ url(App::currentLocale().'/service/'.$service->id) }}">{{ $service->title  }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a {!!  ($base=='about')? 'class="active"' :'' !!} href="{{ url(App::currentLocale().'/about') }}">{{__('front.about')}}</a></li>
                <li><a {!! ($base=='career')? 'class="active"' :''  !!} href="{{ url(App::currentLocale().'/career') }}">{{__('front.career')}}</a></li>
                <li><a {!! ($base=='pricing')? 'class="active"' :'' !!} href="{{ url(App::currentLocale().'/pricing') }}">{{__('front.pricing')}}</a></li>
                <li><a {!! ($base=='contact')? 'class="active"' :'' !!}  href="{{ url(App::currentLocale().'/contact') }}">{{__('front.contact')}}</a></li>
            </ul>

            <ul class="attributes attributes-desk">
                <li class="log-icon log-seprate"><a href="#" data-toggle="modal" data-target="#login">Log In</a></li>
                <li class="log-icon"><a href="#" data-toggle="modal" data-target="#signup">Sign Up</a></li>
                <li class="submit-attri theme-log"><a href="{{ url((App::currentLocale()=='en')? 'ar/': 'en/')}}/{{ $base }}"><?= (App::currentLocale()=='en')? 'العربية': 'English'?></a></li>

            </ul>

        </nav>
    </div>
    <!-- End Navigation -->
    <div class="clearfix"></div>
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
        @yield('content')

    <!-- ============================ Footer Start ================================== -->
    <footer class="dark-footer skin-dark-footer">
        <div>
            <div class="container">
                <div class="row <?= (App::currentLocale()=='en')? '': 'arabic" '?>">

                    <div class="col-lg-7 col-md-12">
                        <?php
                        $about = Identity::first(); // return collection
                        $about->makeHidden(['resource_url']);
                        ?>
                        <div class="footer-widget">
                            <h4 class="widget-title">{{$about['title']}}</h4>
                            {!!$about['text']!!}
                        </div>
                    </div>




                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">{{__('front.footer h')}}</h4>
                            <p>{{__('front.footer text')}}</p>

                            <form class="f-newsletter mt-4">
                                <input type="text" class="form-control sigmup-me" placeholder="{{__('front.footer btn')}}" required="required">
                                <button type="submit" class="btn"><i class="ti-arrow-<?= (App::currentLocale()=='en')? 'right': 'left" '?>"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">{{__('front.footer lnk')}}</h4>
                            <ul class="footer-menu">
                                <li><a href="{{ url(App::currentLocale().'/services') }}">{{__('front.services')}}</a></li>
                                <li><a href="{{ url(App::currentLocale().'/about') }}">{{__('front.about')}}</a></li>
                                <li><a href="{{ url(App::currentLocale().'/career') }}">{{__('front.career')}}</a></li>
                                <li><a href="{{ url(App::currentLocale().'/pricing') }}">{{__('front.pricing')}}</a></li>
                                <li><a href="{{ url(App::currentLocale().'/contact') }}">{{__('front.contact')}}</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center <?= (App::currentLocale()=='en')? '': 'arabic" '?>">

                    <div class="col-lg-6 col-md-6 text-center">
                        <p class="mb-0">© 2021 -{{__('front.footer com')}}</p>
                    </div>
                    <div class="col-lg-6 col-md-6 text-center">
                    <ul class="footer-bottom-social">
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-twitter"></i></a></li>
                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ============================ Footer End ================================== -->

    <!-- Log In Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="registermodal">
                <span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
                <div class="modal-body">
                    <h4 class="modal-header-title">Log In</h4>
                    <div class="login-form">
                        <form>

                            <div class="form-group">
                                <label>User Name</label>
                                <div class="input-with-icon">
                                    <input type="text" class="form-control" placeholder="Username">
                                    <i class="ti-user"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-with-icon">
                                    <input type="password" class="form-control" placeholder="*******">
                                    <i class="ti-unlock"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-md full-width pop-login">Login</button>
                            </div>

                        </form>
                    </div>
                    <div class="modal-divider"><span>Or login via</span></div>
                    <div class="social-login mb-3">
                        <ul>
                            <li><a href="#" class="btn connect-fb"><i class="ti-facebook"></i>Facebook</a></li>
                            <li><a href="#" class="btn connect-twitter"><i class="ti-twitter"></i>Twitter</a></li>
                        </ul>
                    </div>
                    <div class="text-center">
                        <p class="mt-5"><a href="#" class="link">Forgot password?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Sign Up Modal -->
    <div class="modal fade signup" id="signup" tabindex="-1" role="dialog" aria-labelledby="sign-up" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="sign-up">
                <span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
                <div class="modal-body">
                    <h4 class="modal-header-title">Sign Up</h4>
                    <div class="login-form">
                        <form>

                            <div class="row">

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="text" class="form-control" placeholder="Full Name">
                                            <i class="ti-user"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="email" class="form-control" placeholder="Email">
                                            <i class="ti-email"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="text" class="form-control" placeholder="Username">
                                            <i class="ti-user"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="password" class="form-control" placeholder="*******">
                                            <i class="ti-unlock"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="password" class="form-control" placeholder="123 546 5847">
                                            <i class="lni-phone-handset"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <select class="form-control">
                                                <option>As a Customer</option>
                                                <option>As a Agent</option>
                                                <option>As a Agency</option>
                                            </select>
                                            <i class="ti-briefcase"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-md full-width pop-login">Sign Up</button>
                            </div>

                        </form>
                    </div>
                    <div class="modal-divider"><span>Or login via</span></div>
                    <div class="social-login mb-3">
                        <ul>
                            <li><a href="#" class="btn connect-fb"><i class="ti-facebook"></i>Facebook</a></li>
                            <li><a href="#" class="btn connect-twitter"><i class="ti-twitter"></i>Twitter</a></li>
                        </ul>
                    </div>
                    <div class="text-center">
                        <p class="mt-5"><i class="ti-user mr-1"></i>Already Have An Account? <a href="#" class="link">Go For LogIn</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{URL::asset('site/js/jquery.min.js')}}"></script>
<script src="{{URL::asset('site/js/popper.min.js')}}"></script>
<script src="{{URL::asset('site/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('site/js/rangeslider.js')}}"></script>
<script src="{{URL::asset('site/js/select2.min.js')}}"></script>
<script src="{{URL::asset('site/js/aos.js')}}"></script>
<script src="{{URL::asset('site/js/owl.carousel.min.js')}}"></script>
<script src="{{URL::asset('site/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{URL::asset('site/js/slick.js')}}"></script>
<script src="{{URL::asset('site/js/slider-bg.js')}}"></script>
<script src="{{URL::asset('site/js/lightbox.js')}}"></script>
<script src="{{URL::asset('site/js/imagesloaded.js')}}"></script>
<script src="{{URL::asset('site/js/isotope.min.js')}}"></script>
<script src="{{URL::asset('site/js/coreNavigation.js')}}"></script>
<script src="{{URL::asset('site/js/custom.js')}}"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->

</body>
</html>
