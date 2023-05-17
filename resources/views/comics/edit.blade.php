@extends('layouts/main')

@section('content')
<main>
    <div>
        <form action="{{route('comics.update', $comic->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title">titolo</label>
                <input type="text" id="title" name="title" value="{{ $comic->title }}">
            </div>

            <div class="mb-3">
                <label for="description">descrizione</label>
                <input type="text" id="description" name="description" value="{{ $comic->description }}">
            </div>

            <div class="mb-3">
                <label for="thumb">link copertina</label>
                <input type="text" id="thumb" name="thumb" value="{{ $comic->thumb }}">
            </div>

            <div class="mb-3">
                <label for="price">prezzo</label>
                <input type="text" id="price" name="price" value="{{ $comic->price }}">
            </div>

            <div class="mb-3">
                <label for="series">serie</label>
                <input type="text" id="series" name="series" value="{{ $comic->series }}">
            </div>

            <div class="mb-3">
                <label for="sale_date">data di vendita</label>
                <input type="text" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
            </div>


            <div class="mb-3">
                <label for="type">tipologia</label>
                <input type="text" id="type" name="type" value="{{ $comic->type }}">
            </div>

            <button type="submit">Salva</button>
        </form>
    </div>
    
</main>
@endsection