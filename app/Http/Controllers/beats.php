<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class beats extends Controller
{
    public function show(User $user)
    {

        $mubarak = $user->get();

        return Inertia::render('beats', [
            "name" => "mubarak louis",
            "users" => $mubarak
        ]);
    }


    public function getMe(User $user)
    {

        $me = $user->find();

        return Inertia::render('me', [
            "user" => $me
        ]);
    }
}
