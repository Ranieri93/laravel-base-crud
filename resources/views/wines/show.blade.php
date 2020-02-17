@extends('layouts.main')
@section('page-title', 'Show Wines')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"> ID vino: {{$wine->id}}</h5>
                        <a class="btn btn-dark" href="{{route('wines.index')}}">Torna indietro</a>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Nome vino: <br> {{$wine->name}}</li>
                            <li class="list-group-item">Anno vino: <br> {{$wine->vintage}}</li>
                            <li class="list-group-item">Prezzo vino: <br> {{$wine->price}}</li>
                            <li class="list-group-item">Creato il: <br> {{$wine->created_at}}</li>
                            <li class="list-group-item">Aggiornato il: <br> {{$wine->updated_at}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
