@extends('frontend.main_master')
@section('main')

@section('title')
    Home | Cee The Essence
@endsection

@php
    $allfooter = App\Models\Footer::find(1) ?? (object) [
        'email' => 'updateyouremail.gmail.com',
    ];
@endphp

 <!-- banner-area -->
 @include('frontend.home_all.home_slide')
<!-- banner-area-end -->

<!-- about-area -->
@include('frontend.home_all.home_about')
<!-- about-area-end -->

<!-- services-area -->
@include('frontend.home_all.home_services')
<!-- services-area-end -->

<!-- work-process-area -->
<section class="work__process">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section__title text-center">
                    <span class="sub-title">03 - Working Process</span>
                    <h2 class="title">This are the steps our company takes to address your ticket</h2>
                </div>
            </div>
        </div>
        <div class="row work__process__wrap">
            <div class="col">
                <div class="work__process__item">
                    <span class="work__process_step">Step - 01</span>
                    <div class="work__process__icon">
                        <img class="light" src="{{ asset('frontend/assets/img/icons/wp_light_icon01.png') }}" alt="">
                        <img class="dark" src="{{ asset('frontend/assets/img/icons/wp_icon01.png') }}" alt="">
                    </div>
                    <div class="work__process__content">
                        <h4 class="title">Initial Inquiry and Booking</h4>
                        <p>Collect details from the client regarding their needs,e.g., type of vehicle, rental duration, pick-up/drop_off locations,
                            Offer a selection of available vehicles based of the client’s requirements,
                            and Securing the reservation by confirming the vehicle, rental period, and cost. This may involve a deposit or full payment.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="work__process__item">
                    <span class="work__process_step">Step - 02</span>
                    <div class="work__process__icon">
                        <img class="light" src="{{ asset('frontend/assets/img/icons/wp_light_icon02.png') }}" alt="">
                        <img class="dark" src="{{ asset('frontend/assets/img/icons/wp_icon02.png') }}" alt="">
                    </div>
                    <div class="work__process__content">
                        <h4 class="title">Preparation and Confirmation</h4>
                        <p>Reconfirm the booking details with the client, including pick-up and drop_off times and locations.
                            Ensure the vehicle is clean, serviced, and ready to be used. Checking any maintenance issues and resolve them beforehand.
                            Prepare necessary documentation, including the rental agreement, insurance coverage details, and any required identification or payment information.<p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="work__process__item">
                    <span class="work__process_step">Step - 03</span>
                    <div class="work__process__icon">
                        <img class="light" src="{{ asset('frontend/assets/img/icons/wp_light_icon03.png') }}" alt="">
                        <img class="dark" src="{{ asset('frontend/assets/img/icons/wp_icon03.png') }}" alt="">
                    </div>
                    <div class="work__process__content">
                        <h4 class="title">Pick-Up Process</h4>
                        <p>Welcome the client at the designated pick-up location. This could be at a rental office, airport, or other agreed-upon spot.
                            Conduct a walk-around inspection of the vehicle with the client to note any pre-existing damage and explain key features.
                            Go over the rental agreement with the client, ensuring they understand the terms, conditions, and any additional fees.
                            Provide the client with the vehicle keys and any necessary documentation.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="work__process__item">
                    <span class="work__process_step">Step - 04</span>
                    <div class="work__process__icon">
                        <img class="light" src="{{ asset('frontend/assets/img/icons/wp_light_icon04.png') }}" alt="">
                        <img class="dark" src="{{ asset('frontend/assets/img/icons/wp_icon04.png') }}" alt="">
                    </div>
                    <div class="work__process__content">
                        <h4 class="title">Return Process</h4>
                        <p>Guide the client where and how to retur the vehicle. This might be a specific drop_off location or instructions returning the vehicle after hours.
                            Conduct a post-rental inspection of the vehicle to check any damage or excessive wear. Compare with the initial condition report.
                            Process any additional charges where necessary e.g., extra mileage or damages and finalize the billing.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- work-process-area-end -->

<!-- portfolio-area -->
@include('frontend.home_all.home_portfolio')
<!-- portfolio-area-end -->

<!-- partner-area -->
<section class="partner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <ul class="partner__logo__wrap">
                    <li>
                        <img class="light" src="{{ asset('frontend/assets/img/icons/lexus.png') }}" alt="">
                        <img class="dark" src="{{ asset('frontend/') }}assets/img/icons/lexus.png" alt="">
                    </li>
                    <li>
                        <img class="light" src="{{ asset('frontend/assets/img/icons/bentley.png') }}" alt="">
                        <img class="dark" src="{{ asset('frontend/assets/img/icons/bentley.png') }}" alt="">
                    </li>
                    <li>
                        <img class="light" src="{{ asset('frontend/assets/img/icons/benz.png') }}" alt="">
                        <img class="dark" src="{{ asset('frontend/assets/img/icons/benz.png') }}" alt="">
                    </li>
                    <li>
                        <img class="light" src="{{ asset('frontend/assets/img/icons/bmw.png') }}" alt="">
                        <img class="dark" src="{{ asset('frontend/assets/img/icons/bmw.png') }}" alt="">
                    </li>
                    <li>
                        <img class="light" src="{{ asset('frontend/assets/img/icons/honda.png') }}" alt="">
                        <img class="dark" src="{{ asset('frontend/assets/img/icons/honda.png') }}" alt="">
                    </li>
                    <li>
                        <img class="light" src="{{ asset('frontend/assets/img/icons/mazda.png') }}" alt="">
                        <img class="dark" src="{{ asset('frontend/assets/img/icons/mazda.png') }}" alt="">
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="partner__content">
                    <div class="section__title">
                        <span class="sub-title">05 - partners</span>
                        <h2 class="title">We are proud to have a various variety of leasing car models</h2>
                    </div>
                    <p>Looking to hire a car? Look no further! We offer a wide range of high-quality vehicles for all your transportation needs. Whether you're planning a road trip, need a car for a special occasion, or simply want to upgrade your daily commute, we've got you covered.</p>
                    <p>Our fleet includes a variety of models to suit your preferences and budget. From compact cars for city driving to spacious SUVs for family adventures, we have the perfect vehicle for every occasion. All our cars are well-maintained, clean, and ready to hit the road.</p>
                    <p>With our easy booking process, you can quickly reserve your desired car and choose the pick-up and drop-off locations that are convenient for you. Our friendly and professional staff will ensure a smooth and hassle-free experience from start to finish.</p>
                    <p>Dont miss out on the opportunity to explore new destinations, create unforgettable memories, and enjoy the freedom of having your own wheels. Start your car hire journey with us today!</p>
                    <a href="contact.me" class="btn">Start a conversation</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- partner-area-end -->

<!-- testimonial-area -->

@php
    $allMultiImage = App\Models\MultiImages::all();
@endphp
<section class="testimonial">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 order-0 order-lg-2">
                <ul class="testimonial__avatar__img">
                    @foreach ( $allMultiImage as $item )
                    <li>
                        <img class="light" src="{{ asset($item->multi_image) }}" alt="XD">

                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="testimonial__wrap">
                    <div class="section__title">
                        <span class="sub-title">06 - Client Feedback</span>
                        <h2 class="title">Happy clients feedback</h2>
                    </div>
                    <div class="testimonial__active">
                        <div class="testimonial__item">
                            <div class="testimonial__icon">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <div class="testimonial__content">
                                <p>We are extremely satisfied with the services provided by Cee The Essence. The team is truly expert, committed, and experienced in the financial markets. Their dedication to achieving continuous success is commendable.</p>
                                <p>We highly recommend Cee The Essence for all your transportation needs. Their wide range of high-quality vehicles, easy booking process, and friendly staff make them the perfect choice. Whether you're planning a road trip or need a car for a special occasion, Cee The Essence has got you covered.</p>
                                <p>Don't miss out on the opportunity to explore new destinations, create unforgettable memories, and enjoy the freedom of having your own wheels. Start your car hire journey with Cee The Essence today!</p>
                                <div class="testimonial__avatar">
                                    <span>Moses Nyanaro</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__item">
                            <div class="testimonial__icon">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <div class="testimonial__content">
                                <p>I am extremely satisfied with the services provided by Cee The Essence. The team is truly expert, committed, and experienced in the financial markets. Their dedication to achieving continuous success is commendable.</p>
                                <p>I highly recommend Cee The Essence for all your transportation needs. Their wide range of high-quality vehicles, easy booking process, and friendly staff make them the perfect choice. Whether you're planning a road trip or need a car for a special occasion, Cee The Essence has got you covered.</p>
                                <p>Don't miss out on the opportunity to explore new destinations, create unforgettable memories, and enjoy the freedom of having your own wheels. Start your car hire journey with Cee The Essence today!</p>
                                <div class="testimonial__avatar">
                                    <span>Wanjala Khamisi</span>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="testimonial__arrow"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-area-end -->

<!-- blog-area -->
@include('frontend.home_all.home_blog')
<!-- blog-area-end -->

<!-- contact-area -->
<section class="homeContact">
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

@endsection
