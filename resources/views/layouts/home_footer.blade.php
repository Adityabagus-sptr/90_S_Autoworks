<!-- AOS CDN -->
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

<section class="overflow-hidden" style="background-color: #000000">
    <div class="pt-6">
        <div class="container mx-auto" style="background-color: #000000">
            <div class="footer-content flex flex-wrap justify-center py-10 -m-8">
                <div class="footer-logo p-8" data-aos="fade-up" data-aos-delay="100">
                    <div class="md:max-w-xs flex justify-end">
                        <img class="mb-7" src="{{ asset('images/logo.png') }}" alt="logo" />
                    </div>
                </div>
                <div class="footer-visit p-8" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="mb-6 text-lg text-orange font-medium">KUNJUNGI KAMI</h2>
                    <ul class="footer-contact-list">
                        <li>
                            <strong>90s Autoworks - Dramaga:</strong><br>
                            Jl. Raya Dramaga No. 22, RT.03/RW.03, Margajaya,<br> Kec. Bogor Barat., Kota Bogor, Jawa Barat 16116
                        </li>
                        <li class="mt-4">
                            <strong>90s Autoworks - Pandu Raya:</strong><br>
                            Jl. Achmad Adnawijaya No.8, Tegal Gundil,<br> Kec. Bogor Utara, Kota Bogor, Jawa Barat 16152
                        </li>
                        <li class="mt-4">
                            +62 851-8680-3428
                        </li>
                        <li>
                            90sautoworks@gmail.com
                        </li>
                    </ul>
                </div>
                <div class="footer-app p-8" data-aos="fade-up" data-aos-delay="300">
                    <h2 class="mb-6 text-lg text-orange font-medium">UNDUH APLIKASI</h2>
                    <button type="button" class="footer-btn btn btn-orange py-2 px-10 rounded-3xl font-medium" style="font-weight: bold; font-size: 15px;">
                        UNDUH
                    </button>
                </div>
                <div class="footer-info p-8" data-aos="fade-up" data-aos-delay="400">
                    <h2 class="mb-6 text-lg text-orange font-medium">INFORMASI</h2>
                    <p class="footer-info-text">Get updates on special offer from us!</p>
                    <div class="footer-newsletter flex flex-row gap-3 pt-3">
                        <div class="footer-input-wrapper">
                            <input type="email" name="email" id="email" class="footer-email-input px-3 py-2 rounded-full"
                                placeholder="Email">
                        </div>
                        <div>
                            <button class="footer-send-btn btn btn-orange py-2 px-10 rounded-3xl font-medium font-bold" style="font-weight: bold; font-size: 15px;">
                                SEND
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright flex flex-wrap justify-center -m-2" style="background-color: #FDC30F" data-aos="fade-up" data-aos-delay="500">
            <div class="w-auto py-8">
                <p class="copyright-text inline-block text-sm font-medium text-black text-opacity-60">
                    Copyright 2024 | © 90sautoworks | Powered By Create Agency
                </p>
            </div>
        </div>
    </div>
</section>

<style>
/* Responsive Footer Styles */
@media (max-width: 1024px) {
    .footer-content {
        gap: 1rem;
    }
    
    .footer-logo, .footer-visit, .footer-app, .footer-info {
        padding: 1.5rem 1rem;
    }
    
    .footer-newsletter {
        flex-direction: column;
        gap: 1rem;
    }
    
    .footer-email-input {
        width: 100%;
        min-width: 200px;
    }
    
    .footer-send-btn {
        width: 100%;
    }
}

@media (max-width: 768px) {
    .footer-content {
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 2rem 0;
    }
    
    .footer-logo {
        order: 1;
        padding: 1rem;
    }
    
    .footer-logo .md\:max-w-xs {
        justify-content: center;
        max-width: none;
    }
    
    .footer-visit {
        order: 2;
        padding: 1.5rem 1rem;
    }
    
    .footer-app {
        order: 3;
        padding: 1.5rem 1rem;
    }
    
    .footer-info {
        order: 4;
        padding: 1.5rem 1rem;
        width: 100%;
        max-width: 300px;
    }
    
    .footer-contact-list {
        text-align: center;
    }
    
    .footer-contact-list li {
        margin-bottom: 0.5rem;
        color: #ffffff;
        font-size: 0.9rem;
    }
    
    .footer-btn {
        padding: 0.5rem 2rem;
        font-size: 0.9rem;
    }
    
    .footer-info-text {
        color: #ffffff;
        font-size: 0.9rem;
        margin-bottom: 1rem;
    }
    
    .footer-newsletter {
        flex-direction: column;
        gap: 1rem;
        align-items: center;
    }
    
    .footer-input-wrapper {
        width: 100%;
    }
    
    .footer-email-input {
        width: 100%;
        padding: 0.6rem 1rem;
        font-size: 0.9rem;
    }
    
    .footer-send-btn {
        width: 100%;
        padding: 0.6rem 2rem;
        font-size: 0.9rem;
    }
    
    .copyright-text {
        text-align: center;
        padding: 0 1rem;
        font-size: 0.8rem;
        line-height: 1.4;
    }
}

@media (max-width: 640px) {
    .footer-content {
        padding: 1.5rem 0;
    }
    
    .footer-logo img {
        max-width: 150px;
        height: auto;
        margin-bottom: 1rem;
    }
    
    .footer-visit, .footer-app, .footer-info {
        padding: 1rem;
        width: 100%;
        max-width: 280px;
    }
    
    .footer-visit h2, .footer-app h2, .footer-info h2 {
        font-size: 1rem;
        margin-bottom: 1rem;
    }
    
    .footer-contact-list li {
        font-size: 0.85rem;
        margin-bottom: 0.4rem;
    }
    
    .footer-btn, .footer-send-btn {
        padding: 0.5rem 1.5rem;
        font-size: 0.8rem;
    }
    
    .footer-info-text {
        font-size: 0.85rem;
    }
    
    .footer-email-input {
        padding: 0.5rem 0.8rem;
        font-size: 0.85rem;
    }
    
    .copyright-text {
        font-size: 0.75rem;
        padding: 0 0.5rem;
    }
}

@media (max-width: 480px) {
    .footer-logo img {
        max-width: 120px;
    }
    
    .footer-visit, .footer-app, .footer-info {
        max-width: 250px;
        padding: 0.8rem;
    }
    
    .footer-visit h2, .footer-app h2, .footer-info h2 {
        font-size: 0.9rem;
    }
    
    .footer-contact-list li {
        font-size: 0.8rem;
    }
    
    .footer-info-text {
        font-size: 0.8rem;
    }
    
    .footer-email-input {
        font-size: 0.8rem;
    }
    
    .footer-btn, .footer-send-btn {
        font-size: 0.75rem;
        padding: 0.4rem 1.2rem;
    }
    
    .copyright-text {
        font-size: 0.7rem;
        line-height: 1.5;
    }
}
</style>