@extends('layouts.app')
@section('content')
    <div class="bg-hero-gradient text-white">
        <div class="mx-auto max-w-7xl px-4 py-14 sm:px-6 sm:py-20">
            <h1 class="text-3xl font-extrabold sm:text-5xl">About JM Courier</h1>
            <p class="mt-3 max-w-2xl text-white/85 sm:text-lg">Jaipur's trusted partner for courier, cargo, luggage and parcel
                delivery across India.</p>
        </div>
    </div>

    <section class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-20 ">
        <div class="grid gap-10 lg:grid-cols-2">
            <div>
                <div class=" max-w-2xl">
                    <div
                        class="mb-3 inline-flex rounded-full bg-accent px-3 py-1 text-xs font-bold uppercase tracking-wider text-brand">
                        Our story</div>
                    <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">Built in Jaipur. Delivering across India.</h2>
                </div>
                <div class="mt-5 space-y-4 text-foreground/85">
                    <p>JM Courier &amp; Luggage Parcel Service started in Jaipur with a simple mission — make sending
                        cargo, parcels, luggage and couriers across India easy, affordable and worry-free for every customer.</p>
                    <p>Today, we serve students, families, working professionals and small businesses across Jaipur,
                        delivering thousands of shipments to every major Indian city. Our team combines local Jaipur
                        knowledge with a strong pan-India delivery network to ensure your parcel reaches safely and on time.
                    </p>
                    <p>Whether it's a single suitcase to Bangalore or a daily stack of documents to Delhi, JM Courier is
                        built on speed, trust and care.</p>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 p-4">
                <div
                    class="p-5 rounded-2xl bg-card border border-border flex flex-col items-center text-center justify-center space-y-2">
                    <div class="p-3 bg-accent text-brand rounded-lg">
                        <x-icons.users class="w-6 h-6 text-brand" />
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl font-bold text-foreground">5000+</h3>
                        <p class="text-xs md:text-sm text-muted-foreground font-medium">Happy Customers</p>
                    </div>
                </div>

                <div
                    class="p-5 rounded-2xl bg-card border border-border flex flex-col items-center text-center justify-center space-y-2">
                    <div class="p-3 bg-accent text-brand rounded-lg">
                        <x-icons.map-pin class="w-6 h-6 text-brand" />
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl font-bold text-foreground">28+</h3>
                        <p class="text-xs md:text-sm text-muted-foreground font-medium">Cities Covered</p>
                    </div>
                </div>

                <div
                    class="p-5 rounded-2xl bg-card border border-border flex flex-col items-center text-center justify-center space-y-2">
                    <div class="p-3 bg-accent text-brand rounded-lg">
                        <x-icons.time class="w-6 h-6 text-brand" />
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl font-bold text-foreground">99%</h3>
                        <p class="text-xs md:text-sm text-muted-foreground font-medium">On-Time Delivery</p>
                    </div>
                </div>

                <div
                    class="p-5 rounded-2xl bg-card border border-border flex flex-col items-center text-center justify-center space-y-2">
                    <div class="p-3 bg-accent text-brand rounded-lg">
                        <x-icons.happy class="w-6 h-6 text-brand" />
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl font-bold text-foreground">100%</h3>
                        <p class="text-xs md:text-sm text-muted-foreground font-medium">Satisfaction</p>
                    </div>
                </div>
            </div>
        </div>
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

    <x-sections.footer-cta/>
@endsection
