@extends('layouts/main')

@section('content')
<main>
    <div>
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title">titolo</label>
                <input type="text" id="title" name="title">
            </div>

            <div class="mb-3">
                <label for="description">descrizione</label>
                <input type="text" id="description" name="description">
            </div>

            <div class="mb-3">
                <label for="type">tipologia</label>
                <input type="text" id="type" name="type">
            </div>

            <button type="submit">Aggiungi</button>
        </form>
    </div>
</main>
@endsection