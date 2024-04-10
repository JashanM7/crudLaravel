<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LlibreController extends Controller
{
    public function index(){
        return view("llibre.index");
    }

    public function handleButton(Request $request)
    {
        $buttonClicked = $request->input('button');
        
        switch ($buttonClicked) {
            case 'llistar':
                return view("llibre/list");
                break;
            case 'crear':
                return view("llibre/create");
                break;
            case 'eliminar':
                return view("llibre/destroy");
                break;
            case 'editar':
                return view("llibre/update");
                break;
        }
    }




}
