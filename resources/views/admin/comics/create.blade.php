@extends('layouts.admin')

@section('content')

<div class="my-5">
    <form>
      <div class="mb-3">
        <label for="name" class="form-label">Nome comic:</label>
        <input
        required
        type="text"
        class="form-control"
        name="name"
        id="name"
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
        placeholder="Inserisci descrizione"></textarea>
      </div>
    
      <div class="mb-3">
        <label for="image" class="form-label">Descrizione:</label>
        <input
        class="form-control"
        type="text" 
        name="image" 
        id="image"
        placeholder="Inserisci descrizione"></input>
      </div>
    
        <div class="mb-3">
        <label for="price" class="form-label">Prezzo:</label>
        <input
        class="form-control"
        required
        type="number" 
        name="price" 
        id="price"
        placeholder="Inserisci prezzo"
        step="0.01"></input>
      </div>
    
       <div class="mb-3">
        <label for="quantity" class="form-label">Quantità:</label>
        <input
        class="form-control"
        required
        type="number" 
        name="quantity" 
        id="quantity"
        placeholder="Inserisci quantità"></input>
      </div>
    
      <button type="submit" class="mb-5 btn btn-success">Crea</button>
    </form>
</div>
@endsection