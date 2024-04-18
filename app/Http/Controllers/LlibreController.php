<?php

namespace App\Http\Controllers;

use App\Models\Llibre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

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
                return redirect()->route('redirectToCreate');
                break;
        }
    }

    public function goToCreate(){
        return view("llibre.create");
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            "titol" => ["required"],
            "autor" => ["required"],
            "anypub" => ["required", "numeric"],
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

        if(Session::get('msgFlash')){
            $msgFlash = Session::get('msgFlash');
        }else{
            $msgFlash = null;
        }

        return view("llibre.list")->with([
            "msgFlash" =>  $msgFlash,
            "llibres" => $arrayLlibres
        ]);

    }

    public function destroy($id)
    {

        $resource = Llibre::find($id);

        Session::flash('msgFlash', 'Llibre eliminat correctament');

        if (!$resource) {
            return response('Resource not found', 404);
        }

        $resource->delete();

        return redirect()->route('redirectStoreToList');
    }

    public function goToUpdate($id)
    {
        $unLlibre = Llibre::find($id);

        if (!$unLlibre) {
            return response('Resource not found', 404);
        }

        return view("llibre.create")->with([
            "unLlibre" =>  $unLlibre,
        ]);
    }

    public function update(Request $request){

        $credentials = $request->validate([
            "titol" => ["required"],
            "autor" => ["required"],
            "anypub" => ["required"],
            "editorial" => ["required"],
            "isbn" => ["required"],
            "categoria" => ["required"],
        ]);

        $idLlibre = $request->id;
        $llibre = Llibre::find($idLlibre);

        $llibre->titol = $request->titol;
        $llibre->autor = $request->autor;
        $llibre->anypub = $request->anypub;
        $llibre->editorial = $request->editorial;
        $llibre->isbn = $request->isbn;
        $llibre->categoria = $request->categoria;

        $llibre->save();

        Session::flash('msgFlash', 'Llibre actualizat correctament');

        return redirect()->route('redirectStoreToList');

    }


}
