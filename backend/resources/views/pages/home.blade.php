
@extends('layouts.app')

@section('title', 'Home | Premium Portfolio')

@section('content')
<section class="relative overflow-hidden bg-[#050505] text-white">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(212,175,55,0.14),transparent_28%),radial-gradient(circle_at_left_center,rgba(255,255,255,0.05),transparent_30%)]"></div>
    <div class="absolute inset-0 opacity-[0.03] bg-[linear-gradient(to_right,white_1px,transparent_1px),linear-gradient(to_bottom,white_1px,transparent_1px)] bg-[size:90px_90px]"></div>

    <div class="relative mx-auto max-w-7xl px-6 pb-20 pt-16 sm:px-8 lg:px-10 lg:pb-28 lg:pt-24">
        <div class="grid min-h-[88vh] items-center gap-14 lg:grid-cols-12">
            <div class="lg:col-span-7">
                <div class="mb-6 inline-flex items-center rounded-full border border-white/10 bg-white/5 px-4 py-2 text-[10px] font-medium uppercase tracking-[0.28em] text-[#d6c29a] sm:text-xs">
                    Award-Style Creative Portfolio
                </div>

                <h1 class="max-w-4xl text-5xl font-medium leading-[0.9] tracking-[-0.06em] text-white sm:text-7xl lg:text-[7.5rem]">
                    Senior
                    <span class="block">Creative</span>
                    <span class="block">Developer</span>
                </h1>

                <p class="mt-8 max-w-2xl text-sm leading-7 text-white/65 sm:text-base sm:leading-8">
                    I design and build premium digital experiences with a sharp focus on motion, storytelling, interface quality, and performance. Crafted for founders, brands, and professionals who want their digital presence to feel truly world-class.
                </p>

                <div class="mt-10 flex flex-wrap items-center gap-4">
                    <a href="{{ route('portfolio.index') }}" class="inline-flex items-center justify-center rounded-full bg-white px-7 py-3 text-sm font-medium text-black transition hover:scale-[1.02] hover:bg-[#f5f1e8]">
                        View Portfolio
                    </a>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center rounded-full border border-white/15 bg-white/5 px-7 py-3 text-sm font-medium text-white transition hover:border-[#d6c29a]/50 hover:bg-white/10">
                        Start Project
                    </a>
                </div>

                <div class="mt-14 grid max-w-3xl grid-cols-2 gap-4 border-t border-white/10 pt-8 sm:grid-cols-4">
                    <div>
                        <p class="text-2xl font-semibold tracking-[-0.04em] sm:text-3xl">10+</p>
                        <p class="mt-2 text-xs uppercase tracking-[0.2em] text-white/45">Years Experience</p>
                    </div>
                    <div>
                        <p class="text-2xl font-semibold tracking-[-0.04em] sm:text-3xl">80+</p>
                        <p class="mt-2 text-xs uppercase tracking-[0.2em] text-white/45">Projects Delivered</p>
                    </div>
                    <div>
                        <p class="text-2xl font-semibold tracking-[-0.04em] sm:text-3xl">25+</p>
                        <p class="mt-2 text-xs uppercase tracking-[0.2em] text-white/45">Happy Clients</p>
                    </div>
                    <div>
                        <p class="text-2xl font-semibold tracking-[-0.04em] sm:text-3xl">100%</p>
                        <p class="mt-2 text-xs uppercase tracking-[0.2em] text-white/45">Focused on Quality</p>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-5">
                <div class="group relative overflow-hidden rounded-[2rem] border border-white/10 bg-white/[0.04] p-6 shadow-[0_30px_80px_rgba(0,0,0,0.35)] backdrop-blur-xl transition duration-500 hover:-translate-y-1 hover:border-[#d6c29a]/30">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(214,194,154,0.18),transparent_28%)]"></div>
                    <div class="relative">
                        <div class="flex items-center justify-between text-[11px] uppercase tracking-[0.22em] text-white/45">
                            <span>Based in Pakistan</span>
                            <span>Available Worldwide</span>
                        </div>

                        <div class="mt-10 rounded-[1.75rem] border border-white/10 bg-gradient-to-b from-white/10 to-white/[0.03] p-8">
                            <div class="inline-flex rounded-full border border-[#d6c29a]/20 bg-[#d6c29a]/10 px-4 py-2 text-[11px] uppercase tracking-[0.22em] text-[#d6c29a]">
                                Premium Digital Craft
                            </div>

                            <h2 class="mt-8 text-3xl font-medium leading-tight tracking-[-0.04em] text-white sm:text-4xl">
                                Elegant interfaces.
                                <span class="block text-white/65">Powerful backend systems.</span>
                            </h2>

                            <p class="mt-5 max-w-md text-sm leading-7 text-white/60">
                                Building portfolio websites, product interfaces, and digital platforms that feel refined, modern, and memorable.
                            </p>

                            <div class="mt-10 grid grid-cols-2 gap-4 text-sm text-white/70">
                                <div class="rounded-2xl border border-white/10 bg-black/20 p-4">
                                    <p class="text-[10px] uppercase tracking-[0.2em] text-white/40">Speciality</p>
                                    <p class="mt-2 font-medium text-white">Laravel + UI</p>
                                </div>
                                <div class="rounded-2xl border border-white/10 bg-black/20 p-4">
                                    <p class="text-[10px] uppercase tracking-[0.2em] text-white/40">Approach</p>
                                    <p class="mt-2 font-medium text-white">Design + Motion</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-[#050505] py-24 text-white sm:py-28">
    <div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-10">
        <div class="flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <p class="text-[10px] uppercase tracking-[0.32em] text-[#d6c29a] sm:text-xs">Services</p>
                <h2 class="mt-4 text-3xl font-medium tracking-[-0.05em] text-white sm:text-5xl">What I Do Best</h2>
            </div>
            <p class="max-w-xl text-sm leading-7 text-white/55 sm:text-base">
                Every service is shaped around presentation quality, user experience, and technical execution that feels premium from the first scroll.
            </p>
        </div>

        <div class="mt-14 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
            @php
                $services = [
                    ['01', 'Web Design', 'Clean, modern, and visually striking interfaces designed for premium brands.'],
                    ['02', 'Frontend Development', 'High-performance, animation-rich frontends with polished responsiveness.'],
                    ['03', 'Laravel Development', 'Robust multi-page portfolio systems and custom digital platforms using Laravel.'],
                    ['04', 'Motion Experience', 'Smooth transitions, scroll-based storytelling, and premium interaction design.'],
                ];
            @endphp

            @foreach ($services as [$number, $title, $desc])
                <article class="group rounded-[1.75rem] border border-white/10 bg-white/[0.03] p-7 transition duration-300 hover:-translate-y-1 hover:border-[#d6c29a]/30 hover:bg-white/[0.05]">
                    <p class="text-xs uppercase tracking-[0.22em] text-[#d6c29a]">{{ $number }}</p>
                    <h3 class="mt-6 text-2xl font-medium tracking-[-0.04em] text-white">{{ $title }}</h3>
                    <p class="mt-4 text-sm leading-7 text-white/55">{{ $desc }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-[#050505] py-24 text-white sm:py-28">
    <div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-10">
        <div class="grid gap-10 lg:grid-cols-12 lg:items-start">
            <div class="lg:col-span-5">
                <p class="text-[10px] uppercase tracking-[0.32em] text-[#d6c29a] sm:text-xs">About</p>
                <h2 class="mt-4 text-3xl font-medium leading-tight tracking-[-0.05em] sm:text-5xl">
                    Designing experiences that feel high-end and memorable.
                </h2>
            </div>
            <div class="lg:col-span-7 lg:pl-8">
                <p class="max-w-2xl text-base leading-8 text-white/62">
                    I help brands and professionals present themselves with clarity, confidence, and visual authority through carefully crafted websites and digital products. The focus is not only on how things work, but how they feel.
                </p>
                <div class="mt-8">
                    <a href="{{ route('about') }}" class="inline-flex items-center gap-3 text-sm font-medium text-[#d6c29a] transition hover:text-white">
                        Read More
                        <span aria-hidden="true">→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-[#050505] py-24 text-white sm:py-28">
    <div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-10">
        <div class="flex items-end justify-between gap-6">
            <div>
                <p class="text-[10px] uppercase tracking-[0.32em] text-[#d6c29a] sm:text-xs">Recognition</p>
                <h2 class="mt-4 text-3xl font-medium tracking-[-0.05em] text-white sm:text-5xl">Awards & Mentions</h2>
            </div>
        </div>

        <div class="mt-14 space-y-4">
            @php
                $awards = [
                    ['Site Inspiration Mention', 'Recognized for premium visual design and strong motion presentation.', '2026'],
                    ['Creative Interface Showcase', 'Featured for immersive portfolio design and elegant front-end direction.', '2025'],
                    ['Design Excellence Highlight', 'Selected as a standout concept in premium portfolio presentation.', '2024'],
                ];
            @endphp

            @foreach ($awards as [$title, $desc, $year])
                <div class="flex flex-col gap-6 rounded-[1.75rem] border border-white/10 bg-white/[0.03] p-7 transition duration-300 hover:border-[#d6c29a]/30 hover:bg-white/[0.05] sm:flex-row sm:items-start sm:justify-between">
                    <div class="max-w-3xl">
                        <h3 class="text-2xl font-medium tracking-[-0.04em] text-white">{{ $title }}</h3>
                        <p class="mt-3 text-sm leading-7 text-white/55">{{ $desc }}</p>
                    </div>
                    <span class="text-xs uppercase tracking-[0.24em] text-[#d6c29a]">{{ $year }}</span>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-[#050505] py-24 text-white sm:py-28">
    <div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-10">
        <div class="flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <p class="text-[10px] uppercase tracking-[0.32em] text-[#d6c29a] sm:text-xs">Selected Work</p>
                <h2 class="mt-4 text-3xl font-medium tracking-[-0.05em] text-white sm:text-5xl">Featured Projects</h2>
            </div>
        </div>

        <div class="mt-14 grid gap-6 lg:grid-cols-12">
            <a href="{{ route('portfolio.show') }}" class="group relative overflow-hidden rounded-[2rem] border border-white/10 bg-white/[0.03] lg:col-span-7 lg:min-h-[34rem]">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(214,194,154,0.26),transparent_28%),linear-gradient(135deg,#141414,#222_45%,#0c0c0c)] transition duration-500 group-hover:scale-105"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/10 to-transparent"></div>
                <div class="relative flex h-full min-h-[26rem] flex-col justify-end p-8 sm:p-10">
                    <span class="text-[11px] uppercase tracking-[0.24em] text-[#d6c29a]">Brand Website</span>
                    <h3 class="mt-4 max-w-xl text-3xl font-medium tracking-[-0.04em] text-white sm:text-4xl">Luxury Studio Experience</h3>
                    <p class="mt-4 max-w-lg text-sm leading-7 text-white/65">An elegant brand presence built with immersive spacing, bold typography, and a premium dark visual system.</p>
                </div>
            </a>

            <div class="grid gap-6 lg:col-span-5">
                <a href="{{ route('portfolio.show') }}" class="group relative overflow-hidden rounded-[2rem] border border-white/10 bg-white/[0.03]">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(214,194,154,0.18),transparent_24%),linear-gradient(135deg,#121212,#1c1c1c_55%,#0d0d0d)] transition duration-500 group-hover:scale-105"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/10 to-transparent"></div>
                    <div class="relative flex min-h-[16rem] flex-col justify-end p-7">
                        <span class="text-[11px] uppercase tracking-[0.24em] text-[#d6c29a]">Portfolio</span>
                        <h3 class="mt-3 text-2xl font-medium tracking-[-0.04em] text-white">Creative Personal Brand</h3>
                    </div>
                </a>

                <a href="{{ route('portfolio.show') }}" class="group relative overflow-hidden rounded-[2rem] border border-white/10 bg-white/[0.03]">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(214,194,154,0.18),transparent_22%),linear-gradient(135deg,#151515,#202020_55%,#0b0b0b)] transition duration-500 group-hover:scale-105"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/10 to-transparent"></div>
                    <div class="relative flex min-h-[16rem] flex-col justify-end p-7">
                        <span class="text-[11px] uppercase tracking-[0.24em] text-[#d6c29a]">Corporate</span>
                        <h3 class="mt-3 text-2xl font-medium tracking-[-0.04em] text-white">High-End Business Presence</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="bg-[#050505] py-24 text-white sm:py-28">
    <div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-10">
        <div>
            <p class="text-[10px] uppercase tracking-[0.32em] text-[#d6c29a] sm:text-xs">Experience</p>
            <h2 class="mt-4 text-3xl font-medium tracking-[-0.05em] text-white sm:text-5xl">Professional Journey</h2>
        </div>

        <div class="mt-14 space-y-4">
            @php
                $timeline = [
                    ['2023 — Present', 'Senior Software Engineer', 'Leading modern digital product development with performance-focused engineering.'],
                    ['2020 — 2023', 'Full Stack Developer', 'Built scalable platforms, dashboards, and user-facing products across industries.'],
                    ['2016 — 2020', 'Frontend & UI Specialist', 'Focused on polished interfaces, responsive systems, and strong visual execution.'],
                ];
            @endphp

            @foreach ($timeline as [$years, $role, $desc])
                <div class="grid gap-5 rounded-[1.75rem] border border-white/10 bg-white/[0.03] p-7 transition duration-300 hover:border-[#d6c29a]/30 hover:bg-white/[0.05] md:grid-cols-[180px,1fr] md:items-start">
                    <div class="text-xs uppercase tracking-[0.22em] text-[#d6c29a]">{{ $years }}</div>
                    <div>
                        <h3 class="text-2xl font-medium tracking-[-0.04em] text-white">{{ $role }}</h3>
                        <p class="mt-3 text-sm leading-7 text-white/55">{{ $desc }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-[#050505] py-24 text-white sm:py-28">
    <div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-10">
        <div>
            <p class="text-[10px] uppercase tracking-[0.32em] text-[#d6c29a] sm:text-xs">Reviews</p>
            <h2 class="mt-4 text-3xl font-medium tracking-[-0.05em] text-white sm:text-5xl">What Clients Say</h2>
        </div>

        <div class="mt-14 grid gap-5 lg:grid-cols-3">
            @php
                $testimonials = [
                    ['Exceptional attention to detail and a very premium sense of design.', 'Client One'],
                    ['The final website felt elegant, modern, and far above the usual standard.', 'Client Two'],
                    ['Strong technical execution with beautiful presentation and motion.', 'Client Three'],
                ];
            @endphp

            @foreach ($testimonials as [$quote, $name])
                <article class="rounded-[1.75rem] border border-white/10 bg-white/[0.03] p-7 transition duration-300 hover:-translate-y-1 hover:border-[#d6c29a]/30 hover:bg-white/[0.05]">
                    <p class="text-base leading-8 text-white/75">“{{ $quote }}”</p>
                    <h3 class="mt-8 text-lg font-medium text-white">{{ $name }}</h3>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-[#050505] py-24 text-white sm:py-28">
    <div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-10">
        <div class="overflow-hidden rounded-[2rem] border border-white/10 bg-[radial-gradient(circle_at_top_center,rgba(214,194,154,0.18),transparent_28%),linear-gradient(180deg,rgba(255,255,255,0.05),rgba(255,255,255,0.02))] px-6 py-14 text-center sm:px-10 sm:py-16 lg:px-16">
            <p class="text-[10px] uppercase tracking-[0.32em] text-[#d6c29a] sm:text-xs">Start Your Project</p>
            <h2 class="mx-auto mt-5 max-w-4xl text-3xl font-medium leading-tight tracking-[-0.05em] text-white sm:text-5xl">
                Ready to create a portfolio that feels world-class?
            </h2>
            <div class="mt-9">
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center rounded-full bg-white px-8 py-3 text-sm font-medium text-black transition hover:scale-[1.02] hover:bg-[#f5f1e8]">
                    Let’s Work Together
                </a>
            </div>
        </div>
    </div>
</section>
@endsection


