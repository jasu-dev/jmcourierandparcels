@extends('layouts.app')

@push('meta')
    <title>Jaipur to Gurugram Courier Service | Next-Day Delivery</title>
    <meta name="description" content="Fastest Jaipur to Gurugram courier service. Same-day pickup for urgent documents, corporate parcels, & luggage transport to Gurugram (Gurgaon) and Delhi NCR.">
    <meta name="keywords" content="jaipur to gurugram courier service, courier from jaipur to gurugram, luggage shifting jaipur to gurugram, cargo service jaipur to gurugram, parcel delivery jaipur to gurugram, door to door courier jaipur to gurugram">
    <meta property="og:title" content="Jaipur to Gurugram Courier Service | Next-Day Delivery">
    <meta property="og:description" content="Fastest Jaipur to Gurugram courier service. Same-day pickup for urgent documents, corporate parcels, & luggage transport to Gurugram (Gurgaon) and Delhi NCR.">
    <meta name="twitter:title" content="Jaipur to Gurugram Courier Service | Next-Day Delivery">
    <meta name="twitter:description" content="Fastest Jaipur to Gurugram courier service. Same-day pickup for urgent documents, corporate parcels, & luggage transport to Gurugram (Gurgaon) and Delhi NCR.">
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-hero-gradient text-white">
        <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-24">
            <div class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1 text-xs font-bold uppercase tracking-wider backdrop-blur animate-pulse">
                <x-icons.map-pin class="text-gold" /> NH 48 Direct Corridor
            </div>
            <h1 class="mt-4 text-4xl font-extrabold leading-tight sm:text-5xl lg:text-6xl">
                Jaipur to Gurugram <span class="text-gold">Courier & Cargo</span>
            </h1>
            <p class="mt-4 text-white/85 sm:text-lg max-w-3xl">
                Shipping legal files, commercial samples, or household baggage to Millennium City Gurugram? Rely on our dedicated 5-hour transit route for swift and secure door-to-door delivery.
            </p>
            <div class="mt-7 flex flex-wrap gap-3">
                <a href="https://wa.me/91{{ config('services.info.phone') }}?text=Hi%20JM%20Courier%2C%20I%20want%20to%20book%20a%20pickup%20from%20Jaipur%20to%20Gurugram."
                    class="inline-flex items-center gap-2 rounded-full bg-whatsapp px-6 py-3 font-bold text-white shadow-elevated hover:brightness-105 hover:-translate-y-0.5 transition">
                    <x-icons.whatsapp class="w-5 h-5" /> Book Gurugram Pickup
                </a>
                <a href="tel:+91{{ config('services.info.phone') }}"
                    class="inline-flex items-center gap-2 rounded-full bg-danger px-6 py-3 font-bold text-white shadow-soft hover:brightness-110 hover:-translate-y-0.5 transition">
                    <x-icons.phone class="w-5 h-5" /> Call Local Desk
                </a>
            </div>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <div class="space-y-6">
                <div class="mb-3 inline-flex rounded-full bg-accent px-3 py-1 text-xs font-bold uppercase tracking-wider text-brand">
                    Millennium City Express Line
                </div>
                <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">
                    Premium Document, Parcel & Cargo Shifting to Gurugram
                </h2>
                <div class="space-y-4 text-foreground/85 text-sm sm:text-base leading-relaxed">
                    <p>
                        Gurugram (formerly Gurgaon) has evolved into India's premier corporate hub, housing multinational headquarters, IT parks, and industrial zones. Because Jaipur is located just 240 km away along National Highway 48, businesses, startups, and families maintain a high volume of logistics traffic between the two cities daily.
                    </p>
                    <p>
                        At <strong>JM Courier</strong>, we manage a dedicated fleet and express routes to guarantee swift <strong>Jaipur to Gurugram courier services</strong>. Our service covers immediate doorstep collections from all parts of Jaipur, including central areas like C-Scheme and Vaishali Nagar, industrial sectors like Sitapura, Sanganer, and Mansarovar, and growing residential zones like Jagatpura and Malviya Nagar.
                    </p>
                    <p>
                        We deliver directly to all locations in Gurugram, including high-tech corporate zones like DLF Cyber City, Cyber Hub, Sector 45, Udyog Vihar, Sohna Road, Golf Course Road, and new residential sectors. Our priority surface logistics ensure next-day delivery for corporate files, retail packages, and personal shifting boxes.
                    </p>
                </div>
                <div class="flex flex-wrap gap-3 pt-2">
                    <div class="flex items-center gap-2 rounded-xl border border-border bg-card p-3 font-semibold text-navy text-xs">
                        <x-icons.circle-check class="text-brand w-4 h-4 shrink-0" /> Free Doorstep Collection
                    </div>
                    <div class="flex items-center gap-2 rounded-xl border border-border bg-card p-3 font-semibold text-navy text-xs">
                        <x-icons.circle-check class="text-brand w-4 h-4 shrink-0" /> Same-Day Dispatch
                    </div>
                    <div class="flex items-center gap-2 rounded-xl border border-border bg-card p-3 font-semibold text-navy text-xs">
                        <x-icons.circle-check class="text-brand w-4 h-4 shrink-0" /> Real-time tracking alerts
                    </div>
                </div>
            </div>
            <div class="relative rounded-3xl overflow-hidden border border-border bg-card p-8 shadow-soft">
                <h3 class="text-xl font-extrabold text-navy mb-4">Gurugram Shifting & Shipping Specialities</h3>
                <ul class="space-y-4">
                    <li class="flex gap-3">
                        <div class="h-6 w-6 rounded-full bg-accent text-brand flex items-center justify-center shrink-0 font-bold text-sm">1</div>
                        <div>
                            <h4 class="font-bold text-navy text-sm sm:text-base">Corporate Office Relocations</h4>
                            <p class="text-xs sm:text-sm text-muted-foreground mt-0.5">Moving server units, office documentation, desktops, and training materials from Jaipur branches to Gurgaon HQ.</p>
                        </div>
                    </li>
                    <li class="flex gap-3">
                        <div class="h-6 w-6 rounded-full bg-accent text-brand flex items-center justify-center shrink-0 font-bold text-sm">2</div>
                        <div>
                            <h4 class="font-bold text-navy text-sm sm:text-base">Apparel & Textiles Warehousing</h4>
                            <p class="text-xs sm:text-sm text-muted-foreground mt-0.5">Bulk transportation of Sanganer blocks, fabrics, and designer garments to Gurugram retail warehouses.</p>
                        </div>
                    </li>
                    <li class="flex gap-3">
                        <div class="h-6 w-6 rounded-full bg-accent text-brand flex items-center justify-center shrink-0 font-bold text-sm">3</div>
                        <div>
                            <h4 class="font-bold text-navy text-sm sm:text-base">PG & Apartment Shifting</h4>
                            <p class="text-xs sm:text-sm text-muted-foreground mt-0.5">Convenient luggage shipping for young professionals shifting houses or joining corporate roles in DLF sectors.</p>
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
                        <h3 class="mt-4 font-bold text-navy text-lg">Express Courier</h3>
                        <p class="mt-2 text-sm text-muted-foreground leading-relaxed">
                            Confidential legal folders, client reports, certificates, and invoices delivered securely in under 24 hours.
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
                            Moving home or starting a new job? Send suitcases, bags, and cardboard boxes easily with doorstep collection.
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
                        <h3 class="mt-4 font-bold text-navy text-lg">B2B Cargo Shifting</h3>
                        <p class="mt-2 text-sm text-muted-foreground leading-relaxed">
                            Support your B2B logistics with Part-Truck-Load (LTL) and Full-Truck-Load (FTL) solutions. E-way bill compliance assistance and transit insurance are standard.
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
                <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">Jaipur to Gurugram Transit & Timelines</h2>
                <p class="mt-3 text-muted-foreground text-sm sm:text-base leading-relaxed">
                    Given the close geographic proximity via NH-48, our surface and overnight transport routes are highly optimized.
                </p>

                <div class="mt-6 overflow-hidden rounded-2xl border border-border bg-card">
                    <table class="w-full text-left text-sm">
                        <thead class="bg-secondary/40 text-navy font-bold">
                            <tr>
                                <th class="p-4">Service Type</th>
                                <th class="p-4">Delivery Timeline</th>
                                <th class="p-4">Ideal Cargo Type</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-border">
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">Priority Same-Day (Air/Fast Track)</td>
                                <td class="p-4 text-muted-foreground">Within 12 Hours</td>
                                <td class="p-4 text-muted-foreground">Urgent Tenders, Medical Shipments</td>
                            </tr>
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">Overnight Surface Express</td>
                                <td class="p-4 text-muted-foreground">Next-Day (24 Hours)</td>
                                <td class="p-4 text-muted-foreground">Standard Documents, Retail Parcels, Suitcases</td>
                            </tr>
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">Standard Surface Cargo</td>
                                <td class="p-4 text-muted-foreground">1 - 2 Days</td>
                                <td class="p-4 text-muted-foreground">Heavy Machinery, Bulk Household Shifting</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Price factors / Callout -->
            <div class="rounded-3xl bg-brand-gradient p-8 text-white shadow-elevated relative overflow-hidden">
                <div class="absolute -right-6 -top-6 h-24 w-24 rounded-full bg-gold/30 blur-xl"></div>
                <h3 class="text-2xl font-extrabold">Transparent Domestic Shipping Rates</h3>
                <p class="mt-3 text-white/85 text-sm sm:text-base leading-relaxed">
                    Pricing on the Jaipur to Gurugram route is determined by parameters such as physical weight, dimensional volume, packaging choice (wooden crates vs. bubble sheets), and transport velocity (Air vs. Surface). 
                </p>
                <p class="mt-2 text-white/85 text-sm sm:text-base leading-relaxed">
                    We offer massive discounts for heavy luggage shipping over 20 kg and corporate commercial bookings. Contact our team today for a tailored quote.
                </p>
                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="https://wa.me/91{{ config('services.info.phone') }}?text=Hi%20JM%20Courier%2C%20I%20want%20to%20get%20pricing%20for%20Jaipur%20to%20Gurugram."
                        class="inline-flex justify-center items-center gap-2 rounded-full bg-whatsapp px-4 py-2.5 font-bold text-white shadow-elevated text-sm hover:brightness-105 transition">
                        <x-icons.whatsapp class="w-4 h-4" /> Get Live Estimate
                    </a>
                    <a href="tel:+91{{ config('services.info.phone') }}"
                        class="inline-flex items-center justify-center gap-2 rounded-full bg-danger px-4 py-2.5 font-bold text-white shadow-soft text-sm hover:brightness-110 transition">
                        <x-icons.phone class="w-4 h-4" /> Speak to Route Head
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
                    Discover the features that distinguish our Jaipur-Gurugram logistics corridor from standard operators.
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
            <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">Jaipur to Gurugram Shipping FAQs</h2>
        </div>

        <div class="mx-auto mt-8 max-w-3xl space-y-2 overflow-hidden px-4">
            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>How much time does it take to deliver a courier from Jaipur to Gurugram?</span>
                    <x-icons.plus class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        Thanks to our daily express vans operating along the NH-48 corridor, priority couriers and documents are delivered overnight (within 24 hours). Standard surface cargo shipments are delivered in 1 to 2 days.
                    </p>
                </div>
            </div>

            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>Do you offer free doorstep pickup services in Jaipur?</span>
                    <x-icons.plus class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        Yes, doorstep pickup is completely free across Jaipur, including Mansarovar, Vaishali Nagar, Jhotwara, Jagatpura, Malviya Nagar, Bani Park, Sanganer, Sitapura, and Pratap Nagar.
                    </p>
                </div>
            </div>

            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>Can you package heavy artwork or wooden items safely?</span>
                    <x-icons.plus class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        Yes! We specialize in packing marble statues, blue pottery, and heavy textile bundles. We provide custom wooden crating and bubble wrap packaging services right at your doorstep.
                    </p>
                </div>
            </div>

            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>Is transit insurance available for expensive corporate goods?</span>
                    <x-icons.plus class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        Yes, we offer comprehensive transit insurance options to cover high-value IT equipment, corporate servers, electronics, and valuable personal goods during transit.
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
