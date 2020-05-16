<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }
 
    public function show(User $user)
    {
        return $user;
    }

    public function store(Request $request)
    {
        $json = json_decode($request->getContent(), true);
        $user = User::create(
            $json
        );
        return response()->json($user, 201);
    }

    public function update(Request $request, User $user)
    {
        $json = json_decode($request->getContent(), true);
        $user->update($json);
        return response()->json($user, 200);
    }

    public function delete(User $user)
    {
        $user->delete();
        return response()->json(null, 204);
    }
}
