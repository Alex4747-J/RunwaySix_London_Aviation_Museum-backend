<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (! Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        /**
         * Regenerate the session to prevent "session fixation"
         * @link https://owasp.org/www-community/attacks/Session_fixation
         */
        // $request->session()->regenerate();

        /** @var User $user */
        $user = Auth::user();
        $user->tokens()->whereName('login_token')->delete();
        $token = $user->createToken('login_token', ['*']);

        return ['token' => $token->plainTextToken];
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Logged out']);
    }

    /**
     * This is for fetching the user details of the currently authenticated user. It can be used by the frontend to check if the user is logged in and to get the user details.
     */

    public function me()
    {
        return Auth::user();
    }
}
