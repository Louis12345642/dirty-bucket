<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class testController extends Controller
{
   public function test($requet){
//    return Inertia::render('test',[
//     $names=[
//         "name"=>"john doe",
//         "age"=>24
//     ]
//    ])->get();

// return Inertia::render('test',[
// $users=$request->g
// ]);

inertia('test');
   }
}
