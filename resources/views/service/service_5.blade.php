<style>
    /* Responsive untuk service_5 */
    @media (max-width: 1024px) {
        .service5-header-padding {
            padding: 1.5rem 1.5rem !important;
        }
        .service5-title-img {
            width: 100% !important;
            max-width: 40rem !important;
        }
        .service5-shape-11 {
            width: 90px !important;
        }
        .service5-shape-12 {
            width: 120px !important;
        }
        .service5-img-main {
            width: 100% !important;
            max-width: 30rem !important;
        }
        .service5-text-lg {
            font-size: 1.3rem !important;
            padding: 0 1rem !important;
        }
        .service5-text-xl {
            font-size: 1.3rem !important;
            padding: 0 1rem !important;
        }
        .service5-membership-img {
            width: 100% !important;
            max-width: 30rem !important;
        }
        .service5-shape-51 {
            width: 8rem !important;
        }
        .service5-shape-52 {
            width: 8rem !important;
        }
        .service5-app-img {
            width: 100% !important;
            max-width: 20rem !important;
        }
        .service5-app-title {
            font-size: 2.2rem !important;
        }
        .service5-shape-53 {
            width: 6rem !important;
        }
        .service5-shape-54 {
            width: 10rem !important;
        }
        .service5-py-20 {
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
        }
        .service5-gap-8 {
            gap: 2rem !important;
        }
    }
    @media (max-width: 640px) {
        .service5-header-padding {
            padding: 1rem 0.5rem !important;
        }
        .service5-title-img {
            width: 100% !important;
            max-width: 18rem !important;
        }
        .service5-shape-11 {
            width: 50px !important;
        }
        .service5-shape-12 {
            width: 70px !important;
        }
        .service5-img-main {
            width: 100% !important;
            max-width: 12rem !important;
        }
        .service5-text-lg {
            font-size: 1rem !important;
            padding: 0 0.5rem !important;
        }
        .service5-text-xl {
            font-size: 1rem !important;
            padding: 0 0.5rem !important;
        }
        .service5-membership-img {
            width: 100% !important;
            max-width: 12rem !important;
        }
        .service5-shape-51 {
            width: 4rem !important;
        }
        .service5-shape-52 {
            width: 4rem !important;
        }
        .service5-app-img {
            width: 100% !important;
            max-width: 8rem !important;
        }
        .service5-app-title {
            font-size: 1.3rem !important;
        }
        .service5-shape-53 {
            width: 3rem !important;
        }
        .service5-shape-54 {
            width: 5rem !important;
        }
        .service5-py-20 {
            padding-top: 2rem !important;
            padding-bottom: 2rem !important;
        }
        .service5-gap-8 {
            gap: 1rem !important;
            flex-direction: column !important;
        }
        .service5-btn-lg {
            width: 100% !important;
            font-size: 1rem !important;
            padding-left: 0.5rem !important;
            padding-right: 0.5rem !important;
        }
        /* Sembunyikan icon/shape saat mobile */
        .service5-hide-on-mobile {
            display: none !important;
        }
    }
    /* Untuk tablet juga bisa disembunyikan jika perlu */
    @media (max-width: 1024px) {
        .service5-hide-on-tablet {
            display: none !important;
        }
    }
</style>

<div class="relative service5-header-padding" style="padding-top: 2rem">
    <div class="flex justify-center items-center">
        <div class="relative" style="padding: 2rem 4rem;">
            <img src="{{ asset('images/service_text_5.svg') }}" alt="service text 5" class="service5-title-img" style="width: 60rem">
            <div class="absolute -top-2 -left-4 service5-hide-on-mobile">
                <img src="{{ asset('images/shape_service_11.svg') }}" alt="shape service 11" class="service5-shape-11" width="130px">
            </div>
            <div class="absolute -top-1 service5-hide-on-mobile" style="right: 4rem">
                <img src="{{ asset('images/shape_service_12.svg') }}" alt="shape service 12" class="service5-shape-12" width="190px">
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto" style="padding: 3rem 0">
    <div class="flex justify-center">
        <img src="{{ asset('images/service_image_51.svg') }}" alt="service image 51" class="object-cover service5-img-main">
    </div>
</div>

<div class="container mx-auto">
    <div class="text-center service5-text-lg" style="font-size: 2.2rem; font-weight: 500; padding: 0 2rem;">
        <span class="text-orange">Cuci kendaraan</span> jadi lebih nyaman hanya lewat satu genggaman, 90s carwash
        mempunyai produk unggulan
        yaitu Membership, cukup bayar 1x dalam 1 bulan, kamu bebas cuci sepuasnya tanpa biaya tambahan.
    </div>
</div>

<div class="relative">
    <div>
        <div style="padding: 6rem 0 6rem 0">
            <div class="text-center service5-text-xl" style="font-size: 2.2rem; font-weight: 500; padding: 0 2rem;">
                <span class="text-orange">Membership</span> Mobil
            </div>
            <div class="flex justify-center mt-3">
                <img src="{{ asset('images/service_text_52.svg') }}" alt="service text 52" class="service5-membership-img" style="width: 50rem">
            </div>
        </div>
        <div style="padding: 0 0 6rem 0">
            <div class="text-center service5-text-xl" style="font-size: 2.2rem; font-weight: 500; padding: 0 2rem;">
                <span class="text-orange">Membership</span> Motor
            </div>
            <div class="flex justify-center mt-3">
                <img src="{{ asset('images/service_text_53.svg') }}" alt="service text 53" class="service5-membership-img" style="width: 50rem">
            </div>
        </div>
        <div class="absolute left-0 top-8 service5-hide-on-mobile">
            <img src="{{ asset('images/shape_service_51.svg') }}" alt="shape service 51" class="service5-shape-51" width="250rem">
        </div>
        <div class="absolute right-0 top-8 service5-hide-on-mobile">
            <img src="{{ asset('images/shape_service_52.svg') }}" alt="shape service 52" class="service5-shape-52">
        </div>
    </div>
</div>

<div class="container mx-auto">
    <div class="text-center service5-text-lg" style="font-size: 2.2rem; font-weight: 500; padding: 0 2rem;">
        dan masih banyak lagi produk cuci di 90s Carwash, langsung aja datang ke outlet terdekat dari tempat tinggalmu.
    </div>
    <div class="text-center service5-text-lg" style="font-size: 2.2rem; font-weight: 500; padding: 4rem 0;">
        *kamu bisa langsung tanya-tanya ke team representatif kami loh
    </div>
    <div class="flex justify-center items-center">
        <button type="button" class="btn bg-orange text-black rounded-full service5-btn-lg font-bold"
            style="font-size: 1rem; font-weight: 700; padding: 1.5rem 4rem;">TANYA SEKARANG</button>
    </div>
</div>

<div class="relative">
    <div>
        <div class="flex justify-center items-center gap-8 service5-gap-8" style="flex-wrap: wrap;">
            <div>
                <div class="text-orange service5-app-title" style="font-size: 4.5rem; font-weight: 600">
                    Lebih mudah <br>
                    lewat Aplikasi
                </div>
                <button type="button" class="bg-orange rounded-full text-black mt-3 service5-btn-lg"
                    style="padding: 1rem 4rem; font-size: 1.5rem; font-weight: 700">
                    Unduh
                </button>
            </div>
            <div>
                <img src="{{ asset('images/service_image_53.png') }}" alt="service image 52" class="w-full service5-app-img"
                    style="width: 42rem">
            </div>
        </div>
        <div class="absolute left-0 service5-hide-on-mobile" style="bottom: 2rem">
            <img src="{{ asset('images/shape_service_53.svg') }}" alt="shape service 53" class="service5-shape-53" width="120rem">
        </div>
        <div class="absolute -bottom-2 service5-hide-on-mobile" style="right: 15rem">
            <img src="{{ asset('images/shape_service_54.svg') }}" alt="shape service 54" class="service5-shape-54" width="180rem">
        </div>
    </div>
</div>

<div class="py-20 service5-py-20" style="background-color: #161616; margin-top: 10rem">
    <div class="px-4 mx-auto flex justify-center items-center gap-6 service5-gap-8" style="flex-wrap: wrap;">
        <div style="font-size: 2rem">
            Dapatkan diskon khusus dengan membership
        </div>
        <div>
            <button type="button" class="btn btn-orange px-8 py-2 rounded-full service5-btn-lg font-bold">DAFTAR</button>
        </div>
    </div>
</div>
