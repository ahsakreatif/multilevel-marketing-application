<!-- Back to Top Button -->
<button id="backToTop" class="fixed bottom-6 right-6 bg-primary text-white w-12 h-12 rounded-full flex items-center justify-center shadow-lg hover:bg-primary-dark transition duration-300 opacity-0 invisible" x-data="{ show: false }" x-init="window.addEventListener('scroll', () => { show = window.scrollY > 500 })" :class="{ 'opacity-100 visible': show, 'opacity-0 invisible': !show }" @click="window.scrollTo({top: 0, behavior: 'smooth'})">
    <i class="fas fa-arrow-up"></i>
</button>