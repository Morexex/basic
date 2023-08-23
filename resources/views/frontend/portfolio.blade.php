@extends('frontend.main_master')
@section('main')

@section('title')
    Portfolio | TechHaven
@endsection

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
                        <h2 class="title">Portfolio Page</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
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

     <!-- portfolio-area -->
     <section class="portfolio__inner">
        <div class="container">

            <div class="portfolio__inner__active">

                @foreach($portfolio as $item)
                <div class="portfolio__inner__item grid-item cat-two cat-three">
                    <div class="row gx-0 align-items-center">
                        <div class="col-lg-6 col-md-10">
                            <div class="portfolio__inner__thumb">
                                <a href="{{ route('portfolio.details',$item->id)}}">
<img src="{{ asset($item->portfolio_image) }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-10">
                            <div class="portfolio__inner__content">
<h2 class="title"><a href="{{ route('portfolio.details',$item->id)}}">{{$item->portfolio_title}}</a></h2>
                        <p>{!! Str::limit($item->portfolio_description, 200) !!}  </p>
    <a href="{{ route('portfolio.details',$item->id)}}" class="link">View Case Study</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach



            </div>

        </div>
    </section>
    <!-- portfolio-area-end -->

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
