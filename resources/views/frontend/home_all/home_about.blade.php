@php
    $aboutpage = App\Models\About::find(1) ?? (object) [
        'title' => 'About Us',
        'short_title' => 'We are a creative agency that focuses on design, development, and growth.',
        'short_description' => 'We are a creative agency that focuses on design, development, and growth. We are a creative agency that focuses on design, development, and growth. We are a creative agency that focuses on design, development, and growth.',
    ];
    $allMultiImage = App\Models\MultiImages::all() ?? (object) [
        'multi_image' => 'assets/images/about/about-1.jpg',
    ];
    $allfooter = App\Models\Footer::find(1) ?? (object) [
        'facebook' => '#',
        'twitter' => '#',
        'linkedin' => '#',
        'instagram' => '#',
        'youtube' => '#',
    ];
@endphp



<section id="aboutSection" class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <ul class="about__icons__wrap">

                    @foreach ( $allMultiImage as $item )
                    <li>
                        <img class="light" src="{{ asset($item->multi_image) }}" alt="XD">

                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="about__content">
                    <div class="section__title">
                        <span class="sub-title">01 - About Us</span>
                        <h2 class="title">{{ $aboutpage->title }}</h2>
                    </div>
                    <div class="about__exp">
                        <div class="about__exp__icon">
                            <img src="{{ asset('frontend/assets/img/icons/about_icon.png') }}" alt="">
                        </div>
                        <div class="about__exp__content">
                            <p>{{ $aboutpage->short_title }}</p>
                        </div>
                    </div>
                    <p class="desc">{{ $aboutpage->short_description }}</p>
                    <a href="{{ route('contact.me') }}" class="btn">Reach us Out</a>
                </div>
            </div>
        </div>
    </div>
</section>
