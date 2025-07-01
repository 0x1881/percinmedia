<x-layouts.app :style2="true" :headerLogo3="true">
    @push('custom_scripts')
        <script src="/assets/js/ajax-mail.js"></script>
    @endpush

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
                                Zafer Mah. Bahar Sk. No:2 <br> Bahçelievler / İstanbul
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
                            <h3><a href="mailto:iletisim@example.com">iletisim@percinmedia.net</a></h3>
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
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3010.902201619616!2d28.830622776546207!3d41.00551371959429!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa499cc4acd63%3A0x8e1411b6a1f0e02d!2sZafer%2C%20Bahar%20Sk.%20No%3A2%2C%2034194%20Bah%C3%A7elievler%2F%C4%B0stanbul!5e0!3m2!1str!2str!4v1751406129349!5m2!1str!2str" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-content">
                            <h2>İletişime Geç</h2>
                            <form action="/contact" id="contact-form" method="POST" class="contact-form-items">
                                @csrf
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

                                    <div class="form-message col-lg-7 wow fadeInUp" data-wow-delay=".9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
