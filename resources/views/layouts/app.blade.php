<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap"
        data-precedence="default">
    <meta name="author" content="JM Courier">
    <meta name="theme-color" content="#0B4EA2">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="JM Courier And Luggage Parcel Service — Jaipur to All India">
    <meta name="twitter:description"
        content="Door-to-door courier, luggage transport and parcel delivery from Jaipur to all India.">
    <meta property="og:image" content="{{ asset('images/jm-courier-delivery.png') }}">
    <meta name="twitter:image" content="{{ asset('images/jm-courier-delivery.png') }}">
    <title>JM Courier &amp; Luggage Parcel Service — Jaipur to All India</title>
    <meta name="description"
        content="Fast, secure and affordable courier, luggage and parcel delivery from Jaipur to all major cities across India. Door-to-door pickup, real-time updates.">
    <meta property="og:title" content="JM Courier &amp; Luggage Parcel Service — Jaipur to All India">
    <meta property="og:description"
        content="Door-to-door courier, luggage transport and parcel delivery from Jaipur to all India.">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('header-scripts')
</head>

<body>
    <div class="flex min-h-screen flex-col">
        <header class="sticky top-0 z-50 w-full transition-all bg-background">
            <div class="mx-auto flex max-w-7xl items-center justify-between gap-4 px-4 py-3 sm:px-6">
                <a class="flex items-center gap-2 min-w-0 active" href="/" data-status="active"
                    aria-current="page">
                    <img src="{{ asset('images/logo.png') }}" alt="JM Courier logo" class="h-15 object-contain">
                </a>
                <nav class="hidden items-center gap-1 lg:flex">
                    <x-nav-link route="home" label="Home"></x-nav-link>
                    <x-nav-link route="services" label="Services"></x-nav-link>
                    <x-nav-link route="about" label="About"></x-nav-link>
                    <x-nav-link route="contact" label="Contact"></x-nav-link>
                </nav>
                <div class="hidden items-center gap-2 md:flex">
                    <a href="tel:+919000000000"
                        class="inline-flex items-center gap-2 rounded-full border border-border px-3 py-2 text-sm font-semibold text-navy hover:bg-accent">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-phone" aria-hidden="true">
                            <path
                                d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384">
                            </path>
                        </svg>
                        Call
                    </a>
                    <a href="/contact"
                        class="rounded-full bg-brand-gradient px-4 py-2 text-sm font-bold text-primary-foreground shadow-soft hover:brightness-110">Book
                        Pickup</a>
                </div>
                <button aria-label="Toggle menu"
                    class="inline-flex items-center justify-center rounded-md border border-border p-2 lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-menu" aria-hidden="true">
                        <path d="M4 5h16"></path>
                        <path d="M4 12h16"></path>
                        <path d="M4 19h16"></path>
                    </svg>
                </button>
            </div>
        </header>
        <main class="flex-1">
            @yield('content')
        </main>
        <footer class="bg-navy text-white/85">
            <div class="mx-auto grid max-w-7xl gap-10 px-4 py-14 sm:px-6 md:grid-cols-2 lg:grid-cols-4">
                <div>
                    <img src="{{ asset('images/logo.png') }}" alt="JM Courier logo"
                        class="h-20 bg-background rounded p-1 object-contain">
                    <p class="mt-3 text-sm leading-relaxed text-white/70">
                        Trusted Jaipur-based courier, luggage and parcel service delivering across India.
                        Fast pickups, secure transit, on-time delivery.
                    </p>
                </div>
                <div>
                    <div class="text-sm font-bold uppercase tracking-wide text-gold">Quick Links</div>
                    <ul class="mt-3 space-y-2 text-sm">
                        <li><a class="hover:text-white" href="/">Home</a></li>
                        <li><a href="/services" class="hover:text-white">Services</a></li>
                        <li><a href="/about" class="hover:text-white">About Us</a></li>
                        <li><a href="/coverage" class="hover:text-white">Coverage Areas</a></li>
                        <li><a href="/pricing" class="hover:text-white">Pricing / Quote</a></li>
                        <li><a href="/contact" class="hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <div class="text-sm font-bold uppercase tracking-wide text-gold">Services</div>
                    <ul class="mt-3 space-y-2 text-sm text-white/80">
                        <li>Courier Services</li>
                        <li>Luggage Transport</li>
                        <li>Parcel Delivery</li>
                        <li>Door-to-Door Pickup</li>
                        <li>Pan-India Shipping</li>
                    </ul>
                </div>
                <div>
                    <div class="text-sm font-bold uppercase tracking-wide text-gold">Contact</div>
                    <ul class="mt-3 space-y-3 text-sm">
                        <li class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-map-pin mt-0.5 shrink-0 text-gold" aria-hidden="true">
                                <path
                                    d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                </path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            Jaipur, Rajasthan, India
                        </li>
                        <li class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-phone mt-0.5 shrink-0 text-gold" aria-hidden="true">
                                <path
                                    d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384">
                                </path>
                            </svg>
                            <a href="tel:+919000000000" class="hover:text-white">+91 90000 00000</a>
                        </li>
                        <li class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-message-circle mt-0.5 shrink-0 text-gold" aria-hidden="true">
                                <path
                                    d="M2.992 16.342a2 2 0 0 1 .094 1.167l-1.065 3.29a1 1 0 0 0 1.236 1.168l3.413-.998a2 2 0 0 1 1.099.092 10 10 0 1 0-4.777-4.719">
                                </path>
                            </svg>
                            <a href="https://wa.me/919000000000" class="hover:text-white">WhatsApp Chat</a>
                        </li>
                        <li class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-mail mt-0.5 shrink-0 text-gold" aria-hidden="true">
                                <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path>
                                <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                            </svg>
                            <a href="mailto:info@jmcourier.in" class="hover:text-white">info@jmcourier.in</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-white/10">
                <div
                    class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-2 px-4 py-5 text-xs text-white/60 sm:flex-row sm:px-6">
                    <span>
                        © JM Courier and Luggage Parcel Service. All rights reserved.
                    </span>
                    <span>
                        Designed and Developed by
                        <a href="https://tejaldigital.in" class="hover:text-white">Tejal Digital</a>
                    </span>
                </div>
            </div>
        </footer>
        <a href="https://wa.me/919000000000?text=Hi%20JM%20Courier%2C%20I%20want%20to%20book%20a%20pickup."
            target="_blank" rel="noreferrer" aria-label="Chat on WhatsApp"
            class="fixed bottom-5 right-5 z-50 inline-flex items-center gap-2 rounded-full bg-whatsapp px-4 py-3 font-bold text-white shadow-elevated transition hover:scale-105">
            <x-icons.whatsapp/>
            <span class="hidden sm:inline">WhatsApp</span>
        </a>
    </div>
    @stack('footer-scripts')
</body>

</html>
