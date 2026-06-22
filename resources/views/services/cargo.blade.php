@extends('layouts.app')

@push('meta')
    <title>Commercial Cargo & Heavy Goods Transport in Jaipur | JM Courier</title>
    <meta name="description" content="Secure and efficient heavy cargo transport, commercial logistics, air cargo, and surface transport services in Jaipur for businesses and manufacturers.">
    <meta name="keywords" content="cargo service jaipur, commercial cargo jaipur, heavy goods transport jaipur, air cargo jaipur, logistics company jaipur">
    <meta property="og:title" content="Commercial Cargo & Heavy Goods Transport in Jaipur | JM Courier">
    <meta property="og:description" content="Secure and efficient heavy cargo transport, commercial logistics, air cargo, and surface transport services in Jaipur for businesses and manufacturers.">
    <meta name="twitter:title" content="Commercial Cargo & Heavy Goods Transport in Jaipur | JM Courier">
    <meta name="twitter:description" content="Secure and efficient heavy cargo transport, commercial logistics, air cargo, and surface transport services in Jaipur for businesses and manufacturers.">
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-hero-gradient text-white">
        <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-24">
            <div
                class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1 text-xs font-bold uppercase tracking-wider backdrop-blur animate-pulse">
                <x-icons.map-pin class="text-gold" /> Bulk Cargo & Logistics Jaipur
            </div>
            <h1 class="mt-4 text-4xl font-extrabold leading-tight sm:text-5xl lg:text-6xl">
                Commercial & Bulk <span class="text-gold">Cargo Services</span> in Jaipur
            </h1>
            <p class="mt-4 text-white/85 sm:text-lg">
                Reliable LTL & FTL transport options from Jaipur for heavy machinery, raw materials, commercial
                inventory, and bulk personal shipments. Managed by professionals.
            </p>
            <div class="mt-7 flex flex-wrap gap-3">
                <a href="https://wa.me/91{{ config('services.info.phone') }}?text=Hi%20JM%20Courier%2C%20I%20want%20to%20get%20a%20quote%20for%20cargo%20transport%20from%20Jaipur."
                    class="inline-flex items-center gap-2 rounded-full bg-whatsapp px-6 py-3 font-bold text-white shadow-elevated hover:brightness-105 hover:-translate-y-0.5 transition">
                    <x-icons.whatsapp class="w-5 h-5" /> Get Cargo Quote
                </a>
                <a href="tel:+91{{ config('services.info.phone') }}"
                    class="inline-flex items-center gap-2 rounded-full bg-danger px-6 py-3 font-bold text-white shadow-soft hover:brightness-110 hover:-translate-y-0.5 transition">
                    <x-icons.phone class="w-5 h-5" /> Call Logistical Expert
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
                    Industrial & Business Logistics
                </div>
                <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">
                    Heavy Cargo Transport Solutions from Jaipur
                </h2>
                <div class="space-y-4 text-foreground/85 text-sm sm:text-base leading-relaxed">
                    <p>
                        Are you managing a manufacturing unit or wholesaling enterprise in Sanganer, Sitapura, or VKI? As a
                        premier choice for commercial cargo services in Jaipur, JM Courier offers specialized transport
                        networks to transport raw materials, factory machines, and bulk inventory.
                    </p>
                    <p>
                        We offer both Less-than-Truckload (LTL) booking—letting you pay only for the weight and volume your
                        cargo occupies—and Full Truckload (FTL) services for absolute container exclusivity. Our logistics
                        experts oversee route clearance, toll manifesting, and e-way bill compliance, reducing loading
                        delays.
                    </p>
                    <p>
                        Our handling staff is fully trained to manage heavy lifts. On-site wooden crating, metal strapping,
                        and heavy bubble wrapping are available for high-value machinery, fragile industrial moulds, and
                        decorative marble artifacts to keep them safe from vibrations.
                    </p>
                    <p>
                        With real-time GPS tracking enabled across our closed-body container fleet, you will receive
                        up-to-date statuses from Jaipur dispatch all the way to final commercial delivery across India.
                    </p>
                </div>

                <div class="flex flex-wrap gap-4 pt-4">
                    <div
                        class="flex items-center gap-2 rounded-xl border border-border bg-card p-3 font-semibold text-navy text-xs">
                        <x-icons.circle-check class="text-brand w-4 h-4 shrink-0" /> Custom Crate Packaging
                    </div>
                    <div
                        class="flex items-center gap-2 rounded-xl border border-border bg-card p-3 font-semibold text-navy text-xs">
                        <x-icons.circle-check class="text-brand w-4 h-4 shrink-0" /> Loading & Forklift Team
                    </div>
                    <div
                        class="flex items-center gap-2 rounded-xl border border-border bg-card p-3 font-semibold text-navy text-xs">
                        <x-icons.circle-check class="text-brand w-4 h-4 shrink-0" /> GST Invoicing & E-Way Bills
                    </div>
                </div>
            </div>
            <div class="relative lg:sticky lg:top-24">
                <div class="relative rounded-3xl overflow-hidden border border-border bg-card p-8">
                    <h3 class="text-xl font-extrabold text-navy mb-4">Cargo We Specialize In</h3>
                    <ul class="space-y-4">
                        <li class="flex gap-3">
                            <div
                                class="h-6 w-6 rounded-full bg-accent text-brand flex items-center justify-center shrink-0 font-bold text-sm">
                                1</div>
                            <div>
                                <h4 class="font-bold text-navy text-sm sm:text-base">Industrial Machinery & Tooling</h4>
                                <p class="text-xs sm:text-sm text-muted-foreground mt-0.5">Heavy industrial tooling,
                                    machinery frames, control panels, and auto parts packed in heavy wooden cases.</p>
                            </div>
                        </li>
                        <li class="flex gap-3">
                            <div
                                class="h-6 w-6 rounded-full bg-accent text-brand flex items-center justify-center shrink-0 font-bold text-sm">
                                2</div>
                            <div>
                                <h4 class="font-bold text-navy text-sm sm:text-base">Bulk Sanganeri Printed Textiles</h4>
                                <p class="text-xs sm:text-sm text-muted-foreground mt-0.5">Apparel bundles, wholesale cotton
                                    fabric rolls, and home furnishings wrapped in protective canvas stacks.</p>
                            </div>
                        </li>
                        <li class="flex gap-3">
                            <div
                                class="h-6 w-6 rounded-full bg-accent text-brand flex items-center justify-center shrink-0 font-bold text-sm">
                                3</div>
                            <div>
                                <h4 class="font-bold text-navy text-sm sm:text-base">Marble Art & Sculptures</h4>
                                <p class="text-xs sm:text-sm text-muted-foreground mt-0.5">Highly fragile marble idols,
                                    craft pillars, and stone articles strapped on custom wood pallets.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- How Cargo Works (Detailed Workflow) -->
    <section class="bg-navy text-white py-16 sm:py-20">
        <div class="mx-auto w-full max-w-7xl px-4 sm:px-6">
            <div class="mx-auto text-center max-w-2xl">
                <div
                    class="mb-3 inline-flex rounded-full bg-white/10 px-3 py-1 text-xs font-bold uppercase tracking-wider text-gold">
                    Our Workflow
                </div>
                <h2 class="text-3xl font-extrabold sm:text-4xl">
                    Our Heavy Cargo Operations Workflow
                </h2>
                <p class="mt-2 text-white/75">
                    A systematized process to dispatch and deliver your bulk loads safely from Jaipur.
                </p>
            </div>

            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-6">
                <div class="relative rounded-2xl bg-white/5 p-6 ring-1 ring-white/10 backdrop-blur">
                    <div class="text-3xl font-extrabold text-gold">01</div>
                    <h3 class="mt-2 font-bold text-base">Load Review</h3>
                    <p class="mt-1 text-xs text-white/75">Our desk assesses the cargo dimensions and weight parameters.</p>
                </div>
                <div class="relative rounded-2xl bg-white/5 p-6 ring-1 ring-white/10 backdrop-blur">
                    <div class="text-3xl font-extrabold text-gold">02</div>
                    <h3 class="mt-2 font-bold text-base">On-Site Packing</h3>
                    <p class="mt-1 text-xs text-white/75">Wooden crating and metal strapping applied on site.</p>
                </div>
                <div class="relative rounded-2xl bg-white/5 p-6 ring-1 ring-white/10 backdrop-blur">
                    <div class="text-3xl font-extrabold text-gold">03</div>
                    <h3 class="mt-2 font-bold text-base">E-Way Manifest</h3>
                    <p class="mt-1 text-xs text-white/75">Verification of GST documents and road bills done prior to
                        loading.</p>
                </div>
                <div class="relative rounded-2xl bg-white/5 p-6 ring-1 ring-white/10 backdrop-blur">
                    <div class="text-3xl font-extrabold text-gold">04</div>
                    <h3 class="mt-2 font-bold text-base">Fleet Loading</h3>
                    <p class="mt-1 text-xs text-white/75">Loaded into secure container vehicles using heavy equipment.</p>
                </div>
                <div class="relative rounded-2xl bg-white/5 p-6 ring-1 ring-white/10 backdrop-blur">
                    <div class="text-3xl font-extrabold text-gold">05</div>
                    <h3 class="mt-2 font-bold text-base">GPS Transit</h3>
                    <p class="mt-1 text-xs text-white/75">Sealed container travels via GPS-tracked main lines.</p>
                </div>
                <div class="relative rounded-2xl bg-white/5 p-6 ring-1 ring-white/10 backdrop-blur">
                    <div class="text-3xl font-extrabold text-gold">06</div>
                    <h3 class="mt-2 font-bold text-base">Unloading</h3>
                    <p class="mt-1 text-xs text-white/75">Delivered to commercial yard or warehouse with verification.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cargo Fleet & Capacity Table -->
    <section class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-20">
        <div class="grid gap-12 lg:grid-cols-2">
            <div>
                <h3 class="text-2xl font-extrabold text-navy sm:text-3xl">Our Logistics Fleet Capacity</h3>
                <p class="mt-2 text-muted-foreground text-sm">We operate structured vehicle sizes out of Jaipur for diverse
                    load volumes.</p>

                <div class="mt-6 overflow-hidden rounded-2xl border border-border bg-card">
                    <table class="w-full text-left text-sm">
                        <thead class="bg-secondary/40 text-navy font-bold">
                            <tr>
                                <th class="p-4">Vehicle Category</th>
                                <th class="p-4">Max Weight Payload</th>
                                <th class="p-4">Ideal Service</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-border">
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">Mahindra Pickup / Tata Ace</td>
                                <td class="p-4 text-muted-foreground">1.5 - 2 Tons</td>
                                <td class="p-4 text-muted-foreground">LTL consolidated local dispatches</td>
                            </tr>
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">Tata 407 / Eicher 14ft</td>
                                <td class="p-4 text-muted-foreground">4 - 6 Tons</td>
                                <td class="p-4 text-muted-foreground">Medium business stock and industrial parts</td>
                            </tr>
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">6-Wheeler Closed Container</td>
                                <td class="p-4 text-muted-foreground">9 - 10 Tons</td>
                                <td class="p-4 text-muted-foreground">Pan-India heavy textiles and office goods</td>
                            </tr>
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">10-Wheeler Taurus / Multi-axle</td>
                                <td class="p-4 text-muted-foreground">16 - 25 Tons</td>
                                <td class="p-4 text-muted-foreground">FTL machinery loads and raw inputs</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div>
                <h3 class="text-2xl font-extrabold text-navy sm:text-3xl">Transit & Security Specs</h3>
                <p class="mt-2 text-muted-foreground text-sm">Our core operations feature specialized cargo safety
                    standards.</p>

                <div class="mt-6 space-y-4">
                    <div class="rounded-2xl border border-border bg-card p-5 hover:border-brand/40 transition">
                        <h4 class="font-bold text-navy flex justify-between">
                            <span>LTL (Less-Than-Truckload)</span>
                            <span class="text-xs px-2 py-0.5 rounded-full bg-accent text-brand">Budget Friendly</span>
                        </h4>
                        <p class="text-xs text-muted-foreground mt-1">Consolidate your heavy boxes, marble blocks, or
                            textile bales with other commercial shipments at optimized rates.</p>
                        <ul class="mt-3 grid grid-cols-2 gap-2 text-xs text-muted-foreground">
                            <li class="flex items-center gap-1.5"><span
                                    class="w-1.5 h-1.5 bg-brand rounded-full"></span>Pay only by occupied volume</li>
                            <li class="flex items-center gap-1.5"><span
                                    class="w-1.5 h-1.5 bg-brand rounded-full"></span>Daily Sanganer pickups</li>
                            <li class="flex items-center gap-1.5"><span
                                    class="w-1.5 h-1.5 bg-brand rounded-full"></span>Regular metro hub drops</li>
                            <li class="flex items-center gap-1.5"><span
                                    class="w-1.5 h-1.5 bg-brand rounded-full"></span>Standard transit timelines</li>
                        </ul>
                    </div>

                    <div class="rounded-2xl border border-border bg-card p-5 hover:border-brand/40 transition">
                        <h4 class="font-bold text-navy flex justify-between">
                            <span>FTL (Full Truckload)</span>
                            <span class="text-xs px-2 py-0.5 rounded-full bg-secondary/85 text-navy">Priority Direct</span>
                        </h4>
                        <p class="text-xs text-muted-foreground mt-1">Book an exclusive vehicle for sensitive machinery,
                            high-volume textile rolls, or complex factory inputs.</p>
                        <ul class="mt-3 grid grid-cols-2 gap-2 text-xs text-muted-foreground">
                            <li class="flex items-center gap-1.5"><span
                                    class="w-1.5 h-1.5 bg-brand rounded-full"></span>Exclusive container</li>
                            <li class="flex items-center gap-1.5"><span
                                    class="w-1.5 h-1.5 bg-brand rounded-full"></span>Zero intermediate sorting</li>
                            <li class="flex items-center gap-1.5"><span
                                    class="w-1.5 h-1.5 bg-brand rounded-full"></span>Point-to-point speed</li>
                            <li class="flex items-center gap-1.5"><span
                                    class="w-1.5 h-1.5 bg-brand rounded-full"></span>GPS geo-fence alerts</li>
                        </ul>
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
                    Jaipur's Most Reliable Cargo Network
                </h2>
            </div>
            <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.shield class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">Transit Insurance</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        Full value transit insurance option protects high-value commercial shipments.
                    </p>
                </div>
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.boxes class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">LTL Consolidated Rates</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        Pay only for the space your cargo takes, saving substantial logistics costs.
                    </p>
                </div>
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.truck class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">Modern Fleet</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        Closed-container vehicles to protect cargo from dust, heat, and rain.
                    </p>
                </div>
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.support class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">Single Point of Contact</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        A dedicated logistics coordinator to supervise your dispatch and tracking.
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
            <a href="{{ route('services.luggage') }}"
                class="group rounded-2xl border border-border bg-card p-6 hover:-translate-y-1 hover:shadow-soft transition block">
                <div class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-accent text-brand">
                    <x-icons.briefcase class="w-5 h-5" />
                </div>
                <h4 class="mt-4 font-bold text-navy text-lg group-hover:text-brand transition">Luggage Transport</h4>
                <p class="text-xs text-muted-foreground mt-1">Secure suitcase, trunk, and PG shipping for Jaipur students
                    and relocating families.</p>
            </a>
            <a href="{{ route('services.parcel') }}"
                class="group rounded-2xl border border-border bg-card p-6 hover:-translate-y-1 hover:shadow-soft transition block">
                <div class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-accent text-brand">
                    <x-icons.boxes class="w-5 h-5" />
                </div>
                <h4 class="mt-4 font-bold text-navy text-lg group-hover:text-brand transition">Parcel Delivery</h4>
                <p class="text-xs text-muted-foreground mt-1">Send bulk boxes, merchandise cartons, and wholesale packets
                    with volume discounts.</p>
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
            <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">Cargo Logistics FAQs</h2>
        </div>
        <div class="mx-auto mt-8 max-w-3xl space-y-2 overflow-hidden px-4">
            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button
                    class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>What is the difference between LTL and FTL cargo transport?</span>
                    <x-icons.plus
                        class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div
                    class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        LTL (Less-than-Truckload) means your cargo shares container space with other shipments, letting you
                        pay only for the weight/volume you occupy. FTL (Full Truckload) books the entire container
                        specifically for your shipment, offering faster direct transit without intermediate stops.
                    </p>
                </div>
            </div>
            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button
                    class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>Do you offer custom wooden box or crate packaging in Jaipur?</span>
                    <x-icons.plus
                        class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div
                    class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        Yes, we offer complete customized on-site wooden box, crate, and pallet packaging solutions in
                        Jaipur for fragile items, industrial machinery, marble sculpture blocks, and automotive parts.
                    </p>
                </div>
            </div>
            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button
                    class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>How is cargo shipping pricing calculated?</span>
                    <x-icons.plus
                        class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div
                    class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        Cargo rates are calculated based on weight, dimensions (chargeable volumetric weight), type of
                        loading material, pickup address in Jaipur, and destination city distance. WhatsApp our desk for an
                        instant customized estimate.
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
