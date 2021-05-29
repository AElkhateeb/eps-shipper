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

@stop
