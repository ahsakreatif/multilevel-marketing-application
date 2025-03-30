<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Aydin Muamalat - Ekonomi Jaya Masyarakat Sejahtera</title>
<link rel="icon" href="logo.png" type="image/png">
<script src="https://cdn.tailwindcss.com"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: {
                        light: '#006B54',
                        DEFAULT: '#004D3B',
                        dark: '#003528',
                    },
                    secondary: {
                        light: '#B3A99B',
                        DEFAULT: '#8C8275',
                        dark: '#665E54',
                    },
                    neutral: {
                        50: '#fafafa',
                        100: '#f5f5f5',
                        200: '#e5e5e5',
                        300: '#d4d4d4',
                        400: '#a3a3a3',
                        500: '#737373',
                        600: '#525252',
                        700: '#404040',
                        800: '#262626',
                        900: '#171717',
                    }
                },
                fontFamily: {
                    sans: ['Inter', 'sans-serif'],
                }
            }
        }
    }
</script>
<style type="text/tailwindcss">
    @layer components {
        .btn-primary {
            @apply bg-primary text-white px-6 py-3 rounded-md font-medium hover:bg-primary-dark transition duration-300;
        }
        .btn-secondary {
            @apply bg-secondary text-white px-6 py-3 rounded-md font-medium hover:bg-secondary-dark transition duration-300;
        }
        .btn-primary-alt {
            @apply bg-white text-primary border border-primary px-6 py-3 rounded-md font-medium hover:bg-gray-50 transition duration-300;
        }
        .btn-secondary-alt {
            @apply bg-white text-secondary border border-secondary px-6 py-3 rounded-md font-medium hover:bg-gray-200 transition duration-300;
        }
        .section-title {
            @apply text-2xl md:text-3xl font-bold text-neutral-800 text-center mb-2;
        }
        .section-subtitle {
            @apply text-sm md:text-base text-neutral-500 text-center mb-10;
        }
        .product-card {
            @apply bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300;
        }
        .badge {
            @apply absolute top-3 left-3 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded;
        }
        .price {
            @apply text-lg font-bold text-primary;
        }
        .old-price {
            @apply text-sm text-neutral-400 line-through;
        }
    }
</style>