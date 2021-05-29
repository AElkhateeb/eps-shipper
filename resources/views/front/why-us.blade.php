<?php
$serviceId=1;
?>

<section class="gray-bg">
    <div class="container">

        <div class="row">
            <div class="col text-center">
                <div class="sec-heading center">
                    <h2>How It Works?</h2>
                    <p>How to start work with us and working process</p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($pro as $about)
            <div class="col-lg-4 col-md-4">
                <div class="middle-icon-features">
                    <div class="middle-icon-features-item">
                        <div class="middle-icon-large-features-box"><i class="fa {{$about['link1']}} text-warning"></i><span class="steps bg-warning">0{{ $serviceId }}</span></div>
                        <div class="middle-icon-features-content">
                            <h4>{{$about['title']}}</h4>
                            <p>{!!$about['text']!!}</p>
                        </div>
                    </div>
                </div>
            </div>
                <?php $serviceId++; ?>
            @endforeach

        </div>

    </div>
</section>
<div class="clearfix"></div>
