<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">

    <title>Infinity Strategic Business Solutions</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/collective.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">

</head>

<body>
    
    <section id="Home" class="hero-section">
        <header class="header d-flex">

            <div class="brand" style="transition: none; height: auto;">
                <div class="logo" data-aos="fade-up" data-aos-offset="0" >
                    <img src="{{ asset('icons/logo.png') }}" alt="Infinity Logo">
                </div>

                <h2 class="logo_text" data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">
                    INFINITY <br> STRATEGIC BUSINESS <br> SOLUTIONS
                </h2>
            </div>

            <div class="hero">


                <nav class="navbar" data-aos="fade-down" data-aos-offset="0">
                    <!-- Hamburger Icon for Mobile (Left side) -->
                    <button class="hamburger position-absolute top-2 end-0" id="hamburger" type="button" data-bs-toggle="offcanvas" data-bs-target="#navOffcanvas" aria-controls="navOffcanvas" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <!-- Desktop Navigation -->
                    <ul class="navlist" id="navlist">
                        <li><a href="#Home" class="nav_link active">Home</a></li>
                        <li><a href="#about" class="nav_link">Our Essence</a></li>
                        <li><a href="#collective" class="nav_link">The Infinity Collective</a></li>
                        <li><a href="#services" class="nav_link">Services</a></li>
                        <li><a href="{{ url('/articlelist') }}" class="nav_link">Articles</a></li>
                        <li><a href="#contact" class="nav_link">Contact</a></li>
                    </ul>
                </nav>



                <div id="main" class="hero_big_text">
                    <h1 class="hero_title" data-aos="fade-up" data-aos-offset="0">
                        Empowering <span class="bold_hero_text" data-aos="fade-up" data-aos-delay="200"
                            data-aos-offset="0">Purpose-Led Leaders</span> to Build a Better Future
                    </h1>

                    <p class="hero_description" data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">
                        We design data-driven strategies and governance solutions that strengthen organisations, uplift communities, and expand opportunities — with a focused commitment to empowering women and advancing youth.
                    </p>

                    <div class="hero_buttons" data-aos="fade-up" data-aos-offset="0">
                        <a class="white-btn btn" href="#about">Learn more</a>
                        <a class="outline-btn btn" href="#services">Services</a>
                    </div>
                </div>
            </div>

        </header>
    </section>

    <div class="back-to-top" id="backToTop" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
        <i class="fas fa-arrow-up"></i>
    </div>


    <section id="about" class="about">

        <div class="about_background d-flex flex-column">
            <h1 class="about_title" data-aos="fade-up" data-aos-offset="0">
                Our Essence
            </h1>

            <div class="about_slider" data-aos="fade-up" data-aos-offset="0">

                <ul class="icons_list d-flex flex-row gap-3">

                    <li class="list_item" data-index="0">
                        <img src="{{ asset('icons/info.png') }}" alt="Information icon"></img>
                    </li>

                    <li class="list_item" data-index="1">
                        <img src="{{ asset('icons/send.png') }}" alt="Send icon"></img>
                    </li>

                    <li class="list_item" data-index="2">
                        <img src="{{ asset('icons/target.png') }}" alt="Target icon"></img>
                    </li>

                    <li class="list_item" data-index="3">
                        <img src="{{ asset('icons/relationship.png') }}" alt="Relationship icon"></img>
                    </li>
                </ul>

                <h3 id="essence-title">Synopsis</h3>

                <p class="about_description" id="essence-description" data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">
                    Infinity Strategic Business Solutions (Pty) Ltd is a purpose-driven South African consultancy committed to advancing meaningful social and organisational transformation.
                    <br><br>
                    While proudly women-led, we partner inclusively across all sectors to strengthen governance, deepen social impact, and create opportunities for youth and historically disadvantaged groups.
                    <br><br>
                    Our mission is to unlock sustainable growth in organisations and communities by combining data-driven insight, ethical leadership, and innovative development models that create lasting, measurable change.
                </p>
            </div>

            <a class="get_in_touch btn" href="#contact" data-aos="fade-up" data-aos-offset="0">
                Get in touch
            </a>
        </div>


    </section>

    <section id="collective" class="collective">
        <div class="container">
            <h1 class="collective_title" data-aos="fade-up">The Infinity Collective</h1>
            <p class="collective_subtitle" data-aos="fade-up" data-aos-delay="100">
                Meet the visionaries shaping our collective future with wisdom, creativity, and unparalleled expertise.
            </p>
            
            <!-- Profile 1: Charissa Petersen -->
            <div class="profile-card layout-left" data-aos="fade-up">
                <div class="profile-image">
                    <img src="{{ asset('images/charissa.jpg') }}" alt="Charissa Petersen" loading="lazy">
                </div>
                <div class="profile-content">
                    <h2>Charissa Petersen</h2>
                    <h4 class="profile-subtitle">Global executive • Board Member • Social Impact</h4>
                    <p class="profile-bio">
                        With over two decades of experience in strategic leadership and organizational development, Charissa is the driving force behind The Infinity Collective. Her visionary approach and deep commitment to fostering talent have been instrumental in shaping cultures of innovation and excellence across multiple industries.
                    </p>
                    <p class="profile-bio">
                        She believes in a human-centric philosophy, where empowering individuals leads to collective success. Her work focuses on creating sustainable growth models that benefit both the organization and its community.
                    </p>
                    <button class="btn learn-more-btn" data-bs-toggle="modal" data-bs-target="#modalCharissa">Learn More <i class="fas fa-arrow-right"></i></button>
                </div>
            </div>

            <!-- Profile 2: Jackie Erasmus -->
            <div class="profile-card layout-right" data-aos="fade-up" data-aos-delay="200">
                <div class="profile-content">
                    <h2>Jackie Erasmus</h2>
                    <h4 class="profile-subtitle">Organisation Development • Culture Transformation • Coaching</h4>
                    <p class="profile-bio">
                        Jackie brings a unique blend of artistic sensibility and market acumen to the collective. As a celebrated innovator, her work is defined by its ability to merge aesthetic beauty with functional design, creating products and experiences that resonate deeply with audiences. She champions a culture of curiosity and experimentation.
                    </p>
                    <p class="profile-bio">
                        Her passion lies in exploring the intersection of technology and art, pushing the boundaries of what's possible to create truly transformative solutions. Jackie's portfolio is a testament to her belief that great design can inspire change.
                    </p>
                    <button class="btn learn-more-btn" data-bs-toggle="modal" data-bs-target="#modalJackie">Learn More <i class="fas fa-arrow-right"></i></button>
                </div>
                <div class="profile-image">
                    <img src="{{ asset('images/jackie_v2.jpg') }}" alt="Jackie Erasmus" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Modals -->
    <!-- Charissa Modal -->
    <div class="modal fade" id="modalCharissa" tabindex="-1" aria-labelledby="modalCharissaLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCharissaLabel">Charissa Petersen</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-image-wrapper mb-3 text-center">
                         <img src="{{ asset('images/charissa.jpg') }}" alt="Charissa Petersen" style="max-width: 200px; border-radius: 50%;">
                    </div>
                    <p>Charissa Petersen is a seasoned global executive who has served on the boards of multinational organisations and companies with an international footprint. With over two decades of leadership experience, she has driven strategic initiatives across people, culture, technology, governance, and sustainability.</p>
                    <p>She is widely recognised for her role in strengthening industrial stability, shaping ethical leadership, and guiding organisations through complex transformation.</p>
                    <p>Charissa's work spans data-driven social impact solutions, digital workforce resilience, and the intentional empowerment of women and youth. She brings a rare blend of legal expertise, strategic foresight, and deep ethical conviction — leading change at the intersection of industry, innovation, and social justice.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Jackie Modal -->
    <div class="modal fade" id="modalJackie" tabindex="-1" aria-labelledby="modalJackieLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalJackieLabel">Jackie Erasmus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-image-wrapper mb-3 text-center">
                         <img src="{{ asset('images/jackie_v2.jpg') }}" alt="Jackie Erasmus" style="max-width: 200px; border-radius: 50%;">
                    </div>
                    <p>Jackie Erasmus is a seasoned Organisation Development Consultant specialising in Culture Transformation, Executive Leadership Development, and Diversity & Inclusion across Sub-Saharan Africa. She brings deep insight into the social and organisational dynamics of emerging markets, designing impact-driven solutions that strengthen resilience and leadership excellence.</p>
                    <p>Recognised by ASTD for her innovative learning methodologies, Jackie creates transformative programmes in Personal Mastery, Emotional Intelligence, Design Thinking, High-Performance Teams, and Women in Leadership.</p>
                    <p>As an Executive and Action Learning Coach, she enables leaders to shift from operational pressure to reflective, purpose-led leadership. Her international work includes co-creating leadership platforms with BMW Munich, designing a Leadership Academy for British Energy, partnering with the Centre for Creative Leadership, and leading change initiatives with WANO.</p>
                    <p>Jackie is a catalyst for leadership evolution—helping organisations build cultures grounded in accountability, innovation, and human-centred performance.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <section id="services" class="services d-flex">

        <div class="services_image"></div>

        <div class="services_background">
            <h1 class="services_title" data-aos="fade-up" data-aos-offset="0">
                Services
            </h1>

            <div class="services_slider" data-aos="fade-up" data-aos-offset="0">

                <ul class="icons_list d-flex flex-row gap-3">

                    <li class="list_item active-service" data-index="0">
                        <img src="{{ asset('icons/independence.png') }}"></img>
                    </li>

                    <li class="list_item" data-index="1">
                        <img src="{{ asset('icons/people.png') }}"></img>
                    </li>

                    <li class="list_item" data-index="2">
                        <img src="{{ asset('icons/compliant.png') }}"></img>
                    </li>

                    <li class="list_item" data-index="3">
                        <img src="{{ asset('icons/relationship.png') }}"></img>
                    </li>
                </ul>

                <h3 class="services_color_text" id="service-title">Purpose-Led Leadership & Culture Transformation</h3>

                <p class="service_description" id="service-description" data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">
                    We help organisations build leadership cultures anchored in authenticity, empathy, and ethical accountability. Through immersive workshops and data-driven insight tools, we strengthen leaders' ability to create inclusive, high-trust environments where people thrive and purpose drives performance.
                </p>
            </div>

            <a class="get_in_touch btn" href="#contact" data-aos="fade-up" data-aos-offset="0">
                Get in touch
            </a>

        </div>



    </section>

    <section id="contact" class="contact">
        <div class="container"></div>
            <h1 class="contact_title" data-aos="fade-up">Connect</h1>

            <div class="contact_wrapper" data-aos="fade-up" data-aos-delay="200">
                
                <div class="contact_form_container">
                    <h3 class="section_subtitle">Send us a message</h3>
                    <form class="contact_form" action="{{ route('contact') }}" method="post">
                        @csrf
                        <div class="form_group">
                            <i class="fas fa-user input_icon"></i>
                            <input class="contact_input" type="text" name="name" placeholder="Your Name" aria-label="Your Name" required>
                        </div>
                        <div class="form_group">
                            <i class="fas fa-envelope input_icon"></i>
                            <input class="contact_input" type="email" name="email" placeholder="Your Email" aria-label="Your Email" required>
                        </div>
                        <div class="form_group">
                            <i class="fas fa-comment-alt input_icon textarea_icon"></i>
                            <textarea class="contact_input message_input" name="message" placeholder="How can we help you?" aria-label="Your message" required></textarea>
                        </div>
                        <button class="submit_btn" type="submit">
                            Send Message <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>

                <div class="contact_info_container">
                    <h3 class="section_subtitle">Contact Information</h3>
                    
                    <div class="info_item">
                        <div class="icon_box">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info_text">
                            <span>Email Us</span>
                            <a href="mailto:infinitepossibility@infinitystrat.co.za">infinitepossibility@infinitystrat.co.za</a>
                        </div>
                    </div>

                    <div class="info_item">
                        <div class="icon_box">
                            <i class="fab fa-linkedin-in"></i>
                        </div>
                        <div class="info_text">
                            <span>Follow Us</span>
                            <a href="https://www.linkedin.com/company/106268097/" target="_blank">Infinity Strategic Business Solutions</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="site-footer">
        <div class="footer-content">
            <div class="brand-logo-footer">
                <img src="{{ asset('icons/logo.png') }}" alt="Infinity Logo" style="height: 30px;">
                <div class="brand-text-footer">INFINITY STRATEGIC BUSINESS SOLUTIONS</div>
            </div>
            <div class="copyright">
                &copy; {{ date('Y') }} <a href="https://www.myheat.co.za/" target="_blank" rel="noopener" style="text-decoration: none; color: inherit;">MYHEAT</a>. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- Mobile Offcanvas Menu -->
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="navOffcanvas" aria-labelledby="navOffcanvasLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="navOffcanvasLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="mobile-nav-list">
                <li><a href="#Home" class="mobile-nav-link" data-bs-dismiss="offcanvas">Home</a></li>
                <li><a href="#about" class="mobile-nav-link" data-bs-dismiss="offcanvas">Our Essence</a></li>
                <li><a href="#collective" class="mobile-nav-link" data-bs-dismiss="offcanvas">The Infinity Collective</a></li>
                <li><a href="#services" class="mobile-nav-link" data-bs-dismiss="offcanvas">Services</a></li>
                <li><a href="{{ url('/articlelist') }}" class="mobile-nav-link">Articles</a></li>
                <li><a href="#contact" class="mobile-nav-link" data-bs-dismiss="offcanvas">Contact</a></li>
            </ul>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('aos/aos.js') }}"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: false
        });

        @if(session('success'))
            Swal.fire({
                title: 'Success!',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonColor: '#c92b87'
            });
        @endif

        @if(session('error'))
            Swal.fire({
                title: 'Error!',
                text: "{{ session('error') }}",
                icon: 'error',
                confirmButtonColor: '#c92b87'
            });
        @endif
    </script>
</body>

</html>
