<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiController extends Controller {

    public function store(Request $request): JsonResponse {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

//        $user = User::create($request->all());

        return response()->json([
            'message' => 'User successfully registered',
//            'user' => $user
        ], 201);
    }

}
