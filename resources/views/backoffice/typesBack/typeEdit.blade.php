@extends('template.main')

@section('content')
<h3 class="mt-5 text-center">Modifiez le type de formation</h3>
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
<section class="container bg-warning d-flex flex-column justify-content-center  mt-5 ">
    <form class="d-flex flex-column my-5  w-50" action="{{route('updateType', $data->id)}}" method="post">
        @csrf
        @method('PUT')
        Nom : <input value="{{$data->nom}}" type="text" name="nom" id="">
        <button class="btn btn-primary w-25 mt-3" type="submit">Modifier</button>
    </form>
</section>
@endsection