<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

  <!-- Styles -->
  <style>
    body{
      background: #f5f5f5;
    }
    .image{
      width: 512px;
      height: 512px;
    }
  </style>
</head>
  <body>
{{--  @php--}}
{{--  $dir = 'images';--}}
{{--  $path = scandir($dir);--}}
{{--   for ($i = 0; $i <count($path); $i++) {--}}
{{--     $paths[] = explode('.', $path[$i]);--}}
{{--   }--}}
{{--   for ($j = 0; $j < count($paths); $j++) {--}}
{{--     if ($paths[$j][1] == 'jpg'|| $paths[$j][1] == 'png' || $paths[$j][1] == 'webp'){--}}
{{--       $result[] = $paths[$j];--}}
{{--     }--}}
{{--   }--}}
{{--  @endphp--}}
{{--  @for($r=0;$r<count($result);$r++)--}}
{{--    <img class="image" src="{{'/images/'.$result[$r][0].'.'.$result[$r][1]}}" alt="Упс...">--}}
{{--  @endfor--}}
{{--    <img src="@for($i=0;$i<count($result);$i++) {{asset('/images/'.$result[$i][0].'.'.$result[$i][1])}} @php echo '.'."<br>"@endphp @endfor">--}}
  </body>
</html>
