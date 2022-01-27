@extends('layouts.main')

@section('content')

   <main class="container">
      <h1>Fumetti</h1>
      <table class="table">
         <thead>
            <tr>
               <th scope="col">ID</th>
               <th scope="col">Title</th>
               <th scope="col">Series</th>
               <th scope="col">Price</th>
               <th scope="col">Action</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($comics as $comic)
               <tr>
                  <th scope="row">{{ $comic->id }}</th>
                  <td>{{ $comic->title }}</td>
                  <td>{{ $comic->series }}</td>
                  <td>{{ number_format($comic->price, 2, ',', '') }}€</td>
                  <td><button class="btn btn-warning"><a href="">Show</a></button></td>
               </tr>
            @endforeach
         </tbody>
       </table>
       {{ $comics->links() }}
   </main>
   
@endsection