<?php

namespace App\Http\Controllers;

use App\Services\MyProjectService;

class MyProjectController extends Controller
{
    /**
     * @return view
     */
    public function index()
    {
        $authName = MyProjectService::authName();
        $projects = MyProjectService::projects();

        return view('my_project.index', compact('authName', 'projects'));
    }
}
