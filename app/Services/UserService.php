<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{
  public static function index($request)
  {
    $search = $request->search;
    $users = UserRepository::getAllUsers($search);

    return $users;
  }

  public static function store($request)
  {
    UserRepository::createUser($request);
  }

  public static function show($id)
  {
    $user = UserRepository::getSingleUser($id);

    return $user;
  }

  public static function edit($id)
  {
    $user = UserRepository::editUser($id);

    return $user;
  }

  public static function update($id, $request)
  {
    UserRepository::updateUser($id, $request);
  }

  public static function destroy($id)
  {
    UserRepository::deleteUser($id);
  }
}
