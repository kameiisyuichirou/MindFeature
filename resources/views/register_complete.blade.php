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
  <link rel="stylesheet" href="/css/confirm.css">
  <link rel="stylesheet" href="/css/complete.css">
  <link rel="stylesheet" href="/css/register_complete.css">
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <title>登録完了画面</title>
</head>
<body>

  @include('header')

  <div class="contact_guide">
    <div class="contact_border">
      <div class="contact_header">
        <h1>登録完了</h1>
      </div>
      <div class="complete_notes">
        <p class="complete_note">ご登録頂きありがとうございました。</p>
        <p class="complete_note">ユーザー情報が登録完了致しました。</p>
        <p class="complete_note">サービスをご利用の場合は下記からログイン下さい。</p>
      </div>
      <div class="login_top">
      <input type="submit" onclick="location.href='{{ route('login') }}'" class="complete_top" value="ログインの方はこちら">
      </div>
    </div>
  </div>

  @include('footer')
  
<script src="/js/main.js"></script>
</body>
</html>