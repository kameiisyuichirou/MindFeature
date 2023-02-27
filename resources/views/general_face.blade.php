<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/reset.css">
  <link rel="stylesheet" href="/css/index.css">
  <link rel="stylesheet" href="/css/header.css">
  <link rel="stylesheet" href="/css/footer.css">
  <link rel="stylesheet" href="/css/general.css">
  <link rel="stylesheet" href="/css/general_course.css">
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <title>faceコース画面</title>
</head>
<body>
  
  @include('header')

  @include('general_header')

  <div class="course_name">
    <p>faceコース</p>
  </div>

  <main>
    <section id="guidance_1">
      <div class="section1">
        <div class="guidance_img1">
          <img src="/img/10997_color.png" alt="色んな表情の女性">
        </div>
        <div class="guidance1">
        @foreach($knowledge as $knowledge)
        <p>{{ $knowledge->content }}</p>
        @endforeach
        </div>
      </div>
    </section>  
    <section>
      <div class="course_top">
        <input type="submit" class="course_select" value="コース選択へ" onclick="location.href='{{ route('general') }}'">
      </div>
    </section>
  </main>
  
  @include('footer')

  <div class="jump">
    <p>トップへ</p>
  </div>

  <script src="/js/main.js"></script>
</body>
</html>