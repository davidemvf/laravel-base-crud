<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      @include('elem.head')
    </head>
    <body>
      <div class="container">
        <header>
          <h1>{{$type}}</h1>
        </header>
        @yield('section')
        <footer></footer>
      </div>
    </body>
</html>
