<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LogoutController extends Controller
{

    /**
     * Logs the current user out.
     *
     * @return RedirectResponse
     */
    public function logout(): RedirectResponse
    {
        // Logout the user.
        auth()->logout();

        // Redirect to base.
        return redirect('/');
    }

}
