@extends('front.layout.layouts')
@section('content')
    <section class="section_top" style="background-image: url('{{asset('frontend/')}}')">
        <div class="section_big_title">
            <h1>
                @lang('dil.Haqqımızda') @endlang
            </h1>
        </div>
    </section>
    <section class="about_us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about_us_img">
                        <img src="{{asset('frontend/assets/img/why_us.jpeg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_us_text">
                        <h2 class="">{{$about->title}}</h2>
                        <p>{!! $about->description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section_box our_countries">
        <div class="section_title">
            <h2>@lang('dil.Bizim olduğumuz ölkələr')</h2>
        </div>
        <div class="container">
            <div class="row">
                @foreach($olkes as $olke)
                <div class="col-lg-3">
                    <div class="country_box">
                        <a href="#">
                            <img src="{{asset('image/'.$olke->image)}}" alt="" class="country_img">
                            <h4 class="">
                                {{$olke->title}}
                            </h4>
                            <p>{{$olke->description}}</p>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="why_us_section" style="background-image: url('{{asset('frontend/assets/img/why_us.jpeg')}}')">
        <div class="">
            <div class="row mx-0 px-0">
                <div class="col-lg-6"></div>
                <div class="col-lg-6 px-0">
                    <div class="why_us_container">
                        <div class="why_us_title">
                            <h4 class="">
                                Niyə biz?
                            </h4>
                        </div>
                        <div class="why_us_box">
                            <div class="why_us_item first">
                                <div class="why_us_icon">
                                    <i class="fas fa-arrow-down"></i>
                                </div>
                                <div class="why_us_text">
                                    <h5 class="">
                                        Trusted & Quality Work
                                    </h5>
                                    <p>
                                        Lorem ipsum the dolor sit amet, consectetur adising elit, sed do.the dolor sit amet,
                                        consectetur
                                    </p>
                                </div>
                            </div>
                            <div class="why_us_item second">
                                <div class="why_us_icon">
                                    <i class="fas fa-arrow-down"></i>
                                </div>
                                <div class="why_us_text">
                                    <h5 class="">
                                        Trusted & Quality Work
                                    </h5>
                                    <p>
                                        Lorem ipsum the dolor sit amet, consectetur adising elit, sed do.the dolor sit amet,
                                        consectetur
                                    </p>
                                </div>
                            </div>
                            <div class="why_us_item third">
                                <div class="why_us_icon">
                                    <i class="fas fa-arrow-down"></i>
                                </div>
                                <div class="why_us_text">
                                    <h5 class="">
                                        Trusted & Quality Work
                                    </h5>
                                    <p>
                                        Lorem ipsum the dolor sit amet, consectetur adising elit, sed do.the dolor sit amet,
                                        consectetur
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
