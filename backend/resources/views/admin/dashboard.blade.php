@extends('admin.layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<section class="mx-auto max-w-5xl px-6 py-12 lg:px-8 ">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-white">Admin Dashboard</h1>
        <p class="mt-2 text-sm text-slate-400">Welcome back, manage your portfolio content and blogs.</p>
    </div>

    <div class="grid gap-6 md:grid-cols-2">

         <a href="{{ route('admin.projects.index') }}" class="block rounded-lg border border-white/10 bg-slate-950/60 p-6 shadow-2xl shadow-black/20 transition hover:bg-slate-950/80">
            <h2 class="text-xl font-semibold text-white">Manage Projects</h2>
            <p class="mt-2 text-sm text-slate-400">Add, edit, or delete your project.</p>
        </a>
        <a href="{{ route('admin.portfolio-content.index') }}" class="block rounded-lg border border-white/10 bg-slate-950/60 p-6 shadow-2xl shadow-black/20 transition hover:bg-slate-950/80">
            <h2 class="text-xl font-semibold text-white">Manage Portfolio Content</h2>
            <p class="mt-2 text-sm text-slate-400">Add, edit, or remove sections of your portfolio.</p>
        </a>

        <a href="{{ route('admin.blogs.index') }}" class="block rounded-lg border border-white/10 bg-slate-950/60 p-6 shadow-2xl shadow-black/20 transition hover:bg-slate-950/80">
            <h2 class="text-xl font-semibold text-white">Manage Blogs</h2>
            <p class="mt-2 text-sm text-slate-400">Create, edit, or delete your blog posts.</p>
        </a>
    </div>
</section>
@endsection