<?php
$serviceId=1;
$sliders = $data['sliders'];
$branches = $data['branches'];
$about = $data['about'];
$service = $data['service'];
$pro = $data['pro'];
$testimonial = $data['testimonial'];
$testimonial = $data['testimonial'];
$page = $data['page'];
$package = $data['package'];
?>
@extends('layouts.front')
@section('title', $page['title'])
@section('description',  $page['description'])
@section('content')

    <!-- section begin -->
    <div class="image-cover hero-banner" style="background:url('{{URL::asset($sliders['media_url'])}}') no-repeat;" data-overlay="5">
        <div class="container">
            <div class="simple-search-wrap">
                <div class="hero-search-2">
                    <h1>{{ $sliders['title'] }}</h1>
                    <div class="pk-input-group">
                        <input type="text" name="EMAIL" class="email form-control" placeholder="{{__('front.home track num')}}">
                        <button class="pk-subscribe-submit" type="submit">{{__('front.home tracking')}}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="gray-bg">
        <div class="container">
            <div class="row align-items-center <?= (App::currentLocale()=='en')? '': 'arabic'?>">

                <div class="col-lg-6 col-md-6">
                    <img src="{{URL::asset($about['media_url'])}}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="explore-content">
                        <h2>{{$about['title']}}</h2>
                        {!!$about['text']!!}
                        <a href="{{ url(App::currentLocale().'/about') }}" class="btn btn-theme-2">{{__('front.about')}}</a>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- section begin -->
   <!-- section close -->

    <!-- section begin -->
    <!--section-- id="section-tracking">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div  <?= (App::currentLocale()=='en')? '': 'id="arabic" '?> class="cta-form wow fadeIn" data-wow-delay="0s" data-wow-duration="1s">
                        <input type="text" name="track" value="" placeholder="Insert tracking number here...">
                        <input type="submit" id="track-it" name="submit" value="TRACK IT">
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>
        </div>

        <div id="section-tracking-result" class="light-text">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="divider-double"></div>
                        <div class="text-center">
                            <h3><span class="grey">Product ID:</span> 112345679087328</h3>
                        </div>


                        <div class="divider-double"></div>

                        <div class="wrapper-line padding40 rounded10">


                            <ul class="progress">
                                <li><a href="">Accepted</a></li>
                                <li class="beforeactive"><a href="">Order Processing</a></li>
                                <li class="active"><a href="">Shipment Pending</a></li>
                                <li><a href="">Estimated Delivery</a></li>
                            </ul>

                            <div class="divider-double"></div>

                            <ul class="timeline custom-tl">

                                <li class="timeline-inverted">
                                    <div class="timeline-date wow zoomIn" data-wow-delay=".2s">
                                        Nov 03, 2015
                                        <span>20:07 pm</span>
                                    </div>
                                    <div class="timeline-badge success"><i class="fa fa-check-square-o wow zoomIn"></i></div>
                                    <div class="timeline-panel wow fadeInRight" data-wow-delay=".6s">
                                        <div class="timeline-body">
                                            The shipment has been successfully delivered
                                            <span class="location">Baker Street, UK <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="popup-gmaps">view on map</a></span>
                                        </div>
                                    </div>
                                </li>

                                <li class="timeline-inverted">
                                    <div class="timeline-date wow zoomIn" data-wow-delay=".2s">
                                        Nov 03, 2015
                                        <span>20:07 pm</span>
                                    </div>
                                    <div class="timeline-badge warning"><i class="fa fa-warning wow zoomIn"></i></div>
                                    <div class="timeline-panel wow fadeInRight" data-wow-delay=".6s">
                                        <div class="timeline-body">
                                            The shipment could not be delivered
                                            <span class="location">Baker Street, UK <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="popup-gmaps">view on map</a></span>
                                        </div>
                                    </div>
                                </li>

                                <li class="timeline-inverted">
                                    <div class="timeline-date wow zoomIn" data-wow-delay=".2s">
                                        Nov 03, 2015
                                        <span>20:07 pm</span>
                                    </div>
                                    <div class="timeline-badge"><i class="fa fa-plane wow zoomIn"></i></div>
                                    <div class="timeline-panel wow fadeInRight" data-wow-delay=".6s">
                                        <div class="timeline-body">
                                            The shipment has arrived in destination country
                                            <span class="location">Baker Street, UK <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="popup-gmaps">view on map</a></span>
                                        </div>
                                    </div>
                                </li>

                                <li class="timeline-inverted">
                                    <div class="timeline-date wow zoomIn" data-wow-delay=".2s">
                                        Nov 02, 2015
                                        <span>18:05 pm</span>
                                    </div>
                                    <div class="timeline-badge"><i class="fa fa-plane wow zoomIn"></i></div>
                                    <div class="timeline-panel wow fadeInRight" data-wow-delay=".6s">
                                        <div class="timeline-body">
                                            The shipment is being transformed to destination country
                                            <span class="location">Baker Street, UK <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="popup-gmaps">view on map</a></span>
                                        </div>
                                    </div>
                                </li>

                                <li class="timeline-inverted">
                                    <div class="timeline-date wow zoomIn" data-wow-delay=".2s">
                                        Nov 01, 2015
                                        <span>10:08 pm</span>
                                    </div>
                                    <div class="timeline-badge"><i class="fa fa-plane wow zoomIn"></i></div>
                                    <div class="timeline-panel wow fadeInRight" data-wow-delay=".6s">
                                        <div class="timeline-body">
                                            The international shipment has been processed
                                            <span class="location">Baker Street, UK <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="popup-gmaps">view on map</a></span>
                                        </div>
                                    </div>
                                </li>
                            </ul>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section-->
    <!-- section close -->
    <!-- ================================= Blog Grid ================================== -->
    <section>
        <div class="container">

            <div class="row">
                <div class="col text-center">
                    <div class="sec-heading center">
                        <h2>Trending Articles</h2>
                        <p>We post regulary most powerful articles for help and support.</p>
                    </div>
                </div>
            </div>

            <div class="row">
            @foreach($service as $service)
                <!-- Single blog Grid -->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-wrap-grid">

                        <div class="blog-thumb">
                            <a href="{{ url(App::currentLocale().'/service/'.$service['id']) }}"><img src="{{URL::asset($service['media_url'])}}" class="img-fluid" alt="" /></a>
                        </div>


                        <div class="blog-body">
                            <h4 class="bl-title"><a href="{{ url(App::currentLocale().'/service/'.$service['id']) }}">{{ $service['title'] }}</a></h4>
                            <p>{!! $service['text'] !!}</p>
                             <a href="{{ url(App::currentLocale().'/service/'.$service['id']) }}" class="bl-continue">{{__('front.services')}}</a>
                        </div>

                    </div>
                </div>
            @endforeach


            </div>

        </div>
    </section>
    <!-- ================= Blog Grid End ================= -->
    <!-- ============================ Smart Testimonials ================================== -->
    <section class="image-cover" style="background:url(https://via.placeholder.com/1300x850) no-repeat;" data-overlay="8">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-8 col-md-8">

                    <div class="smart-textimonials smart-light smart-center" id="smart-textimonials">
                    @foreach($testimonial as $testimonial)
                        <!-- Single Item -->
                            <div class="item">
                                <div class="smart-tes-content">
                                    {!! $testimonial['text'] !!}
                                </div>

                                <div class="smart-tes-author">
                                    <div class="st-author-box">
                                        <div class="st-author-thumb">
                                            <img src="{{URL::asset($testimonial['media_url'])}}" class="img-fluid" alt="" />
                                        </div>
                                        <div class="st-author-info">
                                            <h4 class="st-author-title">{{ $testimonial['title'] }}</h4>
                                            <span class="st-author-subtitle">{{ $testimonial['job'] }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ============================ Smart Testimonials End ================================== -->

    <!-- section begin -->
    @include('front\why-us',compact('pro'))
    <!-- section close -->


    <section>
        <div class="container">

            <div class="row">
                <div class="col text-center">
                    <div class="sec-heading center">
                        <h2>See our packages</h2>
                        <p>We offer best and smart packages for you.</p>
                    </div>
                </div>
            </div>

            <div class="row">

            @foreach($package as $package)
                <!-- Single Package -->
                    <div class="col-lg-4 col-md-4">
                        <div class="pricing-wrap {{ ($package['is_published']==1) ? 'recommended':'' }}">

                            <div class="pricing-header">
                                <i class="lni-layers"></i>
                                <h4 class="pr-title">{{ $package['name'] }}</h4>
                                <span class="pr-subtitle">{{ $package['name'] }}</span>
                            </div>
                            <div class="pricing-value">
                                <h6 class="pr-value">{{ $package['name'] }}</h6>
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    <li>{{ $package['weight'] }} {{__('front.pricing weight')}} </li>
                                    <li>{{ $package['number'] }}+ {{__('front.pricing number')}} </li>
                                    <li>{{__('front.pricing city')}}</li>

                                </ul>
                            </div>
                            <div class="pricing-bottom">
                                <a href="#" class="btn-pricing">{{__('front.pricing btn')}}</a>
                            </div>

                        </div>
                    </div>
                @endforeach


            </div>

        </div>
    </section>
    <div class="clearfix"></div>



@stop
