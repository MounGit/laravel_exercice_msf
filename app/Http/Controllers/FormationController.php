<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index (){
        $data = Formation::all();
        return view('pages.formations', compact('data'));
    }
    public function indexBack (){
        $data = Formation::all();
        return view('backoffice.formationsBack.formBack', compact('data'));
    }
    public function create (){
        return view('backoffice.formationsBack.formCreate');
    }
    public function store (Request $request){
        $newEntry = new Formation;
        $newEntry->nom = $request->nom;
        $newEntry->descr = $request->descr;
        $newEntry->save();
        return redirect()->back();
    }
    public function show (Formation $id){
        $data = $id;
        return view('backoffice.formationsBack.formShow', compact('data'));
    }
    public function destroy (Formation $id){
        $id->delete();
        return redirect()->route('indexBackForm');
    }
    public function edit (Formation $id){
        $data = $id;
        return view('backoffice.formationsBack.formEdit', compact('data'));
    }
    public function update (Formation $id, Request $request){
        $data = $id;
        $data->nom = $request->nom;
        $data->descr = $request->descr;
        $data->save();
        return redirect()->route('showForm', $data->id);
    }
}
