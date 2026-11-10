<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Http\Requests\StoreProjectRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index(Request $request): Response
    {
        $projects = Project::query()->paginate(12);

        return Inertia::render('Projects', [
            'projects' => $projects,
        ]);
    }

    public function store(StoreProjectRequest $request) : RedirectResponse
    {
        $validated = $request->validated();

        Project::create([
            'name' => $validated['name'],
            'slug' => strtoupper($validated['slug'])
        ]);

        return redirect()->route('projects.index');
    }
}
