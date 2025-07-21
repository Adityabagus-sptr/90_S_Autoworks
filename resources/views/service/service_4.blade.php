<style>
    /* Responsive untuk service_4 */
    @media (max-width: 1024px) {
        .service4-header-padding {
            padding: 1.5rem 1.5rem !important;
        }
        .service4-img-title {
            width: 100% !important;
            max-width: 40rem !important;
        }
        .service4-shape-11 {
            width: 80px !important;
        }
        .service4-shape-12 {
            width: 110px !important;
        }
        .service4-btn {
            width: 13rem !important;
            font-size: 0.95rem !important;
        }
        .service4-img-main {
            width: 100% !important;
            max-width: 35rem !important;
        }
        .service4-shape-41,
        .service4-shape-42,
        .service4-shape-43 {
            width: 8rem !important;
        }
        .service4-shape-44 {
            width: 12rem !important;
        }
        .service4-desc,
        .service4-desc-bottom {
            font-size: 1.3rem !important;
            padding: 0 1rem !important;
        }
        .service4-py-20 {
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
        }
        /* Sembunyikan icon (shape) saat responsif */
        .service4-hide-on-responsive {
            display: none !important;
        }
    }
    @media (max-width: 640px) {
        .service4-header-padding {
            padding: 1rem 0.5rem !important;
        }
        .service4-img-title {
            width: 100% !important;
            max-width: 18rem !important;
        }
        .service4-shape-11 {
            width: 50px !important;
        }
        .service4-shape-12 {
            width: 70px !important;
        }
        .service4-btn {
            width: 100% !important;
            font-size: 0.9rem !important;
            padding-left: 0.5rem !important;
            padding-right: 0.5rem !important;
        }
        .service4-img-main {
            width: 100% !important;
            max-width: 15rem !important;
        }
        .service4-shape-41,
        .service4-shape-42,
        .service4-shape-43 {
            width: 4rem !important;
        }
        .service4-shape-44 {
            width: 7rem !important;
        }
        .service4-desc {
            font-size: 1rem !important;
            padding: 0 0.5rem !important;
        }
        .service4-desc-bottom {
            font-size: 1rem !important;
            padding: 2rem 0 !important;
        }
        .service4-py-20 {
            padding-top: 2rem !important;
            padding-bottom: 2rem !important;
        }
        .service4-gap-6 {
            gap: 0.75rem !important;
        }
        .service4-mt-10 {
            margin-top: 3rem !important;
        }
        /* Sembunyikan icon (shape) saat responsif */
        .service4-hide-on-responsive {
            display: none !important;
        }
    }
</style>

<div class="relative service4-header-padding" style="padding-top: 2rem">
    <div class="flex justify-center items-center">
        <div class="relative" style="padding: 2rem 4rem;">
            <img src="{{ asset('images/service_text_4.svg') }}" alt="service text 4" class="service4-img-title" style="width: 60rem">
            <div class="absolute top-1 -left-3 service4-hide-on-responsive">
                <img src="{{ asset('images/shape_service_11.svg') }}" alt="shape service 11" class="service4-shape-11" width="110px">
            </div>
            <div class="absolute top-0 -right-3 service4-hide-on-responsive">
                <img src="{{ asset('images/shape_service_12.svg') }}" alt="shape service 12" class="service4-shape-12" width="150px">
            </div>
        </div>
    </div>
</div>

<div style="margin: 4rem 0;">
    <div class="relative">
        <div class="container mx-auto">
            <div class="flex justify-center items-center gap-6 service4-gap-6 flex-wrap">
                <button class="bg-orange rounded-full py-3 text-black font-bold service4-btn" style="width: 18rem;">
                    SHAMPOO
                </button>
                <button class="bg-orange rounded-full py-3 text-black font-bold service4-btn" style="width: 18rem;">
                    GLASS CLEANER
                </button>
                <button class="bg-orange rounded-full py-3 text-black font-bold service4-btn" style="width: 18rem;">
                    ULTRA SEALANT
                </button>
            </div>
            <div class="flex justify-center items-center gap-6 service4-gap-6 flex-wrap" style="padding-top: 2rem">
                <button class="bg-orange rounded-full py-3 text-black font-bold service4-btn" style="width: 18rem;">
                    ENGINE DEGREASER
                </button>
                <button class="bg-orange rounded-full py-3 text-black font-bold service4-btn" style="width: 18rem;">
                    TYRE POLISH
                </button>
            </div>
        </div>
    </div>
</div>

<div class="relative">
    <div>
        <div class="flex justify-center" style="padding: 4rem 6rem;">
            <img src="{{ asset('images/service_image_41.svg') }}" alt="service image 41" class="object-cover service4-img-main"
                style="width: 55rem">
        </div>
        <div class="absolute right-0 -top-5 service4-hide-on-responsive">
            <img src="{{ asset('images/shape_service_41.svg') }}" alt="shape service 41" class="service4-shape-41" style="width: 12rem">
        </div>
        <div class="absolute top-0 service4-hide-on-responsive" style="left: 10rem">
            <img src="{{ asset('images/shape_service_42.svg') }}" alt="shape service 42" class="service4-shape-42" style="width: 12rem">
        </div>
        <div class="absolute left-0 service4-hide-on-responsive" style="bottom: 20rem">
            <img src="{{ asset('images/shape_service_43.svg') }}" alt="shape service 43" class="service4-shape-43" style="width: 12rem">
        </div>
        <div class="absolute right-0 bottom-0 service4-hide-on-responsive">
            <img src="{{ asset('images/shape_service_44.svg') }}" alt="shape service 44" class="service4-shape-44" style="width: 16rem">
        </div>
    </div>
</div>

<div class="container mx-auto">
    <div class="text-center service4-desc" style="font-size: 2.2rem; font-weight: 500; padding: 0 2rem;">
        Gak perlu khawatir lagi karena sekarang merawat kendaraan dirumah serasa
        di 90s autoworks, karena kita udah menyiapkan semua bahan yang kita gunakan di workshop untuk kalian semua,
        dalam bentuk yang lebih pack jadi bisa dibawa kemanapun.
    </div>
    <div class="text-center service4-desc-bottom" style="font-size: 2.2rem; font-weight: 500; padding: 4rem 0;">
        *kamu bisa langsung tanya-tanya ke team representatif kami loh
    </div>
    <div class="flex justify-center items-center">
        <button type="button" class="btn bg-orange text-black rounded-full service4-btn font-bold"
            style="font-size: 1rem; font-weight: 700; padding: 1.5rem 4rem;">BOOKING SEKARANG</button>
    </div>
</div>

<div class="service4-py-20 service4-mt-10" style="background-color: #161616; margin-top: 10rem">
    <div class="px-4 mx-auto flex justify-center items-center gap-6 service4-gap-6 flex-wrap">
        <div style="font-size: 2rem">
            Dapatkan diskon khusus dengan membership
        </div>
        <div>
            <button type="button" class="btn btn-orange px-8 py-2 rounded-full font-bold">DAFTAR</button>
        </div>
    </div>
</div>
