@extends('template.main')

@section('content')
<a class="m-4" href="{{route('indexBackBat')}}">Retour</a>
<section class="container bg-warning d-flex justify-content-center mt-5 p-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$batiment->nom}}</h5>
            <p class="card-text"> {{$batiment->descr}}</p>
            <div class="d-flex justify-content-around">
                <a href="{{route('editBat', $batiment->id)}}" class="btn btn-primary">Modifier</a>
                <form action="{{route('deleteBat', $batiment->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection