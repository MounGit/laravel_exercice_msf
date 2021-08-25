@extends('template.main')

@section('content')
<a class="m-4" href="{{route('indexBackEle')}}">Retour</a>
<section class="container bg-warning d-flex justify-content-center mt-5 p-5 rounded">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$data->nom}} {{$data->prenom}}</h5>
            <p>{{$data->age}} ans</p>
            @if ($data->etat == 0)
                <p>Statut : demandeur d'emploi</p> 
            @else
                <p> Statut : travailleur</p> 
            @endif 
            <div class="d-flex justify-content-around mt-3">
                <a href="{{route('editEle', $data->id)}}" class="btn btn-primary">Modifier</a>
                <form action="{{route('deleteEle', $data->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection