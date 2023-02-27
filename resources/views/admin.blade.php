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
  <link rel="stylesheet" href="/css/admin.css">
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <title>管理者編集画面</title>
</head>
<body>
  
  @include('header')

  @include('general_header')

  <div class="course_name">
    <p>管理者画面</p>
  </div>

  <main>
    <section id="guidance_1">
      @if(session('created'))
        <div class="created_message">
          {{ session('created') }}
        </div>
      @endif
      <div class="section1">
        <div class="guidance_img1">
          <img src="/img/13797_color.png" alt="考える男性">
        </div>
        <div class="create_screen">
        <p>追加コースを選択して下さい。</p>
        <form action="{{ route('admin_create') }}" method="POST">
        @csrf
        <select name="create_course" id="create_course">
          @foreach($courses as $course)
          <option value="{{ $course->id }}">{{ $course->course_name }}</option>
          @endforeach
        </select>
        <textarea name="create_add" id="create_add" cols="40" rows="15" placeholder="追加する知識を記入して下さい。"></textarea>
        <input type="submit" name="create_btn" value="追加" class="create_btn">
        </form>
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