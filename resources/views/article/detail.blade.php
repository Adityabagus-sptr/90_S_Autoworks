@extends('main')
@push('css')
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <style>
        /* Responsive untuk section judul artikel */
        @media (max-width: 768px) {
            .artikel-title-responsive {
                font-size: 3rem !important;
            }
            .shape-article-1,
            .shape-article-2 {
                display: none !important;
            }
            .rounded-b-7xl {
                border-radius: 0 0 2rem 2rem !important;
            }
        }
        @media (max-width: 1024px) {
            .max-w-5xl {
                max-width: 100% !important;
            }
        }
        @media (max-width: 900px) {
            .flex-row.gap-6 {
                flex-direction: column !important;
                gap: 2rem !important;
            }
            .w-75.md\:w-2\/3, .w-25.md\:w-1\/3 {
                width: 100% !important;
                max-width: 100% !important;
            }
        }
        @media (max-width: 600px) {
            .py-20 {
                padding-top: 2rem !important;
                padding-bottom: 2rem !important;
            }
            .membership-text-responsive {
                font-size: 1.1rem !important;
                width: 100% !important;
            }
            .btn-orange {
                width: 100%;
                padding-left: 0 !important;
                padding-right: 0 !important;
            }
        }
    </style>
@endpush

@push('scripts')
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

@section('content')
    <section class="hero-section relative overflow-hidden h-screen bg-center bg-cover bg-no-repeat" x-data="{ mobileNavOpen: false }">
        @include('layouts.topbar')
    </section>

    <section class="relative" style="background-color: #2B2B2B">
        <div class="px-4 py-4 mx-auto bg-orange rounded-b-7xl" data-aos="fade-down" data-aos-delay="100">
            <div class="flex justify-center">
                <div class="relative">
                    <div>
                        <div class="text-black -bottom-10 artikel-title-responsive" style="font-size: 12rem; font-weight: 900" data-aos="zoom-in" data-aos-delay="200">Artikel</div>
                    </div>
                    <div class="absolute top-2 -left-9 shape-article-1" style="" data-aos="fade-right" data-aos-delay="300">
                        <img src="{{ asset('images/shape_article_1.svg') }}" alt="shape_article_1" width="130px">
                    </div>
                    <div class="absolute -top-1 -right-11 shape-article-2" style="" data-aos="fade-left" data-aos-delay="400">
                        <img src="{{ asset('images/shape_article_2.svg') }}" alt="shape_article_2" width="190px">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden" style="background-color: #2B2B2B; padding: 4rem 0 0 0">
        <div class="container px-4 py-6 mx-auto flex justify-center">
            <div class="flex flex-row gap-6 w-full max-w-5xl">
                <!-- Kolom kiri -->
                <div class="w-75 md:w-2/3" style="min-width:0;">
                    <h2 class="font-bold text-3xl mb-6 text-white" data-aos="fade-right" data-aos-delay="200">{{ $data->title }}</h2>
                    @if($data->image)
                        <img src="{{ asset('storage/' . $data->image) }}" alt="{{ $data->title }}" class="w-full mb-4 rounded-xl" data-aos="zoom-in" data-aos-delay="300">
                    @else
                        <img src="{{ asset('images/article_1.png') }}" alt="article" class="w-full mb-4 rounded-xl" data-aos="zoom-in" data-aos-delay="300">
                    @endif
                    
                    <div class="text-gray-400 mb-4" data-aos="fade-up" data-aos-delay="350">
                        <span>Dipublikasikan: {{ \Carbon\Carbon::parse($data->published_at)->format('d M Y') }}</span>
                    </div>
                    
                    <div class="text-gray-200 mb-6" data-aos="fade-up" data-aos-delay="400">
                        <p class="font-semibold text-xl">{{ $data->description }}</p>
                    </div>
                    
                    <div class="text-gray-200 break-words content" data-aos="fade-up" data-aos-delay="450">
                        {!! $data->content !!}
                    </div>

                    <div style="padding: 4rem 0 4rem 0">
                        <!-- SHARE SECTION -->
                        <div class="text-center mb-6" data-aos="fade-up" data-aos-delay="500">
                            <h3 class="text-orange font-semibold text-lg">
                                SHARE OUR ARTICLE AND DON'T FORGET TO LEAVE A COMMENT
                            </h3>
                        </div>
                        <div class="flex gap-4 justify-center mb-4 flex-wrap" data-aos="fade-up" data-aos-delay="550">
                            <button class="flex bg-blue-600 hover:bg-blue-700 text-white font-semibold transition">
                                <div class="px-3 py-2" style="background-color: #3854E4">
                                    <img src="{{ asset('images/icon_facebook.svg') }}" alt="">
                                </div>
                                <div class="px-3 py-2">Facebook</div>
                            </button>
                            <button class="flex text-white font-semibold transition" style="background-color: #229ED9">
                                <div class="px-3 py-2" style="background-color: #38C5E4">
                                    <img src="{{ asset('images/icon_tele.svg') }}" alt="">
                                </div>
                                <div class="px-3 py-2">Telegram</div>
                            </button>
                        </div>
                        <!-- COMMENT FORM SECTION -->
                        <div class="flex justify-center" data-aos="fade-up" data-aos-delay="600">
                            <form class="w-full" action="{{ route('contact.store') }}" method="POST">
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
                                <input type="hidden" name="is_read" value="0">
                                <button type="submit" class="w-full text-orange font-bold py-3 rounded-xl transition"
                                    style="border: 1px solid #FDC30F; background-color: #2B2B2B">
                                    SEND NOW
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Kolom kanan -->
                <div class="w-25 md:w-1/3" style="min-width:0;" data-aos="fade-left" data-aos-delay="300">
                    <h3 class="font-bold text-xl text-white mb-4">Read another article</h3>
                    @foreach ($anotherArticles as $item)
                        <div class="py-4 px-2 mb-2 text-center" style="background-color: #181818" data-aos="fade-up" data-aos-delay="{{ 400 + ($loop->index * 100) }}">
                            <a href="{{ route('detail-article', $item->slug) }}" class="text-orange font-semibold hover:underline">
                                {{ $item->title }}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="py-20" style="background-color: #161616">
        <div class="container px-4 mx-auto flex justify-center items-center gap-6 flex-wrap" data-aos="fade-up" data-aos-delay="100">
            <div class="membership-text-responsive" style="font-size: 2rem; width: 52rem" data-aos="fade-right" data-aos-delay="200">
                Dapatkan diskon khusus dengan membership
            </div>
            <div style="min-width: 120px;" data-aos="zoom-in" data-aos-delay="300">
                <button type="button" class="btn btn-orange px-10 py-2 rounded-full"
                    style="font-weight: 600">DAFTAR</button>
            </div>
        </div>
    </section>
    @include('layouts.footer')
@endsection
