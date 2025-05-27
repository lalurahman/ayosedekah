<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::with('projectCategory')->take(6)->get();
        // dd($projects);
        return view('pages.home.index', compact([
            'projects'
        ]));
    }
}
