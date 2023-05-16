@extends('layouts/main')

@section('content')
<main>
    <a href="{{ route('homepage')}}">Homepage</a>
   <div id="container">
   @foreach($comics as $singleComics)
     <a href="{{route('comics.show', $singleComics->id)}}">
        <div id="card">
          <div id="title">{{ $singleComics->title }}</div>
          <div id="container-img"><img src="{{ $singleComics->thumb }}" alt="img comics"></div>  
        </div>
     </a>
   @endforeach
   </div>
</main>

<section>
    <a href="{{route('comics.create')}}">Aggiungi un fumetto</a>
</section>

@endsection