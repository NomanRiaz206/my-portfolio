@csrf

<div class="grid gap-6 lg:grid-cols-2">
    <div class="lg:col-span-2">
        <label class="mb-2 block text-sm font-medium text-slate-300">Title</label>
        <input type="text" name="title" value="{{ old('title', $blog->title ?? '') }}"
               class="w-full rounded-xl border border-white/10 bg-slate-950 px-4 py-3 text-white outline-none focus:border-indigo-500"
               required>
        @error('title') <p class="mt-2 text-sm text-red-300">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="mb-2 block text-sm font-medium text-slate-300">Category</label>
        <input type="text" name="category" value="{{ old('category', $blog->category ?? '') }}"
               class="w-full rounded-xl border border-white/10 bg-slate-950 px-4 py-3 text-white outline-none focus:border-indigo-500">
    </div>

    <div>
        <label class="mb-2 block text-sm font-medium text-slate-300">Thumbnail URL</label>
        <input type="text" name="thumbnail" value="{{ old('thumbnail', $blog->thumbnail ?? '') }}"
               class="w-full rounded-xl border border-white/10 bg-slate-950 px-4 py-3 text-white outline-none focus:border-indigo-500">
    </div>

    <div class="lg:col-span-2">
        <label class="mb-2 block text-sm font-medium text-slate-300">Excerpt</label>
        <textarea name="excerpt" rows="3"
                  class="w-full rounded-xl border border-white/10 bg-slate-950 px-4 py-3 text-white outline-none focus:border-indigo-500">{{ old('excerpt', $blog->excerpt ?? '') }}</textarea>
    </div>

    <div class="lg:col-span-2">
        <label class="mb-2 block text-sm font-medium text-slate-300">Content</label>
        <textarea name="content" rows="12"
                  class="w-full rounded-xl border border-white/10 bg-slate-950 px-4 py-3 text-white outline-none focus:border-indigo-500"
                  required>{{ old('content', $blog->content ?? '') }}</textarea>
        @error('content') <p class="mt-2 text-sm text-red-300">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="mb-2 block text-sm font-medium text-slate-300">Tags</label>
        <input type="text" name="tags"
               value="{{ old('tags', isset($blog) && is_array($blog->tags) ? implode(', ', $blog->tags) : '') }}"
               placeholder="Laravel, React, Portfolio"
               class="w-full rounded-xl border border-white/10 bg-slate-950 px-4 py-3 text-white outline-none focus:border-indigo-500">
    </div>

    <div>
        <label class="mb-2 block text-sm font-medium text-slate-300">Published At</label>
        <input type="datetime-local" name="published_at"
               value="{{ old('published_at', isset($blog) && $blog->published_at ? $blog->published_at->format('Y-m-d\TH:i') : '') }}"
               class="w-full rounded-xl border border-white/10 bg-slate-950 px-4 py-3 text-white outline-none focus:border-indigo-500">
    </div>

    <div class="flex items-center gap-6 lg:col-span-2">
        <label class="flex items-center gap-3 text-sm text-slate-300">
            <input type="checkbox" name="is_featured" value="1"
                   @checked(old('is_featured', $blog->is_featured ?? false))
                   class="h-4 w-4 rounded border-white/10 bg-slate-950 text-indigo-600">
            Featured
        </label>

        <label class="flex items-center gap-3 text-sm text-slate-300">
            <input type="checkbox" name="is_published" value="1"
                   @checked(old('is_published', $blog->is_published ?? true))
                   class="h-4 w-4 rounded border-white/10 bg-slate-950 text-indigo-600">
            Published
        </label>
    </div>
</div>

<div class="mt-8 flex items-center justify-end gap-3">
    <a href="{{ route('admin.blogs.index') }}"
       class="rounded-xl border border-white/10 px-5 py-3 text-sm font-semibold text-white hover:bg-white/5">
        Cancel
    </a>

    <button type="submit"
            class="rounded-xl bg-indigo-600 px-5 py-3 text-sm font-semibold text-white hover:bg-indigo-500">
        {{ $buttonText ?? 'Save Blog' }}
    </button>
</div>