@extends('layouts.app')

@section('title', 'Contact | Premium Portfolio')

@section('content')
<section class="relative overflow-hidden bg-[#050505] text-white">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(214,194,154,0.14),transparent_26%),radial-gradient(circle_at_left_center,rgba(255,255,255,0.05),transparent_30%)]"></div>
    <div class="absolute inset-0 opacity-[0.03] bg-[linear-gradient(to_right,white_1px,transparent_1px),linear-gradient(to_bottom,white_1px,transparent_1px)] bg-[size:90px_90px]"></div>

    <div class="relative mx-auto max-w-7xl px-6 pb-20 pt-20 sm:px-8 lg:px-10 lg:pb-28 lg:pt-28">
        <div class="grid gap-12 lg:grid-cols-12 lg:items-end">
            <div class="lg:col-span-7">
                <div class="mb-6 inline-flex items-center rounded-full border border-white/10 bg-white/5 px-4 py-2 text-[10px] font-medium uppercase tracking-[0.28em] text-[#d6c29a] sm:text-xs">
                    Contact
                </div>

                <h1 class="max-w-5xl text-5xl font-medium leading-[0.92] tracking-[-0.06em] text-white sm:text-7xl lg:text-[6.5rem]">
                    Let’s discuss your next
                    <span class="block">premium digital</span>
                    <span class="block text-white/65">product.</span>
                </h1>
            </div>

            <div class="lg:col-span-5 lg:pl-8">
                <p class="max-w-xl text-sm leading-7 text-white/62 sm:text-base sm:leading-8">
                    Whether you need a portfolio website, business presence, or a more refined digital
                    experience, I’m open to discussing projects that value quality, clarity, and strong execution.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="bg-[#050505] py-24 text-white sm:py-28">
    <div class="mx-auto grid max-w-7xl gap-8 px-6 sm:px-8 lg:grid-cols-12 lg:px-10">
        <div class="lg:col-span-5">
            <p class="text-[10px] uppercase tracking-[0.32em] text-[#d6c29a] sm:text-xs">Get In Touch</p>
            <h2 class="mt-4 text-3xl font-medium leading-tight tracking-[-0.05em] text-white sm:text-5xl">
                Start a conversation that leads to better design.
            </h2>

            <p class="mt-6 max-w-xl text-sm leading-7 text-white/58 sm:text-base">
                Share a few details about your project, brand, or idea. I’ll review it and get back to you
                with the right direction for moving forward.
            </p>

            <div class="mt-10 space-y-4">
                <div class="rounded-[1.5rem] border border-white/10 bg-white/[0.03] p-5">
                    <p class="text-[10px] uppercase tracking-[0.24em] text-white/40">Email</p>
                    <a href="mailto:hello@example.com" class="mt-2 block text-base font-medium text-white transition hover:text-[#d6c29a]">
                        hello@example.com
                    </a>
                </div>

                <div class="rounded-[1.5rem] border border-white/10 bg-white/[0.03] p-5">
                    <p class="text-[10px] uppercase tracking-[0.24em] text-white/40">WhatsApp</p>
                    <a href="https://wa.me/923001234567" class="mt-2 block text-base font-medium text-white transition hover:text-[#d6c29a]">
                        +92 300 1234567
                    </a>
                </div>

                <div class="rounded-[1.5rem] border border-white/10 bg-white/[0.03] p-5">
                    <p class="text-[10px] uppercase tracking-[0.24em] text-white/40">Location</p>
                    <p class="mt-2 text-base font-medium text-white">Lahore, Pakistan</p>
                </div>
            </div>
        </div>

        <div class="lg:col-span-7">
            <div class="rounded-[2rem] border border-white/10 bg-white/[0.03] p-6 sm:p-8 lg:p-10">
                <p class="text-[10px] uppercase tracking-[0.32em] text-[#d6c29a] sm:text-xs">Project Inquiry</p>
                <h3 class="mt-4 text-2xl font-medium tracking-[-0.04em] text-white sm:text-3xl">
                    Tell me about your project
                </h3>

                <form class="mt-8 space-y-5">
                    <div class="grid gap-5 md:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-xs uppercase tracking-[0.2em] text-white/45">Full Name</label>
                            <input
                                type="text"
                                placeholder="Your name"
                                class="w-full rounded-2xl border border-white/10 bg-black/20 px-5 py-4 text-sm text-white placeholder:text-white/30 outline-none transition focus:border-[#d6c29a]/40"
                            >
                        </div>

                        <div>
                            <label class="mb-2 block text-xs uppercase tracking-[0.2em] text-white/45">Email</label>
                            <input
                                type="email"
                                placeholder="you@example.com"
                                class="w-full rounded-2xl border border-white/10 bg-black/20 px-5 py-4 text-sm text-white placeholder:text-white/30 outline-none transition focus:border-[#d6c29a]/40"
                            >
                        </div>
                    </div>

                    

                    <div>
                        <label class="mb-2 block text-xs uppercase tracking-[0.2em] text-white/45">Project Details</label>
                        <textarea
                            rows="6"
                            placeholder="Tell me about your project, goals, style preferences, and timeline."
                            class="w-full rounded-[1.5rem] border border-white/10 bg-black/20 px-5 py-4 text-sm text-white placeholder:text-white/30 outline-none transition focus:border-[#d6c29a]/40"
                        ></textarea>
                    </div>

                    <div class="flex flex-wrap items-center gap-4 pt-2">
                        <button
                            type="submit"
                            class="inline-flex items-center justify-center rounded-full bg-white px-8 py-3 text-sm font-medium text-black transition hover:scale-[1.02] hover:bg-[#f5f1e8]"
                        >
                            Send Inquiry
                        </button>

                        <a
                            href="https://wa.me/923001234567"
                            class="inline-flex items-center justify-center rounded-full border border-white/10 bg-white/5 px-8 py-3 text-sm font-medium text-white transition hover:border-[#d6c29a]/40 hover:bg-white/10"
                        >
                            Chat on WhatsApp
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="bg-[#050505] py-24 text-white sm:py-28">
    <div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-10">
        <div class="overflow-hidden rounded-[2rem] border border-white/10 bg-[radial-gradient(circle_at_top_center,rgba(214,194,154,0.18),transparent_28%),linear-gradient(180deg,rgba(255,255,255,0.05),rgba(255,255,255,0.02))] px-6 py-14 text-center sm:px-10 sm:py-16 lg:px-16">
            <p class="text-[10px] uppercase tracking-[0.32em] text-[#d6c29a] sm:text-xs">Quick Response</p>
            <h2 class="mx-auto mt-5 max-w-4xl text-3xl font-medium leading-tight tracking-[-0.05em] text-white sm:text-5xl">
                Looking for a polished digital presence with real impact?
            </h2>
            <p class="mx-auto mt-5 max-w-2xl text-sm leading-7 text-white/60 sm:text-base">
                I work best on projects where presentation, user experience, and technical quality are equally important.
            </p>

            <div class="mt-9 flex flex-wrap items-center justify-center gap-4">
                <a href="mailto:hello@example.com"
                   class="inline-flex items-center justify-center rounded-full bg-white px-8 py-3 text-sm font-medium text-black transition hover:scale-[1.02] hover:bg-[#f5f1e8]">
                    Email Me
                </a>
                <a href="https://wa.me/923001234567"
                   class="inline-flex items-center justify-center rounded-full border border-white/10 bg-white/5 px-8 py-3 text-sm font-medium text-white transition hover:border-[#d6c29a]/40 hover:bg-white/10">
                    WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>
@endsection