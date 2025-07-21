<section class="overflow-hidden" style="background-color: #000000">
    <div class="mx-auto">
        <div style="background-color: #000000">
            <div class="flex flex-wrap justify-center py-10 -m-8 footer-main-row">
                <!-- Logo -->
                <div class="p-8 footer-logo-responsive">
                    <div class="md:max-w-xs flex justify-end footer-logo-inner" style="padding: 0 3rem 0 0">
                        <img class="mb-7" src="{{ asset('images/logo.png') }}" alt="logo" />
                    </div>
                </div>

                <!-- VISIT US - LEBIH LEBAR -->
                <div class="p-8" style="width: 35rem">
                    <h2 class="mb-6 text-lg text-orange font-medium">VISIT US</h2>
                    <ul class="text-justify">
                        <li>Jl Achmad Adnawijaya, Bogor Utara</li>
                        <li>Jl Raya Bogor, Bogor Barat</li>
                        <li>+62 851-8680-3428</li>
                        <li>90sautoworks@gmail.com</li>
                    </ul>
                </div>
                <style>
                    @media (max-width: 768px) {
                        .footer-visit-responsive {
                            width: 100% !important;
                            max-width: 100vw;
                            margin-left: auto;
                            margin-right: auto;
                            text-align: center;
                            display: flex;
                            flex-direction: column;
                            align-items: center;
                        }
                        .footer-visit-responsive ul {
                            text-align: center !important;
                        }
                    }
                    /* Logo di tengah saat responsif */
                    @media (max-width: 768px) {
                        .footer-main-row {
                            flex-direction: column !important;
                            align-items: center !important;
                        }
                        .footer-logo-responsive {
                            width: 100% !important;
                            display: flex !important;
                            justify-content: center !important;
                            align-items: center !important;
                            padding-left: 0 !important;
                            padding-right: 0 !important;
                        }
                        .footer-logo-inner {
                            justify-content: center !important;
                            padding: 0 !important;
                        }
                    }
                </style>
                <script>
                    // Tambahkan class responsif secara dinamis agar tidak mengganggu tampilan desktop
                    document.addEventListener('DOMContentLoaded', function() {
                        var visitDiv = document.querySelector('div.p-8[style*="width: 35rem"]');
                        if (visitDiv) {
                            visitDiv.classList.add('footer-visit-responsive');
                        }
                    });
                </script>

                <!-- INFORMASI - DI KANAN -->
                <div class="p-8 lg:ml-auto">
                    <h2 class="mb-6 text-lg text-orange font-medium"></h2>
                    <p class="text-justify">Get updates on special offer from us!</p>
                    <div class="flex flex-row gap-3 pt-3">
                        <input type="email" name="email" id="email" class="px-3 py-2 rounded-full"
                            placeholder="Email">
                        <button class="btn btn-orange py-2 px-10 rounded-3xl font-medium font-bold">SEND</button>
                    </div>
                </div>
            </div>

        </div>
        <div class="flex flex-wrap justify-center -m-2" style="background-color: #FDC30F">
            <div class="w-auto py-6 copyright-footer-responsive">
                <p class="inline-block text-sm font-medium text-black text-opacity-60 copyright-text-responsive">
                    Copyright 2024 | © 90sautoworks | Powered By Create Agency
                </p>
            </div>  
        </div>
        <style>
            @media (max-width: 640px) {
                .copyright-footer-responsive {
                    width: 100% !important;
                    text-align: center !important;
                    padding-left: 0 !important;
                    padding-right: 0 !important;
                }
                .copyright-text-responsive {
                    display: block !important;
                    width: 100% !important;
                    text-align: center !important;
                    font-size: 0.9rem !important;
                    padding-left: 0.5rem;
                    padding-right: 0.5rem;
                }
            }
        </style>
    </div>
</section>
