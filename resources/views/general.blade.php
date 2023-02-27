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
  <link rel="stylesheet" href="/css/contact.css">
  <link rel="stylesheet" href="/css/general.css">
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <title>一般ユーザーメイン画面</title>
</head>
<body>

  @include('header')

  <main>
    @include('general_header')

    <section id="guidance_1">
      <div class="section1">
        <div class="guidance_img1">
          <img src="/img/9553_color.png" alt="教える女性">
        </div>
        <div class="guidance1">
        <h2>サービスについての説明</h2>
        <p>MindFeatureはユーザー様が日常生活での対人関係を</p><p>良好にする知識をコース毎にご用意しております。</p>
        </div>
      </div>
    </section>
    <section class="back_gray" id="guidance_2">
      <div class="section2">
        <div class="guidance_img2">
          <img src="/img/13427_color.png" alt="ステップアップする男性">
        </div>
        <div class="guidance2">
        <h2>使用方法の具体例</h2>
        <p>コース毎に知識をご用意しております。</p>
        <p>新たに学習した知識を実際にご利用頂くことが大切です。
        </p>
        <p>インプットとアウトプットを意識した学習にお役立て下さい。</p>
        </div>
      </div>
    </section>
    <section>
      <div class="study">
        <div class="study_guidance">
        <h1>学習を始めましょう！</h1>
        </div>
        <form action="{{ route('general_course') }}" method="POST">
        @csrf
        <select name="study_course" id="study_course">
          <option value="">コース選択</option>
          @foreach($courses as $course)
          <option value="{{ $course->id }}">{{ $course->course_name }}</option>
          @endforeach
        </select>
        <div class="study_btn">
          <input type="submit" class="study_start" name="study_start" value="学習を始める">
        </div>
        </form>
      </div>
    </section>
    <section>
      <form action="{{ route('admin') }}" method="get">
      @csrf
      <div class="create_btn">
        <input type="submit" value="管理者画面へ" name="admin_create" class="admin_create">
      </div>
      </form>
    </section>
  </main>

  @include('footer')
  
<script src="/js/main.js"></script>
</body>
</html>