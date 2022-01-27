@extends('layouts.main')

@section('content')

   <main class="container">
      <h1>{{ $comic->title }}</h1>
      <div class="d-flex">
         <div style="width: 40%">
            <img class="mb-3" src="{{ $comic->imgUrl }}" alt="poster">
            <span class="h2 mx-2">{{ number_format($comic->price, 2, ',', '') }}€</span>
         </div>
         <div style="width: 55%">
            <p>{{ $comic->description }}</p>
            <div>
               <button class="btn btn-outline-danger"><a href="{{ route('comics.index') }}">Torna alla lista</a></button>
            </div>
         </div>
      </div>
   </main>
   
@endsection