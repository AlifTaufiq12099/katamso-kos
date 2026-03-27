@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section id="beranda" class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <!-- Abstract background pattern with CSS -->
        <div class="absolute inset-0 bg-white"></div>
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-kos-green opacity-10 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 rounded-full bg-kos-green opacity-10 blur-3xl"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto">
            <span class="inline-block py-1 px-3 rounded-full bg-kos-green/10 text-kos-green font-semibold text-sm mb-6 border border-kos-green/20">
                Pilihan Cerdas Mahasiswa & Pekerja
            </span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight tracking-tight mb-6">
                Temukan Kenyamanan Seperti di <span class="text-kos-green">Rumah Sendiri</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-600 mb-10 leading-relaxed">
                Kos Nyaman menawarkan lingkungan yang tenang, bersih, dan aman dengan fasilitas memadai. Mulai dari Rp 500.000 per bulan, pilih kamar yang sesuai dengan kebutuhan Anda.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#kamar" class="w-full sm:w-auto px-8 py-3.5 bg-kos-green hover:bg-kos-dark text-white rounded-full font-semibold text-lg transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    Lihat Pilihan Kamar
                </a>
                <a href="#fasilitas" class="w-full sm:w-auto px-8 py-3.5 bg-white hover:bg-gray-50 text-gray-800 border border-gray-200 rounded-full font-semibold text-lg transition-all shadow-sm">
                    Jelajahi Fasilitas
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Fasilitas Section -->
<section id="fasilitas" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-base text-kos-green font-semibold tracking-wide uppercase">Fasilitas Bersama</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                Kenyamanan Ekstra Untuk Anda
            </p>
            <p class="mt-4 max-w-2xl text-lg text-gray-500 mx-auto">
                Kami menyediakan fasilitas pendukung untuk memastikan kebutuhan harian Anda terpenuhi tanpa masalah.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Facility 1 -->
            <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition-shadow border border-gray-100">
                <div class="w-12 h-12 bg-kos-green/10 text-kos-green rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Keamanan 24 Jam</h3>
                <p class="text-gray-500 leading-relaxed">Dilengkapi dengan CCTV di area publik dan kunci akses khusus penghuni.</p>
            </div>
            <!-- Facility 2 -->
            <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition-shadow border border-gray-100">
                <div class="w-12 h-12 bg-kos-green/10 text-kos-green rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Wi-Fi Cepat</h3>
                <p class="text-gray-500 leading-relaxed">Koneksi internet tanpa batas yang stabil untuk kebutuhan belajar atau WFH.</p>
            </div>
            <!-- Facility 3 -->
            <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition-shadow border border-gray-100">
                <div class="w-12 h-12 bg-kos-green/10 text-kos-green rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Dapur Umum</h3>
                <p class="text-gray-500 leading-relaxed">Area memasak bersama yang bersih, lengkap dengan kompor dan kulkas.</p>
            </div>
            <!-- Facility 4 -->
            <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition-shadow border border-gray-100">
                <div class="w-12 h-12 bg-kos-green/10 text-kos-green rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Area Parkir</h3>
                <p class="text-gray-500 leading-relaxed">Area parkir motor dan mobil yang luas dan berkanopi aman dari hujan.</p>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section id="galeri" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-base text-kos-green font-semibold tracking-wide uppercase">Galeri Foto</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                Suasana Kos & Fasilitas
            </p>
            <p class="mt-4 max-w-2xl text-lg text-gray-500 mx-auto">
                Lihat lebih dekat kenyamanan kamar, teras bersantai, dan fasilitas di Kos Kami.
            </p>
        </div>

        <div x-data="{
                activeSlide: 0,
                slides: [
                    { image: 'https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/184/2024/03/03/FotoJet-1-2641113655.jpg', title: 'Suasana Kamar' },
                    { image: 'https://idkos.com/images/gallery_property/standar-Q8Ywb1nAlb.jpeg', title: 'Teras Bersantai' },
                    { image: 'https://static.mamikos.com/uploads/cache/data/style/2024-08-02/G3tPdsau-240x320.jpg', title: 'Fasilitas Umum' }
                ],
                next() {
                    this.activeSlide = this.activeSlide === this.slides.length - 1 ? 0 : this.activeSlide + 1
                },
                prev() {
                    this.activeSlide = this.activeSlide === 0 ? this.slides.length - 1 : this.activeSlide - 1
                }
            }" 
            class="relative w-full max-w-5xl mx-auto rounded-3xl overflow-hidden shadow-2xl group">
            
            <!-- Slides -->
            <div class="relative h-64 sm:h-80 md:h-96 lg:h-[30rem] w-full bg-gray-200">
                <template x-for="(slide, index) in slides" :key="index">
                    <div x-show="activeSlide === index" 
                         x-transition:enter="transition ease-out duration-500"
                         x-transition:enter-start="opacity-0 transform scale-105"
                         x-transition:enter-end="opacity-100 transform scale-100"
                         x-transition:leave="transition ease-in duration-300 absolute inset-0"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0"
                         class="absolute inset-0 w-full h-full">
                        <img :src="slide.image" :alt="slide.title" class="w-full h-full object-cover">
                        <!-- Caption Gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end">
                            <div class="p-8 w-full">
                                <h3 x-text="slide.title" class="text-white text-2xl md:text-3xl font-bold"></h3>
                            </div>
                        </div>
                    </div>
                </template>
            </div>

            <!-- Navigation Buttons -->
            <button @click="prev()" class="absolute left-4 top-1/2 -translate-y-1/2 w-12 h-12 flex items-center justify-center rounded-full bg-white/30 hover:bg-white/50 text-white backdrop-blur-md transition-all opacity-0 group-hover:opacity-100 shadow-lg">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            </button>
            <button @click="next()" class="absolute right-4 top-1/2 -translate-y-1/2 w-12 h-12 flex items-center justify-center rounded-full bg-white/30 hover:bg-white/50 text-white backdrop-blur-md transition-all opacity-0 group-hover:opacity-100 shadow-lg">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </button>

            <!-- Dots -->
            <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex space-x-3">
                <template x-for="(slide, index) in slides" :key="index">
                    <button @click="activeSlide = index" 
                            :class="{'w-8 bg-kos-green': activeSlide === index, 'w-2 bg-white/60 hover:bg-white': activeSlide !== index}" 
                            class="h-2 rounded-full transition-all duration-300 shadow-sm"></button>
                </template>
            </div>
        </div>
    </div>
</section>

<!-- Rooms Section -->
<section id="kamar" class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-base text-kos-green font-semibold tracking-wide uppercase">Pilihan Kamar</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                Harga Pas, Fasilitas Berkualitas
            </p>
            <p class="mt-4 max-w-2xl text-lg text-gray-500 mx-auto">
                Pilih tipe yang sesuai dengan budget Anda. Bayar bulanan tanpa biaya tersembunyi.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            
            <!-- Tipe Biasa -->
            <div class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 overflow-hidden transform hover:-translate-y-2 flex flex-col">
                <div class="h-48 bg-gray-200 relative">
                    <!-- Placeholder Image (use generic UI gradient or solid color) -->
                    <div class="w-full h-full bg-gradient-to-br from-gray-100 to-gray-300 flex items-center justify-center">
                        <img src="https://mandorpro.id/wp-content/uploads/2025/01/desain-kamar-kos-1.webp" alt="Tipe Biasa" class="w-full h-full object-cover" >
                    </div>
                </div>
                <div class="p-8 flex-grow">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Tipe Biasa</h3>
                    <p class="text-gray-500 mb-6 line-clamp-2">Kamar standar yang nyaman dengan sirkulasi udara yang baik. Cocok untuk Anda yang ingin hemat.</p>
                    <div class="flex items-baseline mb-6">
                        <span class="text-4xl font-extrabold text-kos-green">Rp 500k</span>
                        <span class="text-gray-500 ml-2 font-medium">/bulan</span>
                    </div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-kos-green mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Kasur & Lemari Pakaian
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-kos-green mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Kamar Mandi Luar
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-kos-green mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Termasuk Air & Listrik Standar
                        </li>
                        <li class="flex items-center text-gray-400">
                            <svg class="w-5 h-5 text-gray-300 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                            Tanpa Kipas / AC
                        </li>
                    </ul>
                </div>
                <div class="p-8 pt-0 mt-auto">
                    <a href="https://wa.me/6282287191389?text=Halo%20Admin%2C%20saya%20tertarik%20untuk%20booking%20kamar%20%2A%2ATipe%20Biasa%2A%2A.%20Apakah%20masih%20tersedia%3F" target="_blank" class="block w-full text-center px-6 py-3 bg-white border-2 border-kos-green text-kos-green hover:bg-kos-green hover:text-white rounded-xl font-bold transition-all duration-300">
                        Chat WhatsApp
                    </a>
                </div>
            </div>

            <!-- Tipe Kipas -->
            <div class="bg-white rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-100 overflow-hidden transform hover:-translate-y-2 scale-105 flex flex-col relative z-10">
                <div class="absolute top-0 right-0 bg-kos-green text-white px-4 py-1.5 rounded-bl-xl rounded-tr-xl font-medium text-sm z-20 shadow-md">
                    Terfavorit
                </div>
                <div class="h-48 bg-gray-200 relative z-10">
                    <div class="w-full h-full bg-gradient-to-br from-green-100 to-green-300 flex items-center justify-center">
                        <img src="https://idkos.com/images/gallery_property/standar-Q8Ywb1nAlb.jpeg" alt="Tipe Biasa" class="w-full h-full object-cover" >
                    </div>
                </div>
                <div class="p-8 flex-grow">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Tipe Kipas</h3>
                    <p class="text-gray-500 mb-6 line-clamp-2">Ruangan lebih sejuk dengan penambahan kipas angin atap. Pilihan paling populer di kalangan penghuni.</p>
                    <div class="flex items-baseline mb-6">
                        <span class="text-4xl font-extrabold text-kos-green">Rp 700k</span>
                        <span class="text-gray-500 ml-2 font-medium">/bulan</span>
                    </div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-kos-green mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Kipas Angin Dinding / Atap
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-kos-green mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Kasur Springbed & Meja Belajar
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-kos-green mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Kamar Mandi Dalam
                        </li>
                        <li class="flex items-center text-gray-400">
                            <svg class="w-5 h-5 text-gray-300 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                            Tanpa AC
                        </li>
                    </ul>
                </div>
                <div class="p-8 pt-0 mt-auto">
                    <a href="https://wa.me/6282287191389?text=Halo%20Admin%2C%20saya%20tertarik%20untuk%20booking%20kamar%20%2A%2ATipe%20Kipas%2A%2A.%20Apakah%20masih%20tersedia%3F" target="_blank" class="block w-full text-center px-6 py-3 bg-kos-green text-white hover:bg-kos-dark rounded-xl font-bold transition-all duration-300 shadow-lg shadow-kos-green/40">
                        Chat WhatsApp
                    </a>
                </div>
            </div>

            <!-- Tipe AC -->
            <div class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 overflow-hidden transform hover:-translate-y-2 flex flex-col">
                <div class="h-48 bg-gray-200 relative">
                    <div class="w-full h-full bg-gradient-to-br from-gray-100 to-gray-300 flex items-center justify-center">
                        <img src="https://static.mamikos.com/uploads/cache/data/style/2024-08-02/G3tPdsau-240x320.jpg" alt="Tipe Biasa" class="w-full h-full object-cover" >
                    </div>
                </div>
                <div class="p-8 flex-grow">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Tipe AC VIP</h3>
                    <p class="text-gray-500 mb-6 line-clamp-2">Fasilitas premium layaknya hotel. Kamar luas dengan AC untuk kenyamanan maksimal saat beristirahat.</p>
                    <div class="flex items-baseline mb-6">
                        <span class="text-4xl font-extrabold text-kos-green">Rp 1.5jt</span>
                        <span class="text-gray-500 ml-2 font-medium">/bulan</span>
                    </div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-kos-green mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            AC Dingin
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-kos-green mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Kamar Mandi Dalam + Water Heater
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-kos-green mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Smart TV & Kasur Premium
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-kos-green mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Pembersihan Kamar Mingguan
                        </li>
                    </ul>
                </div>
                <div class="p-8 pt-0 mt-auto">
                    <a href="https://wa.me/6282287191389?text=Halo%20Admin%2C%20saya%20tertarik%20untuk%20booking%20kamar%20%2A%2ATipe%20AC%2A%2A.%20Apakah%20masih%20tersedia%3F" target="_blank" class="block w-full text-center px-6 py-3 bg-white border-2 border-kos-green text-kos-green hover:bg-kos-green hover:text-white rounded-xl font-bold transition-all duration-300">
                        Chat WhatsApp
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Call to Action (CTA) / Contact Section -->
<section id="kontak" class="py-20 relative overflow-hidden bg-kos-dark">
    <div class="absolute inset-0 z-0 opacity-20">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%2310b981\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h2 class="text-3xl font-extrabold text-white sm:text-4xl mb-6">
            Punya Pertanyaan atau Ragu-Ragu?
        </h2>
        <p class="text-xl text-green-100 mb-10">
            Jangan sungkan untuk menghubungi kami. Tim kami siap membantu mencarikan kamar terbaik yang sesuai dengan kebutuhan Anda.
        </p>
        <a href="https://wa.me/6282287191389" target="_blank" class="inline-flex items-center justify-center px-8 py-4 border border-transparent text-lg font-bold rounded-full text-kos-dark bg-white hover:bg-gray-100 transition-colors shadow-xl">
            <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
            Tanya Via WhatsApp
        </a>
    </div>
</section>

@endsection
