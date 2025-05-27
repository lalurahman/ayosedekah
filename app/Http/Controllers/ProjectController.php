<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('pages.project.index', compact([
            'projects',
        ]));
    }

    public function show($slug)
    {
        $project = Project::where('slug', $slug)->first();
        $categories = ProjectCategory::all();
        return view('pages.project.show', compact([
            'project',
            'categories',
        ]));
    }

    public function donate($slug)
    {
        $project = Project::where('slug', $slug)->first();
        return view('pages.project.donate', compact([
            'project',
        ]));
    }
}
