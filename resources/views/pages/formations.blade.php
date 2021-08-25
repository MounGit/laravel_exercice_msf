@extends('template.main')

@section('content')
<section class="container my-5 bg-warning rounded">
    <h2 class="mt-5 p-4 text-center">Formations</h2>
    <div class="container p-5 d-flex justify-content-center ">
        <table class="table w-50">
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