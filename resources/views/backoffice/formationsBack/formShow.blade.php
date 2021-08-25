@extends('template.main')

@section('content')
<a class="m-4" href="{{route('indexBackForm')}}">Retour</a>
<section class="container bg-warning d-flex justify-content-center mt-5 p-5 rounded">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$data->nom}}</h5>
            <p class="card-text"> {{$data->descr}}</p>
            <div class="d-flex justify-content-around">
                <a href="{{route('editForm', $data->id)}}" class="btn btn-primary">Modifier</a>
                <form action="{{route('deleteForm', $data->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection