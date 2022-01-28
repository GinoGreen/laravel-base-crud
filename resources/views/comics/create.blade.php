@extends('layouts.main')

@section('content')

   <main class="container">
      <h1>Nuovo fumetto</h1>
      <form action="{{ route('comics.store') }}" method="post">
         @csrf
         <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Inserisci titolo">
         </div>
         <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" name="price" class="form-control" id="price" placeholder="Inserisci prezzo">
         </div>
         <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" name="series" class="form-control" id="series" placeholder="Inserisci serie">
         </div>
         <div class="mb-3">
            <label for="sale_date" class="form-label">Data</label>
            <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Inserisci data">
         </div>
         <div class="mb-3">
            <label for="imgUrl" class="form-label">URL Immagine</label>
            <input type="text" name="imgUrl" class="form-control" id="imgUrl" placeholder="Inserisci URL immagine">
         </div>
         <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" name="type" class="form-control" id="imgUrl" placeholder="Inserisci tipo">
         </div>
         <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <div class="form-floating">
               <textarea class="form-control" placeholder="Inserisci la descrizione" id="floatingTextarea2" name="description" style="height: 100px"></textarea>
             </div>
         </div>

         <button type="submit" class="btn btn-success">Invia</button>
         <button type="reset" class="btn btn-secondary">Reset</button>
      </form>
   </main>
   
@endsection