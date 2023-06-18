<?php

namespace App\Http\Controllers;

use App\Models\Beats;
use Illuminate\Http\Request;

class beatsController extends Controller
{
    public function show(){
        $beat=Beats::all();
        dd($beat);
    }
}
