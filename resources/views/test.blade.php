<!DOCTYPE html>

<html class="dark" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>QUANTUM | Evolution of Power</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&amp;family=Inter:wght@400;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "background": "#131315",
                    "outline": "#8b919e",
                    "on-surface-variant": "#c1c6d5",
                    "surface-variant": "#353437",
                    "on-secondary-fixed-variant": "#46464b",
                    "primary-fixed-dim": "#aac7ff",
                    "on-error": "#690005",
                    "surface-tint": "#aac7ff",
                    "surface": "#131315",
                    "secondary-fixed-dim": "#c7c6cb",
                    "tertiary-container": "#67686a",
                    "on-background": "#e4e2e4",
                    "secondary-container": "#46464b",
                    "on-secondary-container": "#b5b4ba",
                    "surface-container-highest": "#353437",
                    "tertiary-fixed": "#e2e2e4",
                    "electric-blue": "#007AFF",
                    "primary-container": "#0066cc",
                    "on-tertiary": "#2f3132",
                    "surface-container-high": "#2a2a2c",
                    "surface-bright": "#39393b",
                    "on-primary-fixed": "#001b3e",
                    "secondary": "#c7c6cb",
                    "inverse-primary": "#005cba",
                    "inverse-surface": "#e4e2e4",
                    "secondary-fixed": "#e3e2e7",
                    "deep-charcoal": "#121212",
                    "on-tertiary-fixed-variant": "#454749",
                    "on-primary-container": "#dfe8ff",
                    "on-primary-fixed-variant": "#00458e",
                    "tertiary-fixed-dim": "#c6c6c8",
                    "on-tertiary-fixed": "#1a1c1d",
                    "surface-dark": "#1D1D1F",
                    "surface-container-low": "#1b1b1d",
                    "on-primary": "#002f65",
                    "surface-container": "#1f1f21",
                    "on-surface": "#e4e2e4",
                    "surface-container-lowest": "#0e0e10",
                    "tertiary": "#c6c6c8",
                    "sleek-silver": "#E8E8ED",
                    "outline-variant": "#414753",
                    "on-secondary": "#2f3034",
                    "error": "#ffb4ab",
                    "inverse-on-surface": "#303032",
                    "primary-fixed": "#d7e3ff",
                    "surface-dim": "#131315",
                    "error-container": "#93000a",
                    "on-secondary-fixed": "#1a1b1f",
                    "on-tertiary-container": "#e8e8ea",
                    "primary": "#aac7ff",
                    "on-error-container": "#ffdad6"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "spacing": {
                    "stack-sm": "8px",
                    "stack-lg": "32px",
                    "container-max": "1440px",
                    "margin-mobile": "20px",
                    "gutter": "24px",
                    "stack-md": "16px",
                    "section-gap": "120px",
                    "margin-desktop": "80px"
            },
            "fontFamily": {
                    "label-caps": ["Inter"],
                    "body-md": ["Inter"],
                    "headline-xl": ["Montserrat"],
                    "headline-lg": ["Montserrat"],
                    "display-lg": ["Montserrat"],
                    "display-lg-mobile": ["Montserrat"],
                    "body-lg": ["Inter"]
            },
            "fontSize": {
                    "label-caps": ["12px", { "lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600" }],
                    "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                    "headline-xl": ["48px", { "lineHeight": "56px", "fontWeight": "600" }],
                    "headline-lg": ["32px", { "lineHeight": "40px", "fontWeight": "600" }],
                    "display-lg": ["64px", { "lineHeight": "72px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                    "display-lg-mobile": ["40px", { "lineHeight": "48px", "letterSpacing": "-0.01em", "fontWeight": "700" }],
                    "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }]
            }
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            vertical-align: middle;
        }
        .hero-gradient {
            background: linear-gradient(180deg, rgba(19, 19, 21, 0.4) 0%, rgba(19, 19, 21, 0.9) 100%);
        }
        .card-hover:hover .card-image {
            transform: scale(1.05);
        }
        .reveal-up {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .reveal-up.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md overflow-x-hidden">
<!-- Top Navigation Bar -->
<nav class="fixed top-0 w-full z-50 bg-background/80 backdrop-blur-md">
<div class="flex justify-between items-center px-margin-desktop py-6 max-w-container-max mx-auto">
<div class="font-display-lg text-headline-lg tracking-tighter text-on-background"><span><img src="/logo.png" alt=""></span></div>
<div class="hidden md:flex gap-10">
<a class="font-label-caps text-label-caps text-electric-blue border-b-2 border-electric-blue pb-1" href="#">Products</a>
<a class="font-label-caps text-label-caps text-on-surface-variant hover:text-electric-blue transition-all duration-300" href="#">Gaming</a>
<a class="font-label-caps text-label-caps text-on-surface-variant hover:text-electric-blue transition-all duration-300" href="#">Business</a>
<a class="font-label-caps text-label-caps text-on-surface-variant hover:text-electric-blue transition-all duration-300" href="#">Support</a>
</div>
<div class="flex items-center gap-6">

<a href="{{ route('register') }}"
   class="bg-electric-blue text-white font-label-md text-label-md px-4 py-2 rounded-lg font-bold transition-all duration-200 hover:bg-sleek-silver/10 active:scale-95">
    Laporkan Kerusakan
</a>
</div>
</div>
</nav>
<!-- Hero Section -->
<section class="relative h-screen w-full flex items-center overflow-hidden">
<div class="absolute inset-0 z-0">
<img alt="QUANTUM Computer Workspace" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCra3EeiDzWD88LLF_KIHY5kH7x8Y9E8HxO7rEJh77p7vbIf_prXsDPeZ6Cuf2s1XUxP-hFJYieE-ACOe8cA4X0QJJfMn8bODS3JH4NPN7UMLCRLocyYe4yusBN4dLNY3Mq8VQNbloteJTXTHI_cX4-xb_5ciU9y_A33rtDIdG9gLPwaq93ECxq9bWD7Aw55l2bOqu-iVGiq5Ux494KUXPhk-Wa8PPCp7iW6xTPXNP-gHqLdThxDZ8V2yhRK1eHWFkSnuAyqhKQGn0"/>
<div class="absolute inset-0 hero-gradient"></div>
</div>
<div class="relative z-10 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto w-full">
<div class="max-w-3xl reveal-up active">
<h1 class="font-display-lg text-display-lg-mobile md:text-display-lg text-on-background leading-none mb-stack-md">
                    Evolution of Power
                </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant mb-stack-lg max-w-xl">
                    Elevate your performance with our curated selection of high-end computing machines. Dirancang untuk presisi dan kecepatan tanpa kompromi.
                </p>
<div class="flex flex-wrap gap-stack-md">
<button class="bg-electric-blue text-white font-label-caps text-label-caps px-8 py-4 uppercase tracking-widest hover:brightness-110 transition-all duration-300 scale-102">
                        Explore Collection
                    </button>
<button class="border border-sleek-silver text-sleek-silver font-label-caps text-label-caps px-8 py-4 uppercase tracking-widest hover:bg-sleek-silver/10 transition-all duration-300">
                        Lihat Video
                    </button>
</div>
</div>
</div>
</section>
<!-- Value Proposition -->
<section class="py-section-gap bg-background">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<div class="flex flex-col items-center text-center p-stack-lg bg-surface-container-low reveal-up">
<div class="w-16 h-16 bg-electric-blue/10 flex items-center justify-center rounded-full mb-stack-md">
<span class="material-symbols-outlined text-electric-blue text-4xl">support_agent</span>
</div>
<h3 class="font-headline-lg text-headline-lg mb-stack-sm">Premium Support</h3>
<p class="text-on-surface-variant font-body-md">Dukungan teknis prioritas 24/7 oleh para ahli perangkat keras kami.</p>
</div>
<div class="flex flex-col items-center text-center p-stack-lg bg-surface-container-low reveal-up" style="transition-delay: 100ms;">
<div class="w-16 h-16 bg-electric-blue/10 flex items-center justify-center rounded-full mb-stack-md">
<span class="material-symbols-outlined text-electric-blue text-4xl">memory</span>
</div>
<h3 class="font-headline-lg text-headline-lg mb-stack-sm">Next-Gen Components</h3>
<p class="text-on-surface-variant font-body-md">Integrasi teknologi terbaru dan komponen berperforma tinggi.</p>
</div>
<div class="flex flex-col items-center text-center p-stack-lg bg-surface-container-low reveal-up" style="transition-delay: 200ms;">
<div class="w-16 h-16 bg-electric-blue/10 flex items-center justify-center rounded-full mb-stack-md">
<span class="material-symbols-outlined text-electric-blue text-4xl">verified</span>
</div>
<h3 class="font-headline-lg text-headline-lg mb-stack-sm">Lifetime Warranty</h3>
<p class="text-on-surface-variant font-body-md">Jaminan kualitas jangka panjang untuk ketenangan pikiran Anda.</p>
</div>
</div>
</div>
</section>
<!-- Featured Products Bento Grid -->
<section class="py-section-gap bg-surface-container-lowest">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="mb-stack-lg reveal-up">
<span class="font-label-caps text-label-caps text-electric-blue uppercase">Kategori Unggulan</span>
<h2 class="font-headline-xl text-headline-xl mt-stack-sm">Mesin Masa Depan</h2>
</div>
<div class="grid grid-cols-1 lg:grid-cols-2 gap-gutter">
<!-- Elite Laptops -->
<div class="group relative bg-surface-dark overflow-hidden card-hover reveal-up">
<div class="aspect-[16/9] lg:aspect-auto lg:h-[600px] overflow-hidden">
<img alt="Elite Laptops" class="w-full h-full object-cover card-image transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBMUMYmP1HnRqtr0pnSUc5BYguLY0UQhbSUCyRy2opTZ9nuagJL_m2X6Oc3HfESFjkyGl0pvQm3MUM3wp7zSydy1tyxRpcNHnXmVvsk_eZYf0_2k8a1arw9XCorfIleG4HjaApM23zfbT3muBzWnqQ10CWYy8vZ6zZNuLEwSqWnogne0WAoYrT8iV3vthHvZQgtylTwbqkBSGU0_3UIXsGL8q4wvrCk7R7UZPqaxuwNeQaFMczrfCZlCJaH0DruKn5cf104JqqqUvU"/>
</div>
<div class="absolute inset-0 bg-gradient-to-t from-background via-background/20 to-transparent p-stack-lg flex flex-col justify-end">
<h3 class="font-headline-xl text-headline-xl mb-stack-sm">Elite Laptops</h3>
<p class="text-on-surface-variant font-body-lg max-w-md mb-stack-md">
                            Precision engineered for the modern professional and competitive gamer. Portabilitas tanpa mengorbankan kekuatan.
                        </p>
<a class="inline-flex items-center text-electric-blue font-label-caps text-label-caps group-hover:gap-4 transition-all duration-300" href="#">
                            LIHAT DETAIL <span class="material-symbols-outlined ml-2">arrow_forward</span>
</a>
</div>
</div>
<!-- Powerhouse Desktops -->
<div class="group relative bg-surface-dark overflow-hidden card-hover reveal-up" style="transition-delay: 150ms;">
<div class="aspect-[16/9] lg:aspect-auto lg:h-[600px] overflow-hidden">
<img alt="Powerhouse Desktops" class="w-full h-full object-cover card-image transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDkQ1dizx_XX8iCXA_Ki3K289g8ahyLZT-3V5nHOcgo9sZWxiwEEGFg9vGEDEYo4CzEfwNryKkNTL50nLrS6OtE-E675lYvdtJOwKR6Ct15i0p80x0X-tYJ7h34tEOoErbBG7budTCon0E05S521Tl6CCNiVpU3LNNbiYYfEU8Tkb8tXqT9BD7LSvFUORuYGoqNpkxVQew7_7y468qOMc8kPWi_vvouM7nRJVr_N8uWZK2cJ6e9LjrhaPFuXbL_ap-YveFOe2OgsoU"/>
</div>
<div class="absolute inset-0 bg-gradient-to-t from-background via-background/20 to-transparent p-stack-lg flex flex-col justify-end">
<h3 class="font-headline-xl text-headline-xl mb-stack-sm">Powerhouse Desktops</h3>
<p class="text-on-surface-variant font-body-lg max-w-md mb-stack-md">
                            Uncompromising performance and cooling for heavy workloads. Performa murni untuk kreator dan antusias.
                        </p>
<a class="inline-flex items-center text-electric-blue font-label-caps text-label-caps group-hover:gap-4 transition-all duration-300" href="#">
                            LIHAT DETAIL <span class="material-symbols-outlined ml-2">arrow_forward</span>
</a>
</div>
</div>
</div>
</div>
</section>
<!-- Footer -->
<footer class="w-full bg-surface-container-lowest">
<div class="flex flex-col md:flex-row justify-between items-start px-margin-desktop py-stack-lg gap-gutter max-w-container-max mx-auto">
<div class="max-w-sm">
<div class="font-display-lg text-headline-lg text-on-surface mb-stack-md">QUANTUM</div>
<p class="text-on-surface-variant font-body-md mb-stack-lg">
                    Memimpin revolusi komputasi dengan inovasi tanpa henti dan desain yang terinspirasi oleh performa.
                </p>
<div class="flex gap-4">
<a class="text-on-surface-variant hover:text-electric-blue transition-colors" href="#">
<span class="material-symbols-outlined">public</span>
</a>
<a class="text-on-surface-variant hover:text-electric-blue transition-colors" href="#">
<span class="material-symbols-outlined">smart_display</span>
</a>
</div>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 gap-gutter w-full md:w-auto">
<div class="flex flex-col gap-4">
<span class="font-label-caps text-label-caps text-sleek-silver uppercase opacity-50">Produk</span>
<a class="text-on-surface-variant hover:text-electric-blue transition-colors font-body-md" href="#">Laptops</a>
<a class="text-on-surface-variant hover:text-electric-blue transition-colors font-body-md" href="#">Desktops</a>
<a class="text-on-surface-variant hover:text-electric-blue transition-colors font-body-md" href="#">Aksesoris</a>
</div>
<div class="flex flex-col gap-4">
<span class="font-label-caps text-label-caps text-sleek-silver uppercase opacity-50">Perusahaan</span>
<a class="text-on-surface-variant hover:text-electric-blue transition-colors font-body-md" href="#">Tentang Kami</a>
<a class="text-on-surface-variant hover:text-electric-blue transition-colors font-body-md" href="#">Karir</a>
<a class="text-on-surface-variant hover:text-electric-blue transition-colors font-body-md" href="#">Kontak</a>
</div>
<div class="flex flex-col gap-4">
<span class="font-label-caps text-label-caps text-sleek-silver uppercase opacity-50">Bantuan</span>
<a class="text-on-surface-variant hover:text-electric-blue transition-colors font-body-md" href="#">Dukungan</a>
<a class="text-on-surface-variant hover:text-electric-blue transition-colors font-body-md" href="#">Garansi</a>
<a class="text-on-surface-variant hover:text-electric-blue transition-colors font-body-md" href="#">FAQs</a>
</div>
<div class="flex flex-col gap-4">
<span class="font-label-caps text-label-caps text-sleek-silver uppercase opacity-50">Legal</span>
<a class="text-on-surface-variant hover:text-electric-blue transition-colors font-body-md" href="#">Terms</a>
<a class="text-on-surface-variant hover:text-electric-blue transition-colors font-body-md" href="#">Privacy</a>
<a class="text-on-surface-variant hover:text-electric-blue transition-colors font-body-md" href="#">Cookies</a>
</div>
</div>
</div>
<div class="max-w-container-max mx-auto px-margin-desktop py-stack-md border-t border-outline-variant flex flex-col md:flex-row justify-between items-center opacity-80 hover:opacity-100 transition-opacity">
<div class="font-body-md text-body-md text-sleek-silver">© 2024 QUANTUM COMPUTING. ALL RIGHTS RESERVED.</div>
<div class="flex gap-margin-mobile mt-4 md:mt-0">
<a class="text-on-surface-variant hover:text-electric-blue transition-colors font-body-md" href="#">Location</a>
<a class="text-on-surface-variant hover:text-electric-blue transition-colors font-body-md" href="#">Contact</a>
<a class="text-on-surface-variant hover:text-electric-blue transition-colors font-body-md" href="#">Privacy</a>
<a class="text-on-surface-variant hover:text-electric-blue transition-colors font-body-md" href="#">Terms</a>
</div>
</div>
</footer>
<script>
        // Simple Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.reveal-up').forEach((el) => observer.observe(el));

        // Atmospheric parallax effect for hero
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const heroImg = document.querySelector('section img');
            if (heroImg) {
                heroImg.style.transform = `translateY(${scrolled * 0.4}px)`;
            }
        });
    </script>
</body></html>