<section >
    <div class="container">
    @foreach($about as $about)
        <!-- row Start -->
        <div class="row align-items-center">

            <div class="col-lg-6 col-md-6">
                <img src="{{URL::asset($about['media_url'])}}" class="img-fluid" alt="" />
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="story-wrap explore-content">

                    <h2>{{$about['title']}}</h2>
                    {!!$about['text']!!}
                </div>
            </div>

        </div>
        <!-- /row -->
        @endforeach
    </div>

</section>
