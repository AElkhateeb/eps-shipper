<?php

$page = $data['page'];
$header=[
    'img'=>$page['media_url'],
    'title'=>$page['title'],
    'h2'=>
        $page['h1'],
];
$header2=[
    'shade'=>'Recovery',
    'h2'=>'About - Us',
    'text'=>
        '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <br class="visible-lg"> incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>',
];

$serviceId=1;
// $about = $data['about'];
$service = $data['service'];

?>
@extends('layouts.front')
@section('content')
@section('title', $page['title'])
@section('description',  $page['description'])


    @include('front\page-header',compact('header'))


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

            @foreach($service as $service)
                <!-- Single Package -->
                <div class="col-lg-4 col-md-4">
                    <div class="pricing-wrap {{ ($service['is_published']==1) ? 'recommended':'' }}">

                        <div class="pricing-header">
                            <i class="lni-layers"></i>
                            <h4 class="pr-title">{{ $service['name'] }}</h4>
                            <span class="pr-subtitle">{{ $service['name'] }}</span>
                        </div>
                        <div class="pricing-value">
                            <h4 class="pr-value">{{ $service['name'] }}</h4>
                        </div>
                        <div class="pricing-body">
                            <ul>
                                <li>{{ $service['weight'] }} {{__('front.pricing weight')}} K per pakage</li>
                                <li>{{ $service['number'] }}+ {{__('front.pricing number')}} </li>
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
