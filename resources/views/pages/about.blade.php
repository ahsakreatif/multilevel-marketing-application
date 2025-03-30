<x-layouts.template>
    <!-- Hero Section with Background -->
    <section class="bg-neutral-100 py-12 md:py-20">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-bold text-neutral-800 mb-4">
                <span class="text-primary">Tentang Kami</span>
            </h1>
        </div>
    </section>

    <!-- Sejarah Perusahaan -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="section-title">Sejarah Perusahaan</h2>
            <p class="text-neutral-600 leading-relaxed max-w-4xl mx-auto">
                AYDIN MUAMALAT INTERNASIONAL didirikan pada tahun [tahun pendirian] dengan tujuan menyediakan solusi keuangan syariah yang inovatif dan terpercaya. Sejak awal berdiri, kami berkomitmen untuk mendukung pertumbuhan ekonomi umat melalui layanan yang sesuai dengan prinsip-prinsip muamalat Islam.
            </p>
        </div>
    </section>

    <!-- Visi & Misi -->
    <section class="py-16 bg-neutral-50">
        <div class="container mx-auto px-4">
            <h2 class="section-title text-center mb-12">Visi & Misi</h2>
            <div class="grid md:grid-cols-2 gap-12">
                <div class="bg-white p-10 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 border border-neutral-100">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-primary-light bg-opacity-20 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-eye text-primary text-xl"></i>
                        </div>
                        <h2 class="text-2xl font-bold text-neutral-800">Visi</h2>
                    </div>
                    <p class="text-neutral-600 leading-relaxed text-lg">
                        Membantu perekonomian Umat dan mengajak peningkatan Ekonomi Masyarakat & Ekonomi rumah tangga.
                    </p>
                </div>
                <div class="bg-white p-10 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 border border-neutral-100">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-primary-light bg-opacity-20 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-bullseye text-primary text-xl"></i>
                        </div>
                        <h2 class="text-2xl font-bold text-neutral-800">Misi</h2>
                    </div>
                    <ul class="text-neutral-600 space-y-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1.5 mr-4 text-lg"></i>
                            <span class="text-lg">Menuju masyarakat yang sejahtera</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1.5 mr-4 text-lg"></i>
                            <span class="text-lg">Menuju masyarakat Kaya Berkah di rumahnya sendiri & di negaranya sendiri.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Nilai-Nilai Perusahaan -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="section-title">Nilai-Nilai Perusahaan</h2>
            <p class="section-subtitle">Prinsip yang mendasari setiap langkah kami</p>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mt-8">
                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-primary-light bg-opacity-20 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-shield-alt text-primary text-xl"></i>
                    </div>
                    <h3 class="font-bold text-neutral-800 mb-2">Integritas</h3>
                    <p class="text-neutral-600">Kami menjunjung tinggi kejujuran dan transparansi dalam setiap aspek bisnis.</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-primary-light bg-opacity-20 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-star text-primary text-xl"></i>
                    </div>
                    <h3 class="font-bold text-neutral-800 mb-2">Profesionalisme</h3>
                    <p class="text-neutral-600">Memberikan layanan terbaik dengan kompetensi dan dedikasi tinggi.</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-primary-light bg-opacity-20 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-lightbulb text-primary text-xl"></i>
                    </div>
                    <h3 class="font-bold text-neutral-800 mb-2">Inovasi</h3>
                    <p class="text-neutral-600">Terus berinovasi untuk memenuhi kebutuhan pasar yang dinamis.</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-primary-light bg-opacity-20 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-hands-helping text-primary text-xl"></i>
                    </div>
                    <h3 class="font-bold text-neutral-800 mb-2">Kepedulian Sosial</h3>
                    <p class="text-neutral-600">Berkontribusi positif terhadap masyarakat dan lingkungan sekitar.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-16 bg-neutral-50">
        <div class="container mx-auto px-4">
            <h2 class="section-title">Jajaran Perusahaan</h2>
            <p class="section-subtitle">Tim profesional yang berdedikasi untuk melayani Anda</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                    <div class="relative">
                        <img src="{{ asset('img/placeholder.svg?height=300&width=400') }}" alt="Penasehat" class="w-full h-64 object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
                            <h3 class="text-xl font-bold text-white">Ustadz ...</h3>
                            <p class="text-neutral-200">Penasehat</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-neutral-600 text-sm">Memberikan arahan spiritual dan memastikan kepatuhan syariah dalam setiap aspek bisnis.</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                    <div class="relative">
                        <img src="{{ asset('img/placeholder.svg?height=300&width=400') }}" alt="Komisaris Utama" class="w-full h-64 object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
                            <h3 class="text-xl font-bold text-white">Rachmat Akbar</h3>
                            <p class="text-neutral-200">Komisaris Utama</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-neutral-600 text-sm">Memimpin pengawasan strategis dan tata kelola perusahaan.</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                    <div class="relative">
                        <img src="{{ asset('img/placeholder.svg?height=300&width=400') }}" alt="Direktur Utama" class="w-full h-64 object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
                            <h3 class="text-xl font-bold text-white">Agustini Maryati</h3>
                            <p class="text-neutral-200">Direktur Utama</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-neutral-600 text-sm">Mengarahkan visi dan strategi pertumbuhan perusahaan.</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                    <div class="relative">
                        <img src="{{ asset('img/placeholder.svg?height=300&width=400') }}" alt="Direktur Pemasaran" class="w-full h-64 object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
                            <h3 class="text-xl font-bold text-white">Direktur Pemasaran</h3>
                            <p class="text-neutral-200">Direktur Pemasaran</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-neutral-600 text-sm">Mengembangkan strategi pemasaran dan pertumbuhan bisnis.</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                    <div class="relative">
                        <img src="{{ asset('img/placeholder.svg?height=300&width=400') }}" alt="Direktur Keuangan" class="w-full h-64 object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
                            <h3 class="text-xl font-bold text-white">Direktur Keuangan</h3>
                            <p class="text-neutral-200">Direktur Keuangan</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-neutral-600 text-sm">Mengelola keuangan dan investasi perusahaan.</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                    <div class="relative">
                        <img src="{{ asset('img/placeholder.svg?height=300&width=400') }}" alt="Direktur Operasional" class="w-full h-64 object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
                            <h3 class="text-xl font-bold text-white">Direktur Operasional</h3>
                            <p class="text-neutral-200">Direktur Operasional</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-neutral-600 text-sm">Memastikan kelancaran operasional dan layanan perusahaan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-neutral-50">
        <div class="container mx-auto px-4 max-w-4xl">
            <h2 class="section-title">Perusaan Resmi Berizin</h2>
            <p class="section-subtitle">
                <ol class="list-decimal list-inside">
                    <li>Nomor Induk Berusaha 0702250057751</li>
                    <li>Lampiran perdagangan....</li>
                    <li>Sertifikat Keanggotaan LP2LI</li>
                    <li>Sertifikat penyelengara Sistem Elektronik - Kementerian Komunikasi & Informatika</li>
                    <li>Sertifikat Syariah dari Dewan Syariah Nasional - MUI</li>
                    <li>Surat keputusan Dewan Syariah Nasional - MUI</li>
                </ol>
            </p>
        </div>
    </section>

    <!-- Layanan Kami -->
    <section class="py-16 bg-neutral-50">
        <div class="container mx-auto px-4">
            <h2 class="section-title">Layanan Kami</h2>
            <p class="section-subtitle">Solusi komprehensif untuk kebutuhan finansial Anda</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8 text-center">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="w-12 h-12 bg-primary-light bg-opacity-20 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-chart-line text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-neutral-800 mb-2">Investasi Syariah Global</h3>
                    <p class="text-neutral-600">Menawarkan berbagai produk investasi yang sesuai dengan prinsip syariah, membantu pelanggan mencapai tujuan finansial mereka.</p>
                </div>
                <!-- Repeat similar structure for other services -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="w-12 h-12 bg-primary-light bg-opacity-20 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-comments-dollar text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-neutral-800 mb-2">Konsultasi Keuangan & Muamalat</h3>
                    <p class="text-neutral-600">Memberikan nasihat ahli dalam perencanaan keuangan dan transaksi muamalat.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="w-12 h-12 bg-primary-light bg-opacity-20 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-handshake text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-neutral-800 mb-2">Kemitraan Bisnis Halal</h3>
                    <p class="text-neutral-600">Mendukung pengembangan bisnis halal melalui kemitraan strategis dan akses ke jaringan global.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Komitmen Kami -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="section-title">Komitmen Kami</h2>
            <div class="max-w-4xl mx-auto">
                <p class="text-neutral-600 leading-relaxed text-center">
                    Kami berkomitmen untuk terus beradaptasi dengan perkembangan zaman tanpa mengorbankan nilai-nilai syariah yang kami anut. Dengan tim profesional yang berdedikasi dan jaringan global yang luas, AYDIN MUAMALAT INTERNASIONAL siap menjadi mitra terpercaya Anda dalam mencapai kesejahteraan finansial yang berkelanjutan.
                </p>
            </div>
        </div>
    </section>

    <!-- Kenapa Memilih AYDIN? -->
    <section class="py-16 bg-neutral-50">
        <div class="container mx-auto px-4">
            <h2 class="section-title">Kenapa Memilih AYDIN?</h2>
            <p class="section-subtitle">Keunggulan yang membedakan kami</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-start">
                        <span class="text-primary text-2xl mr-3">🔹</span>
                        <div>
                            <h3 class="text-xl font-bold text-neutral-800 mb-2">Berbasis Syariah yang Murni</h3>
                            <p class="text-neutral-600">Seluruh produk dan layanan AYDIN telah dirancang dan diawasi untuk memenuhi prinsip-prinsip muamalat Islam yang otentik.</p>
                        </div>
                    </div>
                </div>
                <!-- Repeat similar structure for other reasons -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-start">
                        <span class="text-primary text-2xl mr-3">🔹</span>
                        <div>
                            <h3 class="text-xl font-bold text-neutral-800 mb-2">Pendekatan Global, Akar Lokal</h3>
                            <p class="text-neutral-600">Kami menghubungkan potensi lokal dengan peluang global, membuka akses kolaborasi lintas negara yang beretika dan aman.</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-start">
                        <span class="text-primary text-2xl mr-3">🔹</span>
                        <div>
                            <h3 class="text-xl font-bold text-neutral-800 mb-2">Teknologi Inovatif</h3>
                            <p class="text-neutral-600">Kami mengintegrasikan teknologi modern untuk menghadirkan efisiensi, transparansi, dan kemudahan dalam setiap transaksi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.template>
