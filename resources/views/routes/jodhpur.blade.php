@extends('layouts.app')

@push('meta')
    <title>Jaipur to Jodhpur Courier Service | Same-Day Shifting</title>
    <meta name="description" content="Fastest Jaipur to Jodhpur courier & luggage shifting services. Direct same-day road delivery, free doorstep collection, & affordable intra-state rates.">
    <meta name="keywords" content="jaipur to jodhpur courier service, courier from jaipur to jodhpur, luggage shifting jaipur to jodhpur, cargo service jaipur to jodhpur, parcel delivery jaipur to jodhpur, direct road cargo jodhpur jaipur">
    <meta property="og:title" content="Jaipur to Jodhpur Courier Service | Same-Day Shifting">
    <meta property="og:description" content="Fastest Jaipur to Jodhpur courier & luggage shifting services. Direct same-day road delivery, free doorstep collection, & affordable intra-state rates.">
    <meta name="twitter:title" content="Jaipur to Jodhpur Courier Service | Same-Day Shifting">
    <meta name="twitter:description" content="Fastest Jaipur to Jodhpur courier & luggage shifting services. Direct same-day road delivery, free doorstep collection, & affordable intra-state rates.">
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-hero-gradient text-white">
        <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-24">
            <div class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1 text-xs font-bold uppercase tracking-wider backdrop-blur animate-pulse">
                <x-icons.map-pin class="text-gold" /> Intra-State Express Line
            </div>
            <h1 class="mt-4 text-4xl font-extrabold leading-tight sm:text-5xl lg:text-6xl">
                Jaipur to Jodhpur <span class="text-gold">Courier & Cargo</span>
            </h1>
            <p class="mt-4 text-white/85 sm:text-lg max-w-3xl">
                Need to dispatch trade packages, documents, or shifting boxes from the Pink City to the Blue City? Trust our direct daily road logistics for same-day and next-day deliveries.
            </p>
            <div class="mt-7 flex flex-wrap gap-3">
                <a href="https://wa.me/91{{ config('services.info.phone') }}?text=Hi%20JM%20Courier%2C%20I%20want%20to%20book%20a%20pickup%20from%20Jaipur%20to%20Jodhpur."
                    class="inline-flex items-center gap-2 rounded-full bg-whatsapp px-6 py-3 font-bold text-white shadow-elevated hover:brightness-105 hover:-translate-y-0.5 transition">
                    <x-icons.whatsapp class="w-5 h-5" /> Book Jodhpur Pickup
                </a>
                <a href="tel:+91{{ config('services.info.phone') }}"
                    class="inline-flex items-center gap-2 rounded-full bg-danger px-6 py-3 font-bold text-white shadow-soft hover:brightness-110 hover:-translate-y-0.5 transition">
                    <x-icons.phone class="w-5 h-5" /> Speak to Booking Office
                </a>
            </div>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <div class="space-y-6">
                <div class="mb-3 inline-flex rounded-full bg-accent px-3 py-1 text-xs font-bold uppercase tracking-wider text-brand">
                    Pink City to Blue City
                </div>
                <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">
                    Rapid Same-Day & Next-Day Shipping to Jodhpur
                </h2>
                <div class="space-y-4 text-foreground/85 text-sm sm:text-base leading-relaxed">
                    <p>
                        The connection between Jaipur and Jodhpur is one of the most prominent intra-state trade routes in Rajasthan. Business organizations, handicraft exporters, local students, and relocating families move a substantial quantity of commercial packages, text documents, and personal belongings between these two iconic cities daily.
                    </p>
                    <p>
                        At <strong>JM Courier</strong>, we leverage our direct daily road vehicles operating via NH-21 and NH-112 to manage high-efficiency <strong>Jaipur to Jodhpur courier services</strong>. Our service includes free same-day doorstep pickups from all neighborhoods in Jaipur, including Mansarovar, Vaishali Nagar, Jhotwara, Jagatpura, Malviya Nagar, Bani Park, Sanganer, Sitapura, and Pratap Nagar.
                    </p>
                    <p>
                        We deliver directly to all destinations inside Jodhpur, including commercial markets like Sardarpura and Paota, academic zones like Shashtri Nagar, industrial zones like Basni, and residential nodes like Chopasni Housing Board. Our express vans provide next-day delivery for standard bookings, and same-day express for select early bookings.
                    </p>
                </div>
                <div class="flex flex-wrap gap-3 pt-2">
                    <div class="flex items-center gap-2 rounded-xl border border-border bg-card p-3 font-semibold text-navy text-xs">
                        <x-icons.circle-check class="text-brand w-4 h-4 shrink-0" /> Free Doorstep Collection
                    </div>
                    <div class="flex items-center gap-2 rounded-xl border border-border bg-card p-3 font-semibold text-navy text-xs">
                        <x-icons.circle-check class="text-brand w-4 h-4 shrink-0" /> Same-Day/Next-Day Road Delivery
                    </div>
                    <div class="flex items-center gap-2 rounded-xl border border-border bg-card p-3 font-semibold text-navy text-xs">
                        <x-icons.circle-check class="text-brand w-4 h-4 shrink-0" /> WhatsApp updates
                    </div>
                </div>
            </div>
            <div class="relative rounded-3xl overflow-hidden border border-border bg-card p-8 shadow-soft">
                <h3 class="text-xl font-extrabold text-navy mb-4">Jodhpur Shifting & Shipping Categories</h3>
                <ul class="space-y-4">
                    <li class="flex gap-3">
                        <div class="h-6 w-6 rounded-full bg-accent text-brand flex items-center justify-center shrink-0 font-bold text-sm">1</div>
                        <div>
                            <h4 class="font-bold text-navy text-sm sm:text-base">Handicraft & Textile Trading</h4>
                            <p class="text-xs sm:text-sm text-muted-foreground mt-0.5">Shipping block print textiles, metal art crafts, and heritage furniture items from Jaipur factories to Jodhpur hubs.</p>
                        </div>
                    </li>
                    <li class="flex gap-3">
                        <div class="h-6 w-6 rounded-full bg-accent text-brand flex items-center justify-center shrink-0 font-bold text-sm">2</div>
                        <div>
                            <h4 class="font-bold text-navy text-sm sm:text-base">Student Luggage Relocation</h4>
                            <p class="text-xs sm:text-sm text-muted-foreground mt-0.5">Moving books, clothing suitcases, and study materials for students transitioning between universities in Jodhpur.</p>
                        </div>
                    </li>
                    <li class="flex gap-3">
                        <div class="h-6 w-6 rounded-full bg-accent text-brand flex items-center justify-center shrink-0 font-bold text-sm">3</div>
                        <div>
                            <h4 class="font-bold text-navy text-sm sm:text-base">Express Legal Documents Courier</h4>
                            <p class="text-xs sm:text-sm text-muted-foreground mt-0.5">Urgent court documents, contracts, and case files shipped securely to Jodhpur High Court district.</p>
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
                <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">Jaipur to Jodhpur Transit Times</h2>
                <p class="mt-3 text-muted-foreground text-sm sm:text-base leading-relaxed">
                    Select the transport velocity that meets your specific deadlines or business schedules.
                </p>

                <div class="mt-6 overflow-hidden rounded-2xl border border-border bg-card">
                    <table class="w-full text-left text-sm">
                        <thead class="bg-secondary/40 text-navy font-bold">
                            <tr>
                                <th class="p-4">Delivery Mode</th>
                                <th class="p-4">Transit Window</th>
                                <th class="p-4">Best Suited For</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-border">
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">Priority Same-Day (Road Express)</td>
                                <td class="p-4 text-muted-foreground">Within 12 Hours</td>
                                <td class="p-4 text-muted-foreground">Urgent High Court Cases, Medical Shipments</td>
                            </tr>
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">Standard Express</td>
                                <td class="p-4 text-muted-foreground">24 Hours (Next-Day)</td>
                                <td class="p-4 text-muted-foreground">Apparel, Shifting Luggage, Carton boxes</td>
                            </tr>
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">Surface Cargo</td>
                                <td class="p-4 text-muted-foreground">1 - 2 Days</td>
                                <td class="p-4 text-muted-foreground">Heavy Machinery, Commercial Bulk Shipments</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Price factors / Callout -->
            <div class="rounded-3xl bg-brand-gradient p-8 text-white shadow-elevated relative overflow-hidden">
                <div class="absolute -right-6 -top-6 h-24 w-24 rounded-full bg-gold/30 blur-xl"></div>
                <h3 class="text-2xl font-extrabold">Fair & Upfront Pricing</h3>
                <p class="mt-3 text-white/85 text-sm sm:text-base leading-relaxed">
                    Charges are calculated based on weight, volume (dimensional density), packaging, and choice of speed. 
                </p>
                <p class="mt-2 text-white/85 text-sm sm:text-base leading-relaxed">
                    We offer dedicated promotional tariffs for students and corporate employees moving their households to Jodhpur. Contact us to avail special route discounts.
                </p>
                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="https://wa.me/91{{ config('services.info.phone') }}?text=Hi%20JM%20Courier%2C%20I%20want%20to%20know%20shipping%20rates%20from%20Jaipur%20to%20Jodhpur."
                        class="inline-flex justify-center items-center gap-2 rounded-full bg-whatsapp px-4 py-2.5 font-bold text-white shadow-elevated text-sm hover:brightness-105 transition">
                        <x-icons.whatsapp class="w-4 h-4" /> Get Live Estimate
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
                    Engineered to deliver convenience, safety, and rapid transit from Jaipur to Jodhpur.
                </p>
            </div>

            <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.time class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">Same-day pickup</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        Book your parcel pickup before 5:00 PM and our local executive will arrive within 60 minutes.
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
                    <h3 class="mt-4 font-bold text-navy">Intra-State Deals</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        Extremely budget-friendly rates for heavy luggage shipping, students, and B2B wholesalers.
                    </p>
                </div>
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.support class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">Direct Support</h3>
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
            <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">Jaipur to Jodhpur Shipping FAQs</h2>
        </div>

        <div class="mx-auto mt-8 max-w-3xl space-y-2 overflow-hidden px-4">
            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>What is the transit time from Jaipur to Jodhpur?</span>
                    <x-icons.plus class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        Priority courier packages are delivered overnight (24 hours). Same-day delivery options are also available for bookings made early in the morning.
                    </p>
                </div>
            </div>

            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>Do you offer home pickup in Jaipur for Jodhpur packages?</span>
                    <x-icons.plus class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        Yes, doorstep pickup is 100% free across all areas in Jaipur (Mansarovar, Vaishali Nagar, Jhotwara, Jagatpura, Malviya Nagar, Bani Park, Sanganer, Sitapura, Pratap Nagar).
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
