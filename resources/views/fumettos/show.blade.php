@extends('layouts.base')

@section('title', 'Dettagli fumetto')

@section('content')
    <div class="card col-3" style="width: 18rem;">
        <img class="card-img-top" src="{{$fumetto->thumb}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$fumetto->title}}</h5>
            <p class="card-text">{{$fumetto->description}}</p>
            <p class="card-text">{{$fumetto->price}} €</p>
        </div>
    </div>
@endsection