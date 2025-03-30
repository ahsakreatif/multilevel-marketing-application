<x-layouts.template>
    <!-- Hero Section -->
    <section class="bg-neutral-100 py-12 md:py-20">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold text-neutral-800 mb-4"><span class="text-primary"> AYDIN MUAMALAT INTERNASIONAL</span><br> <span class="text-secondary">Ekonomi Jaya Masyarakat Sejahtera</span></h1>
                    <p class="text-neutral-600 mb-8">Perusahaan berbasis Syariah yang membuka peluang usaha dengan system penjualan langsung, produk-produk yang bermanfaat & berkualitas.</p>
                    <div class="flex space-x-4">
                        <a href="/control" class="btn-primary">Gabung Sekarang</a>
                        <a href="#opportunity" class="btn-secondary-alt">Hubungi Kami</a>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <img src="img/header.png" alt="Koleksi Produk Herbal">
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="section-title">Kategori Produk Kami</h2>
            <p class="section-subtitle">Temukan berbagai solusi herbal alami kami</p>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-4">
                <div class="flex flex-col items-center">
                    <div class="w-20 h-20 bg-primary-light bg-opacity-20 rounded-full flex items-center justify-center mb-3">
                        <i class="fas fa-leaf text-primary text-2xl"></i>
                    </div>
                    <span class="text-neutral-800 font-medium text-center">Imunitas</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-20 h-20 bg-primary-light bg-opacity-20 rounded-full flex items-center justify-center mb-3">
                        <i class="fas fa-heartbeat text-primary text-2xl"></i>
                    </div>
                    <span class="text-neutral-800 font-medium text-center">Kesehatan Jantung</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-20 h-20 bg-primary-light bg-opacity-20 rounded-full flex items-center justify-center mb-3">
                        <i class="fas fa-brain text-primary text-2xl"></i>
                    </div>
                    <span class="text-neutral-800 font-medium text-center">Kejernihan Mental</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-20 h-20 bg-primary-light bg-opacity-20 rounded-full flex items-center justify-center mb-3">
                        <i class="fas fa-weight text-primary text-2xl"></i>
                    </div>
                    <span class="text-neutral-800 font-medium text-center">Manajemen Berat Badan</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-20 h-20 bg-primary-light bg-opacity-20 rounded-full flex items-center justify-center mb-3">
                        <i class="fas fa-bed text-primary text-2xl"></i>
                    </div>
                    <span class="text-neutral-800 font-medium text-center">Dukungan Tidur</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-20 h-20 bg-primary-light bg-opacity-20 rounded-full flex items-center justify-center mb-3">
                        <i class="fas fa-running text-primary text-2xl"></i>
                    </div>
                    <span class="text-neutral-800 font-medium text-center">Peningkat Energi</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    {{-- <section class="py-16 bg-neutral-50" id="products">
        <div class="container mx-auto px-4">
            <h2 class="section-title">Solusi Herbal Unggulan</h2>
            <p class="section-subtitle">Produk herbal alami paling populer kami</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="product-card">
                    <div class="relative">
                        <img src="img/placeholder.svg?height=300&width=400" alt="Formula Pendukung Imun" class="w-full h-64 object-cover">
                        <span class="badge">Terlaris</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-neutral-800 mb-2">Formula Pendukung Imun</h3>
                        <p class="text-neutral-600 mb-4">Campuran kuat echinacea, elderberry, dan vitamin C untuk meningkatkan sistem kekebalan tubuh Anda secara alami.</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="price">Rp 599.000</span>
                                <span class="old-price ml-2">Rp 749.000</span>
                            </div>
                            <button class="btn-primary py-2 px-4">Tambah ke Keranjang</button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="relative">
                        <img src="img/placeholder.svg?height=300&width=400" alt="Teh Detoks Pembersih" class="w-full h-64 object-cover">
                        <span class="badge">Baru</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-neutral-800 mb-2">Teh Detoks Pembersih</h3>
                        <p class="text-neutral-600 mb-4">Campuran herbal yang dirancang untuk mendukung proses detoksifikasi alami tubuh Anda dan meningkatkan pencernaan.</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="price">Rp 375.000</span>
                                <span class="old-price ml-2">Rp 450.000</span>
                            </div>
                            <button class="btn-primary py-2 px-4">Tambah ke Keranjang</button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="relative">
                        <img src="img/placeholder.svg?height=300&width=400" alt="Tingtur Tidur & Relaksasi" class="w-full h-64 object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-neutral-800 mb-2">Tingtur Tidur & Relaksasi</h3>
                        <p class="text-neutral-600 mb-4">Campuran menenangkan dari akar valerian, chamomile, dan passionflower untuk mendorong tidur nyenyak.</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="price">Rp 525.000</span>
                            </div>
                            <button class="btn-primary py-2 px-4">Tambah ke Keranjang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Trending Products -->
    {{-- <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="section-title">Produk Tren</h2>
            <p class="section-subtitle">Solusi herbal favorit pelanggan kami</p>

            <div class="flex overflow-x-auto pb-6 -mx-4 px-4 space-x-6">
                <div class="product-card flex-shrink-0 w-64">
                    <img src="img/placeholder.svg?height=200&width=200" alt="Kompleks Kunyit Curcumin" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-medium text-neutral-800 mb-1">Kompleks Kunyit Curcumin</h3>
                        <p class="text-sm text-neutral-500 mb-2">Anti-inflamasi</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="price">Rp 450.000</span>
                                <span class="old-price ml-2">Rp 525.000</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card flex-shrink-0 w-64">
                    <img src="img/placeholder.svg?height=200&width=200" alt="Ekstrak Akar Ashwagandha" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-medium text-neutral-800 mb-1">Ekstrak Akar Ashwagandha</h3>
                        <p class="text-sm text-neutral-500 mb-2">Pereda Stres</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="price">Rp 495.000</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card flex-shrink-0 w-64">
                    <img src="img/placeholder.svg?height=200&width=200" alt="Milk Thistle Pendukung Hati" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-medium text-neutral-800 mb-1">Milk Thistle Pendukung Hati</h3>
                        <p class="text-sm text-neutral-500 mb-2">Detoksifikasi</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="price">Rp 420.000</span>
                                <span class="old-price ml-2">Rp 480.000</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card flex-shrink-0 w-64">
                    <img src="img/placeholder.svg?height=200&width=200" alt="Ginkgo Biloba Pendukung Memori" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-medium text-neutral-800 mb-1">Ginkgo Biloba Pendukung Memori</h3>
                        <p class="text-sm text-neutral-500 mb-2">Fungsi Kognitif</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="price">Rp 390.000</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card flex-shrink-0 w-64">
                    <img src="img/placeholder.svg?height=200&width=200" alt="Ekstrak Garcinia Cambogia" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-medium text-neutral-800 mb-1">Ekstrak Garcinia Cambogia</h3>
                        <p class="text-sm text-neutral-500 mb-2">Manajemen Berat Badan</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="price">Rp 480.000</span>
                                <span class="old-price ml-2">Rp 600.000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-8">
                <a href="#" class="btn-primary">Lihat Semua Produk</a>
            </div>
        </div>
    </section> --}}

    <!-- Business Opportunity Section -->
    <section class="py-16 bg-neutral-100" id="opportunity">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <img src="/img/pexels-photo-7615461.webp" alt="Peluang Bisnis" class="rounded-lg shadow-lg">
                </div>
                <div class="md:w-1/2 md:pl-12">
                    <h2 class="text-3xl font-bold text-neutral-800 mb-4">Bergabunglah dengan Keluarga Kami</h2>
                    <p class="text-neutral-600 mb-6">Jadilah distributor dan mulai bisnis kesehatan herbal Anda sendiri. Bagikan produk yang Anda percayai dan dapatkan penghasilan sambil membantu orang lain meningkatkan kesehatan mereka secara alami.</p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span>Jam kerja fleksibel - bekerja penuh waktu atau paruh waktu</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span>Biaya startup rendah dengan produk berkualitas tinggi</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span>Sistem pelatihan dan dukungan yang komprehensif</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span>Berbagai aliran pendapatan dan peluang kemajuan</span>
                        </li>
                    </ul>
                    <a href="#" class="btn-primary">Pelajari Lebih Lanjut Tentang Peluang Kami</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Weekly Highlights -->
    {{-- <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="section-title">Sorotan Minggu Ini</h2>
            <p class="section-subtitle">Penawaran spesial yang tidak boleh Anda lewatkan</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                <div class="product-card">
                    <div class="relative">
                        <img src="img/placeholder.svg?height=150&width=150" alt="Campuran Imun Echinacea" class="w-full h-40 object-cover">
                        <span class="badge">-20%</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-medium text-neutral-800 mb-1">Campuran Imun Echinacea</h3>
                        <div class="flex items-center">
                            <span class="price">Rp 360.000</span>
                            <span class="old-price ml-2">Rp 450.000</span>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="relative">
                        <img src="img/placeholder.svg?height=150&width=150" alt="Ekstrak Teh Hijau" class="w-full h-40 object-cover">
                        <span class="badge">-15%</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-medium text-neutral-800 mb-1">Ekstrak Teh Hijau</h3>
                        <div class="flex items-center">
                            <span class="price">Rp 330.000</span>
                            <span class="old-price ml-2">Rp 390.000</span>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="relative">
                        <img src="img/placeholder.svg?height=150&width=150" alt="Paket Energi Ginseng" class="w-full h-40 object-cover">
                        <span class="badge">-25%</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-medium text-neutral-800 mb-1">Paket Energi Ginseng</h3>
                        <div class="flex items-center">
                            <span class="price">Rp 450.000</span>
                            <span class="old-price ml-2">Rp 600.000</span>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="relative">
                        <img src="img/placeholder.svg?height=150&width=150" alt="Pendukung Pencernaan Herbal" class="w-full h-40 object-cover">
                        <span class="badge">-10%</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-medium text-neutral-800 mb-1">Pendukung Pencernaan Herbal</h3>
                        <div class="flex items-center">
                            <span class="price">Rp 405.000</span>
                            <span class="old-price ml-2">Rp 450.000</span>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="relative">
                        <img src="img/placeholder.svg?height=150&width=150" alt="Campuran Tidur Lavender" class="w-full h-40 object-cover">
                        <span class="badge">-30%</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-medium text-neutral-800 mb-1">Campuran Tidur Lavender</h3>
                        <div class="flex items-center">
                            <span class="price">Rp 300.000</span>
                            <span class="old-price ml-2">Rp 435.000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Discover More Section -->
    <section class="py-16 bg-neutral-50">
        <div class="container mx-auto px-4">
            <h2 class="section-title">Temukan Lebih Banyak</h2>
            <p class="section-subtitle">Pelajari tentang pendekatan alami kami untuk kesehatan</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="/img/content-02.webp" alt="Bahan Berkualitas" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-neutral-800 mb-2">Bahan Berkualitas</h3>
                        <p class="text-neutral-600 mb-4">Kami hanya menggunakan herbal dan tanaman terbaik dari pemasok terpercaya di seluruh dunia.</p>
                        <a href="#" class="text-primary font-medium hover:underline">Pelajari Lebih Lanjut</a>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="/img/content-03.webp" alt="Formula Berbasis Sains" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-neutral-800 mb-2">Formula Berbasis Sains</h3>
                        <p class="text-neutral-600 mb-4">Produk kami menggabungkan kebijaksanaan herbal tradisional dengan penelitian ilmiah modern.</p>
                        <a href="#" class="text-primary font-medium hover:underline">Pelajari Lebih Lanjut</a>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="/img/content-04.webp" alt="Praktik Berkelanjutan" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-neutral-800 mb-2">Praktik Berkelanjutan</h3>
                        <p class="text-neutral-600 mb-4">Kami berkomitmen pada pengadaan etis dan metode produksi ramah lingkungan.</p>
                        <a href="#" class="text-primary font-medium hover:underline">Pelajari Lebih Lanjut</a>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="/img/content-05.webp" alt="Dampak Komunitas" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-neutral-800 mb-2">Dampak Komunitas</h3>
                        <p class="text-neutral-600 mb-4">Lihat bagaimana model bisnis kami membantu menciptakan peluang di komunitas di seluruh Indonesia.</p>
                        <a href="#" class="text-primary font-medium hover:underline">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-white" id="testimonials" x-data="{ currentTestimonial: 0, testimonials: [
        {
            name: 'Sari Wijaya',
            role: 'Pelatih Kesehatan & Distributor',
            image: '/img/person-01.webp',
            text: 'Bergabung dengan AydinMuamalat sebagai distributor mengubah hidup saya. Tidak hanya saya membantu orang lain meningkatkan kesehatan mereka dengan produk alami yang saya percayai, tetapi saya juga telah menciptakan kebebasan finansial untuk keluarga saya.'
        },
        {
            name: 'Muhammad Fadli',
            role: 'Penggemar Kesehatan & Pelanggan',
            image: '/img/person-03.webp',
            text: 'Saya telah mencoba banyak suplemen herbal, tetapi kualitas AydinMuamalat tidak tertandingi. Formula Pendukung Imun mereka membantu saya tetap sehat sepanjang musim hujan ketika semua orang di sekitar saya jatuh sakit.'
        },
        {
            name: 'Dewi Sulistiani',
            role: 'Pemimpin Tim & Distributor',
            image: '/img/person-02.webp',
            text: 'Peluang bisnis dengan AydinMuamalat telah memungkinkan saya membangun tim advokat kesehatan yang bersemangat. Rencana kompensasi sangat murah hati, dan dukungan dari perusahaan luar biasa.'
        }
    ] }">
        <div class="container mx-auto px-4">
            <h2 class="section-title">Apa Kata Komunitas Kami</h2>
            <p class="section-subtitle">Kisah sukses dari pelanggan dan distributor kami</p>

            <div class="max-w-3xl mx-auto">
                <div class="bg-neutral-50 rounded-xl p-8 shadow-md">
                    <div class="flex flex-col items-center text-center">
                        <img :src="testimonials[currentTestimonial].image" :alt="testimonials[currentTestimonial].name" class="w-20 h-20 rounded-full mb-4 object-cover">
                        <p class="text-neutral-600 italic mb-6" x-text="testimonials[currentTestimonial].text"></p>
                        <h3 class="font-bold text-neutral-800" x-text="testimonials[currentTestimonial].name"></h3>
                        <p class="text-neutral-500 text-sm" x-text="testimonials[currentTestimonial].role"></p>
                    </div>
                </div>

                <div class="flex justify-center mt-8 space-x-2">
                    <template x-for="(testimonial, index) in testimonials" :key="index">
                        <button
                            @click="currentTestimonial = index"
                            :class="{'bg-primary': currentTestimonial === index, 'bg-neutral-300': currentTestimonial !== index}"
                            class="w-3 h-3 rounded-full transition-colors duration-300">
                        </button>
                    </template>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-16 bg-neutral-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-primary-light bg-opacity-20 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-truck text-primary text-xl"></i>
                    </div>
                    <h3 class="font-bold text-neutral-800 mb-2">Pengiriman Cepat Gratis</h3>
                    <p class="text-neutral-600">Untuk pesanan di atas Rp 750.000 - dikirim ke pintu Anda dalam 3-5 hari kerja</p>
                </div>

                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-primary-light bg-opacity-20 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-medal text-primary text-xl"></i>
                    </div>
                    <h3 class="font-bold text-neutral-800 mb-2">Jaminan Kualitas</h3>
                    <p class="text-neutral-600">Semua produk diuji kemurnian dan potensinya - kepuasan dijamin</p>
                </div>

                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-primary-light bg-opacity-20 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-headset text-primary text-xl"></i>
                    </div>
                    <h3 class="font-bold text-neutral-800 mb-2">Dukungan Pelanggan 24/7</h3>
                    <p class="text-neutral-600">Tim kami selalu siap menjawab pertanyaan dan kekhawatiran Anda</p>
                </div>

                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-primary-light bg-opacity-20 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-undo text-primary text-xl"></i>
                    </div>
                    <h3 class="font-bold text-neutral-800 mb-2">Uang Kembali 30 Hari</h3>
                    <p class="text-neutral-600">Tidak puas? Kembalikan dalam 30 hari untuk pengembalian dana penuh, tanpa pertanyaan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="section-title">Artikel Terbaru Kami</h2>
            <p class="section-subtitle">Tips kesehatan dan wawasan kebugaran</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-neutral-50 rounded-lg overflow-hidden">
                    <img src="/img/content-06.webp" alt="Obat Herbal untuk Stres" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <span class="text-xs text-primary font-medium uppercase">Kesehatan</span>
                        <h3 class="text-xl font-bold text-neutral-800 mt-2 mb-3">5 Obat Herbal untuk Mengelola Stres Secara Alami</h3>
                        <p class="text-neutral-600 mb-4">Temukan bagaimana herbal adaptogenik dapat membantu tubuh Anda merespons stres dengan lebih baik dan meningkatkan kesejahteraan secara keseluruhan.</p>
                        <a href="#" class="text-primary font-medium hover:underline">Baca Selengkapnya</a>
                    </div>
                </div>

                <div class="bg-neutral-50 rounded-lg overflow-hidden">
                    <img src="/img/content-07.webp" alt="Membangun Bisnis MLM Anda" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <span class="text-xs text-primary font-medium uppercase">Bisnis</span>
                        <h3 class="text-xl font-bold text-neutral-800 mt-2 mb-3">Cara Membangun Bisnis Kesehatan Herbal yang Sukses</h3>
                        <p class="text-neutral-600 mb-4">Pelajari strategi terbukti untuk mengembangkan basis pelanggan Anda dan membangun tim distributor yang kuat.</p>
                        <a href="#" class="text-primary font-medium hover:underline">Baca Selengkapnya</a>
                    </div>
                </div>

                <div class="bg-neutral-50 rounded-lg overflow-hidden">
                    <img src="/img/content-08.webp" alt="Penguat Sistem Kekebalan Tubuh" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <span class="text-xs text-primary font-medium uppercase">Kesehatan</span>
                        <h3 class="text-xl font-bold text-neutral-800 mt-2 mb-3">7 Herbal Teratas untuk Meningkatkan Sistem Kekebalan Tubuh Anda</h3>
                        <p class="text-neutral-600 mb-4">Jelajahi herbal kuat ini yang telah digunakan selama berabad-abad untuk memperkuat kekebalan dan melawan penyakit.</p>
                        <a href="#" class="text-primary font-medium hover:underline">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA to Join as Member (Previously Newsletter Section) -->
    <section class="py-16 bg-primary">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-white mb-4">Bergabunglah Sebagai Member</h2>
                <p class="text-white text-opacity-90 mb-8">Dapatkan akses eksklusif ke produk, diskon, dan peluang penghasilan. Mulai perjalanan kesehatan dan kesuksesan finansial Anda hari ini!</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#" class="bg-white text-primary font-medium px-6 py-3 rounded-md hover:bg-opacity-90 transition duration-300 text-center">Daftar Sekarang</a>
                    <a href="#opportunity" class="bg-transparent border-2 border-white text-white font-medium px-6 py-3 rounded-md hover:bg-white hover:bg-opacity-10 transition duration-300 text-center">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-16 bg-white" id="contact">
        <div class="container mx-auto px-4">
            <h2 class="section-title">Hubungi Kami</h2>
            <p class="section-subtitle">Kami senang mendengar dari Anda</p>

            <!-- Added Google Maps Embed -->
            <div class="mb-8 rounded-lg overflow-hidden">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4876077470247!2d106.61675277575673!3d-6.199499193770717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ff4a5c3370c7%3A0x8b1d89c30df1c4f0!2sJl.%20Karet%20Raya%2C%20Cibodas%2C%20Kec.%20Karawaci%2C%20Kota%20Tangerang%2C%20Banten%2015116!5e0!3m2!1sen!2sid!4v1709655547276!5m2!1sen!2sid"
                    width="100%"
                    height="250"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-5xl mx-auto">
                <div>
                    <form>
                        <div class="mb-6">
                            <label for="name" class="block text-neutral-800 font-medium mb-2">Nama Anda</label>
                            <input type="text" id="name" class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block text-neutral-800 font-medium mb-2">Alamat Email</label>
                            <input type="email" id="email" class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div class="mb-6">
                            <label for="subject" class="block text-neutral-800 font-medium mb-2">Subjek</label>
                            <select id="subject" class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                                <option value="">Pilih subjek</option>
                                <option value="product">Pertanyaan Produk</option>
                                <option value="business">Peluang Bisnis</option>
                                <option value="support">Dukungan Pelanggan</option>
                                <option value="other">Lainnya</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block text-neutral-800 font-medium mb-2">Pesan Anda</label>
                            <textarea id="message" rows="5" class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
                        </div>
                        <button type="submit" class="btn-primary w-full">Kirim Pesan</button>
                    </form>
                </div>

                <div>
                    <div class="bg-neutral-50 p-8 rounded-lg h-full">
                        <h3 class="text-xl font-bold text-neutral-800 mb-6">Informasi Kontak</h3>

                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="w-10 h-10 bg-primary-light bg-opacity-20 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-map-marker-alt text-primary"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium text-neutral-800 mb-1">Lokasi Kami</h4>
                                    <p class="text-neutral-600">Jl. Karet Raya Blok C 11 Karawaci<br>Kota Tangerang 15116<br>Banten, Indonesia</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="w-10 h-10 bg-primary-light bg-opacity-20 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-phone-alt text-primary"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium text-neutral-800 mb-1">Nomor Telepon</h4>
                                    <p class="text-neutral-600">021-XXXX-XXXX</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="w-10 h-10 bg-primary-light bg-opacity-20 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-envelope text-primary"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium text-neutral-800 mb-1">Alamat Email</h4>
                                    <p class="text-neutral-600">aydinmuamalatinternasional@gmail.com</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="w-10 h-10 bg-primary-light bg-opacity-20 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-clock text-primary"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium text-neutral-800 mb-1">Jam Kerja</h4>
                                    <p class="text-neutral-600">Senin - Jumat: 09.00 - 18.00<br>Sabtu: 10.00 - 16.00</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8">
                            <h4 class="font-medium text-neutral-800 mb-3">Ikuti Kami</h4>
                            <div class="flex space-x-4">
                                <a href="#" class="w-10 h-10 bg-primary-light bg-opacity-20 rounded-full flex items-center justify-center text-primary hover:bg-primary hover:text-white transition duration-300">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-primary-light bg-opacity-20 rounded-full flex items-center justify-center text-primary hover:bg-primary hover:text-white transition duration-300">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-primary-light bg-opacity-20 rounded-full flex items-center justify-center text-primary hover:bg-primary hover:text-white transition duration-300">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-primary-light bg-opacity-20 rounded-full flex items-center justify-center text-primary hover:bg-primary hover:text-white transition duration-300">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.template>