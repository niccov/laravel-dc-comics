@extends('layouts/main')

@section('content')
<main>
    <div>
        @if($errors->any())
          <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach  
            </ul>
          </div>
        @endif
        
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title">titolo</label>
                <input class="@error('title') is-invalid @enderror" type="text" id="title" name="title" value="{{ old('title') }}">
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description">descrizione</label>
                <input class="@error('description') is-invalid @enderror" type="text" id="description" name="description" value="{{ old('description') }}">
                @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="thumb">link copertina</label>
                <input class="@error('thumb') is-invalid @enderror" type="text" id="thumb" name="thumb" value="{{ old('thumb') }}">
                @error('thumb')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price">prezzo</label>
                <input class="@error('price') is-invalid @enderror" type="text" id="price" name="price" value="{{ old('price') }}">
                @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series">serie</label>
                <input class="@error('series') is-invalid @enderror" type="text" id="series" name="series" value="{{ old('series') }}">
                @error('series')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale_date">data di vendita</label>
                <input class="@error('sale_date') is-invalid @enderror" type="text" id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
                @error('sale_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="type">tipologia</label>
                <input class="@error('type') is-invalid @enderror" type="text" id="type" name="type" value="{{ old('type') }}">
                @error('type')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button type="submit">Aggiungi</button>
        </form>
    </div>
    
</main>
@endsection