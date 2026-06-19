@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-hero-gradient text-white">
        <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-24">
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1 text-xs font-bold uppercase tracking-wider backdrop-blur animate-pulse">
                    <x-icons.map-pin class="text-gold" /> Student &amp; Family Relocation Jaipur
                </div>
                <h1 class="mt-4 text-4xl font-extrabold leading-tight sm:text-5xl lg:text-6xl">
                    Luggage Transport <span class="text-gold">Services in Jaipur</span>
                </h1>
                <p class="mt-4 text-white/85 sm:text-lg max-w-xl">
                    Send suitcases, bags, trunks, and household luggage safely from Jaipur to hostels, universities, or homes across India. Low rates, careful handling, and doorstep pickup.
                </p>
                <div class="mt-7 flex flex-wrap gap-3">
                    <a href="https://wa.me/919000000000?text=Hi%20JM%20Courier%2C%20I%20am%20a%20student%2Fcustomer%20and%20want%20to%20send%20my%20luggage%20from%20Jaipur."
                        class="inline-flex items-center gap-2 rounded-full bg-whatsapp px-6 py-3 font-bold text-white shadow-elevated hover:brightness-105 hover:-translate-y-0.5 transition">
                        <x-icons.whatsapp class="w-5 h-5" /> Book Luggage Pickup
                    </a>
                    <a href="tel:+919000000000"
                        class="inline-flex items-center gap-2 rounded-full bg-danger px-6 py-3 font-bold text-white shadow-soft hover:brightness-110 hover:-translate-y-0.5 transition">
                        <x-icons.phone class="w-5 h-5" /> Get Price Estimate
                    </a>
                </div>
                <div class="mt-8 grid max-w-lg grid-cols-3 gap-4 text-center">
                    <div class="rounded-2xl bg-white/10 p-3 backdrop-blur border border-white/5 shadow-soft">
                        <div class="text-xl font-extrabold text-gold sm:text-2xl">Special</div>
                        <div class="text-[10px] uppercase tracking-wider text-white/70">Student Discounts</div>
                    </div>
                    <div class="rounded-2xl bg-white/10 p-3 backdrop-blur border border-white/5 shadow-soft">
                        <div class="text-xl font-extrabold text-gold sm:text-2xl">Zero</div>
                        <div class="text-[10px] uppercase tracking-wider text-white/70">Damage Guarantee</div>
                    </div>
                    <div class="rounded-2xl bg-white/10 p-3 backdrop-blur border border-white/5 shadow-soft">
                        <div class="text-xl font-extrabold text-gold sm:text-2xl">Direct</div>
                        <div class="text-[10px] uppercase tracking-wider text-white/70">Hostel &amp; Door Delivery</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content & Details -->
    <section class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-20">
        <div class="grid gap-12 lg:grid-cols-2 items-start">
            <div class="space-y-6">
                <div class="mb-3 inline-flex rounded-full bg-accent px-3 py-1 text-xs font-bold uppercase tracking-wider text-brand">
                    Hassle-Free Personal Shipping
                </div>
                <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">
                    Send Luggage From Jaipur to Other States Securely
                </h2>
                <div class="space-y-4 text-foreground/85 text-sm sm:text-base leading-relaxed">
                    <p>
                        Are you a student preparing to join a university in Delhi, Pune, Mumbai, Bangalore, or Chennai? Or a corporate professional transitioning for a new role? Carrying heavy suitcases, trunks, and carton boxes on trains and flights is exhausting, expensive, and stressful.
                    </p>
                    <p>
                        JM Courier provides highly rated, specialized **luggage transport services in Jaipur** designed to safely ship your suitcases, study materials, storage containers, bedding, and sports kits. Our local team visits your residential colony, PG, hostel, or rental flat to take care of the heavy lifting.
                    </p>
                    <p>
                        We know that personal belongings hold sentimental value. That is why we offer bubble-wrapping, heavy-duty carton boxes, and an outer layer of thick stretch wrap to defend your baggage from moisture, friction scratches, and dust during road transit.
                    </p>
                    <p>
                        Simply share your baggage details on WhatsApp, secure a flat weight-based estimate, and schedule a convenient doorstep collection time. We handle the rest, delivering your bags directly to your hostel room, flat door, or home gate.
                    </p>
                </div>
                <div class="flex flex-wrap gap-4 pt-4">
                    <div class="flex items-center gap-2 rounded-xl border border-border bg-card p-3 font-semibold text-navy text-sm shadow-soft">
                        <x-icons.circle-check class="text-brand w-5 h-5 shrink-0" /> Hostels &amp; PG Pickups
                    </div>
                    <div class="flex items-center gap-2 rounded-xl border border-border bg-card p-3 font-semibold text-navy text-sm shadow-soft">
                        <x-icons.circle-check class="text-brand w-5 h-5 shrink-0" /> Shrink Wrap Protection
                    </div>
                    <div class="flex items-center gap-2 rounded-xl border border-border bg-card p-3 font-semibold text-navy text-sm shadow-soft">
                        <x-icons.circle-check class="text-brand w-5 h-5 shrink-0" /> Flat Weight Pricing
                    </div>
                </div>
            </div>
            <div class="relative lg:sticky lg:top-24">
                <div class="absolute -inset-6 rounded-[2rem] bg-gold/10 blur-2xl" aria-hidden="true"></div>
                <div class="relative rounded-3xl overflow-hidden shadow-elevated border border-border bg-card p-8">
                    <h3 class="text-xl font-extrabold text-navy mb-4">What Luggage We Transport</h3>
                    <ul class="space-y-4">
                        <li class="flex gap-3">
                            <div class="h-6 w-6 rounded-full bg-accent text-brand flex items-center justify-center shrink-0 font-bold text-sm">1</div>
                            <div>
                                <h4 class="font-bold text-navy text-sm sm:text-base">Travel Bags &amp; Suitcases</h4>
                                <p class="text-xs sm:text-sm text-muted-foreground mt-0.5">Heavy suitcases, rolling trolley bags, duffels, and backpacks securely sealed and wrapped.</p>
                            </div>
                        </li>
                        <li class="flex gap-3">
                            <div class="h-6 w-6 rounded-full bg-accent text-brand flex items-center justify-center shrink-0 font-bold text-sm">2</div>
                            <div>
                                <h4 class="font-bold text-navy text-sm sm:text-base">Hostel Trunks &amp; Tin Boxes</h4>
                                <p class="text-xs sm:text-sm text-muted-foreground mt-0.5">Durable tin storage boxes and trunks commonly shipped by hostel students and military personnel.</p>
                            </div>
                        </li>
                        <li class="flex gap-3">
                            <div class="h-6 w-6 rounded-full bg-accent text-brand flex items-center justify-center shrink-0 font-bold text-sm">3</div>
                            <div>
                                <h4 class="font-bold text-navy text-sm sm:text-base">Bedding &amp; Study Material Boxes</h4>
                                <p class="text-xs sm:text-sm text-muted-foreground mt-0.5">Separate cartons packed with textbooks, mattresses, blankets, pillows, and folding tables.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- How Luggage Shipping Works (Workflow) -->
    <section class="bg-navy text-white py-16 sm:py-20">
        <div class="mx-auto w-full max-w-7xl px-4 sm:px-6">
            <div class="mx-auto text-center max-w-2xl">
                <div class="mb-3 inline-flex rounded-full bg-white/10 px-3 py-1 text-xs font-bold uppercase tracking-wider text-gold">
                    Our Workflow
                </div>
                <h2 class="text-3xl font-extrabold sm:text-4xl">
                    Luggage Relocation Step-by-Step
                </h2>
                <p class="mt-2 text-white/75">
                    How we pick up, secure, and deliver your personal belongings across India.
                </p>
            </div>
            
            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-6">
                <div class="relative rounded-2xl bg-white/5 p-6 ring-1 ring-white/10 backdrop-blur">
                    <div class="text-3xl font-extrabold text-gold">01</div>
                    <h3 class="mt-2 font-bold text-base">Get Quote</h3>
                    <p class="mt-1 text-xs text-white/75">WhatsApp your total bag count and destination details.</p>
                </div>
                <div class="relative rounded-2xl bg-white/5 p-6 ring-1 ring-white/10 backdrop-blur">
                    <div class="text-3xl font-extrabold text-gold">02</div>
                    <h3 class="mt-2 font-bold text-base">Local Pickup</h3>
                    <p class="mt-1 text-xs text-white/75">Executive collects from your Jaipur room or hostel gate.</p>
                </div>
                <div class="relative rounded-2xl bg-white/5 p-6 ring-1 ring-white/10 backdrop-blur">
                    <div class="text-3xl font-extrabold text-gold">03</div>
                    <h3 class="mt-2 font-bold text-base">Weight Check</h3>
                    <p class="mt-1 text-xs text-white/75">Luggage is weighed transparently on a digital scale.</p>
                </div>
                <div class="relative rounded-2xl bg-white/5 p-6 ring-1 ring-white/10 backdrop-blur">
                    <div class="text-3xl font-extrabold text-gold">04</div>
                    <h3 class="mt-2 font-bold text-base">Stretch Wrap</h3>
                    <p class="mt-1 text-xs text-white/75">Heavy stretch-wrap is applied to defend zippers and fabrics.</p>
                </div>
                <div class="relative rounded-2xl bg-white/5 p-6 ring-1 ring-white/10 backdrop-blur">
                    <div class="text-3xl font-extrabold text-gold">05</div>
                    <h3 class="mt-2 font-bold text-base">Safe Transit</h3>
                    <p class="mt-1 text-xs text-white/75">Shipped in clean, weatherproof container trucks.</p>
                </div>
                <div class="relative rounded-2xl bg-white/5 p-6 ring-1 ring-white/10 backdrop-blur">
                    <div class="text-3xl font-extrabold text-gold">06</div>
                    <h3 class="mt-2 font-bold text-base">Door Delivery</h3>
                    <p class="mt-1 text-xs text-white/75">Delivered directly to your destination PG or hostel room.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- University Corridors & Tips -->
    <section class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-20">
        <div class="grid gap-12 lg:grid-cols-2">
            <div>
                <h3 class="text-2xl font-extrabold text-navy sm:text-3xl">Popular University Corridors</h3>
                <p class="mt-2 text-muted-foreground text-sm">We provide routine student relocations from Jaipur to top academic cities.</p>
                
                <div class="mt-6 overflow-hidden rounded-2xl border border-border bg-card">
                    <table class="w-full text-left text-sm">
                        <thead class="bg-secondary/40 text-navy font-bold">
                            <tr>
                                <th class="p-4">Target Destination</th>
                                <th class="p-4">Hostel Delivery</th>
                                <th class="p-4">Typical Transit</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-border">
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">Delhi / NCR (DU, JNU, Noida PGs)</td>
                                <td class="p-4 text-muted-foreground">Yes (Doorstep)</td>
                                <td class="p-4 text-muted-foreground">2-3 Business Days</td>
                            </tr>
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">Pune (Symbiosis, MIT, Bharati)</td>
                                <td class="p-4 text-muted-foreground">Yes (Doorstep)</td>
                                <td class="p-4 text-muted-foreground">3-4 Business Days</td>
                            </tr>
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">Bangalore Hubs (Christ, Manipal)</td>
                                class="p-4 text-muted-foreground">Yes (Doorstep)</td>
                                <td class="p-4 text-muted-foreground">4-5 Business Days</td>
                            </tr>
                            <tr class="hover:bg-accent/45 transition">
                                <td class="p-4 font-semibold text-navy">Chennai / Vellore (VIT, SRM)</td>
                                <td class="p-4 text-muted-foreground">Yes (Doorstep)</td>
                                <td class="p-4 text-muted-foreground">4-5 Business Days</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div>
                <h3 class="text-2xl font-extrabold text-navy sm:text-3xl">Smart Packing Tips for Students</h3>
                <p class="mt-2 text-muted-foreground text-sm">Follow these packing recommendations to keep your luggage intact.</p>
                
                <div class="mt-6 space-y-4">
                    <div class="rounded-2xl border border-border bg-card p-5 hover:border-brand/40 transition">
                        <h4 class="font-bold text-navy flex justify-between">
                            <span>Double-Box Study Materials</span>
                            <span class="text-xs px-2 py-0.5 rounded-full bg-accent text-brand">Secure</span>
                        </h4>
                        <p class="text-xs text-muted-foreground mt-1">Textbooks, notes, and files are dense and heavy. Place them in double-walled corrugated cardboard boxes to prevent the carton from bursting open.</p>
                    </div>

                    <div class="rounded-2xl border border-border bg-card p-5 hover:border-brand/40 transition">
                        <h4 class="font-bold text-navy flex justify-between">
                            <span>Zip Locks &amp; Secure Pockets</span>
                            <span class="text-xs px-2 py-0.5 rounded-full bg-secondary/85 text-navy">Important</span>
                        </h4>
                        <p class="text-xs text-muted-foreground mt-1">Ensure all zippers are locked securely or zipped completely. Tape loose tags and keep documents or keys separate in your hand baggage.</p>
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
                    Jaipur's Most Reliable Luggage Transport
                </h2>
            </div>
            <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.heart class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">Careful Handling</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        Belongings are loaded, stored, and unloaded with double checks for security.
                    </p>
                </div>
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.price class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">Student Budget Friendly</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        Special discounted rates for university admissions and hostel transitions.
                    </p>
                </div>
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.shield class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">Outer Safety Layer</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        Every bag gets a heavy stretch-wrap layer to prevent rain, scratch, or tearing.
                    </p>
                </div>
                <div class="rounded-2xl border border-border bg-card p-6 transition hover:shadow-soft">
                    <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-brand">
                        <x-icons.support class="w-5 h-5" />
                    </div>
                    <h3 class="mt-4 font-bold text-navy">Direct Door Delivery</h3>
                    <p class="mt-1 text-sm text-muted-foreground">
                        Delivered straight to the hostel room, flat door, or home gate. No self-pickup required.
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
            <p class="mt-2 text-muted-foreground text-sm">Need to ship express documents or heavy business cargo from Jaipur?</p>
        </div>
        <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <a href="{{ route('services.courier') }}" class="group rounded-2xl border border-border bg-card p-6 hover:-translate-y-1 hover:shadow-soft transition block">
                <div class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-accent text-brand">
                    <x-icons.package class="w-5 h-5" />
                </div>
                <h4 class="mt-4 font-bold text-navy text-lg group-hover:text-brand transition">Courier Services</h4>
                <p class="text-xs text-muted-foreground mt-1">Express door-to-door delivery for documents, legal files, and tiny packages from Jaipur.</p>
            </a>
            <a href="{{ route('services.cargo') }}" class="group rounded-2xl border border-border bg-card p-6 hover:-translate-y-1 hover:shadow-soft transition block">
                <div class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-accent text-brand">
                    <x-icons.truck class="w-5 h-5" />
                </div>
                <h4 class="mt-4 font-bold text-navy text-lg group-hover:text-brand transition">Cargo Services</h4>
                <p class="text-xs text-muted-foreground mt-1">LTL &amp; FTL cargo solutions for heavy machinery and commercial logistics from Jaipur.</p>
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
            <h2 class="text-3xl font-extrabold text-navy sm:text-4xl">Luggage Transport FAQs</h2>
        </div>
        <div class="mx-auto mt-8 max-w-3xl space-y-2 overflow-hidden px-4">
            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>How should I pack my suitcase for transport?</span>
                    <x-icons.plus class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        We recommend locking all bags and suitcases, removing external luggage tags, and packing heavy books or footwear at the bottom. Our Jaipur pickup team can apply professional stretch-wrap to protect the outer bag material from moisture and dust.
                    </p>
                </div>
            </div>
            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>Do you offer student discounts in Jaipur?</span>
                    <x-icons.plus class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        Yes, we offer seasonal student discounts for shipping personal luggage, study materials, and PG items from Jaipur to colleges in Delhi, Chennai, Bangalore, Pune, and elsewhere. Just show your student ID card during booking!
                    </p>
                </div>
            </div>
            <div class="faq-item rounded-2xl border border-border bg-card group">
                <button class="faq-toggle flex w-full cursor-pointer items-center justify-between gap-4 p-5 font-bold text-navy text-left focus:outline-none">
                    <span>Is there a weight limit for sending luggage?</span>
                    <x-icons.plus class="h-4 w-4 shrink-0 text-brand transition duration-300 ease-out group-[.is-open]:rotate-45" />
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0 group-[.is-open]:opacity-100">
                    <p class="px-5 pb-5 text-sm text-muted-foreground">
                        There is no maximum limit, but we recommend dividing luggage into bags of 20-30kg each so they can be handled safely without risk of damage to the handles or zippers during manual loading.
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
