<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\JsonResponse;

class ProjectController extends Controller
{
    public function index(): JsonResponse
    {
        $projects = Project::where('status', true)
            ->latest()
            ->get()
            ->map(function ($project) {
                $project->thumbnail = $project->thumbnail
                    ? asset($project->thumbnail)
                    : null;
                return $project;
            });

        return response()->json([
            'success' => true,
            'message' => 'Projects fetched successfully',
            'data' => $projects,
        ]);
    }

    public function show(string $slug): JsonResponse
    {
        $project = Project::where('slug', $slug)
            ->where('status', true)
            ->first();

        if (!$project) {
            return response()->json([
                'success' => false,
                'message' => 'Project not found',
            ], 404);
        }

         $project->thumbnail = $project->thumbnail
            ? asset($project->thumbnail)
            : null;

        return response()->json([
            'success' => true,
            'message' => 'Project fetched successfully',
            'data' => $project,
        ]);
    }
}