<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    public function index (){
        $data = Eleve::all();
        return view('pages.eleves', compact('data'));
    }
    public function indexBack (){
        $data = Eleve::all();
        return view('backoffice.elevesBack.eleBack', compact('data'));
    }
    public function create (){
        return view('backoffice.elevesBack.eleCreate');
    }
    public function store (Request $request){
        request()->validate([
            "nom"=>["required", "min:1", "max:30"],
            "prenom"=>["required", "min:1", "max:30"],
            "age"=>["required", "numeric"],
            "etat"=>["required", "boolean"]
        ]);
        $newEntry = new Eleve;
        $newEntry->nom = $request->nom;
        $newEntry->prenom = $request->prenom;
        $newEntry->age = $request->age;
        $newEntry->etat = $request->etat;
        $newEntry->save();
        return redirect()->back();
    }
    public function show (Eleve $id){
        $data = $id;
        return view('backoffice.elevesBack.eleShow', compact('data'));
    }
    public function destroy (Eleve $id){
        $id->delete();
        return redirect()->route('indexBackEle');
    }
    public function edit (Eleve $id){
        $data = $id;
        return view('backoffice.elevesBack.eleEdit', compact('data'));
    }
    public function update (Eleve $id, Request $request){
        request()->validate([
            "nom"=>["required", "min:1", "max:30"],
            "prenom"=>["required", "min:1", "max:30"],
            "age"=>["required", "numeric"],
            "etat"=>["required", "boolean"]
        ]);
        $data = $id;
        $data->nom = $request->nom;
        $data->prenom = $request->prenom;
        $data->age = $request->age;
        $data->etat = $request->etat;
        $data->save();
        return redirect()->route('showEle', $data->id);
    }
}
