@extends('admin.layouts.app')

@section('title', $blog->title)

@section('content')
<section class="mx-auto max-w-5xl px-6 py-12 lg:px-8">
    <div class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h1 class="text-3xl font-bold text-white">{{ $blog->title }}</h1>
            <p class="mt-2 text-sm text-slate-400">{{ $blog->slug }}</p>
        </div>

        <div class="flex gap-3">
            <a href="{{ route('admin.blogs.index') }}"
               class="rounded-xl border border-white/10 px-5 py-3 text-sm font-semibold text-white hover:bg-white/5">
                Back
            </a>

            <a href="{{ route('admin.blogs.edit', $blog) }}"
               class="rounded-xl bg-indigo-600 px-5 py-3 text-sm font-semibold text-white hover:bg-indigo-500">
                Edit
            </a>
        </div>
    </div>

    <article class="overflow-hidden rounded-2xl border border-white/10 bg-slate-950/60">
        @if($blog->thumbnail)
            <img src="{{ $blog->thumbnail }}" alt="{{ $blog->title }}" class="h-80 w-full object-cover">
        @endif

        <div class="p-8">
            <div class="mb-6 flex flex-wrap items-center gap-3">
                @if($blog->category)
                    <span class="rounded-full bg-indigo-500/10 px-3 py-1 text-xs font-semibold text-indigo-300">
                        {{ $blog->category }}
                    </span>
                @endif

                @if($blog->is_featured)
                    <span class="rounded-full bg-yellow-500/10 px-3 py-1 text-xs font-semibold text-yellow-300">
                        Featured
                    </span>
                @endif

                @if($blog->is_published)
                    <span class="rounded-full bg-emerald-500/10 px-3 py-1 text-xs font-semibold text-emerald-300">
                        Published
                    </span>
                @else
                    <span class="rounded-full bg-red-500/10 px-3 py-1 text-xs font-semibold text-red-300">
                        Draft
                    </span>
                @endif
            </div>

            @if($blog->excerpt)
                <p class="mb-8 text-lg text-slate-300">{{ $blog->excerpt }}</p>
            @endif

            <div class="prose prose-invert max-w-none whitespace-pre-line text-slate-300">
                {{ $blog->content }}
            </div>

            @if(is_array($blog->tags) && count($blog->tags))
                <div class="mt-8 flex flex-wrap gap-2">
                    @foreach($blog->tags as $tag)
                        <span class="rounded-full bg-white/5 px-3 py-1 text-xs text-slate-300">
                            #{{ $tag }}
                        </span>
                    @endforeach
                </div>
            @endif
        </div>
    </article>
</section>
@endsection