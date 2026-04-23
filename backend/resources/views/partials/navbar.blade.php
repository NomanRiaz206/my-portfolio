<header class="sticky top-0 z-50 border-b border-white/10 bg-[#050505]/80 backdrop-blur-xl">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 sm:px-8 lg:px-10">
        <a href="{{ route('home') }}" class="group inline-flex items-center gap-3">
            <span class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/10 bg-white/5 text-sm font-semibold tracking-[0.2em] text-white transition group-hover:border-[#d6c29a]/40 group-hover:text-[#d6c29a]">
                N
            </span>
            <div class="leading-tight">
                <span class="block text-sm font-semibold uppercase tracking-[0.28em] text-white">Noman R.</span>
                <span class="block text-[10px] uppercase tracking-[0.24em] text-white/40">Creative Developer</span>
            </div>
        </a>

        <nav class="hidden items-center gap-8 lg:flex">
            <a href="{{ route('home') }}" class="text-sm font-medium text-white/70 transition hover:text-white">Home</a>
            <a href="{{ route('about') }}" class="text-sm font-medium text-white/70 transition hover:text-white">About</a>
            <a href="{{ route('portfolio.index') }}" class="text-sm font-medium text-white/70 transition hover:text-white">Portfolio</a>
            <a href="{{ route('reviews') }}" class="text-sm font-medium text-white/70 transition hover:text-white">Reviews</a>
            <a href="{{ route('contact') }}" class="text-sm font-medium text-white/70 transition hover:text-white">Contact</a>
        </nav>

        <div class="flex items-center gap-3">
            <a href="{{ route('contact') }}" class="hidden rounded-full border border-white/10 bg-white px-6 py-3 text-sm font-medium text-black transition hover:scale-[1.02] hover:bg-[#f5f1e8] sm:inline-flex">
                Let’s Talk
            </a>

            <button
                type="button"
                class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-white/10 bg-white/5 text-white transition hover:border-[#d6c29a]/40 hover:text-[#d6c29a] lg:hidden"
                data-bs-toggle="offcanvas"
                data-bs-target="#mobileMenu"
                aria-controls="mobileMenu"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 7h16M4 12h16M4 17h16"/>
                </svg>
            </button>
        </div>
    </div>
</header>