<!DOCTYPE html>
<html class="dark scroll-smooth" lang="id">
   <head>
      <meta charset="utf-8"/>
      <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
      <title>Toko Parwata Digital | Service Komputer Profesional</title>
      <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&amp;family=Inter:wght@400;600&amp;display=swap" rel="stylesheet"/>
      <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
      <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
      <script src="https://kit.fontawesome.com/908473af8d.js" crossorigin="anonymous"></script>
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
        .section-accent::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 2px;
            background: linear-gradient(90deg, transparent, rgba(0, 122, 255, 0.4), transparent);
            border-radius: 999px;
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
            <div class="font-display-lg text-headline-lg tracking-tighter text-on-background flex items-center gap-2"><span><img src="/logo.png" alt="Toko Parwata Digital" class="h-8"></span> Digital</div>
            <div class="hidden md:flex gap-10">
               <a class="font-label-caps text-label-caps text-electric-blue border-b-2 border-electric-blue pb-1" href="#services">Layanan</a>
               <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-electric-blue transition-all duration-300" href="#why-us">Mengapa Kami</a>
               <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-electric-blue transition-all duration-300" href="#testimonials">Testimoni</a>
               <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-electric-blue transition-all duration-300" href="#contact">Kontak</a>
            </div>
            <div class="flex items-center gap-6">
               <a href="{{ route('login') }}"
                  class="bg-electric-blue text-white font-label-md text-label-md px-4 py-2 rounded-lg font-bold transition-all duration-200 hover:bg-sleek-silver/10 active:scale-95">
               Laporkan Kerusakan
               </a>
            </div>
         </div>
      </nav>
      <!-- Hero Section -->
      <section id="hero" class="relative h-screen w-full flex items-center overflow-hidden">
         <div class="absolute inset-0 z-0">
            <img alt="Toko Parwata Digital Service Komputer" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCra3EeiDzWD88LLF_KIHY5kH7x8Y9E8HxO7rEJh77p7vbIf_prXsDPeZ6Cuf2s1XUxP-hFJYieE-ACOe8cA4X0QJJfMn8bODS3JH4NPN7UMLCRLocyYe4yusBN4dLNY3Mq8VQNbloteJTXTHI_cX4-xb_5ciU9y_A33rtDIdG9gLPwaq93ECxq9bWD7Aw55l2bOqu-iVGiq5Ux494KUXPhk-Wa8PPCp7iW6xTPXNP-gHqLdThxDZ8V2yhRK1eHWFkSnuAyqhKQGn0"/>
            <div class="absolute inset-0 hero-gradient"></div>
         </div>
         <div class="relative z-10 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto w-full">
            <div class="max-w-3xl reveal-up active">
               <h1 class="font-display-lg text-display-lg-mobile md:text-display-lg text-on-background leading-none mb-stack-md">
                  Service Komputer Cepat, Aman &amp; Profesional
               </h1>
               <p class="font-body-lg text-body-lg text-on-surface-variant mb-stack-md max-w-xl">
                  Percayakan perangkat laptop, PC, dan printer Anda kepada teknisi berpengalaman kami. Gratis biaya diagnosa — antar jemput tersedia.
               </p>
               <div class="flex flex-wrap gap-4 mb-stack-lg">
                  <span class="inline-flex items-center gap-2 bg-electric-blue/10 text-electric-blue border border-electric-blue/30 rounded-full px-4 py-2 font-label-caps text-label-caps">
                  <span class="material-symbols-outlined text-[16px]">bolt</span> Fast Response
                  </span>
                  <span class="inline-flex items-center gap-2 bg-electric-blue/10 text-electric-blue border border-electric-blue/30 rounded-full px-4 py-2 font-label-caps text-label-caps">
                  <span class="material-symbols-outlined text-[16px]">home_pin</span> Home Service
                  </span>
                  <span class="inline-flex items-center gap-2 bg-electric-blue/10 text-electric-blue border border-electric-blue/30 rounded-full px-4 py-2 font-label-caps text-label-caps">
                  <span class="material-symbols-outlined text-[16px]">verified</span> Berpengalaman
                  </span>
               </div>
               <div class="flex flex-wrap gap-stack-md">
                  <a href="{{ route('login') }}" class="bg-electric-blue text-white font-label-caps text-label-caps px-8 py-4 uppercase tracking-widest hover:brightness-110 transition-all duration-300 rounded-lg inline-block">
                  Laporkan Kerusakan
                  </a>
                  <a href="#contact" class="border border-sleek-silver text-sleek-silver font-label-caps text-label-caps px-8 py-4 uppercase tracking-widest hover:bg-sleek-silver/10 transition-all duration-300 rounded-lg inline-block">
                  Hubungi Kami
                  </a>
               </div>
            </div>
         </div>
      </section>
       <!-- Layanan -->
      <section id="services" class="py-section-gap bg-background relative border-t border-outline-variant/[0.07] section-accent">
         <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="mb-stack-lg reveal-up text-center">
               <span class="font-label-caps text-label-caps text-electric-blue uppercase">Layanan Kami</span>
               <h2 class="font-headline-xl text-headline-xl mt-stack-md">Solusi Lengkap Service Komputer</h2>
               <p class="text-on-surface-variant font-body-lg mt-stack-sm max-w-2xl mx-auto">Dari diagnosa hingga perbaikan, kami siap menangani semua kebutuhan perangkat Anda.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
               <div class="bg-surface-container-low border border-outline-variant/20 rounded-xl p-6 reveal-up hover:border-electric-blue/40 transition-all duration-300">
                  <div class="w-14 h-14 bg-electric-blue/10 flex items-center justify-center rounded-xl mb-stack-md">
                     <span class="material-symbols-outlined text-electric-blue text-3xl">laptop</span>
                  </div>
                  <h3 class="font-headline-lg text-headline-lg mb-stack-sm">Service Laptop</h3>
                  <p class="text-on-surface-variant font-body-md text-sm">Perbaikan laptop mati total, layar pecah, keyboard error, dan komponen lainnya.</p>
               </div>
               <div class="bg-surface-container-low border border-outline-variant/20 rounded-xl p-6 reveal-up hover:border-electric-blue/40 transition-all duration-300" style="transition-delay: 50ms;">
                  <div class="w-14 h-14 bg-electric-blue/10 flex items-center justify-center rounded-xl mb-stack-md">
                     <span class="material-symbols-outlined text-electric-blue text-3xl">dns</span>
                  </div>
                  <h3 class="font-headline-lg text-headline-lg mb-stack-sm">Service PC / Desktop</h3>
                  <p class="text-on-surface-variant font-body-md text-sm">Diagnosa dan perbaikan komputer rakitan dan branded.</p>
               </div>
               <div class="bg-surface-container-low border border-outline-variant/20 rounded-xl p-6 reveal-up hover:border-electric-blue/40 transition-all duration-300" style="transition-delay: 100ms;">
                  <div class="w-14 h-14 bg-electric-blue/10 flex items-center justify-center rounded-xl mb-stack-md">
                     <span class="material-symbols-outlined text-electric-blue text-3xl">install_desktop</span>
                  </div>
                  <h3 class="font-headline-lg text-headline-lg mb-stack-sm">Instalasi Software</h3>
                  <p class="text-on-surface-variant font-body-md text-sm">Install OS, driver, Microsoft Office, antivirus, dan software pendukung.</p>
               </div>
               <div class="bg-surface-container-low border border-outline-variant/20 rounded-xl p-6 reveal-up hover:border-electric-blue/40 transition-all duration-300" style="transition-delay: 150ms;">
                  <div class="w-14 h-14 bg-electric-blue/10 flex items-center justify-center rounded-xl mb-stack-md">
                     <span class="material-symbols-outlined text-electric-blue text-3xl">memory</span>
                  </div>
                  <h3 class="font-headline-lg text-headline-lg mb-stack-sm">Rakit PC</h3>
                  <p class="text-on-surface-variant font-body-md text-sm">Konsultasi dan perakitan PC custom sesuai kebutuhan dan budget Anda.</p>
               </div>
               <div class="bg-surface-container-low border border-outline-variant/20 rounded-xl p-6 reveal-up hover:border-electric-blue/40 transition-all duration-300" style="transition-delay: 200ms;">
                  <div class="w-14 h-14 bg-electric-blue/10 flex items-center justify-center rounded-xl mb-stack-md">
                     <span class="material-symbols-outlined text-electric-blue text-3xl">cleaning_services</span>
                  </div>
                  <h3 class="font-headline-lg text-headline-lg mb-stack-sm">Cleaning &amp; Maintenance</h3>
                  <p class="text-on-surface-variant font-body-md text-sm">Bongkar pasang, pembersihan debu, dan penggantian thermal paste laptop.</p>
               </div>
               <div class="bg-surface-container-low border border-outline-variant/20 rounded-xl p-6 reveal-up hover:border-electric-blue/40 transition-all duration-300" style="transition-delay: 250ms;">
                  <div class="w-14 h-14 bg-electric-blue/10 flex items-center justify-center rounded-xl mb-stack-md">
                     <span class="material-symbols-outlined text-electric-blue text-3xl">home_pin</span>
                  </div>
                  <h3 class="font-headline-lg text-headline-lg mb-stack-sm">Home Service</h3>
                  <p class="text-on-surface-variant font-body-md text-sm">Teknisi datang ke rumah Anda — tanpa ribet bawa perangkat.</p>
               </div>
               <div class="bg-surface-container-low border border-outline-variant/20 rounded-xl p-6 reveal-up hover:border-electric-blue/40 transition-all duration-300" style="transition-delay: 300ms;">
                  <div class="w-14 h-14 bg-electric-blue/10 flex items-center justify-center rounded-xl mb-stack-md">
                     <span class="material-symbols-outlined text-electric-blue text-3xl">upgrade</span>
                  </div>
                  <h3 class="font-headline-lg text-headline-lg mb-stack-sm">Upgrade Hardware</h3>
                  <p class="text-on-surface-variant font-body-md text-sm">Upgrade RAM, SSD, VGA, prosesor untuk performa maksimal.</p>
               </div>
               <div class="bg-surface-container-low border border-outline-variant/20 rounded-xl p-6 reveal-up hover:border-electric-blue/40 transition-all duration-300" style="transition-delay: 350ms;">
                  <div class="w-14 h-14 bg-electric-blue/10 flex items-center justify-center rounded-xl mb-stack-md">
                     <span class="material-symbols-outlined text-electric-blue text-3xl">restore</span>
                  </div>
                  <h3 class="font-headline-lg text-headline-lg mb-stack-sm">Recovery Data</h3>
                  <p class="text-on-surface-variant font-body-md text-sm">Selamatkan data penting Anda dari hardisk rusak atau terkena virus.</p>
               </div>
            </div>
         </div>
      </section>
       <!-- Workflow -->
      <section id="workflow" class="py-section-gap bg-surface-container-low relative border-t border-outline-variant/[0.07]">
         <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="mb-stack-lg reveal-up text-center">
               <span class="font-label-caps text-label-caps text-electric-blue uppercase">Alur Mudah</span>
               <h2 class="font-headline-xl text-headline-xl mt-stack-md">Cara Kerja Kami</h2>
               <p class="text-on-surface-variant font-body-lg mt-stack-sm max-w-2xl mx-auto">Cukup 5 langkah mudah, perangkat Anda kembali prima.</p>
            </div>
            <div class="relative grid grid-cols-1 md:grid-cols-5 gap-6">
               <div class="relative flex md:flex-col items-start md:items-center gap-4 reveal-up">
                  <div class="absolute top-6 left-6 md:top-auto md:left-auto md:relative w-px h-[calc(100%-24px)] md:h-px md:w-[calc(100%-48px)] bg-outline-variant hidden md:block last:hidden"></div>
                  <div class="w-12 h-12 bg-electric-blue text-white rounded-full flex items-center justify-center font-headline-lg text-headline-lg shrink-0 relative z-10">1</div>
                  <div class="flex-1 md:text-center">
                     <h3 class="font-headline-lg text-headline-lg mb-stack-sm">Laporkan</h3>
                     <p class="text-on-surface-variant font-body-md text-sm">Buat laporan kerusakan via website atau datang langsung ke toko.</p>
                  </div>
               </div>
               <div class="relative flex md:flex-col items-start md:items-center gap-4 reveal-up" style="transition-delay: 80ms;">
                  <div class="w-12 h-12 bg-electric-blue text-white rounded-full flex items-center justify-center font-headline-lg text-headline-lg shrink-0 relative z-10">2</div>
                  <div class="flex-1 md:text-center">
                     <h3 class="font-headline-lg text-headline-lg mb-stack-sm">Diagnosa</h3>
                     <p class="text-on-surface-variant font-body-md text-sm">Teknisi periksa dan infokan biaya perbaikan untuk disetujui.</p>
                  </div>
               </div>
               <div class="relative flex md:flex-col items-start md:items-center gap-4 reveal-up" style="transition-delay: 160ms;">
                  <div class="w-12 h-12 bg-electric-blue text-white rounded-full flex items-center justify-center font-headline-lg text-headline-lg shrink-0 relative z-10">3</div>
                  <div class="flex-1 md:text-center">
                     <h3 class="font-headline-lg text-headline-lg mb-stack-sm">Kerjakan</h3>
                     <p class="text-on-surface-variant font-body-md text-sm">Perangkat dikerjakan oleh teknisi ahli kami dengan presisi.</p>
                  </div>
               </div>
               <div class="relative flex md:flex-col items-start md:items-center gap-4 reveal-up" style="transition-delay: 240ms;">
                  <div class="w-12 h-12 bg-electric-blue text-white rounded-full flex items-center justify-center font-headline-lg text-headline-lg shrink-0 relative z-10">4</div>
                  <div class="flex-1 md:text-center">
                     <h3 class="font-headline-lg text-headline-lg mb-stack-sm">Quality Check</h3>
                     <p class="text-on-surface-variant font-body-md text-sm">Pastikan semua berfungsi optimal sebelum diserahkan ke Anda.</p>
                  </div>
               </div>
               <div class="relative flex md:flex-col items-start md:items-center gap-4 reveal-up" style="transition-delay: 320ms;">
                  <div class="w-12 h-12 bg-electric-blue text-white rounded-full flex items-center justify-center font-headline-lg text-headline-lg shrink-0 relative z-10">5</div>
                  <div class="flex-1 md:text-center">
                     <h3 class="font-headline-lg text-headline-lg mb-stack-sm">Selesai</h3>
                     <p class="text-on-surface-variant font-body-md text-sm">Ambil perangkat dan dapatkan garansi tertulis untuk ketenangan Anda.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
       <!-- Mengapa Kami -->
      <section id="why-us" class="py-section-gap bg-surface-container-lowest relative border-t border-outline-variant/[0.07]">
         <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="mb-stack-lg reveal-up text-center">
               <span class="font-label-caps text-label-caps text-electric-blue uppercase">Mengapa Parwata Digital</span>
               <h2 class="font-headline-xl text-headline-xl mt-stack-md">Kenapa Memilih Kami?</h2>
               <p class="text-on-surface-variant font-body-lg mt-stack-sm max-w-2xl mx-auto">Kami berkomitmen memberikan pelayanan terbaik untuk setiap perangkat yang dipercayakan kepada kami.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
               <div class="bg-surface-container-low border border-outline-variant/20 rounded-xl p-6 reveal-up flex items-start gap-4">
                  <div class="w-14 h-14 bg-electric-blue/10 flex items-center justify-center rounded-xl shrink-0">
                     <span class="material-symbols-outlined text-electric-blue text-3xl">verified</span>
                  </div>
                  <div>
                     <h3 class="font-headline-lg text-headline-lg mb-stack-sm">Teknisi Berpengalaman</h3>
                     <p class="text-on-surface-variant font-body-md text-sm">Ditangani teknisi dengan pengalaman bertahun-tahun di bidangnya.</p>
                  </div>
               </div>
               <div class="bg-surface-container-low border border-outline-variant/20 rounded-xl p-6 reveal-up flex items-start gap-4" style="transition-delay: 60ms;">
                  <div class="w-14 h-14 bg-electric-blue/10 flex items-center justify-center rounded-xl shrink-0">
                     <span class="material-symbols-outlined text-electric-blue text-3xl">bolt</span>
                  </div>
                  <div>
                     <h3 class="font-headline-lg text-headline-lg mb-stack-sm">Fast Response</h3>
                     <p class="text-on-surface-variant font-body-md text-sm">Laporan Anda mendapat respons cepat dalam hitungan jam.</p>
                  </div>
               </div>
               <div class="bg-surface-container-low border border-outline-variant/20 rounded-xl p-6 reveal-up flex items-start gap-4" style="transition-delay: 120ms;">
                  <div class="w-14 h-14 bg-electric-blue/10 flex items-center justify-center rounded-xl shrink-0">
                     <span class="material-symbols-outlined text-electric-blue text-3xl">visibility</span>
                  </div>
                  <div>
                     <h3 class="font-headline-lg text-headline-lg mb-stack-sm">Transparan</h3>
                     <p class="text-on-surface-variant font-body-md text-sm">Biaya diinfokan dan disetujui sebelum perbaikan dilakukan.</p>
                  </div>
               </div>
               <div class="bg-surface-container-low border border-outline-variant/20 rounded-xl p-6 reveal-up flex items-start gap-4" style="transition-delay: 180ms;">
                  <div class="w-14 h-14 bg-electric-blue/10 flex items-center justify-center rounded-xl shrink-0">
                     <span class="material-symbols-outlined text-electric-blue text-3xl">home_pin</span>
                  </div>
                  <div>
                     <h3 class="font-headline-lg text-headline-lg mb-stack-sm">Home Service</h3>
                     <p class="text-on-surface-variant font-body-md text-sm">Antar jemput gratis &amp; service di lokasi Anda tanpa ribet.</p>
                  </div>
               </div>
               <div class="bg-surface-container-low border border-outline-variant/20 rounded-xl p-6 reveal-up flex items-start gap-4" style="transition-delay: 240ms;">
                  <div class="w-14 h-14 bg-electric-blue/10 flex items-center justify-center rounded-xl shrink-0">
                     <span class="material-symbols-outlined text-electric-blue text-3xl">handyman</span>
                  </div>
                  <div>
                     <h3 class="font-headline-lg text-headline-lg mb-stack-sm">Sparepart Berkualitas</h3>
                     <p class="text-on-surface-variant font-body-md text-sm">Hanya komponen original dan bergaransi untuk hasil maksimal.</p>
                  </div>
               </div>
               <div class="bg-surface-container-low border border-outline-variant/20 rounded-xl p-6 reveal-up flex items-start gap-4" style="transition-delay: 300ms;">
                  <div class="w-14 h-14 bg-electric-blue/10 flex items-center justify-center rounded-xl shrink-0">
                     <span class="material-symbols-outlined text-electric-blue text-3xl">support_agent</span>
                  </div>
                  <div>
                     <h3 class="font-headline-lg text-headline-lg mb-stack-sm">Support After Service</h3>
                     <p class="text-on-surface-variant font-body-md text-sm">Konsultasi gratis setelah perbaikan, kapan pun Anda butuh.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
       <!-- Statistik -->
      <section class="py-section-gap bg-surface-container relative border-t border-outline-variant/[0.07]">
         <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
               <div class="text-center reveal-up">
                  <p class="font-display-lg text-display-lg-mobile md:text-display-lg text-electric-blue leading-none">500+</p>
                  <p class="text-on-surface-variant font-label-caps text-label-caps mt-stack-sm uppercase">Device Diperbaiki</p>
               </div>
               <div class="text-center reveal-up" style="transition-delay: 100ms;">
                  <p class="font-display-lg text-display-lg-mobile md:text-display-lg text-electric-blue leading-none">300+</p>
                  <p class="text-on-surface-variant font-label-caps text-label-caps mt-stack-sm uppercase">Customer Puas</p>
               </div>
               <div class="text-center reveal-up" style="transition-delay: 200ms;">
                  <p class="font-display-lg text-display-lg-mobile md:text-display-lg text-electric-blue leading-none">24 Jam</p>
                  <p class="text-on-surface-variant font-label-caps text-label-caps mt-stack-sm uppercase">Response Time</p>
               </div>
               <div class="text-center reveal-up" style="transition-delay: 300ms;">
                  <p class="font-display-lg text-display-lg-mobile md:text-display-lg text-electric-blue leading-none">5+</p>
                  <p class="text-on-surface-variant font-label-caps text-label-caps mt-stack-sm uppercase">Tahun Pengalaman</p>
               </div>
            </div>
         </div>
      </section>
       <!-- Testimoni -->
      <section id="testimonials" class="py-section-gap bg-surface-container-low relative border-t border-outline-variant/[0.07]">
         <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="mb-stack-lg reveal-up text-center">
               <span class="font-label-caps text-label-caps text-electric-blue uppercase">Testimoni</span>
               <h2 class="font-headline-xl text-headline-xl mt-stack-md">Apa Kata Pelanggan</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
               <div class="bg-surface-container-low border border-outline-variant/20 rounded-xl p-8 reveal-up">
                  <div class="flex gap-1 mb-stack-md">
                     <span class="material-symbols-outlined text-yellow-500" style="font-variation-settings: 'FILL' 1;">star</span>
                     <span class="material-symbols-outlined text-yellow-500" style="font-variation-settings: 'FILL' 1;">star</span>
                     <span class="material-symbols-outlined text-yellow-500" style="font-variation-settings: 'FILL' 1;">star</span>
                     <span class="material-symbols-outlined text-yellow-500" style="font-variation-settings: 'FILL' 1;">star</span>
                     <span class="material-symbols-outlined text-yellow-500" style="font-variation-settings: 'FILL' 1;">star</span>
                  </div>
                  <p class="text-on-surface-variant font-body-md mb-stack-md italic">"Laptop saya mati total, 2 hari selesai. Makasih Parwata Digital! Pelayanannya ramah dan profesional."</p>
                  <div class="flex items-center gap-3">
                     <div class="w-10 h-10 bg-electric-blue/20 rounded-full flex items-center justify-center font-headline-lg text-electric-blue">A</div>
                     <div>
                        <p class="font-label-caps text-label-caps text-sleek-silver">Andi Pratama</p>
                        <p class="text-on-surface-variant text-xs">Denpasar</p>
                     </div>
                  </div>
               </div>
               <div class="bg-surface-container-low border border-outline-variant/20 rounded-xl p-8 reveal-up" style="transition-delay: 100ms;">
                  <div class="flex gap-1 mb-stack-md">
                     <span class="material-symbols-outlined text-yellow-500" style="font-variation-settings: 'FILL' 1;">star</span>
                     <span class="material-symbols-outlined text-yellow-500" style="font-variation-settings: 'FILL' 1;">star</span>
                     <span class="material-symbols-outlined text-yellow-500" style="font-variation-settings: 'FILL' 1;">star</span>
                     <span class="material-symbols-outlined text-yellow-500" style="font-variation-settings: 'FILL' 1;">star</span>
                     <span class="material-symbols-outlined text-yellow-500" style="font-variation-settings: 'FILL' 1;">star</span>
                  </div>
                  <p class="text-on-surface-variant font-body-md mb-stack-md italic">"Home servicenya recommended banget. Teknisi datang tepat waktu, kerja cepet, harga masuk akal."</p>
                  <div class="flex items-center gap-3">
                     <div class="w-10 h-10 bg-electric-blue/20 rounded-full flex items-center justify-center font-headline-lg text-electric-blue">S</div>
                     <div>
                        <p class="font-label-caps text-label-caps text-sleek-silver">Sari Dewi</p>
                        <p class="text-on-surface-variant text-xs">Sanur</p>
                     </div>
                  </div>
               </div>
               <div class="bg-surface-container-low border border-outline-variant/20 rounded-xl p-8 reveal-up" style="transition-delay: 200ms;">
                  <div class="flex gap-1 mb-stack-md">
                     <span class="material-symbols-outlined text-yellow-500" style="font-variation-settings: 'FILL' 1;">star</span>
                     <span class="material-symbols-outlined text-yellow-500" style="font-variation-settings: 'FILL' 1;">star</span>
                     <span class="material-symbols-outlined text-yellow-500" style="font-variation-settings: 'FILL' 1;">star</span>
                     <span class="material-symbols-outlined text-yellow-500" style="font-variation-settings: 'FILL' 1;">star</span>
                     <span class="material-symbols-outlined text-yellow-500" style="font-variation-settings: 'FILL' 1;">star</span>
                  </div>
                  <p class="text-on-surface-variant font-body-md mb-stack-md italic">"Harga terjangkau, hasil rapi, dan ada garansi pula. Langganan dari 3 tahun lalu, gak pernah kecewa."</p>
                  <div class="flex items-center gap-3">
                     <div class="w-10 h-10 bg-electric-blue/20 rounded-full flex items-center justify-center font-headline-lg text-electric-blue">B</div>
                     <div>
                        <p class="font-label-caps text-label-caps text-sleek-silver">Budi Santoso</p>
                        <p class="text-on-surface-variant text-xs">Renon</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
       <!-- CTA -->
      <section class="py-section-gap bg-surface-container-lowest relative border-t border-outline-variant/[0.07] section-accent">
         <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop text-center">
            <div class="reveal-up max-w-3xl mx-auto">
               <h2 class="font-headline-xl text-headline-xl mb-stack-md">Komputer Bermasalah? <span class="text-electric-blue">Laporkan Sekarang Juga!</span></h2>
               <p class="text-on-surface-variant font-body-lg mb-stack-lg">Gratis biaya diagnosa untuk setiap laporan kerusakan. Teknisi kami siap membantu Anda.</p>
               <div class="flex flex-wrap justify-center gap-stack-md">
                  <a href="{{ route('login') }}" class="bg-electric-blue text-white font-label-caps text-label-caps px-8 py-4 uppercase tracking-widest hover:brightness-110 transition-all duration-300 rounded-lg">
                  Laporkan Kerusakan
                  </a>
                  <a href="https://wa.me/6281234567890" target="_blank" class="border border-sleek-silver text-sleek-silver font-label-caps text-label-caps px-8 py-4 uppercase tracking-widest hover:bg-sleek-silver/10 transition-all duration-300 rounded-lg flex items-center gap-2">
                  <i class="fa fa-whatsapp" aria-hidden="true"></i> WhatsApp Admin
                  </a>
               </div>
            </div>
         </div>
      </section>
       <!-- Contact Section -->
      <section id="contact" class="py-section-gap bg-surface-container-high relative border-t border-outline-variant/[0.07]">
         <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="mb-stack-lg reveal-up text-center">
               <span class="font-label-caps text-label-caps text-electric-blue uppercase">Kontak Kami</span>
               <h2 class="font-headline-xl text-headline-xl mt-stack-md">Temukan Lokasi Kami</h2>
               <p class="text-on-surface-variant font-body-lg mt-stack-sm max-w-lg mx-auto">
                  Kunjungi toko kami untuk konsultasi dan service langsung oleh teknisi berpengalaman.
               </p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-gutter items-start">
               <!-- Info Cards -->
               <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 reveal-up">
                  <div class="bg-surface-container-lowest border border-outline-variant/20 rounded-xl p-6 flex items-start gap-4">
                     <div class="w-12 h-12 bg-electric-blue/10 flex items-center justify-center rounded-lg shrink-0">
                        <span class="material-symbols-outlined text-electric-blue">location_on</span>
                     </div>
                     <div>
                        <h4 class="font-label-caps text-label-caps text-sleek-silver mb-1">Alamat</h4>
                        <p class="text-on-surface-variant font-body-md text-sm">Jl. Raya Sesetan No. 168, Denpasar, Bali</p>
                     </div>
                  </div>
                  <div class="bg-surface-container-lowest border border-outline-variant/20 rounded-xl p-6 flex items-start gap-4">
                     <div class="w-12 h-12 bg-electric-blue/10 flex items-center justify-center rounded-lg shrink-0">
                        <span class="material-symbols-outlined text-electric-blue"><i class="fa fa-whatsapp" aria-hidden="true"></i></span>
                     </div>
                     <div>
                        <h4 class="font-label-caps text-label-caps text-sleek-silver mb-1">WhatsApp</h4>
                        <p class="text-on-surface-variant font-body-md text-sm">+62 812-3456-7890</p>
                     </div>
                  </div>
                  <div class="bg-surface-container-lowest border border-outline-variant/20 rounded-xl p-6 flex items-start gap-4">
                     <div class="w-12 h-12 bg-electric-blue/10 flex items-center justify-center rounded-lg shrink-0">
                        <span class="material-symbols-outlined text-electric-blue">mail</span>
                     </div>
                     <div>
                        <h4 class="font-label-caps text-label-caps text-sleek-silver mb-1">Email</h4>
                        <p class="text-on-surface-variant font-body-md text-sm">parwatadigital@gmail.com</p>
                     </div>
                  </div>
                  <div class="bg-surface-container-lowest border border-outline-variant/20 rounded-xl p-6 flex items-start gap-4">
                     <div class="w-12 h-12 bg-electric-blue/10 flex items-center justify-center rounded-lg shrink-0">
                        <span class="material-symbols-outlined text-electric-blue">schedule</span>
                     </div>
                     <div>
                        <h4 class="font-label-caps text-label-caps text-sleek-silver mb-1">Jam Operasional</h4>
                        <p class="text-on-surface-variant font-body-md text-sm">Sen-Sab: 09:00 - 18:00</p>
                     </div>
                  </div>
               </div>
               <!-- Map -->
               <div class="rounded-xl overflow-hidden border border-outline-variant/20 reveal-up" style="transition-delay: 150ms;">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3947.1086099153604!2d114.7517093747729!3d-8.390977591647053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd3d7011c02e497%3A0xd46e51b622baa127!2sToko%20Parwata%20Digital!5e0!3m2!1sen!2sid!4v1780562423136!5m2!1sen!2sid"
                     class="w-full h-[400px]"
                     style="border:0; filter: grayscale(0.3) invert(0.9) hue-rotate(180deg);"
                     allowfullscreen=""
                     loading="lazy"
                     referrerpolicy="no-referrer-when-downgrade">
                  </iframe>
               </div>
            </div>
         </div>
      </section>
      <!-- Footer -->
      <footer class="w-full bg-surface-container-lowest">
         <div class="flex flex-col md:flex-row justify-between items-start px-margin-desktop py-stack-lg gap-gutter max-w-container-max mx-auto">
            <div class="max-w-sm">
               <div class="font-display-lg text-headline-lg text-on-surface mb-stack-md">Parwata Digital</div>
               <p class="text-on-surface-variant font-body-md mb-stack-lg">
                  Solusi service komputer terpercaya di Denpasar. Cepat, profesional, dan bergaransi.
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
                  <span class="font-label-caps text-label-caps text-sleek-silver uppercase opacity-50">Layanan</span>
                  <a class="text-on-surface-variant hover:text-electric-blue transition-colors font-body-md" href="#services">Service Laptop</a>
                  <a class="text-on-surface-variant hover:text-electric-blue transition-colors font-body-md" href="#services">Service PC</a>
                  <a class="text-on-surface-variant hover:text-electric-blue transition-colors font-body-md" href="#services">Home Service</a>
                  <a class="text-on-surface-variant hover:text-electric-blue transition-colors font-body-md" href="#services">Rakit PC</a>
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
                  <span class="font-label-caps text-label-caps text-sleek-silver uppercase opacity-50">Ikuti Kami</span>
                  <a class="text-on-surface-variant hover:text-electric-blue transition-colors font-body-md flex items-center gap-2" href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a>
                  <a class="text-on-surface-variant hover:text-electric-blue transition-colors font-body-md flex items-center gap-2" href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
                  <a class="text-on-surface-variant hover:text-electric-blue transition-colors font-body-md flex items-center gap-2" href="https://wa.me/6281234567890"><i class="fa fa-whatsapp" aria-hidden="true"></i> WhatsApp</a>
               </div>
            </div>
         </div>
         <div class="max-w-container-max mx-auto px-margin-desktop py-stack-md border-t border-outline-variant flex flex-col md:flex-row justify-between items-center opacity-80 hover:opacity-100 transition-opacity">
            <div class="font-body-md text-body-md text-sleek-silver">© 2024 Toko Parwata Digital. All rights reserved.</div>
            <div class="flex gap-margin-mobile mt-4 md:mt-0">
               <a class="text-on-surface-variant hover:text-electric-blue transition-colors font-body-md" href="#hero">Beranda</a>
               <a class="text-on-surface-variant hover:text-electric-blue transition-colors font-body-md" href="#services">Layanan</a>
               <a class="text-on-surface-variant hover:text-electric-blue transition-colors font-body-md" href="#contact">Kontak</a>
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
         
         // Parallax effect for hero image
         window.addEventListener('scroll', () => {
             const scrolled = window.pageYOffset;
             const heroImg = document.querySelector('#hero img');
             if (heroImg) {
                 heroImg.style.transform = `translateY(${scrolled * 0.4}px)`;
             }
         });
      </script>
   </body>
</html>