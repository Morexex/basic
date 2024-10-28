@extends('frontend.main_master')
@section('main')

@section('title')
    Home | Cynthia Portfolio
@endsection
<header class="header">
    <a href="#home" class="logo">Cynthia<span>Mutheu</span></a>
    <i class='bx bx-menu' id="menu-icon"></i>
    <nav class="navbar">
        <a href="#home" class="active">Home</a>
        <a href="#education">Education</a>
        <a href="#services">Services</a>
        <a href="#testimonials">Testimonials</a>
        <a href="#contact">Contact</a>
    </nav>
</header>
<section class="home" id="home">
    <div class="home-content">
        <h1>Hi, Its Cynthia <span>Mutheu</span></h1>
        <h3 class="text-animation">Im a <span></span></h3>
        <p>A passionate freelance model and content creator dedicated to capturing the essence of lifestyle and
            creativity. With a keen eye for aesthetics and storytelling, I thrive on producing captivating visuals that
            resonate with audiences. In addition to my modeling and content creation work, I am also the proud owner of
            Cee the Essence, a car rental company where I strive to provide unique experiences on the road. Explore my
            portfolio to see my latest projects, collaborations, and the services I offer. Let’s create something
            extraordinary together!</p>
        <div class="social-icons">
            <a href="#"><i class="bx bxl-twitter"></i></a>
            <a href="#"><i class="bx bxl-linkedin"></i></a>
            <a href="https://www.instagram.com/cee_the_essence?igsh=emI5ODFobWl3N2U0"><i class="bx bxl-instagram-alt"></i></a>
            <a href="#"><i class="bx bxl-youtube"></i></a>
            <a href="#"><i class="bx bxl-tiktok"></i></a>
        </div>

        <div class="btn-group">
            <a href="#" class="btn">Hire</a>
            <a href="#contact" class="btn">Contact</a>
        </div>
    </div>
    <div class="home-img">
        <img src="{{ asset('frontend/assets/img/portfolio/image.jpeg') }}" alt="">
    </div>

</section>

<section class="education" id="education">
    <h2 class="heading">Education</h2>
    <div class="timeline-items">
        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-date">2018</div>
            <div class="timeline-content">
                <h3>High School</h3>
                <p><span>Kiongwani Girls Secondary School</span></p>
                <p>Kick-started my journey in adulthood, by managing to catapult myself to campus</p>

            </div>

        </div>

        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-date">2023</div>
            <div class="timeline-content">
                <h3>University</h3>
                <p><span>University Of Embu</span></p>
                <p>Start of growth of insterests in different fields though determined to secure a Degree in education
                    field</p>

            </div>

        </div>

        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-date">2021</div>
            <div class="timeline-content">
                <h3>Waitress and Content creator</h3>
                <p><span>Wine Tails Hacienda</span></p>
                <p>Growth of my social skills, marketting skills and hospitality in an attempt to discover what drives
                    the people</p>

            </div>

        </div>

        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-date">2022</div>
            <div class="timeline-content">
                <h3>Internship</h3>
                <p><span>Kaigonde Secondary School</span></p>
                <p>As a teacher of always evelving students, i aced the teaching, in the meantime discovering the true
                    scope and power of modelling, as a skill, tool and to go to source of comfort</p>

            </div>

        </div>

        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-date">2023</div>
            <div class="timeline-content">
                <h3>Marketing Agent</h3>
                <p><span>Grand Global Tours</span></p>
                <p>The passion and art of marketing drew roots to my core as i understood the power of good marketing
                    and dedication to audience</p>

            </div>

        </div>

        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-date">2024</div>
            <div class="timeline-content">
                <h3>CEO | Founder</h3>
                <p><span>Cee the Essence</span></p>
                <p>With my fond skills acuired, crafting my own chain of companies to further project the skill to my
                    audience is makes sence.</p>

            </div>

        </div>
    </div>
</section>

<section class="services" id="services">
    <h2 class="heading">Services</h2>
    <div class="services-container">
        <div class="service-box">
            <div class="service-info">
                    <img class="img-thumbnail" alt="200x200" width="400"
                        src="{{ asset('frontend/assets/img/portfolio/modelling.jpg') }}" data-holder-rendered="true">

                <h4>Freelance Modeling</h4>
                <p>Transforming visions into reality, I offer versatile modeling services tailored for fashion,
                    commercial shoots, and creative projects. Let’s collaborate to bring your ideas to life.</p>
            </div>
        </div>

        <div class="service-box">
            <div class="service-info">
                <div class="col-md-6">
                    <img class="img-thumbnail" alt="300x300" width="400"
                        src="{{ asset('frontend/assets/img/portfolio/lending.jpg') }}" data-holder-rendered="true">
                </div>
                <h4>Luxury Car Rentals</h4>
                <p>Experience the freedom of mobility with my flexible car lending solutions. Whether for a special
                    occasion or daily consumption, I provide reliable vehicles to meet your needs.</p>
            </div>
        </div>

        <div class="service-box">
            <div class="service-info">
                <div class="col-md-6">
                    <img class="img-thumbnail" alt="300x300" width="400"
                        src="{{ asset('frontend/assets/img/portfolio/content.jpg') }}" data-holder-rendered="true">
                </div>
                <h4>Content Creation</h4>
                <p>Engaging and original content is at the heart of my services. I specialize in crafting compelling
                    articles, videos, and social media posts that resonate with your audience.</p>
            </div>
        </div>

        <div class="service-box">
            <div class="service-info">
                <div class="col-md-6">
                    <img class="img-thumbnail" alt="300x300" width="400"
                        src="{{ asset('frontend/assets/img/portfolio/marketing.jpg') }}" data-holder-rendered="true">
                </div>
                <h4>Digital Marketing</h4>
                <p>Enhance your online presence with my targeted digital marketing strategies. I focus on maximizing
                    engagement and driving results through Modelling, social media, and advertising campaigns.</p>
            </div>
        </div>
    </div>
    <div class="rate-card">
        <div class="service-box">
            <div class="service-info">
                <h4>My Rate Card</h4>
                <p>Enhance your online presence with my targeted digital marketing strategies. I focus on maximizing engagement and driving results through SEO, social media, and advertising campaigns.</p>
            </div>
            <div class="services-offered">
                <div class="service-item">
                    <h5>Freelence Model</h5>
                    <p>Comprehensive three costume modelling for theme campaigns</p>
                    <p><strong>Amount:</strong> $300</p>
                    <p><strong>Period:</strong> One-time fee</p>
                </div>
                <div class="service-item">
                    <h5>Social Media Marketing</h5>
                    <p>Daily posting, engagement, and strategy development across platforms (Facebook, Instagram, Twitter).</p>
                    <p><strong>Amount:</strong> $500/month</p>
                    <p><strong>Period:</strong> Minimum 3 months</p>
                </div>
                <div class="service-item">
                    <h5>Content Creation</h5>
                    <p>Creation and management of targeted ad campaigns (Google Ads, Facebook Ads).</p>
                    <p><strong>Amount:</strong> $750 per campaign</p>
                    <p><strong>Period:</strong> Campaign duration: 30 days</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials" id="testimonials">
    <div class="testimonials-box">
        <h2 class="heading">Testimonials</h2>
        <div class="wrapper">
            <div class="testimonial-item">
                <img src="{{ asset('frontend/assets/img/portfolio/maish.jpeg') }}" alt="">
                <h2>Maish Photography</h2>
                <div class="rating">
                    <i class="bx bxs-star" id="star"></i>
                    <i class="bx bxs-star" id="star"></i>
                    <i class="bx bxs-star" id="star"></i>
                    <i class="bx bxs-star" id="star"></i>
                    <i class="bx bxs-star" id="star"></i>
                </div>
                <p>Natural model with the art of physic, capturing essence in every move and caption</p>
            </div>

            <div class="testimonial-item">
                <img src="{{ asset('frontend/assets/img/portfolio/profile.jpg') }}" alt="">
                <h2>Moses Nyanaro</h2>
                <div class="rating">
                    <i class="bx bxs-star" id="star"></i>
                    <i class="bx bxs-star" id="star"></i>
                    <i class="bx bxs-star" id="star"></i>
                    <i class="bx bxs-star" id="star"></i>
                    <i class="bx bxs-star" id="star"></i>
                </div>
                <p>My business is now a 5 star rated company thanks to your services. Happy customer!</p>
            </div>

            <div class="testimonial-item">
                <img src="{{ asset('frontend/assets/img/portfolio/moses.jpg') }}" alt="">
                <h2>Morecom Solutions</h2>
                <div class="rating">
                    <i class="bx bxs-star" id="star"></i>
                    <i class="bx bxs-star" id="star"></i>
                    <i class="bx bxs-star" id="star"></i>
                    <i class="bx bxs-star" id="star"></i>
                    <i class="bx bxs-star" id="star"></i>
                </div>
                <p>Cant mention success without your brand coming to perspective. Superb work Cynthia!</p>
            </div>
        </div>
    </div>
</section>

<section class="contact" id="contact">
    <h2 class="heading">Contact <span>Me</span></h2>

    <form method="post" action="{{ route('store.message') }}">
        @csrf
        <div class="input-group">
            <div class="input-box">
                <input name="name" type="text" placeholder="Full Name">
                <input name="email" type="email" placeholder="Email">
            </div>
            <div class="input-box">
                <input name="phone" type="number" placeholder="Phone Number">
                <input name="subject" type="text" placeholder="Subject">
            </div>
        </div>
        <div class="input-group-2">
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Your message"></textarea>
            <input type="submit" value="Send Message" class="btn">
        </div>
    </form>
</section>
<footer class="footer">
    <div class="social">
        <a href="#"><i class="bx bxl-twitter"></i></a>
        <a href="#"><i class="bx bxl-linkedin"></i></a>
        <a href="https://www.instagram.com/cee_the_essence?igsh=emI5ODFobWl3N2U0"><i class="bx bxl-instagram-alt"></i></a>
        <a href="#"><i class="bx bxl-youtube"></i></a>
        <a href="#"><i class="bx bxl-tiktok"></i></a>
    </div>
    <ul class="list">
        <li>
            <a href="#">FAQ</a>
        </li>
        <li>
            <a href="#">Services</a>
        </li>
        <li>
            <a href="#">About Me</a>
        </li>
        <li>
            <a href="#">Contact</a>
        </li>
        <li>
            <a href="#">Testimonials</a>
        </li>
    </ul>
    <p class="copyright">
        Cynthia Mutheu || All rights reserved
    </p>
</footer>

@endsection
