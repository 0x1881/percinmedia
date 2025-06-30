<x-layouts.app>
    @push('custom_scripts')
        <script src="/assets/js/ajax-mail.js"></script>
    @endpush
    <!-- Hero Section Start -->
    <section class="hero-section fix hero-1 bg-cover" style="background-image: url('{{ Vite::asset('resources/assets/img/hero/new/hero6.png') }}');">
{{--        <div class="mike-shape">--}}
{{--            <img src="{{ Vite::asset('resources/assets/img/hero/mike-shape.png') }}" alt="img">--}}
{{--        </div>--}}
        <div class="arrow-shape">
            <img src="{{ Vite::asset('resources/assets/img/hero/arrow-shape.png') }}" alt="img">
        </div>
        <div class="arrow-shape-2">
            <img src="{{ Vite::asset('resources/assets/img/hero/arrow-shape.png') }}" alt="img">
        </div>
{{--        <div class="energy-shape float-bob-y">--}}
{{--            <img src="{{ Vite::asset('resources/assets/img/hero/energy-shape.png') }}" alt="img">--}}
{{--        </div>--}}
        <div class="rocket-shape">
            <img src="{{ Vite::asset('resources/assets/img/hero/rocket.png') }}" alt="img" class="float-bob-y">
        </div>
        <div class="container-fluid">
{{--            <div class="hero-title wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">--}}
{{--                <img src="{{ Vite::asset('resources/assets/img/hero/hero-text.png') }}" alt="img">--}}
{{--            </div>--}}
            <div class="row g-4 align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="hero-content">
                        <span class="wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.2s">HEMEN BAŞLAYIN</span>
                        <h1 class="wow img-custom-anim-right" data-wow-duration="1.5s" data-wow-delay="0.2s">Dijitalde Fark Yaratın!</h1>
                        <p class="wow fadeInUp" data-wow-delay=".3s">
                            Hedef odaklı reklamlar, özgün web siteleri ve dijital çözümlerle markanızı bir adım öne taşıyoruz.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="hero-image">
                        <img src="{{ Vite::asset('resources/assets/img/hero/new/hero-image.png') }}" alt="img" class=" wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">
{{--                        <div class="bg-shape">--}}
{{--                            <img src="{{ Vite::asset('resources/assets/img/hero/bg-shape.png') }}" alt="img">--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="video-right">
                        <div class="client-items wow fadeInUp" data-wow-delay=".7s">
                            <div class="client-logo">
                                <img width="150" height="50" src="{{ Vite::asset('resources/assets/images/index/Trustpilot_Logo_(2022).svg') }}" alt="img">
                            </div>
                            <div class="client-img">
                                <img src="{{ Vite::asset('resources/assets/images/index/audience-clients.png') }}" alt="img">
                                <div class="star-icon">
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <span>450+ Olumlu Sonuç</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.services', ['viewAll' => true])

    <!-- About Section Start -->
    <section class="about-section fix section-padding" style="background-image: url('{{ Vite::asset('resources/assets/img/about/about-bg.png')}}');">
        <div class="left-shape float-bob-y">
            <img src="{{ Vite::asset('resources/assets/img/about/left-shape.png') }}" alt="img">
        </div>
        <div class="container">
            <div class="brand-wrapper">
                <h4 class="brand-title">1k + Brands Trust Us</h4>
                <div class="swiper brand-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-img center">
                                <img src="{{ Vite::asset('resources/assets/img/brand/1.png') }}" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-img center">
                                <img src="{{ Vite::asset('resources/assets/img/brand/2.png') }}" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-img center">
                                <img src="{{ Vite::asset('resources/assets/img/brand/3.png') }}" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-img center">
                                <img src="{{ Vite::asset('resources/assets/img/brand/4.png') }}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="about-image">
                            <img src="{{ Vite::asset('resources/assets/images/index/01.png') }}" alt="img" class="wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">
                            <div class="bg-shape">
                                <img src="{{ Vite::asset('resources/assets/img/about/bg-shape.png') }}" alt="img">
                            </div>
                            <div class="grap-shape float-bob-x">
                                <img src="{{ Vite::asset('resources/assets/img/about/grap.png') }}" alt="img">
                            </div>
                            <div class="emoji-shape">
                                <img src="{{ Vite::asset('resources/assets/img/about/emoji.png') }}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title">
                                <div class="sub-title bg-color-2 wow fadeInUp">
                                    <span>HAKKIMIZDA</span>
                                </div>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    Dijital Reklamla Büyümeye Şimdi Başla!
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                Veri analizi, doğru hedefleme ve yaratıcı içerikle kampanyalarınızı maksimum dönüşüm sağlayacak şekilde optimize ediyoruz.
                            </p>
                            <div class="circle-progress-bar-wrapper">
                                <div class="single-circle-bar wow fadeInUp" data-wow-delay=".3s">
                                    <div class="circle-bar" data-percent="85" data-duration="2000">
                                    </div>
                                    <div class="content">
                                        <h6>
                                            Hedef Odaklı <br> Reklam Performansı
                                        </h6>
                                    </div>
                                </div>
                                <div class="single-circle-bar wow fadeInUp" data-wow-delay=".5s">
                                    <div class="circle-bar" data-percent="90" data-duration="2000">
                                    </div>
                                    <div class="content">
                                        <h6>
                                            Dönüşüm <br> Oranı
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="main-button wow fadeInUp" data-wow-delay=".3s">
                                <a href="/hakkimizda"> <span class="theme-btn"> BİZİ KEŞFET </span><span class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Audience Section Start -->
    <section class="audience-section fix section-padding bg-cover" style="background-image: url('{{ Vite::asset('resources/assets/img/hero/new/hero7.png') }}');">
        <div class="container">
            <div class="audience-wrapper">
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="audience-content">
                            <div class="section-title">
                                <div class="sub-title bg-color-3 wow fadeInUp">
                                    <span class="wow fadeInUp">BAŞARI HİKAYEMİZ</span>
                                </div>
                                <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                                    Profesyonel web tasarımlarıyla satışlarınızı zirveye taşıyın!
                                </h2>
                            </div>
                            <div class="client-items wow fadeInUp" data-wow-delay=".5s">
                                <div class="client-logo">
                                    <img width="150" height="50" src="{{ Vite::asset('resources/assets/images/index/Trustpilot_Logo_(2022).svg') }}" alt="img">
                                </div>
                                <div class="client-img">
                                    <img src="{{ Vite::asset('resources/assets/images/index/audience-clients.png') }}" alt="img">
                                    <div class="star-icon">
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                        <span>450+ Olumlu Sonuç</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="audience-right">
                            <div class="audience-img wow fadeInUp" data-wow-delay=".3s">
                                <img src="{{ Vite::asset('resources/assets/images/index/audience-img.jpg') }}" alt="img">
                            </div>
                            <div class="counter-box-area">
                                <div class="counter-box wow fadeInUp" data-wow-delay=".5s">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="100" width="100" viewBox="0 0 24 24" fill="#148484" style="color: var(--theme)"><path style="color: var(--theme)" d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3.5 8c.828 0 1.5.671 1.5 1.5s-.672 1.5-1.5 1.5-1.5-.671-1.5-1.5.672-1.5 1.5-1.5zm-7 0c.828 0 1.5.671 1.5 1.5s-.672 1.5-1.5 1.5-1.5-.671-1.5-1.5.672-1.5 1.5-1.5zm3.501 10c-2.801 0-4.874-1.846-6.001-3.566l.493-.493c1.512 1.195 3.174 1.931 5.508 1.931 2.333 0 3.994-.736 5.506-1.931l.493.493c-1.127 1.72-3.199 3.566-5.999 3.566z"></path></svg>
                                    <div class="content" style="margin-top: 50px">
                                        <h2>
                                            <span class="count">50</span>+
                                        </h2>
                                        <h4>Mutlu Müşteri</h4>
                                        <p>50’den fazla müşterimizin dijital dönüşüm yolculuğunda yanındaydık.</p>
                                    </div>
                                </div>
                                <div class="counter-box wow fadeInUp" data-wow-delay=".7s">
                                    <svg width="100" height="100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M0 0h24v24H0z" fill="none"></path><path style="color: var(--theme)" d="M18 11v2h4v-2h-4zm-2 6.61c.96.71 2.21 1.65 3.2 2.39.4-.53.8-1.07 1.2-1.6-.99-.74-2.24-1.68-3.2-2.4-.4.54-.8 1.08-1.2 1.61zM20.4 5.6c-.4-.53-.8-1.07-1.2-1.6-.99.74-2.24 1.68-3.2 2.4.4.53.8 1.07 1.2 1.6.96-.72 2.21-1.65 3.2-2.4zM4 9c-1.1 0-2 .9-2 2v2c0 1.1.9 2 2 2h1v4h2v-4h1l5 3V6L8 9H4zm11.5 3c0-1.33-.58-2.53-1.5-3.35v6.69c.92-.81 1.5-2.01 1.5-3.34z"></path></svg>
                                    <div class="content" style="margin-top: 50px">
                                        <h2>
                                            <span class="count">500</span>+
                                        </h2>
                                        <h4>Reklam Kampanyası</h4>
                                        <p>Bugüne kadar 500’ün üzerinde reklam kampanyasını başarıyla yönettik.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section Start -->
    <section class="team-section fix section-padding">
        <div class="container">
            <div class="team-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="team-image">
                            <img src="{{ Vite::asset('resources/assets/img/team/09.png') }}" alt="img" class="wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">
                            <div class="shape-image">
                                <img src="{{ Vite::asset('resources/assets/img/team/shape-img.png') }}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team-content">
                            <div class="section-title">
                                <div class="sub-title wow fadeInUp">
                                    <span>BİRLİKTE ÇALIŞALIM</span>
                                </div>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    Birlikte fark yaratan dijital başarılar kuralım.
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                Doğru koşullarda, stratejik hamlelerle her kampanya bir başarıya dönüşür.
                                Biz, sadece reklam vermiyoruz; dijital varlığınızı büyütecek zemin inşa ediyoruz.
                                Her tıklama, her görsel, her dönüşüm bir planın parçası.
                            </p>
                            <div class="list-items wow fadeInUp" data-wow-delay=".3s">
                                <ul>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z" fill="#148484"/>
                                        </svg>
                                        Web Pazarlama Çözümleri
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z" fill="#148484"/>
                                        </svg>
                                        Uzman Meta Business Desteği
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z" fill="#148484"/>
                                        </svg>
                                        Dönüşüm İzleme ve Analiz Raporları
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z" fill="#148484"/>
                                        </svg>
                                        Platformlar Arası Reklam Kampanyaları
                                    </li>
                                </ul>
                            </div>
                            <div class="main-button wow fadeInUp" data-wow-delay=".5s">
                                <a href="/iletisim"> <span class="theme-btn"> İLETİŞİME GEÇ </span><span class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section Start -->
    <section class="testimonial-section fix section-padding">
        <div class="container">
            <div class="testimonial-wrapper">
                <div class="section-title-area">
                    <div class="section-title">
                        <div class="sub-title bg-color-2 wow fadeInUp">
                            <span>MÜŞTERİ YORUMLARI</span>
                        </div>
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">
                            İş ortaklarımızın <br> yorumları
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-2 col-lg-4">
                        <div class="testimonial-left wow fadeInUp" data-wow-delay=".3s">
                            <div class="client-img">
                                <img src="{{ Vite::asset('resources/assets/img/testimonial/new/1.png') }}" alt="img">
                                <div class="content">
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <p>1000+(yorum)</p>
                                </div>
                            </div>
                            <div class="array-button wow fadeInUp" data-wow-delay=".5s">
                                <button class="array-prev"><i class="fa-regular fa-arrow-left-long"></i></button>
                                <button class="array-next"><i class="fa-regular fa-arrow-right-long"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-8">
                        <div class="swiper testimonial-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-box-items">
                                        <div class="icon">
                                            <img src="{{ Vite::asset('resources/assets/img/testimonial/icon.png') }}" alt="img">
                                        </div>
                                        <div class="testimonial-img">
                                            <img src="{{ Vite::asset('resources/assets/img/testimonial/new/1.png') }}" alt="img">
                                            <div class="shape-img">
                                                <img src="{{ Vite::asset('resources/assets/img/testimonial/shape.png') }}" alt="img">
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="client-info">
                                                <div class="star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <h5>Oğuzhan Ertaş</h5>
                                                <span>Diş Kliniği Doktoru</span>
                                            </div>
                                            <p>
                                                Google Ads kampanyalarımız resmen canlandı. Daha önce gelen aramalar hep alakasızdı, şimdi doğrudan randevuya dönüşen net talepler alıyoruz. Verdiğimiz her kuruşun geri döndüğünü hissediyoruz.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-box-items">
                                        <div class="icon">
                                            <img src="{{ Vite::asset('resources/assets/img/testimonial/icon.png') }}" alt="img">
                                        </div>
                                        <div class="testimonial-img">
                                            <img src="{{ Vite::asset('resources/assets/img/testimonial/new/2.png') }}" alt="img">
                                            <div class="shape-img">
                                                <img src="{{ Vite::asset('resources/assets/img/testimonial/shape.png') }}" alt="img">
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="client-info">
                                                <div class="star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <h5>Erdem Gökçe</h5>
                                                <span>Teknisyen</span>
                                            </div>
                                            <p>
                                                Dijital pazarlamaya karşı hep bir mesafem vardı. Perçin Medya, bana bu dünyayı sevdirdi. Yerel SEO’dan tut, sosyal medya etkileşimine kadar her detayı sahiplendiler. Şimdi hem Google’dan hem Instagram’dan müşteri akıyor.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-box-items">
                                        <div class="icon">
                                            <img src="{{ Vite::asset('resources/assets/img/testimonial/icon.png') }}" alt="img">
                                        </div>
                                        <div class="testimonial-img">
                                            <img src="{{ Vite::asset('resources/assets/img/testimonial/new/4.png') }}" alt="img">
                                            <div class="shape-img">
                                                <img src="{{ Vite::asset('resources/assets/img/testimonial/shape.png') }}" alt="img">
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="client-info">
                                                <div class="star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <h5>Aylin Demirtaş</h5>
                                                <span>Butik Otel İşletmecisi</span>
                                            </div>
                                            <p>
                                                Sezon dışı dönemlerde bile doluluğumuz arttı. Facebook ve Instagram reklamları tam zamanında, tam doğru kişilere ulaştı. Ekstra promosyon bile yapmadan dönüş alabildik. İyi ki bu ekiple tanışmışım.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-box-items">
                                        <div class="icon">
                                            <img src="{{ Vite::asset('resources/assets/img/testimonial/icon.png') }}" alt="img">
                                        </div>
                                        <div class="testimonial-img">
                                            <img src="{{ Vite::asset('resources/assets/img/testimonial/new/3.png') }}" alt="img">
                                            <div class="shape-img">
                                                <img src="{{ Vite::asset('resources/assets/img/testimonial/shape.png') }}" alt="img">
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="client-info">
                                                <div class="star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <h5>Niyazi Yüce</h5>
                                                <span>Yapı ve Dekorasyon Müdürü</span>
                                            </div>
                                            <p>
                                                Perçin Medya ile çalışmaya başladıktan sonra web sitemizden gelen talepler %200 arttı. Google Ads kampanyaları tam aradığımız işi getiriyor. Eskiden reklam verip ne olacağını beklerdik, şimdi kontrollü büyüyoruz. Ekip gerçekten işini biliyor
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-box-items">
                                        <div class="icon">
                                            <img src="{{ Vite::asset('resources/assets/img/testimonial/icon.png') }}" alt="img">
                                        </div>
                                        <div class="testimonial-img">
                                            <img src="{{ Vite::asset('resources/assets/img/testimonial/new/5.png') }}" alt="img">
                                            <div class="shape-img">
                                                <img src="{{ Vite::asset('resources/assets/img/testimonial/shape.png') }}" alt="img">
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="client-info">
                                                <div class="star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <h5>Zeynep Akar</h5>
                                                <span>Güzellik Merkezi Sahibi</span>
                                            </div>
                                            <p>
                                                Meta Business üzerinden sundukları raporlama ve performans analiziyle neyin işe yaradığını an be an takip edebiliyorum. Sosyal medya içeriğimiz artık sadece güzel değil, aynı zamanda satış da getiriyor.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section Start -->
    <section class="contact-section fix section-padding" style="margin-bottom: 5rem">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <div class="sub-title bg-color-3 wow fadeInUp">
                        <span class="wow fadeInUp">İletişime Geç</span>
                    </div>
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                        Size nasıl yardımcı olabiliriz?
                    </h2>
                </div>
            </div>
            <div class="contact-wrapper">
                <div class="row g-4">
                    <div class="col-xl-6">
                        <div class="contact-form-area">
                            <h3>İletişime Geçin</h3>
                            <form action="/contact" id="contact-form" method="POST">
                                @csrf
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <input type="text" name="name" id="name" placeholder="Ad Soyad">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <input type="text" name="email" id="email" placeholder="E-mail">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <input type="tel" name="phone" id="phone" placeholder="Telefon Numarası">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-clt">
                                            <textarea name="message" id="message" placeholder="Mesaj"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="theme-btn">
                                            Gönder
                                            <i class="fa-solid fa-arrow-right ms-1"></i>
                                        </button>
                                    </div>
                                    <div class="form-message col-lg-7 wow fadeInUp" data-wow-delay=".9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.7619084840835!2d144.9618311901502!3d-37.81450084255415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b4758afc1d%3A0x3119cc820fdfc62e!2sEnvato!5e0!3m2!1sen!2sbd!4v1641984054261!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{--    <section class="news-section section-padding section-bg">--}}
{{--        <div class="left-shape">--}}
{{--            <img src="{{ Vite::asset('resources/assets/img/news/left-shape.png') }}" alt="img">--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <div class="section-title text-center">--}}
{{--                <div class="sub-title bg-color-2 wow fadeInUp">--}}
{{--                    <span>BLOG & NEWS</span>--}}
{{--                </div>--}}
{{--                <h2 class="wow fadeInUp" data-wow-delay=".3s">--}}
{{--                    Use SEO to Drive Growth <br> at Your Business--}}
{{--                </h2>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row">--}}
{{--                <div class="col-xl-3 col-lg-6 col-md-6">--}}
{{--                    <div class="news-box-items">--}}
{{--                        <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.2s">--}}
{{--                            <img src="{{ Vite::asset('resources/assets/img/news/01.jpg') }}" alt="img">--}}
{{--                        </div>--}}
{{--                        <div class="news-content">--}}
{{--                            <ul class="post-cat">--}}
{{--                                <li>--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">--}}
{{--                                        <path d="M13.334 1.33398H5.33398C4.60065 1.33398 4.00065 1.93398 4.00065 2.66732V4.00065H2.66732C1.93398 4.00065 1.33398 4.60065 1.33398 5.33398V14.6673L4.00065 12.0007H10.6673C11.4007 12.0007 12.0007 11.4007 12.0007 10.6673V9.33398L14.6673 12.0007V2.66732C14.6673 1.93398 14.0673 1.33398 13.334 1.33398ZM5.33398 8.66732C4.96632 8.66732 4.66732 8.36832 4.66732 8.00065V2.66732C4.66732 2.29965 4.96632 2.00065 5.33398 2.00065H13.334C13.7017 2.00065 14.0007 2.29965 14.0007 2.66732V10.3913L12.2767 8.66732H5.33398ZM11.334 10.6673C11.334 11.035 11.035 11.334 10.6673 11.334H3.72465L2.00065 13.058V5.33398C2.00065 4.96632 2.29965 4.66732 2.66732 4.66732H4.00065V8.00065C4.00065 8.73398 4.60065 9.33398 5.33398 9.33398H11.334V10.6673Z" fill="#6A47ED"/>--}}
{{--                                    </svg>--}}
{{--                                    0 Comment--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">--}}
{{--                                        <path d="M5.33398 3.83301C5.06065 3.83301 4.83398 3.60634 4.83398 3.33301V1.33301C4.83398 1.05967 5.06065 0.833008 5.33398 0.833008C5.60732 0.833008 5.83398 1.05967 5.83398 1.33301V3.33301C5.83398 3.60634 5.60732 3.83301 5.33398 3.83301ZM10.6673 3.83301C10.394 3.83301 10.1673 3.60634 10.1673 3.33301V1.33301C10.1673 1.05967 10.394 0.833008 10.6673 0.833008C10.9407 0.833008 11.1673 1.05967 11.1673 1.33301V3.33301C11.1673 3.60634 10.9407 3.83301 10.6673 3.83301ZM5.66732 9.66634C5.58065 9.66634 5.49398 9.64634 5.41398 9.61301C5.32732 9.57967 5.26065 9.53301 5.19398 9.47301C5.07398 9.34634 5.00065 9.17968 5.00065 8.99967C5.00065 8.91301 5.02065 8.82634 5.05398 8.74634C5.08732 8.66634 5.13398 8.59301 5.19398 8.52634C5.26065 8.46634 5.32732 8.41967 5.41398 8.38634C5.65398 8.28634 5.95398 8.33967 6.14065 8.52634C6.26065 8.65301 6.33398 8.82634 6.33398 8.99967C6.33398 9.03967 6.32732 9.08634 6.32065 9.13301C6.31398 9.17301 6.30065 9.21301 6.28065 9.25301C6.26732 9.29301 6.24732 9.33301 6.22065 9.37301C6.20065 9.40634 6.16732 9.43967 6.14065 9.47301C6.01398 9.59301 5.84065 9.66634 5.66732 9.66634ZM8.00065 9.66634C7.91398 9.66634 7.82732 9.64634 7.74732 9.61301C7.66065 9.57967 7.59398 9.53301 7.52732 9.47301C7.40732 9.34634 7.33398 9.17968 7.33398 8.99967C7.33398 8.91301 7.35398 8.82634 7.38732 8.74634C7.42065 8.66634 7.46732 8.59301 7.52732 8.52634C7.59398 8.46634 7.66065 8.41967 7.74732 8.38634C7.98732 8.27967 8.28732 8.33967 8.47398 8.52634C8.59398 8.65301 8.66732 8.82634 8.66732 8.99967C8.66732 9.03967 8.66065 9.08634 8.65398 9.13301C8.64732 9.17301 8.63398 9.21301 8.61398 9.25301C8.60065 9.29301 8.58065 9.33301 8.55398 9.37301C8.53398 9.40634 8.50065 9.43967 8.47398 9.47301C8.34732 9.59301 8.17398 9.66634 8.00065 9.66634ZM10.334 9.66634C10.2473 9.66634 10.1607 9.64634 10.0807 9.61301C9.99398 9.57967 9.92732 9.53301 9.86065 9.47301L9.78065 9.37301C9.7554 9.33586 9.73522 9.2955 9.72065 9.25301C9.70139 9.21523 9.68791 9.17478 9.68065 9.13301C9.67398 9.08634 9.66732 9.03967 9.66732 8.99967C9.66732 8.82634 9.74065 8.65301 9.86065 8.52634C9.92732 8.46634 9.99398 8.41967 10.0807 8.38634C10.3273 8.27967 10.6207 8.33967 10.8073 8.52634C10.9273 8.65301 11.0007 8.82634 11.0007 8.99967C11.0007 9.03967 10.994 9.08634 10.9873 9.13301C10.9806 9.17301 10.9673 9.21301 10.9473 9.25301C10.934 9.29301 10.914 9.33301 10.8873 9.37301C10.8673 9.40634 10.834 9.43967 10.8073 9.47301C10.6806 9.59301 10.5073 9.66634 10.334 9.66634ZM5.66732 11.9997C5.58065 11.9997 5.49398 11.9797 5.41398 11.9463C5.33398 11.913 5.26065 11.8663 5.19398 11.8063C5.07398 11.6797 5.00065 11.5063 5.00065 11.333C5.00065 11.2463 5.02065 11.1597 5.05398 11.0797C5.08732 10.993 5.13398 10.9197 5.19398 10.8597C5.44065 10.613 5.89398 10.613 6.14065 10.8597C6.26065 10.9863 6.33398 11.1597 6.33398 11.333C6.33398 11.5063 6.26065 11.6797 6.14065 11.8063C6.01398 11.9263 5.84065 11.9997 5.66732 11.9997ZM8.00065 11.9997C7.82732 11.9997 7.65398 11.9263 7.52732 11.8063C7.40732 11.6797 7.33398 11.5063 7.33398 11.333C7.33398 11.2463 7.35398 11.1597 7.38732 11.0797C7.42065 10.993 7.46732 10.9197 7.52732 10.8597C7.77398 10.613 8.22732 10.613 8.47398 10.8597C8.53398 10.9197 8.58065 10.993 8.61398 11.0797C8.64732 11.1597 8.66732 11.2463 8.66732 11.333C8.66732 11.5063 8.59398 11.6797 8.47398 11.8063C8.34732 11.9263 8.17398 11.9997 8.00065 11.9997ZM10.334 11.9997C10.1607 11.9997 9.98732 11.9263 9.86065 11.8063C9.79896 11.7437 9.75125 11.6687 9.72065 11.5863C9.68732 11.5063 9.66732 11.4197 9.66732 11.333C9.66732 11.2463 9.68732 11.1597 9.72065 11.0797C9.75398 10.993 9.80065 10.9197 9.86065 10.8597C10.014 10.7063 10.2473 10.633 10.4607 10.6797C10.5073 10.6863 10.5473 10.6997 10.5873 10.7197C10.6273 10.733 10.6673 10.753 10.7073 10.7797C10.7407 10.7997 10.774 10.833 10.8073 10.8597C10.9273 10.9863 11.0007 11.1597 11.0007 11.333C11.0007 11.5063 10.9273 11.6797 10.8073 11.8063C10.6806 11.9263 10.5073 11.9997 10.334 11.9997ZM13.6673 6.55967H2.33398C2.06065 6.55967 1.83398 6.33301 1.83398 6.05967C1.83398 5.78634 2.06065 5.55967 2.33398 5.55967H13.6673C13.9406 5.55967 14.1673 5.78634 14.1673 6.05967C14.1673 6.33301 13.9406 6.55967 13.6673 6.55967Z" fill="#6A47ED"/>--}}
{{--                                        <path d="M10.6676 15.1663H5.33431C2.90098 15.1663 1.50098 13.7663 1.50098 11.333V5.66634C1.50098 3.23301 2.90098 1.83301 5.33431 1.83301H10.6676C13.101 1.83301 14.501 3.23301 14.501 5.66634V11.333C14.501 13.7663 13.101 15.1663 10.6676 15.1663ZM5.33431 2.83301C3.42764 2.83301 2.50098 3.75967 2.50098 5.66634V11.333C2.50098 13.2397 3.42764 14.1663 5.33431 14.1663H10.6676C12.5743 14.1663 13.501 13.2397 13.501 11.333V5.66634C13.501 3.75967 12.5743 2.83301 10.6676 2.83301H5.33431Z" fill="#6A47ED"/>--}}
{{--                                    </svg>--}}
{{--                                    September 6, 2024--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                            <h5><a href="news-details.html">Importers achieve savings through the First Sale rule!</a></h5>--}}
{{--                            <div class="news-btn">--}}
{{--                                <a href="news-details.html" class="link-btn">Read More <i class="fa-regular fa-arrow-right-long"></i></a>--}}
{{--                                <img src="{{ Vite::asset('resources/assets/img/news/client-img.png') }}" alt="img">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-lg-6 col-md-6">--}}
{{--                    <div class="news-box-items">--}}
{{--                        <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">--}}
{{--                            <img src="{{ Vite::asset('resources/assets/img/news/02.jpg') }}" alt="img">--}}
{{--                        </div>--}}
{{--                        <div class="news-content">--}}
{{--                            <ul class="post-cat">--}}
{{--                                <li>--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">--}}
{{--                                        <path d="M13.334 1.33398H5.33398C4.60065 1.33398 4.00065 1.93398 4.00065 2.66732V4.00065H2.66732C1.93398 4.00065 1.33398 4.60065 1.33398 5.33398V14.6673L4.00065 12.0007H10.6673C11.4007 12.0007 12.0007 11.4007 12.0007 10.6673V9.33398L14.6673 12.0007V2.66732C14.6673 1.93398 14.0673 1.33398 13.334 1.33398ZM5.33398 8.66732C4.96632 8.66732 4.66732 8.36832 4.66732 8.00065V2.66732C4.66732 2.29965 4.96632 2.00065 5.33398 2.00065H13.334C13.7017 2.00065 14.0007 2.29965 14.0007 2.66732V10.3913L12.2767 8.66732H5.33398ZM11.334 10.6673C11.334 11.035 11.035 11.334 10.6673 11.334H3.72465L2.00065 13.058V5.33398C2.00065 4.96632 2.29965 4.66732 2.66732 4.66732H4.00065V8.00065C4.00065 8.73398 4.60065 9.33398 5.33398 9.33398H11.334V10.6673Z" fill="#6A47ED"/>--}}
{{--                                    </svg>--}}
{{--                                    0 Comment--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">--}}
{{--                                        <path d="M5.33398 3.83301C5.06065 3.83301 4.83398 3.60634 4.83398 3.33301V1.33301C4.83398 1.05967 5.06065 0.833008 5.33398 0.833008C5.60732 0.833008 5.83398 1.05967 5.83398 1.33301V3.33301C5.83398 3.60634 5.60732 3.83301 5.33398 3.83301ZM10.6673 3.83301C10.394 3.83301 10.1673 3.60634 10.1673 3.33301V1.33301C10.1673 1.05967 10.394 0.833008 10.6673 0.833008C10.9407 0.833008 11.1673 1.05967 11.1673 1.33301V3.33301C11.1673 3.60634 10.9407 3.83301 10.6673 3.83301ZM5.66732 9.66634C5.58065 9.66634 5.49398 9.64634 5.41398 9.61301C5.32732 9.57967 5.26065 9.53301 5.19398 9.47301C5.07398 9.34634 5.00065 9.17968 5.00065 8.99967C5.00065 8.91301 5.02065 8.82634 5.05398 8.74634C5.08732 8.66634 5.13398 8.59301 5.19398 8.52634C5.26065 8.46634 5.32732 8.41967 5.41398 8.38634C5.65398 8.28634 5.95398 8.33967 6.14065 8.52634C6.26065 8.65301 6.33398 8.82634 6.33398 8.99967C6.33398 9.03967 6.32732 9.08634 6.32065 9.13301C6.31398 9.17301 6.30065 9.21301 6.28065 9.25301C6.26732 9.29301 6.24732 9.33301 6.22065 9.37301C6.20065 9.40634 6.16732 9.43967 6.14065 9.47301C6.01398 9.59301 5.84065 9.66634 5.66732 9.66634ZM8.00065 9.66634C7.91398 9.66634 7.82732 9.64634 7.74732 9.61301C7.66065 9.57967 7.59398 9.53301 7.52732 9.47301C7.40732 9.34634 7.33398 9.17968 7.33398 8.99967C7.33398 8.91301 7.35398 8.82634 7.38732 8.74634C7.42065 8.66634 7.46732 8.59301 7.52732 8.52634C7.59398 8.46634 7.66065 8.41967 7.74732 8.38634C7.98732 8.27967 8.28732 8.33967 8.47398 8.52634C8.59398 8.65301 8.66732 8.82634 8.66732 8.99967C8.66732 9.03967 8.66065 9.08634 8.65398 9.13301C8.64732 9.17301 8.63398 9.21301 8.61398 9.25301C8.60065 9.29301 8.58065 9.33301 8.55398 9.37301C8.53398 9.40634 8.50065 9.43967 8.47398 9.47301C8.34732 9.59301 8.17398 9.66634 8.00065 9.66634ZM10.334 9.66634C10.2473 9.66634 10.1607 9.64634 10.0807 9.61301C9.99398 9.57967 9.92732 9.53301 9.86065 9.47301L9.78065 9.37301C9.7554 9.33586 9.73522 9.2955 9.72065 9.25301C9.70139 9.21523 9.68791 9.17478 9.68065 9.13301C9.67398 9.08634 9.66732 9.03967 9.66732 8.99967C9.66732 8.82634 9.74065 8.65301 9.86065 8.52634C9.92732 8.46634 9.99398 8.41967 10.0807 8.38634C10.3273 8.27967 10.6207 8.33967 10.8073 8.52634C10.9273 8.65301 11.0007 8.82634 11.0007 8.99967C11.0007 9.03967 10.994 9.08634 10.9873 9.13301C10.9806 9.17301 10.9673 9.21301 10.9473 9.25301C10.934 9.29301 10.914 9.33301 10.8873 9.37301C10.8673 9.40634 10.834 9.43967 10.8073 9.47301C10.6806 9.59301 10.5073 9.66634 10.334 9.66634ZM5.66732 11.9997C5.58065 11.9997 5.49398 11.9797 5.41398 11.9463C5.33398 11.913 5.26065 11.8663 5.19398 11.8063C5.07398 11.6797 5.00065 11.5063 5.00065 11.333C5.00065 11.2463 5.02065 11.1597 5.05398 11.0797C5.08732 10.993 5.13398 10.9197 5.19398 10.8597C5.44065 10.613 5.89398 10.613 6.14065 10.8597C6.26065 10.9863 6.33398 11.1597 6.33398 11.333C6.33398 11.5063 6.26065 11.6797 6.14065 11.8063C6.01398 11.9263 5.84065 11.9997 5.66732 11.9997ZM8.00065 11.9997C7.82732 11.9997 7.65398 11.9263 7.52732 11.8063C7.40732 11.6797 7.33398 11.5063 7.33398 11.333C7.33398 11.2463 7.35398 11.1597 7.38732 11.0797C7.42065 10.993 7.46732 10.9197 7.52732 10.8597C7.77398 10.613 8.22732 10.613 8.47398 10.8597C8.53398 10.9197 8.58065 10.993 8.61398 11.0797C8.64732 11.1597 8.66732 11.2463 8.66732 11.333C8.66732 11.5063 8.59398 11.6797 8.47398 11.8063C8.34732 11.9263 8.17398 11.9997 8.00065 11.9997ZM10.334 11.9997C10.1607 11.9997 9.98732 11.9263 9.86065 11.8063C9.79896 11.7437 9.75125 11.6687 9.72065 11.5863C9.68732 11.5063 9.66732 11.4197 9.66732 11.333C9.66732 11.2463 9.68732 11.1597 9.72065 11.0797C9.75398 10.993 9.80065 10.9197 9.86065 10.8597C10.014 10.7063 10.2473 10.633 10.4607 10.6797C10.5073 10.6863 10.5473 10.6997 10.5873 10.7197C10.6273 10.733 10.6673 10.753 10.7073 10.7797C10.7407 10.7997 10.774 10.833 10.8073 10.8597C10.9273 10.9863 11.0007 11.1597 11.0007 11.333C11.0007 11.5063 10.9273 11.6797 10.8073 11.8063C10.6806 11.9263 10.5073 11.9997 10.334 11.9997ZM13.6673 6.55967H2.33398C2.06065 6.55967 1.83398 6.33301 1.83398 6.05967C1.83398 5.78634 2.06065 5.55967 2.33398 5.55967H13.6673C13.9406 5.55967 14.1673 5.78634 14.1673 6.05967C14.1673 6.33301 13.9406 6.55967 13.6673 6.55967Z" fill="#6A47ED"/>--}}
{{--                                        <path d="M10.6676 15.1663H5.33431C2.90098 15.1663 1.50098 13.7663 1.50098 11.333V5.66634C1.50098 3.23301 2.90098 1.83301 5.33431 1.83301H10.6676C13.101 1.83301 14.501 3.23301 14.501 5.66634V11.333C14.501 13.7663 13.101 15.1663 10.6676 15.1663ZM5.33431 2.83301C3.42764 2.83301 2.50098 3.75967 2.50098 5.66634V11.333C2.50098 13.2397 3.42764 14.1663 5.33431 14.1663H10.6676C12.5743 14.1663 13.501 13.2397 13.501 11.333V5.66634C13.501 3.75967 12.5743 2.83301 10.6676 2.83301H5.33431Z" fill="#6A47ED"/>--}}
{{--                                    </svg>--}}
{{--                                    September 6, 2024--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                            <h5><a href="news-details.html">Is now the right time to invest in an enterprise</a></h5>--}}
{{--                            <div class="news-btn">--}}
{{--                                <a href="news-details.html" class="link-btn">Read More <i class="fa-regular fa-arrow-right-long"></i></a>--}}
{{--                                <img src="{{ Vite::asset('resources/assets/img/news/client-img.png') }}" alt="img">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-lg-6 col-md-6">--}}
{{--                    <div class="news-box-items">--}}
{{--                        <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.6s">--}}
{{--                            <img src="{{ Vite::asset('resources/assets/img/news/03.jpg') }}" alt="img">--}}
{{--                        </div>--}}
{{--                        <div class="news-content">--}}
{{--                            <ul class="post-cat">--}}
{{--                                <li>--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">--}}
{{--                                        <path d="M13.334 1.33398H5.33398C4.60065 1.33398 4.00065 1.93398 4.00065 2.66732V4.00065H2.66732C1.93398 4.00065 1.33398 4.60065 1.33398 5.33398V14.6673L4.00065 12.0007H10.6673C11.4007 12.0007 12.0007 11.4007 12.0007 10.6673V9.33398L14.6673 12.0007V2.66732C14.6673 1.93398 14.0673 1.33398 13.334 1.33398ZM5.33398 8.66732C4.96632 8.66732 4.66732 8.36832 4.66732 8.00065V2.66732C4.66732 2.29965 4.96632 2.00065 5.33398 2.00065H13.334C13.7017 2.00065 14.0007 2.29965 14.0007 2.66732V10.3913L12.2767 8.66732H5.33398ZM11.334 10.6673C11.334 11.035 11.035 11.334 10.6673 11.334H3.72465L2.00065 13.058V5.33398C2.00065 4.96632 2.29965 4.66732 2.66732 4.66732H4.00065V8.00065C4.00065 8.73398 4.60065 9.33398 5.33398 9.33398H11.334V10.6673Z" fill="#6A47ED"/>--}}
{{--                                    </svg>--}}
{{--                                    0 Comment--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">--}}
{{--                                        <path d="M5.33398 3.83301C5.06065 3.83301 4.83398 3.60634 4.83398 3.33301V1.33301C4.83398 1.05967 5.06065 0.833008 5.33398 0.833008C5.60732 0.833008 5.83398 1.05967 5.83398 1.33301V3.33301C5.83398 3.60634 5.60732 3.83301 5.33398 3.83301ZM10.6673 3.83301C10.394 3.83301 10.1673 3.60634 10.1673 3.33301V1.33301C10.1673 1.05967 10.394 0.833008 10.6673 0.833008C10.9407 0.833008 11.1673 1.05967 11.1673 1.33301V3.33301C11.1673 3.60634 10.9407 3.83301 10.6673 3.83301ZM5.66732 9.66634C5.58065 9.66634 5.49398 9.64634 5.41398 9.61301C5.32732 9.57967 5.26065 9.53301 5.19398 9.47301C5.07398 9.34634 5.00065 9.17968 5.00065 8.99967C5.00065 8.91301 5.02065 8.82634 5.05398 8.74634C5.08732 8.66634 5.13398 8.59301 5.19398 8.52634C5.26065 8.46634 5.32732 8.41967 5.41398 8.38634C5.65398 8.28634 5.95398 8.33967 6.14065 8.52634C6.26065 8.65301 6.33398 8.82634 6.33398 8.99967C6.33398 9.03967 6.32732 9.08634 6.32065 9.13301C6.31398 9.17301 6.30065 9.21301 6.28065 9.25301C6.26732 9.29301 6.24732 9.33301 6.22065 9.37301C6.20065 9.40634 6.16732 9.43967 6.14065 9.47301C6.01398 9.59301 5.84065 9.66634 5.66732 9.66634ZM8.00065 9.66634C7.91398 9.66634 7.82732 9.64634 7.74732 9.61301C7.66065 9.57967 7.59398 9.53301 7.52732 9.47301C7.40732 9.34634 7.33398 9.17968 7.33398 8.99967C7.33398 8.91301 7.35398 8.82634 7.38732 8.74634C7.42065 8.66634 7.46732 8.59301 7.52732 8.52634C7.59398 8.46634 7.66065 8.41967 7.74732 8.38634C7.98732 8.27967 8.28732 8.33967 8.47398 8.52634C8.59398 8.65301 8.66732 8.82634 8.66732 8.99967C8.66732 9.03967 8.66065 9.08634 8.65398 9.13301C8.64732 9.17301 8.63398 9.21301 8.61398 9.25301C8.60065 9.29301 8.58065 9.33301 8.55398 9.37301C8.53398 9.40634 8.50065 9.43967 8.47398 9.47301C8.34732 9.59301 8.17398 9.66634 8.00065 9.66634ZM10.334 9.66634C10.2473 9.66634 10.1607 9.64634 10.0807 9.61301C9.99398 9.57967 9.92732 9.53301 9.86065 9.47301L9.78065 9.37301C9.7554 9.33586 9.73522 9.2955 9.72065 9.25301C9.70139 9.21523 9.68791 9.17478 9.68065 9.13301C9.67398 9.08634 9.66732 9.03967 9.66732 8.99967C9.66732 8.82634 9.74065 8.65301 9.86065 8.52634C9.92732 8.46634 9.99398 8.41967 10.0807 8.38634C10.3273 8.27967 10.6207 8.33967 10.8073 8.52634C10.9273 8.65301 11.0007 8.82634 11.0007 8.99967C11.0007 9.03967 10.994 9.08634 10.9873 9.13301C10.9806 9.17301 10.9673 9.21301 10.9473 9.25301C10.934 9.29301 10.914 9.33301 10.8873 9.37301C10.8673 9.40634 10.834 9.43967 10.8073 9.47301C10.6806 9.59301 10.5073 9.66634 10.334 9.66634ZM5.66732 11.9997C5.58065 11.9997 5.49398 11.9797 5.41398 11.9463C5.33398 11.913 5.26065 11.8663 5.19398 11.8063C5.07398 11.6797 5.00065 11.5063 5.00065 11.333C5.00065 11.2463 5.02065 11.1597 5.05398 11.0797C5.08732 10.993 5.13398 10.9197 5.19398 10.8597C5.44065 10.613 5.89398 10.613 6.14065 10.8597C6.26065 10.9863 6.33398 11.1597 6.33398 11.333C6.33398 11.5063 6.26065 11.6797 6.14065 11.8063C6.01398 11.9263 5.84065 11.9997 5.66732 11.9997ZM8.00065 11.9997C7.82732 11.9997 7.65398 11.9263 7.52732 11.8063C7.40732 11.6797 7.33398 11.5063 7.33398 11.333C7.33398 11.2463 7.35398 11.1597 7.38732 11.0797C7.42065 10.993 7.46732 10.9197 7.52732 10.8597C7.77398 10.613 8.22732 10.613 8.47398 10.8597C8.53398 10.9197 8.58065 10.993 8.61398 11.0797C8.64732 11.1597 8.66732 11.2463 8.66732 11.333C8.66732 11.5063 8.59398 11.6797 8.47398 11.8063C8.34732 11.9263 8.17398 11.9997 8.00065 11.9997ZM10.334 11.9997C10.1607 11.9997 9.98732 11.9263 9.86065 11.8063C9.79896 11.7437 9.75125 11.6687 9.72065 11.5863C9.68732 11.5063 9.66732 11.4197 9.66732 11.333C9.66732 11.2463 9.68732 11.1597 9.72065 11.0797C9.75398 10.993 9.80065 10.9197 9.86065 10.8597C10.014 10.7063 10.2473 10.633 10.4607 10.6797C10.5073 10.6863 10.5473 10.6997 10.5873 10.7197C10.6273 10.733 10.6673 10.753 10.7073 10.7797C10.7407 10.7997 10.774 10.833 10.8073 10.8597C10.9273 10.9863 11.0007 11.1597 11.0007 11.333C11.0007 11.5063 10.9273 11.6797 10.8073 11.8063C10.6806 11.9263 10.5073 11.9997 10.334 11.9997ZM13.6673 6.55967H2.33398C2.06065 6.55967 1.83398 6.33301 1.83398 6.05967C1.83398 5.78634 2.06065 5.55967 2.33398 5.55967H13.6673C13.9406 5.55967 14.1673 5.78634 14.1673 6.05967C14.1673 6.33301 13.9406 6.55967 13.6673 6.55967Z" fill="#6A47ED"/>--}}
{{--                                        <path d="M10.6676 15.1663H5.33431C2.90098 15.1663 1.50098 13.7663 1.50098 11.333V5.66634C1.50098 3.23301 2.90098 1.83301 5.33431 1.83301H10.6676C13.101 1.83301 14.501 3.23301 14.501 5.66634V11.333C14.501 13.7663 13.101 15.1663 10.6676 15.1663ZM5.33431 2.83301C3.42764 2.83301 2.50098 3.75967 2.50098 5.66634V11.333C2.50098 13.2397 3.42764 14.1663 5.33431 14.1663H10.6676C12.5743 14.1663 13.501 13.2397 13.501 11.333V5.66634C13.501 3.75967 12.5743 2.83301 10.6676 2.83301H5.33431Z" fill="#6A47ED"/>--}}
{{--                                    </svg>--}}
{{--                                    September 6, 2024--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                            <h5><a href="news-details.html">Focus logistics secure new--}}
{{--                                    landmark Contracts</a></h5>--}}
{{--                            <div class="news-btn">--}}
{{--                                <a href="news-details.html" class="link-btn">Read More <i class="fa-regular fa-arrow-right-long"></i></a>--}}
{{--                                <img src="{{ Vite::asset('resources/assets/img/news/client-img.png') }}" alt="img">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-lg-6 col-md-6">--}}
{{--                    <div class="news-box-items">--}}
{{--                        <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.8s">--}}
{{--                            <img src="{{ Vite::asset('resources/assets/img/news/04.jpg') }}" alt="img">--}}
{{--                        </div>--}}
{{--                        <div class="news-content">--}}
{{--                            <ul class="post-cat">--}}
{{--                                <li>--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">--}}
{{--                                        <path d="M13.334 1.33398H5.33398C4.60065 1.33398 4.00065 1.93398 4.00065 2.66732V4.00065H2.66732C1.93398 4.00065 1.33398 4.60065 1.33398 5.33398V14.6673L4.00065 12.0007H10.6673C11.4007 12.0007 12.0007 11.4007 12.0007 10.6673V9.33398L14.6673 12.0007V2.66732C14.6673 1.93398 14.0673 1.33398 13.334 1.33398ZM5.33398 8.66732C4.96632 8.66732 4.66732 8.36832 4.66732 8.00065V2.66732C4.66732 2.29965 4.96632 2.00065 5.33398 2.00065H13.334C13.7017 2.00065 14.0007 2.29965 14.0007 2.66732V10.3913L12.2767 8.66732H5.33398ZM11.334 10.6673C11.334 11.035 11.035 11.334 10.6673 11.334H3.72465L2.00065 13.058V5.33398C2.00065 4.96632 2.29965 4.66732 2.66732 4.66732H4.00065V8.00065C4.00065 8.73398 4.60065 9.33398 5.33398 9.33398H11.334V10.6673Z" fill="#6A47ED"/>--}}
{{--                                    </svg>--}}
{{--                                    0 Comment--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">--}}
{{--                                        <path d="M5.33398 3.83301C5.06065 3.83301 4.83398 3.60634 4.83398 3.33301V1.33301C4.83398 1.05967 5.06065 0.833008 5.33398 0.833008C5.60732 0.833008 5.83398 1.05967 5.83398 1.33301V3.33301C5.83398 3.60634 5.60732 3.83301 5.33398 3.83301ZM10.6673 3.83301C10.394 3.83301 10.1673 3.60634 10.1673 3.33301V1.33301C10.1673 1.05967 10.394 0.833008 10.6673 0.833008C10.9407 0.833008 11.1673 1.05967 11.1673 1.33301V3.33301C11.1673 3.60634 10.9407 3.83301 10.6673 3.83301ZM5.66732 9.66634C5.58065 9.66634 5.49398 9.64634 5.41398 9.61301C5.32732 9.57967 5.26065 9.53301 5.19398 9.47301C5.07398 9.34634 5.00065 9.17968 5.00065 8.99967C5.00065 8.91301 5.02065 8.82634 5.05398 8.74634C5.08732 8.66634 5.13398 8.59301 5.19398 8.52634C5.26065 8.46634 5.32732 8.41967 5.41398 8.38634C5.65398 8.28634 5.95398 8.33967 6.14065 8.52634C6.26065 8.65301 6.33398 8.82634 6.33398 8.99967C6.33398 9.03967 6.32732 9.08634 6.32065 9.13301C6.31398 9.17301 6.30065 9.21301 6.28065 9.25301C6.26732 9.29301 6.24732 9.33301 6.22065 9.37301C6.20065 9.40634 6.16732 9.43967 6.14065 9.47301C6.01398 9.59301 5.84065 9.66634 5.66732 9.66634ZM8.00065 9.66634C7.91398 9.66634 7.82732 9.64634 7.74732 9.61301C7.66065 9.57967 7.59398 9.53301 7.52732 9.47301C7.40732 9.34634 7.33398 9.17968 7.33398 8.99967C7.33398 8.91301 7.35398 8.82634 7.38732 8.74634C7.42065 8.66634 7.46732 8.59301 7.52732 8.52634C7.59398 8.46634 7.66065 8.41967 7.74732 8.38634C7.98732 8.27967 8.28732 8.33967 8.47398 8.52634C8.59398 8.65301 8.66732 8.82634 8.66732 8.99967C8.66732 9.03967 8.66065 9.08634 8.65398 9.13301C8.64732 9.17301 8.63398 9.21301 8.61398 9.25301C8.60065 9.29301 8.58065 9.33301 8.55398 9.37301C8.53398 9.40634 8.50065 9.43967 8.47398 9.47301C8.34732 9.59301 8.17398 9.66634 8.00065 9.66634ZM10.334 9.66634C10.2473 9.66634 10.1607 9.64634 10.0807 9.61301C9.99398 9.57967 9.92732 9.53301 9.86065 9.47301L9.78065 9.37301C9.7554 9.33586 9.73522 9.2955 9.72065 9.25301C9.70139 9.21523 9.68791 9.17478 9.68065 9.13301C9.67398 9.08634 9.66732 9.03967 9.66732 8.99967C9.66732 8.82634 9.74065 8.65301 9.86065 8.52634C9.92732 8.46634 9.99398 8.41967 10.0807 8.38634C10.3273 8.27967 10.6207 8.33967 10.8073 8.52634C10.9273 8.65301 11.0007 8.82634 11.0007 8.99967C11.0007 9.03967 10.994 9.08634 10.9873 9.13301C10.9806 9.17301 10.9673 9.21301 10.9473 9.25301C10.934 9.29301 10.914 9.33301 10.8873 9.37301C10.8673 9.40634 10.834 9.43967 10.8073 9.47301C10.6806 9.59301 10.5073 9.66634 10.334 9.66634ZM5.66732 11.9997C5.58065 11.9997 5.49398 11.9797 5.41398 11.9463C5.33398 11.913 5.26065 11.8663 5.19398 11.8063C5.07398 11.6797 5.00065 11.5063 5.00065 11.333C5.00065 11.2463 5.02065 11.1597 5.05398 11.0797C5.08732 10.993 5.13398 10.9197 5.19398 10.8597C5.44065 10.613 5.89398 10.613 6.14065 10.8597C6.26065 10.9863 6.33398 11.1597 6.33398 11.333C6.33398 11.5063 6.26065 11.6797 6.14065 11.8063C6.01398 11.9263 5.84065 11.9997 5.66732 11.9997ZM8.00065 11.9997C7.82732 11.9997 7.65398 11.9263 7.52732 11.8063C7.40732 11.6797 7.33398 11.5063 7.33398 11.333C7.33398 11.2463 7.35398 11.1597 7.38732 11.0797C7.42065 10.993 7.46732 10.9197 7.52732 10.8597C7.77398 10.613 8.22732 10.613 8.47398 10.8597C8.53398 10.9197 8.58065 10.993 8.61398 11.0797C8.64732 11.1597 8.66732 11.2463 8.66732 11.333C8.66732 11.5063 8.59398 11.6797 8.47398 11.8063C8.34732 11.9263 8.17398 11.9997 8.00065 11.9997ZM10.334 11.9997C10.1607 11.9997 9.98732 11.9263 9.86065 11.8063C9.79896 11.7437 9.75125 11.6687 9.72065 11.5863C9.68732 11.5063 9.66732 11.4197 9.66732 11.333C9.66732 11.2463 9.68732 11.1597 9.72065 11.0797C9.75398 10.993 9.80065 10.9197 9.86065 10.8597C10.014 10.7063 10.2473 10.633 10.4607 10.6797C10.5073 10.6863 10.5473 10.6997 10.5873 10.7197C10.6273 10.733 10.6673 10.753 10.7073 10.7797C10.7407 10.7997 10.774 10.833 10.8073 10.8597C10.9273 10.9863 11.0007 11.1597 11.0007 11.333C11.0007 11.5063 10.9273 11.6797 10.8073 11.8063C10.6806 11.9263 10.5073 11.9997 10.334 11.9997ZM13.6673 6.55967H2.33398C2.06065 6.55967 1.83398 6.33301 1.83398 6.05967C1.83398 5.78634 2.06065 5.55967 2.33398 5.55967H13.6673C13.9406 5.55967 14.1673 5.78634 14.1673 6.05967C14.1673 6.33301 13.9406 6.55967 13.6673 6.55967Z" fill="#6A47ED"/>--}}
{{--                                        <path d="M10.6676 15.1663H5.33431C2.90098 15.1663 1.50098 13.7663 1.50098 11.333V5.66634C1.50098 3.23301 2.90098 1.83301 5.33431 1.83301H10.6676C13.101 1.83301 14.501 3.23301 14.501 5.66634V11.333C14.501 13.7663 13.101 15.1663 10.6676 15.1663ZM5.33431 2.83301C3.42764 2.83301 2.50098 3.75967 2.50098 5.66634V11.333C2.50098 13.2397 3.42764 14.1663 5.33431 14.1663H10.6676C12.5743 14.1663 13.501 13.2397 13.501 11.333V5.66634C13.501 3.75967 12.5743 2.83301 10.6676 2.83301H5.33431Z" fill="#6A47ED"/>--}}
{{--                                    </svg>--}}
{{--                                    September 6, 2024--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                            <h5><a href="news-details.html">Transid Named a Finalist For Yearâ€™ 25 Best Choice </a></h5>--}}
{{--                            <div class="news-btn">--}}
{{--                                <a href="news-details.html" class="link-btn">Read More <i class="fa-regular fa-arrow-right-long"></i></a>--}}
{{--                                <img src="{{ Vite::asset('resources/assets/img/news/client-img.png') }}" alt="img">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <!-- Cta Section Start -->--}}
{{--    <section class="cta-section section-bg section-padding pb-0">--}}
{{--        <div class="rokect-shape float-bob-y">--}}
{{--            <img src="{{ Vite::asset('resources/assets/img/rokect.png') }}" alt="img">--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <div class="cta-wrapper bg-cover" style="background-image: url('{{ Vite::asset('resources/assets/img/cta-bg.jpg') }}');">--}}
{{--                <div class="cta-img wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">--}}
{{--                    <img src="{{ Vite::asset('resources/assets/img/cta-img.png') }}" alt="img">--}}
{{--                </div>--}}
{{--                <h2 class="wow fadeInUp" data-wow-delay=".3s">--}}
{{--                    Stay Connected With <br> Cutting Edge IT--}}
{{--                </h2>--}}
{{--                <div class="main-button wow fadeInUp" data-wow-delay=".5s">--}}
{{--                    <a href="contact.html"> <span class="theme-btn"> talk TO  A SPECIALIST </span><span class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

</x-layouts.app>
