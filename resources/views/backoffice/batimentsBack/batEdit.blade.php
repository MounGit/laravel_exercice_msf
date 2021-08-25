@extends('template.main')

@section('content')
<h3 class="mt-5 text-center">Modifiez le bâtiment</h3>
<section class="container bg-warning d-flex flex-column justify-content-center  mt-5 ">
    

    <form class="d-flex flex-column my-5  w-50" action="{{route('updateBat', $data->id)}}" method="post">
        @csrf
        @method('PUT')
        Nom : <input value="{{$data->nom}}" type="text" name="nom" id="">
        Description : <input value="{{$data->descr}}" type="text" name="descr" id="">
        <button class="btn btn-primary w-25 mt-3" type="submit">Ajouter</button>
    </form>


</section>
@endsection