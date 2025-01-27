@extends('frontend.main_master')
@section('main')

@section('title')
    Home | Nyanaro Portfolio
@endsection
<header class="header">
    <a href="#home" class="logo">Moses<span>Nyanaro</span></a>
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
        <h1>Hi, Its Moses <span>Nyanaro</span></h1>
        <h3 class="text-animation">Im a <span></span></h3>
        <p>A passionate Software Engineer with a strong foundation in web and mobile development. With a strong academic background in Information Technology and a passion for problem-solving,
            I have developed a solid foundation in software engineering principles.
            I have experience in designing and implementing software solutions,
             and I am skilled in a variety of programming languages and technologies.
              I am a quick learner and a team player, and I am always looking for new challenges and opportunities to grow as a developer.

        </p>
        <div class="social-icons">
            <a href="https://www.linkedin.com/in/moses-nyanaro-75a54b224/"><i class="bx bxl-linkedin"></i></a>
            <a href="https://www.instagram.com/_ynanaro?igsh=bG5sZzF6cDZ1cmV4"><i class="bx bxl-instagram-alt"></i></a>
            <a href="https://www.youtube.com/@havenexploration"><i class="bx bxl-youtube"></i></a>
            <a href="https://www.tiktok.com/@ynanaro?_t=ZM-8tQKo8SzorF&_r=1"><i class="bx bxl-tiktok"></i></a>
            <a href="https://github.com/Morexex"><i class="bx bxl-github"></i></a>
        </div>

        <div class="btn-group">
            <a href="#" class="btn">Hire</a>
            <a href="#contact" class="btn">Contact</a>
        </div>
    </div>
    <div class="home-img">
        <img src="{{ asset('frontend/assets/img/portfolio/portfolio.jpg') }}" alt="">
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
                <p><span>Menyenya SDA High School</span></p>
                <p>Kick-started my journey in adulthood, by managing to catapult myself to campus</p>

            </div>

        </div>

        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-date">2023</div>
            <div class="timeline-content">
                <h3>University</h3>
                <p><span>University Of Embu</span></p>
                <p>Start of growth of insterests in different fields though determined to secure a Degree in Information Technology.
                    Here i have been able to gain a lot of knowledge in the field of IT and have been able to gain a lot of experience in the
                    field.
                </p>

            </div>

        </div>

        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-date">2022</div>
            <div class="timeline-content">
                <h3>IT Officer</h3>
                <p><span>Kenya Literature Bureau</span></p>
                <p>As an intern i was dealing with the companies support duties and touble shooting issues within the organisation.
                    During this period is when i gained alot of interest in desktop applications development using vb.net and sql server.
                    I had several project based learning experiences and i was able to work on a project that was aimed at automating the
                    process of generating reports for the organisation.
                </p>

            </div>

        </div>

        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-date">2023</div>
            <div class="timeline-content">
                <h3>Software Engineer | Mobile Developer</h3>
                <p><span>Tech Haven</span></p>
                <p>As a Software Engineer and Flutter Mobile Developer,
                     I design and build cross-platform mobile applications
                      that deliver seamless user experiences. My expertise
                       in Dart and the Flutter framework allows me to create
                        visually appealing and performant apps, while my background
                         in back-end development ensures smooth integration with APIs
                          and databases. I am proficient in agile methodologies,
                           collaborating effectively with teams to transform requirements
                            into functional features, all while maintaining high standards
                             of code quality and testing practices.</p>

            </div>

        </div>

        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-date">2024</div>
            <div class="timeline-content">
                <h3>Full Stack Software Engineer</h3>
                <p><span>Uzapoint Technologies</span></p>
                <p>As a Full Stack Software Engineer, I specialize
                    in creating user-friendly interfaces with Vue.js
                    and Blade, while building robust back-end app-lications
                     using Laravel. My expertise in both SQL
                     and NoSQL databases enables optimized data
                     management. I thrive in collaborative environments,
                     delivering scalable web applications with a focus
                     on performance, security, and responsive design
                     throughout the development lifecycle.</p>

            </div>

        </div>

        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-date">2025</div>
            <div class="timeline-content">
                <h3>Lead Technical Support Engineer</h3>
                <p><span>Uzapoint Technologies</span></p>
                <p>As the Lead Technical Support Engineer at Uzapoint,
                     I manage the technical support team and ensure excellent
                      service for both staff and clients. My responsibilities
                       include writing and reviewing high-quality code, mentoring
                        junior engineers, and addressing technical challenges efficiently.
                         I actively engage with clients to provide tailored support,
                          driving continuous improvement in our processes to align with organizational goals.</p>

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
                        src="{{ asset('frontend/assets/img/images/web.jpg') }}" data-holder-rendered="true">

                <h4>Web Development</h4>
                <p>
                    I specialize in crafting visually appealing and user-friendly websites using HTML, CSS, and JavaScript.
                    With a focus on responsive design, I ensure your website looks great on all devices. My expertise
                    extends to creating dynamic web applications using frameworks like Laravel and Vue.js.
                </p>
            </div>
        </div>

        <div class="service-box">
            <div class="service-info">
                <div class="col-md-6">
                    <img class="img-thumbnail" alt="300x300" width="400"
                        src="{{ asset('frontend/assets/img/images/mobile.jpg') }}" data-holder-rendered="true">
                </div>
                <h4>Mobile App Development</h4>
                <p>
                    I build cross platform mobile applications using Flutter, ensuring a seamless user experience
                    across iOS and Android devices. My expertise in Flutter allows me to create feature-rich apps
                    with a focus on performance and user-friendly interfaces.
                </p>
            </div>
        </div>

        <div class="service-box">
            <div class="service-info">
                <div class="col-md-6">
                    <img class="img-thumbnail" alt="300x300" width="400"
                        src="{{ asset('frontend/assets/img/images/system.jpg') }}" data-holder-rendered="true">
                </div>
                <h4>System Development</h4>
                <p>
                    I specialize in developing custom software solutions tailored to your business needs.
                    From custom web applications to desktop software, I create robust and efficient systems
                    that streamline your operations.
                    My expertise in database design and integration ensures data integrity and
                    seamless data flow.
                    I also provide ongoing support and maintenance to keep your systems running smoothly.
                </p>
            </div>
        </div>

        <div class="service-box">
            <div class="service-info">
                <div class="col-md-6">
                    <img class="img-thumbnail" alt="300x300" width="400"
                        src="{{ asset('frontend/assets/img/images/devops.jpg') }}" data-holder-rendered="true">
                </div>
                <h4>Devops Engineering</h4>
                <p>
                    I specialize in DevOps engineering, ensuring efficient and reliable software delivery.
                    I implement CI/CD pipelines, automate infrastructure provisioning, and monitor system performance.
                    My expertise in containerization and orchestration technologies like Docker and Kubernetes
                    enables scalable and resilient applications.
                </p>
            </div>
        </div>
    </div>
    <div class="rate-card">
        <div class="service-box">
            <div class="service-info">
                <h4>My Rate Card</h4>
                <p>
                    I offer competitive rates for my services, ensuring value for your investment.
                    Please refer to the rate card below for detailed pricing information.
                </p>
            </div>
            <div class="services-offered">
                <div class="service-item">
                    <h5>Web Development</h5>
                    <p>Dynamic Website with a customised dashboard and admin panel</p>
                    <p><strong>Amount:</strong> 70,000 KSH</p>
                    <p><strong>Period:</strong> One-time licence fee plus quaterly maintenace subscription</p>
                </div>
                <div class="service-item">
                    <h5>Mobile App Development</h5>
                    <p>
                        Cross-platform mobile application with a customised dashboard and admin panel
                    </p>
                    <p><strong>Amount:</strong> 100,000 KSh</p>
                    <p><strong>Period:</strong> One-time licence fee plus quaterly maintenace subscription</p>
                </div>
                <div class="service-item">
                    <h5>System Development</h5>
                    <p>
                        Custom software development tailored to your business needs
                    </p>
                    <p><strong>Amount:</strong> 350,000</p>
                    <p><strong>Period:</strong> One-time licence fee plus quaterly maintenace subscription</p>
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
                <h2>Robert Moreka</h2>
                <span>CEO Accura Management</span>
                <h3>+254 728 082029</h3>
                <div class="rating">
                    <i class="bx bxs-star" id="star"></i>
                    <i class="bx bxs-star" id="star"></i>
                    <i class="bx bxs-star" id="star"></i>
                    <i class="bx bxs-star" id="star"></i>
                    <i class="bx bxs-star" id="star"></i>
                </div>
                <p>
                    I had the pleasure of working with Moses on my system development project.
                    His expertise and dedication were evident throughout the process.
                </p>
            </div>

            <div class="testimonial-item">
                <img src="{{ asset('frontend/assets/img/portfolio/profile.jpg') }}" alt="">
                <h2>Caleb Chege</h2>
                <span>CTO Uzapoint Technologies</span>
                <h3>+254 706 173753</h3>
                <div class="rating">
                    <i class="bx bxs-star" id="star"></i>
                    <i class="bx bxs-star" id="star"></i>
                    <i class="bx bxs-star" id="star"></i>
                    <i class="bx bxs-star" id="star"></i>
                    <i class="bx bxs-star" id="star"></i>
                </div>
                <p>
                    A great developer with a keen eye for detail and a passion for creating exceptional user experiences.
                </p>
            </div>

            <div class="testimonial-item">
                <img src="{{ asset('frontend/assets/img/portfolio/moses.jpg') }}" alt="">
                <h2>Esther Nyabate</h2>
                <span>CEO Morecom Solutions</span>
                <h3>0718702921</h3>
                <div class="rating">
                    <i class="bx bxs-star" id="star"></i>
                    <i class="bx bxs-star" id="star"></i>
                    <i class="bx bxs-star" id="star"></i>
                    <i class="bx bxs-star" id="star"></i>
                    <i class="bx bxs-star" id="star"></i>
                </div>
                <p>Cant mention success without your brand coming to perspective. Superb work Nyanaro!</p>
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
        <a href="https://www.linkedin.com/in/moses-nyanaro-75a54b224/"><i class="bx bxl-linkedin"></i></a>
        <a href="https://www.instagram.com/_ynanaro?igsh=bG5sZzF6cDZ1cmV4"><i class="bx bxl-instagram-alt"></i></a>
        <a href="https://www.youtube.com/@havenexploration"><i class="bx bxl-youtube"></i></a>
        <a href="https://www.tiktok.com/@ynanaro?_t=ZM-8tQKo8SzorF&_r=1"><i class="bx bxl-tiktok"></i></a>
        <a href="https://github.com/Morexex"><i class="bx bxl-github"></i></a>
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
        Moses Nyanaro || All rights reserved
    </p>
</footer>

@endsection
