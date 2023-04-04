@extends('layouts.admin')

@section('content')

<div class="my-5">
    <form action="{{ route('admin.comics.update', $comic->id) }}" method="post">

      @csrf

      @method('put')

      <div class="mb-3">
        <label for="name" class="form-label">Nome comic:</label>
        <input
        required
        type="text"
        class="form-control"
        name="name"
        id="name"
        value="{{ old('name', $comic->name) }}"
        aria-describedby="name"
        placeholder="Inserisci nome comic">
        <div id="name" class="form-text">Il campo è obbligatorio</div>
      </div>
    
      <div class="mb-3">
        <label for="description" class="form-label">Descrizione:</label>
        <textarea
        class="form-control"
        required
        name="description"
        id="description"
        rows="6"
        placeholder="Inserisci descrizione">{{ old('description', $comic->description) }}</textarea>
      </div>
    
      <div class="mb-3">
        <label for="image" class="form-label">Immagine:</label>
        <input
        class="form-control"
        type="file" 
        name="image" 
        id="image"
        {{-- value="{{ old('description', $comic->description) }}" --}}
        placeholder="Inserisci descrizione">
      </div>
    
        <div class="mb-3">
        <label for="price" class="form-label">Prezzo:</label>
        <input
        class="form-control"
        required
        type="number" 
        name="price" 
        id="price"
        value="{{ old('price', $comic->price) }}"
        placeholder="Inserisci prezzo"
        step="0.01">
      </div>
    
      <div class="mb-3">
        <label for="quantity" class="form-label">Quantità:</label>
        <input
        class="form-control"
        required
        type="number" 
        name="quantity" 
        id="quantity"
        value="{{ old('quantity', $comic->quantity) }}"
        placeholder="Inserisci quantità">
      </div>
    
      <button type="submit" class="mb-5 btn btn-warning">Aggiorna</button>
    </form>
</div>
@endsection