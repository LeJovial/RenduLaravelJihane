@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        <div class="album py-5 mx-5">
            <div class="container-fluid">
              <h1 class="mt-5">Gestion des vignettes :</h1>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">legende</th>
                    <th scope="col">show</th>
                    <th scope="col">edit</th>
                    <th scope="col">delete</th>
                  </tr>
                </thead>
                <tbody>
                  <a href="/admin/add"><button class="btn btn-success">add</button></a>
                  @foreach ($vignettes as $vignette)
                      <tr>
                        <th scope="row">{{ $vignette->id }}</th>
                        <td>{{ $vignette->legende }}</td>
                        <td><a href="/show/{{ $vignette->id }}"><button class="btn btn-primary">show</button></a></td>
                        <td><a href="/admin/edit/{{ $vignette->id }}"><button class="btn btn-warning">edit</button></a></td>
                        <td><a href="/admin/delete/{{ $vignette->id }}"><button class="btn btn-danger">delete</button></a></td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
    </div>
</div>
@endsection
