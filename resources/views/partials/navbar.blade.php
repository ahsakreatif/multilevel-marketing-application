<!-- Header -->
<header class="bg-white shadow-sm sticky top-0 z-50" x-data="{ mobileMenuOpen: false }">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <div class="flex items-center">
                <a href="#" class="text-2xl font-bold text-primary inline-flex items-center">
                    <img src="{{ asset('/logo.png') }}" alt="AydinMuamalat" class="w-14 h-14"> AydinMuamalat</a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-8">
                <a href="/" class="text-neutral-800 hover:text-primary font-medium border-b-2 border-secondary">Beranda</a>
                <a href="/about" class="text-neutral-800 hover:text-primary font-medium">Tentang</a>
                {{-- add submenu --}}
                <div class="relative group" x-data="{ open: false }" @mouseover="open = true" @mouseleave="setTimeout(() => open = false, 200)">
                    <button class="flex items-center text-neutral-800 hover:text-primary font-medium" @mouseover="open = true">
                        <span>Layanan</span>
                        <svg class="w-4 h-4 ml-1 transition-transform duration-200" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div x-show="open"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 transform -translate-y-2"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 transform translate-y-0"
                         x-transition:leave-end="opacity-0 transform -translate-y-2"
                         class="absolute bg-white shadow-lg rounded-lg w-64 py-2 mt-1 -left-4 border border-neutral-100">
                        <a href="/services/kode-etik" class="flex items-center px-4 py-3 hover:bg-neutral-50 transition-colors duration-200">
                            <div>
                                <div class="font-medium text-neutral-800">Kode Etik</div>
                            </div>
                        </a>
                        <a href="/services/katalog-produk" class="flex items-center px-4 py-3 hover:bg-neutral-50 transition-colors duration-200">
                            <div>
                                <div class="font-medium text-neutral-800">Katalog Produk</div>
                            </div>
                        </a>
                        <a href="/services/marketing-plan" class="flex items-center px-4 py-3 hover:bg-neutral-50 transition-colors duration-200">
                            <div>
                                <div class="font-medium text-neutral-800">Marketing Plan</div>
                            </div>
                        </a>
                    </div>
                </div>
                {{-- <a href="/control" class="text-neutral-800 hover:text-primary font-medium">Member</a> --}}
                <a href="/#contact" class="text-neutral-800 hover:text-primary font-medium">Kontak</a>
                <a href="#news" class="text-neutral-800 hover:text-primary font-medium">Berita</a>
            </nav>

            <!-- Mobile Menu Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden text-neutral-800">
                <i class="fas fa-bars text-xl"></i>
            </button>

            <!-- User Actions -->
            {{-- <div class="hidden md:flex items-center space-x-4">
                <a href="#" class="text-neutral-800 hover:text-primary">
                    <i class="fas fa-search"></i>
                </a>
                <a href="#" class="text-neutral-800 hover:text-primary">
                    <i class="fas fa-user"></i>
                </a>
                <a href="#" class="text-neutral-800 hover:text-primary relative">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="absolute -top-2 -right-2 bg-secondary text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                </a>
            </div> --}}
            {{-- unauthorized user action --}}
            <div class="hidden md:flex items-center space-x-4">
                <a href="/staff/login" class="flex items-center space-x-2 px-4 py-2 bg-primary text-white rounded-md hover:bg-primary-dark transition duration-200">
                    <i class="fas fa-user"></i>
                    <span class="font-medium">Login</span>
                </a>
                {{-- <a href="#" class="flex items-center space-x-2 px-4 py-2 border border-primary text-primary rounded-md hover:bg-primary hover:text-white transition duration-200">
                    <i class="fas fa-user-plus"></i>
                    <span class="font-medium">Register</span>
                </a> --}}
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" x-transition class="md:hidden py-4 border-t">
            <nav class="flex flex-col space-y-4">
                <a href="/" class="text-neutral-800 hover:text-primary font-medium">Beranda</a>
                <a href="/about" class="text-neutral-800 hover:text-primary font-medium">Tentang</a>
                <div x-data="{ open: false }">
                    <button @click="open = !open" class="flex items-center justify-between w-full text-neutral-800 hover:text-primary font-medium">
                        <span>Layanan</span>
                        <svg class="w-4 h-4 ml-1 transition-transform duration-200" :class="{'rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition class="pl-4 py-2 space-y-2">
                        <a href="/services/kode-etik" class="block text-neutral-800 hover:text-primary py-2">
                            Kode Etik
                        </a>
                        <a href="/services/katalog-produk" class="block text-neutral-800 hover:text-primary py-2">
                            Katalog Produk
                        </a>
                        <a href="/services/marketing-plan" class="block text-neutral-800 hover:text-primary py-2">
                            Marketing Plan
                        </a>
                    </div>
                </div>
                {{-- <a href="/control" class="text-neutral-800 hover:text-primary font-medium">Member</a> --}}
                <a href="/#contact" class="text-neutral-800 hover:text-primary font-medium">Kontak</a>
                <a href="#opportunity" class="text-neutral-800 hover:text-primary font-medium">Berita</a>
            </nav>
            {{-- <div class="flex items-center space-x-6 mt-4">
                <a href="#" class="text-neutral-800 hover:text-primary">
                    <i class="fas fa-search"></i>
                </a>
                <a href="#" class="text-neutral-800 hover:text-primary">
                    <i class="fas fa-user"></i>
                </a>
                <a href="#" class="text-neutral-800 hover:text-primary relative">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="absolute -top-2 -right-2 bg-secondary text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                </a>
            </div> --}}
            <div class="hidden md:flex items-center space-x-4">
                <a href="/staff/login" class="flex items-center space-x-2 px-4 py-2 bg-primary text-white rounded-md hover:bg-primary-dark transition duration-200">
                    <i class="fas fa-user"></i>
                    <span class="font-medium">Login</span>
                </a>
                {{-- <a href="#" class="flex items-center space-x-2 px-4 py-2 border border-primary text-primary rounded-md hover:bg-primary hover:text-white transition duration-200">
                    <i class="fas fa-user-plus"></i>
                    <span class="font-medium">Register</span>
                </a> --}}
            </div>
        </div>
    </div>
</header>