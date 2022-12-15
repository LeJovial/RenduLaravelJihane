@extends('layouts.app')

@section('content')
<div class="container text-center">
    <p><strong>Id:</strong> {{ $vignette->id }}</p>
    <p><strong>Legende:</strong> {{ $vignette->legende }}</p>
    <p><strong>url:</strong> {{ $vignette->url }}</p>
    <img src="{{ $vignette->url }}" height="350" class="mb-3">
    <p><strong>Description:</strong> {{ $vignette->description }}</p>
    <p><strong>Statut:</strong> {{ $vignette->statut }}</p>
</div>
@endsection