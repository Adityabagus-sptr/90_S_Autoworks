@push('css')
    <style>
        .active {
            color: #FDC30F !important;
        }

        ul li:hover {
            color: #FDC30F !important;
        }

        /* Navbar Modern */
        /* .navbar-container {
            background: rgba(20, 20, 20, 0.85);
            border-radius: 2rem;
            box-shadow: 0 4px 24px 0 rgba(0,0,0,0.10);
            margin: 1.5rem auto 0 auto;
            max-width: 1200px;
            transition: box-shadow 0.2s;
        } */
        .navbar-container:hover {
            box-shadow: 0 8px 32px 0 rgba(0,0,0,0.18);
        }
        .navbar-menu li a {
            padding: 0.5rem 1.5rem;
            border-radius: 1.5rem;
            transition: background 0.2s, color 0.2s;
        }
        .navbar-menu li a:hover, .navbar-menu li .active {
            background: #222;
            color: #FDC30F !important;
        }
        .navbar-menu li {
            margin-right: 1.5rem;
        }
        .navbar-menu li:last-child {
            margin-right: 0;
        }
        /* Responsive Navbar */
        @media (max-width: 1280px) {
            .navbar-container {
                padding-left: 2rem !important;
                padding-right: 2rem !important;
            }
        }
        @media (max-width: 1023px) {
            .navbar-container {
                padding-left: 1rem !important;
                padding-right: 1rem !important;
                min-height: 64px;
            }
        }
        @media (max-width: 900px) {
            .navbar-container {
                padding-left: 0.5rem !important;
                padding-right: 0.5rem !important;
            }
        }
        @media (max-width: 768px) {
            .navbar-container {
                padding-left: 0.75rem !important;
                padding-right: 0.75rem !important;
                min-height: 56px;
                gap: 0.5rem;
            }
        }
        @media (max-width: 640px) {
            .navbar-container {
                padding-left: 0.5rem !important;
                padding-right: 0.5rem !important;
                min-height: 48px;
            }
        }
        /* Mobile menu animasi pop up WA dari icon */
        .mobile-nav-anim {
            transition: transform 0.35s cubic-bezier(.4,2,.6,1), opacity 0.3s;
            transform: scale(0.95) translateY(20px);
            opacity: 0;
            border-radius: 1.5rem;
            box-shadow: 0 8px 32px 0 rgba(0,0,0,0.18);
            position: absolute;
            right: 0;
            left: auto;
            top: 60px;
            width: 92vw;
            max-width: 370px;
            height: 55vh;
            max-height: 420px;
            background: #181818;
            z-index: 60;
            padding-bottom: 2rem;
            display: flex;
            flex-direction: column;
        }
        .mobile-nav-anim.show {
            transform: scale(1) translateY(0);
            opacity: 1;
        }
        /* Overlay fade */
        .mobile-nav-overlay {
            transition: opacity 0.3s;
            opacity: 0;
        }
        .mobile-nav-overlay.show {
            opacity: 0.6;
        }
        /* Mobile menu item efek */
        .mobile-nav-link {
            transition: background 0.2s, color 0.2s, padding-left 0.2s;
            border-radius: 0.75rem;
            padding-left: 0.5rem;
            display: block;
        }
        .mobile-nav-link:hover, .mobile-nav-link.active {
            background: #222;
            color: #FDC30F !important;
            padding-left: 1.2rem;
        }
        /* Mobile tombol masuk */
        .mobile-btn-masuk {
            background: #FDC30F;
            color: #000;
            font-weight: 700;
            border-radius: 9999px;
            border: 2px solid #FDC30F;
            transition: background 0.2s, color 0.2s;
        }
        .mobile-btn-masuk:hover {
            background: #fff;
            color: #FDC30F;
            border-color: #FDC30F;
        }
        /* Hamburger animasi */
        .hamburger {
            transition: background 0.2s;
            border-radius: 50%;
        }
        .hamburger:active {
            background: #FDC30F22;
        }
        /* Logo responsif: logo besar di web, kecil di mobile */
        .logo-container img {
            height: auto;
            width: auto;
            max-width: 260px;
            display: block;
            transition: max-width 0.3s;
        }
        @media (max-width: 1023px) {
            .logo-container img {
                max-width: 140px;
            }
        }
        @media (min-width: 1024px) {
            .logo-container {
                margin-left: 52px;
            }
        }
        /* Mobile nav pop up style */
        @media (max-width: 1023px) {
            .mobile-nav-anim {
                width: 92vw;
                max-width: 370px;
                height: 55vh;
                max-height: 420px;
                right: 1.5rem;
                left: auto;
                top: 60px;
                bottom: auto;
                border-radius: 1.5rem;
            }
        }
        @media (max-width: 640px) {
            .mobile-nav-anim {
                right: 0.5rem;
                top: 56px;
            }
        }
    </style>
@endpush
<div class="relative">
    <div class="flex items-center justify-between py-4 px-8 navbar-container shadow-lg">
        <div class="w-auto flex items-center gap-2">
            <div class="w-auto logo-container" style="margin-left: 24px;">
                <a class="relative z-10 inline-block" href="/">
                    <img src="{{ asset('images/logo.svg') }}" alt="" />
                </a>
            </div>
        </div>
        <div class="w-auto flex items-center">
            <div class="w-auto hidden lg:block">
                <ul class="flex items-center navbar-menu">
                    <li>
                        <a href="/" class="text-white tracking-tighter {{ request()->segment(1) == null ? 'active' : '' }}" style="font-size: 18px; font-weight: 500;">Beranda</a>
                    </li>
                    <li>
                        <a href="/about-us" class="text-white tracking-tighter {{ request()->segment(1) == 'about-us' ? 'active' : '' }}" style="font-size: 18px; font-weight: 500;">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="/service" class="text-white tracking-tighter {{ request()->segment(1) == 'service' ? 'active' : '' }}" style="font-size: 18px; font-weight: 500;">Layanan</a>
                    </li>
                    <li>
                        <a href="/article" class="text-white tracking-tighter {{ request()->segment(1) == 'article' ? 'active' : '' }}" style="font-size: 18px; font-weight: 500;">Artikel</a>
                    </li>
                    <li>
                        <a href="/contact" class="text-white tracking-tighter {{ request()->segment(1) == 'contact' ? 'active' : '' }}" style="font-size: 18px; font-weight: 500;">Kontak</a>
                    </li>
                </ul>
            </div>
            <div class="w-auto lg:hidden relative">
                <button class="relative z-20 inline-block hamburger" x-on:click="mobileNavOpen = !mobileNavOpen" id="mobileMenuBtn">
                    <svg width="51" height="51" viewBox="0 0 56 56" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <!-- Ganti icon hamburger garis 2 menjadi kotak 4 -->
                        <g>
                            <rect width="56" height="56" rx="28" fill="none"></rect>
                            <rect x="18" y="18" width="6" height="6" rx="1" fill="#fff"/>
                            <rect x="32" y="18" width="6" height="6" rx="1" fill="#fff"/>
                            <rect x="18" y="32" width="6" height="6" rx="1" fill="#fff"/>
                            <rect x="32" y="32" width="6" height="6" rx="1" fill="#fff"/>
                        </g>
                    </svg>
                </button>
                <!-- Mobile Nav Pop Up WA Style -->
                <div class="fixed inset-0 z-50" x-show="mobileNavOpen" style="display: none;">
                    <div class="fixed inset-0 bg-black mobile-nav-overlay" :class="{ 'show': mobileNavOpen }" x-on:click="mobileNavOpen = false"></div>
                    <nav class="mobile-nav-anim" :class="{ 'show': mobileNavOpen }" x-ref="mobileNav"
                        x-init="
                            $watch('mobileNavOpen', value => {
                                if(value) {
                                    setTimeout(() => {
                                        $refs.mobileNav.focus();
                                    }, 100);
                                }
                            })
                        " tabindex="-1" style="outline: none;">
                        <div class="flex flex-col h-full px-6 pt-6 pb-4">
                            <div class="flex items-center justify-between mb-4">
                                <a class="inline-block" href="/">
                                    <img src="{{ asset('images/logo.svg') }}" alt="" class="logo-mobile" style="max-width: 120px;" />
                                </a>
                                <button class="inline-block text-white" x-on:click="mobileNavOpen = false">
                                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 18L18 6M6 6L18 18" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </div>
                            <ul class="flex flex-col gap-2 mt-2">
                                <li>
                                    <a href="/" class="mobile-nav-link text-white font-medium tracking-tighter {{ request()->segment(1) == null ? 'active' : '' }}">Beranda</a>
                                </li>
                                <li>
                                    <a href="/about-us" class="mobile-nav-link text-white font-medium tracking-tighter {{ request()->segment(1) == 'about-us' ? 'active' : '' }}">Tentang Kami</a>
                                </li>
                                <li>
                                    <a href="/service" class="mobile-nav-link text-white font-medium tracking-tighter {{ request()->segment(1) == 'service' ? 'active' : '' }}">Layanan</a>
                                </li>
                                <li>
                                    <a href="/article" class="mobile-nav-link text-white font-medium tracking-tighter {{ request()->segment(1) == 'article' ? 'active' : '' }}">Artikel</a>
                                </li>
                                <li>
                                    <a href="/contact" class="mobile-nav-link text-white font-medium tracking-tighter {{ request()->segment(1) == 'contact' ? 'active' : '' }}">Kontak</a>
                                </li>
                            </ul>
                            <!-- Tombol Masuk (opsional) -->
                            <!--
                            <div class="mt-auto pt-6">
                                <a class="inline-block w-full px-8 py-4 text-center mobile-btn-masuk"
                                    href="">Masuk</a>
                            </div>
                            -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Script untuk transisi mobile nav (AlpineJS sudah ada di layout utama) -->
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.effect(() => {
            const nav = document.querySelector('.mobile-nav-anim');
            const overlay = document.querySelector('.mobile-nav-overlay');
            if (nav && overlay) {
                if (Alpine.store('mobileNavOpen')) {
                    nav.classList.add('show');
                    overlay.classList.add('show');
                } else {
                    nav.classList.remove('show');
                    overlay.classList.remove('show');
                }
            }
        });
    });
</script>
