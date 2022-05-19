<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if (Auth::attempt($credentials)) {
            if ($request->user()->isAdmin()) {
                $token = $request->user()->createToken('admin-token', ['create', 'update', 'delete']);
            } else {
                $token = $request->user()->createToken('user-token', ['none']);
            }
            return ['token' => $token->plainTextToken];
        }
        return response()->json(
            ['message' => 'The provided credentials do not match our records.'],
            400
        );
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return ['message' => 'User logged out.'];
    }
}
