<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Services\ProjectService;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * @return view
     */
    public function index(Request $request)
    {
        $projects = ProjectService::index($request);

        return view('projects.index', ['projects' => $projects[0], 'statuses' => $projects[1], 'search' => $request->search, 'select_status' => $request->status]);
    }

    /**
     * @return view
     */
    public function create()
    {
        $array = ProjectService::create();

        return view('projects.create', ['skills' => $array[0], 'users' => $array[1]]);
    }

    /**
     * @param  App\Http\Requests\ProjectRequest  $request
     * @return to_route
     */
    public function store(ProjectRequest $request)
    {
        ProjectService::store($request);

        return to_route('projects.index');
    }

    /**
     * @param  int  $id
     * @return view
     */
    public function show($id)
    {
        $project = ProjectService::show($id);

        return view('projects.show', compact('project'));
    }

    /**
     * @param  int  $id
     * @return view
     */
    public function edit($id)
    {
        $array = ProjectService::edit($id);

        return view('projects.edit', ['project' => $array[0], 'skills' => $array[1], 'users' => $array[2], 'statuses' => $array[3]]);
    }

    /**
     * @param  App\Http\Requests\ProjectRequest  $request
     * @param  int  $id
     * @return to_route
     */
    public function update(ProjectRequest $request, $id)
    {
        ProjectService::update($id, $request);

        return to_route('projects.index');
    }

    /**
     * @param  int  $id
     * @return to_route
     */
    public function destroy($id)
    {
        ProjectService::destroy($id);

        return to_route('projects.index');
    }
}
