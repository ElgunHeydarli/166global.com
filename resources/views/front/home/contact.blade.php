@extends('front.layout.layouts')
@section('content')
    <section class="section_top" style="background-image: url('assets/img/02MAINBLOCK.png')">
        <div class="section_big_title">
            <h1>
                Əlaqə
            </h1>
        </div>
    </section>
    <section class="contact_section">
        <div class="container">
            <div class="contact-form">
                <div class="first-container">
                    <div class="info-container">
                        <div><img class="icon"/>
                            <h3>@lang('dil.Location') @endlang</h3>
                            <p>{{$settings->adress}}</p>
                        </div>
                        <div> <img class="icon"/>
                            <h3>@lang('dil.Call us')</h3>
                            <p>{{$settings->phone}}</p>
                        </div>
                        <div><img class="icon"/>
                            <h3>Email</h3>
                            <p>{{$settings->email}}</p>
                        </div>
                    </div>
                </div>
                <div class="second-container">
                    <h2>@lang('dil.Send Us A Message')</h2>
                    <form action="{{route('message.store',app()->getLocale())}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="email-input">Name*</label>
                            <input  name="name" type="text" placeholder="Name" required="required"/>
                        </div>
                        <div class="form-group">
                            <label for="email-input">Enter your email*</label>
                            <input id="email-input" name="email" type="text" placeholder="Eg. example@email.com" required="required"/>
                        </div>
                        <div class="form-group">
                            <label for="phone-input">Enter phone number*</label>
                            <input id="phone-input" type="text" name="phone" placeholder="Eg. +1 800 000000" required="required"/>
                        </div>
                        <div class="form-group">
                            <label for="email-input">Subject*</label>
                            <input id="email-input" name="subject" type="text" placeholder="Subject" required="required"/>
                        </div>
                        <div class="form-group">
                            <label for="message-textarea">Message</label>
                            <textarea id="message-textarea" name="message" placeholder="Write us a message"></textarea>
                        </div>
                        <button type="submit">Send message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
