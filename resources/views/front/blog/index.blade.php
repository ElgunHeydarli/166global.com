@extends('front.layout.layouts')
@section('content')
    <section class="section_top" style="background-image: url('assets/img/02MAINBLOCK.png')">
        <div class="section_big_title">
            <h1>
                Xəbərlər
            </h1>
        </div>
    </section>
    <section class="blog-section blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach($blogs as $blog)
                        <div class="col-lg-4">
                            <div class="blog-box">
                                <a href="{{ route('blog-detail' ,[app()->getLocale() ,$blog->{'slug_'.app()->getLocale()}]) }}"><img
                                        src="{{asset('image/'.$blog->image)}}"
                                        alt=""></a>
                                <div class="blog-text">
                                    <a href="{{ route('blog-detail' ,[app()->getLocale() ,$blog->{'slug_'.app()->getLocale()}]) }}">
                                        <h4>{{$blog->title}}
                                        </h4>
                                        <p>{!! \Illuminate\Support\Str::limit($blog->description,100) !!}
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
