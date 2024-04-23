<?php

namespace App\Http\Controllers;

use App\Models\Llibreria;
use Illuminate\Http\Request;

class LlibreriaController extends Controller
{
    
    public function hola(){
        return view("llibreria.create");
    }

    public function store(Request $request){

        $credentials = $request->validate([
            "nom" => ["required"],
            "lloc" => ["required"],
        ]);
        
        $llibreria = new Llibreria();

        $llibreria->titol = $request->nom;
        $llibreria->autor = $request->lloc;

        $llibreria->save();

        return redirect()->route('redirectStoreToList');
    }



}
