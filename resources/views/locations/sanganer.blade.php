@extends('layouts.app')

@push('meta')
    <title>Best Courier & Cargo Services in Sanganer Jaipur | JM Courier</title>
    <meta name="description"
        content="Reliable & fast domestic courier, parcel delivery, luggage transport, and cargo services in Sanganer, Jaipur. Same-day free doorstep pickup & express shipping to all India.">
    <meta name="keywords"
        content="courier service sanganer jaipur, cargo services sanganer, luggage transport sanganer, parcel delivery sanganer, express delivery jaipur sanganer, sanganer courier collection, document courier sanganer">
    <meta property="og:title" content="Best Courier & Cargo Services in Sanganer Jaipur | JM Courier">
    <meta property="og:description"
        content="Reliable & fast domestic courier, parcel delivery, luggage transport, and cargo services in Sanganer, Jaipur. Same-day free doorstep pickup & express shipping to all India.">
    <meta name="twitter:title" content="Best Courier & Cargo Services in Sanganer Jaipur | JM Courier">
    <meta name="twitter:description"
        content="Reliable & fast domestic courier, parcel delivery, luggage transport, and cargo services in Sanganer, Jaipur. Same-day free doorstep pickup & express shipping to all India.">
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-hero-gradient text-white">
        <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-24">
            <div
                class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1 text-xs font-bold uppercase tracking-wider backdrop-blur animate-pulse">
                <x-icons.map-pin class="text-gold" /> Serving Sanganer, Jaipur
            </div>
            <h1 class="mt-4 text-4xl font-extrabold leading-tight sm:text-5xl lg:text-6xl">
                Courier & Cargo Services in <span class="text-gold">Sanganer, Jaipur</span>
            </h1>
            <p class="mt-4 text-white/85 sm:text-lg max-w-3xl">
                Send textile shipments, commercial parcels, passenger luggage, or documents from Sanganer to any destination across
                India. Enjoy hassle-free door-to-door delivery, free same-day pickup, and tracking at highly competitive rates.
            </p>
            <div class="mt-7 flex flex-wrap gap-3">
                <a href="https://wa.me/91{{ config('services.info.phone') }}?text=Hi%20JM%20Courier%2C%20I%20want%20to%20book%20a%20pickup%20from%20Sanganer%20Jaipur."
                    class="inline-flex items-center gap-2 rounded-full bg-whatsapp px-6 py-3 font-bold text-white shadow-elevated hover:brightness-105 hover:-translate-y-0.5 transition">
                    <x-icons.whatsapp class="w-5 h-5" /> Book Express Pickup
                </a>
                <a href="tel:+91{{ config('services.info.phone') }}"
                    class="inline-flex items-center gap-2 rounded-full bg-danger px-6 py-3 font-bold text-white shadow-soft hover:brightness-110 hover:-translate-y-0.5 transition">
                    <x-icons.phone class="w-5 h-5" /> Call Now
                </a>
            </div>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="space-y-6">
                <div
                    class="mb-3 inline-flex rounded-full bg-accent px-3 py-1 text-xs font-bold uppercase tracking-wider text-brand">
                    Local Logistics Expert
                </div>
                <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">
                    Reliable Door-to-Door Courier Collection in Sanganer
                </h2>
                <div class="space-y-4 text-foreground/85 text-sm sm:text-base leading-relaxed">
                    <p>
                        Sanganer is globally renowned for its traditional block-printing, paper industry, and close proximity to Jaipur International Airport, presenting dynamic cargo and shipping demands.
                        Whether you are a textile manufacturer in Sanganer RIICO Area sending bulk apparel shipments, a shopkeeper in Sanganer Market shipping retail stocks, or a passenger near Airport road booking express luggage transport, <b>JM Courier</b> is here to help.
                    </p>
                    <p>
                        We offer a comprehensive suite of logistics services tailored for Sanganer. Our expert team
                        ensures that your packages are picked up right from your doorstep and dispatched immediately. We
                        handle everything from single urgent document envelopes to massive commercial cargo with
                        equal care and efficiency.
                    </p>
                    <p>
                        With regular routes spanning Sanganer Market, RIICO Industrial Area Sanganer, Tonk Road Sanganer, Sanganer Railway Station, Cheelgadi Road, Sector 3 & 5, and Pratap Nagar borders, our field executives can reach your location within minutes of booking.
                    </p>
                </div>
                <div class="flex flex-wrap gap-3 pt-2">
                    <div
                        class="flex items-center gap-2 rounded-xl border border-border bg-card p-3 font-semibold text-navy text-xs">
                        <x-icons.circle-check class="text-brand w-4 h-4 shrink-0" /> Free Doorstep Pickup
                    </div>
                    <div
                        class="flex items-center gap-2 rounded-xl border border-border bg-card p-3 font-semibold text-navy text-xs">
                        <x-icons.circle-check class="text-brand w-4 h-4 shrink-0" /> Bulk Industry Discount
                    </div>
                    <div
                        class="flex items-center gap-2 rounded-xl border border-border bg-card p-3 font-semibold text-navy text-xs">
                        <x-icons.circle-check class="text-brand w-4 h-4 shrink-0" /> Real-time Tracking Updates
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center">
                <img src="{{ asset('images/cities/sanganer.png') }}" alt="JM Courier Sanganer" class="rounded-3xl shadow-soft border border-border max-w-full h-auto">
            </div>
        </div>
    </section>

    <!-- Local Landmark Gallery -->
    <section class="mx-auto w-full max-w-7xl px-4 pb-16 sm:px-6 sm:pb-20">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div class="overflow-hidden rounded-3xl border border-border bg-card shadow-soft aspect-[3/2]">
                <img src="{{ asset('images/cities/sanganer_1.png') }}" 
                     alt="Sanganer Jaipur Local Landmark" 
                     class="w-full h-full object-cover hover:scale-105 transition duration-500"
                     loading="lazy">
            </div>
            <div class="overflow-hidden rounded-3xl border border-border bg-card shadow-soft aspect-[3/2]">
                <img src="{{ asset('images/cities/sanganer_2.png') }}" 
                     alt="Sanganer Jaipur Local Vibe" 
                     class="w-full h-full object-cover hover:scale-105 transition duration-500"
                     loading="lazy">
            </div>
        </div>
    </section>

    <!-- Services Showcase Section -->
    <section class="mx-auto w-full max-w-7xl px-4 pb-16 sm:px-6 sm:pb-20">
        <div class="mx-auto text-center max-w-3xl mb-12">
            <div
                class="mb-3 inline-flex rounded-full bg-accent px-3 py-1 text-xs font-bold uppercase tracking-wider text-brand">
                Our Specialized Services
            </div>
            <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">
                Premium Logistics & Shifting Services in Sanganer
            </h2>
            <p class="mt-3 text-muted-foreground text-sm sm:text-base max-w-2xl mx-auto">
                We provide specialized, secure, and fast transport solutions. Review our core services below, each optimized
                for specific home and business shipping requirements.
            </p>
        </div>

        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-2">
            <!-- Service 1: Courier -->
            <div
                class="rounded-3xl border border-border bg-card p-8 shadow-soft hover:-translate-y-1 hover:shadow-elevated transition duration-300 flex flex-col justify-between">
                <div>
                    <div class="flex items-center gap-3">
                        <div
                            class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-accent text-brand shrink-0">
                            <x-icons.package class="w-6 h-6" />
                        </div>
                        <h3 class="font-extrabold text-navy text-xl">Domestic Courier Services</h3>
                    </div>
                    <p class="mt-4 text-sm text-muted-foreground leading-relaxed">
                        Are you looking for reliable <b>door-to-door express courier collection in Sanganer</b>? We
                        specialize in quick dispatch for time-sensitive legal agreements, academic transcripts, corporate
                        contracts, and retail packages. Our priority air routes guarantee delivery to central business areas
                        within 24 to 48 hours.
                    </p>
                    <ul class="mt-4 space-y-2 text-xs sm:text-sm text-muted-foreground">
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-brand"></span>
                            Same-day urgent document courier services in Sanganer Jaipur.
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-brand"></span>
                            Tamper-proof envelope sealing and waterproof security bags.
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-brand"></span>
                            Priority overnight delivery channels to Delhi NCR, Mumbai, and Bangalore.
                        </li>
                    </ul>
                </div>
                <div class="mt-6 pt-6 border-t border-border/60">
                    <a href="{{ route('services.courier') }}"
                        class="inline-flex items-center gap-1.5 text-sm font-bold text-brand hover:underline">
                        Explore Courier Services <x-icons.arrow-right class="w-4 h-4" />
                    </a>
                </div>
            </div>

            <!-- Service 2: Cargo -->
            <div
                class="rounded-3xl border border-border bg-card p-8 shadow-soft hover:-translate-y-1 hover:shadow-elevated transition duration-300 flex flex-col justify-between">
                <div>
                    <div class="flex items-center gap-3">
                        <div
                            class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-accent text-brand shrink-0">
                            <x-icons.truck class="w-6 h-6" />
                        </div>
                        <h3 class="font-extrabold text-navy text-xl">Commercial Cargo & Textile Transport</h3>
                    </div>
                    <p class="mt-4 text-sm text-muted-foreground leading-relaxed">
                        Optimize your business distribution with high-quality <b>textile bale & block prints transport in
                            Sanganer Jaipur</b>. We support manufacturers, exporters, and wholesalers with
                        Part-Truck-Load (LTL) and Full-Truck-Load (FTL) commercial transport services, managing secure
                        transit and document clearance.
                    </p>
                    <ul class="mt-4 space-y-2 text-xs sm:text-sm text-muted-foreground">
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-brand"></span>
                            Bulk commercial cargo and textile parcel booking in Sanganer.
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-brand"></span>
                            Secure container trucks and cargo loading loaders.
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-brand"></span>
                            GST billing, e-way bill compliance assistance, and transit insurance.
                        </li>
                    </ul>
                </div>
                <div class="mt-6 pt-6 border-t border-border/60">
                    <a href="{{ route('services.cargo') }}"
                        class="inline-flex items-center gap-1.5 text-sm font-bold text-brand hover:underline">
                        Explore Cargo Services <x-icons.arrow-right class="w-4 h-4" />
                    </a>
                </div>
            </div>

            <!-- Service 3: Luggage -->
            <div
                class="rounded-3xl border border-border bg-card p-8 shadow-soft hover:-translate-y-1 hover:shadow-elevated transition duration-300 flex flex-col justify-between">
                <div>
                    <div class="flex items-center gap-3">
                        <div
                            class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-accent text-brand shrink-0">
                            <x-icons.briefcase class="w-6 h-6" />
                        </div>
                        <h3 class="font-extrabold text-navy text-xl">Airport Passenger & House Luggage Moving</h3>
                    </div>
                    <p class="mt-4 text-sm text-muted-foreground leading-relaxed">
                        Relocating or carrying excess baggage from flights? Use our dedicated <b>luggage transport in
                            Sanganer</b>. We help passengers and residents send luggage, suitcases, heavy boxes, and
                        two-wheelers to all states in India. We supply sturdy cartons and tape directly to your location.
                    </p>
                    <ul class="mt-4 space-y-2 text-xs sm:text-sm text-muted-foreground">
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-brand"></span>
                            Cheap excess baggage courier in Sanganer for travelers.
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-brand"></span>
                            Bicycle, PC, and heavy storage trunk shipping.
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-brand"></span>
                            Discounted prices with free packaging support at Sanganer.
                        </li>
                    </ul>
                </div>
                <div class="mt-6 pt-6 border-t border-border/60">
                    <a href="{{ route('services.luggage') }}"
                        class="inline-flex items-center gap-1.5 text-sm font-bold text-brand hover:underline">
                        Explore Luggage Transport <x-icons.arrow-right class="w-4 h-4" />
                    </a>
                </div>
            </div>

            <!-- Service 4: Parcel -->
            <div
                class="rounded-3xl border border-border bg-card p-8 shadow-soft hover:-translate-y-1 hover:shadow-elevated transition duration-300 flex flex-col justify-between">
                <div>
                    <div class="flex items-center gap-3">
                        <div
                            class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-accent text-brand shrink-0">
                            <x-icons.boxes class="w-6 h-6" />
                        </div>
                        <h3 class="font-extrabold text-navy text-xl">Parcel Delivery & Packing</h3>
                    </div>
                    <p class="mt-4 text-sm text-muted-foreground leading-relaxed">
                        Send household boxes, textile samples, gift parcels, and commercial sample cartons with our <b>bulk
                            packing and parcel delivery in Jaipur Sanganer</b>. We carry out high-quality bubble wrapping
                        on-site, label every box with a unique tracking code, and provide status updates on WhatsApp.
                    </p>
                    <ul class="mt-4 space-y-2 text-xs sm:text-sm text-muted-foreground">
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-brand"></span>
                            Gift and textile box courier services in Sanganer for merchants and residents.
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-brand"></span>
                            Bubble wrap packaging and multi-wall carton packing on-site.
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-brand"></span>
                            Real-time barcode scanning and digital proof of delivery.
                        </li>
                    </ul>
                </div>
                <div class="mt-6 pt-6 border-t border-border/60">
                    <a href="{{ route('services.parcel') }}"
                        class="inline-flex items-center gap-1.5 text-sm font-bold text-brand hover:underline">
                        Explore Parcel Delivery <x-icons.arrow-right class="w-4 h-4" />
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- coverage location grid -->
    <section class="bg-secondary/60 py-16 sm:py-20">
        <div class="mx-auto w-full max-w-7xl px-4 sm:px-6">
            <div class="mx-auto text-center max-w-2xl">
                <div
                    class="mb-3 inline-flex rounded-full bg-accent px-3 py-1 text-xs font-bold uppercase tracking-wider text-brand">
                    Coverage Areas
                </div>
                <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">
                    Same-Day Pickup Across Sanganer
                </h2>
                <p class="mt-2 text-muted-foreground text-sm">
                    We offer rapid pickup services within 60 minutes in the following localities inside Sanganer:
                </p>
            </div>

            <div class="mt-10 grid gap-4 grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @php
                    $areas = [
                        'Sanganer Market',
                        'Tonk Road Sanganer',
                        'Sanganer Railway Station',
                        'Cheelgadi Road',
                        'RIICO Industrial Area Sanganer',
                        'Pratap Nagar Border',
                        'Sanganer Sector 3',
                        'Sanganer Sector 5',
                        'Sharda Colony',
                        'Devi Nagar',
                        'Jaipur Airport Road',
                        'Sanga Setu Area',
                    ];
                @endphp
                @foreach ($areas as $area)
                    <div
                        class="flex items-center gap-2.5 rounded-xl border border-border bg-card p-4 hover:shadow-soft transition group">
                        <span
                            class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-accent text-brand transition-colors group-hover:bg-brand group-hover:text-white">
                            <x-icons.map-pin class="w-3.5 h-3.5" />
                        </span>
                        <span class="font-semibold text-navy text-sm">{{ $area }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Transit Route Table -->
    <section class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-20">
        <div class="grid gap-12 lg:grid-cols-2 items-center">
            <div>
                <h3 class="text-2xl font-extrabold text-navy sm:text-3xl">Popular Routes from Sanganer</h3>
                <p class="mt-2 text-muted-foreground text-sm">
                    We connect Sanganer directly to major textile, wholesale, and commercial markets with standard and express
                    options.
                </p>

                <div class="mt-6 overflow-hidden rounded-2xl border border-border bg-card">
                    <table class="w-full text-left text-sm">
                        <thead class="bg-secondary/40 text-navy font-bold">
                            <tr>
                                <th class="p-4">Destination</th>
                                <th class="p-4">Air Express</th>
                                <th class="p-4">Surface Cargo</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-border">
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">Delhi NCR</td>
                                <td class="p-4 text-muted-foreground">Next-Day (24h)</td>
                                <td class="p-4 text-muted-foreground">1-2 Days</td>
                            </tr>
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">Mumbai & Pune</td>
                                <td class="p-4 text-muted-foreground">1-2 Days</td>
                                <td class="p-4 text-muted-foreground">3-4 Days</td>
                            </tr>
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">Bangalore & Chennai</td>
                                <td class="p-4 text-muted-foreground">1-2 Days</td>
                                <td class="p-4 text-muted-foreground">4-5 Days</td>
                            </tr>
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">Hyderabad</td>
                                <td class="p-4 text-muted-foreground">2 Days</td>
                                <td class="p-4 text-muted-foreground">4-5 Days</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Packing Guide / Highlight -->
            <div class="rounded-3xl bg-brand-gradient p-8 text-white shadow-elevated relative overflow-hidden">
                <div class="absolute -right-6 -top-6 h-24 w-24 rounded-full bg-gold/30 blur-xl"></div>
                <x-icons.support class="w-16 h-16 text-gold" />
                <h3 class="mt-4 text-2xl font-extrabold">Bulk Textile Shipping Specials</h3>
                <p class="mt-2 text-white/85 text-sm sm:text-base leading-relaxed">
                    Sanganer printers and textile companies get heavy discounts on parcel loading and bulk cargo dispatches.
                    We provide transit documentation assistance, e-way bill compliance, and custom secure strapping.
                </p>
                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="https://wa.me/91{{ config('services.info.phone') }}?text=Hi%20JM%20Courier%2C%20I%20am%20a%20merchant%20in%20Sanganer%20Jaipur%20and%20want%20to%20query%20bulk%20textile%20shipping%20rates."
                        class="inline-flex justify-center items-center gap-2 rounded-full bg-whatsapp px-4 py-2.5 font-bold text-white shadow-elevated text-sm hover:brightness-105 transition">
                        <x-icons.whatsapp class="w-4 h-4" /> Merchant Rates
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
    <section class="bg-secondary/60">
        <div class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-20">
            <div class="mx-auto text-center max-w-2xl">
                <div
                    class="mb-3 inline-flex rounded-full bg-accent px-3 py-1 text-xs font-bold uppercase tracking-wider text-brand">
                    Benefits
                </div>
                <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">
                    Why Choose JM Courier in Sanganer
                </h2>
            </div>

            <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.time class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">Same-Day Pickup</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        Book your service before 5:00 PM and we will pick it up the same day from your Sanganer address.
                    </p>
                </div>
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.shield class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">Tamper-Proof Packing</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        We use thick secure flyers, corrugated cartons, and multiple layers of bubbles to protect shipments.
                    </p>
                </div>
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.price class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">Transparent Pricing</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        Affordable rates based on exact weight and delivery timeline with zero hidden fuel charges.
                    </p>
                </div>
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.support class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">WhatsApp Support</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        No robotic chats. Talk directly to our Jaipur dispatch desk for rapid updates and support.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-20 bg-secondary/30 rounded-3xl mb-12">
        <div class="mx-auto text-center max-w-2xl">
            <div
                class="mb-3 inline-flex rounded-full bg-accent px-3 py-1 text-xs font-bold uppercase tracking-wider text-brand">
                FAQ
            </div>
            <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">Sanganer Service FAQs</h2>
        </div>

        <div class="mx-auto mt-8 max-w-3xl space-y-2 overflow-hidden px-4">
            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button
                    class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>Do you offer home pickup in Sanganer, and is it free?</span>
                    <x-icons.plus
                        class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div
                    class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        Yes! We provide 100% free doorstep collection anywhere in Sanganer (including Tonk Road, Sanganer Market, RIICO Area, Airport Road, etc.) for all bookings. There are no additional charges for pickup.
                    </p>
                </div>
            </div>

            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button
                    class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>Do you assist with e-way bill generation for commercial cargo?</span>
                    <x-icons.plus
                        class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div
                    class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        Yes, our corporate support team helps Sanganer manufacturers and exporters prepare tax invoices, e-way bills, and transit insurance for hassle-free freight transport.
                    </p>
                </div>
            </div>

            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button
                    class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>What are the office hours for parcel booking?</span>
                    <x-icons.plus
                        class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div
                    class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        We accept booking requests 24/7 on WhatsApp and phone. Our physical collection services run from
                        9:00 AM to 8:00 PM every day of the week.
                    </p>
                </div>
            </div>

            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button
                    class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>What items are restricted from shipping?</span>
                    <x-icons.plus
                        class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div
                    class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        For safety reasons, we do not ship liquid items, gas canisters, corrosive chemicals, inflammable
                        substances, cash, jewelry, and illegal goods. All standard household goods, apparel, printed textiles, and
                        electronics are fully allowed.
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
