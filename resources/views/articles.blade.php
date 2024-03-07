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
  .sed{
    margin-right: 10%;
    width: 80%;
    height: 700px;
  }
  textarea{
    resize: none;
    width: 100%;
    height: 290px;
  }
  .set{
    /*text-overflow: ellipsis; !* will make [...] at the end *!*/
    /*width: 370px; !* change to your preferences *!*/
    /*white-space: nowrap; !* paragraph to one line *!*/
    /*overflow:hidden; !* older browsers *!*/
    text-decoration: none;
    color: #666;
  }
  .article {
    /*background-color: #f2f2f2;*/
    padding: 35px;
    /*border: 1px solid #ccc;*/
    border-radius: 5px;
    margin: 20px;
    text-decoration: none;
    /*color: #666;*/
  }
  .article h4 {
    font-size: 24px;
    color: #333;
  }
  .article p {
    font-size: 16px;
    color: #666;
  }
  .text{
    display: -webkit-box;
    -webkit-line-clamp: 5;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }
  @endsection
</style>
@section('content')
  <!--content-->
{{--    <div class="container-fluid" style="padding: 30px">--}}
{{--        <h4 class="cont" style="margin-bottom: 12px ">--}}
{{--          {!! var_dump($articles[0]) !!}--}}
{{--          {!! $articles->heading !!}--}}
{{--        </h4>--}}
{{--        <span id="text" class="text">--}}
{{--            {!! $articles->articles !!}--}}
{{--        </span>--}}
{{--    </div>--}}
{{--  @php $arts_head = strip_tags($articles[0]->articles, '<span> </span>') @endphp--}}
    <!--heading-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <h1 class="cont">Статьи</h1>
      </div>
    </div>
  </div>
  <!--heading-end-->
  <!--content-->
  {{--  {{$articles}}--}}

  @php $id=0@endphp
  @for($i=0;$i<count($articles);$i++)
    {{--    @php $content = preg_replace("/<img[^>]+\>/i", "(image) ", $articles[$i]->articles) @endphp--}}
    <div class="container-fluid" style="padding: 30px">
      <a href="/article/{!! $id !!}" class="article" style="color: #000000">
        <h1 >
          {!! $articles[$i]->heading !!}
        </h1>
        <span id="text" class="text" >
          {!! $articles[$i]->articles !!}
        </span>
      </a>
    </div>
    <hr>
    @php $id++ @endphp
  @endfor
  <!--content-end-->
  <link href="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/css/suneditor.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/suneditor.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/suneditor@latest/src/lang/ru.js"></script>
  <script>
  </script>

@endsection



