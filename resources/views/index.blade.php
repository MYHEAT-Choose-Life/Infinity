<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ifinity Strategic Business Solutions</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

</head>
<body>
   <section class="hero-section">
        <header class="header d-flex"> 

            <div class="brand">
                <div class="logo" data-aos="fade-up" data-aos-offset="0">
                    <img src="{{ asset('icons/logo.png') }}" alt="Infinity Logo">
                </div>

                <h2 class="logo_text" data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">
                    INFINITY STRATEGIC BUSINESS SOLUTIONS
                </h2>
            </div>

            <div class="hero">

                
                <nav class="navbar" data-aos="fade-down" data-aos-offset="0">
                    <ul class="navlist" id="navlist">
                        <li><a href="#" class="nav_link active">Home</a></li>
                        <li><a href="#about" class="nav_link">About us</a></li>
                        <li><a href="#services" class="nav_link">Services</a></li>
                        <li><a href="{{ url('/articlelist') }}" class="nav_link">Articles</a></li>
                        <li><a href="#contact" class="nav_link">Contact</a></li>
                    </ul>

                     <!-- Hamburger Icon -->
                    <div class="hamburger" id="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </nav>

                <div class="hero_big_text">
                    <h1 class="hero_title" data-aos="fade-up" data-aos-offset="0">
                        Empowering <span class="bold_hero_text" data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">women & youth</span> in business
                    </h1>
                
                    <p class="hero_description" data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">
                        Developing creative solutions to address social challenges and improve governance and compliance.
                    </p>

                    <div class="hero_buttons" data-aos="fade-up" data-aos-offset="0">
                        <a class="white-btn btn" href="#about">Learn more</a>
                        <a class="outline-btn btn" href="#services">Services</a>
                    </div>
                </div>
            </div>

        </header>
    </section>


    <section id="about" class="about">

                <div class="about_background d-flex flex-column">
                    <h1 class="about_title" data-aos="fade-up" data-aos-offset="0">
                        About
                    </h1>

                    <div class="about_slider" data-aos="fade-up" data-aos-offset="0">

                        <ul class="icons_list d-flex flex-row gap-3">

                             <li class="list_item">
                                <img src="{{ asset('icons/info.png') }}"></img>
                            </li>

                            <li class="list_item">
                                <img src="{{ asset('icons/send.png') }}"></img>
                            </li>

                            <li class="list_item">
                                <img src="{{ asset('icons/target.png') }}"></img>
                            </li>

                            <li class="list_item">
                                <img src="{{ asset('icons/diamond (1).png')}}"></img>
                            </li>
                        </ul>

                        <h3>Synopsis</h3>

                        <p class="about_description" data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">
                            Ifinity Strategic Business Solutions (Pty) Ltd is a Female Empowered, Female Driven South African organization dedication 
                            to driving transformative change through meaningful impact and purpose.Our mission is to empower women, foster youth development,
                            and spearhead social impact projects that create sustainable growth and positive change in industries and communities across South Africa.
                        </p>
                    </div>

                    <a class="get_in_touch btn" href="#contact" data-aos="fade-up" data-aos-offset="0">
                        Get in touch
                    </a>
                </div>

           
    </section>

    <section id="services" class="services d-flex">

                <div class="services_image"></div>
        
                <div class="services_background">
                    <h1 class="services_title" data-aos="fade-up" data-aos-offset="0">
                        Services
                    </h1>

                    <div class="services_slider" data-aos="fade-up" data-aos-offset="0">

                        <ul class="icons_list d-flex flex-row gap-3">

                            <li class="list_item">
                                <img src="{{asset('icons/independence.png')}}"></img>
                            </li>

                            <li class="list_item">
                                <img src="{{ asset('icons/people.png')}}"></img>
                            </li>

                            <li class="list_item">
                                <img src="{{ asset('icons/compliant.png') }}"></img>
                            </li>

                            <li class="list_item">
                                <img src="{{ asset('icons/relationship.png') }}"></img>
                            </li>
                        </ul>

                        <h3 class="services_color_text">Employment Relations Mediation</h3>

                        <p class="service_description" data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">
                           Our mediation services help resolve workplace conflicts through meaningful dialogue by adopting 
                           a mutual gains approach. We aim to create <span class="gold_text">harmonious work environments that 
                            support employee well-being</span> and organizational effectiveness by assisting organizations to understand
                            the social impact challenges which create barriers to workplace engagement
                        </p>
                    </div>

                    <a class="get_in_touch btn" href="#contact" data-aos="fade-up" data-aos-offset="0">
                        Get in touch
                    </a>

                </div>

                

    </section>

    <section id="contact" class="contact">
        

                <h1 class="contact_title" data-aos="fade-up" data-aos-offset="0">
                        Get in touch
                </h1>

                <div class="contact_section mt-5 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">

                    <form class="contact_form d-flex flex-column gap-1" action="{{ route('contact') }}" method="post">
                        @csrf
                        <input class="name" type="text" name="name" placeholder="John Doe">
                        <input class="email" type="email" name="email" placeholder="john@doe.com">
                        <textarea class="message" type="text" name="message" placeholder="How can we help you?"></textarea>
                        <button class="submit btn" type="submit">
                        Submit
                        </button>
                    </form>

                    <div class="line" style="border-left: 1px solid white; height: 250px;"></div>
                

                    <div class="contact_info">
                        <h1 class="contact_phone_number">
                            +27 082 000 0000
                        </h1>

                        <h1 class="contact_email">
                            info@infinitysbs.co.za
                        </h1>

                        <div class="socials">
                            <i class="fab fa-facebook fa-2x" style="color: beige"></i>
                            <i class="fab fa-instagram fa-2x" style="color: beige"></i>
                        </div>
                    </div>
                </div>
           
                
    </section>


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('aos/aos.js')}}"></script>
    <script src="{{ asset('js/main.js')}}" defer></script>
    <script>
    AOS.init({ duration: 1000, once: false });
  </script>
</body>
</html>