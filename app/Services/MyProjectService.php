<?php

namespace App\Services;

use App\Repositories\MyProjectRepository;

class MyProjectService
{
  public static function authName()
  {
    $authName = MyProjectRepository::getAuthName();

    return $authName;
  }

  public static function projects()
  {
    $projects = MyProjectRepository::getAllProject();

    return $projects;
  }
}
