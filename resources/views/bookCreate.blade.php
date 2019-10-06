@extends('layout.default-layout')

@section('section')
  <div class="form">

    <form action="{{ route('book.store') }}" method="post">
      @csrf
      @method('POST')

      <label for="title">Title</label>
      <input type="text" name="title" value="">

      <label for="description">Description</label>
      <input type="text" name="description" value="">

      <label for="author">Author</label>
      <input type="text" name="author" value="">

      <button type="submit" name="button">Add</button>
    </form>
  </div>
  <div class="add">
    <a href="{{ route('book.index') }}">Back</a>
  </div>
@endsection
