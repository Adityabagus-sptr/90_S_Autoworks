@extends('main')
@push('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
@endpush
@push('css')
    <style>
        .swiper-slide {
            display: flex !important;
            justify-content: center;
            align-items: center;
            height: auto !important;
            position: relative;
            z-index: 1;
        }

        .carousel-card {
            transition: all 0.4s cubic-bezier(.4, 2, .6, 1);
            border-radius: 2rem;
            overflow: hidden;
            background: #000000 !important;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 31rem;
            height: 19rem;
            min-width: 31rem;
            min-height: 19rem;
            max-width: 96vw;
            box-shadow: 0 4px 24px 0 rgba(0, 0, 0, 0.18), 0 1.5px 6px 0 rgba(0, 0, 0, 0.13);
            position: relative;
            padding: 1.5rem 2.1rem;
        }

        .carousel-card img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            transition: all 0.4s cubic-bezier(.4, 2, .6, 1);
            display: block;
            border-radius: 1.3rem;
            background: #000000;
        }

        .swiper-slide-active .carousel-card {
            box-shadow: 0 8px 36px 0 rgba(30, 30, 30, 0.24), 0 2px 8px 0 rgba(50, 50, 50, 0.18);
            width: 38rem;
            height: 23rem;
            min-width: 38rem;
            min-height: 23rem;
            transform: scale(1.07);
            z-index: 30 !important;
            padding: 1.8rem 2.8rem;
        }

        .swiper-slide-active .carousel-card img {
            width: 100%;
            height: 100%;
            filter: none;
        }

        .swiper-slide-next .carousel-card,
        .swiper-slide-prev .carousel-card {
            filter: grayscale(0.5) blur(0.5px);
            opacity: 0.75;
            width: 31rem;
            height: 19rem;
            min-width: 31rem;
            min-height: 19rem;
            z-index: 20 !important;
            transform: scale(0.97);
            padding: 1.5rem 2.1rem;
        }

        .swiper-slide-next .carousel-card img,
        .swiper-slide-prev .carousel-card img {
            width: 100%;
            height: 100%;
            filter: grayscale(0.5);
        }

        .swiper-slide:not(.swiper-slide-active):not(.swiper-slide-next):not(.swiper-slide-prev) .carousel-card {
            filter: grayscale(1) blur(1.2px);
            opacity: 0.4;
            width: 24rem;
            height: 14rem;
            min-width: 24rem;
            min-height: 14rem;
            z-index: 10 !important;
            transform: scale(0.92);
            padding: 1.1rem 1.5rem;
        }

        .swiper-slide:not(.swiper-slide-active):not(.swiper-slide-next):not(.swiper-slide-prev) .carousel-card img {
            width: 100%;
            height: 100%;
            filter: grayscale(1);
        }

        .swiper-slide-next {
            z-index: -1 !important;
        }

        /* Responsive */
        @media (max-width: 1200px) {

            .carousel-card,
            .swiper-slide-next .carousel-card,
            .swiper-slide-prev .carousel-card {
                width: 21rem !important;
                height: 13.5rem !important;
                min-width: unset !important;
                min-height: unset !important;
                padding: 1rem 1.4rem;
            }

            .swiper-slide-active .carousel-card {
                width: 25rem !important;
                height: 16rem !important;
                padding: 1.5rem 1.9rem;
            }
        }

        @media (max-width: 700px) {

            /* Naikkan swiper dan konten lebih ke atas */
            .mySwiper {
                margin-top: -33.5rem !important;
            }
            .carousel-card,
            .swiper-slide-next .carousel-card,
            .swiper-slide-prev .carousel-card {
                width: 14.2rem !important;
                height: 10.2rem !important;
                padding: 0.7rem 1rem;
                /* Efek animasi dan shadow untuk mobile */
                box-shadow: 0 6px 24px 0 rgba(0,0,0,0.22), 0 2px 8px 0 rgba(0,0,0,0.18);
                margin-top: -55.5rem !important;
                /* Transisi lebih halus dan menarik */
                transition: 
                    width 0.45s cubic-bezier(.4,2,.6,1),
                    height 0.45s cubic-bezier(.4,2,.6,1),
                    box-shadow 0.45s cubic-bezier(.4,2,.6,1),
                    transform 0.45s cubic-bezier(.4,2,.6,1),
                    opacity 0.45s cubic-bezier(.4,2,.6,1);
                animation: mobileCardPopEnhanced 0.7s cubic-bezier(.4,2,.6,1);
                opacity: 0.85;
            }

            .swiper-slide-active .carousel-card {
                margin-top: 35.5rem !important;
                width: 18rem !important;
                height: 12rem !important;
                padding: 1.1rem 1.5rem;
                /* Efek animasi dan shadow untuk mobile */
                box-shadow: 0 12px 36px 0 rgba(30,30,30,0.28), 0 4px 12px 0 rgba(50,50,50,0.22);
                /* Transisi lebih menarik */
                transition: 
                    width 0.55s cubic-bezier(.4,2,.6,1),
                    height 0.55s cubic-bezier(.4,2,.6,1),
                    box-shadow 0.55s cubic-bezier(.4,2,.6,1),
                    transform 0.55s cubic-bezier(.4,2,.6,1),
                    opacity 0.55s cubic-bezier(.4,2,.6,1);
                animation: mobileCardActivePopEnhanced 0.7s cubic-bezier(.4,2,.6,1);
                opacity: 1;
            }

            /* Tambahan efek swipe indicator di bawah carousel */
            .swiper-pagination-bullets {
                display: flex;
                justify-content: center;
                margin-top: 1.2rem;
            }
            .swiper-pagination-bullet {
                width: 10px;
                height: 10px;
                background: #000;
                opacity: 0.3;
                margin: 0 4px;
                border-radius: 50%;
                transition: 
                    all 0.3s cubic-bezier(.4,2,.6,1),
                    box-shadow 0.3s cubic-bezier(.4,2,.6,1);
                box-shadow: 0 0 0 0 #ffb300;
            }
            .swiper-pagination-bullet-active {
                background: #ffb300;
                opacity: 1;
                transform: scale(1.3);
                box-shadow: 0 0 12px 2px #ffb30055;
            }

            /* Teks geser untuk mobile, naikkan lebih ke atas */
            .swiper-geser-text {
                display: block;
                text-align: center;
                color: #888;
                font-size: 1rem;
                margin-top: -0.5rem;
                margin-bottom: 0.2rem;
                letter-spacing: 0.01em;
                font-style: italic;
                user-select: none;
                opacity: 0;
                animation: geserTextFadeIn 1s 0.3s forwards;
            }

            /* Animasi transisi lebih menarik */
            @keyframes mobileCardPopEnhanced {
                0% { 
                    transform: scale(0.92) rotate(-2deg); 
                    opacity: 0.5; 
                    filter: blur(2px) brightness(0.95);
                }
                60% {
                    transform: scale(1.04) rotate(1deg);
                    opacity: 0.95;
                    filter: blur(0.5px) brightness(1.05);
                }
                100% { 
                    transform: scale(1) rotate(0deg); 
                    opacity: 0.85; 
                    filter: blur(0) brightness(1);
                }
            }
            @keyframes mobileCardActivePopEnhanced {
                0% { 
                    transform: scale(1.05) rotate(2deg); 
                    opacity: 0.7; 
                    filter: blur(1.5px) brightness(0.98);
                }
                60% {
                    transform: scale(1.09) rotate(-1deg);
                    opacity: 1;
                    filter: blur(0.3px) brightness(1.08);
                }
                100% { 
                    transform: scale(1.07) rotate(0deg); 
                    opacity: 1; 
                    filter: blur(0) brightness(1);
                }
            }
            @keyframes geserTextFadeIn {
                from { opacity: 0; transform: translateY(10px);}
                to { opacity: 1; transform: translateY(0);}
            }
        }

        /* Sembunyikan teks geser di desktop */
        @media (min-width: 701px) {
            .swiper-geser-text {
                display: none !important;
            }
        }

        /* Animasi untuk mobile */
        @keyframes mobileCardPop {
            0% { transform: scale(0.95); opacity: 0.7; }
            100% { transform: scale(1); opacity: 1; }
        }
        @keyframes mobileCardActivePop {
            0% { transform: scale(1.05); opacity: 0.8; }
            100% { transform: scale(1.07); opacity: 1; }
        }
    </style>
@endpush

@section('content')
    <section class="hero-section relative overflow-hidden" x-data="{ mobileNavOpen: false }">
        @include('layouts.topbar')
    </section>

    <section class="bg-white py-10" style="padding-top: 0.5rem !important;">
        <div class="mx-auto">
            <div class="relative max-w-4xl mx-auto">
                <!-- Teks geser untuk mobile -->
                <div class="swiper-geser-text d-block d-md-none">
                    Geser ke kanan atau ke kiri untuk melihat lebih banyak
                </div>
                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($serviceDatas as $i => $item)
                            <div class="swiper-slide">
                                <div class="carousel-card">
                                    <img src="{{ asset($item['brandImage']) }}" alt="" />
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <!-- Tambahkan pagination untuk mobile -->
                    <div class="swiper-pagination d-block d-md-none"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative" style="background-color: #ffffff">
        <div class="rounded-t-3xl py-4" style="min-height:4rem; background-color: #000000">
            <div id="slide-view" class="slide-view-mobile-up" style="margin-top: 6rem;">
                {!! $serviceDatas[$currentIndex ?? 0]['html'] !!}
            </div>
        </div>
    </section>
    <style>
        @media (max-width: 700px) {
            /* Naikkan konten slide-view lebih ke atas pada mobile, lebih dekat ke atas */
            #slide-view.slide-view-mobile-up {
                margin-top: -0.5rem !important;
            }
        }
    </style>

    @include('layouts.footer')
@endsection
@push('script')
    <style>
        @media (max-width: 700px) {
            /* Naikkan konten slide-view lebih ke atas */
            .slide-view-mobile-up {
                margin-top: 2.2rem !important;
            }
        }
    </style>
    <script>
        const views = @json(array_map(fn($d) => $d['html'], $serviceDatas));
        let currentIndex = {{ $currentIndex ?? 0 }};

        function getSlidesPerView() {
            if (window.innerWidth <= 700) {
                return 1;
            } else if (window.innerWidth <= 1200) {
                return 2;
            } else {
                return 3;
            }
        }

        // Fungsi untuk menampilkan/menyembunyikan tombol navigasi di mobile
        function updateSwiperNav(swiper) {
            if (window.innerWidth <= 700) {
                swiper.navigation.disable();
                swiper.pagination.enable();
            } else {
                swiper.navigation.enable();
                swiper.pagination.disable();
            }
        }

        let swiper = new Swiper(".mySwiper", {
            slidesPerView: getSlidesPerView(),
            centeredSlides: true,
            loop: true,
            spaceBetween: 32,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
                enabled: window.innerWidth <= 700 // hanya aktif di mobile
            },
            on: {
                slideChange: function() {
                    currentIndex = this.realIndex;
                    document.getElementById('slide-view').innerHTML = views[currentIndex];
                },
                init: function() {
                    updateSwiperNav(this);
                },
                resize: function() {
                    updateSwiperNav(this);
                }
            }
        });

        // Update slidesPerView saat resize layar
        window.addEventListener('resize', function() {
            let newSlidesPerView = getSlidesPerView();
            if (swiper.params.slidesPerView !== newSlidesPerView) {
                swiper.params.slidesPerView = newSlidesPerView;
                swiper.update();
            }
            // Update navigasi dan pagination
            updateSwiperNav(swiper);

            // Naikkan slide-view lebih ke atas saat mobile
            if(window.innerWidth <= 700) {
                document.getElementById('slide-view').classList.add('slide-view-mobile-up');
            } else {
                document.getElementById('slide-view').classList.remove('slide-view-mobile-up');
            }
        });

        // Inisialisasi posisi konten saat load pertama
        document.addEventListener('DOMContentLoaded', function() {
            if(window.innerWidth <= 700) {
                document.getElementById('slide-view').classList.add('slide-view-mobile-up');
            }
        });

        // Swipe gesture feedback untuk mobile (opsional, efek sentuh)
        if ('ontouchstart' in window) {
            document.querySelectorAll('.carousel-card').forEach(function(card) {
                card.addEventListener('touchstart', function() {
                    card.style.boxShadow = '0 16px 40px 0 rgba(255,179,0,0.25)';
                });
                card.addEventListener('touchend', function() {
                    card.style.boxShadow = '';
                });
            });
        }
    </script>
@endpush
