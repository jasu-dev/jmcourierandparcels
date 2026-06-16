@extends('layouts.app')

@section('content')
    <div class="bg-hero-gradient text-white">
        <div class="mx-auto max-w-7xl px-4 py-14 sm:px-6 sm:py-20">
            <h1 class="text-3xl font-extrabold sm:text-5xl">Our Services</h1>
            <p class="mt-3 max-w-2xl text-white/85 sm:text-lg">One trusted Jaipur partner for couriers, luggage and parcels —
                anywhere in India.</p>
        </div>
    </div>

    <x-sections.services />

    <section class="mx-auto w-full max-w-7xl px-4 pb-16 sm:px-6 sm:pb-20 ">

        <div>
            <h2 class="text-2xl font-extrabold text-navy sm:text-3xl">More we handle</h2>
            <p class="mt-2 text-muted-foreground">Beyond our three core services, JM Courier also supports
                specialised shipments out of Jaipur.</p>
        </div>

        <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <div
                class="rounded-2xl border border-border bg-card p-6">
                <div
                    class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-brand-gradient text-primary-foreground shadow-soft">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-file-text" aria-hidden="true">
                        <path
                            d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z">
                        </path>
                        <path d="M14 2v5a1 1 0 0 0 1 1h5"></path>
                        <path d="M10 9H8"></path>
                        <path d="M16 13H8"></path>
                        <path d="M16 17H8"></path>
                    </svg>
                </div>
                <h3 class="mt-4 text-lg font-bold text-navy">Document Courier</h3>
                <p class="mt-2 text-sm text-muted-foreground">Important documents, contracts and certificates delivered
                    safely
                    across India.</p>
            </div>
            
            <div
                class="rounded-2xl border border-border bg-card p-6">
                <div
                    class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-brand-gradient text-primary-foreground shadow-soft">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-house" aria-hidden="true">
                        <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                        <path
                            d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z">
                        </path>
                    </svg>
                </div>
                <h3 class="mt-4 text-lg font-bold text-navy">Household Items</h3>
                <p class="mt-2 text-sm text-muted-foreground">Selected household goods and personal belongings transported
                    securely.</p>
            </div>
            <div
                class="rounded-2xl border border-border bg-card p-6">
                <div
                    class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-brand-gradient text-primary-foreground shadow-soft">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-shield-check" aria-hidden="true">
                        <path
                            d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                        </path>
                        <path d="m9 12 2 2 4-4"></path>
                    </svg>
                </div>
                <h3 class="mt-4 text-lg font-bold text-navy">Insured Shipping</h3>
                <p class="mt-2 text-sm text-muted-foreground">Optional insurance and premium packing for high-value items.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-navy text-white">
        <section class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-20 ">
            <div class="mx-auto max-w-2xl text-center">
                <div
                    class="mb-3 inline-flex rounded-full bg-white/10 px-3 py-1 text-xs font-bold uppercase tracking-wider text-gold">
                    How it works
                </div>
                <h2 class="text-3xl font-extrabold sm:text-4xl">Simple 4-step process</h2>
                <p class="mt-2 text-white/75">From booking to delivery - quick, transparent, hassle-free.</p>
            </div>
            <div class="mt-10 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                <div class="relative rounded-2xl bg-white/5 p-6 ring-1 ring-white/10 backdrop-blur">
                    <div class="text-3xl font-extrabold text-gold">01</div>
                    <h3 class="mt-2 text-lg font-bold">Book Pickup</h3>
                    <p class="mt-1 text-sm text-white/75">
                        Call, WhatsApp or use our online form to book a pickup.
                    </p>
                </div>
                <div class="relative rounded-2xl bg-white/5 p-6 ring-1 ring-white/10 backdrop-blur">
                    <div class="text-3xl font-extrabold text-gold">02</div>
                    <h3 class="mt-2 text-lg font-bold">Doorstep Pickup</h3>
                    <p class="mt-1 text-sm text-white/75">
                        Our team collects, weighs and packs your shipment.
                    </p>
                </div>
                <div class="relative rounded-2xl bg-white/5 p-6 ring-1 ring-white/10 backdrop-blur">
                    <div class="text-3xl font-extrabold text-gold">03</div>
                    <h3 class="mt-2 text-lg font-bold">Safe Transit</h3>
                    <p class="mt-1 text-sm text-white/75">
                        Your parcel moves through our trusted Jaipur network.
                    </p>
                </div>
                <div class="relative rounded-2xl bg-white/5 p-6 ring-1 ring-white/10 backdrop-blur">
                    <div class="text-3xl font-extrabold text-gold">04</div>
                    <h3 class="mt-2 text-lg font-bold">On-Time Delivery</h3>
                    <p class="mt-1 text-sm text-white/75">
                        Delivered to the destination address with confirmation.
                    </p>
                </div>
            </div>
        </section>
    </section>

    <section class="bg-secondary/60">
        <section class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-20">

            <!-- Header Block -->
            <div class="mx-auto text-center max-w-2xl">
                <div
                    class="mb-3 inline-flex rounded-full bg-accent px-3 py-1 text-xs font-bold uppercase tracking-wider text-brand">
                    Our values
                </div>
                <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">
                    Why We're Different
                </h2>
            </div>

            <div class="mt-10 grid gap-8 sm:grid-cols-2 lg:grid-cols-3 max-w-6xl mx-auto">

                <!-- Card 1: Local Expertise -->
                <div class="bg-white rounded-xl p-6 border border-border">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.map-pin class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-semibold text-lg text-foreground mb-2">Local to Pan-India</h3>
                    <p class="text-muted-foreground text-sm leading-relaxed">
                        Founded in Jaipur, we understand local market needs while serving all major cities across India.
                    </p>
                </div>

                <!-- Card 2: Technology-Driven Solutions -->
                <div class="bg-white rounded-xl p-6 border border-border">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.wifi class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-semibold text-lg text-foreground mb-2">Technology-Driven Solutions</h3>
                    <p class="text-muted-foreground text-sm leading-relaxed">
                        Real-time tracking, online booking, and transparent pricing through our modern platform.
                    </p>
                </div>

                <!-- Card 3: Flexible & Affordable -->
                <div class="bg-white rounded-xl p-6 border border-border">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.price class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-semibold text-lg text-foreground mb-2">Flexible &amp; Affordable</h3>
                    <p class="text-muted-foreground text-sm leading-relaxed">
                        Competitive rates, bulk discounts, and customized solutions for businesses and individuals.
                    </p>
                </div>

                <!-- Card 4: Dedicated Support Team -->
                <div class="bg-white rounded-xl p-6 border border-border">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.support class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-semibold text-lg text-foreground mb-2">Dedicated Support Team</h3>
                    <p class="text-muted-foreground text-sm leading-relaxed">
                        Available 24/7 to address your concerns and provide personalized assistance.
                    </p>
                </div>

                <!-- Card 5: Quality Assurance -->
                <div class="bg-white rounded-xl p-6 border border-border">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.shield class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-semibold text-lg text-foreground mb-2">Quality Assurance</h3>
                    <p class="text-muted-foreground text-sm leading-relaxed">
                        Trained team, proper handling, and comprehensive insurance for all shipments.
                    </p>
                </div>

                <!-- Card 6: Environmental Responsibility -->
                <div class="bg-white rounded-xl p-6 border border-border">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.heart class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-semibold text-lg text-foreground mb-2">Environmental Responsibility</h3>
                    <p class="text-muted-foreground text-sm leading-relaxed">
                        Committed to sustainable practices in our delivery operations.
                    </p>
                </div>

            </div>

        </section>
    </section>

    <x-sections.footer-cta />
@endsection
