@extends('admin.layouts.app')

@section('title', 'Manage Blogs')

@section('content')
<section class="mx-auto max-w-7xl px-6 py-12 lg:px-8">
    <div class="mb-10 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h1 class="text-3xl font-bold text-white">Blogs</h1>
            <p class="mt-2 text-sm text-slate-400">Create, edit, and manage portfolio blog posts.</p>
        </div>

        <a href="{{ route('admin.blogs.create') }}"
           class="inline-flex items-center justify-center rounded-xl bg-indigo-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-indigo-500">
            Add Blog
        </a>
    </div>

    @if(session('success'))
        <div class="mb-6 rounded-xl border border-emerald-500/30 bg-emerald-500/10 px-4 py-3 text-sm text-emerald-300">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-hidden rounded-2xl border border-white/10 bg-slate-950/60">
        <table class="w-full min-w-[900px] text-left">
            <thead class="bg-white/5 text-sm text-slate-300">
                <tr>
                    <th class="px-6 py-4">Blog</th>
                    <th class="px-6 py-4">Category</th>
                    <th class="px-6 py-4">Featured</th>
                    <th class="px-6 py-4">Status</th>
                    <th class="px-6 py-4">Published</th>
                    <th class="px-6 py-4 text-right">Actions</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-white/10">
                @forelse($blogs as $blog)
                    <tr class="text-sm text-slate-300">
                        <td class="px-6 py-5">
                            <div class="flex items-center gap-4">
                                <div class="h-14 w-14 overflow-hidden rounded-xl bg-white/5">
                                    @if($blog->thumbnail)
                                        <img src="{{ $blog->thumbnail }}" alt="{{ $blog->title }}" class="h-full w-full object-cover">
                                    @endif
                                </div>

                                <div>
                                    <p class="font-semibold text-white">{{ $blog->title }}</p>
                                    <p class="mt-1 max-w-xs truncate text-xs text-slate-400">{{ $blog->excerpt }}</p>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-5">
                            {{ $blog->category ?? '—' }}
                        </td>

                        <td class="px-6 py-5">
                            @if($blog->is_featured)
                                <span class="rounded-full bg-yellow-500/10 px-3 py-1 text-xs font-semibold text-yellow-300">Featured</span>
                            @else
                                <span class="rounded-full bg-slate-500/10 px-3 py-1 text-xs font-semibold text-slate-400">Normal</span>
                            @endif
                        </td>

                        <td class="px-6 py-5">
                            @if($blog->is_published)
                                <span class="rounded-full bg-emerald-500/10 px-3 py-1 text-xs font-semibold text-emerald-300">Published</span>
                            @else
                                <span class="rounded-full bg-red-500/10 px-3 py-1 text-xs font-semibold text-red-300">Draft</span>
                            @endif
                        </td>

                        <td class="px-6 py-5">
                            {{ optional($blog->published_at)->format('M d, Y') ?? '—' }}
                        </td>

                        <td class="px-6 py-5">
                            <div class="flex justify-end gap-3">
                                <a href="{{ route('admin.blogs.show', $blog) }}"
                                   class="rounded-lg bg-slate-800 px-4 py-2 text-sm text-white hover:bg-slate-700">
                                    View
                                </a>

                                <a href="{{ route('admin.blogs.edit', $blog) }}"
                                   class="rounded-lg bg-slate-800 px-4 py-2 text-sm text-white hover:bg-slate-700">
                                    Edit
                                </a>

                                <form method="POST" action="{{ route('admin.blogs.destroy', $blog) }}"
                                      onsubmit="return confirm('Delete this blog?')">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="rounded-lg bg-red-600 px-4 py-2 text-sm font-semibold text-white hover:bg-red-500">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-6 py-12 text-center text-slate-400">
                            No blogs found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $blogs->links() }}
    </div>
</section>
@endsection