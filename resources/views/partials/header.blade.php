@includeWhen(app()->isProduction(), 'partials.preloader')
<!-- Offcanvas Area Start -->
<div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="index.html">
                            <img src="{{ Vite::asset('resources/assets/img/logo/black-logo.svg') }}" alt="logo-img">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button>
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <p class="text d-none d-xl-block">
                    Nullam dignissim, ante scelerisque the is euismod fermentum odio sem semper the is erat, a feugiat
                    leo urna eget eros. Duis Aenean a imperdiet risus.
                </p>
                <div class="mobile-menu fix mb-3"></div>
                <div class="offcanvas__contact">
                    <h4>Contact Info</h4>
                    <ul>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="#">Main Street, Melbourne, Australia</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="mailto:info@example.com"><span
                                        class="mailto:info@example.com">info@example.com</span></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-clock"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="tel:+11002345909">+11002345909</a>
                            </div>
                        </li>
                    </ul>
                    <div class="header-button mt-4">

                    </div>
                    <div class="main-button">
                        <a href="contact.html"> <span class="theme-btn"> Get Started </span><span class="arrow-btn"><i
                                    class="fa-regular fa-arrow-up-right"></i></span></a>
                    </div>
                    <div class="social-icon d-flex align-items-center">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>

<!-- Header Section Start -->
<header id="header-sticky" class="header-1">
    <div class="container-fluid">
        <div class="mega-menu-wrapper">
            <div class="header-main">
                <div class="logo">
                    <a href="/" class="header-logo">
                        <img src="{{ Vite::asset("resources/assets/img/logo/white-logo.svg") }}" alt="logo-img">
                    </a>
                    <a href="/" class="header-logo-2">
                        <img src="{{ Vite::asset("resources/assets/img/logo/black-logo.svg") }}" alt="logo-img">
                    </a>
                </div>
                <div class="mean__menu-wrapper">
                    <div class="main-menu">
                        <nav id="mobile-menu">
                            <ul>
                                <li class="has-dropdown active menu-thumb">
                                    <a href="/">
                                        Home
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </a>
                                    <ul class="submenu has-homemenu">
                                        <li>
                                            <div class="homemenu-items">
                                                <div class="homemenu">
                                                    <div class="homemenu-thumb">
                                                        <img src="{{ Vite::asset('resources/assets/img/header/home-1.jpg') }}" alt="img">
                                                        <div class="demo-button">
                                                            <a href="index.html" class="theme-btn">
                                                                Multi Page
                                                            </a>
                                                            <a href="index-one-page.html" class="theme-btn">
                                                                One Page
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="homemenu-content text-center">
                                                        <h4 class="homemenu-title">
                                                            Home 01
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="homemenu">
                                                    <div class="homemenu-thumb mb-15">
                                                        <img src="{{ Vite::asset('resources/assets/img/header/home-2.jpg') }}" alt="img">
                                                        <div class="demo-button">
                                                            <a href="index-2.html" class="theme-btn">
                                                                Multi Page
                                                            </a>
                                                            <a href="index-two-page.html" class="theme-btn">
                                                                One Page
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="homemenu-content text-center">
                                                        <h4 class="homemenu-title">
                                                            Home 02
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="homemenu">
                                                    <div class="homemenu-thumb mb-15">
                                                        <img src="{{ Vite::asset('resources/assets/img/header/home-3.jpg') }}" alt="img">
                                                        <div class="demo-button">
                                                            <a href="index-3.html" class="theme-btn">
                                                                Multi Page
                                                            </a>
                                                            <a href="index-three-page.html" class="theme-btn">
                                                                One Page
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="homemenu-content text-center">
                                                        <h4 class="homemenu-title">
                                                            Home 03
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown active d-xl-none">
                                    <a href="team.html" class="border-none">
                                        Home
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="index.html">Home 01</a></li>
                                        <li><a href="index-2.html">Home 02</a></li>
                                        <li><a href="index-3.html">Home 03</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="news.html">
                                        Pages
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="team.html">Team</a></li>
                                        <li><a href="team-details.html">Team Details</a></li>
                                        <li><a href="pricing.html">Our Pricing</a></li>
                                        <li><a href="faq.html">Our Faq</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="service-details.html">
                                        Services
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="service.html">Service Page</a></li>
                                        <li><a href="service-details.html">Service Details</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="project-details.html">
                                        Projects
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="project.html">Projects</a></li>
                                        <li><a href="project-details.html">Project Details</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="news-details.html">
                                        Blog
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="news-grid.html">Blog Grid</a></li>
                                        <li><a href="news.html">Blog Standard</a></li>
                                        <li><a href="news-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="header-right d-flex justify-content-end align-items-center">
                    <div class="main-button">
                        <a href="contact.html"> <span class="theme-btn"> Get Started </span><span class="arrow-btn"><i
                                    class="fa-regular fa-arrow-up-right"></i></span></a>
                    </div>
                    <div class="header__hamburger d-xl-none my-auto">
                        <div class="sidebar__toggle">
                            <i class="fas fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
