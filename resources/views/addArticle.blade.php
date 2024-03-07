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
    height: 300px;
  }
  .butn{
    margin-left: 80%;
    margin-top: 1%;
  }
  .links_1{
    font-weight: bolder;
    color: rgb(0, 0, 0);
    padding: 0 25px;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
    text-align: center;
  }
  .buts{
    margin-left: 12px;
    width: 98%;
  }
  @endsection
</style>


@section('content')
  <!--heading-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <h1 class="cont">Добавьте статью</h1>
      </div>
    </div>
  </div>
  <!--heading-end-->
    <!--content-->
    <div class="container-fluid" >
      <form action="/HandlerArticle" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="links_1 fw-bold form-label">Автор</label>
          <input class="form-control buts" name="author" id="author" placeholder="Введите автора">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="links_1 fw-bold form-label">Заголовок</label>
          <input class="form-control buts" name="heading" id="heading" placeholder="Введите заголовок">
        </div>
        <label class="container-fluid" for="sunEditor" style="height: 550px">
          <textarea class="sun-eidtor" id="editor" name="article" style="width: 100%; height: 310px;"></textarea>
        </label>
          <button id="buttonByForm" type="submit" onclick="fun()" class="btn btn-dark" style="margin-top: 17px;margin-left: 12px">Отправить</button>
      </form>
    </div>
  <!--content-end-->
  <link href="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/css/suneditor.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/suneditor.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/suneditor@latest/src/lang/ru.js"></script>
  <script>
  </script>
  <script>
    const editor = SUNEDITOR.create((document.getElementById('editor')), {
      height: '495px',
      buttonList: [
        ['undo', 'redo'],
        ['formatBlock'],
        ['bold', 'underline', 'italic', 'strike'],
        ['removeFormat'],
        ['outdent', 'indent'],
        [ 'showBlocks', 'codeView'],
        ['preview', 'print', 'align'],
        ['link', 'image', 'video','save'],
        ['fontColor', 'hiliteColor'],
      ],
    });

    // document.querySelector("#suneditor_editor > div > div:nth-child(1) > div.se-btn-tray > div:nth-child(15) > ul > li:nth-child(4) > button")

    function fun(){
      document.querySelector("#suneditor_editor > div > div:nth-child(1) > div.se-btn-tray > div:nth-child(15) > ul > li:nth-child(4) > button").click()
      console.log('x')
    }


    // var sunEditor = SUNEDITOR.create('sunEditor',{
    //   "mode": "classic",
    //     "rtl": false,
    //     "katex": "window.katex",
    //     "height": "280",
    //     "minHeight": "280",
    //     "maxHeight": "280",
    //     "imageGalleryUrl": "https://etyswjpn79.execute-api.ap-northeast-1.amazonaws.com/suneditor-demo",
    //     "videoFileInput": false,
    //     "tabDisable": false,
    //     "buttonList": [
    //     [
    //       "undo",
    //       "redo",
    //       "font",
    //       "fontSize",
    //       "formatBlock",
    //       "paragraphStyle",
    //       "blockquote",
    //       "bold",
    //       "underline",
    //       "italic",
    //       "strike",
    //       "fontColor",
    //       "hiliteColor",
    //       "horizontalRule",
    //       "list",
    //       "lineHeight",
    //       "table",
    //       "link",
    //       "image",
    //       "video",
    //       "audio",
    //       "save",
    //       "template"
    //     ]
    //   ],
    //     "lang": SUNEDITOR_LANG.ru,
    //     "lang(In nodejs)": "ru"
    // });
  </script>
{{--  <script>--}}

{{--    // let author = document.getElementById("author")--}}
{{--    // let headering = document.getElementById("heading")--}}
{{--    // let content = document.getElementById("sunEditor")--}}

{{--    // fetch("handler.php", {--}}
{{--    //   method: "GET",--}}
{{--    //   body: data--}}
{{--    // }).then(function (author,heading,sunEditor) {--}}
{{--    // return author,heading,sunEditor});--}}
{{--  </script>--}}

@endsection


