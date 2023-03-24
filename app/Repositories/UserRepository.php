<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserRepository
{
  public static function getAllUsers($search)
  {
    $query = User::search($search);
    $users = $query->paginate(5);

    return $users;
  }

  public static function createUser($request)
  {
    try {
      DB::beginTransaction($request);

      User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role' => $request->role,
      ]);

      DB::commit();
    } catch (\Throwable $th) {
      DB::rollBack();
    }
  }

  public static function getSingleUser($id)
  {
    $user = User::findOrFail($id);

    return $user;
  }

  public static function editUser($id)
  {
    $user = User::findOrFail($id);

    return $user;
  }

  public static function updateUser($id, $request)
  {
    $user = User::findOrFail($id);

    try {
      DB::beginTransaction();

      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = $user->password;
      $user->role = $request->role;
      $user->update();

      DB::commit();
    } catch (\Throwable $th) {
      DB::rollBack();
    }
  }

  public static function deleteUser($id)
  {
    $user = User::findOrFail($id);

    $user->delete();

    return $user;
  }
}
