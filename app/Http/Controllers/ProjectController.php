<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('pages.project.index');
    }

    public function show($slug)
    {
        $project = Project::where('slug', $slug)->first();
        return view('pages.project.show', compact([
            'project',
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
