<section id="section-features">
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h2 class="wow fadeIn" data-wow-delay="0">Why Choose Us?
                    <span>Find reasons to choose us as your freight partner</span>
                </h2>
                <div class="small-border wow flipInY" data-wow-delay=".2s" data-wow-duration=".8s"></div>
            </div>
            @foreach($pro as $about)

                <div class="col-md-6">
                    <div class="box-with-icon-left">
                        <i class="fa {{$about['link1']}} icon-big"></i>
                        <div class="text">
                            <h2>{{$about['title']}}</h2>
                            <p>{!!$about['text']!!} </p>
                            <div class="divider-single"></div>
                        </div>
                    </div>
                </div>
            <!-- end .item -->
            @endforeach
            <div class="clearfix"></div>

        </div>
    </div>
</section>
