<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="pxdraft">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Nick Spanos ,  Front end Developer">
    <meta name="description" content="Nick Spanos  Developer">
    <!-- title -->
    <title>NickPort  </title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- theme css -->
    <link href="assets/css/style.css?v=1.5" rel="stylesheet">

    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}

        if(localStorage.getItem('consentMode') === null){
            gtag('consent', 'default', {
                'ad_storage': 'denied',
                'analytics_storage': 'denied',
                'personalization_storage': 'denied',
                'functionality_storage': 'denied',
                'security_storage': 'denied',
            });
        } else {
            gtag('consent', 'default', JSON.parse(localStorage.getItem('consentMode')));
        }
    </script>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'G-KXKJFX8HCQ');</script>
    <!-- End Google Tag Manager -->

</head>
<!-- Body Start -->

<body>
<div id="cookie-consent-banner" class="cookie-consent-banner">
    <h3>Cookie settings</h3>
    <p>We use cookies to provide you with the best possible experience. They also allow us to analyze user behavior in order to constantly improve the website for you.</p>
    <button id="btn-accept-all" class="cookie-consent-button btn-success">Accept All</button>
    <button id="btn-accept-some" class="cookie-consent-button btn-outline">Accept Selection</button>
    <button id="btn-reject-all" class="cookie-consent-button btn-grayscale">Reject All</button>
    <div class="cookie-consent-options">
        <label><input id="consent-necessary" type="checkbox" value="Necessary" checked disabled>Necessary</label>
        <label><input id="consent-analytics" type="checkbox" value="Analytics" checked>Analytics</label>
        <label><input id="consent-preferences" type="checkbox" value="Preferences" checked>Preferences</label>
        <label><input id="consent-marketing" type="checkbox" value="Marketing">Marketing</label>
    </div>
</div>
<div class="header-top-fixed one-page-nav">
    <div class="container">
        <!-- Brand -->
        <div class="logo">
            <a class="navbar-brand" href="index.php">
                <img class="logo-light" title="" alt="NickPort Logo" src="assets/img/logo-light.png">
            </a>

        </div>
        <!-- / -->
        <ul class="main-menu">
            <li>
                <a data-scroll-nav="0" href="#home">
                    Home
                </a>
            </li>
            <li>
                <a data-scroll-nav="1" href="#about">
                    About Me
                </a>
            </li>
            <li>
                <a data-scroll-nav="2" href="#project">
                    Projects
                </a>
            </li>

            <li>
                <a data-scroll-nav="4" href="#contactus">
                    Contact
                </a>
            </li>
        </ul>
        <!-- Top Menu -->
        <div class="d-flex">
            <a class="px-btn d-none d-lg-inline-flex" data-scroll-nav="4" href="#contactus">Lets' Talk</a>
            <button class="toggler-menu d-lg-none">
                <span></span>
            </button>
        </div>
        <!-- / -->
    </div>
</div>
<!-- End Header -->
<!-- Main -->
<main>
    <!-- Home Section -->
    <section class="home-section" id="home" data-scroll-index="0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hs-text-box">
                        <h6><span>Nick Spanos</span></h6>
                        <h1>Hey! I’m Nick</h1>
                        <h2>A <span id="type-it"></span></h2>
                        <p class="text">Exploring PHP, React, and React Native. A tech enthusiast eager to innovate and
                            create !!</p>
                        <div class="btn-bar d-flex align-items-sm-center flex-column flex-sm-row">
                            <a class="px-btn"  href="SPANOS_NICK.pdf" download><span>Download My CV</span> <i class="bi-arrow-right"></i> </a>
                            <div class="social-icon ps-sm-4 pt-4 pt-sm-0 d-flex justify-content-center justify-content-sm-start">
                                <a class="facebook" href="https://www.facebook.com/nickspanos55"><i
                                            class="fab fa-facebook-f"></i></a>
                                <a class="dribbble" href="https://github.com/Spanosnick"><i
                                            class="fab fa-github"></i></a>
                                <a class="linkedin m-0" href="https://www.linkedin.com/in/spanos-nikolaos/"><i
                                            class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hs-banner">
                        <img src="assets/img/home-banner.png" title="" alt="Nick Spanos ">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Home Section -->
    <!-- Section -->
    <div class="py-3 py-md-4 brand-section gray-bg d-none">
        <div class="container">
            <div class="owl-carousel eq-height" data-items="5" data-nav-dots="false" data-lg-items="5" data-md-items="4"
                 data-sm-items="3" data-xs-items="2" data-space="15" data-autoplay="true">
                <div class="p-3 text-center d-flex align-items-center justify-content-center w-100">
                    <img src="assets/img/brand-1.svg" title="" alt="logo1">
                </div>
                <div class="p-3 text-center d-flex align-items-center justify-content-center w-100">
                    <img src="assets/img/brand-2.svg" title="" alt="logo2">
                </div>
                <div class="p-3 text-center d-flex align-items-center justify-content-center w-100">
                    <img src="assets/img/brand-1.svg" title="" alt="logo3">
                </div>
                <div class="p-3 text-center d-flex align-items-center justify-content-center w-100">
                    <img src="assets/img/brand-2.svg" title="" alt="logo4">
                </div>
                <div class="p-3 text-center d-flex align-items-center justify-content-center w-100">
                    <img src="assets/img/brand-1.svg" title="" alt="logo5">
                </div>
                <div class="p-3 text-center d-flex align-items-center justify-content-center w-100">
                    <img src="assets/img/brand-2.svg" title="" alt="logo6">
                </div>
                <div class="p-3 text-center d-flex align-items-center justify-content-center w-100">
                    <img src="assets/img/brand-1.svg" title="" alt="logo7">
                </div>
            </div>
        </div>
    </div>
    <!-- End Section -->
    <!-- Section -->
    <section class="about-section section" id="about" data-scroll-index="1">
        <div class="container">
            <div class="effect-1">
                <img src="assets/img/effect-1.svg" title="" alt="circle 1">
            </div>
            <div class="effect-2">
                <img src="assets/img/effect-2.svg" title="" alt=" circle 2">
            </div>
            <div class="row align-items-center justify-content-center gy-5">
                <div class="col-lg-6 col-xl-5">
                    <div class="about-banner text-center">
                        <img src="assets/img/about-banner2.jpg" title="" alt="About Image">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5 px-lg-5">
                    <div class="about-text">
                        <div class="section-heading">
                            <h6><span>ABOUT ME</span></h6>
                            <h2>SOME <span>INSIGHTS  </span> ABOUT ME!</h2>
                        </div>
                        <p>My name is Nick I am 24 years
                            old and my passion is to
                            create beautiful websites
                            and web apps.</p>

                        <p>After immersing myself in the world of programming for the past 1.5 years,
                            I've made a profound realization. I've discovered a deep-seated love for creating and
                            developing designs that seamlessly blend form and function. It's the artistry of web and
                            mobile interfaces that truly captivates me </p>


                        <div class="btn-bar">
                            <a class="px-btn" href="#contactus"><span>Get in touch</span> <i class="bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section -->
    <!-- Section -->
    <section class="project-section section gray-bg" id="project" data-scroll-index="2">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="section-heading">
                        <h6><span>My Work</span></h6>
                        <h2>RECENT PROJECT</h2>
                    </div>
                </div>
            </div>
            <div class="owl-carousel lightbox-gallery" data-items="3" data-loop="false" data-nav-dots="true"
                 data-lg-items="2" data-md-items="2" data-sm-items="1" data-xs-items="1" data-space="24"
                 data-autoplay="false">
                <div class="project-box">
                    <div class="project-media">
                        <img src="assets/img/nutriscan.jpg" title="" alt="NutriScanner">
                    </div>
                    <div class="project-body">
                        <div class="text">
                            <h5>NutriScan</h5>
                            <span>My Personal Project with React</span>
                        </div>
                        <div class="link">
                            <a class="p-link " target="_blank" href="https://nutriscan.nickport.com"><i class="bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>

                <div class="project-box">
                    <div class="project-media">
                        <img src="assets/img/quote-app.jpg" title="" alt="Quote Of The Day App ">
                    </div>
                    <div class="project-body">
                        <div class="text">
                            <h5>Quote Of The Day App</h5>
                            <span>React App with quotes from API</span>
                        </div>
                        <div class="link">
                            <a class="p-link " target="_blank" href="https://nickport.com/quotes/"><i class="bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="project-box">
                    <div class="project-media">
                        <img src="assets/img/dinopizza.jpg" title="" alt="Dino Pizza Project ">
                    </div>
                    <div class="project-body">
                        <div class="text">
                            <h5> Dino Pizza Website</h5>
                            <span>This is the first my first project as freelancer</span>
                        </div>
                        <div class="link">
                            <a class="p-link " target="_blank" href="https://dinopizza.gr/"><i class="bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="project-box">
                    <div class="project-media">
                        <img src="assets/img/podcast-project.jpg" title="" alt="Tech Talk Hub Project ">
                    </div>
                    <div class="project-body">
                        <div class="text">
                            <h5>Podcast Website</h5>
                            <span>Developed a podcast website</span>
                        </div>
                        <div class="link">
                            <a class="p-link " target="_blank" href="https://techtalkhub.gr/"><i class="bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="project-box">
                    <div class="project-media">
                        <img src="assets/img/todoApp.jpg" title="" alt="Firs React App">

                    </div>
                    <div class="project-body">
                        <div class="text">
                            <h5>Todo App</h5>
                            <span>First React  App</span>
                        </div>
                        <div class="link">
                            <a class="p-link " href="todoApp"><i class="bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Section -->
    <!-- Section -->
    <section class="section d-none" id="services" data-scroll-index="3">
        <div class="container">
            <div class="section-heading">
                <h6><span> SERVICES</span></h6>
                <h2>Design <span>services</span> I am providing</h2>
            </div>
            <div class="row gy-5">
                <div class="col-sm-6 col-lg-3">
                    <div class="services-box" style="background-image: url(assets/img/service-01.jpg);">
                        <div class="services-body">
                            <div class="icon">
                                <i class="bi-brush-fill"></i>
                            </div>
                            <h5>Website Design</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore.</p>
                            <div class="rating">
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-half"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="services-box" style="background-image: url(assets/img/service-02.jpg);">
                        <div class="services-body">
                            <div class="icon">
                                <i class="bi-code-square"></i>
                            </div>
                            <h5>Website Design</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore.</p>
                            <div class="rating">
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-half"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="services-box" style="background-image: url(assets/img/service-03.jpg);">
                        <div class="services-body">
                            <div class="icon">
                                <i class="bi-speedometer2"></i>
                            </div>
                            <h5>SEO Marketing</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore.</p>
                            <div class="rating">
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-half"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="services-box" style="background-image: url(assets/img/service-03.jpg);">
                        <div class="services-body">
                            <div class="icon">
                                <i class="bi-palette"></i>
                            </div>
                            <h5>Graphic Design</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore.</p>
                            <div class="rating">
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-half"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section -->
    <!-- Section -->
    <section class="section gray-bg">
        <div class="container">
            <div class="section-heading">
                <h6><span>Experience</span></h6>
                <h2>My Work <span>Experience</span></h2>
            </div>
            <div class="row gy-3">
                <div class="col-12">
                    <div class="ex-box">
                        <div class="row gy-4">
                            <div class="col-md-4 col-lg-3">
                                <div class="ex-left">
                                    <h4>Front-end Developer</h4>
                                    <span>TechIns | Hybrid</span>
                                    <p>Feb 2022 - Nov 2024</p>
                                    <label>Full time</label>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-9">
                                <div class="ex-right">
                                    <h5>About TechIns</h5>
                                    <p class="m-0">TechIns was a big 'step up' as my career path. I'm passionate about our
                                        mission and dedicated to our shared goals, and I'm eager to drive our team's
                                        development efforts to new heights. Together, we'll continue to innovate, create
                                        outstanding solutions, and set new benchmarks for excellence.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="ex-box">
                        <div class="row gy-4">
                            <div class="col-md-4 col-lg-3">
                                <div class="ex-left">
                                    <h4>WordPress Developer</h4>
                                    <span>Pontemedia | In House </span>
                                    <p>Jul 2021 - Jan 2022</p>
                                    <label>Internship</label>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-9">
                                <div class="ex-right">
                                    <h5>About <b> Pontemedia </b></h5>
                                    <p class="m-0">The Internship at Pontemedia was my first experience as a developer
                                        and I learn about
                                        WordPress (CMS), WooCommerce, and SEO of a website. It was a wonderful
                                        experience to work with such a great and helpful team.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section -->

    <!-- Contact Section -->
    <section data-scroll-index="4" id="contactus" class="section contactus-section">
        <div class="container">
            <div class="contactus-box rounded oveflow-hidden gray-bg">
                <div class="row g-0 p-4 p-lg-5">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-8">
                        <div class="contactus-title">
                            <h5>Let’s Discuss Your Project</h5>
                            <p class="m-0">Always available for freelancing if the right project comes along, Feel free
                                to contact me.</p>
                        </div>
                    </div>
                </div>
                <div class="row g-0 contactus-form p-4 p-lg-5 flex-row-reverse">
                    <div class="col-lg-8">
                        <div class="contact-form">
                            <form id="contact-form" class="php-email-form" method="POST">
                                <div class="row gx-3 gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">First name</label>
                                            <input name="name" id="name" placeholder="Name *" class="form-control"
                                                   type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Your Email</label>
                                            <input name="email" id="email" placeholder="Email *" class="form-control"
                                                   type="email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label">Subject</label>
                                            <input name="subject" id="subject" placeholder="Subject *"
                                                   class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Your message</label>
                                            <textarea name="message" id="message" placeholder="Your message *" rows="4"
                                                      class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="send">
                                            <div class="text-center d-none" id="loader">
                                                <div class="spinner-border " role="status">
                                                </div>
                                            </div>
                                            <button class="px-btn w-100" type="button" onclick="sendForm(event)"
                                                    value="Send"> Send Message
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 pe-md-5">
                        <div class="contact-banner d-none d-lg-block">
                            <img src="assets/img/contact-us2.jpg" title="" alt="Contact Image">
                        </div>
                        <div class="contact-info">
                            <div class="contact-info-in">
                                <label>Write an e-mail</label>
                                <a href="mailto:spanosnicolaos@gmail.com">spanosnicolaos@gmail.com</a>
                            </div>
                            <div class="contact-info-in">
                                <label>Call me</label>
                                <a href="tel:+306980999416">+30 6980999416</a>
                            </div>
                        </div>
                        <div class="social-icon">
                            <a class="facebook" href="https://www.facebook.com/nickspanos55"><i class="fab fa-facebook-f"></i></a>
                            <a class="dribbble" href="https://github.com/Spanosnick"><i class="fab fa-github"></i></a>
                            <a class="linkedin" href="https://www.linkedin.com/in/spanos-nikolaos/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->
</main>
<!-- End Main -->
<!-- Snigle 1 -->
<!-- Footer -->
<footer class="footer">
    <div class="container">
        <p class="m-0 text-center">© 2023 copyright all right reserved</p>
    </div>
</footer>
<!-- End Footer -->
<!-- End All Snigle Projects -->
<script src="assets/js/jquery-3.6.4.js"></script>
<script src="assets/vendor/appear/jquery.appear.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/one-page/scrollIt.min.js"></script>
<script src="assets/js/custom.js?v=2.5"></script>
<!-- end -->
</body>
<!-- Body End -->

</html>
