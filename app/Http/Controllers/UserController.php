<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate.
        $data = $request->validate([
            'name'             => [ 'required' ],
            'email'            => [ 'required', 'unique:users' ],
            'password'         => [ 'required' ],
            // 'confirm_password' => [ 'required' ],
        ]);

        // Create user (make sure to hash password).
        $user = User::query()->create(array_merge($data, [
            'password' => Hash::make($data['password']),
        ]));

        // Login the user.
        auth()->login($user, true);

        // Redirect to home.
        return redirect()->route('home');
    }

}
