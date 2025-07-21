@extends('main')
@section('content')
    @push('scripts')
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
    @endpush
    <style>
        /* Responsive untuk section contact */
        @media (max-width: 1024px) {
            .contact-flex-row {
                flex-direction: column !important;
                gap: 2rem !important;
            }
            .contact-col {
                width: 100% !important;
                max-width: 100% !important;
            }
            .contact-logo {
                display: flex;
                justify-content: center;
            }
            .contact-form-wrapper {
                justify-content: center !important;
            }
            .contact-social {
                margin-top: 2rem !important;
                justify-content: center !important;
            }
        }
        @media (max-width: 640px) {
            .contact-title {
                font-size: 2.5rem !important;
            }
            .contact-hero-title {
                font-size: 3.5rem !important;
            }
            .contact-hero-bg {
                font-size: 4rem !important;
            }
            .contact-social {
                display: none !important;
            }
            .contact-icons {
                display: none !important;
            }
            .contact-map iframe {
                height: 250px !important;
            }
            .membership-section {
                flex-direction: column !important;
                gap: 1.5rem !important;
            }
            .membership-text {
                width: 100% !important;
                font-size: 1.2rem !important;
                text-align: center;
            }
        }
    </style>
    <section class="hero-section relative overflow-hidden h-screen bg-center bg-cover bg-no-repeat" x-data="{ mobileNavOpen: false }">
        @include('layouts.topbar')
    </section>

    <section class="relative" style="background-color: #2B2B2B">
        <div class="px-4 py-6 mx-auto bg-orange rounded-b-7xl" data-aos="fade-down" data-aos-delay="100">
            <div class="flex justify-center">
                <div class="relative">
                    <div>
                        <div class="text-black -bottom-10 contact-hero-bg" style="font-size: 12rem; font-weight: 900">Contact</div>
                    </div>
                    <div class="absolute top-2 -left-9" data-aos="fade-right" data-aos-delay="200">
                        <img src="{{ asset('images/shape_article_1.svg') }}" alt="shape_article_1" width="130px">
                    </div>
                    <div class="absolute -top-1 -right-11" data-aos="fade-left" data-aos-delay="300">
                        <img src="{{ asset('images/shape_article_2.svg') }}" alt="shape_article_2" width="190px">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden" style="background-color: #2B2B2B">
        <div class="container px-4 pb-24 mx-auto">
            <div class="pt-24 pb-8 text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-title" style="font-size: 4rem; font-weight: 600">Kontak Kami</div>
            </div>
            <div class="flex justify-center">
                <div class="flex flex-row gap-6 w-full max-w-5xl contact-flex-row">
                    <!-- Kolom kiri -->
                    <div class="w-25 md:w-1/2 contact-col" data-aos="fade-right" data-aos-delay="200">
                        <div class="contact-logo">
                            <img src="{{ asset('images/logo.svg') }}" alt="" />
                        </div>
                        <div class="mt-6">
                            <ul class="text-orange">
                                <li class="flex gap-4 mb-3 contact-icons">
                                    <div>
                                        <img src="{{ asset('images/icon_telp.svg') }}" alt="icon telp">
                                    </div>
                                    <div>
                                        +62 851-8680-3428
                                    </div>
                                </li>
                                <li class="flex gap-4 mb-3 contact-icons">
                                    <div>
                                        <img src="{{ asset('images/icon_mail.svg') }}" alt="icon mail">
                                    </div>
                                    <div>
                                        90sautoworks@gmail.com
                                    </div>
                                </li>
                                <li class="flex gap-4 contact-icons">
                                    <div>
                                        <img src="{{ asset('images/icon_map.svg') }}" alt="icon map">
                                    </div>
                                    <div>
                                        Jl. Achmad Adnawijaya, Bogor Utara
                                    </div>
                                </li>
                                <!-- Untuk mobile, tampilkan info tanpa icon -->
                                <li class="mb-3 sm:hidden block">
                                    +62 851-8680-3428
                                </li>
                                <li class="mb-3 sm:hidden block">
                                    90sautoworks@gmail.com
                                </li>
                                <li class="sm:hidden block">
                                    Jl. Achmad Adnawijaya, Bogor Utara
                                </li>
                            </ul>
                        </div>
                        <div class="flex gap-3 mt-24 contact-social" data-aos="fade-up" data-aos-delay="300">
                            <div class="flex justify-center items-center bg-orange" style="width: 35px; height: 35px;">
                                <img src="{{ asset('images/icon_facebook_1.svg') }}" alt="icon facebook"
                                    style="color: #000000">
                            </div>
                            <div class="flex justify-center items-center bg-orange" style="width: 35px; height: 35px;">
                                <img src="{{ asset('images/icon_instagram.svg') }}" alt="icon instagram">
                            </div>
                            <div class="flex justify-center items-center bg-orange" style="width: 35px; height: 35px;">
                                <img src="{{ asset('images/icon_youtube.svg') }}" alt="icon youtube">
                            </div>
                        </div>
                    </div>
                    <!-- Kolom kanan -->
                    <div class="w-25 md:w-1/2 contact-col" data-aos="fade-left" data-aos-delay="300">
                        <div class="flex justify-center contact-form-wrapper">
                            <form class="bg-[#181818] rounded-2xl w-full max-w-lg shadow-lg p-6" action="{{ route('contact.store') }}" method="POST" data-aos="zoom-in" data-aos-delay="400">
                                @csrf
                                
                                @if(session('success'))
                                    <div class="mb-4 p-4 bg-green-500 text-white rounded-xl">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                
                                <div class="mb-4">
                                    <label for="name" class="block text-orange mb-2 font-medium">NAME</label>
                                    <input type="text" id="name" name="name"
                                        class="w-full px-4 py-2 rounded-xl bg-white text-black focus:outline-none focus:ring-2 focus:ring-[#FDC30F] transition"
                                        placeholder="Your Name" required>
                                    @error('name')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="block text-orange mb-2 font-medium">EMAIL</label>
                                    <input type="email" id="email" name="email"
                                        class="w-full px-4 py-2 rounded-xl bg-white text-black focus:outline-none focus:ring-2 focus:ring-[#FDC30F] transition"
                                        placeholder="Your Email" required>
                                    @error('email')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-6">
                                    <label for="message" class="block text-orange mb-2 font-medium">MESSAGE</label>
                                    <textarea id="message" name="message" rows="6"
                                        class="w-full px-4 py-2 rounded-xl bg-white text-black focus:outline-none focus:ring-2 focus:ring-[#FDC30F] transition resize-none"
                                        placeholder="Write your message..." required></textarea>
                                    @error('message')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <button type="submit" class="text-orange font-bold py-2 px-6 rounded-xl transition"
                                    style="border: 1px solid #FDC30F; background-color: #2B2B2B">
                                    SEND NOW
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden">
        <div>
            <!-- Konten lain di sini -->

            <div class="rounded-xl overflow-hidden shadow-lg contact-map" data-aos="fade-up" data-aos-delay="200">
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1SPH3s721BA99cPdAVUHOyGZsYQKjVh4&ehbc=2E312F" width="100%" height="500"></iframe> 
            </div>
        </div>


        </div>
    </section>

    <section class="py-20" style="background-color: #161616">
        <div class="container px-4 mx-auto flex justify-center items-center gap-6 membership-section" data-aos="fade-up" data-aos-delay="100">
            <div class="membership-text" style="font-size: 2rem; width: 52rem">
                Dapatkan diskon khusus dengan membership
            </div>
            <div>
                <button type="button" class="btn btn-orange px-10 py-2 rounded-full"
                    style="font-weight: 600 ">DAFTAR</button>
            </div>
        </div>
    </section>
    @include('layouts.footer')
@endsection