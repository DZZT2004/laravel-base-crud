@extends('layouts.base')

@section('title', 'Inserisci un nuovo fumetto')

@section('content')
    <form method="post" action="{{ route('fumettos.store') }}">
        @csrf()
        <div class="mb-3">
            <input type="string" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <input type="string" class="form-control" id="description" name="description">
        </div>
        <div class="mb-3">
            <input type="string" class="form-control" id="thumb" name="thumb">
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3">
            <input type="string" class="form-control" id="series" name="series">
        </div>
        <div class="mb-3">
            <input type="date" class="form-control" id="sale_date" name="sale_date">
        </div>
        <div class="mb-3">
            <input type="string" class="form-control" id="type" name="type">
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
@endsection