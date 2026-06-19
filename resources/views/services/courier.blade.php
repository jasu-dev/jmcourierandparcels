@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-hero-gradient text-white">
        <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-24">
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1 text-xs font-bold uppercase tracking-wider backdrop-blur animate-pulse">
                    <x-icons.map-pin class="text-gold" /> Jaipur's Premium Domestic Courier
                </div>
                <h1 class="mt-4 text-4xl font-extrabold leading-tight sm:text-5xl lg:text-6xl">
                    Reliable Domestic <span class="text-gold">Courier Services</span> in Jaipur
                </h1>
                <p class="mt-4 text-white/85 sm:text-lg max-w-xl">
                    Get fast, secure, and affordable door-to-door courier delivery from Jaipur to all major cities across India. Perfect for urgent documents, corporate samples, and small packages.
                </p>
                <div class="mt-7 flex flex-wrap gap-3">
                    <a href="https://wa.me/919000000000?text=Hi%20JM%20Courier%2C%20I%20want%20to%20book%20a%20courier%20pickup%20from%20Jaipur."
                        class="inline-flex items-center gap-2 rounded-full bg-whatsapp px-6 py-3 font-bold text-white shadow-elevated hover:brightness-105 hover:-translate-y-0.5 transition">
                        <x-icons.whatsapp class="w-5 h-5" /> Book Express Pickup
                    </a>
                    <a href="tel:+919000000000"
                        class="inline-flex items-center gap-2 rounded-full bg-danger px-6 py-3 font-bold text-white shadow-soft hover:brightness-110 hover:-translate-y-0.5 transition">
                        <x-icons.phone class="w-5 h-5" /> Call Now
                    </a>
                </div>
                <div class="mt-8 grid max-w-lg grid-cols-3 gap-4 text-center">
                    <div class="rounded-2xl bg-white/10 p-3 backdrop-blur border border-white/5 shadow-soft">
                        <div class="text-xl font-extrabold text-gold sm:text-2xl">Same-Day</div>
                        <div class="text-[10px] uppercase tracking-wider text-white/70">Jaipur Pickup</div>
                    </div>
                    <div class="rounded-2xl bg-white/10 p-3 backdrop-blur border border-white/5 shadow-soft">
                        <div class="text-xl font-extrabold text-gold sm:text-2xl">24-48 Hrs</div>
                        <div class="text-[10px] uppercase tracking-wider text-white/70">Metro Delivery</div>
                    </div>
                    <div class="rounded-2xl bg-white/10 p-3 backdrop-blur border border-white/5 shadow-soft">
                        <div class="text-xl font-extrabold text-gold sm:text-2xl">100%</div>
                        <div class="text-[10px] uppercase tracking-wider text-white/70">Tracked &amp; Insured</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Section (Deep Copy) -->
    <section class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-20">
        <div class="grid gap-12 lg:grid-cols-2 items-start">
            <div class="space-y-6">
                <div class="mb-3 inline-flex rounded-full bg-accent px-3 py-1 text-xs font-bold uppercase tracking-wider text-brand">
                    Premium Courier Solutions
                </div>
                <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">
                    Fast Document &amp; Small Parcel Delivery Across India
                </h2>
                <div class="space-y-4 text-foreground/85 text-sm sm:text-base leading-relaxed">
                    <p>
                        Are you looking for the **best courier services in Jaipur** to send a critical document or a retail parcel? At JM Courier, we provide tailored, secure, and fast domestic logistics from Jaipur to all major Indian cities. We serve individuals, small business owners, corporate houses, and institutions daily.
                    </p>
                    <p>
                        Our specialized domestic network guarantees quick collection directly from Sanganer, Mansarovar, C-Scheme, Vaishali Nagar, Malviya Nagar, Raja Park, and other parts of Jaipur. If you book before 5:00 PM, our field executive will collect your shipment from your home or office on the very same day.
                    </p>
                    <p>
                        We use high-grade security bags, bubble wrap, and corrugated envelopes to shield time-sensitive documents, bank draft envelopes, medical records, legal contracts, and electronic gadgets from weather damage and rough handling.
                    </p>
                    <p>
                        With priority sorting at our Jaipur hub and express channels, we drastically cut transit times to central business districts across India. You get instant updates from dispatch to final delivery, ensuring peace of mind throughout the transit cycle.
                    </p>
                </div>
                <div class="flex flex-wrap gap-4 pt-4">
                    <div class="flex items-center gap-2 rounded-xl border border-border bg-card p-3 font-semibold text-navy text-sm shadow-soft">
                        <x-icons.circle-check class="text-brand w-5 h-5 shrink-0" /> Free Doorstep Pickup
                    </div>
                    <div class="flex items-center gap-2 rounded-xl border border-border bg-card p-3 font-semibold text-navy text-sm shadow-soft">
                        <x-icons.circle-check class="text-brand w-5 h-5 shrink-0" /> Real-time SMS Updates
                    </div>
                    <div class="flex items-center gap-2 rounded-xl border border-border bg-card p-3 font-semibold text-navy text-sm shadow-soft">
                        <x-icons.circle-check class="text-brand w-5 h-5 shrink-0" /> Corporate Billing Options
                    </div>
                </div>
            </div>
            <div class="relative lg:sticky lg:top-24">
                <div class="absolute -inset-6 rounded-[2rem] bg-gold/10 blur-2xl" aria-hidden="true"></div>
                <div class="relative rounded-3xl overflow-hidden shadow-elevated border border-border bg-card p-8">
                    <h3 class="text-xl font-extrabold text-navy mb-4">What We Carry from Jaipur</h3>
                    <ul class="space-y-4">
                        <li class="flex gap-3">
                            <div class="h-6 w-6 rounded-full bg-accent text-brand flex items-center justify-center shrink-0 font-bold text-sm">1</div>
                            <div>
                                <h4 class="font-bold text-navy text-sm sm:text-base">Time-Sensitive Business Documents</h4>
                                <p class="text-xs sm:text-sm text-muted-foreground mt-0.5">Tenders, legal deeds, contracts, and transcripts sealed in security envelopes.</p>
                            </div>
                        </li>
                        <li class="flex gap-3">
                            <div class="h-6 w-6 rounded-full bg-accent text-brand flex items-center justify-center shrink-0 font-bold text-sm">2</div>
                            <div>
                                <h4 class="font-bold text-navy text-sm sm:text-base">Corporate Samples &amp; Gifts</h4>
                                <p class="text-xs sm:text-sm text-muted-foreground mt-0.5">Product prototypes, apparel samples from Jaipur weavers, and festival gift packs.</p>
                            </div>
                        </li>
                        <li class="flex gap-3">
                            <div class="h-6 w-6 rounded-full bg-accent text-brand flex items-center justify-center shrink-0 font-bold text-sm">3</div>
                            <div>
                                <h4 class="font-bold text-navy text-sm sm:text-base">Medicines &amp; Diagnostic Kits</h4>
                                <p class="text-xs sm:text-sm text-muted-foreground mt-0.5">Urgent pharmacy orders, cold-chain diagnostic kits, and health documents.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section (Detailed Timeline) -->
    <section class="bg-navy text-white py-16 sm:py-20">
        <div class="mx-auto w-full max-w-7xl px-4 sm:px-6">
            <div class="mx-auto text-center max-w-2xl">
                <div class="mb-3 inline-flex rounded-full bg-white/10 px-3 py-1 text-xs font-bold uppercase tracking-wider text-gold">
                    Our Workflow
                </div>
                <h2 class="text-3xl font-extrabold sm:text-4xl">
                    Our Step-by-Step Courier Process
                </h2>
                <p class="mt-2 text-white/75">
                    How we pick up, sort, and deliver your courier securely from Jaipur.
                </p>
            </div>
            
            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-6">
                <div class="relative rounded-2xl bg-white/5 p-6 ring-1 ring-white/10 backdrop-blur">
                    <div class="text-3xl font-extrabold text-gold">01</div>
                    <h3 class="mt-2 font-bold text-base">Book Pickup</h3>
                    <p class="mt-1 text-xs text-white/75">Call or WhatsApp us to request a courier pickup.</p>
                </div>
                <div class="relative rounded-2xl bg-white/5 p-6 ring-1 ring-white/10 backdrop-blur">
                    <div class="text-3xl font-extrabold text-gold">02</div>
                    <h3 class="mt-2 font-bold text-base">Doorstep Prep</h3>
                    <p class="mt-1 text-xs text-white/75">Executive collects, weighs, and packs the document.</p>
                </div>
                <div class="relative rounded-2xl bg-white/5 p-6 ring-1 ring-white/10 backdrop-blur">
                    <div class="text-3xl font-extrabold text-gold">03</div>
                    <h3 class="mt-2 font-bold text-base">Barcode Label</h3>
                    <p class="mt-1 text-xs text-white/75">Unique tracking code is affixed for real-time visibility.</p>
                </div>
                <div class="relative rounded-2xl bg-white/5 p-6 ring-1 ring-white/10 backdrop-blur">
                    <div class="text-3xl font-extrabold text-gold">04</div>
                    <h3 class="mt-2 font-bold text-base">Jaipur Sorting</h3>
                    <p class="mt-1 text-xs text-white/75">Sorted by region at our Jaipur logistics hub.</p>
                </div>
                <div class="relative rounded-2xl bg-white/5 p-6 ring-1 ring-white/10 backdrop-blur">
                    <div class="text-3xl font-extrabold text-gold">05</div>
                    <h3 class="mt-2 font-bold text-base">Express Transit</h3>
                    <p class="mt-1 text-xs text-white/75">Shipped via priority air/surface cargo lines.</p>
                </div>
                <div class="relative rounded-2xl bg-white/5 p-6 ring-1 ring-white/10 backdrop-blur">
                    <div class="text-3xl font-extrabold text-gold">06</div>
                    <h3 class="mt-2 font-bold text-base">Doorstep Drop</h3>
                    <p class="mt-1 text-xs text-white/75">Securely handed over to the receiver with confirmation.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Routes & Comparison -->
    <section class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-20">
        <div class="grid gap-12 lg:grid-cols-2">
            <div>
                <h3 class="text-2xl font-extrabold text-navy sm:text-3xl">Popular Express Courier Routes</h3>
                <p class="mt-2 text-muted-foreground text-sm">Regular express shipments depart daily from Jaipur to major corridors.</p>
                
                <div class="mt-6 overflow-hidden rounded-2xl border border-border bg-card">
                    <table class="w-full text-left text-sm">
                        <thead class="bg-secondary/40 text-navy font-bold">
                            <tr>
                                <th class="p-4">Destination from Jaipur</th>
                                <th class="p-4">Air Express</th>
                                <th class="p-4">Surface Mode</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-border">
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">Delhi NCR</td>
                                <td class="p-4 text-muted-foreground">Next-Day (24h)</td>
                                <td class="p-4 text-muted-foreground">1-2 Business Days</td>
                            </tr>
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">Mumbai &amp; Pune</td>
                                <td class="p-4 text-muted-foreground">1-2 Days</td>
                                <td class="p-4 text-muted-foreground">3-4 Business Days</td>
                            </tr>
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">Bangalore &amp; Chennai</td>
                                <td class="p-4 text-muted-foreground">1-2 Days</td>
                                <td class="p-4 text-muted-foreground">4-5 Business Days</td>
                            </tr>
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">Hyderabad</td>
                                <td class="p-4 text-muted-foreground">2 Days</td>
                                <td class="p-4 text-muted-foreground">4-5 Business Days</td>
                            </tr>
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">Kolkata</td>
                                <td class="p-4 text-muted-foreground">2-3 Days</td>
                                <td class="p-4 text-muted-foreground">5-6 Business Days</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div>
                <h3 class="text-2xl font-extrabold text-navy sm:text-3xl">Service Features Comparison</h3>
                <p class="mt-2 text-muted-foreground text-sm">Choose the courier speed and features that match your timeline.</p>
                
                <div class="mt-6 space-y-4">
                    <div class="rounded-2xl border border-border bg-card p-5 hover:border-brand/40 transition">
                        <h4 class="font-bold text-navy flex justify-between">
                            <span>Priority Air Express</span>
                            <span class="text-xs px-2 py-0.5 rounded-full bg-accent text-brand">Fastest</span>
                        </h4>
                        <p class="text-xs text-muted-foreground mt-1">Dedicated priority air cargo slots for documents, files, and high-value prototypes.</p>
                        <ul class="mt-3 grid grid-cols-2 gap-2 text-xs text-muted-foreground">
                            <li class="flex items-center gap-1.5"><span class="w-1.5 h-1.5 bg-brand rounded-full"></span>Next-day delivery option</li>
                            <li class="flex items-center gap-1.5"><span class="w-1.5 h-1.5 bg-brand rounded-full"></span>Dedicated sorting queue</li>
                            <li class="flex items-center gap-1.5"><span class="w-1.5 h-1.5 bg-brand rounded-full"></span>WhatsApp tracking support</li>
                            <li class="flex items-center gap-1.5"><span class="w-1.5 h-1.5 bg-brand rounded-full"></span>Highest security handling</li>
                        </ul>
                    </div>

                    <div class="rounded-2xl border border-border bg-card p-5 hover:border-brand/40 transition">
                        <h4 class="font-bold text-navy flex justify-between">
                            <span>Standard Ground Courier</span>
                            <span class="text-xs px-2 py-0.5 rounded-full bg-secondary/80 text-navy">Economic</span>
                        </h4>
                        <p class="text-xs text-muted-foreground mt-1">Cost-efficient overland transport for larger folders, heavy books, and non-urgent files.</p>
                        <ul class="mt-3 grid grid-cols-2 gap-2 text-xs text-muted-foreground">
                            <li class="flex items-center gap-1.5"><span class="w-1.5 h-1.5 bg-brand rounded-full"></span>Lowest price point</li>
                            <li class="flex items-center gap-1.5"><span class="w-1.5 h-1.5 bg-brand rounded-full"></span>Reliable surface transit</li>
                            <li class="flex items-center gap-1.5"><span class="w-1.5 h-1.5 bg-brand rounded-full"></span>Full online tracking</li>
                            <li class="flex items-center gap-1.5"><span class="w-1.5 h-1.5 bg-brand rounded-full"></span>Doorstep collection</li>
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
                <div class="mb-3 inline-flex rounded-full bg-accent px-3 py-1 text-xs font-bold uppercase tracking-wider text-brand">
                    Why Choose Us
                </div>
                <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">
                    Jaipur's Most Trusted Domestic Courier
                </h2>
            </div>
            <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.time class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">Lightning Fast</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        Next-day delivery option to Delhi, Mumbai, Bangalore, and major hubs.
                    </p>
                </div>
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.shield class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">100% Safe Handling</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        Strict protocols and tamper-proof packing to guard your shipments.
                    </p>
                </div>
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.price class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">Affordable Pricing</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        Competitive rates for single documents and bulk corporate plans.
                    </p>
                </div>
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.support class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">Real-Time Tracking</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        Track your document or package anytime via SMS or WhatsApp updates.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Internal Cross Linking Section (NEW) -->
    <section class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-20 border-t border-border/50">
        <div class="max-w-2xl">
            <div class="mb-3 inline-flex rounded-full bg-accent px-3 py-1 text-xs font-bold uppercase tracking-wider text-brand">
                Explore More
            </div>
            <h2 class="text-2xl font-extrabold text-navy sm:text-3xl">Explore Our Other Services</h2>
            <p class="mt-2 text-muted-foreground text-sm">Need to ship something heavier or in bulk from Jaipur?</p>
        </div>
        <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <a href="{{ route('services.cargo') }}" class="group rounded-2xl border border-border bg-card p-6 hover:-translate-y-1 hover:shadow-soft transition block">
                <div class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-accent text-brand">
                    <x-icons.truck class="w-5 h-5" />
                </div>
                <h4 class="mt-4 font-bold text-navy text-lg group-hover:text-brand transition">Cargo Services</h4>
                <p class="text-xs text-muted-foreground mt-1">LTL &amp; FTL cargo solutions for heavy machinery and commercial logistics from Jaipur.</p>
            </a>
            <a href="{{ route('services.luggage') }}" class="group rounded-2xl border border-border bg-card p-6 hover:-translate-y-1 hover:shadow-soft transition block">
                <div class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-accent text-brand">
                    <x-icons.briefcase class="w-5 h-5" />
                </div>
                <h4 class="mt-4 font-bold text-navy text-lg group-hover:text-brand transition">Luggage Transport</h4>
                <p class="text-xs text-muted-foreground mt-1">Secure suitcase, trunk, and PG shipping for Jaipur students and relocating families.</p>
            </a>
            <a href="{{ route('services.parcel') }}" class="group rounded-2xl border border-border bg-card p-6 hover:-translate-y-1 hover:shadow-soft transition block">
                <div class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-accent text-brand">
                    <x-icons.boxes class="w-5 h-5" />
                </div>
                <h4 class="mt-4 font-bold text-navy text-lg group-hover:text-brand transition">Parcel Delivery</h4>
                <p class="text-xs text-muted-foreground mt-1">Send bulk boxes, merchandise cartons, and wholesale packets with volume discounts.</p>
            </a>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-20 bg-secondary/30 rounded-3xl mb-12">
        <div class="mx-auto text-center max-w-2xl">
            <div class="mb-3 inline-flex rounded-full bg-accent px-3 py-1 text-xs font-bold uppercase tracking-wider text-brand">
                FAQ
            </div>
            <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">Courier FAQs</h2>
        </div>
        <div class="mx-auto mt-8 max-w-3xl space-y-2 overflow-hidden px-4">
            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>How do I book a courier pickup in Jaipur?</span>
                    <x-icons.plus class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        You can easily book a courier pickup by clicking our "Book Express Pickup" button to launch WhatsApp, or by calling our customer care number. Our Jaipur pickup team will arrive at your address the same day.
                    </p>
                </div>
            </div>
            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>What cities do you courier to from Jaipur?</span>
                    <x-icons.plus class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        We deliver couriers and parcels from Jaipur to all major Tier-1, Tier-2, and Tier-3 cities in India, including Delhi, Mumbai, Pune, Ahmedabad, Hyderabad, Kolkata, Chennai, Indore, Lucknow, and Bangalore.
                    </p>
                </div>
            </div>
            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>What is the typical courier transit time?</span>
                    <x-icons.plus class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        Express air deliveries to major metro areas usually arrive within 24 to 48 hours. Other cities and remote surface transport routes across India take 2 to 5 business days.
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
