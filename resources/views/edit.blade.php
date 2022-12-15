@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/admin/editForm/{{ $vignette->id }}" method="post" class="d-flex justify-content-center flex-wrap">
        @csrf
        <div class="d-flex justify-content-center">
            <div class="m-5">
                <label for="set_legende">Légende</label>
                <input type="text" class="rounded" name="set_legende" id="set_legende" value="{{ old('set_legende', $vignette->legende) }}" required>
            </div>
            <div class="m-5">
                <label for="set_url">url</label>
                <input type="text" class="rounded" name="set_url" id="set_url" value="{{ old('set_url', $vignette->url) }}" required>
            </div>
            <div class="m-5">
                <label for="set_description">Description</label>
                <input type="text" class="rounded" name="set_description" id="set_description" value="{{ old('set_description', $vignette->description) }}" required>
            </div>
            <div class="m-5">
                <label for="statut_number">Statut</label>
                <input type="number" class="rounded" name="statut_number" id="statut_number" value="{{ old('statut_number', $vignette->statut) }}" required>
            </div>
        </div>
        <input type="submit" class="btn btn-outline-success" value="Valider">
    </form>
</div>
@endsection