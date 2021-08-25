@extends('template.main')

@section('content')
<section class="container mt-5 bg-warning">
    <h2 class="mt-5 text-center">Types de formations</h2>
    <div class="container mt-5 d-flex justify-content-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( as )
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</section>
@endsection