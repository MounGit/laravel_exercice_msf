<?php

namespace App\Http\Controllers;

use App\Models\Batiment;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class BatimentController extends Controller
{
    public function index (){
        $data = Batiment::all();
        return view('pages.batiments', compact('data'));
    }
    public function indexBack (){
        $data = Batiment::all();
        return view('backoffice.batimentsBack.batBack', compact('data'));
    }
    public function create (){
        return view('backoffice.batimentsBack.batCreate');
    }
    public function store (Request $request){
        request()->validate([
            "nom"=>["required", "min:1", "max:30"],
            "descr"=>["required", "min:1", "max:600"]
        ]);
        $newEntry = new Batiment;
        $newEntry->nom = $request->nom;
        $newEntry->descr = $request->descr;
        $newEntry->save();
        return redirect()->back();
    }
    public function show (Batiment $id){
        $batiment = $id;
        return view('backoffice.batimentsBack.batShow', compact('batiment'));
    }
    public function destroy (Batiment $id){
        $id->delete();
        return redirect()->route('indexBackBat');
    }
    public function edit (Batiment $id){
        $data = $id;
        return view('backoffice.batimentsBack.batEdit', compact('data'));
    }
    public function update (Batiment $id, Request $request){
        request()->validate([
            "nom"=>["required", "min:1", "max:30"],
            "descr"=>["required", "min:1", "max:600"]
        ]);
        $data = $id;
        $data->nom = $request->nom;
        $data->descr = $request->descr;
        $data->save();
        return redirect()->route('showBat', $data->id);
    }
}