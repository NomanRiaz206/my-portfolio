@extends('admin.layouts.app')

@section('title', 'Edit Blog')

@section('content')
<section class="mx-auto max-w-5xl px-6 py-12 lg:px-8">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-white">Edit Blog</h1>
        <p class="mt-2 text-sm text-slate-400">Update blog post details.</p>
    </div>

    <div class="rounded-2xl border border-white/10 bg-slate-950/60 p-6 shadow-2xl shadow-black/20">
        <form method="POST" action="{{ route('admin.blogs.update', $blog) }}">
            @method('PUT')
            @include('admin.blogs._form', ['buttonText' => 'Update Blog'])
        </form>
    </div>
</section>
@endsection