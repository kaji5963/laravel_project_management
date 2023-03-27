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
  public static function getAllProjects($search, $select_status)
  {
    // ローカルスコープ  modelに記載
    $query = Project::search($search);

    $statuses = Status::all();

    if ($select_status !== null) {
      switch ($select_status) {
        case "新規":
          $projects = $query->where('status', "新規")->paginate(10);
          break;
        case "計画中":
          $projects = $query->where('status', "計画中")->paginate(10);
          break;
        case "提案中":
          $projects = $query->where('status', "提案中")->paginate(10);
          break;
        case "受注":
          $projects = $query->where('status', "受注")->paginate(10);
          break;
        case "失注":
          $projects = $query->where('status', "失注")->paginate(10);
          break;
        case "確認中":
          $projects = $query->where('status', "確認中")->paginate(10);
          break;
        case "納品":
          $projects = $query->where('status', "納品")->paginate(10);
          break;
        default:
          $projects = $query->paginate(10);
          break;
      }
    } else {
      $projects = $query->paginate(10);
    }

    return [$projects, $statuses];
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
