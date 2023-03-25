<?php

namespace App\Repositories;

use App\Models\Project;
use App\Models\Skill;
use App\Models\Status;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProjectRepository
{
  public static function getAllProjects($search)
  {
    // ローカルスコープ  modelに記載
    $query = Project::search($search);

    $projects = $query->paginate(10);

    return $projects;
  }

  public static function createView()
  {
    $skills = Skill::all();
    $users = User::all();

    return [$skills, $users];
  }

  public static function createProject($request)
  {
    try {
      DB::beginTransaction();

      Project::create([
        'name' => $request->name,
        'description' => $request->description,
        'customer' => $request->customer,
        'skills' => $request->skills,
        'assignees' => $request->assignees,
        'user_id' => Auth::user()->id,
      ]);

      DB::commit();
    } catch (\Throwable $th) {
      DB::rollBack();
    }
  }

  public static function getSingleProject($id)
  {
    $project = Project::findOrFail($id);

    return $project;
  }

  public static function editProject($id)
  {
    $project = Project::findOrFail($id);
    $skills = Skill::all();
    $users = User::all();
    $statuses = Status::all();

    return [$project, $skills, $users, $statuses];
  }

  public static function updateProject($id, $request)
  {
    $project = Project::findOrFail($id);

    try {
      DB::beginTransaction();

      $project->name = $request->name;
      $project->description = $request->description;
      $project->customer = $request->customer;
      $project->skills = $request->skills;
      $project->assignees = $request->assignees;
      $project->status = $request->status;
      $project->update();

      DB::commit();
    } catch (\Throwable $th) {
      DB::rollBack();
    }
  }

  public static function deleteProject($id)
  {
    $project = Project::findOrFail($id);

    $project->delete();
  }
}
