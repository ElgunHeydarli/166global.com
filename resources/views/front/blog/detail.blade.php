@extends('front.layout.layouts')
@section('content')
    <section>
        <div class="container">
            <div class="blog-width">
                <h1>{{$blog->title}}</h1>
                <img src="{{asset('image/'.$blog->image)}}" alt="">
                <p>{!! $blog->description !!}</p>

            </div>
        </div>
    </section>

@endsection
