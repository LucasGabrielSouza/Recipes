<?php

namespace App\Http\Controllers;
use App\Recipes; 
use App\Sugestions;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

       $salgados = Recipes::take(3)
       ->where('id_type',1)
       ->get();

       $sobremesas = Recipes::take(3)
       ->where('id_type',2)
       ->get();

       $principal = Recipes::take(3)
       ->where('id_type',3)
       ->get();

        return view('Home.Home', compact('salgados', 'sobremesas', 'principal'));
    }

    public function sendSugestion(Request $request, Sugestions $sugestions){

        $sugestions->name = $request->name;
        $sugestions->message = $request->message;
        $sugestions->email = $request->email;
        $sugestions->save();
       
    }
}

