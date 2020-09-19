<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Character;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CharacterController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return LengthAwarePaginator
     */
    public function index(Request $request): LengthAwarePaginator
    {
        // Query.
        $characters = Character::query()
            ->where('first_name', 'like', "%{$request->get('first_name', '')}%")
            ->where('last_name', 'like', "%{$request->get('last_name', '')}%");


        // Return characters found.
        return $characters->paginate(15);
    }

    /**
     * Display the specified resource.
     *
     * @param Character $character
     * @return Response
     */
    public function show(Character $character)
    {
        //
    }

}
