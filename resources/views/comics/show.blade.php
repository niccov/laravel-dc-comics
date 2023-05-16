@extends('layouts/main')

@section('content')
<main>
    <div class="text-center">
       <img src="{{ $comic->thumb }}" style="height:300px" alt="img fumetto">

       <hr>

       <h1>{{ $comic->title }}</h1>

       <ul>
        <li>{{ $comic->price }}</li>
        <li>{{ $comic->series }}</li>
        <li>{{ $comic->sale_date }}</li>
        <li>{{ $comic->type }}</li>
       </ul>
       <p>{{ $comic->description }}</p>
    </div>
</main>
@endsection