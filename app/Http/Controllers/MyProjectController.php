<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyProjectController extends Controller
{
    /**
     * @return view
     */
    public function index()
    {
        // $projects = ProjectService::index($request);
        $authName = Auth::user()->name;
        $projects = Project::paginate(10);

        return view('my_project.index', compact('authName', 'projects'));
    }
}
