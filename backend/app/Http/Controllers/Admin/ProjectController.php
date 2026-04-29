<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(10);

        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:projects,slug'],
            'short_description' => ['nullable', 'string', 'max:500'],
            'description' => ['nullable', 'string'],
            'thumbnail' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'github_url' => ['nullable', 'url'],
            'live_url' => ['nullable', 'url'],
            'technologies' => ['nullable', 'string'],
            'is_featured' => ['nullable'],
            'status' => ['nullable'],
        ]);

        $thumbnailPath = null;

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $imageName = time() . '_' . Str::slug($request->title) . '.' . $image->getClientOriginalExtension();

            $destination = public_path('images/projects');

            if (!File::exists($destination)) {
                File::makeDirectory($destination, 0755, true);
            }

            $image->move($destination, $imageName);

            $thumbnailPath = 'images/projects/' . $imageName;
        }

        Project::create([
            'title' => $validated['title'],
            'slug' => $validated['slug'] ?: Str::slug($validated['title']),
            'short_description' => $validated['short_description'] ?? null,
            'description' => $validated['description'] ?? null,
            'thumbnail' => $thumbnailPath,
            'github_url' => $validated['github_url'] ?? null,
            'live_url' => $validated['live_url'] ?? null,
            'technologies' => $this->formatTechnologies($validated['technologies'] ?? null),
            'is_featured' => $request->has('is_featured'),
            'status' => $request->has('status'),
        ]);

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Project created successfully.');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:projects,slug,' . $project->id],
            'short_description' => ['nullable', 'string', 'max:500'],
            'description' => ['nullable', 'string'],
            'thumbnail' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'github_url' => ['nullable', 'url'],
            'live_url' => ['nullable', 'url'],
            'technologies' => ['nullable', 'string'],
            'is_featured' => ['nullable'],
            'status' => ['nullable'],
        ]);

        $thumbnailPath = $project->thumbnail;

        if ($request->hasFile('thumbnail')) {
            if ($project->thumbnail && File::exists(public_path($project->thumbnail))) {
                File::delete(public_path($project->thumbnail));
            }

            $image = $request->file('thumbnail');
            $imageName = time() . '_' . Str::slug($request->title) . '.' . $image->getClientOriginalExtension();

            $destination = public_path('images/projects');

            if (!File::exists($destination)) {
                File::makeDirectory($destination, 0755, true);
            }

            $image->move($destination, $imageName);

            $thumbnailPath = 'images/projects/' . $imageName;
        }

        $project->update([
            'title' => $validated['title'],
            'slug' => $validated['slug'] ?: Str::slug($validated['title']),
            'short_description' => $validated['short_description'] ?? null,
            'description' => $validated['description'] ?? null,
            'thumbnail' => $thumbnailPath,
            'github_url' => $validated['github_url'] ?? null,
            'live_url' => $validated['live_url'] ?? null,
            'technologies' => $this->formatTechnologies($validated['technologies'] ?? null),
            'is_featured' => $request->has('is_featured'),
            'status' => $request->has('status'),
        ]);

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        if ($project->thumbnail && File::exists(public_path($project->thumbnail))) {
            File::delete(public_path($project->thumbnail));
        }

        $project->delete();

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Project deleted successfully.');
    }

    private function formatTechnologies(?string $technologies): array
    {
        if (!$technologies) {
            return [];
        }

        return array_values(
            array_filter(
                array_map('trim', explode(',', $technologies))
            )
        );
    }
}