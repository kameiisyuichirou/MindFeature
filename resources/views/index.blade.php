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
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <title>トップ画面</title>
</head>
<body>
  
  @include('header')

  <main>
    <section class="background_image">
      <div>
        <h1>特徴（Feature）から<br>心理（Mind）が分かる人を育てる</h1>
      </div>
    </section>
    <section id="guidance_1">
      <div class="section1">
        <div class="guidance_img1">
          <img src="/img/13217_color.png" alt="悩む男性">
        </div>
        <div class="guidance1">
        <h2>MindFeatureとは？</h2>
        <p>MindFeatureは全ての人間関係を良好にしたい人のために</p><p>日常のあらゆる場面で使える心理知識を提供するサービスです。</p>
        </div>
      </div>
    </section>
    <section class="back_gray" id="guidance_2">
      <div class="section2">
        <div class="guidance_img2">
          <img src="/img/13536_color.png" alt="お辞儀するスタッフ">
        </div>
        <div class="guidance2">
        <h2>使い方について</h2>
        <p>コース選択から様々なカテゴリー毎に知識を学習できます。</p>
        <p>状況や人によって悩むポイントは異なると思いますので、
        </p>
        <p>学びたいコースから学習を行い、日常生活にお役立て下さい。</p>
        </div>
      </div>
    </section>
    <section>
      <div class="section3">
        <div class="guidance_img3">
          <img src="/img/13485_color.png" alt="パソコンを持つ男性">
        </div>
        <div class="guidance3">
        <h2>お問い合わせについて</h2>
        <p>人間関係で悩むポイントは人によって異なりますので、学習コースなどのご要望は、</p>
        <p>いつでもお問い合わせフォームからご連絡下さい。</p>
        </div>
      </div>
    </section>
    <section>
      <h1 class="service_start">早速始めてみましょう！</h1>
      <div class="service">
        <div class="login">
        <input type="submit" class="login_btn" value="ログインの方はこちら" onclick="location.href='{{ route('login') }}'">
        </div>
        <div class="register">
        <input type="submit" class="register_btn" value="新規登録の方はこちら" onclick="location.href='{{ route('register') }}'">
        </div>
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