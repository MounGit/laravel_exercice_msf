@extends('template.main')

@section('content')
<h3 class="mt-5 text-center">Modifiez l'élève</h3>
<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
<section class="container bg-warning d-flex flex-column justify-content-center  mt-5 ">
    <form class="d-flex flex-column my-5  w-50" action="{{route('updateEle', $data->id)}}" method="post">
        @csrf
        @method('PUT')
        Nom : <input value="{{$data->nom}}" type="text" name="nom" id="">
        Prénom : <input value="{{$data->prenom}}" type="text" name="prenom" id="">
        Age : <input value="{{$data->age}}" type="number" min="18" max="30" name="age" id="">
        Etat : <select class="form-select" name="etat" aria-label="Default select example">
            <option selected>Modifiez l'état</option>
            @if ($data->etat == 0)
                <option value="0" class="fw-bold text-primary">demandeur d'emploi</option>
                <option value="1">travailleur</option>
            @else
                <option value="0" >demandeur d'emploi</option>
                <option value="1" class="fw-bold text-primary">travailleur</option>
            @endif

        </select>
        <button class="btn btn-primary w-25 mt-3" type="submit">Modifier</button>
    </form>
</section>
@endsection