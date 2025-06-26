<x-layouts.app :style2="true" :headerLogo3="true">
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{ Vite::asset('resources/assets/images/services/1.png') }}');">
        <div class="container">
            <div class="page-heading">
                <div class="breadcrumb-sub-title">
                    <h1 class="wow fadeInUp" style="color: #fff" data-wow-delay=".3s">İletişim</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="contact-info-section fix section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="contact-info-items text-center active">
                        <div class="icon">
                            <i class="icon-09"></i>
                        </div>
                        <div class="content">
                            <h3>Ofis</h3>
                            <p>
                                2464 Royal Ln. Mesa, New Jersey <br> 45463.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="contact-info-items text-center">
                        <div class="icon">
                            <i class="icon-10"></i>
                        </div>
                        <div class="content">
                            <h3><a href="mailto:info@example.com">info@percinmedia.net</a></h3>
                            <p>
                                Herhangi bir teklifiniz için bize istediğiniz zaman <br>
                                e-posta gönderin.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                    <div class="contact-info-items text-center">
                        <div class="icon">
                            <i class="icon-11"></i>
                        </div>
                        <div class="content">
                            <h3><a href="tel:+905010063434">0 (501) 006 34 34</a></h3>
                            <p>
                                Bizi istediğiniz zaman <br>
                                arayabilirsiniz.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-section-33 fix section-padding pt-0">
        <div class="container">
            <div class="contact-wrapper-2">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="map-items">
                            <div class="googpemap">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.7619084840835!2d144.9618311901502!3d-37.81450084255415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b4758afc1d%3A0x3119cc820fdfc62e!2sEnvato!5e0!3m2!1sen!2sbd!4v1641984054261!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-content">
                            <h2>İletişime Geç</h2>
                            <form action="contact.php" id="contact-form" method="POST" class="contact-form-items">
                                <div class="row g-4">
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                        <div class="form-clt">
                                            <span>Ad Soyad*</span>
                                            <input type="text" name="name" id="name" placeholder="Ad Soyad">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                        <div class="form-clt">
                                            <span>E-mail*</span>
                                            <input type="text" name="email" id="email" placeholder="E-mail">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                        <div class="form-clt">
                                            <span>Telefon Numarası*</span>
                                            <input type="tel" name="phone" id="phone" placeholder="Telefon Numarası">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                                        <div class="form-clt">
                                            <span>Mesajınızı yazın*</span>
                                            <textarea name="message" id="message" placeholder="Mesajınızı yazın"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 wow fadeInUp" data-wow-delay=".9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;">
                                        <button type="submit" class="theme-btn">
                                            Gönder <i class="fa-solid fa-arrow-right-long"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
