@extends('layouts.main')

@section('content')

   <main class="container">
      <h1>Nuovo fumetto</h1>
      @if ($errors->any())
         <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
         </div>
      @endif
      <form action="{{ route('comics.store') }}" method="post">
         @csrf
         <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input 
               type="text" 
               name="title" 
               class="
                  form-control 
                  @error('title')
                     is-invalid
                  @enderror
               "
               value="{{old('title')}}"
               id="title" 
               placeholder="Inserisci titolo"
            >
               @error('title')
                  <p class="invalid-feedback">{{$message}}</p>
               @enderror
         </div>
         <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input 
               type="number" 
               name="price" 
               class="
                  form-control 
                  @error('price')
                     is-invalid
                  @enderror
               " 
               id="price" 
               placeholder="Inserisci prezzo"
               value="{{old('price')}}"
            >
               @error('price')
                  <p class="invalid-feedback">{{$message}}</p>
               @enderror
         </div>
         <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input 
               type="text" 
               name="series" 
               class="
                  form-control 
                  @error('series')
                     is-invalid
                  @enderror
               " 
               id="series" 
               placeholder="Inserisci serie"
               value="{{old('series')}}"
            >
               @error('series')
                  <p class="invalid-feedback">{{$message}}</p>
               @enderror
         </div>
         <div class="mb-3">
            <label for="sale_date" class="form-label">Data</label>
            <input 
               type="text" 
               name="sale_date" 
               class="
                  form-control 
                  @error('sale_date')
                     is-invalid
                  @enderror
               " 
               id="sale_date" 
               placeholder="Inserisci data"
               value="{{old('sale_date')}}"
            >
               @error('sale_date')
                  <p class="invalid-feedback">{{$message}}</p>
               @enderror
         </div>
         <div class="mb-3">
            <label for="imgUrl" class="form-label">URL Immagine</label>
            <input 
               type="text" 
               name="imgUrl" 
               class="
                  form-control 
                  @error('imgUrl')
                     is-invalid
                  @enderror
               "
               id="imgUrl" 
               placeholder="Inserisci URL immagine"
               value="{{old('imgUrl')}}"
            >
            @error('imgUrl')
               <p class="invalid-feedback">{{$message}}</p>
            @enderror
         </div>
         <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input 
               type="text" 
               name="type" 
               class="
                  form-control 
                  @error('type')
                     is-invalid
                  @enderror
               "
               id="imgUrl" 
               placeholder="Inserisci tipo"
               value="{{old('type')}}"
            >
            @error('type')
               <p class="invalid-feedback">{{$message}}</p>
            @enderror
         </div>
         <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <div class="form-floating">
               <textarea class="form-control" placeholder="Inserisci la descrizione" id="floatingTextarea2" name="description" style="height: 100px">{{old('description')}}</textarea>
            </div>
            @error('description')
               <p class="invalid-feedback">{{$message}}</p>
            @enderror
         </div>

         <button type="submit" class="btn btn-success">Invia</button>
         <button type="reset" class="btn btn-secondary">Reset</button>
      </form>
   </main>
   
@endsection