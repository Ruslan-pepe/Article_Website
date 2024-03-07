@extends('main')
@section('title', 'Статьи')

<style>
  @section('style')
    .cont{
    font-weight: bolder;
    color: rgb(0, 0, 0);
    padding: 0 25px;
    font-size: 36px;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
    margin: 100px 50px 50px 50px;
    text-align: center;
  }
  @endsection
</style>


@section('content')
  <!--content-->
{{--  <div class="container-fluid" style="padding: 30px">--}}
{{--    <a href="/article/{!! $id !!}" class="article" style="color: #000000">--}}
{{--      <h4>--}}
{{--        {!! $articles[$id]->heading !!}--}}
{{--      </h4>--}}
{{--      <span id="text" class="text" >--}}
{{--            {!! $articles[$id]->articles !!}--}}
{{--      </span>--}}
{{--    </a>--}}
{{--  </div>--}}



  <div class="container-fluid" style="padding: 30px">
      <h1 class="text-center" style="margin-top: 70px;margin-bottom: 30px">
        {!! $articles->heading !!}
      </h1>
      <span id="text" class="text" >
            {!! $articles->articles !!}
      </span>
  </div>
  <!--content-end-->
  <link href="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/css/suneditor.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/suneditor.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/suneditor@latest/src/lang/ru.js"></script>
  <script>
  </script>

@endsection


