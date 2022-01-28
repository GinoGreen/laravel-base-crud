@extends('layouts.main')

@section('content')

   <main class="container">
      <h1>Errore 404</h1>
      <h4>{{ $exception->getMessage() }}</h4>
   </main>
   
@endsection