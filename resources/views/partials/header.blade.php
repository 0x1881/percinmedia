@includeWhen(app()->isProduction(), 'partials.preloader')
<!-- Offcanvas Area Start -->
<div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="/">
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
                    <h4>İletişim</h4>
                    <ul>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="#">No: 15 Küçükçekmece/İstanbul</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="mailto:iletisim@percinmedia.com"><span>iletisim@percinmedia.com</span></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-clock"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="#">Pzt-Cum, 09:00 - 18:00</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="tel:+905541333930">+90 554 133 39 30</a>
                            </div>
                        </li>
                    </ul>
                    <div class="header-button mt-4">

                    </div>
                    <div class="main-button">
                        <a href="/iletisim"> <span class="theme-btn"> İletişim </span><span class="arrow-btn"><i
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

                                <li>
                                    <a href="/">Anasayfa</a>
                                </li>

                                <li>
                                    <a href="/hizmetlerimiz">
                                        Hizmetlerimiz
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="/dijital-pazarlama">Dijital Pazarlama</a></li>
                                        <li><a href="/sosyal-medya">Sosyal Medya</a></li>
                                        <li><a href="/website">Website</a></li>
                                        <li><a href="/google-ads">Google Ads</a></li>
                                        <li><a href="/meta-business">Meta Business</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="/hakkimizda">Hakkımızda</a>
                                </li>
                                <li>
                                    <a href="/iletisim">İletişim</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="header-right d-flex justify-content-end align-items-center">
                    <div class="main-button">
                        <a href="/iletisim"> <span class="theme-btn"> İletişim </span><span class="arrow-btn"><i
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
