
@extends('layouts.app')

@section('title', 'NOMAN RIAZ | Senior Software Engineer')

@section('content')
<div class="relative min-h-screen overflow-x-hidden bg-[#070707] text-white">

    <div class="pointer-events-none absolute inset-0 -z-10">
        <div class="absolute left-0 top-0 h-128 w-[32rem] rounded-full bg-white/[0.03] blur-3xl"></div>
        <div class="absolute bottom-0 right-0 h-[28rem] w-[28rem] rounded-full bg-white/[0.02] blur-3xl"></div>
        <div class="absolute inset-0 bg-[linear-gradient(to_right,rgba(255,255,255,0.025)_1px,transparent_1px),linear-gradient(to_bottom,rgba(255,255,255,0.025)_1px,transparent_1px)] bg-[size:72px_72px] opacity-[0.10]"></div>
    </div>

    <header class="fixed inset-x-0 top-0 z-50">
        <div class="mx-auto max-w-7xl px-4 pt-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between rounded-full border border-white/10 bg-black/45 px-5 py-3 backdrop-blur-xl shadow-[0_10px_40px_rgba(0,0,0,0.25)]">
                <a href="#home" class="text-sm font-semibold uppercase tracking-[0.35em] text-white/90">
                    AH .
                </a>

                <nav class="hidden items-center gap-7 md:flex">
                    <a href="#about" class="nav-link text-sm text-white/65 transition hover:text-white">About</a>
                    <a href="#projects" class="nav-link text-sm text-white/65 transition hover:text-white">Projects</a>
                    <a href="#skills" class="nav-link text-sm text-white/65 transition hover:text-white">Skills</a>
                    <a href="#experience" class="nav-link text-sm text-white/65 transition hover:text-white">Experience</a>
                    <a href="#contact" class="nav-link text-sm text-white/65 transition hover:text-white">Contact</a>
                </nav>

                <div class="flex items-center gap-3">
                    <a href="#contact" class="hidden rounded-full border border-white/15 px-4 py-2 text-sm font-medium text-white transition hover:border-white hover:bg-white hover:text-black sm:inline-flex">
                        Let’s Talk
                    </a>

                    <button id="menuToggle" type="button" class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-white/10 bg-white/[0.03] text-white md:hidden">
                        <svg id="menuOpenIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg id="menuCloseIcon" xmlns="http://www.w3.org/2000/svg" class="hidden h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <div id="mobileMenu" class="mt-3 hidden rounded-[1.75rem] border border-white/10 bg-black/70 p-4 backdrop-blur-xl md:hidden">
                <div class="flex flex-col gap-2">
                    <a href="#about" class="mobile-link rounded-2xl px-4 py-3 text-sm text-white/70 transition hover:bg-white/[0.05] hover:text-white">About</a>
                    <a href="#projects" class="mobile-link rounded-2xl px-4 py-3 text-sm text-white/70 transition hover:bg-white/[0.05] hover:text-white">Projects</a>
                    <a href="#skills" class="mobile-link rounded-2xl px-4 py-3 text-sm text-white/70 transition hover:bg-white/[0.05] hover:text-white">Skills</a>
                    <a href="#experience" class="mobile-link rounded-2xl px-4 py-3 text-sm text-white/70 transition hover:bg-white/[0.05] hover:text-white">Experience</a>
                    <a href="#contact" class="mobile-link rounded-2xl px-4 py-3 text-sm text-white/70 transition hover:bg-white/[0.05] hover:text-white">Contact</a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section id="home" class="mx-auto max-w-7xl px-4 pb-20 pt-36 sm:px-6 lg:px-8 lg:pb-28 lg:pt-40">
            <div class="grid items-center gap-14 lg:grid-cols-[1.08fr_0.92fr]">
                <div class="reveal">
                    <p class="mb-5 text-xs uppercase tracking-[0.4em] text-white/40 sm:text-sm">
                        Senior Software Engineer · Laravel Expert · AI Systems Builder
                    </p>

                    <h1 class="max-w-4xl text-4xl font-semibold leading-[1.05] text-white sm:text-6xl lg:text-7xl xl:text-[5.4rem]">
                        I build modern
                        <span class="text-white/70">web platforms</span>
                        and intelligent
                        <span class="text-white/70">software systems</span>
                        that perform in the real world.
                    </h1>

                    <p class="mt-7 max-w-2xl text-base leading-8 text-white/65 sm:text-lg">
                        I’m Ali Hassan Cheema, a backend-focused full-stack engineer with 10+ years of experience building Laravel applications, enterprise systems, APIs, automation workflows, and AI-powered products with production-grade quality.
                    </p>

                    <div class="mt-9 flex flex-wrap gap-4">
                        <a href="#projects" class="inline-flex items-center rounded-full bg-white px-6 py-3 text-sm font-semibold text-black transition duration-300 hover:-translate-y-0.5 hover:shadow-[0_10px_30px_rgba(255,255,255,0.15)]">
                            View My Work
                        </a>
                        <a href="#contact" class="inline-flex items-center rounded-full border border-white/15 px-6 py-3 text-sm font-semibold text-white transition duration-300 hover:border-white hover:bg-white hover:text-black">
                            Get in Touch
                        </a>
                    </div>

                    <div class="mt-10 flex flex-wrap gap-6 text-sm text-white/55">
                        <a href="https://github.com/yourusername" target="_blank" class="transition hover:text-white">GitHub</a>
                        <a href="https://linkedin.com/in/yourprofile" target="_blank" class="transition hover:text-white">LinkedIn</a>
                        <a href="mailto:youremail@example.com" class="transition hover:text-white">Email</a>
                    </div>
                </div>

                <div class="reveal relative">
                    <div class="relative overflow-hidden rounded-[2rem] border border-white/10 bg-white/[0.04] p-4 shadow-[0_25px_70px_rgba(0,0,0,0.4)] sm:p-5">
                        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,255,255,0.12),transparent_30%)]"></div>
                        <img
                            src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=1200&q=80"
                            alt="Ali Hassan Cheema portrait"
                            class="h-[420px] w-full rounded-[1.6rem] object-cover sm:h-[500px] lg:h-[580px]"
                        >
                    </div>

                    <div class="absolute -bottom-6 -left-2 hidden w-60 rounded-[1.8rem] border border-white/10 bg-black/60 p-5 backdrop-blur-xl lg:block">
                        <p class="text-[11px] uppercase tracking-[0.32em] text-white/35">Current Focus</p>
                        <p class="mt-2 text-lg font-semibold leading-7 text-white/90">Laravel platforms, scalable APIs, system architecture, and AI integrations.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
            <div class="mb-12 reveal">
                <p class="text-sm uppercase tracking-[0.32em] text-white/38">About</p>
                <h2 class="mt-4 text-3xl font-semibold leading-tight sm:text-4xl lg:text-5xl">
                    Engineering products with clean thinking, strong architecture, and long-term reliability.
                </h2>
            </div>

            <div class="grid gap-6 lg:grid-cols-[1.1fr_0.9fr]">
                <div class="reveal rounded-[2rem] border border-white/10 bg-white/[0.04] p-8 sm:p-10">
                    <p class="text-base leading-8 text-white/68 sm:text-lg">
                        I specialize in backend-heavy systems where performance, maintainability, and real-world usability matter. Over the years, I have worked on enterprise applications, government platforms, reporting systems, citizen-facing services, and integration-driven products that require both technical depth and disciplined execution.
                    </p>
                    <p class="mt-6 text-base leading-8 text-white/68 sm:text-lg">
                        Beyond Laravel and PHP, I also work with frontend integrations, DevOps workflows, search systems, AI tooling, and intelligent automation. My approach is simple: build software that is elegant under the hood and dependable in production.
                    </p>
                </div>

                <div class="grid gap-6 sm:grid-cols-2">
                    <div class="reveal rounded-[2rem] border border-white/10 bg-white/[0.04] p-6 sm:p-7">
                        <p class="text-3xl font-semibold">10+</p>
                        <p class="mt-2 text-sm text-white/58">Years of professional software development</p>
                    </div>
                    <div class="reveal rounded-[2rem] border border-white/10 bg-white/[0.04] p-6 sm:p-7">
                        <p class="text-3xl font-semibold">Laravel</p>
                        <p class="mt-2 text-sm text-white/58">Production-grade systems and APIs</p>
                    </div>
                    <div class="reveal rounded-[2rem] border border-white/10 bg-white/[0.04] p-6 sm:p-7">
                        <p class="text-3xl font-semibold">Enterprise</p>
                        <p class="mt-2 text-sm text-white/58">Scalable platforms, workflows, and dashboards</p>
                    </div>
                    <div class="reveal rounded-[2rem] border border-white/10 bg-white/[0.04] p-6 sm:p-7">
                        <p class="text-3xl font-semibold">AI Ready</p>
                        <p class="mt-2 text-sm text-white/58">RAG, automation, LLM-enabled experiences</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="projects" class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
            <div class="mb-12 flex flex-col gap-4 md:flex-row md:items-end md:justify-between reveal">
                <div>
                    <p class="text-sm uppercase tracking-[0.32em] text-white/38">Featured Projects</p>
                    <h2 class="mt-4 text-3xl font-semibold leading-tight sm:text-4xl lg:text-5xl">
                        Selected work that represents how I solve problems.
                    </h2>
                </div>
                <p class="max-w-2xl text-base leading-8 text-white/60">
                    A mix of enterprise systems, citizen service platforms, AI products, and backend-heavy engineering work.
                </p>
            </div>

            <div class="grid gap-6 lg:grid-cols-2">
                <article class="reveal group overflow-hidden rounded-[2rem] border border-white/10 bg-white/[0.04] transition duration-300 hover:-translate-y-1 hover:border-white/20 hover:bg-white/[0.05]">
                    <div class="h-56 overflow-hidden border-b border-white/10 bg-[linear-gradient(135deg,#151515,#0b0b0b)]">
                        <div class="flex h-full items-end p-8">
                            <span class="rounded-full border border-white/10 bg-white/[0.04] px-4 py-2 text-xs uppercase tracking-[0.25em] text-white/50">Government Platform</span>
                        </div>
                    </div>
                    <div class="p-7 sm:p-8">
                        <div class="flex items-start justify-between gap-4">
                            <h3 class="text-2xl font-semibold">Citizen Service Delivery System</h3>
                            <span class="text-sm text-white/35">01</span>
                        </div>
                        <p class="mt-4 text-sm leading-7 text-white/65 sm:text-base">
                            A large-scale service platform designed for public workflows, application processing, approvals, and integrated backend operations using Laravel and structured service architecture.
                        </p>
                        <div class="mt-6 flex flex-wrap gap-2">
                            <span class="tag">Laravel</span>
                            <span class="tag">MySQL</span>
                            <span class="tag">REST APIs</span>
                            <span class="tag">jQuery</span>
                        </div>
                    </div>
                </article>

                <article class="reveal group overflow-hidden rounded-[2rem] border border-white/10 bg-white/[0.04] transition duration-300 hover:-translate-y-1 hover:border-white/20 hover:bg-white/[0.05]">
                    <div class="h-56 overflow-hidden border-b border-white/10 bg-[linear-gradient(135deg,#141414,#0d0d0d)]">
                        <div class="flex h-full items-end p-8">
                            <span class="rounded-full border border-white/10 bg-white/[0.04] px-4 py-2 text-xs uppercase tracking-[0.25em] text-white/50">AI Assistant</span>
                        </div>
                    </div>
                    <div class="p-7 sm:p-8">
                        <div class="flex items-start justify-between gap-4">
                            <h3 class="text-2xl font-semibold">AI Legal Chatbot</h3>
                            <span class="text-sm text-white/35">02</span>
                        </div>
                        <p class="mt-4 text-sm leading-7 text-white/65 sm:text-base">
                            A retrieval-augmented legal assistant built for domain-specific question answering with hybrid search, document grounding, and controlled response behavior.
                        </p>
                        <div class="mt-6 flex flex-wrap gap-2">
                            <span class="tag">Python</span>
                            <span class="tag">RAG</span>
                            <span class="tag">Vector Search</span>
                            <span class="tag">LLM</span>
                        </div>
                    </div>
                </article>

                <article class="reveal group overflow-hidden rounded-[2rem] border border-white/10 bg-white/[0.04] transition duration-300 hover:-translate-y-1 hover:border-white/20 hover:bg-white/[0.05]">
                    <div class="h-56 overflow-hidden border-b border-white/10 bg-[linear-gradient(135deg,#131313,#0a0a0a)]">
                        <div class="flex h-full items-end p-8">
                            <span class="rounded-full border border-white/10 bg-white/[0.04] px-4 py-2 text-xs uppercase tracking-[0.25em] text-white/50">Voice AI</span>
                        </div>
                    </div>
                    <div class="p-7 sm:p-8">
                        <div class="flex items-start justify-between gap-4">
                            <h3 class="text-2xl font-semibold">Voice-Based AI Workflow System</h3>
                            <span class="text-sm text-white/35">03</span>
                        </div>
                        <p class="mt-4 text-sm leading-7 text-white/65 sm:text-base">
                            A voice-enabled application combining speech recognition, LLM reasoning, and text-to-speech for natural conversational workflows and service interactions.
                        </p>
                        <div class="mt-6 flex flex-wrap gap-2">
                            <span class="tag">FastAPI</span>
                            <span class="tag">Flask</span>
                            <span class="tag">ASR</span>
                            <span class="tag">TTS</span>
                        </div>
                    </div>
                </article>

                <article class="reveal group overflow-hidden rounded-[2rem] border border-white/10 bg-white/[0.04] transition duration-300 hover:-translate-y-1 hover:border-white/20 hover:bg-white/[0.05]">
                    <div class="h-56 overflow-hidden border-b border-white/10 bg-[linear-gradient(135deg,#141414,#090909)]">
                        <div class="flex h-full items-end p-8">
                            <span class="rounded-full border border-white/10 bg-white/[0.04] px-4 py-2 text-xs uppercase tracking-[0.25em] text-white/50">Enterprise Systems</span>
                        </div>
                    </div>
                    <div class="p-7 sm:p-8">
                        <div class="flex items-start justify-between gap-4">
                            <h3 class="text-2xl font-semibold">Reporting & Management Platforms</h3>
                            <span class="text-sm text-white/35">04</span>
                        </div>
                        <p class="mt-4 text-sm leading-7 text-white/65 sm:text-base">
                            High-utility backend systems for administration, operational reporting, data workflows, approvals, dashboards, and business process management at scale.
                        </p>
                        <div class="mt-6 flex flex-wrap gap-2">
                            <span class="tag">PHP</span>
                            <span class="tag">Laravel</span>
                            <span class="tag">Docker</span>
                            <span class="tag">Linux</span>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section id="skills" class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
            <div class="mb-12 reveal">
                <p class="text-sm uppercase tracking-[0.32em] text-white/38">Capabilities</p>
                <h2 class="mt-4 text-3xl font-semibold leading-tight sm:text-4xl lg:text-5xl">
                    Skills and technologies I use to ship reliable products.
                </h2>
            </div>

            <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-4">
                <div class="reveal rounded-[2rem] border border-white/10 bg-white/[0.04] p-7">
                    <h3 class="text-xl font-semibold">Backend Development</h3>
                    <p class="mt-5 leading-8 text-white/62">PHP, Laravel, CodeIgniter, REST APIs, authentication, queues, workflows, service architecture</p>
                </div>

                <div class="reveal rounded-[2rem] border border-white/10 bg-white/[0.04] p-7">
                    <h3 class="text-xl font-semibold">Frontend Integration</h3>
                    <p class="mt-5 leading-8 text-white/62">Blade, Tailwind CSS, JavaScript, jQuery, Vue.js, React, responsive UI implementation</p>
                </div>

                <div class="reveal rounded-[2rem] border border-white/10 bg-white/[0.04] p-7">
                    <h3 class="text-xl font-semibold">Database & DevOps</h3>
                    <p class="mt-5 leading-8 text-white/62">MySQL, PostgreSQL, MongoDB, Docker, Linux, Git, CI/CD, AWS, deployment pipelines</p>
                </div>

                <div class="reveal rounded-[2rem] border border-white/10 bg-white/[0.04] p-7">
                    <h3 class="text-xl font-semibold">AI & Intelligent Systems</h3>
                    <p class="mt-5 leading-8 text-white/62">RAG, LangChain, LLMs, OCR, semantic search, agent workflows, automation systems</p>
                </div>
            </div>
        </section>

        <section id="experience" class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
            <div class="mb-12 reveal">
                <p class="text-sm uppercase tracking-[0.32em] text-white/38">Experience</p>
                <h2 class="mt-4 text-3xl font-semibold leading-tight sm:text-4xl lg:text-5xl">
                    Built through delivery, leadership, and high-impact engineering.
                </h2>
            </div>

            <div class="space-y-6">
                <article class="reveal rounded-[2rem] border border-white/10 bg-white/[0.04] p-8 sm:p-10">
                    <div class="flex flex-col gap-4 lg:flex-row lg:items-start lg:justify-between">
                        <div>
                            <h3 class="text-2xl font-semibold">Punjab Information Technology Board (PITB)</h3>
                            <p class="mt-2 text-white/50">Senior Software Engineer / Technical Leadership</p>
                        </div>
                        <span class="inline-flex w-fit rounded-full border border-white/10 px-4 py-2 text-xs uppercase tracking-[0.25em] text-white/40">Current</span>
                    </div>
                    <p class="mt-6 max-w-5xl text-base leading-8 text-white/65">
                        Working on large-scale public sector and enterprise-grade digital platforms, including backend architecture, workflow systems, integrations, operational reporting, and scalable service delivery applications.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-2">
                        <span class="tag">Laravel</span>
                        <span class="tag">Enterprise Platforms</span>
                        <span class="tag">System Design</span>
                        <span class="tag">Team Leadership</span>
                    </div>
                </article>

                <article class="reveal rounded-[2rem] border border-white/10 bg-white/[0.04] p-8 sm:p-10">
                    <div class="flex flex-col gap-4 lg:flex-row lg:items-start lg:justify-between">
                        <div>
                            <h3 class="text-2xl font-semibold">Full Stack & Backend Engineering</h3>
                            <p class="mt-2 text-white/50">Laravel, PHP, APIs, dashboards, and integration-heavy systems</p>
                        </div>
                        <span class="inline-flex w-fit rounded-full border border-white/10 px-4 py-2 text-xs uppercase tracking-[0.25em] text-white/40">10+ Years</span>
                    </div>
                    <p class="mt-6 max-w-5xl text-base leading-8 text-white/65">
                        Delivered products across administration systems, portals, reporting modules, automation flows, citizen applications, and data-driven backend platforms with a strong focus on maintainability and production readiness.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-2">
                        <span class="tag">PHP</span>
                        <span class="tag">MySQL</span>
                        <span class="tag">APIs</span>
                        <span class="tag">Architecture</span>
                    </div>
                </article>
            </div>
        </section>

        <section id="contact" class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
            <div class="reveal overflow-hidden rounded-[2.4rem] border border-white/10 bg-[linear-gradient(145deg,rgba(255,255,255,0.06),rgba(255,255,255,0.025))] shadow-[0_30px_80px_rgba(0,0,0,0.35)]">
                <div class="grid lg:grid-cols-[1.12fr_0.88fr]">
                    <div class="border-b border-white/10 p-8 sm:p-10 lg:border-b-0 lg:border-r lg:p-14 xl:p-16">
                        <p class="text-sm uppercase tracking-[0.32em] text-white/38">Contact</p>
                        <h2 class="mt-4 max-w-2xl text-3xl font-semibold leading-tight sm:text-5xl">
                            Let’s build something that feels premium, performs well, and lasts.
                        </h2>
                        <p class="mt-6 max-w-2xl text-base leading-8 text-white/65">
                            I’m open to discussing Laravel development, backend engineering, system architecture, AI-enabled products, and long-term technical collaborations.
                        </p>

                        <div class="mt-8 flex flex-wrap gap-4">
                            <a href="mailto:youremail@example.com" class="inline-flex items-center rounded-full bg-white px-6 py-3 text-sm font-semibold text-black transition duration-300 hover:-translate-y-0.5 hover:shadow-[0_10px_30px_rgba(255,255,255,0.15)]">
                                Email Me
                            </a>
                            <a href="https://linkedin.com/in/yourprofile" target="_blank" class="inline-flex items-center rounded-full border border-white/15 px-6 py-3 text-sm font-semibold text-white transition duration-300 hover:border-white hover:bg-white hover:text-black">
                                LinkedIn
                            </a>
                        </div>
                    </div>

                    <div class="p-8 sm:p-10 lg:p-14 xl:p-16">
                        <div class="space-y-5">
                            <a href="mailto:youremail@example.com" class="group block rounded-[1.7rem] border border-white/10 bg-black/20 p-6 transition duration-300 hover:border-white/20 hover:bg-black/30">
                                <p class="text-[11px] uppercase tracking-[0.32em] text-white/35">Email</p>
                                <p class="mt-3 text-lg font-medium text-white/90 transition group-hover:text-white">youremail@example.com</p>
                            </a>

                            <a href="https://linkedin.com/in/yourprofile" target="_blank" class="group block rounded-[1.7rem] border border-white/10 bg-black/20 p-6 transition duration-300 hover:border-white/20 hover:bg-black/30">
                                <p class="text-[11px] uppercase tracking-[0.32em] text-white/35">LinkedIn</p>
                                <p class="mt-3 text-lg font-medium text-white/90 transition group-hover:text-white">linkedin.com/in/yourprofile</p>
                            </a>

                            <a href="https://github.com/yourusername" target="_blank" class="group block rounded-[1.7rem] border border-white/10 bg-black/20 p-6 transition duration-300 hover:border-white/20 hover:bg-black/30">
                                <p class="text-[11px] uppercase tracking-[0.32em] text-white/35">GitHub</p>
                                <p class="mt-3 text-lg font-medium text-white/90 transition group-hover:text-white">github.com/yourusername</p>
                            </a>

                            <div class="rounded-[1.7rem] border border-white/10 bg-black/20 p-6">
                                <p class="text-[11px] uppercase tracking-[0.32em] text-white/35">Location</p>
                                <p class="mt-3 text-lg font-medium text-white/90">Lahore, Pakistan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection