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
               <th scope="col">Actions</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($comics as $comic)
               <tr>
                  <th scope="row">{{ $comic->id }}</th>
                  <td>{{ $comic->title }}</td>
                  <td>{{ $comic->series }}</td>
                  <td>{{ number_format($comic->price, 2, ',', '') }}€</td>
                  <td class="d-flex">
                     <button class="btn btn-warning mr-3"><a href="{{ route('comics.show', $comic) }}">Show</a></button>
                     <form action="{{ route('comics.destroy', $comic) }}" action="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                     </form>
                  </td>
               </tr>
            @endforeach
         </tbody>
       </table>
       {{ $comics->links() }}
   </main>
   
@endsection