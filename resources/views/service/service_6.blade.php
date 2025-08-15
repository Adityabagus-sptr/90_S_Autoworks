<style>
    /* Responsive untuk service_6 */
    @media (max-width: 1024px) {
        .service6-header-padding {
            padding: 1.5rem 1.5rem !important;
        }
        .service6-title-img {
            width: 100% !important;
            max-width: 40rem !important;
        }
        .service6-shape-11 {
            width: 90px !important;
        }
        .service6-shape-12 {
            width: 120px !important;
        }
        .service6-img-main {
            width: 100% !important;
            max-width: 30rem !important;
        }
        .service6-text-lg {
            font-size: 2rem !important;
            padding: 1rem 2rem !important;
        }
        .service6-text-xl {
            font-size: 3rem !important;
            padding: 1rem 2rem !important;
        }
        .service6-btn-lg {
            width: 100% !important;
            font-size: 1rem !important;
            padding-left: 0.5rem !important;
            padding-right: 0.5rem !important;
        }
        .service6-shape-61,
        .service6-shape-62,
        .service6-shape-63,
        .service6-shape-64 {
            width: 7rem !important;
        }
    }
    @media (max-width: 640px) {
        .service6-header-padding {
            padding: 1rem 0.5rem !important;
        }
        .service6-title-img {
            width: 100% !important;
            max-width: 18rem !important;
        }
        .service6-shape-11 {
            width: 50px !important;
        }
        .service6-shape-12 {
            width: 70px !important;
        }
        .service6-img-main {
            width: 100% !important;
            max-width: 12rem !important;
        }
        .service6-text-lg {
            font-size: 1.1rem !important;
            padding: 0.5rem 0.5rem !important;
        }
        .service6-text-xl {
            font-size: 1.5rem !important;
            padding: 0.5rem 0.5rem !important;
        }
        .service6-btn-lg {
            width: 100% !important;
            font-size: 1rem !important;
            padding-left: 0.5rem !important;
            padding-right: 0.5rem !important;
        }
        .service6-shape-61,
        .service6-shape-62,
        .service6-shape-63,
        .service6-shape-64,
        .service6-shape-11,
        .service6-shape-12 {
            display: none !important;
        }
        .service6-gap-6 {
            gap: 1rem !important;
            flex-direction: column !important;
        }
        .service6-py-20 {
            padding-top: 2rem !important;
            padding-bottom: 2rem !important;
        }
        .service6-px-4 {
            padding-left: 0.5rem !important;
            padding-right: 0.5rem !important;
        }
    }
</style>

<div class="relative service6-header-padding" style="padding-top: 2rem">
    <div class="flex justify-center items-center">
        <div class="relative" style="padding: 2rem 4rem;">
            <img src="{{ asset('images/service_text_6.svg') }}" alt="service text 1" class="service6-title-img" style="width: 50rem">
            <div class="absolute -top-4 -left-5 service6-icon-hide">
                <img src="{{ asset('images/shape_service_11.svg') }}" alt="shape service 11" class="service6-shape-11" width="120px">
            </div>
            <div class="absolute -top-3 right-0 service6-icon-hide">
                <img src="{{ asset('images/shape_service_12.svg') }}" alt="shape service 12" class="service6-shape-12" width="160px">
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto">
    <div class="relative">
        <div class="flex justify-center service6-header-padding" style="padding: 0 4rem">
            <img src="{{ asset('images/service_image_61.svg') }}" alt="service image 61" class="object-cover service6-img-main">
        </div>
    </div>
</div>

<div class="relative">
    <div>
        <div class="text-center service6-text-xl" style="font-size: 3rem; font-weight: 600; padding: 1rem 6rem;">
            "Cari <span class="text-orange">mobil impianmu</span> atau <span class="text-orange">jual mobil
                sekarang</span>"
        </div>
        <div class="absolute left-0 -top-2 service6-icon-hide">
            <img src="{{ asset('images/shape_service_61.svg') }}" alt="shape service 61" class="service6-shape-61" width="120rem">
        </div>
    </div>
</div>

<div style="margin: 4rem 0;">
    <div class="relative">
        <div>
            <div class="text-center service6-text-xl" style="font-size: 5rem; font-weight: 600; padding: 0 0 2rem 0;">
                Fitur <span class="text-orange">Utama</span>
            </div>
            <div class="flex justify-center items-center gap-6 service6-gap-6">
                <button class="bg-orange rounded-full py-3 text-black font-bold service6-btn-lg" style="width: 22rem;">
                    INSPEKSI KENDARAAN LENGKAP
                </button>
                <button class="bg-orange rounded-full py-3 text-black font-bold service6-btn-lg" style="width: 22rem;">
                    RIWAYAT SERVICE TRANSPARAN
                </button>
                <button class="bg-orange rounded-full py-3 text-black font-bold service6-btn-lg" style="width: 22rem;">
                    HARGA KOMPETITIF DAN AMAN
                </button>
            </div>
            <div class="flex justify-center items-center gap-6 mt-8 service6-gap-6">
                <button class="bg-orange rounded-full py-3 text-black font-bold service6-btn-lg" style="padding: 15px 30px">
                    TERHUBUNG DENGAN LAYANAN DETAILING, COATING, HINGGA BODY REPAIR
                </button>
            </div>
            <div class="absolute right-0 -top-6 service6-icon-hide">
                <img src="{{ asset('images/shape_service_62.svg') }}" alt="shape service 62" class="service6-shape-62" width="120rem">
            </div>
        </div>
    </div>
</div>

<div class="relative" style="padding-top: 4rem">
    <div>
        <div style="padding: 0 4rem">
            <div class="text-center service6-text-lg" style="font-size: 2.2rem; font-weight: 500; padding: 0 2rem;">
                gak ada lagi rasa khawatir cari kendaraan atau jual kendaraan, karena ada
                90s Autotrade!
            </div>
            <div class="text-center service6-text-lg" style="font-size: 2.2rem; font-weight: 500; padding: 4rem 0;">
                *kamu bisa langsung tanya-tanya ke team representatif kami loh
            </div>
            <div class="flex justify-center items-center" style="padding-top: 4rem">
                @if($linkBookingLinks->isNotEmpty())
                    <a href="{{ $linkBookingLinks->first()->url }}"
                       @if($linkBookingLinks->first()->open_new_tab) target="_blank" @endif
                       class="btn bg-orange text-black rounded-full service6-btn-lg font-bold text-decoration-none"
                       style="font-size: 1rem; font-weight: 700; padding: 1.5rem 4rem; font-weight: bold;">BOOKING SEKARANG</a>
                @else
                    <button type="button" class="btn bg-orange text-black rounded-full service6-btn-lg font-bold"
                        style="font-size: 1rem; font-weight: 700; padding: 1.5rem 4rem; font-weight: bold;">BOOKING SEKARANG</button>
                @endif
            </div>
        </div>
        <div class="absolute left-0 service6-icon-hide" style="top: 12rem">
            <img src="{{ asset('images/shape_service_63.svg') }}" alt="shape service 63" class="service6-shape-63" width="120rem">
        </div>
        <div class="absolute right-0 -bottom-2 service6-icon-hide">
            <img src="{{ asset('images/shape_service_64.svg') }}" alt="shape service 64" class="service6-shape-64" width="120rem">
        </div>
    </div>
</div>

<div class="py-20 service6-py-20" style="background-color: #161616; margin-top: 10rem">
    <div class="px-4 mx-auto flex justify-center items-center gap-6 service6-gap-6 service6-px-4">
        <div style="font-size: 2rem">
            Dapatkan diskon khusus dengan membership
        </div>
        <div>
            @if($linkDaftarLinks->isNotEmpty())
                <a href="{{ $linkDaftarLinks->first()->url }}"
                   @if($linkDaftarLinks->first()->open_new_tab) target="_blank" @endif
                   class="btn btn-orange px-8 py-2 rounded-full service6-btn-lg font-bold text-decoration-none"
                   style="font-weight: bold; font-size: 15px;">DAFTAR</a>
            @else
                <button type="button" class="btn btn-orange px-8 py-2 rounded-full service6-btn-lg font-bold" style="font-weight: bold; font-size: 15px;">DAFTAR</button>
            @endif
        </div>
    </div>
</div>
<style>
    /* Sembunyikan icon (shape) saat responsive max-width 640px */
    @media (max-width: 640px) {
        .service6-icon-hide {
            display: none !important;
        }
    }
</style>
