<style>
    /* Responsive untuk service_3 */
    .service3-icon-hide {
        display: block;
    }
    @media (max-width: 1024px) {
        .service3-header-padding {
            padding: 1.5rem 1.5rem !important;
        }
        .service3-title {
            font-size: 2.2rem !important;
        }
        .service3-btn {
            width: 13rem !important;
            font-size: 0.95rem !important;
        }
        .service3-subtitle {
            font-size: 1.3rem !important;
            padding: 0 1rem !important;
        }
        .service3-img-large {
            width: 100% !important;
            max-width: 100% !important;
        }
        .service3-img-medium {
            width: 80% !important;
            max-width: 22rem !important;
        }
        .service3-img-small {
            width: 60% !important;
            max-width: 16rem !important;
        }
        /* Sembunyikan icon (shape) saat <= 1024px */
        .service3-icon-hide {
            display: none !important;
        }
    }
    @media (max-width: 640px) {
        .service3-header-padding {
            padding: 1rem 0.5rem !important;
        }
        .service3-title {
            font-size: 1.5rem !important;
            padding-bottom: 1rem !important;
        }
        .service3-btn {
            width: 100% !important;
            font-size: 0.9rem !important;
            padding-left: 0.5rem !important;
            padding-right: 0.5rem !important;
        }
        .service3-subtitle {
            font-size: 1rem !important;
            padding: 0 0.5rem !important;
        }
        .service3-img-large {
            width: 100% !important;
            max-width: 100% !important;
        }
        .service3-img-medium {
            width: 100% !important;
            max-width: 15rem !important;
        }
        .service3-img-small {
            width: 100% !important;
            max-width: 10rem !important;
        }
        .service3-shape-11,
        .service3-shape-12,
        .service3-shape-31,
        .service3-shape-32 {
            width: 5rem !important;
        }
        .service3-padding-section {
            padding: 1.5rem 0.5rem !important;
        }
        /* Sembunyikan icon (shape) saat <= 640px */
        .service3-icon-hide {
            display: none !important;
        }
    }
</style>

<div class="relative service3-header-padding" style="padding-top: 2rem">
    <div class="flex justify-center items-center">
        <div class="relative" style="padding: 2rem 4rem;">
            <div class="container">
                <img src="{{ asset('images/service_text_3.svg') }}" alt="service text 2" class="service3-img-large" style="width: 50rem">
                <div class="absolute -top-3 -left-3 service3-icon-hide">
                    <img src="{{ asset('images/shape_service_11.svg') }}" alt="shape service 11" class="service3-shape-11" width="95px">
                </div>
                <div class="absolute -top-2 right-0 service3-icon-hide">
                    <img src="{{ asset('images/shape_service_12.svg') }}" alt="shape service 12" class="service3-shape-12" width="145px">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="relative">
    <div>
        <div class="flex justify-center relative service3-padding-section" style="padding: 3rem 6rem; z-index:10">
            <img src="{{ asset('images/service_image_31.svg') }}" alt="service image 31" class="object-cover service3-img-large">
        </div>
        <div class="absolute right-0 service3-icon-hide" style="bottom: 6rem; z-index:9;">
            <img src="{{ asset('images/shape_service_32.svg') }}" alt="shape service 32" class="service3-shape-32" style="width: 14rem">
        </div>
    </div>
</div>

<div style="margin: 2rem 0;">
    <div class="relative">
        <div>
            <div class="text-center service3-title" style="font-size: 3.5rem; font-weight: 700; padding: 0 0 3rem 0;">
                Layanan Utama <span class="text-orange">90s Garage?</span>
            </div>
            <div class="flex justify-center items-center gap-6 flex-wrap">
                <button class="bg-orange rounded-full py-3 text-black font-bold service3-btn" style="width: 18rem;">
                    ENGINE TUNE UP
                </button>
                <button class="bg-orange rounded-full py-3 text-black font-bold service3-btn" style="width: 18rem;">
                    SERVICE KAKI-KAKI
                </button>
                <button class="bg-orange rounded-full py-3 text-black font-bold service3-btn" style="width: 18rem;">
                    REMAP ECU
                </button>
                <button class="bg-orange rounded-full py-3 text-black font-bold service3-btn" style="width: 18rem;">
                    GANTI OLI DAN FILTER
                </button>
            </div>
            <div class="flex justify-center items-center gap-6 mt-8 flex-wrap">
                <button class="bg-orange rounded-full py-3 text-black font-bold service3-btn" style="width: 18rem;">
                    MAINTENANCE BERKALA
                </button>
                <button class="bg-orange rounded-full py-3 text-black font-bold service3-btn" style="width: 18rem;">
                    TURUN FULL MESIN
                </button>
                <button class="bg-orange rounded-full py-3 text-black font-bold service3-btn" style="width: 18rem;">
                    TURUN SETENGAH MESIN
                </button>
            </div>
            <div class="absolute left-0 -top-7 service3-icon-hide">
                <img src="{{ asset('images/shape_service_31.svg') }}" alt="shape service 31" class="service3-shape-31" width="160rem">
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto">
    <div class="text-center service3-subtitle" style="font-size: 2.2rem; font-weight: 500; padding: 4rem 2rem 0 2rem;">
        Kamu gaperlu Khawatir, 90s garage mempunyai standar sekelas bengkel resmi, tapi harga jauh dibawah itu, jadi
        kamu bisa tenang sama kendaraanmu dan tenang sama dompetmu, langsung aja datang ke 90s Autoworks ya!
    </div>
    <div class="text-center service3-subtitle" style="font-size: 2.2rem; font-weight: 500; padding: 4rem 0;">
        *kamu bisa langsung tanya-tanya ke team representatif kami loh
    </div>
    <div class="flex justify-center items-center">
        <button type="button" class="btn bg-orange text-black rounded-full service3-btn font-bold"
            style="font-size: 1rem; font-weight: 700; padding: 1.5rem 4rem;">BOOKING SEKARANG</button>
    </div>
</div>

<div class="py-20" style="background-color: #161616; margin-top: 10rem">
    <div class="px-4 mx-auto flex justify-center items-center gap-6 flex-wrap">
        <div style="font-size: 2rem">
            Dapatkan diskon khusus dengan membership
        </div>
        <div>
            <button type="button" class="btn btn-orange px-8 py-2 rounded-full font-bold">DAFTAR</button>
        </div>
    </div>
</div>
