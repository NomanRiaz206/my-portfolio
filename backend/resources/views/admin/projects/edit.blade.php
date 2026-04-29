@extends('admin.layouts.app')

@section('title', 'Edit Project')

@section('content')

<div class="mx-auto max-w-5xl">

    <div class="mb-8 flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-white">Edit Project</h1>
            <p class="mt-1 text-slate-400">Update project details.</p>
        </div>

        <a href="{{ route('admin.projects.index') }}"
           class="rounded-xl bg-slate-800 px-5 py-3 text-sm text-white hover:bg-slate-700">
            Back
        </a>
    </div>

    <form action="{{ route('admin.projects.update', $project) }}"
          method="POST"
          enctype="multipart/form-data"
          class="rounded-2xl border border-slate-800 bg-slate-900 p-6 space-y-6">

        @csrf
        @method('PUT')

        <div class="grid gap-6 md:grid-cols-2">
            <div>
                <label class="mb-2 block text-sm font-medium text-slate-300">Title</label>
                <input type="text"
                       name="title"
                       value="{{ old('title', $project->title) }}"
                       class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-white outline-none focus:border-indigo-500">
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-300">Slug</label>
                <input type="text"
                       name="slug"
                       value="{{ old('slug', $project->slug) }}"
                       class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-white outline-none focus:border-indigo-500">
            </div>
        </div>

        <div>
            <label class="mb-2 block text-sm font-medium text-slate-300">Short Description</label>
            <input type="text"
                   name="short_description"
                   value="{{ old('short_description', $project->short_description) }}"
                   class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-white outline-none focus:border-indigo-500">
        </div>

        <div>
            <label class="mb-2 block text-sm font-medium text-slate-300">Description</label>
            <textarea name="description"
                      rows="6"
                      class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-white outline-none focus:border-indigo-500">{{ old('description', $project->description) }}</textarea>
        </div>

        <div>
            <label class="mb-2 block text-sm font-medium text-slate-300">Current Thumbnail</label>

            @if($project->thumbnail)
                <div class="mb-4 h-40 w-64 overflow-hidden rounded-xl bg-slate-800">
                    <img src="{{ asset($project->thumbnail) }}"
                         alt="{{ $project->title }}"
                         class="h-full w-full object-cover">
                </div>
            @else
                <p class="mb-4 text-sm text-slate-500">No thumbnail uploaded.</p>
            @endif

            <input type="file"
                   name="thumbnail"
                   class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-300 file:mr-4 file:rounded-lg file:border-0 file:bg-indigo-600 file:px-4 file:py-2 file:text-white">
        </div>

        <div class="grid gap-6 md:grid-cols-2">
            <div>
                <label class="mb-2 block text-sm font-medium text-slate-300">GitHub URL</label>
                <input type="url"
                       name="github_url"
                       value="{{ old('github_url', $project->github_url) }}"
                       class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-white outline-none focus:border-indigo-500">
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-300">Live URL</label>
                <input type="url"
                       name="live_url"
                       value="{{ old('live_url', $project->live_url) }}"
                       class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-white outline-none focus:border-indigo-500">
            </div>
        </div>

        <div>
            <label class="mb-2 block text-sm font-medium text-slate-300">Technologies</label>
            <input type="text"
                   name="technologies"
                   value="{{ old('technologies', implode(', ', $project->technologies ?? [])) }}"
                   class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-white outline-none focus:border-indigo-500">
        </div>

        <div class="flex flex-wrap gap-6">
            <label class="flex items-center gap-3 text-sm text-slate-300">
                <input type="checkbox"
                       name="is_featured"
                       class="h-5 w-5 rounded border-slate-700 bg-slate-950"
                       {{ old('is_featured', $project->is_featured) ? 'checked' : '' }}>
                Featured Project
            </label>

            <label class="flex items-center gap-3 text-sm text-slate-300">
                <input type="checkbox"
                       name="status"
                       class="h-5 w-5 rounded border-slate-700 bg-slate-950"
                       {{ old('status', $project->status) ? 'checked' : '' }}>
                Active
            </label>
        </div>

        <div class="flex justify-end gap-4 border-t border-slate-800 pt-6">
            <a href="{{ route('admin.projects.index') }}"
               class="rounded-xl bg-slate-800 px-6 py-3 text-sm text-white hover:bg-slate-700">
                Cancel
            </a>

            <button type="submit"
                    class="rounded-xl bg-indigo-600 px-6 py-3 text-sm font-semibold text-white hover:bg-indigo-500">
                Update Project
            </button>
        </div>

    </form>

</div>

@endsection