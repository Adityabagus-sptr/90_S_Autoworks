<style>
    /* Responsive untuk section utama */
    .service-header-padding {
        padding: 2rem 4rem;
    }
    .service-title {
        font-size: 3.5rem;
        font-weight: 600;
        padding: 0 0 2rem 0;
    }
    .service-btn {
        width: 18rem;
    }
    .service-subtitle {
        font-size: 2.2rem;
        font-weight: 500;
        padding: 0 2rem;
    }
    .service-subtitle-bottom {
        font-size: 2.2rem;
        font-weight: 500;
        padding: 4rem 0;
    }
    .service-image-padding {
        padding: 0 4rem;
    }
    /* Tambahkan class untuk menyembunyikan icon saat responsive */
    .service-icon-hide {
        display: block;
    }
    @media (max-width: 1024px) {
        .service-header-padding,
        .service-image-padding {
            padding: 1.5rem 1.5rem;
        }
        .service-title {
            font-size: 2.2rem;
        }
        .service-btn {
            width: 13rem;
            font-size: 0.95rem;
        }
        .service-subtitle,
        .service-subtitle-bottom {
            font-size: 1.3rem;
            padding: 0 1rem;
        }
    }
    @media (max-width: 640px) {
        .service-header-padding,
        .service-image-padding {
            padding: 1rem 0.5rem;
        }
        .service-title {
            font-size: 1.5rem;
            padding-bottom: 1rem;
        }
        .service-btn {
            width: 100%;
            font-size: 0.9rem;
            padding-left: 0.5rem;
            padding-right: 0.5rem;
        }
        .service-subtitle,
        .service-subtitle-bottom {
            font-size: 1rem;
            padding: 0 0.5rem;
        }
        .service-subtitle-bottom {
            padding: 2rem 0;
        }
        .service-image-padding img {
            width: 100%;
            height: auto;
        }
        .service-header-padding img {
            width: 100%;
            height: auto;
        }
        .service-shape-11 {
            width: 60px !important;
        }
        .service-shape-12 {
            width: 90px !important;
        }
        .service-shape-13,
        .service-shape-14 {
            width: 7rem !important;
        }
        /* Sembunyikan icon saat responsive */
        .service-icon-hide {
            display: none !important;
        }
    }
</style>

<div class="relative">
    <div class="flex justify-center items-center">
        <div class="relative service-header-padding">
            <img src="{{ asset('images/service_text_1.svg') }}" alt="service text 1">
            <div class="absolute top-0 left-0 service-icon-hide">
                <img src="{{ asset('images/shape_service_11.svg') }}" alt="shape service 11" class="service-shape-11" width="100px">
            </div>
            <div class="absolute top-0 right-0 service-icon-hide">
                <img src="{{ asset('images/shape_service_12.svg') }}" alt="shape service 12" class="service-shape-12" width="150px">
            </div>
        </div>
    </div>
</div>

<div style="margin: 4rem 0;">
    <div class="relative">
        <div>
            <div class="text-center service-title">
                Kenapa Harus <span class="text-orange">90s Paint?</span>
            </div>
            <div class="flex flex-wrap justify-center items-center gap-6">
                <button class="bg-orange rounded-full py-3 text-black font-bold service-btn">
                    TEKNOLOGI CAT PREMIUM
                </button>
                <button class="bg-orange rounded-full py-3 text-black font-bold service-btn">
                    PROSES PRESISI & RAPI
                </button>
                <button class="bg-orange rounded-full py-3 text-black font-bold service-btn">
                    PENGERJAAN CEPAT
                </button>
                <button class="bg-orange rounded-full py-3 text-black font-bold service-btn">
                    GARANSI TERJAMIN
                </button>
            </div>
        </div>
    </div>
</div>

<div class="flex relative justify-center" style="margin: 4rem 0;">
    <div style="z-index: 10;">
        <div class="text-center service-title" style="padding: 2rem 0;">
            Layanan <span class="text-orange">90s Paint?</span>
        </div>
        <div class="service-image-padding" style="position: relative; z-index: 5;">
            <img src="{{ asset('images/service_image_1.svg') }}" alt="service image 1">
        </div>
        <div class="absolute right-0 -bottom-12 service-icon-hide" style="z-index: 1;">
            <img src="{{ asset('images/shape_service_13.svg') }}" alt="shape service 13"
                class="w-full h-full object-cover service-shape-13" style="width: 14rem">
        </div>
    </div>
</div>

<div>
    <div class="text-center service-title">
        Full Body Repaint
    </div>
    <div class="text-center service-subtitle">
        Kami mengunakan metode kerok hingga ke dasar body, tapi gausah khawatir, kalau kamu hanya ingin cat
        ulang tanpa harus mengerok body, kami pun bisa, jadi sampaikan saja keinginan kamu, 90s bakal
        kabulkan!
    </div>
    <div class="text-center service-subtitle-bottom">
        *kamu bisa langsung tanya-tanya ke team representatif kami loh
    </div>
    <div class="flex justify-center items-center">
        <button type="button" class="btn bg-orange text-black rounded-full"
            style="font-size: 1rem; font-weight: 700; padding: 1.5rem 4rem;">BOOKING SEKARANG</button>
    </div>
</div>

<div class="flex relative justify-center" style="margin: 6rem 0 0 0;">
    <div style="z-index: 10;">
        <div class="service-image-padding" style="position: relative; z-index: 5;">
            <img src="{{ asset('images/service_image_2.svg') }}" alt="service image 2">
        </div>
        <div class="absolute left-0 bottom-14 service-icon-hide" style="z-index: 1;">
            <img src="{{ asset('images/shape_service_14.svg') }}" alt="shape service 14"
                class="w-full h-full object-cover service-shape-14" style="width: 14rem;">
        </div>
    </div>
</div>

<div class="pt-4">
    <div class="text-center service-title" style="padding: 2rem 0;">
        Panel Body Repaint
    </div>
    <div class="text-center service-subtitle">
        Buat kamu yang abis kena musibah keserempet/nabrak, tenang aja di 90s paint kamu bisa cuma cat panel
        aja
        kok, jadi gaperlu harus cat keseluruhan.
    </div>
    <div class="text-center service-subtitle-bottom">
        *kamu bisa langsung tanya-tanya ke team representatif kami loh
    </div>
    <div class="flex justify-center items-center">
        <button type="button" class="btn bg-orange text-black rounded-full"
            style="font-size: 1rem; font-weight: 700; padding: 1.5rem 4rem;">BOOKING SEKARANG</button>
    </div>
</div>

<div class="py-20" style="background-color: #161616; margin-top: 10rem">
    <div class="px-4 mx-auto flex flex-wrap justify-center items-center gap-6">
        <div style="font-size: 2rem">
            Dapatkan diskon khusus dengan membership
        </div>
        <div>
            <button type="button" class="btn btn-orange px-8 py-2 rounded-full">DAFTAR</button>
        </div>
    </div>
</div>
