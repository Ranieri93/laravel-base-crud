@extends('layouts.main')
@section('page-title', 'Create Wines')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3" >
                <h1>Inserisci un nuovo vino</h1>
                <form method="post" action="{{route('wines.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nome Vino</label>
                        <input type="text" class="form-control"
                               name="name" id="nome-vino"  placeholder="name" required>
                    </div>
                    <div class="form-group">
                        <label for="anno">Vintage</label>
                        <input type="text" class="form-control"
                               name="vintage" id="anno-vino" placeholder="vintage" required>
                    </div>
                    <div class="form-group">
                        <label for="prezzo">Price</label>
                        <input type="text" class="form-control"
                               name="price" id="prezzo-vino" placeholder="price" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Inserisci</button>
                </form>
            </div>
        </div>
    </div>
@endsection
