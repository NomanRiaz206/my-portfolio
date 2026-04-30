<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PortfolioContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class PortfolioContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $content = PortfolioContent::paginate(10);
         Log::info('Fetched portfolio content for admin index', ['count' => $content->count()]);
        return view('admin.portfolio_content.index', compact('content'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Log::info('Accessed portfolio content creation form');
        return view('admin.portfolio_content.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'section_name' => 'required|unique:portfolio_contents',
            'content' => 'required',
        ]);

        PortfolioContent::create([
            'section_name' => $request->section_name,
            'content' => $request->content,
        ]);

        Log::info('Created new portfolio content section', ['section_name' => $request->section_name]);
        return redirect()->route('admin.portfolio_content.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $content = PortfolioContent::findOrFail($id);
        Log::info('Viewing portfolio content section', ['id' => $id]);
        return view('admin.portfolio_content.show', compact('content'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $content = PortfolioContent::findOrFail($id);
        Log::info('Accessed portfolio content edit form', ['id' => $id]);
        return view('admin.portfolio_content.edit', compact('content'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'content' => 'required',
        ]);

        $content = PortfolioContent::findOrFail($id);
        $content->update([
            'content' => $request->content,
        ]);

        Log::info('Updated portfolio content section', ['id' => $id]);
        return redirect()->route('admin.portfolio_content.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $content = PortfolioContent::findOrFail($id);
        $content->delete();
        Log::info('Deleted portfolio content section', ['id' => $id]);
        return redirect()->route('admin.portfolio_content.index');
    }
}
