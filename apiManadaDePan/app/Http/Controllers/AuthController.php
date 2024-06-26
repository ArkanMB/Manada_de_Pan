<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
  public function register(Request $request)
  {
    $user = User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password),
    ]);
    $token = $user->createToken('auth_token')->plainTextToken;
    return response()->json([
      'data' => $user,
      'access_token' => $token,
      'token_type' => 'Bearer',
    ]);
  }

  public function logout()
  {
    auth()->user()->tokens()->delete();
    return [
      'message' => 'Session closed successfully'
    ];
  }

  public function login(Request $request)
  {
    $user = User::where('email', $request->email)->firstOrFail();
    if (!Hash::check($request->password, $user->password)) {
      return response()->json(
        [
          'message' => 'Password incorrect'
        ],
        401
      );
    }
    $token = $user->createToken('auth_token')->plainTextToken;

    return response()->json([
      'message' => 'Hola' . $user->name,
      'user' => $user,
      'access_token' => $token,
      'token_type' => 'Bearer'
    ]);
  }
}
