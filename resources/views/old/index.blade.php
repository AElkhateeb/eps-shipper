<?php
$serviceId=1;
$sliders = $data['sliders'];
$branches = $data['branches'];
$about = $data['about'];
$service = $data['service'];
$pro = $data['pro'];
$testimonial = $data['testimonial'];
?>
@extends('layouts.front')
@section('content')

    <!-- section begin -->
    <section id="section-welcome" class="no-padding autoheight light-text" data-stellar-background-ratio="0.5" style="background-image: url('{{URL::asset($sliders['media_url'])}}');">
        <div class="center-y">
            <div class="inner text-center">
                <div class="sub-intro-text"><span>{{ $sliders['title'] }}</span></div>
                <div class="divider-single"></div>
                <div class="type-wrap title">
                    <div class="typed-strings">
                        {!! $sliders['text'] !!}
                    </div>
                    <span class="typed"></span>
                </div>
                <div class="divider-double"></div>
            </div>
        </div>
    </section>
    <!-- section close -->


    <section class="no-padding mt-90 absolute width100 z-index10 height90px overlaydark70">
        <div class="container">
            <div class="row-fluid <?= (App::currentLocale()=='en')? '': 'arabic'?>">
                @foreach($branches as $branches )
                @foreach($branches['contact'] as $contact )
                <div class="col-md-4">
                    <div class="info-box padding20">
                        <i class="fa {{ $contact['icon'] }}"></i>
                        <div class="info-box_text">
                            <div class="info-box_title">{{ $contact['title'] }}</div>
                            <div class="info-box_subtite">{!! $contact['text'] !!}</div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endforeach

                <div class="col-md-4"></div>
            </div>
        </div>
    </section>


    <!-- section begin -->
    <section id="section-side-2" class="side-bg <?= (App::currentLocale()=='en')? '': 'arabic'?>">
        <div class="col-md-6 col-md-offset-6  <?= (App::currentLocale()=='en')? 'pull-right': 'pull-left '?> image-container">
            <div class="background-image" style="background-image: url('{{URL::asset($about['media_url'])}}');"></div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-5 <?= (App::currentLocale()=='en')? 'pull-left': 'pull-right" '?>">

                    <h2>{{$about['title']}}</h2>
                    {!!$about['text']!!}
                    <a href="{{ url(App::currentLocale().'/about') }}" class="btn-arrow id-color"><span class="line"></span><span class="url"> {{__('front.about')}} </span></a>

                </div>

                <div class="col-md-5 col-md-offset-2">
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
    </section>
    <!-- section close -->

    <!-- section begin -->
    <section id="section-tracking">
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

    </section>
    <!-- section close -->

    <!-- section begin -->
    @include('front\why-us',compact('pro'))
    <!-- section close -->
    <!-- section begin -->
    <section class="no-padding">
        <div class="container-fullwidth">
            @foreach($service as $service)
                <div id="bg-box-service-{{ $serviceId }}" class="one-fourth">
                    <div class="bg-color-fx light-text padding-5 text-center">
                        <h3>{{ $service['title'] }}</h3>
                        <div class="tiny-border margintop10 marginbottom10"></div>
                        <img src="{{URL::asset($service['media_url'])}}" class="img-responsive margintop20 marginbottom20 wow fadeInRight" alt="" />
                        <p>{!! $service['text'] !!}</p>
                        <a href="{{ url(App::currentLocale().'/service/'.$service['id']) }}" class="btn-arrow hover-light"><span class="line"></span><span class="url">View Details</span></a>
                    </div>
                </div>
                <?php $serviceId+1; ?>
            @endforeach


        </div> <!-- /.container -->

    </section>

    <!-- section close -->



    <!-- section begin -->
    <section id="explore-4" class="side-bg">

        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeIn" data-wow-delay=".3s">
                    <h2>They Says</h2>
                    <div class="divider-deco"><span></span></div>

                    <div dir="ltr" id="testi-carousel-2" class="testi-slider wow fadeIn" data-wow-delay="0s" data-wow-duration="1s">
                        @foreach($testimonial as $testimonial)
                        <div class="item"<?= (App::currentLocale()=='en')? 'dir="ltr"': 'dir="rtl" '?>>
                            <blockquote >
                                {!! $testimonial['text'] !!}
                            </blockquote>
                            <div class="arrow-down"></div>
                            <div class="testi-by">
                                <img src="{{URL::asset($testimonial['media_url'])}}" class="img-circle" alt="">
                                <span class="name">{{ $testimonial['title'] }}</strong><br>
                                            {{ $testimonial['job'] }}</span>
                            </div>
                        </div>
                        @endforeach


                    </div>

                </div>
            </div>
        </div>

        <div class="clearfix"></div>
    </section>
    <!-- section close -->


    <section id="section-contact-form">
        <div class="container">
            <div class="row  <?= (App::currentLocale()=='en')? '': 'arabic" '?>">
                <div class="col-md-4">
                    <div class="light-text">
                        <div class="bg-2 padding30">

                            <h2 class="id-color">Gocargo Commitment</h2>
                            <div class="tiny-border"></div>
                            <p class="lead big">
                                <i>Fell free to asking about Gocargo or Just say hello to us </i>
                            </p>
                            <div class="text-center">
                                <img src="{{URL::asset('front/img/contact/truck.png')}}" alt="">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-8">
                    <div class="row form-transparent">
                        <div class="col-md-12 wow fadeInDown">
                            <div class="text-label bg-color text-center light-text">
                                <h3>Quick Quote</h3>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <input type="text" class="form-control wow fadeInLeft" name="qq-name" id="qq-name" placeholder="Location">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control wow fadeInRight" name="qq-weight" id="qq-weight" placeholder="Weight">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control wow fadeInLeft" name="qq-destination" id="qq-destination" placeholder="Destination">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control wow fadeInRight" name="qq-packages" id="qq-packages" placeholder="No. of packages">
                        </div>

                        <div class="col-md-12 wow fadeInUp">
                            <input type="submit" class="form-control btn btn-custom" name="qq-submit" id="qq-submit" value="Get Rate Quote">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
