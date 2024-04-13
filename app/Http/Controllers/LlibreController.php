<?php

namespace App\Http\Controllers;

use App\Models\Llibre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LlibreController extends Controller
{
    public function index()
    {
        return view("llibre.index");
    }

    public function handleButton(Request $request)
    {

        $buttonClicked = $request->input('button');

        switch ($buttonClicked) {

            case 'llistar':
                return redirect()->route('redirectStoreToList');
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

    public function store(Request $request)
    {
        $credentials = $request->validate([
            "titol" => ["required"],
            "autor" => ["required"],
            "anypub" => ["required"],
            "editorial" => ["required"],
            "isbn" => ["required"],
            "categoria" => ["required"],
        ]);

        $llibre = new Llibre();

        $llibre->titol = $request->titol;
        $llibre->autor = $request->autor;
        $llibre->anypub = $request->anypub;
        $llibre->editorial = $request->editorial;
        $llibre->isbn = $request->isbn;
        $llibre->categoria = $request->categoria;

        $llibre->save();

        return redirect()->route('redirectStoreToList');
    }

    public function goingToLlibreList()
    {

        $arrayLlibres = Llibre::all();

        $status = Session::get('status');


        return view("llibre.list")->with([
            "status" =>  $status,
            "llibres" => $arrayLlibres
        ]);
    }

    public function destroy($id)
    {

        $resource = Llibre::find($id);

        Session::flash('status', 'Llibre eliminat correctament');

        if (!$resource) {
            return response('Resource not found', 404);
        }

        $resource->delete();

        return redirect()->route('redirectStoreToList');
    }


}
