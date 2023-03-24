<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @return view
     */
    public function index(Request $request)
    {
        $users = UserService::index($request);

        return view('users.index', compact('users'));
    }

    /**
     * @return view
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * @param  App\Http\Requests\UserRequest $request
     * @return to_route
     */
    public function store(UserRequest $request)
    {
        UserService::store($request);

        return to_route('users.index');
    }

    /**
     * @param  int  $id
     * @return view
     */
    public function show($id)
    {
        $user = UserService::show($id);

        return view('users.show', compact('user'));
    }

    /**
     * @param  int  $id
     * @return view
     */
    public function edit($id)
    {
        $user = UserService::edit($id);

        return view('users.edit', compact('user'));
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return to_route
     */
    public function update(UserRequest $request, $id)
    {
        UserService::update($id, $request);

        return to_route('users.index');
    }

    /**
     * @param  int  $id
     * @return to_route
     */
    public function destroy($id)
    {
        UserService::destroy($id);

        return to_route('users.index');
    }
}
