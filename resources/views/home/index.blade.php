@extends('main')
@section('content')
    @push('css')
        <style>
            .hero-section {
                position: relative;
                width: 100vw;
                height: 100vh;
                margin: 0;
                padding: 0;
                overflow: hidden;
            }
            .hero-slider {
                width: 100vw;
                height: 100vh;
                position: relative;
            }
            .hero-slide {
                width: 100vw;
                height: 100vh;
                height: 100dvh; /* dynamic viewport */
                object-fit: cover; /* desktop tetap cover */
                object-position: center center;
                position: absolute;
                top: 0;
                left: 0;
                opacity: 0;
                transition: opacity 0.8s cubic-bezier(.4,0,.2,1);
                z-index: 1;
            }
            .hero-slide.active {
                opacity: 1;
                z-index: 2;
            }
            .hero-slider-nav {
                position: absolute;
                bottom: 32px;
                left: 50%;
                transform: translateX(-50%);
                display: flex;
                gap: 10px;
                z-index: 10;
            }
            .hero-slider-dot {
                width: 14px;
                height: 14px;
                border-radius: 50%;
                background: rgba(255,255,255,0.7);
                border: 2px solid #FDC30F;
                cursor: pointer;
                transition: background 0.2s;
            }
            .hero-slider-dot.active {
                background: #FDC30F;
            }
            /* Responsive enhancements */
            .article-shapes {
                display: block;
            }
            @media (max-width: 768px) {
                .article-shapes {
                    display: none !important;
                }
                .hero-slider-dot {
                    width: 10px;
                    height: 10px;
                }
            }
            @media (max-width: 1024px) {
                .service-title {
                    font-size: 2.5rem !important;
                }
                .app-section-title {
                    font-size: 2.8rem !important;
                }
                .article-title {
                    font-size: 3rem !important;
                }
                .partner-title {
                    font-size: 3rem !important;
                }
            }
            @media (max-width: 768px) {
                .service-title {
                    font-size: 2rem !important;
                    margin-bottom: 1rem !important;
                }
                .app-section {
                    height: auto !important;
                    padding: 2rem 1rem !important;
                    border-radius: 0 0 2rem 2rem !important;
                }
                .app-content {
                    flex-direction: column !important;
                    text-align: center !important;
                    gap: 2rem;
                }
                .app-section-title {
                    font-size: 2.2rem !important;
                    line-height: 1.2 !important;
                    margin-bottom: 1.5rem !important;
                }
                .app-button {
                    padding: 8px 40px !important;
                    font-size: 20px !important;
                }
                .app-phone {
                    width: 24rem !important;
                    max-width: 100% !important;
                }
                .article-grid {
                    flex-direction: column !important;
                    gap: 1.5rem !important;
                }
                .article-card {
                    width: 100% !important;
                    max-width: 20rem !important;
                    margin: 0 auto !important;
                }
                .article-title {
                    font-size: 2.5rem !important;
                }
                .partner-title {
                    font-size: 2.5rem !important;
                }
                .partner-grid {
                    flex-wrap: wrap !important;
                    justify-content: center !important;
                    gap: 1rem !important;
                }
                .partner-item {
                    flex: 0 0 auto !important;
                }
                .partner-item img {
                    max-width: 120px !important;
                    height: auto !important;
                }
            }
            @media (max-width: 640px) {
                .service-section {
                    padding: 3rem 0 !important;
                }
                .service-grid {
                    gap: 1rem !important;
                    padding: 0 1rem !important;
                }
                .service-card {
                    width: 180px !important;
                    padding: 1rem !important;
                }
                .service-card img {
                    max-height: 80px !important;
                }
                .service-button {
                    padding: 4px 20px !important;
                    font-size: 12px !important;
                }
                .app-section-title {
                    font-size: 1.8rem !important;
                    padding: 0 1rem !important;
                }
                .app-phone {
                    width: 18rem !important;
                }
                .article-title {
                    font-size: 2rem !important;
                    padding: 0 1rem !important;
                }
                .partner-title {
                    font-size: 2rem !important;
                    padding: 0 1rem !important;
                }
                .partner-section {
                    padding: 2rem 0 4rem 0 !important;
                }
                .partner-item img {
                    max-width: 100px !important;
                }
            }
            @media (max-width: 480px) {
                .service-title {
                    font-size: 1.5rem !important;
                }
                .service-card {
                    width: 160px !important;
                }
                .app-section-title {
                    font-size: 1.5rem !important;
                }
                .app-phone {
                    width: 16rem !important;
                }
                .article-title {
                    font-size: 1.8rem !important;
                }
                .partner-title {
                    font-size: 1.8rem !important;
                }
                .partner-item img {
                    max-width: 80px !important;
                }
            }
        </style>
    @endpush

    {{-- AOS CDN --}}
    @push('script')
        <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                AOS.init({
                    once: true,
                    duration: 900,
                    offset: 60,
                });
            });
        </script>
        <script>
            // Hero Slider with Improved Initialization
            document.addEventListener('DOMContentLoaded', function () {
                // Add small delay to ensure all elements are loaded
                setTimeout(function() {
                    const slides = document.querySelectorAll('.hero-slide');
                    const dots = document.querySelectorAll('.hero-slider-dot');
                    let current = 0;
                    let timer = null;
                    const slideCount = slides.length;
                    
                    console.log('Hero slider initialized. Slides found:', slideCount);
                    
                    if (slideCount === 0) {
                        console.error('No slides found!');
                        return;
                    }
                    
                    function showSlide(idx) {
                        // Remove active class from all slides
                        slides.forEach((slide, i) => {
                            if (i === idx) {
                                slide.classList.add('active');
                            } else {
                                slide.classList.remove('active');
                            }
                        });
                        
                        // Update dots
                        dots.forEach((dot, i) => {
                            if (i === idx) {
                                dot.classList.add('active');
                            } else {
                                dot.classList.remove('active');
                            }
                        });
                        
                        current = idx;
                    }
                    
                    function nextSlide() {
                        const next = (current + 1) % slideCount;
                        console.log('Next slide:', next);
                        showSlide(next);
                    }
                    
                    function startAutoSlide() {
                        if (timer) clearInterval(timer);
                        console.log('Starting auto slide...');
                        timer = setInterval(nextSlide, 4000); // Increased to 4 seconds
                    }
                    
                    function stopAutoSlide() {
                        if (timer) {
                            clearInterval(timer);
                            timer = null;
                        }
                    }
                    
                    // Add click handlers to dots
                    dots.forEach((dot, idx) => {
                        dot.addEventListener('click', function () {
                            stopAutoSlide();
                            showSlide(idx);
                            startAutoSlide();
                        });
                    });
                    
                    // Initialize first slide
                    showSlide(0);
                    
                    // Start auto slide after a short delay
                    setTimeout(startAutoSlide, 1000);
                    
                }, 500); // Wait 500ms for DOM to be fully ready
            });
        </script>
    @endpush

    <section class="hero-section relative overflow-hidden h-screen bg-center bg-cover bg-no-repeat" x-data="{ mobileNavOpen: false }">
        @include('layouts.topbar')
        <div class="hero-slider">
            {{-- Hanya tampilkan gambar dari database, urutkan berdasarkan sort_order dan hanya yang is_active --}}
            @php
                $activeSlides = isset($heroSlides) ? $heroSlides->where('is_active', 1)->sortBy('sort_order') : collect();
            @endphp
            @if($activeSlides->count())
                <div class="w-full h-full flex flex-col sm:flex-row items-center justify-center sm:gap-0">
                    @foreach($activeSlides as $slide)
                        <div class="w-full sm:w-auto flex-1 flex items-center justify-center">
                            <img 
                                src="{{ asset('storage/' . $slide->image_path) }}" 
                                alt="{{ $slide->title ?? 'Hero Slide' }}" 
                                class="hero-slide object-contain sm:object-contain md:object-cover w-full sm:w-screen h-[40vh] sm:h-screen md:h-[90vh] sm:rounded-none transition-all duration-300"
                                style="max-width: 100%;"
                            />
                        </div>
                    @endforeach
                </div>
            @else
                <div class="flex items-center justify-center h-full w-full" style="height: 60vh;">
                    <div class="text-center text-2xl font-bold text-orange">
                        Belum ada data slide yang tersedia.
                    </div>
                </div>
            @endif
        </div>
        <style>
            @media (max-width: 640px) {
                .hero-slider {
                    padding: 0;
                    margin: 0;
                }
                .hero-slide {
                    height: 25vh !important;
                    border-radius: 0 !important;
                    margin: 0;
                    object-fit: contain !important; /* Supaya gambar tidak terpotong di mobile */
                }
                .hero-section {
                    margin: 0;
                    padding: 0;
                    height: 30vh;
                }
            }
            @media (max-width: 1024px) and (min-width: 641px) {
                .hero-slider {
                    padding: 0;
                    margin: 0;
                }
                .hero-slide {
                    height: 50vh !important;
                    border-radius: 0 !important;
                    margin: 0;
                }
                .hero-section {
                    margin: 0;
                    padding: 0;
                    height: 50vh;
                }
            }
        </style>
    </section>

    <!-- tentang kami -->
    <section class="about-section-fullscreen" style="font-family: 'Montserrat', sans-serif;" data-aos="fade-up" data-aos-delay="100">
      <!-- Elemen Dekoratif -->
      {{-- <img src="{{ asset('images/shape_1.svg') }}" alt="Lightning Ornament" class="decoration lightning-left"> --}}
      <img src="{{ asset('images/shape_about_11.svg') }}" alt="Lightning Ornament" class="decoration lightning-right custom-lightning-right" data-aos="fade-down" data-aos-delay="200">
      <img src="{{ asset('images/shape_service_23.svg') }}" alt="Phone Ornament" class="decoration phone-left" style="width: 8vw; height: auto; left: 0vw; position: absolute; top: 500px;" data-aos="fade-right" data-aos-delay="300">
      <img src="{{ asset('images/zigzag.svg') }}" alt="Zigzag Ornament" class="decoration zigzag-bottom" style="bottom: -80px;" data-aos="fade-up" data-aos-delay="400">
      {{-- <img src="{{ asset('images/shape_2.svg') }}" alt="Circle Ornament" class="decoration circle-right"> --}}
      <!-- Tambahan: shape_about_1.svg di pojok kanan bawah -->
      <img src="{{ asset('images/shape_about_1.svg') }}" alt="Zigzag Ornament Kanan Bawah" class="decoration zigzag-bottom-right" style="bottom: 5px; right: 0px; position: absolute; top: 460px;" data-aos="fade-left" data-aos-delay="500">

      <!-- Konten -->
      <div class="content-container">
        <!-- Logo 90s di Kiri -->
        <div class="logo-container logo-besar-kiri" style="display: flex; align-items: center; justify-content: flex-start; margin-top: 40px;" data-aos="fade-right" data-aos-delay="200">
          <img src="{{ asset('images/logo_logo.png') }}" alt="90s Autoworks Logo" class="company-logo logo-super-besar" style="width: 800px; max-width: 45vw; height: auto; margin-left: 0;">
        </div>

        <!-- Teks di Kanan -->
        <div class="text-container" style="margin-left: 160px;" data-aos="fade-left" data-aos-delay="300">
          <h2 class="section-title">Tentang Kami</h2>
          <p class="section-text">
            <strong>90's Autoworks</strong> adalah industri layanan perawatan otomotif serba ada, yang didirikan di <strong>Bogor</strong> pada <strong>Oktober 2022</strong>.<br>
            Sebuah perusahaan produk dan jasa yang dinaungi oleh <strong>PT Karya Anak Sembilan Puluhan</strong>. Menyediakan kebutuhan pokok perawatan kendaraan seperti:
            <!-- <br><br> -->
            <strong>cuci kendaraan, auto detailing, cat kendaraan,</strong> dan <strong>reparasi otomotif</strong>.
          </p>
        </div>
      </div>
    </section>

    <style>
      .about-section-fullscreen {
        position: relative;
        background-color: white;
        width: 100vw;
        min-height: 100vh;
        height: auto;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        border-radius: 50px;
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
      }

      .decoration {
        position: absolute;
        pointer-events: none;
        user-select: none;
        z-index: 10;
        font-family: 'Montserrat', sans-serif;
      }

      .lightning-left {
        top: 10px;
        left: 10px;
        width: 64px;
        transform: rotate(-15deg);
        font-family: 'Montserrat', sans-serif;
      }

      .lightning-right {
        top: 10px;
        right: 120px;
        width: 64px;
        transform: rotate(15deg);
        font-family: 'Montserrat', sans-serif;
      }

      .custom-lightning-right {
        top: 40px !important;
        right: 40px !important;
        font-family: 'Montserrat', sans-serif;
      }

      .phone-left {
        bottom: 10px;
        left: 10px;
        width: 80px;
        font-family: 'Montserrat', sans-serif;
      }

      .zigzag-bottom {
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        width: 120px;
        font-family: 'Montserrat', sans-serif;
      }

      .zigzag-bottom-right {
        bottom: 20px;
        right: 20px;
        width: 100px;
        z-index: 11;
        font-family: 'Montserrat', sans-serif;
      }

      .circle-right {
        bottom: 0;
        right: 0;
        width: 320px;
        z-index: 0;
        font-family: 'Montserrat', sans-serif;
      }

      .content-container {
        position: relative;
        z-index: 20;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 40px;
        width: 100%;
        max-width: 1280px;
        padding: 40px 16px;
        font-family: 'Montserrat', sans-serif;
      }

      .logo-container {
        width: 100%;
        display: flex;
        justify-content: center;
        font-family: 'Montserrat', sans-serif;
      }

      .logo-besar-kiri {
        justify-content: flex-start !important;
        margin-left: -40px;
        font-family: 'Montserrat', sans-serif;
      }

      .company-logo {
        width: 250px;
        object-fit: contain;
        transition: width 0.3s;
        font-family: 'Montserrat', sans-serif;
      }

      .logo-super-besar {
        width: 600px !important;
        max-width: 100%;
      }

      .text-container {
        width: 100%;
        text-align: left;
        font-family: 'Montserrat', sans-serif;
        padding: 0 8px;
      }

      .section-title {
        margin-bottom: 16px;
        color: #000;
        font-size: 36px;
        font-weight: 800;
        line-height: 1.1;
        font-family: 'Montserrat', sans-serif;
      }

      .section-text {
        font-size: 14px;
        color: #000;
        line-height: 1.6;
        font-family: 'Montserrat', sans-serif;
      }

      /* RESPONSIVE */
      @media (max-width: 1023px) {
        .about-section-fullscreen {
          min-height: 80svh;
          width: 100vw;
          height: auto;
          border-radius: 24px; /* Ubah dari 0 ke 24px agar tetap ada border radius di mobile */
          padding: 0;
        }
        .content-container {
          flex-direction: column;
          align-items: center;
          gap: 24px;
          padding: 24px 8px;
        }
        .logo-container,
        .logo-besar-kiri {
          width: 100%;
          margin-left: 0 !important;
          justify-content: center !important;
          margin-top: 0 !important;
        }
        .company-logo,
        .logo-super-besar {
          width: 220px !important;
          max-width: 80vw;
        }
        .text-container {
          width: 100%;
          padding: 0 4px;
          margin-left: 0 !important;
          text-align: center;
        }
        .section-title {
          font-size: 28px;
        }
        .section-text {
          font-size: 13px;
        }
        .decoration {
          display: none;
        }
        /* Tampilkan dekorasi utama di mobile dengan ukuran lebih kecil dan posisi lebih aman */
        .decoration.lightning-right.custom-lightning-right,
        .decoration.zigzag-bottom-right {
          display: block;
          position: absolute;
          width: 60px !important;
          right: 10px !important;
          top: 10px !important;
          z-index: 1;
        }
        .decoration.zigzag-bottom-right {
          bottom: 10px !important;
          top: auto !important;
          right: 10px !important;
          width: 50px !important;
        }
      }

      @media (min-width: 768px) {
        .about-section-fullscreen {
          padding: 0;
          border-radius: 40px;
          min-height: 90vh;
          height: auto;
          font-family: 'Montserrat', sans-serif;
        }

        .content-container {
          flex-direction: row;
          margin-top: -40px;
          padding: 0 48px;
          font-family: 'Montserrat', sans-serif;
        }

        .logo-container,
        .logo-besar-kiri {
          width: 50%;
          justify-content: flex-start !important;
          margin-left: -64px;
          font-family: 'Montserrat', sans-serif;
        }

        .company-logo,
        .company-logo-besar {
          width: 800px;
          font-family: 'Montserrat', sans-serif;
        }

        .logo-super-besar {
          width: 1400px !important;
          max-width: 100%;
        }

        .text-container {
          width: 50%;
          padding: 0;
          font-family: 'Montserrat', sans-serif;
          margin-left: 160px;
          text-align: left;
        }

        .section-title {
          font-size: 60px;
          font-family: 'Montserrat', sans-serif;
        }

        .section-text {
          font-size: 18px;
          font-family: 'Montserrat', sans-serif;
        }

        .lightning-left {
          width: 100px;
          font-family: 'Montserrat', sans-serif;
        }

        .lightning-right {
          width: 100px;
          right: 180px;
          font-family: 'Montserrat', sans-serif;
        }

        .custom-lightning-right {
          top: 60px !important;
          right: 90px !important;
          font-family: 'Montserrat', sans-serif;
        }

        .phone-left {
          width: 120px;
          font-family: 'Montserrat', sans-serif;
        }

        .zigzag-bottom {
          width: 200px;
          font-family: 'Montserrat', sans-serif;
        }

        .zigzag-bottom-right {
          width: 180px;
          bottom: 40px;
          right: 40px;
          font-family: 'Montserrat', sans-serif;
        }

        .circle-right {
          width: 500px;
          font-family: 'Montserrat', sans-serif;
        }
        .decoration {
          display: block;
        }
      }

      @media (min-width: 1024px) {
        .about-section-fullscreen {
          padding: 0;
          border-radius: 40px;
          min-height: 85vh;
          height: auto;
          font-family: 'Montserrat', sans-serif;
        }

        .logo-container,
        .logo-besar-kiri {
          margin-left: -120px;
          font-family: 'Montserrat', sans-serif;
        }

        .company-logo,
        .company-logo-besar {
          width: 1000px;
          font-family: 'Montserrat', sans-serif;
        }

        .logo-super-besar {
          width: 1800px !important;
          max-width: 100%;
        }

        .section-title {
          font-size: 70px;
          font-family: 'Montserrat', sans-serif;
        }

        .circle-right {
          width: 600px;
          font-family: 'Montserrat', sans-serif;
        }

        .custom-lightning-right {
          top: 80px !important;
          right: 170px !important;
          font-family: 'Montserrat', sans-serif;
        }

        .zigzag-bottom-right {
          width: 220px;
          bottom: 60px;
          right: 60px;
          font-family: 'Montserrat', sans-serif;
        }
      }

      @media (min-width: 1280px) {
        .about-section-fullscreen {
          min-height: 80vh;
          height: auto;
          font-family: 'Montserrat', sans-serif;
        }
        .company-logo,
        .company-logo-besar {
          width: 1200px;
          font-family: 'Montserrat', sans-serif;
        }

        .logo-super-besar {
          width: 2200px !important;
          max-width: 100%;
        }

        .circle-right {
          width: 600px;
          font-family: 'Montserrat', sans-serif;
        }

        .custom-lightning-right {
          top: 100px !important;
          right: 250px !important;
          font-family: 'Montserrat', sans-serif;
        }
        .logo-container,
        .logo-besar-kiri {
          margin-left: -180px;
          font-family: 'Montserrat', sans-serif;
        }
        .zigzag-bottom-right {
          width: 260px;
          bottom: 80px;
          right: 80px;
          font-family: 'Montserrat', sans-serif;
        }
      }
    </style>


    {{-- <div class="about_us-section relative h-screen bg-center bg-cover bg-no-repeat">
    </div> --}}

    <div class="relative" style="background-color: #ffffff">
        <div>
            <div class="service-section pt-20" style="background-color: #000000" data-aos="fade-up" data-aos-delay="100">
                <div class="mb-20 md:max-w-xl text-center mx-auto px-4">
                    <div class="service-title text-orange" style="font-size: 3rem; font-weight: 700">
                        Layanan Kami
                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <div class="w-full">
                        <div class="service-grid flex flex-nowrap gap-2 overflow-x-auto px-4 w-full">
                            @foreach ($serviceDatas as $data)
                                <div class="service-card flex-shrink-0 w-48 p-2" data-aos="zoom-in" data-aos-delay="150">
                                    <div class="px-6 flex flex-col items-center justify-center h-full rounded-lg">
                                        <div class="flex justify-center items-center mb-4 h-full">
                                            <img src="{{ asset($data['brandImage']) }}" alt=""
                                                class="object-contain max-w-full max-h-full" />
                                        </div>
                                        <div class="bottom-3">
                                            <a class="service-button inline-block hover:text-black tracking-tighter hover:bg-green-400 border-2 focus:border-green-400 focus:border-opacity-40 hover:border-green-400 focus:ring-4 focus:ring-green-400 focus:ring-opacity-40 rounded-full transition duration-300"
                                                style="padding: 6px 30px; font-weight: 500; background-color: #000000; color: #FDC30F; border-color: #FDC30F"
                                                href="https://api.whatsapp.com/send/?phone=6285186803428&text&type=phone_number&app_absent=0" target="_blank" rel="noopener">
                                                {{ $data['buttonStatus'] }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="app-section relative flex justify-center items-center"
                    style="background-color: #000000; border-radius: 0 0 4rem 4rem; height: 43rem;"
                    data-aos="fade-up"
                    data-aos-delay="200"
                >
                    <div class="app-content relative flex justify-center items-center" style="padding-top: 3rem">
                        <div class="max-w-md px-4" data-aos="fade-right" data-aos-delay="250">
                            <div class="app-section-title mb-4" style="font-size: 3.5rem; font-weight: 700; color: #FDC30F">
                                Lebih mudah lewat Aplikasi
                            </div>
                            <a class="app-button inline-block hover:text-black tracking-tighter rounded-full transition duration-300"
                                style="color: #000000; font-weight: 600; font-size: 32px; padding: 10px 80px; background-color: #FDC30F; border-color: #FDC30F"
                                href="/not-found">Unduh</a>
                        </div>

                        <div class="flex justify-center" data-aos="fade-left" data-aos-delay="300">
                            <img src="{{ asset('images/iphone.png') }}" alt="iphone" class="app-phone" style="width: 48rem;" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="pb-16 pt-10" x-data="{ showContent: false }" style="background-color: #ffffff">
        <div class="relative">
            <div class="text-center px-4">
                <div class="article-title mb-6 text-black tracking-8xl md:max-w-md mx-auto" style="font-size: 4rem; font-weight: 600"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >
                    Artikel</div>
            </div>
    
            <div class="article-grid flex flex-row justify-center items-center gap-8 my-8 px-4" style="z-index: 20">
                @foreach ($articleDatas as $item)
                    <div class="article-card rounded-3xl shadow-xl" style="background-color: #181818; width: 22rem"
                        data-aos="zoom-in-up"
                        data-aos-delay="150"
                    >
                        <div>
                            @if($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" 
                                    class="object-cover rounded-t-3xl w-full" />
                            @else
                                <img src="{{ asset('images/article_1.png') }}" alt="{{ $item->title }}"
                                    class="object-cover rounded-t-3xl w-full" />
                            @endif
                        </div>
                        <div class="p-4">
                            <h3 class="text-xl font-semibold mb-2">{{ $item->title }}</h3>
                            <p class="text-gray-300 text-sm mb-4">{{ $item->description }}</p>
                            <a href="{{ route('article.detail', ['slug' => $item->slug]) }}"
                                class="font-semibold hover:underline" style="color: #FDC30F">
                                READ MORE
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="article-shapes absolute right-0 bottom-1/4" data-aos="fade-left" data-aos-delay="200">
                <img src="{{ asset('images/shape_1.svg') }}" alt="shape 1">
            </div>
            <div class="article-shapes absolute left-0 -translate-y-1/4" data-aos="fade-right" data-aos-delay="200">
                <img src="{{ asset('images/shape_2.svg') }}" alt="shape 2" />
            </div>
        </div>
    </section>

    <section class="partner-section relative overflow-hidden flex justify-center" x-data="{ active: 'introduction' }"
        style="background-color: #181818; padding: 3rem 0 8rem 0"
        data-aos="fade-up"
        data-aos-delay="100"
    >
        <div class="px-4 w-full">
            <div class="mb-12 md:max-w-4xl text-center mx-auto">
                <div class="partner-title font-heading text-white tracking-tighter-xl" style="font-size:4rem; font-weight: 500;"
                    data-aos="fade-up"
                    data-aos-delay="150"
                >Partner
                    Kami</div>
            </div>
            <div class="partner-grid flex flex-row gap-4 items-center justify-center">
                @foreach ($partnerDatas as $item)
                    <div class="partner-item" data-aos="zoom-in" data-aos-delay="200">
                        <img src="{{ asset($item['image']) }}" alt="" class="max-w-full h-auto">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @include('layouts.home_footer')
@endsection
