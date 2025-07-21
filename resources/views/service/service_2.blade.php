<style>
    /* Responsive untuk service_2 */
    @media (max-width: 1024px) {
        .service2-header-padding {
            padding: 1.5rem 1.5rem !important;
        }
        .service2-title {
            font-size: 2.2rem !important;
        }
        .service2-btn {
            width: 13rem !important;
            font-size: 0.95rem !important;
        }
        .service2-subtitle {
            font-size: 1.3rem !important;
            padding: 0 1rem !important;
        }
        .service2-img-large {
            width: 100% !important;
            max-width: 100% !important;
        }
        .service2-img-medium {
            width: 80% !important;
            max-width: 22rem !important;
        }
        .service2-img-small {
            width: 60% !important;
            max-width: 16rem !important;
        }
        /* Sembunyikan icon (shape & logo) saat responsive <= 1024px */
        .service2-hide-on-responsive {
            display: none !important;
        }
    }
    @media (max-width: 640px) {
        .service2-header-padding {
            padding: 1rem 0.5rem !important;
        }
        .service2-title {
            font-size: 1.5rem !important;
            padding-bottom: 1rem !important;
        }
        .service2-btn {
            width: 100% !important;
            font-size: 0.9rem !important;
            padding-left: 0.5rem !important;
            padding-right: 0.5rem !important;
        }
        .service2-subtitle {
            font-size: 1rem !important;
            padding: 0 0.5rem !important;
        }
        .service2-img-large {
            width: 100% !important;
            max-width: 100% !important;
        }
        .service2-img-medium {
            width: 100% !important;
            max-width: 15rem !important;
        }
        .service2-img-small {
            width: 100% !important;
            max-width: 10rem !important;
        }
        .service2-shape-21,
        .service2-shape-23,
        .service2-shape-24,
        .service2-shape-22 {
            width: 5rem !important;
        }
        .service2-logo {
            width: 10rem !important;
        }
        .service2-logo-medium {
            width: 8rem !important;
        }
        .service2-logo-small {
            width: 7rem !important;
        }
        .service2-padding-section {
            padding: 1.5rem 0.5rem !important;
        }
        /* Sembunyikan icon (shape & logo) saat responsive <= 640px */
        .service2-hide-on-responsive {
            display: none !important;
        }
    }
</style>

<div class="relative service2-header-padding" style="padding-top: 3rem">
    <div class="flex justify-center items-center">
        <div class="relative" style="padding: 2rem 4rem;">
            <div class="container">
                <img src="{{ asset('images/service_text_2.svg') }}" alt="service text 2" class="service2-img-large" style="width: 62rem">
                <div class="absolute -top-4 -left-3 service2-hide-on-responsive">
                    <img src="{{ asset('images/shape_service_11.svg') }}" alt="shape service 11" width="100px">
                </div>
                <div class="absolute top-0 -right-4 service2-hide-on-responsive">
                    <img src="{{ asset('images/shape_service_12.svg') }}" alt="shape service 12" width="150px">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="relative" style="margin: 6rem 0 8rem 0;">
    <div>
        <div>
            <div class="text-center service2-title" style="font-size: 4rem; font-weight: 700; padding: 0 0 2rem 0;">
                Layanan Utama <span class="text-orange">90s Clinic?</span>
            </div>
            <div class="flex flex-wrap justify-center items-center gap-6">
                <button class="bg-orange rounded-full py-3 text-black font-bold service2-btn" style="width: 18rem;">
                    NANO CERAMIC COATING
                </button>
                <button class="bg-orange rounded-full py-3 text-black font-bold service2-btn" style="width: 18rem;">
                    AUTO DETAILING
                </button>
                <button class="bg-orange rounded-full py-3 text-black font-bold service2-btn" style="width: 18rem;">
                    PAINT PROTECTION FILM
                </button>
            </div>
            <div class="absolute right-0 -bottom-14 service2-hide-on-responsive">
                <img src="{{ asset('images/shape_service_21.svg') }}" alt="shape service 21" class="w-full service2-shape-21"
                    style="width: 11rem">
            </div>
        </div>
    </div>
</div>

<div class="flex justify-center service2-hide-on-responsive" style="padding: 3rem 0">
    <img src="{{ asset('images/logo_service_21.svg') }}" alt="logo service 21" class="object-cover service2-logo"
        style="width: 32rem;">
</div>

<div class="container mx-auto">
    <div class="flex justify-center" style="padding: 3rem 6rem;">
        <img src="{{ asset('images/service_image_21.svg') }}" alt="service image 21" class="object-cover service2-img-large">
    </div>
</div>

<div class="relative">
    <div>
        <div class="service2-padding-section" style="padding: 4rem 6rem 0 6rem">
            <div class="text-center service2-subtitle" style="font-size: 2rem; font-weight: 500;">
                Nano Ceramic Coating adalah salah satu layanan unggulan dari 90s Autoworks, khususnya di divisi 90s
                Clinic.
            </div>

            <div class="text-center text-orange service2-subtitle" style="font-size: 2rem; font-weight: 500; padding: 3rem 0 0 0;">
                Apa itu Nano Ceramic Coating?
            </div>

            <div class="text-center text-white service2-subtitle" style="font-size: 2rem; font-weight: 500; padding: 3rem 0 0 0;">
                • Nano Ceramic Coating adalah lapisan pelindung berbahan dasar cairan keramik yang diaplikasikan pada
                permukaan
                kendaraan.
            </div>

            <div class="text-center service2-subtitle" style="font-size: 2rem; font-weight: 500; padding: 3rem 0 0 0;">
                • Setelah mengeras, coating ini membentuk lapisan yang melindungi cat mobil dari goresan ringan, sinar
                UV,
                oksidasi, kotoran, dan air (efek hidrofobik).
            </div>

            <div class="text-center service2-subtitle" style="font-size: 2rem; font-weight: 500; padding: 3rem 0;">
                *Untuk info lebih detail, izinkan team representatif kami menghubungi anda.
            </div>
        </div>
        <div class="flex justify-center items-center">
            <button type="button" class="btn bg-orange text-black rounded-full service2-btn"
                style="font-size: 1rem; font-weight: 700; padding: 1.5rem 4rem;">BOOKING SEKARANG</button>
        </div>
        <div class="absolute left-0 -bottom-9 service2-hide-on-responsive">
            <img src="{{ asset('images/shape_service_23.svg') }}" alt="shape service 23" class="service2-shape-23" style="width: 11rem">
        </div>
    </div>
</div>

<div class="flex justify-center service2-hide-on-responsive" style="padding: 6rem 0 3rem 0">
    <img src="{{ asset('images/logo_service_22.svg') }}" alt="logo service 21" class="object-cover service2-logo-medium"
        style="width: 25rem;">
</div>

<div class="container mx-auto">
    <div class="flex justify-center" style="padding: 3rem 6rem;">
        <img src="{{ asset('images/service_image_22.svg') }}" alt="service image 21" class="object-cover service2-img-medium">
    </div>
</div>

<div class="relative service2-padding-section" style="padding: 4rem 6rem 0 6rem">
    <div class="text-center service2-subtitle" style="font-size: 2rem; font-weight: 500;">
        <span class="text-orange">Auto detailing service</span> adalah bagian dari layanan 90s Clinic, menyediakan
        beberapa layanan yang lebih mendetail untuk kendaraan kesayangan kamu, beberapa layanan nya meliputi:
    </div>

    <div>
        <div class="text-center service2-subtitle" style="font-size: 2rem; font-weight: 500; padding: 3rem 0 0 0;">
            <ul>
                <li>• Express Polish</li>
                <li>• Glass Cleaner</li>
                <li>• Interior Treatment</li>
                <li>• Headlamp Restore</li>
                <li>• Anti Karat</li>
                <li>• Peredam Suara</li>
            </ul>
        </div>
        <div class="absolute right-0 bottom-0 service2-hide-on-responsive">
            <img src="{{ asset('images/shape_service_24.svg') }}" alt="shape service 24" class="service2-shape-24" style="width: 14rem">
        </div>
    </div>

    <div class="text-center service2-subtitle" style="font-size: 2rem; font-weight: 500; padding: 3rem 0;">
        *Untuk info lebih detail, izinkan team representatif kami menghubungi anda.
    </div>
    <div class="flex justify-center items-center">
        <button type="button" class="btn bg-orange text-black rounded-full service2-btn font-bold"
            style="font-size: 1rem; font-weight: 900; padding: 1.5rem 4rem;"><b>BOOKING SEKARANG</b></button>
    </div>
</div>

<div class="flex justify-center service2-hide-on-responsive" style="padding: 10rem 0 2rem 0">
    <img src="{{ asset('images/logo_service_23.svg') }}" alt="logo service 23" class="object-cover service2-logo-small"
        style="width: 28rem;">
</div>

<div class="relative">
    <div>
        <div class="flex justify-center" style="padding: 3rem 6rem;">
            <img src="{{ asset('images/service_image_23.svg') }}" alt="service image 23" class="object-cover service2-img-small">
        </div>
        <div class="absolute service2-hide-on-responsive" style="top: 24rem">
            <img src="{{ asset('images/shape_service_22.svg') }}" alt="shape service 22" class="service2-shape-22" style="width: 7.5rem">
        </div>
    </div>
</div>

<div class="container mx-auto service2-padding-section" style="padding: 4rem 6rem 0 6rem">
    <div class="text-center service2-subtitle" style="font-size: 2rem; font-weight: 500;">
        <span class="text-orange">PPF (Paint Protection Film)</span> Treatment adalah solusi premium untuk melindungi
        cat kendaraan dari goresan, kerikil, noda, dan kerusakan akibat sinar UV.
        Bedanya dengan Nano Ceramic Coating?
    </div>

    <div class="text-center text-white service2-subtitle" style="font-size: 2rem; font-weight: 500; padding: 3rem 0 0 0;">
        • PPF: Berupa lapisan film transparan yang dipasang di atas cat kendaraan. Lebih tebal dan mampu melindungi dari
        goresan fisik.
    </div>

    <div class="text-center service2-subtitle" style="font-size: 2rem; font-weight: 500; padding: 3rem 0 0 0;">
        • Nano Ceramic Coating: Berupa cairan yang mengeras dan melindungi dari oksidasi, noda air, serta memberikan
        efek kilap.
    </div>

    <div class="text-center service2-subtitle" style="font-size: 2rem; font-weight: 500; padding: 3rem 0;">
        *Untuk info lebih detail, izinkan team representatif kami menghubungi anda.
    </div>
    <div class="flex justify-center items-center">
        <button type="button" class="btn bg-orange text-black rounded-full service2-btn font-bold"
            style="font-size: 1rem; font-weight: 700; padding: 1.5rem 4rem;">BOOKING SEKARANG</button>
    </div>
</div>

<div class="py-20" style="background-color: #161616; margin-top: 10rem">
    <div class="px-4 mx-auto flex flex-wrap justify-center items-center gap-6">
        <div style="font-size: 2rem">
            Dapatkan diskon khusus dengan membership
        </div>
        <div>
            <button type="button" class="btn btn-orange px-8 py-2 rounded-full font-bold">DAFTAR</button>
        </div>
    </div>
</div>
