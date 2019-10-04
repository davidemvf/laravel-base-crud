@extends('layout.default-layout')

@section('section')
  <div class="content">
    @foreach ($books as $book)
      <div class="book">
        <h3>Title: {{ $book -> title }}</h3>
        <p>Description: {{ $book -> description }}</p>
        <h3>Author: {{ $book -> author}}</h3>
      </div>
    @endforeach
  </div>
@endsection
