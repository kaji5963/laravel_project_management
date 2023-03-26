<?php

namespace App\Repositories;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class MyProjectRepository
{
  public static function getAuthName()
  {
    $authName = Auth::user()->name;

    return $authName;
  }

  public static function getAllProject()
  {
    $projects = Project::paginate(10);

    return $projects;
  }
}
