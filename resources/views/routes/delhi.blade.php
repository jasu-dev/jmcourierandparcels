@extends('layouts.app')

@push('meta')
    <title>Jaipur to Delhi Courier Service | Express Parcel Shifting</title>
    <meta name="description" content="Fastest Jaipur to Delhi courier service. Get next-day express parcel delivery, cargo shipping, and student luggage shifting with free same-day doorstep pickup.">
    <meta name="keywords" content="jaipur to delhi courier service, courier from jaipur to delhi, luggage shifting jaipur to delhi, cargo service jaipur to delhi, parcel delivery jaipur to delhi, door to door courier jaipur to delhi">
    <meta property="og:title" content="Jaipur to Delhi Courier Service | Express Parcel Shifting">
    <meta property="og:description" content="Fastest Jaipur to Delhi courier service. Get next-day express parcel delivery, cargo shipping, and student luggage shifting with free same-day doorstep pickup.">
    <meta name="twitter:title" content="Jaipur to Delhi Courier Service | Express Parcel Shifting">
    <meta name="twitter:description" content="Fastest Jaipur to Delhi courier service. Get next-day express parcel delivery, cargo shipping, and student luggage shifting with free same-day doorstep pickup.">
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-hero-gradient text-white">
        <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-24">
            <div class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1 text-xs font-bold uppercase tracking-wider backdrop-blur animate-pulse">
                <x-icons.map-pin class="text-gold" /> Daily Logistics Service
            </div>
            <h1 class="mt-4 text-4xl font-extrabold leading-tight sm:text-5xl lg:text-6xl">
                Jaipur to Delhi <span class="text-gold">Courier & Cargo</span> Services
            </h1>
            <p class="mt-4 text-white/85 sm:text-lg max-w-3xl">
                Need to send urgent documents, parcels, or heavy luggage from Jaipur to Delhi NCR? Experience seamless, secure, and affordable door-to-door delivery with next-day express options.
            </p>
            <div class="mt-7 flex flex-wrap gap-3">
                <a href="https://wa.me/91{{ config('services.info.phone') }}?text=Hi%20JM%20Courier%2C%20I%20want%20to%20book%20a%20pickup%20from%20Jaipur%20to%20Delhi."
                    class="inline-flex items-center gap-2 rounded-full bg-whatsapp px-6 py-3 font-bold text-white shadow-elevated hover:brightness-105 hover:-translate-y-0.5 transition">
                    <x-icons.whatsapp class="w-5 h-5" /> Book Jaipur to Delhi Pickup
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
                    Overnight Jaipur-Delhi Express
                </div>
                <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">
                    Seamless Shipping from Jaipur to Delhi & NCR
                </h2>
                <div class="space-y-4 text-foreground/85 text-sm sm:text-base leading-relaxed">
                    <p>
                        The corridor connecting Jaipur, the Pink City of Rajasthan, and New Delhi, the capital of India, is one of the busiest economic channels in the country. With massive trade, industrial movement, and student relocations happening daily along National Highway 48 (NH-48), the demand for a reliable logistics partner is higher than ever.
                    </p>
                    <p>
                        At <strong>JM Courier</strong>, we bridge this gap by providing premium, end-to-end <strong>Jaipur to Delhi courier services</strong>. Whether you reside in central locations like C-Scheme or Vaishali Nagar, industrial hubs like Sitapura or Mansarovar, or residential suburbs like Jagatpura and Malviya Nagar, our field team collects your packages directly from your doorstep. 
                    </p>
                    <p>
                        We cater to all parts of Delhi NCR including central districts (Connaught Place, Karol Bagh, Okhla), academic hubs (Delhi University, South Campus, PG hostels), and surrounding commercial zones (Noida, Gurugram, Faridabad, Ghaziabad). Our priority transport route ensures that your urgent documents, precious goods, and commercial packages reach their destination in Delhi within 24 hours of dispatch.
                    </p>
                </div>
                <div class="flex flex-wrap gap-3 pt-2">
                    <div class="flex items-center gap-2 rounded-xl border border-border bg-card p-3 font-semibold text-navy text-xs">
                        <x-icons.circle-check class="text-brand w-4 h-4 shrink-0" /> Free Doorstep Collection
                    </div>
                    <div class="flex items-center gap-2 rounded-xl border border-border bg-card p-3 font-semibold text-navy text-xs">
                        <x-icons.circle-check class="text-brand w-4 h-4 shrink-0" /> 24-Hour Next-Day Delivery
                    </div>
                    <div class="flex items-center gap-2 rounded-xl border border-border bg-card p-3 font-semibold text-navy text-xs">
                        <x-icons.circle-check class="text-brand w-4 h-4 shrink-0" /> Real-time Tracking Updates
                    </div>
                </div>
            </div>
            <div class="relative rounded-3xl overflow-hidden border border-border bg-card p-8 shadow-soft">
                <h3 class="text-xl font-extrabold text-navy mb-4">Common Shipping Requirements We Meet</h3>
                <ul class="space-y-4">
                    <li class="flex gap-3">
                        <div class="h-6 w-6 rounded-full bg-accent text-brand flex items-center justify-center shrink-0 font-bold text-sm">1</div>
                        <div>
                            <h4 class="font-bold text-navy text-sm sm:text-base">Student Luggage Shifting</h4>
                            <p class="text-xs sm:text-sm text-muted-foreground mt-0.5">Moving suitcases, books, study desks, and household essentials to DU, IP University, or Noida/Gurugram hostels.</p>
                        </div>
                    </li>
                    <li class="flex gap-3">
                        <div class="h-6 w-6 rounded-full bg-accent text-brand flex items-center justify-center shrink-0 font-bold text-sm">2</div>
                        <div>
                            <h4 class="font-bold text-navy text-sm sm:text-base">Urgent Business Documents</h4>
                            <p class="text-xs sm:text-sm text-muted-foreground mt-0.5">Legal papers, contracts, certificates, and government tenders shipped securely from corporate hubs in Jaipur.</p>
                        </div>
                    </li>
                    <li class="flex gap-3">
                        <div class="h-6 w-6 rounded-full bg-accent text-brand flex items-center justify-center shrink-0 font-bold text-sm">3</div>
                        <div>
                            <h4 class="font-bold text-navy text-sm sm:text-base">Jaipur Textiles & Jewelry</h4>
                            <p class="text-xs sm:text-sm text-muted-foreground mt-0.5">Gemstone jewelry, block-printed fabrics, and famous handicraft items sent from Johri Bazar to Delhi showrooms.</p>
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
                    Tailored Shipping Solutions: Jaipur to Delhi
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
                        <h3 class="mt-4 font-bold text-navy text-lg">Document Courier</h3>
                        <p class="mt-2 text-sm text-muted-foreground leading-relaxed">
                            Need to send signed agreements or university applications? Our document service ensures overnight delivery with specialized packaging and barcode tracking.
                        </p>
                    </div>
                    <div class="mt-4 pt-4 border-t border-border/60">
                        <a href="{{ route('services.courier') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-brand hover:underline">
                            Read More <x-icons.arrow-right class="w-3.5 h-3.5" />
                        </a>
                    </div>
                </div>

                <!-- Card 2: Luggage Transport -->
                <div class="rounded-3xl border border-border bg-card p-6 shadow-soft hover:-translate-y-1 hover:shadow-elevated transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-accent text-brand shrink-0">
                            <x-icons.briefcase class="w-6 h-6" />
                        </div>
                        <h3 class="mt-4 font-bold text-navy text-lg">Luggage Shipping</h3>
                        <p class="mt-2 text-sm text-muted-foreground leading-relaxed">
                            Perfect for tourists, students, and employees. Shifting your heavy suitcases, bags, and cardboard boxes to Delhi at a fraction of the cost of airline baggage fees.
                        </p>
                    </div>
                    <div class="mt-4 pt-4 border-t border-border/60">
                        <a href="{{ route('services.luggage') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-brand hover:underline">
                            Read More <x-icons.arrow-right class="w-3.5 h-3.5" />
                        </a>
                    </div>
                </div>

                <!-- Card 3: Bulk Parcel -->
                <div class="rounded-3xl border border-border bg-card p-6 shadow-soft hover:-translate-y-1 hover:shadow-elevated transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-accent text-brand shrink-0">
                            <x-icons.boxes class="w-6 h-6" />
                        </div>
                        <h3 class="mt-4 font-bold text-navy text-lg">Parcel Delivery</h3>
                        <p class="mt-2 text-sm text-muted-foreground leading-relaxed">
                            Deliver gift boxes, electronics, appliances, and retail items. We offer on-site bubble wrapping and secure corrugated packaging directly at your home.
                        </p>
                    </div>
                    <div class="mt-4 pt-4 border-t border-border/60">
                        <a href="{{ route('services.parcel') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-brand hover:underline">
                            Read More <x-icons.arrow-right class="w-3.5 h-3.5" />
                        </a>
                    </div>
                </div>

                <!-- Card 4: Commercial Cargo -->
                <div class="rounded-3xl border border-border bg-card p-6 shadow-soft hover:-translate-y-1 hover:shadow-elevated transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-accent text-brand shrink-0">
                            <x-icons.truck class="w-6 h-6" />
                        </div>
                        <h3 class="mt-4 font-bold text-navy text-lg">Commercial Cargo</h3>
                        <p class="mt-2 text-sm text-muted-foreground leading-relaxed">
                            Support your B2B logistics with Part-Truck-Load (LTL) and Full-Truck-Load (FTL) solutions. E-way bill compliance assistance and transit insurance are standard.
                        </p>
                    </div>
                    <div class="mt-4 pt-4 border-t border-border/60">
                        <a href="{{ route('services.cargo') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-brand hover:underline">
                            Read More <x-icons.arrow-right class="w-3.5 h-3.5" />
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
                <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">Jaipur to Delhi Transit Times & Estimates</h2>
                <p class="mt-3 text-muted-foreground text-sm sm:text-base leading-relaxed">
                    Our logistics networks run 24 hours a day. We categorize shipments by speed and budget parameters. Choose the mode of shipping that matches your requirements.
                </p>

                <div class="mt-6 overflow-hidden rounded-2xl border border-border bg-card">
                    <table class="w-full text-left text-sm">
                        <thead class="bg-secondary/40 text-navy font-bold">
                            <tr>
                                <th class="p-4">Service Mode</th>
                                <th class="p-4">Average Transit Time</th>
                                <th class="p-4">Best Suited For</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-border">
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">Priority Air Express</td>
                                <td class="p-4 text-muted-foreground">Next-Day (Under 24 Hrs)</td>
                                <td class="p-4 text-muted-foreground">Urgent Files, Small Electronic Samples</td>
                            </tr>
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">Standard Express</td>
                                <td class="p-4 text-muted-foreground">1 - 2 Days</td>
                                <td class="p-4 text-muted-foreground">Apparel, Books, Cartons, Luggage</td>
                            </tr>
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">Surface Cargo</td>
                                <td class="p-4 text-muted-foreground">2 - 3 Days</td>
                                <td class="p-4 text-muted-foreground">Heavy Machinery, Commercial Raw Goods</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Price factors / Callout -->
            <div class="rounded-3xl bg-brand-gradient p-8 text-white shadow-elevated relative overflow-hidden">
                <div class="absolute -right-6 -top-6 h-24 w-24 rounded-full bg-gold/30 blur-xl"></div>
                <h3 class="text-2xl font-extrabold">Transparent & Fair Shipping Rates</h3>
                <p class="mt-3 text-white/85 text-sm sm:text-base leading-relaxed">
                    Pricing on the Jaipur to Delhi route is determined by parameters such as physical weight, dimensional volume, packaging choice (wooden crates vs. bubble sheets), and transport velocity (Air vs. Surface). 
                </p>
                <p class="mt-2 text-white/85 text-sm sm:text-base leading-relaxed">
                    We offer massive discounts for heavy luggage shipping over 20 kg and corporate commercial bookings. Contact our team today for a tailored quote.
                </p>
                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="https://wa.me/91{{ config('services.info.phone') }}?text=Hi%20JM%20Courier%2C%20I%20want%20to%20get%20pricing%20for%20Jaipur%20to%20Delhi."
                        class="inline-flex justify-center items-center gap-2 rounded-full bg-whatsapp px-4 py-2.5 font-bold text-white shadow-elevated text-sm hover:brightness-105 transition">
                        <x-icons.whatsapp class="w-4 h-4" /> Get Live Estimate
                    </a>
                    <a href="tel:+91{{ config('services.info.phone') }}"
                        class="inline-flex items-center justify-center gap-2 rounded-full bg-danger px-4 py-2.5 font-bold text-white shadow-soft text-sm hover:brightness-110 transition">
                        <x-icons.phone class="w-4 h-4" /> Get Quote
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
                    Why Choose JM Courier?
                </h2>
                <p class="mt-2 text-muted-foreground text-sm sm:text-base">
                    Discover the features that distinguish our Jaipur-Delhi logistics corridor from standard operators.
                </p>
            </div>

            <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.time class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">Same-Day Pickup</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        Book your parcel pickup before 5:00 PM and our local executive will arrive within 60 minutes.
                    </p>
                </div>
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.shield class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">Multi-Layer Packing</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        We provide waterproofing, custom bubble wrap layers, and thick carton containers at your doorstep.
                    </p>
                </div>
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.price class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">Competitive Pricing</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        Clean rates with no hidden fuel surcharges. Special discounted slabs for heavy shipping.
                    </p>
                </div>
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.support class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">Dedicated Desk Support</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        Say goodbye to robotic AI chats. Converse directly with our route supervisors on WhatsApp.
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
            <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">Jaipur to Delhi Shipping FAQs</h2>
        </div>

        <div class="mx-auto mt-8 max-w-3xl space-y-2 overflow-hidden px-4">
            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>How much time does it take to deliver a courier from Jaipur to Delhi?</span>
                    <x-icons.plus class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        Our priority courier service takes less than 24 hours (overnight transit) to reach Delhi NCR. Standard delivery routes take between 1 to 2 days, and bulk surface cargo shipping is completed in 2 to 3 days.
                    </p>
                </div>
            </div>

            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>Do you offer free home pickup in Jaipur for Delhi shipments?</span>
                    <x-icons.plus class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        Yes! Doorstep collection is 100% free across all areas in Jaipur, including Mansarovar, Vaishali Nagar, Jagatpura, Malviya Nagar, Bani Park, Sanganer, Jhotwara, Sitapura, and Pratap Nagar.
                    </p>
                </div>
            </div>

            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>What are the luggage shifting options for students moving from Jaipur to Delhi?</span>
                    <x-icons.plus class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        We provide custom student shipping plans where we collect suitcases, school books, laptops, and study items directly from your home in Jaipur and ship them to your hostel or PG address in Delhi, Noida, or Gurugram. We also offer discounts for student IDs.
                    </p>
                </div>
            </div>

            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>Can I ship liquid products, medicines, or battery devices?</span>
                    <x-icons.plus class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        Prescription medicines accompanied by medical records and electronic goods containing batteries are acceptable via specific channels. However, liquid chemicals, explosive materials, currency, and gold items are strictly prohibited under national transport regulations.
                    </p>
                </div>
            </div>

            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>What are the rates per kg for Jaipur to Delhi courier?</span>
                    <x-icons.plus class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        The price per kg starts at very reasonable rates and depends on total consignment weight and speed. For shipments above 20 kg, we offer discounted bulk slabs. Share your package dimensions with us on WhatsApp for an immediate quote.
                    </p>
                </div>
            </div>

            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>Do you provide packing services at home?</span>
                    <x-icons.plus class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        Yes! Our pickup executives carry thick bubble wrap, packing tapes, and waterproof courier envelopes. We handle the packaging at your home or office to guarantee maximum safety during transit.
                    </p>
                </div>
            </div>

            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>Is there insurance available for high-value items?</span>
                    <x-icons.plus class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        Yes, we offer optional transit insurance for expensive electronics, business equipment, and fragile objects. This ensures coverage against damage or loss in transit.
                    </p>
                </div>
            </div>

            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>How can I track my Jaipur to Delhi package?</span>
                    <x-icons.plus class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        Once booked, you will receive a tracking number and a link to trace the status of your parcel. You also receive proactive delivery status alerts on WhatsApp.
                    </p>
                </div>
            </div>

            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>Do you deliver to Noida, Gurgaon, and Ghaziabad too?</span>
                    <x-icons.plus class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        Yes, our delivery network extends to all sectors of Noida, Greater Noida, Gurugram (Gurgaon), Ghaziabad, Faridabad, and the entire National Capital Region (NCR).
                    </p>
                </div>
            </div>

            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>Can I schedule a pickup at a specific time?</span>
                    <x-icons.plus class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        Certainly. You can book an appointment for doorstep collection at a time convenient for you. Our executives operate from 9:00 AM to 8:00 PM.
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
