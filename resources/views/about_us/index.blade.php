@extends('main')
@section('content')
    {{-- Tambahkan AOS --}}
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <style>
        /* Responsive untuk halaman about us */
        @media (max-width: 1023px) {
            .aboutus-hide-mobile {
                display: none !important;
            }
            .aboutus-section-title {
                font-size: 2.2rem !important;
            }
            .aboutus-section-subtitle {
                font-size: 1.1rem !important;
            }
            .aboutus-h1 {
                font-size: 2.2rem !important;
                text-align: center !important;
            }
            .aboutus-h3 {
                font-size: 1.5rem !important;
                text-align: center !important;
            }
            .aboutus-text {
                font-size: 1rem !important;
                text-align: center !important;
            }
            .aboutus-flex-col {
                flex-direction: column !important;
                align-items: center !important;
                gap: 24px;
            }
            .aboutus-img-full {
                width: 100% !important;
                max-width: 95vw !important;
                margin: 0 auto !important;
            }
            .aboutus-px {
                padding-left: 1rem !important;
                padding-right: 1rem !important;
            }
            .aboutus-py {
                padding-top: 2rem !important;
                padding-bottom: 2rem !important;
            }
            .aboutus-mt {
                margin-top: 1.5rem !important;
            }
            .aboutus-mb {
                margin-bottom: 1.5rem !important;
            }
            .aboutus-center {
                justify-content: center !important;
                align-items: center !important;
                text-align: center !important;
            }
            .aboutus-btn {
                width: 100%;
                max-width: 320px;
                font-size: 1.1rem;
            }
            .aboutus-relative-static {
                position: static !important;
            }
            .aboutus-absolute-static {
                position: static !important;
            }
            .aboutus-mt-0 {
                margin-top: 0 !important;
            }
            .aboutus-mb-0 {
                margin-bottom: 0 !important;
            }
            .aboutus-gap-0 {
                gap: 0 !important;
            }
        }
        @media (max-width: 640px) {
            .aboutus-h1 {
                font-size: 1.5rem !important;
            }
            .aboutus-section-title {
                font-size: 1.2rem !important;
            }
            .aboutus-section-subtitle {
                font-size: 0.95rem !important;
            }
            .aboutus-h3 {
                font-size: 1.1rem !important;
            }
        }
    </style>
   <section class="hero-section relative overflow-hidden" x-data="{ mobileNavOpen: false }">
        @include('layouts.topbar')
    </section>

    <section class="relative overflow-hidden" style="background-color: #2B2B2B" data-aos="fade-up">
        <div class="px-4 py-6 mx-auto bg-orange rounded-b-7xl aboutus-px aboutus-py">
            <div class="flex justify-center aboutus-center">
                <div class="relative overflow-hidden mx-auto py-6 px-24 aboutus-px aboutus-relative-static" data-aos="zoom-in">
                    <div>
                        <h1 
                            class="text-black -bottom-10 aboutus-h1 font-extrabold"
                            style="font-size: 8rem; font-weight: 900; letter-spacing: -2px;"
                            data-aos="fade-down"
                        >
                            <span class="block
                                text-[3rem] 
                                sm:text-[4rem] 
                                md:text-[6rem] 
                                lg:text-[8rem] 
                                font-extrabold
                                leading-tight
                                "
                                style="font-weight: 900;"
                            >Tentang Kami</span>
                        </h1>
                    </div>
                    <div class="absolute top-0 left-0 aboutus-hide-mobile" data-aos="fade-right" data-aos-delay="200">
                        <img src="{{ asset('images/shape_article_1.svg') }}" alt="shape_article_1" width="100px">
                    </div>
                    <div class="absolute -top-1 -right-1 aboutus-hide-mobile" data-aos="fade-left" data-aos-delay="200">
                        <img src="{{ asset('images/shape_article_2.svg') }}" alt="shape_article_2" width="150px">
                    </div>
                </div>
            </div>
        </div>
        <style>
            @media (max-width: 1024px) {
                .aboutus-h1 span {
                    font-size: 4rem !important;
                }
            }
            @media (max-width: 640px) {
                .aboutus-h1 span {
                    font-size: 2.2rem !important;
                }
            }
        </style>
    </section>

    <section class="relative overflow-hidden" style="background-color: #2B2B2B" data-aos="fade-up">
        <div class="relative my-10 mx-auto aboutus-px">
            <div>
                <div class="flex justify-center items-center aboutus-flex-col">
                    <div class="container">
                        <div class="flex justify-center w-full items-center aboutus-flex-col">
                            <div class="relative overflow-hidden mx-auto p-10 aboutus-px aboutus-relative-static" style="width: 581px; max-width: 100vw;" data-aos="zoom-in">
                                <div class="flex justify-center p-12 aboutus-py">
                                    <img src="{{ asset('images/logo_large.png') }}" alt="logo" class="w-full aboutus-img-full" data-aos="fade-up" data-aos-delay="100" />
                                </div>
                                <div class="absolute -right-1 top-0 -translate-y-1/4 aboutus-hide-mobile" data-aos="fade-left" data-aos-delay="200">
                                    <img src="{{ asset('images/shape_article_2.svg') }}" alt="shape_article_2"
                                        class="max-w-[150px]" />
                                </div>
                                <div class="absolute left-0 top-0 z-10 aboutus-hide-mobile" data-aos="fade-right" data-aos-delay="200">
                                    <img src="{{ asset('images/shape_article_1.svg') }}" alt="shape_article_1"
                                        class="max-w-[100px]" />
                                </div>
                            </div>
                            <div class="relative mx-auto aboutus-relative-static aboutus-desc-wrapper" style="width: 50%; max-width: 100vw;" data-aos="fade-up" data-aos-delay="200">
                                <div class="font-medium text-2xl aboutus-text aboutus-desc-text">
                                    <span class="text-orange">90's Autoworks</span> adalah industri layanan perawatan otomotif serba ada, yang didirikan di <b>Bogor</b> pada <b>Oktober 2022</b>. Sebuah perusahaan produk dan jasa yang dinaungi oleh <b>PT Karya Anak Sembilan Puluhan</b>. Menyediakan kebutuhan pokok perawatan kendaraan seperti: <b>Cuci kendaraan, Auto Detailing, Cat Kendaraan, Reparasi Otomotif.</b>
                                </div>
                                <div class="absolute -top-5 right-0 aboutus-hide-mobile" data-aos="zoom-in" data-aos-delay="300">
                                    <img src="{{ asset('images/icon_plus_about.svg') }}" alt="">
                                </div>
                            </div>
                            <style>
                                @media (max-width: 1024px) {
                                    .aboutus-desc-wrapper {
                                        width: 100% !important;
                                    }
                                    .aboutus-desc-text {
                                        font-size: 1.1rem !important;
                                        text-align: justify;
                                        /* Ubah jadi paragraf, hilangkan <br> jika ada */
                                    }
                                }
                            </style>
                        </div>
                    </div>
                </div>
                <div class="absolute -bottom-14 -right-3 aboutus-hide-mobile" data-aos="fade-left" data-aos-delay="200">
                    <img src="{{ asset('images/shape_about_1.svg') }}" alt="">
                </div>
                <div class="absolute -bottom-7 left-1/2 right-12 aboutus-hide-mobile" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('images/shape_about_2.svg') }}" alt="">
                </div>
                <div class="absolute -bottom-2 aboutus-hide-mobile" data-aos="fade-right" data-aos-delay="400">
                    <img src="{{ asset('images/shape_about_3.svg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden -top-9 aboutus-mt-0" data-aos="fade-up">
        <div class="-top-10">
            <div class="flex items-center aboutus-flex-col aboutus-gap-0">
                <div class="w-full aboutus-img-container" style="max-width: 60%" data-aos="zoom-in">
                    <img src="{{ asset('images/image_about_1.png') }}" alt="image about"
                        class="w-full object-top object-cover aboutus-img-full aboutus-img-mobile-down" />
                </div>
                <style>
                    @media (max-width: 1024px) {
                        .aboutus-img-container {
                            margin-top: 2.5rem !important; /* Tambahkan jarak ke bawah pada mobile/tablet */
                            max-width: 100% !important;
                        }
                        .aboutus-img-mobile-down {
                            position: relative;
                            top: 56px; /* gambar lebih turun di mobile */
                        }
                    }
                </style>
                <div class="relative -bottom-4 aboutus-relative-static">
                    <div class="absolute text-right font-medium -left-4 aboutus-h3 aboutus-absolute-static"
                        style="font-size:10.5rem; line-height:0.8; font-weight: 600;"
                        data-aos="fade-right" data-aos-delay="200"
                    >
                        <span style="position:relative;z-index:2;">Pandu<br>
                        <span class="text-orange">Raya</span></span>
                    </div>
                    <div class="absolute -right-38 -top-9 aboutus-hide-mobile" style="width: 12rem;" data-aos="fade-left" data-aos-delay="300">
                        <img src="{{ asset('images/shape_about_4.svg') }}" alt="image about 4"
                            class="w-full object-top object-cover">
                    </div>
                    <div class="absolute -bottom-20 -left-7 aboutus-hide-mobile" style="width: 12rem;" data-aos="fade-up" data-aos-delay="400">
                        <img src="{{ asset('images/shape_about_5.svg') }}" alt="image about 5">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative -top-8 aboutus-mt-0" data-aos="fade-up">
        <div class="">
            <div class="relative mx-auto flex justify-center aboutus-center">
                <div style="width: 90%">
                    <div class="text-center">
                        <h3 class="aboutus-section-title" style="font-size: 5rem; line-height:1; font-weight: 600" data-aos="fade-down">Kami memulai dari</h3>
                    </div>
                    <div class="text-center font-medium text-3xl mt-14 aboutus-section-subtitle" data-aos="fade-up" data-aos-delay="200">
                        <span class="text-orange">90s Autoworks Pandu Raya</span> awal mulai 90s berdiri, dari sebuah ide
                        membuat ekosistem otomotif, niat mulia kami adalah menjadi wadah untuk para pelaku otomotif dimulai dari
                        Kota Bogor.
                    </div>
                </div>
                <div class="absolute b-2r right-0 aboutus-hide-mobile" data-aos="fade-left" data-aos-delay="300">
                    <img src="{{ asset('images/shape_about_6.svg') }}" alt="image about 6"
                        class="w-full object-cover object-top" style="width: 8rem">
                </div>
                <div class="absolute left-0 b-5r aboutus-hide-mobile" data-aos="fade-right" data-aos-delay="300">
                    <img src="{{ asset('images/shape_about_7.svg') }}" alt="image about 7"
                        class="w-full object-cover object-top" style="width: 8rem">
                </div>
            </div>
        </div>
    </section>

    <section class="relative aboutus-mt-0" data-aos="fade-up">
        <div class="">
            <div class="relative">
                <div class="flex items-center justify-end aboutus-flex-col aboutus-gap-0">
                    <div class="relative pb-14 aboutus-h3 aboutus-relative-static" style="font-size: 9rem; line-height:0.7; font-weight: 600;" data-aos="fade-right">
                        <div class="absolute -left-16 aboutus-absolute-static">
                            Dra
                            <br><span class="text-orange">
                                maga
                            </span>
                        </div>
                    </div>
                    <div class="w-full" style="max-width: 75%" data-aos="zoom-in" data-aos-delay="200">
                        <img src="{{ asset('images/image_about_2.png') }}" alt="image about 2"
                            class="w-full object-top object-cover aboutus-img-full">
                    </div>
                </div>
                <div class="absolute left-0 aboutus-hide-mobile" style="top: 16rem; width: 5rem" data-aos="fade-right" data-aos-delay="300">
                    <img src="{{ asset('images/shape_about_8.svg') }}" alt="shape about 8"
                        class="w-full object-fit object-cover">
                </div>
            </div>
        </div>
    </section>

    <section style="margin-bottom: 8rem" data-aos="fade-up">
        <div class="aboutus-px">
            <div class="text-center text-3xl aboutus-section-subtitle">
                Setahun setelah berjalannya Pandu Raya, kami diberikan kesempatan untuk menambah Outlet, dan memang sesuai
                dengan target kami setiap tahunnya akan lahir 90s Outlet baru, outlet ke-2 kami sebut <span
                    class="text-orange">90s Autoworks Dramaga.</span>
            </div>
        </div>
    </section>

    <section class="relative aboutus-mt-0" data-aos="fade-up">
        <div class="px-4">
            <div class="relative flex justify-center aboutus-center">
                <div class="w-full" data-aos="zoom-in">
                    <img src="{{ asset('images/image_about_3.png') }}" alt="image about 3"
                        class="w-full object-top object-cover aboutus-img-full">
                </div>
                <div class="absolute mt-32 w-full aboutus-hide-mobile" style="font-weight: 700;" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-center flex justify-center">
                        <div class="text-[7rem] md:text-[9rem]" style="width: 26.5rem; line-height: 0.8;">
                            <div class="text-start">
                                <span>Men</span>
                            </div>
                            <div class="text-end text-orange">
                                <span>Teng</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute right-0 top-4 aboutus-hide-mobile" style="width: 18rem" data-aos="fade-left" data-aos-delay="300">
                    <img src="{{ asset('images/shape_about_9.svg') }}" alt="shape about 9"
                        class="w-full object-fit object-cover">
                </div>
            </div>
        </div>
    </section>

    <section class="relative aboutus-mt-0" data-aos="fade-up">
        <div class="aboutus-px">
            <div class="text-center text-3xl aboutus-section-subtitle">
                Tepat di 3 tahun perjalanan 90s, kami kembali membuka outlet baru yang berada di daerah Bogor barat
                yaitu
                <span class="text-orange">Menteng</span>, dengan ini harapannya teman-teman dapat lebih mudah
                mendapatkan
                layanan terbaik 90s karena kami
                sekarang lebih dekat dengan tempat tinggal kamu.
            </div>
        </div>
    </section>

    <section class="relative" style="padding: 8rem 0;" data-aos="fade-up">
        <div class="px-4">
            <div class="relative">
                <div class="flex justify-center aboutus-center">
                    <div class="text-center" style="font-size: 3rem; line-height:1; width: 70%;" data-aos="zoom-in">
                        <i>“Kami akan terus bertumbuh, agar dapat terus melayani teman-teman <span
                                class="text-orange">90s</span>”</i>
                    </div>
                </div>
                <div class="absolute -top-9 aboutus-hide-mobile" data-aos="fade-right" data-aos-delay="200">
                    <img src="{{ asset('images/shape_about_10.svg') }}" alt="shape about 10">
                </div>
                <div class="absolute right-0 -top-5 aboutus-hide-mobile" data-aos="fade-left" data-aos-delay="200">
                    <img src="{{ asset('images/shape_about_11.svg') }}" alt="shape about 11">
                </div>
            </div>
        </div>
    </section>

    <section class="relative pb-20 aboutus-mb-0" data-aos="fade-up">
        <div class="container mx-auto px-4">
            <div class="relative flex flex-col items-center justify-center text-center">
                <div class="text-3xl aboutus-section-subtitle" style="max-width: 52rem" data-aos="fade-up">
                    <i>jika kamu ingin menjadi bagian dari perjalanan 90s, bisa langsung kontak kami ya!</i>
                </div>
                <div class="flex justify-center mt-6" data-aos="zoom-in" data-aos-delay="200">
                    @if($linkBookingLinks->isNotEmpty())
                    <a href="{{ $linkBookingLinks->first()->url }}"
                       @if($linkBookingLinks->first()->open_new_tab) target="_blank" @endif
                           class="btn btn-orange rounded-full py-4 px-8 fw-500 aboutus-btn font-bold text-decoration-none"><b>KONTAK KAMI</b></a>
                    @else
                        <button type="button" class="btn btn-orange px-8 py-2 rounded-full aboutus-btn" style="font-weight: 500; font-size: 20px;"><b>KONTAK KAMI</b></button>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="py-20" style="background-color: #161616" data-aos="fade-up">
        <div class="container px-4 mx-auto flex justify-center items-center gap-6 aboutus-flex-col">
            <div style="font-size: 2rem" class="aboutus-section-subtitle" data-aos="fade-up">
                Dapatkan diskon khusus dengan membership
            </div>
            <div data-aos="zoom-in" data-aos-delay="200">
                @if($linkDaftarLinks->isNotEmpty())
                    <a href="{{ $linkDaftarLinks->first()->url }}"
                       @if($linkDaftarLinks->first()->open_new_tab) target="_blank" @endif
                       class="btn btn-orange px-8 py-2 rounded-full aboutus-btn font-bold text-decoration-none">DAFTAR</a>
                @else
                    <button type="button" class="btn btn-orange px-8 py-2 rounded-full aboutus-btn" style="font-weight: 500; font-size: 20px;">DAFTAR</button>
                @endif
            </div>
        </div>
    </section>
    @include('layouts.footer')
    {{-- Script AOS --}}
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            duration: 800,
        });
    </script>
@endsection
