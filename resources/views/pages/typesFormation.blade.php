@extends('template.main')

@section('content')
<section class="container my-5 bg-warning rounded">
    <h2 class="mt-5 p-4 text-center">Types de formation</h2>
    <div class="container p-5 d-flex justify-content-center ">
        <table class="table w-50">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $data)
                    <tr>
                        <td>{{$data->nom}}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</section>
@endsection