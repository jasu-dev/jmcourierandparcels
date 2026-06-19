@extends('layouts.app')

@section('content')
    <div class="bg-hero-gradient text-white">
        <div class="mx-auto max-w-7xl px-4 py-14 sm:px-6 sm:py-20">
            <h1 class="text-3xl font-extrabold sm:text-5xl">Contact &amp; Book Pickup</h1>
            <p class="mt-3 max-w-2xl text-white/85 sm:text-lg">Talk to our Jaipur team — book a pickup, request a quote or
                get help with your shipment.</p>
        </div>
    </div>

    <section class="mx-auto w-full max-w-7xl px-4 py-8 sm:px-6 sm:py-20 sm:pb-10 ">
        <div class="grid gap-10 lg:grid-cols-2">
            <div class="space-y-6">
                <a href="tel:+919000000000" class="block">
                    <div
                        class="flex items-center gap-4 rounded-2xl border border-border bg-card p-4">
                        <div
                            class="inline-flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-gradient text-primary-foreground shadow-soft">
                            <x-icons.phone class="w-5 h-5" />
                        </div>
                        <div class="min-w-0">
                            <div class="text-xs font-bold uppercase tracking-wide text-muted-foreground">Call Us</div>
                            <div class="truncate font-semibold text-navy">+91 90000 00000</div>
                        </div>
                    </div>
                </a>
                <a href="mailto:info@jmcourier.in" class="block">
                    <div
                        class="flex items-center gap-4 rounded-2xl border border-border bg-card p-4">
                        <div
                            class="inline-flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-gradient text-primary-foreground shadow-soft">
                            <x-icons.mail class="w-5 h-5" />
                        </div>
                        <div class="min-w-0">
                            <div class="text-xs font-bold uppercase tracking-wide text-muted-foreground">Email</div>
                            <div class="truncate font-semibold text-navy">info@jmcourier.in</div>
                        </div>
                    </div>
                </a>
                <div
                    class="flex items-center gap-4 rounded-2xl border border-border bg-card p-4">
                    <div
                        class="inline-flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-gradient text-primary-foreground shadow-soft">
                        <x-icons.map-pin class="w-5 h-5" />
                    </div>
                    <div class="min-w-0">
                        <div class="text-xs font-bold uppercase tracking-wide text-muted-foreground">Office</div>
                        <div class="truncate font-semibold text-navy">Jaipur, Rajasthan, India</div>
                    </div>
                </div>
                <div
                    class="flex items-center gap-4 rounded-2xl border border-border bg-card p-4">
                    <div
                        class="inline-flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-gradient text-primary-foreground shadow-soft">
                        <x-icons.time class="w-5 h-5" />
                    </div>
                    <div class="min-w-0">
                        <div class="text-xs font-bold uppercase tracking-wide text-muted-foreground">Working Hours</div>
                        <div class="truncate font-semibold text-navy">Mon–Sun · 9:00 AM – 8:00 PM</div>
                    </div>
                </div>
            </div>
            <div>
                <div class="bg-card border border-border rounded-2xl overflow-hidden flex flex-col min-h-[400px] h-full">
                    <div class="bg-[#075e54] p-5 flex items-center gap-4 text-white">
                        <div class="relative">
                            <div
                                class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-[#075e54] font-bold text-xl uppercase">
                                JM</div>
                            <span
                                class="absolute bottom-0 right-0 w-3 h-3 bg-[#25D366] border-2 border-[#075e54] rounded-full animate-pulse"></span>
                        </div>
                        <div>
                            <h3 class="font-display font-medium">JM Courier, Cargo &amp; Luggage</h3>
                            <p class="text-[10px] opacity-80 uppercase tracking-widest">Typically responds in minutes</p>
                        </div>
                    </div>

                    <div class="flex-1 p-6 space-y-4 overflow-y-auto bg-[#e5ddd5]/40"
                        style="background-image: url('https://user-images.githubusercontent.com/15075759/28719144-86dc0f70-73b1-11e7-911d-60d70fcded21.png'); background-repeat: repeat; background-size: 400px;">
                        <div
                            class="bg-white p-4 rounded-2xl rounded-tl-none shadow-sm max-w-[85%] text-sm relative border border-border/50">
                            <p class="text-foreground/80 leading-relaxed font-medium mb-1">JM Courier, Cargo &amp; Luggage</p>
                            <p class="text-foreground/70 leading-relaxed">Hi there! 👋 <br>
                                How can we help you with your courier, cargo and luggage parcel needs today?</p>
                            <span class="text-[10px] text-muted-foreground mt-1 block text-right">Online</span>
                        </div>
                    </div>

                    <div class="p-4 bg-background border-t border-border flex items-center gap-3">
                        <input type="text" id="wa-message" placeholder="Type a message to start..."
                            class="flex-1 rounded-full border border-border bg-muted/30 px-5 py-3 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition">
                        <button onclick="sendWhatsAppMessage()"
                            class="grid h-11 w-11 place-items-center rounded-full bg-whatsapp text-white cursor-pointer">
                            <x-icons.arrow-right class="w-5 h-5" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-sections.footer-cta />
@endsection

@push('footer-scripts')
<script>
        function sendWhatsAppMessage() {
            const messageBox = document.getElementById('wa-message');
            const message = messageBox.value;
            if (message.trim() === '') return;

            const encodedMessage = encodeURIComponent(message);
            const whatsappUrl = `https://wa.me/917737972604?text=${encodedMessage}`;
            window.open(whatsappUrl, '_blank');
            messageBox.value = '';
        }

        document.getElementById('wa-message')?.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                sendWhatsAppMessage();
            }
        });
    </script>
@endpush