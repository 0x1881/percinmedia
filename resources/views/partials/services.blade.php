<!-- Service Section Start -->
<section class="service-section fix section-bg section-padding" id="services">
    <div class="bg-shape-2">
        <img src="{{ Vite::asset('resources/assets/img/service/bg-shape-2.png') }}" alt="img">
    </div>
    <div class="container">
        <div class="section-title-area">
            <div class="section-title">
                <div class="sub-title bg-color-2 wow fadeInUp">
                    <span>HİZMETLERİMİZ</span>
                </div>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                    Reklamda Doğru Adım <br> Dijitalde Büyük Etki
                </h2>
            </div>
            @if(isset($viewAll) && $viewAll)
                <div class="main-button wow fadeInUp" data-wow-delay=".3s"
                     style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <a href="/hizmetlerimiz"> <span class="theme-btn">TÜMÜNÜ GÖR </span><span class="arrow-btn"><i
                                class="fa-regular fa-arrow-up-right"></i></span></a>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="service-card-items">
                    <h3 class="title">
                        <a href="/hizmetlerimiz/google-ads">
                            Google ADS Danışmanlığı
                        </a>
                    </h3>
                    <div class="service-thumb">
                        <img src="{{ Vite::asset('resources/assets/images/services/index/google-ads.png') }}"
                             width="256" height="249" alt="img">
                    </div>
                    <div class="content">
                        <p>
                            Stratejik kampanyalar ve yüksek dönüşüm oranlarıyla reklam bütçenizi en verimli şekilde
                            yönetiyoruz.
                        </p>
                        <a href="/hizmetlerimiz/google-ads" class="service-btn">Daha Fazlasını Öğren <i
                                class="fa-solid fa-chevrons-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="service-card-items">
                    <h3 class="title">
                        <a href="/hizmetlerimiz/meta-business">
                            Meta Reklam Yönetimi
                        </a>
                    </h3>
                    <div class="service-thumb">
                        <img src="{{ Vite::asset('resources/assets/images/services/index/meta-business.png') }}"
                             width="256" height="249" alt="img">
                    </div>
                    <div class="content">
                        <p>
                            Instagram ve Facebook reklamlarınızı hedef kitlenize göre tasarlayıp görünürlüğünüzü
                            artırıyoruz.
                        </p>
                        <a href="/hizmetlerimiz/meta-business" class="service-btn">Daha Fazlasını Öğren <i
                                class="fa-solid fa-chevrons-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="service-card-items">
                    <h3 class="title">
                        <a href="/hizmetlerimiz/website">
                            Web Site Tasarımı
                        </a>
                    </h3>
                    <div class="service-thumb">
                        <img src="{{ Vite::asset('resources/assets/images/services/index/website.png') }}" width="256"
                             height="249" alt="img">
                    </div>
                    <div class="content">
                        <p>
                            Hızlı, kullanıcı dostu ve mobil uyumlu web siteleriyle markanıza dijital bir vitrin
                            tasarlıyoruz.
                        </p>
                        <a href="/hizmetlerimiz/website" class="service-btn">Daha Fazlasını Öğren <i
                                class="fa-solid fa-chevrons-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
