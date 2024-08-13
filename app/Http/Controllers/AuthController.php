<?php

namespace App\Http\Controllers;


use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function login(LoginRequest $request) {
        $data = $request->validated();
    }

    public function register(RegisterRequest $request) {
        $data = $request->validated();
        echo $data;
    }
}
