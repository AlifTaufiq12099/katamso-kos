<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>@yield('title', 'Kos Nyaman & Modern')</title>

        <!-- Fonts (Inter) -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Vite Scripts and Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- AlpineJS for interactive components (dropdowns, mobile menu) -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <style>
            /* Custom utility for glassmorphism */
            .glass {
                background: rgba(255, 255, 255, 0.85);
                backdrop-filter: blur(12px);
                -webkit-backdrop-filter: blur(12px);
                border-bottom: 1px solid rgba(255, 255, 255, 0.3);
            }
        </style>
    </head>
    <body class="font-sans antialiased bg-gray-50 text-gray-800">
        
        <!-- Navbar -->
        <nav x-data="{ open: false }" class="fixed w-full z-50 glass transition-all duration-300">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-20">
                    <div class="flex items-center">
                        <a href="#" class="flex-shrink-0 flex items-center gap-2">
                            <div class="w-10 h-10 rounded-xl bg-kos-green text-white flex items-center justify-center font-bold text-xl shadow-lg shadow-kos-green/30">
                                <img src="https://i.pinimg.com/474x/f2/ea/11/f2ea116e59de337c92efc8023614f23e.jpg" alt="">
                            </div>
                            <span class="font-bold text-2xl tracking-tight text-gray-900">Katamso<span class="text-kos-green">Kos</span></span>
                        </a>
                    </div>
                    
                    <!-- Desktop Menu -->
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="#beranda" class="text-gray-600 hover:text-kos-green font-medium transition-colors">Beranda</a>
                        <a href="#fasilitas" class="text-gray-600 hover:text-kos-green font-medium transition-colors">Fasilitas</a>
                        <a href="#galeri" class="text-gray-600 hover:text-kos-green font-medium transition-colors">Galeri</a>
                        <a href="#kamar" class="text-gray-600 hover:text-kos-green font-medium transition-colors">Tipe Kamar</a>
                        <a href="#kontak" class="text-gray-600 hover:text-kos-green font-medium transition-colors">Kontak</a>
                        <a href="#kamar" class="px-5 py-2.5 bg-kos-green hover:bg-kos-dark text-white rounded-full font-semibold transition-all shadow-md hover:shadow-lg transform hover:-translate-y-0.5">Booking Sekarang</a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <div class="flex items-center md:hidden">
                        <button @click="open = !open" class="text-gray-600 hover:text-kos-green focus:outline-none">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" style="display: none;"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div x-show="open" x-transition class="md:hidden glass border-t border-gray-100 shadow-xl" style="display: none;">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                    <a href="#beranda" @click="open = false" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-kos-green hover:bg-gray-50">Beranda</a>
                    <a href="#fasilitas" @click="open = false" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-kos-green hover:bg-gray-50">Fasilitas</a>
                    <a href="#galeri" @click="open = false" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-kos-green hover:bg-gray-50">Galeri</a>
                    <a href="#kamar" @click="open = false" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-kos-green hover:bg-gray-50">Tipe Kamar</a>
                    <a href="#kontak" @click="open = false" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-kos-green hover:bg-gray-50">Kontak</a>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white pt-16 pb-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                    <div>
                        <div class="flex items-center gap-2 mb-6">
                            <div class="w-8 h-8 rounded-lg bg-kos-green text-white flex items-center justify-center font-bold text-lg">
                                K
                            </div>
                            <span class="font-bold text-xl tracking-tight text-white">Kos<span class="text-kos-green">Nyaman</span></span>
                        </div>
                        <p class="text-gray-400 leading-relaxed mb-6">
                            Pilihan hunian kos terbaik dengan fasilitas lengkap, aman, dan harga bersahabat. Kenyamanan Anda adalah prioritas kami.
                        </p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-6 border-b border-gray-700 pb-2 inline-block">Navigasi</h3>
                        <ul class="space-y-3">
                            <li><a href="#beranda" class="text-gray-400 hover:text-kos-green transition-colors">Beranda</a></li>
                            <li><a href="#fasilitas" class="text-gray-400 hover:text-kos-green transition-colors">Fasilitas</a></li>
                            <li><a href="#galeri" class="text-gray-400 hover:text-kos-green transition-colors">Galeri</a></li>
                            <li><a href="#kamar" class="text-gray-400 hover:text-kos-green transition-colors">Tipe Kamar</a></li>
                            <li><a href="#kontak" class="text-gray-400 hover:text-kos-green transition-colors">Kontak</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-6 border-b border-gray-700 pb-2 inline-block">Kontak</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-kos-green mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span class="text-gray-400">Jl. Contoh Kos Nyaman No. 123, Kota Besar, Indonesia</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-6 w-6 text-kos-green mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <span class="text-gray-400">+62 812-3456-7890</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-500 text-sm">
                    &copy; {{ date('Y') }} Kos Nyaman. All rights reserved.
                </div>
            </div>
        </footer>

    </body>
</html>
