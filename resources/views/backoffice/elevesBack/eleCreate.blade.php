@extends('template.main')

@section('content')
<a class="m-4" href="{{route('indexBackEle')}}">Retour</a>
<h3 class="mt-5 text-center">Ajoutez un élève</h3>
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
<section class="container bg-warning rounded d-flex flex-column justify-content-center  mt-5 ">
    <form class="d-flex flex-column my-5  w-50" action="{{route('storeEle')}}" method="post">
        @csrf
        Nom : <input type="text" name="nom" id="" value="{{old('nom')}}">
        Prénom : <input type="text" name="prenom" id="" value="{{old('prenom')}}">
        Age : <input type="number" min="18" max="30" name="age" id="" value="{{old('age')}}">
        Etat : <select class="form-select" name="etat" aria-label="Default select example" value="{{old('etat')}}">
            <option selected>Selectionnez un état</option>
            <option value="0">demandeur d'emploi</option>
            <option value="1">travailleur</option>
        </select>
        <button class="btn btn-primary w-25 mt-3" type="submit">Ajouter</button>
    </form>
</section>
@endsection