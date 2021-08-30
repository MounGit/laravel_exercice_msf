<?php

namespace App\Http\Controllers;

use App\Models\Typeformation;
use Illuminate\Http\Request;

class TypeformationController extends Controller
{
    public function index (){
        $data = Typeformation::all();
        return view('pages.typesFormation', compact('data'));
    }
    public function indexBack (){
        $data = Typeformation::all();
        return view('backoffice.typesBack.typeBack', compact('data'));
    }
    public function create (){
        return view('backoffice.typesBack.typeCreate');
    }
    public function store (Request $request){
        request()->validate([
            "nom"=>["required", "min:1", "max:50"]
        ]);
        $newEntry = new Typeformation;
        $newEntry->nom = $request->nom;
        $newEntry->save();
        return redirect()->back();
    }
    public function show (Typeformation $id){
        $data = $id;
        return view('backoffice.typesBack.typeShow', compact('data'));
    }
    public function destroy (Typeformation $id){
        $id->delete();
        return redirect()->route('indexBackType');
    }
    public function edit (Typeformation $id){
        $data = $id;
        return view('backoffice.typesBack.typeEdit', compact('data'));
    }
    public function update (Typeformation $id, Request $request){
        request()->validate([
            "nom"=>["required"|"min:1"|"max:50"]
        ]);
        $data = $id;
        $data->nom = $request->nom;
        $data->save();
        return redirect()->route('showType', $data->id);
    }
}