@extends('layouts.main')
@section('page-title', 'Update Wines')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3" >
                <h1>Modifica vino</h1>
                <a class="btn btn-dark" href="{{route('wines.index')}}">Torna indietro</a>
                <form method="post" action="{{route('wines.update', ['wine' => $wine->id])}}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nome Vino</label>
                        <input type="text" class="form-control"
                               name="name" id="nome-vino"  placeholder="name" value="{{$wine->name}}" required>
                    </div>
                    <div class="form-group">
                        <label for="anno">Vintage</label>
                        <input type="text" class="form-control"
                               name="vintage" id="anno-vino" placeholder="vintage" value="{{$wine->vintage}}" required>
                    </div>
                    <div class="form-group">
                        <label for="prezzo">Price</label>
                        <input type="text" class="form-control"
                               name="price" id="prezzo-vino" placeholder="price" value="{{$wine->price}}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Modifica</button>
                </form>
            </div>
        </div>
    </div>
@endsection
