@extends('layouts.admin')

@section('content')
    <h1>
        {{ $comic->name }}
    </h1>

    <p>
        Prezzo: € {{ $comic->price }}
    </p>

    <p>
        {{ $comic->description }}
    </p>

    <div>
        <img src="{{ $comic->image }}" alt="">
    </div>

    <p>
        Quantità disponibili: {{ $comic->quantity }}
    </p>

    <div class="mb-5">
         <a href="{{ route('admin.comics.edit', $comic->id) }}" class="btn btn-warning my-1">
            Aggiorna
        </a>

        <form action="{{ route('admin.comics.destroy', $comic->id) }}" class="d-inline-block" method="post">
            @csrf

            @method('delete')

            <button class="btn btn-danger" type="submit">Elimina</button>
        
        </form>

    </div>

@endsection