@extends('layout.default-layout')

@section('section')
  <div class="form">

    <form action="{{ route('book.update', $book -> id) }}" method="post">
      @csrf
      @method('POST')

      <label for="title">Title</label>
      <input type="text" name="title" value="{{ $book -> title}}">

      <label for="description">Description</label>
      <input type="text" name="description" value="{{ $book -> description}}">

      <label for="author">Author</label>
      <input type="text" name="author" value="{{ $book -> author}}">

      <button type="submit" name="button">Update</button>
    </form>
  </div>
  <div class="add">
    <a href="{{ route('book.index') }}">Back</a>
  </div>
@endsection
