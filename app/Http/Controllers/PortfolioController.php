<?php

namespace App\Http\Controllers;

use App\Models\Project;


class PortfolioController extends Controller
{
    //
    public function index()
    {
        $projects = Project::paginate();

        return view('index', compact('projects'))
            ->with('i', (request()->input('page', 1) - 1) * $projects->perPage());
    }
}
