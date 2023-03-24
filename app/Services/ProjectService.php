<?php

namespace App\Services;

use App\Repositories\ProjectRepository;

class ProjectService
{
  public static function index($request)
  {
    $search = $request->search;

    $projects = ProjectRepository::getAllProjects($search);

    return $projects;
  }

  public static function create()
  {
    $array = ProjectRepository::createView();

    return $array;
  }

  public static function store($request)
  {
    ProjectRepository::createProject($request);
  }

  public static function show($id)
  {
    $project = ProjectRepository::getSingleProject($id);

    return $project;
  }

  public static function edit($id)
  {
    $array = ProjectRepository::editProject($id);

    return $array;
  }

  public static function update($id, $request)
  {
    ProjectRepository::updateProject($id, $request);
  }

  public static function destroy($id)
  {
    ProjectRepository::deleteProject($id);
  }
}
