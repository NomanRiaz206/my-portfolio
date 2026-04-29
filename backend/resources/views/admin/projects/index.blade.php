@extends('admin.layouts.app')

@section('title', 'Projects')

@section('content')

<div class="flex flex-col gap-6 mt-10">

    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-white">Projects</h1>
            <p class="mt-1 text-slate-400">Create, edit, and manage portfolio projects.</p>
        </div>

        <a href="{{ route('admin.projects.create') }}"
           class="rounded-xl bg-indigo-600 px-5 py-3 text-sm font-semibold text-white hover:bg-indigo-500">
            Add Project
        </a>
    </div>

    <div class="overflow-hidden rounded-2xl border border-slate-800 bg-slate-900">
        <table class="w-full text-left">
            <thead class="bg-slate-800/80 text-sm text-slate-300">
                <tr>
                    <th class="px-6 py-4">Project</th>
                    <th class="px-6 py-4">Technologies</th>
                    <th class="px-6 py-4">Featured</th>
                    <th class="px-6 py-4">Status</th>
                    <th class="px-6 py-4 text-right">Actions</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-slate-800">
                @forelse($projects as $project)
                    <tr class="hover:bg-slate-800/40">
                        <td class="px-6 py-5">
                            <div class="flex items-center gap-4">
                                <div class="h-16 w-20 overflow-hidden rounded-xl bg-slate-800">
                                    @if($project->thumbnail)
                                        <img src="{{ asset($project->thumbnail) }}"
                                             alt="{{ $project->title }}"
                                             class="h-full w-full object-cover">
                                    @endif
                                </div>

                                <div>
                                    <h3 class="font-semibold text-white">{{ $project->title }}</h3>
                                    <p class="text-sm text-slate-400">{{ $project->slug }}</p>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-5">
                            <div class="flex flex-wrap gap-2">
                                @foreach(($project->technologies ?? []) as $tech)
                                    <span class="rounded-full bg-slate-800 px-3 py-1 text-xs text-slate-300">
                                        {{ $tech }}
                                    </span>
                                @endforeach
                            </div>
                        </td>

                        <td class="px-6 py-5">
                            @if($project->is_featured)
                                <span class="rounded-full bg-yellow-500/10 px-3 py-1 text-xs text-yellow-300">Featured</span>
                            @else
                                <span class="rounded-full bg-slate-800 px-3 py-1 text-xs text-slate-400">No</span>
                            @endif
                        </td>

                        <td class="px-6 py-5">
                            @if($project->status)
                                <span class="rounded-full bg-emerald-500/10 px-3 py-1 text-xs text-emerald-300">Active</span>
                            @else
                                <span class="rounded-full bg-red-500/10 px-3 py-1 text-xs text-red-300">Inactive</span>
                            @endif
                        </td>

                        <td class="px-6 py-5 text-right">
                            <div class="flex justify-end gap-3">
                                <a href="{{ route('admin.projects.edit', $project) }}"
                                   class="rounded-lg bg-slate-800 px-4 py-2 text-sm text-white hover:bg-slate-700">
                                    Edit
                                </a>

                                <form action="{{ route('admin.projects.destroy', $project) }}"
                                      method="POST"
                                      onsubmit="return confirm('Are you sure you want to delete this project?')">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="rounded-lg bg-red-600 px-4 py-2 text-sm text-white hover:bg-red-500">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-10 text-center text-slate-400">
                            No projects found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div>
        {{ $projects->links() }}
    </div>

</div>

@endsection