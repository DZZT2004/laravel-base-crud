@extends('layouts.base')

@section('title', 'Cambia informazioni del fumetto')

@section('content')
    <form method="post" action="{{ route('fumettos.update', ['fumetto' => $fumetto]) }}">
        @csrf()
        @method('put')
        <div class="mb-3">
            <input type="string" class="form-control" id="title" name="title" value="{{ $fumetto->title }}">
        </div>
        <div class="mb-3">
            <input type="string" class="form-control" id="description" name="description" value="{{ $fumetto->description }}">
        </div>
        <div class="mb-3">
            <input type="string" class="form-control" id="thumb" name="thumb" value="{{ $fumetto->thumb }}">
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" id="price" name="price" value="{{ $fumetto->price }}">
        </div>
        <div class="mb-3">
            <input type="string" class="form-control" id="series" name="series" value="{{ $fumetto->series }}">
        </div>
        <div class="mb-3">
            <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $fumetto->sale_date }}">
        </div>
        <div class="mb-3">
            <input type="string" class="form-control" id="type" name="type" value="{{ $fumetto->type }}">
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
@endsection