<x-layouts.app :style2="true" :headerLogo3="true">
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{ Vite::asset('resources/assets/images/services/1.png') }}');">
{{--        <div class="left-shape">--}}
{{--            <img src="assets/img/breadcrumb-shape.png" alt="img">--}}
{{--        </div>--}}
{{--        <div class="right-shape">--}}
{{--            <img src="assets/img/breadcrumb-shape-2.png" alt="img">--}}
{{--        </div>--}}
        <div class="container">
            <div class="page-heading">
                <div class="breadcrumb-sub-title">
                    <h1 class="wow fadeInUp" style="color: #fff" data-wow-delay=".3s">Hedef Odaklı Dijital Hizmetler</h1>
                </div>
            </div>
        </div>
    </div>


    @include('partials.services', ['viewAll' => false])
</x-layouts.app>
