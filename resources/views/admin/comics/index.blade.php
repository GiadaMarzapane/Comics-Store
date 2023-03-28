@extends('layouts.admin')

@section('content')
<h1 class="my-4">
    Comics
</h1>

<a href="{{ route('admin.comics.create') }}" class="btn btn-success mb-3">
    Inserisci un nuovo comic
</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Descrizione</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Quantità</th>
      </tr>
    </thead>
    <tbody>
      
    @foreach ($comics as $comic)
        <tr>
            <th scope="row">{{ $comic->id }}</th>
            <td>{{ $comic->name }}</td>
            <td>{{ $comic->description }}</td>
            <td>{{ $comic->price }}</td>
            <td>{{ $comic->quantity }}</td>
            <td>
                <a href="{{ route('admin.comics.show', $comic->id) }}" class="btn btn-primary">
                    Mostra
                </a>
            </td>
        </tr>
    @endforeach
        
    </tbody>
  </table>
    
@endsection