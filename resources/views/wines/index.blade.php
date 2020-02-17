@extends('layouts.main')
@section('page-title', 'Index Wines')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Lista Vini</h1><table class="table">
                    <a class="btn btn-success float-right" href="{{route('wines.create')}}">
                        Inserisci un nuovo vino</a>
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Vintage</th>
                            <th scope="col">Price</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($wines as $vino)
                        <tr>
                            <th scope="row">{{ $vino->id }}</th>
                            <td>{{ $vino->name }}</td>
                            <td>{{ $vino->vintage }}</td>
                            <td>{{ $vino->price }}</td>
                            <td>
                                <a class="btn btn-secondary" href="{{route('wines.show',
                                ['wine' => $vino->id ])}}">Details</a>
                                <a class="btn btn-warning" href="{{route('wines.edit',
                                ['wine' => $vino->id ])}}">Update</a>
                                <form method="post" action="{{route('wines.destroy', ['wine' => $vino->id])}}">
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-danger" type="submit" value="Delete">
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>non ci sono vini</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
