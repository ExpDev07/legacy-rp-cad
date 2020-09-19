<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;
use Inertia\Response;

class LoginController extends Controller
{

    /**
     * Renders the login page.
     *
     * @return Response
     */
    public function render(): Response
    {
        return Inertia::render('Auth/Login');
    }

    /**
     * Logs the user in.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function login(Request $request): RedirectResponse
    {
        // Validate.
        $credentials = $request->validate([
            'email'    => ['required'],
            'password' => ['required'],
        ]);

        // Find user with email.
        $user = User::query()->where('email', $credentials['email'])->firstOrFail();

        // Check hash.
        if (! Hash::check($credentials['password'], $user->password)) {
            abort(401, 'Incorrect credentials.');
        }

        // Login.
        auth()->login($user);

        // Redirect to home.
        return redirect()->route('home');
    }

}
