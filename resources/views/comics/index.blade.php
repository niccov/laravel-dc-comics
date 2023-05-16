@extends('layouts/main')

@section('content')
<main>
   <div id="container">
   @foreach($comics as $singleComics)
     <div id="card">
       <div id="title">{{ $singleComics->title }}</div>
       <div id="container-img"><img src="{{ $singleComics->thumb }}" alt="img comics"></div>  
     </div>
   @endforeach
   </div>
</main>

@endsection