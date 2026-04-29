<header class="fixed left-0 top-0 z-50 w-full border-b border-white/10 bg-[#0f172a]/95 backdrop-blur-xl">
    <div class="mx-auto flex h-[72px] max-w-7xl items-center justify-between px-8">

        <a href="{{ route('admin.projects.index') }}" class="flex items-center gap-4">
            <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-white text-sm font-black text-slate-950">
                N
            </span>

            <span>
                <span class="block text-sm font-black uppercase leading-none tracking-[0.25em] text-white">
                    Noman R.
                </span>
                <span class="mt-2 block text-[10px] uppercase leading-none tracking-[0.22em] text-slate-400">
                    Creative Developer
                </span>
            </span>
        </a>

        @auth
            <div class="flex items-center gap-8">
                <a href="{{ route('admin.projects.index') }}"
                   class="rounded-full px-4 py-2 text-sm font-semibold text-[#d7c3a2] transition hover:bg-white/10 hover:text-white">
                    Projects
                </a>
            <a href="{{ route('admin.blogs.index') }}"
                   class="rounded-full px-4 py-2 text-sm font-semibold text-[#d7c3a2] transition hover:bg-white/10 hover:text-white">
                    Blogs
                </a>
                

                <div class="relative" x-data="{ open: false }">
                    <button
                        type="button"
                        @click="open = !open"
                        class="flex h-11 items-center gap-3 rounded-xl border border-white/10 bg-white/5 px-3 text-white transition hover:bg-white/10"
                    >
                        <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-[#d7c3a2] text-xs font-black text-slate-950">
                            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                        </span>

                        <span class="hidden text-sm font-semibold sm:block">
                            {{ auth()->user()->name }}
                        </span>

                        <svg class="h-4 w-4 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>

                    <div
                        x-show="open"
                        x-cloak
                        @click.outside="open = false"
                        x-transition
                        class="absolute right-0 top-14 z-50 w-56 overflow-hidden rounded-2xl border border-white/10 bg-slate-950 shadow-2xl shadow-black/50"
                    >
                        <div class="border-b border-white/10 px-4 py-3">
                            <p class="truncate text-sm font-bold text-white">{{ auth()->user()->name }}</p>
                            <p class="mt-1 truncate text-xs text-slate-400">{{ auth()->user()->email }}</p>
                        </div>

                        <a href="{{ route('admin.projects.index') }}"
                           class="block px-4 py-3 text-sm text-slate-300 hover:bg-white/5 hover:text-white">
                            Manage Projects
                        </a>

                        <form method="POST" action="{{ route('admin.logout') }}">
                            @csrf
                            <button type="submit"
                                    class="block w-full px-4 py-3 text-left text-sm text-red-300 hover:bg-red-500/10">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endauth

    </div>
</header>