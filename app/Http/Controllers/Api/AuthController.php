<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    //

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function register(Request $request)
    {
        $this->validate(
            $request,
            [
                //...
            ]
        );

        User::create([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'phone' => $request->input('phone'),
            'active' => true,
            'permission' => false,
            'birthdate' => $request->input('birthdate'),
            'photo_path' => $request->input('photo_path')
        ]);

        return response()->json([
            'success' => true,
        ]);

    }

    public function me()
    {
        return response()->json(auth()->user());
    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    public function login(Request $request)
    {
        $credentials = request(['email','password']);

        if(!$token = auth('api')->attempt($credentials)){
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
