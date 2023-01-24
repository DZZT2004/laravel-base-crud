@extends('layouts.base')

@section('content')
    <h1>Fumetti</h1>
    <div class="container">
        @foreach ($fumetti as $fumetto)
            <div class="card col-3" style="width: 18rem;">
                <img class="card-img-top" src="{{$fumetto->thumb}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$fumetto->title}}</h5>
                    <p class="card-text">{{$fumetto->description}}</p>
                    <p class="card-text">{{$fumetto->price}} €</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection