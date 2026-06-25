@extends('layouts.app')

@push('meta')
    <title>Jaipur to Bangalore Courier Service | Luggage Shifting</title>
    <meta name="description" content="Express Jaipur to Bangalore courier & luggage shifting services. Direct air cargo, household item transport, & door-to-door delivery with live tracking.">
    <meta name="keywords" content="jaipur to bangalore courier service, courier from jaipur to bangalore, luggage shifting jaipur to bangalore, cargo service jaipur to bangalore, parcel delivery jaipur to bangalore, courier charges jaipur to bangalore">
    <meta property="og:title" content="Jaipur to Bangalore Courier Service | Luggage Shifting">
    <meta property="og:description" content="Express Jaipur to Bangalore courier & luggage shifting services. Direct air cargo, household item transport, & door-to-door delivery with live tracking.">
    <meta name="twitter:title" content="Jaipur to Bangalore Courier Service | Luggage Shifting">
    <meta name="twitter:description" content="Express Jaipur to Bangalore courier & luggage shifting services. Direct air cargo, household item transport, & door-to-door delivery with live tracking.">
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-hero-gradient text-white">
        <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-24">
            <div class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1 text-xs font-bold uppercase tracking-wider backdrop-blur animate-pulse">
                <x-icons.map-pin class="text-gold" /> Premium Air & Road Route
            </div>
            <h1 class="mt-4 text-4xl font-extrabold leading-tight sm:text-5xl lg:text-6xl">
                Jaipur to Bangalore <span class="text-gold">Courier & Shifting</span>
            </h1>
            <p class="mt-4 text-white/85 sm:text-lg max-w-3xl">
                Relocating your luggage, sending corporate packages, or shipping heritage handicrafts from Jaipur to Bangalore? Count on safe, speed-driven doorstep logistics with JM Courier.
            </p>
            <div class="mt-7 flex flex-wrap gap-3">
                <a href="https://wa.me/91{{ config('services.info.phone') }}?text=Hi%20JM%20Courier%2C%20I%20want%20to%20book%20a%20pickup%20from%20Jaipur%20to%20Bangalore."
                    class="inline-flex items-center gap-2 rounded-full bg-whatsapp px-6 py-3 font-bold text-white shadow-elevated hover:brightness-105 hover:-translate-y-0.5 transition">
                    <x-icons.whatsapp class="w-5 h-5" /> WhatsApp Dispatch
                </a>
                <a href="tel:+91{{ config('services.info.phone') }}"
                    class="inline-flex items-center gap-2 rounded-full bg-danger px-6 py-3 font-bold text-white shadow-soft hover:brightness-110 hover:-translate-y-0.5 transition">
                    <x-icons.phone class="w-5 h-5" /> Speak to Booking Manager
                </a>
            </div>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <div class="space-y-6">
                <div class="mb-3 inline-flex rounded-full bg-accent px-3 py-1 text-xs font-bold uppercase tracking-wider text-brand">
                    Pink City to Silicon Valley Route
                </div>
                <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">
                    Reliable Luggage & Courier Shifting to Bangalore
                </h2>
                <div class="space-y-4 text-foreground/85 text-sm sm:text-base leading-relaxed">
                    <p>
                        Bangalore, India's tech capital and silicon valley, attracts thousands of working professionals, students, and businesses from Jaipur annually. Whether you are transitioning to a new job in a tech park, moving to a campus for higher education, or running a business shipping block-print upholstery and jewelry to South India, a dependable shipping partner is vital.
                    </p>
                    <p>
                        <strong>JM Courier</strong> provides dedicated, high-speed <strong>Jaipur to Bangalore courier services</strong> tailored to handle everything from confidential business parcels to heavy household goods. We pick up directly from all neighborhoods in Jaipur (Mansarovar, Vaishali Nagar, Jhotwara, Jagatpura, Malviya Nagar, Bani Park, Sanganer) and transport them using air and premium surface networks.
                    </p>
                    <p>
                        We guarantee hassle-free delivery to all sectors of Bangalore, including major tech clusters and residential nodes like Whitefield, Koramangala, Indiranagar, Electronic City, HSR Layout, Yelahanka, Bellandur, and Marathahalli. With custom packaging options, door-to-door transit, and live tracking, your belongings are always in safe hands.
                    </p>
                </div>
                <div class="flex flex-wrap gap-3 pt-2">
                    <div class="flex items-center gap-2 rounded-xl border border-border bg-card p-3 font-semibold text-navy text-xs">
                        <x-icons.circle-check class="text-brand w-4 h-4 shrink-0" /> Free Doorstep Collection
                    </div>
                    <div class="flex items-center gap-2 rounded-xl border border-border bg-card p-3 font-semibold text-navy text-xs">
                        <x-icons.circle-check class="text-brand w-4 h-4 shrink-0" /> Air Express (1-2 Days)
                    </div>
                    <div class="flex items-center gap-2 rounded-xl border border-border bg-card p-3 font-semibold text-navy text-xs">
                        <x-icons.circle-check class="text-brand w-4 h-4 shrink-0" /> Waterproof Multi-Layer Packing
                    </div>
                </div>
            </div>
            <div class="relative rounded-3xl overflow-hidden border border-border bg-card p-8 shadow-soft">
                <h3 class="text-xl font-extrabold text-navy mb-4">Typical Bangalore Shipping Scenarios</h3>
                <ul class="space-y-4">
                    <li class="flex gap-3">
                        <div class="h-6 w-6 rounded-full bg-accent text-brand flex items-center justify-center shrink-0 font-bold text-sm">1</div>
                        <div>
                            <h4 class="font-bold text-navy text-sm sm:text-base">IT Professional Relocation</h4>
                            <p class="text-xs sm:text-sm text-muted-foreground mt-0.5">Shipping books, clothing, PCs, desktops, monitors, and kitchen items safely to tech corridor apartments.</p>
                        </div>
                    </li>
                    <li class="flex gap-3">
                        <div class="h-6 w-6 rounded-full bg-accent text-brand flex items-center justify-center shrink-0 font-bold text-sm">2</div>
                        <div>
                            <h4 class="font-bold text-navy text-sm sm:text-base">E-commerce Handicrafts & Textiles</h4>
                            <p class="text-xs sm:text-sm text-muted-foreground mt-0.5">Sending bulk Jaipur blue pottery, marble statues, and block-printed cotton fabrics to boutiques in Bangalore.</p>
                        </div>
                    </li>
                    <li class="flex gap-3">
                        <div class="h-6 w-6 rounded-full bg-accent text-brand flex items-center justify-center shrink-0 font-bold text-sm">3</div>
                        <div>
                            <h4 class="font-bold text-navy text-sm sm:text-base">Urgent Business Documents</h4>
                            <p class="text-xs sm:text-sm text-muted-foreground mt-0.5">Contracts, legal agreements, trade invoices, and business proposals flown via priority air express channels.</p>
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
                    Our Specialized Shipping Services
                </h2>
                <p class="mt-3 text-muted-foreground text-sm sm:text-base max-w-2xl mx-auto">
                    Choose the solution that aligns with the speed, budget, and fragility of your shipment.
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
                            Confidential corporate reports, certificates, and legal filings delivered via priority air routing in 24 to 48 hours.
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
                            Send apparel, home decorations, and heritage artifacts. We offer secure bubble wrapping and barcode-labeled boxes.
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
                <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">Jaipur to Bangalore Transit & Timeline</h2>
                <p class="mt-3 text-muted-foreground text-sm sm:text-base leading-relaxed">
                    Given the 2,000+ km road distance between Jaipur and Bangalore, selecting the appropriate logistics channel is critical for timeline management.
                </p>

                <div class="mt-6 overflow-hidden rounded-2xl border border-border bg-card">
                    <table class="w-full text-left text-sm">
                        <thead class="bg-secondary/40 text-navy font-bold">
                            <tr>
                                <th class="p-4">Delivery Mode</th>
                                <th class="p-4">Transit Window</th>
                                <th class="p-4">Best Used For</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-border">
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">Priority Air Express</td>
                                <td class="p-4 text-muted-foreground">1 - 2 Days</td>
                                <td class="p-4 text-muted-foreground">Urgent Documents, Medicines, High-Value Parcels</td>
                            </tr>
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">Standard Air Shifting</td>
                                <td class="p-4 text-muted-foreground">2 - 3 Days</td>
                                <td class="p-4 text-muted-foreground">Suitcases, Moving Boxes, Electronics</td>
                            </tr>
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">Express Surface Cargo</td>
                                <td class="p-4 text-muted-foreground">4 - 5 Days</td>
                                <td class="p-4 text-muted-foreground">Heavy Luggage, B2B Commercial Goods, Pallets</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Price factors / Callout -->
            <div class="rounded-3xl bg-brand-gradient p-8 text-white shadow-elevated relative overflow-hidden">
                <div class="absolute -right-6 -top-6 h-24 w-24 rounded-full bg-gold/30 blur-xl"></div>
                <h3 class="text-2xl font-extrabold">How We Estimate Your Rates</h3>
                <p class="mt-3 text-white/85 text-sm sm:text-base leading-relaxed">
                    Charges are calculated based on weight, volume (dimensional density), packaging, and choice of speed. 
                </p>
                <p class="mt-2 text-white/85 text-sm sm:text-base leading-relaxed">
                    We offer dedicated promotional tariffs for students and corporate employees moving their households to Bangalore. Contact us to avail special route discounts.
                </p>
                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="https://wa.me/91{{ config('services.info.phone') }}?text=Hi%20JM%20Courier%2C%20I%20want%20to%20know%20shipping%20rates%20from%20Jaipur%20to%20Bangalore."
                        class="inline-flex justify-center items-center gap-2 rounded-full bg-whatsapp px-4 py-2.5 font-bold text-white shadow-elevated text-sm hover:brightness-105 transition">
                        <x-icons.whatsapp class="w-4 h-4" /> WhatsApp Price Desk
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
                    Engineered to deliver convenience, safety, and rapid transit from Jaipur to Bangalore.
                </p>
            </div>

            <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.time class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">Speedy Transit</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        Leveraging flight connectivity from Jaipur Airport to Bangalore (KIA) for lightning-fast delivery.
                    </p>
                </div>
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.shield class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">High-Grade Packing</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        Thick shrink wrap, custom bubble layering, and high-strength boxes to withstand long distances.
                    </p>
                </div>
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.price class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">Affordable Slabs</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        Highly competitive pricing for large luggage sets, students, and bulk commercial orders.
                    </p>
                </div>
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.support class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">Direct WhatsApp Help</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        Connect with real humans at our helpline for pricing, pickups, and transit updates.
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
            <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">Jaipur to Bangalore Shipping FAQs</h2>
        </div>

        <div class="mx-auto mt-8 max-w-3xl space-y-2 overflow-hidden px-4">
            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>What is the shipping time for courier from Jaipur to Bangalore?</span>
                    <x-icons.plus class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        Priority Air Express shipments take 1 to 2 days to reach Bangalore. Standard shipping packages typically arrive in 2 to 3 days, and cost-effective surface cargo transit takes 4 to 5 days.
                    </p>
                </div>
            </div>

            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>Do you collect luggage from residential locations in Jaipur?</span>
                    <x-icons.plus class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        Yes, doorstep collection is entirely free across all neighborhoods in Jaipur, including Mansarovar, Vaishali Nagar, Jagatpura, Malviya Nagar, Bani Park, Sanganer, Jhotwara, Sitapura, and Pratap Nagar.
                    </p>
                </div>
            </div>

            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>Can I ship electronics, desktops, and monitors from Jaipur to Bangalore?</span>
                    <x-icons.plus class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        Yes, we specialize in shipping IT hardware. Desktops, CPUs, and LED monitors are packed securely in multiple bubble wrap layers and sturdy cardboard cartons to prevent any damage.
                    </p>
                </div>
            </div>

            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>Are there special discount options for students?</span>
                    <x-icons.plus class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        Absolutely. Students moving to Bangalore for education can provide their university admission card or ID to access special discounted rates on luggage and book transport.
                    </p>
                </div>
            </div>

            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>What items are prohibited on this route?</span>
                    <x-icons.plus class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        As per airline and road guidelines, we do not ship aerosols, gas cylinders, liquid chemicals, batteries separately (not integrated inside appliances), cash, high-value jewelry, and explosive materials.
                    </p>
                </div>
            </div>

            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>Is packaging material supplied by your team during pickup?</span>
                    <x-icons.plus class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        Yes! Our pickup professionals carry heavy-duty bubble wraps, tapes, and security flyer covers. We wrap and pack your items on-site to verify that everything is securely sealed before transit.
                    </p>
                </div>
            </div>

            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>Do you offer insurance cover for luggage?</span>
                    <x-icons.plus class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        Yes, optional transit insurance coverage is available for domestic relocations and valuable consignments. Ask our customer team during booking for detail options.
                    </p>
                </div>
            </div>

            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>How do I track my shipment?</span>
                    <x-icons.plus class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        Every booked parcel receives a tracking ID. You can check status updates online or opt for automated alerts delivered directly to your WhatsApp number.
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
