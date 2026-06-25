@extends('layouts.app')

@push('meta')
    <title>Jaipur to Mumbai Courier Service | Fast Gemstone Cargo</title>
    <meta name="description" content="Best Jaipur to Mumbai courier service. Same-day pickup for express parcels, commercial cargo, secure jewelry transport, & luggage to Mumbai & Thane.">
    <meta name="keywords" content="jaipur to mumbai courier service, courier from jaipur to mumbai, luggage shifting jaipur to mumbai, cargo service jaipur to mumbai, parcel delivery jaipur to mumbai, jewelry courier jaipur to mumbai">
    <meta property="og:title" content="Jaipur to Mumbai Courier Service | Fast Gemstone Cargo">
    <meta property="og:description" content="Best Jaipur to Mumbai courier service. Same-day pickup for express parcels, commercial cargo, secure jewelry transport, & luggage to Mumbai & Thane.">
    <meta name="twitter:title" content="Jaipur to Mumbai Courier Service | Fast Gemstone Cargo">
    <meta name="twitter:description" content="Best Jaipur to Mumbai courier service. Same-day pickup for express parcels, commercial cargo, secure jewelry transport, & luggage to Mumbai & Thane.">
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-hero-gradient text-white">
        <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-24">
            <div class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1 text-xs font-bold uppercase tracking-wider backdrop-blur animate-pulse">
                <x-icons.map-pin class="text-gold" /> Daily High-Security Shipments
            </div>
            <h1 class="mt-4 text-4xl font-extrabold leading-tight sm:text-5xl lg:text-6xl">
                Jaipur to Mumbai <span class="text-gold">Courier & Cargo</span>
            </h1>
            <p class="mt-4 text-white/85 sm:text-lg max-w-3xl">
                Shipping corporate parcels, trade goods, precious jewelry samples, or residential baggage from Jaipur to Mumbai? Rely on our insured, express door-to-door courier service.
            </p>
            <div class="mt-7 flex flex-wrap gap-3">
                <a href="https://wa.me/91{{ config('services.info.phone') }}?text=Hi%20JM%20Courier%2C%20I%20want%20to%20book%20a%20pickup%20from%20Jaipur%20to%20Mumbai."
                    class="inline-flex items-center gap-2 rounded-full bg-whatsapp px-6 py-3 font-bold text-white shadow-elevated hover:brightness-105 hover:-translate-y-0.5 transition">
                    <x-icons.whatsapp class="w-5 h-5" /> Book Mumbai Pickup
                </a>
                <a href="tel:+91{{ config('services.info.phone') }}"
                    class="inline-flex items-center gap-2 rounded-full bg-danger px-6 py-3 font-bold text-white shadow-soft hover:brightness-110 hover:-translate-y-0.5 transition">
                    <x-icons.phone class="w-5 h-5" /> Call Dispatch Desk
                </a>
            </div>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <div class="space-y-6">
                <div class="mb-3 inline-flex rounded-full bg-accent px-3 py-1 text-xs font-bold uppercase tracking-wider text-brand">
                    Rajasthan to Maharashtra Express
                </div>
                <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">
                    Seamless Insured Shipping from Jaipur to Mumbai
                </h2>
                <div class="space-y-4 text-foreground/85 text-sm sm:text-base leading-relaxed">
                    <p>
                        The financial capital of India, Mumbai, has an exceptionally strong commercial connection with Jaipur. As the global hubs of the gem and jewelry industries, traders regularly transport precious stones, jewelry, and high-value materials between Zaveri Bazar or BKC in Mumbai and Johri Bazar in Jaipur. 
                    </p>
                    <p>
                        Additionally, thousands of corporate professionals and students relocate between these metropolitan zones. To support this dynamic trade and residential migration, <strong>JM Courier</strong> operates high-security, fast-transit <strong>Jaipur to Mumbai courier services</strong>.
                    </p>
                    <p>
                        We provide free doorstep pickup services throughout Jaipur (Mansarovar, Vaishali Nagar, Jhotwara, Jagatpura, Malviya Nagar, Bani Park, Sanganer, Sitapura) and guarantee swift logistics to all parts of Mumbai, Thane, Navi Mumbai, and surrounding industrial zones including Andheri, Bandra, Nariman Point, Dadar, Borivali, Vashi, and Belapur.
                    </p>
                </div>
                <div class="flex flex-wrap gap-3 pt-2">
                    <div class="flex items-center gap-2 rounded-xl border border-border bg-card p-3 font-semibold text-navy text-xs">
                        <x-icons.circle-check class="text-brand w-4 h-4 shrink-0" /> Free Doorstep Collection
                    </div>
                    <div class="flex items-center gap-2 rounded-xl border border-border bg-card p-3 font-semibold text-navy text-xs">
                        <x-icons.circle-check class="text-brand w-4 h-4 shrink-0" /> Insured Secure Air Channels
                    </div>
                    <div class="flex items-center gap-2 rounded-xl border border-border bg-card p-3 font-semibold text-navy text-xs">
                        <x-icons.circle-check class="text-brand w-4 h-4 shrink-0" /> Overnight Next-Day Delivery
                    </div>
                </div>
            </div>
            <div class="relative rounded-3xl overflow-hidden border border-border bg-card p-8 shadow-soft">
                <h3 class="text-xl font-extrabold text-navy mb-4">Mumbai Route Shipping Specialities</h3>
                <ul class="space-y-4">
                    <li class="flex gap-3">
                        <div class="h-6 w-6 rounded-full bg-accent text-brand flex items-center justify-center shrink-0 font-bold text-sm">1</div>
                        <div>
                            <h4 class="font-bold text-navy text-sm sm:text-base">Insured Gem & Jewelry Courier</h4>
                            <p class="text-xs sm:text-sm text-muted-foreground mt-0.5">Specialized secure logistics for gemstone ornaments, precious diamonds, and heritage jewelry samples with full transit insurance.</p>
                        </div>
                    </li>
                    <li class="flex gap-3">
                        <div class="h-6 w-6 rounded-full bg-accent text-brand flex items-center justify-center shrink-0 font-bold text-sm">2</div>
                        <div>
                            <h4 class="font-bold text-navy text-sm sm:text-base">Corporate Executive Shifting</h4>
                            <p class="text-xs sm:text-sm text-muted-foreground mt-0.5">Moving books, clothing wardrobes, laptops, desktop screens, and household goods safely to high-rise complexes in Mumbai.</p>
                        </div>
                    </li>
                    <li class="flex gap-3">
                        <div class="h-6 w-6 rounded-full bg-accent text-brand flex items-center justify-center shrink-0 font-bold text-sm">3</div>
                        <div>
                            <h4 class="font-bold text-navy text-sm sm:text-base">Express Business Document Delivery</h4>
                            <p class="text-xs sm:text-sm text-muted-foreground mt-0.5">Urgent legal agreements, banking papers, and trade contracts delivered to Nariman Point or BKC within 24 hours.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Services Offered Section -->
    <section class="bg-secondary/40 py-16 sm:py-20">
        <div class="mx-auto w-full max-w-7xl px-4 sm:px-6">
            <div class="mx-auto text-center max-w-3xl mb-12">
                <div class="mb-3 inline-flex rounded-full bg-accent px-3 py-1 text-xs font-bold uppercase tracking-wider text-brand">
                    Services Offered
                </div>
                <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">
                    Tailored Shipping Solutions
                </h2>
                <p class="mt-3 text-muted-foreground text-sm sm:text-base max-w-2xl mx-auto">
                    We offer a wide variety of transport services tailored to fit the weight, sensitivity, and budget of your package.
                </p>
            </div>

            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                <!-- Card 1: Express Courier -->
                <div class="rounded-3xl border border-border bg-card p-6 shadow-soft hover:-translate-y-1 hover:shadow-elevated transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-accent text-brand shrink-0">
                            <x-icons.package class="w-6 h-6" />
                        </div>
                        <h3 class="mt-4 font-bold text-navy text-lg">Document Express</h3>
                        <p class="mt-2 text-sm text-muted-foreground leading-relaxed">
                            Confidential legal folders, client reports, certificates, and invoices delivered securely via priority air routing.
                        </p>
                    </div>
                    <div class="mt-4 pt-4 border-t border-border/60">
                        <a href="{{ route('services.courier') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-brand hover:underline">
                            Explore Service <x-icons.arrow-right class="w-3.5 h-3.5" />
                        </a>
                    </div>
                </div>

                <!-- Card 2: Luggage Transport -->
                <div class="rounded-3xl border border-border bg-card p-6 shadow-soft hover:-translate-y-1 hover:shadow-elevated transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-accent text-brand shrink-0">
                            <x-icons.briefcase class="w-6 h-6" />
                        </div>
                        <h3 class="mt-4 font-bold text-navy text-lg">Luggage Moving</h3>
                        <p class="mt-2 text-sm text-muted-foreground leading-relaxed">
                            Move bags, boxes, and heavy suitcases without paying massive airline baggage fees. Includes door pickup and room drop.
                        </p>
                    </div>
                    <div class="mt-4 pt-4 border-t border-border/60">
                        <a href="{{ route('services.luggage') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-brand hover:underline">
                            Explore Service <x-icons.arrow-right class="w-3.5 h-3.5" />
                        </a>
                    </div>
                </div>

                <!-- Card 3: Bulk Parcel -->
                <div class="rounded-3xl border border-border bg-card p-6 shadow-soft hover:-translate-y-1 hover:shadow-elevated transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-accent text-brand shrink-0">
                            <x-icons.boxes class="w-6 h-6" />
                        </div>
                        <h3 class="mt-4 font-bold text-navy text-lg">Parcel & Gift Booking</h3>
                        <p class="mt-2 text-sm text-muted-foreground leading-relaxed">
                            Deliver gift boxes, electronics, appliances, and retail items. We offer on-site bubble wrapping and secure corrugated packaging.
                        </p>
                    </div>
                    <div class="mt-4 pt-4 border-t border-border/60">
                        <a href="{{ route('services.parcel') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-brand hover:underline">
                            Explore Service <x-icons.arrow-right class="w-3.5 h-3.5" />
                        </a>
                    </div>
                </div>

                <!-- Card 4: Commercial Cargo -->
                <div class="rounded-3xl border border-border bg-card p-6 shadow-soft hover:-translate-y-1 hover:shadow-elevated transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-accent text-brand shrink-0">
                            <x-icons.truck class="w-6 h-6" />
                        </div>
                        <h3 class="mt-4 font-bold text-navy text-lg">Heavy B2B Cargo</h3>
                        <p class="mt-2 text-sm text-muted-foreground leading-relaxed">
                            Cost-effective industrial shipping for manufacturers and wholesalers. Includes GST invoicing, insurance support, and LTL transport.
                        </p>
                    </div>
                    <div class="mt-4 pt-4 border-t border-border/60">
                        <a href="{{ route('services.cargo') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-brand hover:underline">
                            Explore Service <x-icons.arrow-right class="w-3.5 h-3.5" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Transit Time & Pricing factors Section -->
    <section class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-20">
        <div class="grid gap-12 lg:grid-cols-2 items-center">
            <div>
                <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">Jaipur to Mumbai Transit & Timelines</h2>
                <p class="mt-3 text-muted-foreground text-sm sm:text-base leading-relaxed">
                    Choose the transport velocity that meets your specific business deadlines or home shifting schedules.
                </p>

                <div class="mt-6 overflow-hidden rounded-2xl border border-border bg-card">
                    <table class="w-full text-left text-sm">
                        <thead class="bg-secondary/40 text-navy font-bold">
                            <tr>
                                <th class="p-4">Shipping Mode</th>
                                <th class="p-4">Delivery Timeline</th>
                                <th class="p-4">Ideal Cargo Type</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-border">
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">Priority Air Express</td>
                                <td class="p-4 text-muted-foreground">Next-Day (Within 24 Hours)</td>
                                <td class="p-4 text-muted-foreground">Precious Jewelry, Urgent Files, Small Tech Samples</td>
                            </tr>
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">Standard Express</td>
                                <td class="p-4 text-muted-foreground">1 - 2 Days</td>
                                <td class="p-4 text-muted-foreground">Apparel, Shifting Luggage, Carton boxes</td>
                            </tr>
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">Surface Cargo</td>
                                <td class="p-4 text-muted-foreground">2 - 3 Days</td>
                                <td class="p-4 text-muted-foreground">Heavy Machinery, Commercial Bulk Shipments</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Price factors / Callout -->
            <div class="rounded-3xl bg-brand-gradient p-8 text-white shadow-elevated relative overflow-hidden">
                <div class="absolute -right-6 -top-6 h-24 w-24 rounded-full bg-gold/30 blur-xl"></div>
                <h3 class="text-2xl font-extrabold">Fair & Insured Shipping Pricing</h3>
                <p class="mt-3 text-white/85 text-sm sm:text-base leading-relaxed">
                    Charges are calculated based on weight, volume (dimensional density), packaging, and choice of speed. 
                </p>
                <p class="mt-2 text-white/85 text-sm sm:text-base leading-relaxed">
                    We offer dedicated promotional tariffs for students and corporate employees moving their households to Mumbai. Contact us to avail special route discounts.
                </p>
                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="https://wa.me/91{{ config('services.info.phone') }}?text=Hi%20JM%20Courier%2C%20I%20want%20to%20know%20shipping%20rates%20from%20Jaipur%20to%20Mumbai."
                        class="inline-flex justify-center items-center gap-2 rounded-full bg-whatsapp px-4 py-2.5 font-bold text-white shadow-elevated text-sm hover:brightness-105 transition">
                        <x-icons.whatsapp class="w-4 h-4" /> Get Live Quote
                    </a>
                    <a href="tel:+91{{ config('services.info.phone') }}"
                        class="inline-flex items-center justify-center gap-2 rounded-full bg-danger px-4 py-2.5 font-bold text-white shadow-soft text-sm hover:brightness-110 transition">
                        <x-icons.phone class="w-4 h-4" /> Call Hotline
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Section -->
    <section class="bg-secondary/40">
        <div class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-20">
            <div class="mx-auto text-center max-w-2xl">
                <div class="mb-3 inline-flex rounded-full bg-accent px-3 py-1 text-xs font-bold uppercase tracking-wider text-brand">
                    Benefits
                </div>
                <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">
                    Why Book JM Courier?
                </h2>
                <p class="mt-2 text-muted-foreground text-sm sm:text-base">
                    Engineered to deliver convenience, safety, and rapid transit from Jaipur to Mumbai.
                </p>
            </div>

            <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.time class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">Flight Connection</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        Utilizing regular direct flights from Jaipur Airport to Mumbai (BOM) for rapid delivery.
                    </p>
                </div>
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.shield class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">Premium Packaging</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        Thick bubble wrap layers, protective shrink wraps, and corrugated box reinforcement at pickup.
                    </p>
                </div>
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.price class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">Fair Tariffs</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        Extremely budget-friendly rates for heavy luggage shipping, students, and B2B wholesalers.
                    </p>
                </div>
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.support class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">Direct Helpline</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        No robotic AI chat delays. Interact directly with our booking managers on phone and WhatsApp.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-20 bg-secondary/30 rounded-3xl mb-12">
        <div class="mx-auto text-center max-w-2xl">
            <div class="mb-3 inline-flex rounded-full bg-accent px-3 py-1 text-xs font-bold uppercase tracking-wider text-brand">
                FAQ
            </div>
            <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">Jaipur to Mumbai Shipping FAQs</h2>
        </div>

        <div class="mx-auto mt-8 max-w-3xl space-y-2 overflow-hidden px-4">
            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>What is the transit time from Jaipur to Mumbai?</span>
                    <x-icons.plus class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        Air express packages are delivered within 24 hours. Standard shipping options require 1 to 2 days, while surface bulk cargo is completed in 2 to 3 days.
                    </p>
                </div>
            </div>

            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>Do you offer secure packaging for high-value gemstone jewelry?</span>
                    <x-icons.plus class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        Absolutely. We provide tamper-evident security bags, bubble wrap layering, and locked transit boxes for precious stones and jewelry, backed by transit insurance coverage.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer CTA -->
    <x-sections.footer-cta />
@endsection

@push('footer-scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const faqToggles = document.querySelectorAll(".faq-toggle");
            faqToggles.forEach(toggle => {
                toggle.addEventListener("click", () => {
                    const item = toggle.closest(".faq-item");
                    const content = item.querySelector(".faq-content");
                    const isOpen = item.classList.contains("is-open");

                    document.querySelectorAll(".faq-item").forEach(otherItem => {
                        if (otherItem !== item && otherItem.classList.contains("is-open")) {
                            otherItem.classList.remove("is-open");
                            otherItem.querySelector(".faq-content").style.maxHeight = "0px";
                        }
                    });

                    if (isOpen) {
                        item.classList.remove("is-open");
                        content.style.maxHeight = "0px";
                    } else {
                        item.classList.add("is-open");
                        content.style.maxHeight = content.scrollHeight + "px";
                    }
                });
            });
        });
    </script>
@endpush
