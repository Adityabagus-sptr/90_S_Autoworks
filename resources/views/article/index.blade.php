@extends('main')
@section('content')
    @push('css')
        <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
        <style>
            @media (max-width: 1024px) {
                .hero-section {
                    height: auto !important;
                    padding-top: 5rem;
                    padding-bottom: 5rem;
                }

                .text-black {
                    font-size: 4rem !important;
                    text-align: center;
                }

                .rounded-3xl {
                    width: 100% !important;
                }

                .container {
                    padding-left: 1rem;
                    padding-right: 1rem;
                }

                .flex-wrap.gap-6.justify-center {
                    flex-direction: column;
                    align-items: center;
                }

                .absolute img {
                    width: 80px !important;
                }

                .btn-orange {
                    width: 100%;
                    text-align: center;
                }

                .py-20 > .container {
                    flex-direction: column;
                    text-align: center;
                }

                .py-20 > .container > div:first-child {
                    width: 100% !important;
                    font-size: 1.5rem !important;
                }

                .w-full.md\:w-1\/2.lg\:w-4\/12 {
                    width: 100% !important;
                }

                /* Sembunyikan icon artikel pada mode responsif */
                .icon-artikel-responsive {
                    display: none !important;
                }
            }
            .card-article-interactive {
                transition: transform 0.2s, box-shadow 0.2s;
                cursor: pointer;
            }
            .card-article-interactive:hover {
                transform: translateY(-8px) scale(1.03) rotate(-1deg);
                box-shadow: 0 12px 32px 0 #fdc30f44;
            }
            .btn-orange-interactive {
                transition: background 0.2s, color 0.2s, box-shadow 0.2s;
                box-shadow: 0 2px 8px 0 #fdc30f33;
            }
            .btn-orange-interactive:hover {
                background: #ffb800;
                color: #181818;
                box-shadow: 0 6px 24px 0 #fdc30f66;
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

    <section x-data="{ mobileNavOpen: false }">
        @include('layouts.topbar')
    </section>

    <section class="relative" style="background-color: #FFFFFF">
        <div class="px-4 py-6 mx-auto bg-orange rounded-b-7xl" data-aos="fade-down" data-aos-delay="100">
            <div class="flex justify-center">
                <div class="relative">
                    <div>
                        <div class="text-black -bottom-10" style="font-size: 12rem; font-weight: 900" data-aos="zoom-in" data-aos-delay="200">Artikel</div>
                    </div>
                    <div class="absolute top-2 -left-9 icon-artikel-responsive" data-aos="fade-right" data-aos-delay="300">
                        <img src="{{ asset('images/shape_article_1.svg') }}" alt="shape_article_1" width="130px">
                    </div>
                    <div class="absolute -top-1 -right-11 icon-artikel-responsive" data-aos="fade-left" data-aos-delay="400">
                        <img src="{{ asset('images/shape_article_2.svg') }}" alt="shape_article_2" width="190px">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24" style="background-color: #ffffff">
        <div class="container px-4 mx-auto">
            <div class="flex flex-wrap gap-6 justify-center">
                @foreach ($articleDatas as $index => $item)
                    <div class="w-full md:w-1/2 lg:w-4/12 rounded-3xl shadow-xl card-article-interactive"
                        style="background-color: #181818; width: 22rem"
                        data-aos="fade-up"
                        data-aos-delay="{{ 100 + ($index % 3) * 100 }}"
                        tabindex="0"
                        onclick="window.location='{{ route('article.detail', ['slug' => $item->slug]) }}'"
                        onkeydown="if(event.key==='Enter'){window.location='{{ route('article.detail', ['slug' => $item->slug]) }}'}"
                    >
                        <div>
                            @if($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                                    class="object-cover rounded-t-3xl transition-transform duration-300 hover:scale-105" />
                            @else
                                <img src="{{ asset('images/article_1.png') }}" alt="{{ $item->title }}"
                                    class="object-cover rounded-t-3xl transition-transform duration-300 hover:scale-105" />
                            @endif
                        </div>
                        <div class="p-4">
                            <h3 class="text-xl font-semibold mb-2" data-aos="fade-right" data-aos-delay="200">{{ $item->title }}</h3>
                            <p class="text-gray-300 text-sm mb-4" data-aos="fade-up" data-aos-delay="300">{{ $item->description }}</p>
                            <a href="{{ route('article.detail', ['slug' => $item->slug]) }}"
                                class="font-semibold hover:underline"
                                style="color: #FDC30F"
                                data-aos="fade-left"
                                data-aos-delay="400"
                            >
                                BACA SELENGKAPNYA
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            @if ($articleDatas->hasPages())
                <div class="mt-12 flex justify-center" data-aos="fade-up" data-aos-delay="150">
                    {{ $articleDatas->onEachSide(1)->links('vendor.pagination.autoworks') }}
                </div>
            @endif
        </div>
    </section>

    <section class="py-20" style="background-color: #161616">
        <div class="container px-4 mx-auto flex justify-center items-center gap-6"
            data-aos="fade-up"
            data-aos-delay="100"
        >
            <div style="font-size: 2rem; width: 52rem" data-aos="fade-right" data-aos-delay="200">
                Dapatkan diskon khusus dengan membership
            </div>
            <div data-aos="zoom-in" data-aos-delay="300">
                @if($linkDaftarLinks->isNotEmpty())
                    <a href="{{ $linkDaftarLinks->first()->url }}" 
                       @if($linkDaftarLinks->first()->open_new_tab) target="_blank" @endif
                       class="btn btn-orange btn-orange-interactive px-10 py-2 rounded-full text-decoration-none"
                       style="font-weight: 600; font-size: 20px; font-weight: bold;">DAFTAR</a>
                @else
                    <button type="button" class="btn btn-orange btn-orange-interactive px-10 py-2 rounded-full"
                        style="font-weight: 600"
                        onclick="window.location.href='{{ url('/membership') }}'"
                        style="font-weight: 600; font-size: 20px; font-weight: bold;">DAFTAR</button>
                @endif
            </div>
        </div>
    </section>

    @include('layouts.footer')
@endsection
