<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Inertia\Response;

class RegisterController extends Controller
{

    /**
     * Renders the registration page.
     *
     * @return Response
     */
    public function render(): Response
    {
        return Inertia::render('Auth/Register');
    }

}
