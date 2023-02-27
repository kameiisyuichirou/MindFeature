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
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <title>お問い合わせ送信完了画面</title>
</head>
<body>

  @include('header')

  <div class="contact_guide">
    <div class="contact_border">
      <div class="contact_header">
        <h1>送信完了</h1>
      </div>
      <div class="complete_notes">
        <p class="complete_note">お問い合わせ内容を送信致しました。</p>
        <p class="complete_note">回答までお時間を頂くことがございますので、予めご了承下さい。</p>
        <p class="complete_note">トップへ戻る方は下記よりお願い致します。</p>
      </div>
      <div class="return_top">
      <input type="submit" onclick="location.href='{{ route('index') }}'" class="complete_top" value="トップへ戻る">
      </div>
    </div>
  </div>

  @include('footer')
  
<script src="/js/main.js"></script>
</body>
</html>