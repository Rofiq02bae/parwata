# LANDINGPAGE.AGENTS.md — Landing Page Instructions

## Root Route Behavior
- **Guests (`/`)** → Landing page (`resources/views/landing.blade.php`) — standalone, no layout
- **Authenticated (`/`)** → Redirect by role: admin/technician → dashboard, client → client tickets

## Landing Page Structure (Figma Design)
The landing page follows the Figma design exactly with these sections:

1. **Navbar** — Logo "TS Toko Service", nav links (Home, Services, Why Us, Testimoni, Contact), CTA "Laporkan Kerusakan" → `/register`
2. **Hero** — Headline "Service Komputer Cepat, Aman, dan Profesional", paragraph, 3 badges (Fast Response, Home Service, Teknisi Berpengalaman), 2 buttons (Laporkan Kerusakan → `/register`, Hubungi Kami → `#contact`)
3. **Services** — 8 service cards in 2-column grid (Service Laptop, Service PC, Instalasi Software, Rakit PC, Cleaning & Maintenance, Home Service, Upgrade Hardware, Recovery Data)
4. **Workflow** — 5 step process with progress line (Client Membuat Laporan → Admin Memverifikasi → Teknisi Diassign → Proses Pengerjaan → Service Selesai)
5. **WhyUs** — 6 feature cards (Teknisi Berpengalaman, Fast Response, Transparan, Home Service, Sparepart Berkualitas, Support After Service)
6. **Stats** — 4 counters (500+ Device Diperbaiki, 300+ Customer Puas, 24 Jam Response Time, 5+ Tahun Pengalaman)
7. **Testimonials** — 3 testimonial cards with 5-star ratings
8. **CTA** — "Komputer Bermasalah? Laporkan Sekarang." with 2 buttons (Laporkan Kerusakan → `/register`, WhatsApp Admin)
9. **Contact** — 4 info cards (Alamat, WhatsApp, Email, Jam Operasional) + Map placeholder
10. **Footer** — Logo, description, social links, Quick Links, Layanan, copyright

## Color Palette
- Primary: `#ea580c` (orange) — buttons, icons, accents
- Light orange: `#fdba74` — decorative elements
- Background: `#fff7ed` (warm cream) — page background, card backgrounds
- Text: `#1f2937` (dark gray) — all text
- White: `#ffffff` — cards, buttons
- Footer bg: `#1f2937`

## Typography
- Font: Inter (Google Fonts)
- Headings: bold, text-3xl to text-5xl
- Body: text-sm to text-lg

## Registration Flow
- **Route:** `GET /register` → `AuthController@showRegisterForm`
- **Route:** `POST /register` → `AuthController@register`
- **Request:** `app/Http/Requests/RegisterClientRequest.php`
- **Result:** Creates user with `role = 'client'`, auto-login, redirect to `client.tickets.index`

## Landing Page Conventions
- Standalone Blade file (does NOT extend `layouts.app`) — full-page marketing layout
- Tailwind CSS via `@vite` for styling
- Alpine.js for mobile navbar toggle (`x-data`, `x-show`, `@click.away`)
- Smooth scroll via `scroll-smooth` class on `<html>`
- All CTA "Laporkan Kerusakan" buttons link to `{{ route('register') }}`
- Nav links use anchor links (`#hero`, `#services`, etc.)
