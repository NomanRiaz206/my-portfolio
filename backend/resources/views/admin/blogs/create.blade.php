@extends('admin.layouts.app')

@section('title', 'Create Blog')

@section('content')
<section class="mx-auto max-w-5xl px-6 py-12 lg:px-8">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-white">Create Blog</h1>
        <p class="mt-2 text-sm text-slate-400">Add a new blog post to your portfolio.</p>
    </div>

    <div class="rounded-2xl border border-white/10 bg-slate-950/60 p-6 shadow-2xl shadow-black/20">
        <form method="POST" action="{{ route('admin.blogs.store') }}">
            @include('admin.blogs._form', ['buttonText' => 'Create Blog'])
        </form>
    </div>
</section>
@endsection