<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json(['data' => UserResource::make($user)],200);
    }

    public function index()
    {
        $users = User::all();
        return response()->json(['data' => UserResource::collection($users)],200);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return response()->json(['data' => UserResource::make($user)],200);
    }
}


