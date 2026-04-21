@extends('layouts.app')

@section('title', 'About | Premium Portfolio')

@section('content')
<section class="relative overflow-hidden bg-[#050505] text-white">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(214,194,154,0.14),transparent_26%),radial-gradient(circle_at_left_center,rgba(255,255,255,0.05),transparent_30%)]"></div>
    <div class="absolute inset-0 opacity-[0.03] bg-[linear-gradient(to_right,white_1px,transparent_1px),linear-gradient(to_bottom,white_1px,transparent_1px)] bg-[size:90px_90px]"></div>

    <div class="relative mx-auto max-w-7xl px-6 pb-20 pt-20 sm:px-8 lg:px-10 lg:pb-28 lg:pt-28">
        <div class="grid gap-12 lg:grid-cols-12 lg:items-end">
            <div class="lg:col-span-7">
                <div class="mb-6 inline-flex items-center rounded-full border border-white/10 bg-white/5 px-4 py-2 text-[10px] font-medium uppercase tracking-[0.28em] text-[#d6c29a] sm:text-xs">
                    About Me
                </div>

                <h1 class="max-w-5xl text-5xl font-medium leading-[0.92] tracking-[-0.06em] text-white sm:text-7xl lg:text-[6.5rem]">
                    Crafting modern
                    <span class="block">digital experiences</span>
                    <span class="block text-white/65">with precision.</span>
                </h1>
            </div>

            <div class="lg:col-span-5 lg:pl-8">
                <p class="max-w-xl text-sm leading-7 text-white/62 sm:text-base sm:leading-8">
                    I blend product thinking, elegant design sensibility, and strong engineering execution
                    to build websites and digital experiences that feel refined, modern, and memorable.
                </p>
            </div>
        </div>

        <div class="mt-16 grid gap-5 border-t border-white/10 pt-8 sm:grid-cols-3">
            <div>
                <p class="text-2xl font-semibold tracking-[-0.04em] sm:text-3xl">10+</p>
                <p class="mt-2 text-xs uppercase tracking-[0.2em] text-white/45">Years Experience</p>
            </div>
            <div>
                <p class="text-2xl font-semibold tracking-[-0.04em] sm:text-3xl">80+</p>
                <p class="mt-2 text-xs uppercase tracking-[0.2em] text-white/45">Projects Delivered</p>
            </div>
            <div>
                <p class="text-2xl font-semibold tracking-[-0.04em] sm:text-3xl">Premium</p>
                <p class="mt-2 text-xs uppercase tracking-[0.2em] text-white/45">Design Approach</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-[#050505] py-24 text-white sm:py-28">
    <div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-10">
        <div class="grid gap-8 lg:grid-cols-12 lg:items-start">
            <div class="lg:col-span-4">
                <p class="text-[10px] uppercase tracking-[0.32em] text-[#d6c29a] sm:text-xs">Introduction</p>
                <h2 class="mt-4 text-3xl font-medium leading-tight tracking-[-0.05em] text-white sm:text-5xl">
                    More than development. It is digital presentation with intent.
                </h2>
            </div>

            <div class="space-y-6 lg:col-span-8 lg:pl-10">
                <p class="text-base leading-8 text-white/62">
                    I work at the intersection of visual clarity, user experience, and technical structure.
                    My goal is to create interfaces that do not just function well, but communicate confidence,
                    trust, and sophistication from the first interaction.
                </p>

                <p class="text-base leading-8 text-white/62">
                    Whether it is a portfolio, a business website, or a product-facing platform, I focus on
                    typography, layout rhythm, motion, responsiveness, and clean backend architecture so the
                    final result feels complete from every angle.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="bg-[#050505] py-24 text-white sm:py-28">
    <div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-10">
        <div class="flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <p class="text-[10px] uppercase tracking-[0.32em] text-[#d6c29a] sm:text-xs">Core Expertise</p>
                <h2 class="mt-4 text-3xl font-medium tracking-[-0.05em] text-white sm:text-5xl">What I Bring</h2>
            </div>
            <p class="max-w-xl text-sm leading-7 text-white/55 sm:text-base">
                A balance of strong front-end presentation, backend reliability, and thoughtful user experience.
            </p>
        </div>

        <div class="mt-14 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
            @php
                $skills = [
                    ['Design Systems', 'Structured layouts, visual hierarchy, and modern premium UI thinking.'],
                    ['Laravel Development', 'Stable backend architecture, routing, reusable components, and scalable code.'],
                    ['Frontend Craft', 'Responsive interfaces with refined detail, spacing, and polished interactions.'],
                    ['Motion & Experience', 'Smooth transitions, subtle animation, and a more elevated digital feel.'],
                ];
            @endphp

            @foreach ($skills as [$title, $desc])
                <article class="rounded-[1.75rem] border border-white/10 bg-white/[0.03] p-7 transition duration-300 hover:-translate-y-1 hover:border-[#d6c29a]/30 hover:bg-white/[0.05]">
                    <h3 class="text-2xl font-medium tracking-[-0.04em] text-white">{{ $title }}</h3>
                    <p class="mt-4 text-sm leading-7 text-white/55">{{ $desc }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-[#050505] py-24 text-white sm:py-28">
    <div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-10">
        <div class="grid gap-8 lg:grid-cols-12 lg:items-start">
            <div class="lg:col-span-4">
                <p class="text-[10px] uppercase tracking-[0.32em] text-[#d6c29a] sm:text-xs">Process</p>
                <h2 class="mt-4 text-3xl font-medium leading-tight tracking-[-0.05em] text-white sm:text-5xl">
                    A simple process, executed with detail.
                </h2>
            </div>

            <div class="space-y-4 lg:col-span-8 lg:pl-10">
                @php
                    $steps = [
                        ['01', 'Discovery', 'Understanding your goals, audience, positioning, and the kind of impression your brand needs to make.'],
                        ['02', 'Design Direction', 'Building a strong visual system through layout, type, rhythm, and a premium design language.'],
                        ['03', 'Development', 'Turning the design into a responsive, clean, and well-structured Blade or Laravel implementation.'],
                        ['04', 'Polish', 'Refining the final experience with spacing, motion, responsiveness, and presentation quality.'],
                    ];
                @endphp

                @foreach ($steps as [$num, $title, $desc])
                    <div class="grid gap-5 rounded-[1.75rem] border border-white/10 bg-white/[0.03] p-7 transition duration-300 hover:border-[#d6c29a]/30 hover:bg-white/[0.05] md:grid-cols-[90px,1fr]">
                        <div class="text-xs uppercase tracking-[0.24em] text-[#d6c29a]">{{ $num }}</div>
                        <div>
                            <h3 class="text-2xl font-medium tracking-[-0.04em] text-white">{{ $title }}</h3>
                            <p class="mt-3 text-sm leading-7 text-white/55">{{ $desc }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="bg-[#050505] py-24 text-white sm:py-28">
    <div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-10">
        <div class="overflow-hidden rounded-[2rem] border border-white/10 bg-[radial-gradient(circle_at_top_center,rgba(214,194,154,0.18),transparent_28%),linear-gradient(180deg,rgba(255,255,255,0.05),rgba(255,255,255,0.02))] px-6 py-14 sm:px-10 sm:py-16 lg:px-16">
            <div class="grid gap-10 lg:grid-cols-12 lg:items-center">
                <div class="lg:col-span-8">
                    <p class="text-[10px] uppercase tracking-[0.32em] text-[#d6c29a] sm:text-xs">Let’s Work Together</p>
                    <h2 class="mt-5 max-w-4xl text-3xl font-medium leading-tight tracking-[-0.05em] text-white sm:text-5xl">
                        Looking for a digital presence that feels more premium than ordinary?
                    </h2>
                    <p class="mt-5 max-w-2xl text-sm leading-7 text-white/60 sm:text-base">
                        I build websites and digital experiences that combine visual elegance, technical quality,
                        and a stronger sense of brand presence.
                    </p>
                </div>

                <div class="lg:col-span-4 lg:flex lg:justify-end">
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center rounded-full bg-white px-8 py-3 text-sm font-medium text-black transition hover:scale-[1.02] hover:bg-[#f5f1e8]">
                        Start a Project
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection