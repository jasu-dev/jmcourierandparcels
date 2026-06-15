@extends('layouts.app')

@section('content')
    <section class="relative overflow-hidden bg-hero-gradient text-white">
        <div class="mx-auto grid max-w-7xl items-center gap-10 px-4 py-16 sm:px-6 sm:py-24 lg:grid-cols-2">
            <div>
                <div
                    class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1 text-xs font-bold uppercase tracking-wider backdrop-blur">
                    <x-icons.map-pin class="text-gold" /> Based in Jaipur · Pan-India
                </div>
                <h1 class="mt-4 text-4xl font-extrabold leading-tight sm:text-5xl lg:text-6xl">
                    Courier, Luggage & Parcel <span class="text-gold">Delivery</span> from Jaipur to all India
                </h1>
                <p class="mt-4 max-w-xl text-white/85 sm:text-lg">
                    Fast pickups. Secure transit. On-time delivery. Trusted by hundreds of Jaipur customers
                    for nationwide courier and luggage services.
                </p>
                <div class="mt-7 flex flex-wrap gap-3">
                    <a href="/contact"
                        class="inline-flex items-center gap-2 rounded-full bg-whatsapp px-6 py-3 font-bold text-white shadow-elevated hover:brightness-105">
                        <x-icons.whatsapp class="w-5 h-5" />
                        Book Pickup
                    </a>
                    <a href="tel:+919000000000"
                        class="inline-flex items-center gap-2 rounded-full bg-danger px-6 py-3 font-bold text-white shadow-soft hover:brightness-110">
                        <x-icons.phone class="w-5 h-5" /> Call Now
                    </a>
                </div>
                <div class="mt-8 grid max-w-md grid-cols-3 gap-4 text-center">
                    <div class="rounded-2xl bg-white/10 p-3 backdrop-blur">
                        <div class="text-xl font-extrabold text-gold sm:text-2xl">10k+</div>
                        <div class="text-[11px] uppercase tracking-wider text-white/70">Parcels Delivered</div>
                    </div>
                    <div class="rounded-2xl bg-white/10 p-3 backdrop-blur">
                        <div class="text-xl font-extrabold text-gold sm:text-2xl">500+</div>
                        <div class="text-[11px] uppercase tracking-wider text-white/70">Cities Covered</div>
                    </div>
                    <div class="rounded-2xl bg-white/10 p-3 backdrop-blur">
                        <div class="text-xl font-extrabold text-gold sm:text-2xl">4.9★</div>
                        <div class="text-[11px] uppercase tracking-wider text-white/70">Customer Rating</div>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="absolute -inset-6 rounded-[2rem] bg-gold/20 blur-2xl" aria-hidden="true"></div>
                <img alt="JM Courier delivery van with parcels in Jaipur" width="1536" height="1024"
                    class="relative rounded-3xl shadow-elevated ring-1 ring-white/20"
                    src="{{ asset('images/jm-courier-delivery.png') }}">
            </div>
        </div>
    </section>

    <section class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-20 ">
        <div class="mx-auto text-center max-w-2xl">
            <div
                class="mb-3 inline-flex rounded-full bg-accent px-3 py-1 text-xs font-bold uppercase tracking-wider text-brand">
                What we do
            </div>
            <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">Our Services</h2>
            <p class="mt-3 text-base text-muted-foreground sm:text-lg">
                From single documents to full household luggage — one trusted partner in Jaipur.
            </p>
        </div>
        <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <div
                class="group rounded-2xl border border-border bg-card p-6 transition hover:-translate-y-1 hover:shadow-soft">
                <div
                    class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-brand-gradient text-primary-foreground shadow-soft">
                    <x-icons.package class="w-5 h-5" />
                </div>
                <h3 class="mt-4 text-lg font-bold text-navy">Courier Services</h3>
                <p class="mt-2 text-sm text-muted-foreground">
                    Documents and small parcels delivered swiftly across India with full tracking.
                </p>
                <ul class="mt-4 space-y-2">
                    <li class="flex items-start gap-2 text-sm text-muted-foreground">
                        <span class="inline-block w-1.5 h-1.5 bg-primary rounded-full mt-1.5 shrink-0"></span>
                        <span>Next-day delivery available</span>
                    </li>
                    <li class="flex items-start gap-2 text-sm text-muted-foreground">
                        <span class="inline-block w-1.5 h-1.5 bg-primary rounded-full mt-1.5 shrink-0"></span>
                        <span>Door-to-door pickup &amp; delivery</span>
                    </li>
                    <li class="flex items-start gap-2 text-sm text-muted-foreground">
                        <span class="inline-block w-1.5 h-1.5 bg-primary rounded-full mt-1.5 shrink-0"></span>
                        <span>Full insurance coverage</span>
                    </li>
                    <li class="flex items-start gap-2 text-sm text-muted-foreground">
                        <span class="inline-block w-1.5 h-1.5 bg-primary rounded-full mt-1.5 shrink-0"></span>
                        <span>Real-time tracking</span>
                    </li>
                    <li class="flex items-start gap-2 text-sm text-muted-foreground">
                        <span class="inline-block w-1.5 h-1.5 bg-primary rounded-full mt-1.5 shrink-0"></span>
                        <span>Competitive rates</span>
                    </li>
                    <li class="flex items-start gap-2 text-sm text-muted-foreground">
                        <span class="inline-block w-1.5 h-1.5 bg-primary rounded-full mt-1.5 shrink-0"></span>
                        <span>Scheduled delivery options</span>
                    </li>
                </ul>
                <a href="/services" class="mt-4 inline-flex items-center gap-1 text-sm font-bold text-brand">
                    Learn more
                    <x-icons.arrow-right />
                </a>
            </div>
            <div
                class="group rounded-2xl border border-border bg-card p-6 transition hover:-translate-y-1 hover:shadow-soft">
                <div
                    class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-brand-gradient text-primary-foreground shadow-soft">
                    <x-icons.briefcase class="w-5 h-5" />
                </div>
                <h3 class="mt-4 text-lg font-bold text-navy">Luggage Transport</h3>
                <p class="mt-2 text-sm text-muted-foreground">
                    Safe transport of suitcases, trunks and personal luggage for students, families and travellers.
                </p>
                <ul class="mt-4 space-y-2">
                    <li class="flex items-start gap-2 text-sm text-muted-foreground">
                        <span class="inline-block w-1.5 h-1.5 bg-primary rounded-full mt-1.5 shrink-0"></span>
                        <span>Safe handling of belongings</span>
                    </li>
                    <li class="flex items-start gap-2 text-sm text-muted-foreground">
                        <span class="inline-block w-1.5 h-1.5 bg-primary rounded-full mt-1.5 shrink-0"></span>
                        <span>Relocation assistance</span>
                    </li>
                    <li class="flex items-start gap-2 text-sm text-muted-foreground">
                        <span class="inline-block w-1.5 h-1.5 bg-primary rounded-full mt-1.5 shrink-0"></span>
                        <span>Special packaging available</span>
                    </li>
                    <li class="flex items-start gap-2 text-sm text-muted-foreground">
                        <span class="inline-block w-1.5 h-1.5 bg-primary rounded-full mt-1.5 shrink-0"></span>
                        <span>Damage-free guarantee</span>
                    </li>
                    <li class="flex items-start gap-2 text-sm text-muted-foreground">
                        <span class="inline-block w-1.5 h-1.5 bg-primary rounded-full mt-1.5 shrink-0"></span>
                        <span>Flexible scheduling</span>
                    </li>
                    <li class="flex items-start gap-2 text-sm text-muted-foreground">
                        <span class="inline-block w-1.5 h-1.5 bg-primary rounded-full mt-1.5 shrink-0"></span>
                        <span>Affordable rates</span>
                    </li>
                </ul>
                <a href="/services" class="mt-4 inline-flex items-center gap-1 text-sm font-bold text-brand">
                    Learn more
                    <x-icons.arrow-right />
                </a>
            </div>
            <div
                class="group rounded-2xl border border-border bg-card p-6 transition hover:-translate-y-1 hover:shadow-soft">
                <div
                    class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-brand-gradient text-primary-foreground shadow-soft">
                    <x-icons.boxes class="w-5 h-5" />
                </div>
                <h3 class="mt-4 text-lg font-bold text-navy">Parcel Delivery</h3>
                <p class="mt-2 text-sm text-muted-foreground">
                    Bulk parcels, cartons and boxes with secure packing and timely pan-India delivery.
                </p>
                <ul class="mt-4 space-y-2">
                    <li class="flex items-start gap-2 text-sm text-muted-foreground">
                        <span class="inline-block w-1.5 h-1.5 bg-primary rounded-full mt-1.5 shrink-0"></span>
                        <span>Volume discounts</span>
                    </li>
                    <li class="flex items-start gap-2 text-sm text-muted-foreground">
                        <span class="inline-block w-1.5 h-1.5 bg-primary rounded-full mt-1.5 shrink-0"></span>
                        <span>Bulk shipment handling</span>
                    </li>
                    <li class="flex items-start gap-2 text-sm text-muted-foreground">
                        <span class="inline-block w-1.5 h-1.5 bg-primary rounded-full mt-1.5 shrink-0"></span>
                        <span>Scheduled deliveries</span>
                    </li>
                    <li class="flex items-start gap-2 text-sm text-muted-foreground">
                        <span class="inline-block w-1.5 h-1.5 bg-primary rounded-full mt-1.5 shrink-0"></span>
                        <span>Pan-India coverage</span>
                    </li>
                    <li class="flex items-start gap-2 text-sm text-muted-foreground">
                        <span class="inline-block w-1.5 h-1.5 bg-primary rounded-full mt-1.5 shrink-0"></span>
                        <span>Transparent pricing</span>
                    </li>
                    <li class="flex items-start gap-2 text-sm text-muted-foreground">
                        <span class="inline-block w-1.5 h-1.5 bg-primary rounded-full mt-1.5 shrink-0"></span>
                        <span>Business-friendly solutions</span>
                    </li>
                </ul>
                <a href="/services" class="mt-4 inline-flex items-center gap-1 text-sm font-bold text-brand">
                    Learn more
                    <x-icons.arrow-right />
                </a>
            </div>
        </div>
    </section>

    <section class="bg-secondary/60">
        <section class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-20 ">
            <div class="mx-auto text-center max-w-2xl">
                <div
                    class="mb-3 inline-flex rounded-full bg-accent px-3 py-1 text-xs font-bold uppercase tracking-wider text-brand">
                    Why JM Courier</div>
                <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">
                    Trust, speed and care - every shipment
                </h2>
            </div>
            <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <div class="rounded-2xl border border-border bg-card p-6">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.shield class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">Safe & Secure</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        Every parcel is packed, sealed and handled with care.
                    </p>
                </div>
                <div class="rounded-2xl border border-border bg-card p-6">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.time class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">On-Time Delivery</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        Reliable timelines from Jaipur to every major Indian city.
                    </p>
                </div>
                <div class="rounded-2xl border border-border bg-card p-6">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.price class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">Affordable Pricing</h3>
                    <p class="mt-1 text-sm text-muted-foreground">Transparent rates with no hidden charges.</p>
                </div>
                <div class="rounded-2xl border border-border bg-card p-6">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.support class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">24/7 Support</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        Talk to a real person on call or WhatsApp anytime.
                    </p>
                </div>
            </div>
        </section>
    </section>

    <section class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-20 border-t border-border/50">
        <div class="mx-auto text-center max-w-2xl">
            <div
                class="mb-3 inline-flex rounded-full bg-accent px-3 py-1 text-xs font-bold uppercase tracking-wider text-brand">
                Our Gallery
            </div>
            <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">Our Operations in Action</h2>
            <p class="mt-3 text-sm text-muted-foreground">
                Take a look at how we handle, pack, and safely transport your belongings across the country.
            </p>
        </div>

        <div class="mt-10 grid gap-6 sm:grid-cols-2 md:grid-cols-3">

            <div class="group relative overflow-hidden rounded-2xl border border-border bg-card md:row-span-2">
                <div class="relative h-full min-h-[300px] w-full overflow-hidden rounded-xl">
                    <img src="{{ asset('images/gallery-1.png') }}" alt="Secure Packaging"
                        class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" />
                </div>
            </div>

            <div class="group relative overflow-hidden rounded-2xl border border-border bg-card">
                <div class="relative h-[220px] w-full overflow-hidden rounded-xl">
                    <img src="{{ asset('images/gallery-2.png') }}" alt="Luggage Shipping"
                        class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" />
                </div>
            </div>

            <div class="group relative overflow-hidden rounded-2xl border border-border bg-card">
                <div class="relative h-[220px] w-full overflow-hidden rounded-xl">
                    <img src="{{ asset('images/gallery-3.png') }}" alt="On-time Delivery"
                        class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" />
                </div>
            </div>

            <div class="group relative overflow-hidden rounded-2xl border border-border bg-card">
                <div class="relative h-[220px] w-full overflow-hidden rounded-xl">
                    <img src="{{ asset('images/gallery-4.png') }}" alt="Corporate Parcels"
                        class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" />
                </div>
            </div>

            <div class="group relative overflow-hidden rounded-2xl border border-border bg-card">
                <div class="relative h-[220px] w-full overflow-hidden rounded-xl">
                    <img src="{{ asset('images/gallery-5.png') }}" alt="24/7 WhatsApp Support"
                        class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" />
                </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary/60">
        <section class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-20 ">
            <div class="grid items-center gap-10 lg:grid-cols-2">
                <div>
                    <div class=" max-w-2xl">
                        <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">
                            We deliver across all of India
                        </h2>
                        <p class="mt-3 text-base text-muted-foreground sm:text-lg">
                            From Jaipur to every major metro, state capital and Tier-2/3 city - luggage, parcels and
                            couriers covered.
                        </p>
                    </div>
                    <div class="mt-6 grid grid-cols-2 gap-2 sm:grid-cols-3">
                        <div
                            class="flex items-center gap-2 rounded-xl border border-border bg-card px-3 py-2 text-sm font-semibold text-navy">
                            <x-icons.circle-check class="text-brand" /> Delhi NCR
                        </div>
                        <div
                            class="flex items-center gap-2 rounded-xl border border-border bg-card px-3 py-2 text-sm font-semibold text-navy">
                            <x-icons.circle-check class="text-brand" /> Mumbai
                        </div>
                        <div
                            class="flex items-center gap-2 rounded-xl border border-border bg-card px-3 py-2 text-sm font-semibold text-navy">
                            <x-icons.circle-check class="text-brand" /> Bangalore
                        </div>
                        <div
                            class="flex items-center gap-2 rounded-xl border border-border bg-card px-3 py-2 text-sm font-semibold text-navy">
                            <x-icons.circle-check class="text-brand" /> Hyderabad
                        </div>
                        <div
                            class="flex items-center gap-2 rounded-xl border border-border bg-card px-3 py-2 text-sm font-semibold text-navy">
                            <x-icons.circle-check class="text-brand" /> Chennai
                        </div>
                        <div
                            class="flex items-center gap-2 rounded-xl border border-border bg-card px-3 py-2 text-sm font-semibold text-navy">
                            <x-icons.circle-check class="text-brand" /> Kolkata
                        </div>
                        <div
                            class="flex items-center gap-2 rounded-xl border border-border bg-card px-3 py-2 text-sm font-semibold text-navy">
                            <x-icons.circle-check class="text-brand" /> Pune
                        </div>
                        <div
                            class="flex items-center gap-2 rounded-xl border border-border bg-card px-3 py-2 text-sm font-semibold text-navy">
                            <x-icons.circle-check class="text-brand" /> Ahmedabad
                        </div>
                        <div
                            class="flex items-center gap-2 rounded-xl border border-border bg-card px-3 py-2 text-sm font-semibold text-navy">
                            <x-icons.circle-check class="text-brand" /> Surat
                        </div>
                        <div
                            class="flex items-center gap-2 rounded-xl border border-border bg-card px-3 py-2 text-sm font-semibold text-navy">
                            <x-icons.circle-check class="text-brand" /> Lucknow
                        </div>
                        <div
                            class="flex items-center gap-2 rounded-xl border border-border bg-card px-3 py-2 text-sm font-semibold text-navy">
                            <x-icons.circle-check class="text-brand" /> Indore
                        </div>
                        <div
                            class="flex items-center gap-2 rounded-xl border border-border bg-card px-3 py-2 text-sm font-semibold text-navy">
                            <x-icons.circle-check class="text-brand" /> Chandigarh
                        </div>
                    </div>
                </div>
                <div class="relative rounded-3xl bg-brand-gradient p-8 text-white shadow-elevated overflow-hidden">
                    <div class="absolute -right-6 -top-6 h-24 w-24 rounded-full bg-gold/30 blur-xl"></div>
                    <x-icons.truck class="w-20 h-20 text-gold" />
                    <h3 class="mt-4 text-2xl font-extrabold">Same-day pickup in Jaipur</h3>
                    <p class="mt-2 text-white/85">
                        Book before 5 PM and our team will pick up your shipment the same
                        day from anywhere in Jaipur city.
                    </p>
                    <div class="mt-5 flex flex-col sm:flex-row flex-wrap gap-4">
                        <a href="/contact"
                            class="inline-flex justify-center items-center gap-2 rounded-full bg-whatsapp px-4 py-3 font-bold text-white shadow-elevated hover:brightness-105">
                            <x-icons.whatsapp class="w-5 h-5" />
                            Book Pickup
                        </a>
                        <a href="tel:+919000000000"
                            class="inline-flex items-center justify-center gap-2 rounded-full bg-danger px-4 py-3 font-bold text-white shadow-soft hover:brightness-110">
                            <x-icons.phone class="w-5 h-5" /> Call Now
                        </a>
                    </div>
                </div>
            </div>
        </section>
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
    <section class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-20 ">
        <div class="mx-auto text-center max-w-2xl">
            <div
                class="mb-3 inline-flex rounded-full bg-accent px-3 py-1 text-xs font-bold uppercase tracking-wider text-brand">
                Happy Customers
            </div>
            <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">What our customers say</h2>
        </div>
        <div class="mt-10 grid gap-6 md:grid-cols-3">
            <div class="rounded-2xl border border-border bg-card p-6">
                <div class="flex gap-0.5 text-gold">
                    <x-icons.star />
                    <x-icons.star />
                    <x-icons.star />
                    <x-icons.star />
                    <x-icons.star />
                </div>
                <p class="mt-3 text-sm text-foreground/85">
                    “Sent my entire luggage to Delhi before joining college. Picked up the same day and
                    reached safely. Highly recommend!”
                </p>
                <div class="mt-4">
                    <div class="font-bold text-navy">Rahul Sharma</div>
                    <div class="text-xs text-muted-foreground">Jaipur → Delhi</div>
                </div>
            </div>
            <div class="rounded-2xl border border-border bg-card p-6">
                <div class="flex gap-0.5 text-gold">
                    <x-icons.star />
                    <x-icons.star />
                    <x-icons.star />
                    <x-icons.star />
                    <x-icons.star />
                </div>
                <p class="mt-3 text-sm text-foreground/85">
                    “Affordable and very responsive on WhatsApp. The team genuinely helped me with packing too.”
                </p>
                <div class="mt-4">
                    <div class="font-bold text-navy">Priya Mehta</div>
                    <div class="text-xs text-muted-foreground">Jaipur → Mumbai</div>
                </div>
            </div>
            <div class="rounded-2xl border border-border bg-card p-6">
                <div class="flex gap-0.5 text-gold">
                    <x-icons.star />
                    <x-icons.star />
                    <x-icons.star />
                    <x-icons.star />
                    <x-icons.star />
                </div>
                <p class="mt-3 text-sm text-foreground/85">
                    “Used JM Courier for office parcels for 6 months. Always on time, never any damage.”
                </p>
                <div class="mt-4">
                    <div class="font-bold text-navy">Arjun Verma</div>
                    <div class="text-xs text-muted-foreground">Jaipur → Bangalore</div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary/60">
        <section class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-20">
            <!-- Header -->
            <div class="mx-auto text-center max-w-2xl">
                <div
                    class="mb-3 inline-flex rounded-full bg-accent px-3 py-1 text-xs font-bold uppercase tracking-wider text-brand">
                    FAQ
                </div>
                <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">Frequently asked questions</h2>
            </div>

            <!-- FAQ Accordion Wrapper -->
            <div class="mx-auto mt-8 max-w-3xl space-y-2 overflow-hidden">

                <!-- Item 1 -->
                <div class="faq-item rounded-2xl border border-border bg-card group">
                    <button
                        class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                        <span>Which cities do you deliver to?</span>
                        <x-icons.plus
                            class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                    </button>
                    <div
                        class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                        <p class="px-5 pb-5 text-sm text-muted-foreground">
                            We deliver from Jaipur to all major cities and towns across India including Delhi, Mumbai,
                            Bangalore, Hyderabad, Pune, Kolkata, Chennai, Ahmedabad and more.
                        </p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="faq-item rounded-2xl border border-border bg-card group">
                    <button
                        class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                        <span>How fast is the delivery?</span>
                        <x-icons.plus
                            class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                    </button>
                    <div
                        class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                        <p class="px-5 pb-5 text-sm text-muted-foreground">
                            Most metro cities are delivered within 2–4 business days. Tier-2 and Tier-3 cities typically
                            take 3–6 days.
                        </p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="faq-item rounded-2xl border border-border bg-card group">
                    <button
                        class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                        <span>Do you offer doorstep pickup in Jaipur?</span>
                        <x-icons.plus
                            class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                    </button>
                    <div
                        class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                        <p class="px-5 pb-5 text-sm text-muted-foreground">
                            Yes. We offer free doorstep pickup anywhere within Jaipur city for all bookings.
                        </p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="faq-item rounded-2xl border border-border bg-card group">
                    <button
                        class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                        <span>How is pricing calculated?</span>
                        <x-icons.plus
                            class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                    </button>
                    <div
                        class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                        <p class="px-5 pb-5 text-sm text-muted-foreground">
                            Pricing depends on weight, dimensions and destination. Request a free quote and we'll get back
                            within minutes.
                        </p>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="faq-item rounded-2xl border border-border bg-card group">
                    <button
                        class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                        <span>Is my parcel insured?</span>
                        <x-icons.plus
                            class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                    </button>
                    <div
                        class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                        <p class="px-5 pb-5 text-sm text-muted-foreground">
                            Yes. Insurance and additional protective packing are available on request.
                        </p>
                    </div>
                </div>

            </div>
        </section>
    </section>

    <x-sections.footer-cta/>
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

                    // Optional: Autoclose other items when a new one opens
                    document.querySelectorAll(".faq-item").forEach(otherItem => {
                        if (otherItem !== item && otherItem.classList.contains("is-open")) {
                            otherItem.classList.remove("is-open");
                            otherItem.querySelector(".faq-content").style.maxHeight = "0px";
                        }
                    });

                    // Toggle the active item
                    if (isOpen) {
                        item.classList.remove("is-open");
                        content.style.maxHeight = "0px";
                    } else {
                        item.classList.add("is-open");
                        // Sets exact height dynamically for a smooth transition effect
                        content.style.maxHeight = content.scrollHeight + "px";
                    }
                });
            });
        });
    </script>
@endpush
