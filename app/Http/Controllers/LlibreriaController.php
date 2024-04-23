<?php

namespace App\Http\Controllers;

use App\Models\Llibreria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


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

        return redirect()->route('llibreria.list');
    }

    public function list(){

        $arrayLlibreries = Llibreria::all();

        if(Session::get('msgFlash')){
            $msgFlash = Session::get('msgFlash');
        }else{
            $msgFlash = null;
        }

        return view("llibreria.list")->with([
            "msgFlash" =>  $msgFlash,
            "llibreries" => $arrayLlibreries
        ]);

    }





}
