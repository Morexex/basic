@extends('frontend.main_master')
@section('main')

@php
    $allfooter = App\Models\Footer::findOrFail(1);
@endphp
<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">{{$services->service_name}}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $services->services_title }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__wrap__icon">
            <ul>
                <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon01.png') }}" alt=""></li>
                <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon02.png') }}" alt=""></li>
                <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon03.png') }}" alt=""></li>
                <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon04.png') }}" alt=""></li>
                <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon05.png') }}" alt=""></li>
                <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon06.png') }}" alt=""></li>
            </ul>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- services-details-area -->
    <section class="services__details">
        <div class="container">
            <div class="row">
                <center>
                    <div class="col-lg-14">
                        <div class="services__details__thumb">
                            <img src="{{ asset($services->services_images) }}" alt="">
                        </div>
                        <div class="services__details__content">
                            <h2 class="title">{{ $services->services_title }}</h2>
                            <p>{!! $services->services_details !!}</p>
                            <div class="services__details__img">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img src="assets/img/images/services_details02.jpg" alt="">
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="assets/img/images/services_details03.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <h2 class="small-title">Service Description</h2>
                            <p>{!! $services->services_details !!}</p>
                        </div>
                    </div>
                </center>


            </div>
        </div>
    </section>
    <!-- services-details-area-end -->


    <!-- contact-area -->
    <section class="homeContact homeContact__style__two">
        <div class="container">
            <div class="homeContact__wrap">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section__title">
                            <span class="sub-title">07 - Say hello</span>
                            <h2 class="title">Any questions? Feel free <br> to contact</h2>
                        </div>
                        <div class="homeContact__content">
                            <p>Our team will reach out to you as soon as the message is received</p>
                            <h2 class="mail"><a href="mailto:Info@webmail.com">{{ $allfooter->email }}</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="homeContact__form">
                            <form method="post" action="{{ route('store.message') }}" class="contact__form">
                                @csrf
                                <input name="name" type="text" placeholder="Enter your name*">
                                <input name="email" type="email" placeholder="Enter your mail*">
                                <input name="subject" type="text" placeholder="Enter your subject*">
                                <input name="phone" type="text" placeholder="Your Phone*">
                                <textarea name="message" id="message" placeholder="Enter your massage*"></textarea>
                                <button type="submit">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

</main>
@endsection
