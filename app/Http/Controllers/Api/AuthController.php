<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\UnauthorizedException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (! Auth::attempt($credentials)) {
            throw new UnauthorizedException('Incorrect login details');
        }

        /**
         * Regenerate the session to prevent "session fixation"
         * @link https://owasp.org/www-community/attacks/Session_fixation
         */
        $request->session()->regenerate();

        /** @var User $user */
        $user = Auth::user();
        $user->tokens()->whereName('login_token')->delete();
        $token = $user->createToken('login_token', ['*']);

        return ['token' => $token->plainTextToken];
    }

    /**
     * This is for fetching the user details of the currently authenticated user. It can be used by the frontend to check if the user is logged in and to get the user details.
     */

    public function me()
    {
        return Auth::user();
    }
}
