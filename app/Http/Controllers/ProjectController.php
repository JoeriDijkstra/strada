<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ProjectController extends Controller
{
    public function index(Request $request): Response
    {
        $projects =  Project::all();

        return Inertia::render('Projects', [
            'projects' => $projects
        ]);
    }
}
