@extends('template.main')

@section('content')
<section class="container mt-5 bg-warning">
    <h2 class="mt-5 p-4 text-center">Bâtiments</h2>
    <div class="container p-5 d-flex justify-content-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $data)
                    <tr>
                        <td>{{$data->nom}}</td>
                        <td>{{$data->descr}}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</section>
@endsection