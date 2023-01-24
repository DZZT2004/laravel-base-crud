@extends('layouts.base')

@section('title', 'Fumetti')

@section('content')
    <a href="{{ route('fumettos.create') }}" class="btn btn-primary">Aggiungi fumetto</a>
    <div class="container">
        @foreach ($fumetti as $fumetto)
            <div class="card col-3" style="width: 18rem;">
                <img class="card-img-top" src="{{$fumetto->thumb}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$fumetto->title}}</h5>
                    <p class="card-text">{{$fumetto->description}}</p>
                    <p class="card-text">{{$fumetto->price}} €</p>
                    <a href="{{ route('fumettos.show', ['fumetto' => $fumetto->id]) }}" class="btn btn-primary">Show</a>
                    <a href="{{ route('fumettos.edit', ['fumetto' => $fumetto->id]) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('fumettos.destroy', ['fumetto' => $fumetto->id]) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection