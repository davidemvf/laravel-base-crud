@extends('layout.default-layout')

@section('section')
  <div class="add">
    <a href="{{ route('book.create') }}">Add New Book</a>
  </div>
  <div class="content">
    @foreach ($books as $book)
      <div class="book">
        <h3>{{ $book -> title }}</h3>
        <p>{{ $book -> description }}</p>
        <h3>{{ $book -> author}}</h3>
      </div>
    @endforeach
  </div>
@endsection
