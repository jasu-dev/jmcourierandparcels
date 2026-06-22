@extends('layouts.app')

@push('meta')
    <title>Bulk Parcel Delivery & Carton Shipping Services in Jaipur</title>
    <meta name="description" content="Send bulk parcels, cartons, and boxes from Jaipur to anywhere in India. Competitive rates, door-to-door parcel collection, and real-time tracking.">
    <meta name="keywords" content="parcel delivery jaipur, bulk parcel shipping, box courier jaipur, carton delivery service, cheap parcel delivery jaipur">
    <meta property="og:title" content="Bulk Parcel Delivery & Carton Shipping Services in Jaipur">
    <meta property="og:description" content="Send bulk parcels, cartons, and boxes from Jaipur to anywhere in India. Competitive rates, door-to-door parcel collection, and real-time tracking.">
    <meta name="twitter:title" content="Bulk Parcel Delivery & Carton Shipping Services in Jaipur">
    <meta name="twitter:description" content="Send bulk parcels, cartons, and boxes from Jaipur to anywhere in India. Competitive rates, door-to-door parcel collection, and real-time tracking.">
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-hero-gradient text-white">
        <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-24">
            <div
                class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1 text-xs font-bold uppercase tracking-wider backdrop-blur animate-pulse">
                <x-icons.map-pin class="text-gold" /> Box & Carton Shipping Jaipur
            </div>
            <h1 class="mt-4 text-4xl font-extrabold leading-tight sm:text-5xl lg:text-6xl">
                Bulk <span class="text-gold">Carton & Parcel Delivery</span> in Jaipur
            </h1>
            <p class="mt-4 text-white/85 sm:text-lg">
                Send multiple parcels, commercial boxes, or family gift cartons securely from Jaipur. Volume discounts, door
                pickup, and rapid transit via Air or Surface.
            </p>
            <div class="mt-7 flex flex-wrap gap-3">
                <a href="https://wa.me/91{{ config('services.info.phone') }}?text=Hi%20JM%20Courier%2C%20I%20want%20to%20send%20bulk%20parcels%20from%20Jaipur."
                    class="inline-flex items-center gap-2 rounded-full bg-whatsapp px-6 py-3 font-bold text-white shadow-elevated hover:brightness-105 hover:-translate-y-0.5 transition">
                    <x-icons.whatsapp class="w-5 h-5" /> Book Bulk Pickup
                </a>
                <a href="tel:+91{{ config('services.info.phone') }}"
                    class="inline-flex items-center gap-2 rounded-full bg-danger px-6 py-3 font-bold text-white shadow-soft hover:brightness-110 hover:-translate-y-0.5 transition">
                    <x-icons.phone class="w-5 h-5" /> Get Volume Rates
                </a>
            </div>
        </div>
    </section>

    <!-- Main Content & Details -->
    <section class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-20">
        <div class="grid gap-12 lg:grid-cols-2 items-start">
            <div class="space-y-6">
                <div
                    class="mb-3 inline-flex rounded-full bg-accent px-3 py-1 text-xs font-bold uppercase tracking-wider text-brand">
                    Commercial & Bulk Logistics
                </div>
                <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">
                    Secure Carton & Box Shipping Services in Jaipur
                </h2>
                <div class="space-y-4 text-foreground/85 text-sm sm:text-base leading-relaxed">
                    <p>
                        Are you a textile manufacturer in Sanganer or Johri Bazar sending fabric rolls? A handicraft dealer
                        dispatching wooden items? Or a family shipping heavy festival boxes to relatives? JM Courier is your
                        primary solution for **bulk parcel delivery services in Jaipur**.
                    </p>
                    <p>
                        We specialize in handling bulk cartoon boxes, crates, and bundles, providing full weight
                        verification, heavy strapping, and waterproof outer wrapping.
                    </p>
                    <p>
                        Our logistics desk coordinates direct route optimization, allowing us to offer the lowest volumetric
                        and weight-based rates for regular commercial dispatches from Jaipur.
                    </p>
                    <p>
                        We cater extensively to local traders, wholesalers, and e-commerce startups looking for reliable
                        ground shipping to major e-commerce hubs and warehouses nationwide. Our collection executives pack,
                        weigh, and seal your parcels directly on-site to ensure they are transit-ready.
                    </p>
                </div>
                <div class="flex flex-wrap gap-4 pt-4">
                    <div
                        class="flex items-center gap-2 rounded-xl border border-border bg-card p-3 font-semibold text-navy text-xs">
                        <x-icons.circle-check class="text-brand w-4 h-4 shrink-0" /> Bulk Weight Discount
                    </div>
                    <div
                        class="flex items-center gap-2 rounded-xl border border-border bg-card p-3 font-semibold text-navy text-xs">
                        <x-icons.circle-check class="text-brand w-4 h-4 shrink-0" /> Waterproof Wrapping
                    </div>
                    <div
                        class="flex items-center gap-2 rounded-xl border border-border bg-card p-3 font-semibold text-navy text-xs">
                        <x-icons.circle-check class="text-brand w-4 h-4 shrink-0" /> Sanganer Dispatch Hub
                    </div>
                </div>
            </div>
            <div class="relative lg:sticky lg:top-24">
                <div class="relative rounded-3xl overflow-hidden border border-border bg-card p-8">
                    <h3 class="text-xl font-extrabold text-navy mb-4">What Parcels We Deliver</h3>
                    <ul class="space-y-4">
                        <li class="flex gap-3">
                            <div
                                class="h-6 w-6 rounded-full bg-accent text-brand flex items-center justify-center shrink-0 font-bold text-sm">
                                1</div>
                            <div>
                                <h4 class="font-bold text-navy text-sm sm:text-base">Cardboard Cartons & Boxes</h4>
                                <p class="text-xs sm:text-sm text-muted-foreground mt-0.5">Heavy cardboard boxes filled with
                                    clothes, household goods, utensils, and corporate merchandise.</p>
                            </div>
                        </li>
                        <li class="flex gap-3">
                            <div
                                class="h-6 w-6 rounded-full bg-accent text-brand flex items-center justify-center shrink-0 font-bold text-sm">
                                2</div>
                            <div>
                                <h4 class="font-bold text-navy text-sm sm:text-base">Textile & Apparel Bundles</h4>
                                <p class="text-xs sm:text-sm text-muted-foreground mt-0.5">Apparel bundles and rolls packed
                                    in secure sacks, ready for dispatch to major retail hubs.</p>
                            </div>
                        </li>
                        <li class="flex gap-3">
                            <div
                                class="h-6 w-6 rounded-full bg-accent text-brand flex items-center justify-center shrink-0 font-bold text-sm">
                                3</div>
                            <div>
                                <h4 class="font-bold text-navy text-sm sm:text-base">Fragile Handicraft Packages</h4>
                                <p class="text-xs sm:text-sm text-muted-foreground mt-0.5">Jaipur marble articles, wooden
                                    artifacts, and blue pottery items packed using double bubble-wrap layers.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- How Bulk Parcel Shipping Works (Timeline) -->
    <section class="bg-navy text-white py-16 sm:py-20">
        <div class="mx-auto w-full max-w-7xl px-4 sm:px-6">
            <div class="mx-auto text-center max-w-2xl">
                <div
                    class="mb-3 inline-flex rounded-full bg-white/10 px-3 py-1 text-xs font-bold uppercase tracking-wider text-gold">
                    Our Workflow
                </div>
                <h2 class="text-3xl font-extrabold sm:text-4xl">
                    Our Bulk Parcel Dispatch Workflow
                </h2>
                <p class="mt-2 text-white/75">
                    How we pick up, strap, consolidate, and deliver bulk boxes from Jaipur.
                </p>
            </div>

            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-6">
                <div class="relative rounded-2xl bg-white/5 p-6 ring-1 ring-white/10 backdrop-blur">
                    <div class="text-3xl font-extrabold text-gold">01</div>
                    <h3 class="mt-2 font-bold text-base">Scheduling</h3>
                    <p class="mt-1 text-xs text-white/75">Book on our portal or phone line, specifying box count.</p>
                </div>
                <div class="relative rounded-2xl bg-white/5 p-6 ring-1 ring-white/10 backdrop-blur">
                    <div class="text-3xl font-extrabold text-gold">02</div>
                    <h3 class="mt-2 font-bold text-base">Box Inspection</h3>
                    <p class="mt-1 text-xs text-white/75">Our pickup team inspects carton thickness on site.</p>
                </div>
                <div class="relative rounded-2xl bg-white/5 p-6 ring-1 ring-white/10 backdrop-blur">
                    <div class="text-3xl font-extrabold text-gold">03</div>
                    <h3 class="mt-2 font-bold text-base">Strapping</h3>
                    <p class="mt-1 text-xs text-white/75">Heavy-duty plastic strapping applied around seams.</p>
                </div>
                <div class="relative rounded-2xl bg-white/5 p-6 ring-1 ring-white/10 backdrop-blur">
                    <div class="text-3xl font-extrabold text-gold">04</div>
                    <h3 class="mt-2 font-bold text-base">Consolidation</h3>
                    <p class="mt-1 text-xs text-white/75">Parcels are consolidated at our Jaipur sorting yard.</p>
                </div>
                <div class="relative rounded-2xl bg-white/5 p-6 ring-1 ring-white/10 backdrop-blur">
                    <div class="text-3xl font-extrabold text-gold">05</div>
                    <h3 class="mt-2 font-bold text-base">Road/Air Transit</h3>
                    <p class="mt-1 text-xs text-white/75">Routed to target city based on selected speed tier.</p>
                </div>
                <div class="relative rounded-2xl bg-white/5 p-6 ring-1 ring-white/10 backdrop-blur">
                    <div class="text-3xl font-extrabold text-gold">06</div>
                    <h3 class="mt-2 font-bold text-base">Safe Handover</h3>
                    <p class="mt-1 text-xs text-white/75">Delivered and signed off by the receiving warehouse or retail
                        shop.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Parcel Rates Estimator & Box Advice -->
    <section class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-20">
        <div class="grid gap-12 lg:grid-cols-2">
            <div>
                <h3 class="text-2xl font-extrabold text-navy sm:text-3xl">Volume Rates Estimates</h3>
                <p class="mt-2 text-muted-foreground text-sm">Typical weight tier rates from Jaipur to major state capitals.
                </p>

                <div class="mt-6 overflow-hidden rounded-2xl border border-border bg-card">
                    <table class="w-full text-left text-sm">
                        <thead class="bg-secondary/40 text-navy font-bold">
                            <tr>
                                <th class="p-4">Total Weight Tier</th>
                                <th class="p-4">Discount Rate Structure</th>
                                <th class="p-4">Ideal For</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-border">
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">20 - 50 kg</td>
                                <td class="p-4 text-muted-foreground">Standard Commercial Tariff</td>
                                <td class="p-4 text-muted-foreground">Small retail parcels & house shift boxes</td>
                            </tr>
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">50 - 200 kg</td>
                                <td class="p-4 text-muted-foreground">15% Bulk Discount Applied</td>
                                <td class="p-4 text-muted-foreground">Handicraft dispatches & textile boxes</td>
                            </tr>
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">200 - 500 kg</td>
                                <td class="p-4 text-muted-foreground">25% Volume Discount Applied</td>
                                <td class="p-4 text-muted-foreground">Regular wholesale stock dispatches</td>
                            </tr>
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">500+ kg</td>
                                <td class="p-4 text-muted-foreground">Custom Corporate Contract Rate</td>
                                <td class="p-4 text-muted-foreground">Daily industrial dispatches & exporters</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div>
                <h3 class="text-2xl font-extrabold text-navy sm:text-3xl">Carton Packing Recommendations</h3>
                <p class="mt-2 text-muted-foreground text-sm">Simple packaging guidelines to assure safety of cardboard
                    parcels.</p>

                <div class="mt-6 space-y-4">
                    <div class="rounded-2xl border border-border bg-card p-5 hover:border-brand/40 transition">
                        <h4 class="font-bold text-navy flex justify-between">
                            <span>Use 5-Ply or 7-Ply Cartons</span>
                            <span class="text-xs px-2 py-0.5 rounded-full bg-accent text-brand">Critical</span>
                        </h4>
                        <p class="text-xs text-muted-foreground mt-1">Single-walled thin cardboard boxes break under
                            pressure. Always pack heavy volumes in multi-layered heavy-duty cartons (5-ply or 7-ply) to bear
                            transport stack loads.</p>
                    </div>

                    <div class="rounded-2xl border border-border bg-card p-5 hover:border-brand/40 transition">
                        <h4 class="font-bold text-navy flex justify-between">
                            <span>Add Internal Padding</span>
                            <span class="text-xs px-2 py-0.5 rounded-full bg-secondary/85 text-navy">Pro Tip</span>
                        </h4>
                        <p class="text-xs text-muted-foreground mt-1">Fill empty box corners with crumpled paper, bubble
                            wrap, or styrofoam peanuts. Empty space inside a parcel leads to structural collapse when
                            stacked.</p>
                    </div>
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
                    Why Choose Us
                </div>
                <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">
                    Jaipur's Most Reliable Parcel Delivery
                </h2>
            </div>
            <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.price class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">Weight-Based Discounts</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        The more you ship, the lower the per-kg rate. Perfect for volume shippers.
                    </p>
                </div>
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.boxes class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">Outer Box Strapping</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        Reinforced box strapping prevents bursts and tears during rough transit.
                    </p>
                </div>
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.shield class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">Moisture Protection</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        Sacks and wraps protect your textile and paper parcels against humidity.
                    </p>
                </div>
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.support class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">Bulk Dispatch Desk</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        Dedicated coordination team to handle pickup manifests and e-way bill verification.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Internal Cross Linking Section (NEW) -->
    <section class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-20 border-t border-border/50">
        <div class="max-w-2xl">
            <div
                class="mb-3 inline-flex rounded-full bg-accent px-3 py-1 text-xs font-bold uppercase tracking-wider text-brand">
                Explore More
            </div>
            <h2 class="text-2xl font-extrabold text-navy sm:text-3xl">Explore Our Other Services</h2>
            <p class="mt-2 text-muted-foreground text-sm">Need smaller, express, or student-specific shipping from Jaipur?
            </p>
        </div>
        <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <a href="{{ route('services.courier') }}"
                class="group rounded-2xl border border-border bg-card p-6 hover:-translate-y-1 hover:shadow-soft transition block">
                <div class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-accent text-brand">
                    <x-icons.package class="w-5 h-5" />
                </div>
                <h4 class="mt-4 font-bold text-navy text-lg group-hover:text-brand transition">Courier Services</h4>
                <p class="text-xs text-muted-foreground mt-1">Express door-to-door delivery for documents, legal files, and
                    tiny packages from Jaipur.</p>
            </a>
            <a href="{{ route('services.cargo') }}"
                class="group rounded-2xl border border-border bg-card p-6 hover:-translate-y-1 hover:shadow-soft transition block">
                <div class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-accent text-brand">
                    <x-icons.truck class="w-5 h-5" />
                </div>
                <h4 class="mt-4 font-bold text-navy text-lg group-hover:text-brand transition">Cargo Services</h4>
                <p class="text-xs text-muted-foreground mt-1">LTL & FTL cargo solutions for heavy machinery and
                    commercial logistics from Jaipur.</p>
            </a>
            <a href="{{ route('services.luggage') }}"
                class="group rounded-2xl border border-border bg-card p-6 hover:-translate-y-1 hover:shadow-soft transition block">
                <div class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-accent text-brand">
                    <x-icons.briefcase class="w-5 h-5" />
                </div>
                <h4 class="mt-4 font-bold text-navy text-lg group-hover:text-brand transition">Luggage Transport</h4>
                <p class="text-xs text-muted-foreground mt-1">Secure suitcase, trunk, and PG shipping for Jaipur students
                    and relocating families.</p>
            </a>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-20 bg-secondary/30 rounded-3xl mb-12">
        <div class="mx-auto text-center max-w-2xl">
            <div
                class="mb-3 inline-flex rounded-full bg-accent px-3 py-1 text-xs font-bold uppercase tracking-wider text-brand">
                FAQ
            </div>
            <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">Bulk Parcel FAQs</h2>
        </div>
        <div class="mx-auto mt-8 max-w-3xl space-y-2 overflow-hidden px-4">
            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button
                    class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>Do you provide packing materials or carton boxes?</span>
                    <x-icons.plus
                        class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div
                    class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        Yes. We can supply durable multi-layered cardboard boxes, bubble wrap, packing tapes, and heavy-duty
                        box strapping services on request. Tell us your dimensions beforehand so our team can bring them.
                    </p>
                </div>
            </div>
            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button
                    class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>What is the minimum weight requirement for bulk rates?</span>
                    <x-icons.plus
                        class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div
                    class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        Our special discounted commercial and bulk parcel rates apply starting from 50kg or above. For
                        smaller packages, we offer highly competitive standard domestic courier tariffs.
                    </p>
                </div>
            </div>
            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button
                    class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>Can you pick up bulk parcels directly from manufacturing areas like Sanganer?</span>
                    <x-icons.plus
                        class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div
                    class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        Absolutely. We regularly pick up bulk shipments from Sanganer, Sitapura Industrial Area, Mansarovar,
                        Johri Bazar, Malviya Nagar, and all commercial pockets of Jaipur.
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
