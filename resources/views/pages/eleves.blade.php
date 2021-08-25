@extends('template.main')

@section('content')
<section class="container my-5 bg-warning rounded">
    <h2 class="mt-5 p-4 text-center">Elèves</h2>
    <div class="container p-5 d-flex justify-content-center ">
        <table class="table w-75">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Age</th>
                    <th scope="col">Statut</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $data)
                    <tr>
                        <td>{{$data->nom}}</td>
                        <td>{{$data->prenom}}</td>
                        <td>{{$data->age}}</td>
                       
                        @if ($data->etat == 0)
                            <td>demandeur d'emploi</td>
                        @else
                            <td>travailleur</td>
                        @endif    
                        
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</section>
@endsection