@extends('template.main')

@section('content')
<a class="m-4" href="{{route('indexBackType')}}">Retour</a>
<h3 class="mt-5 text-center">Ajoutez un type de formation</h3>
<section class="container bg-warning rounded d-flex flex-column justify-content-center  mt-5 ">
    <form class="d-flex flex-column my-5  w-50" action="{{route('storeType')}}" method="post">
        @csrf
        Nom : <input type="text" name="nom" id="">
        <button class="btn btn-primary w-25 mt-3" type="submit">Ajouter</button>
    </form>
</section>
@endsection