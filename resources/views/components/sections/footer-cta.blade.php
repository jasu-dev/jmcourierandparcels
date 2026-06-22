<section class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-20 ">
    <div class="overflow-hidden rounded-3xl bg-hero-gradient p-8 text-white shadow-elevated sm:p-12">
        <div class="grid items-center gap-6 md:grid-cols-[1fr_auto]">
            <div class="text-center sm:text-start">
                <h2 class="text-2xl font-extrabold sm:text-3xl">
                    Ready to ship from Jaipur today?
                </h2>
                <p class="mt-2 text-white/85">
                    Get a free quote in minutes or book a doorstep pickup right now.
                </p>
            </div>
            <div class="flex flex-col sm:flex-row flex-wrap gap-3">
                <a href="tel:+91{{ config('services.info.phone') }}"
                    class="inline-flex justify-center items-center gap-2 rounded-full bg-white/10 px-6 py-3 font-bold ring-1 ring-white/30 backdrop-blur hover:bg-white/20">
                    <x-icons.phone class="w-4 h-4" />
                    Get Quote
                </a>
                <a href="https://wa.me/91{{ config('services.info.phone') }}"
                    class="inline-flex justify-center items-center gap-2 rounded-full bg-whatsapp px-4 py-3 font-bold text-white shadow-elevated hover:brightness-105">
                    <x-icons.whatsapp class="w-5 h-5" />
                    WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>
