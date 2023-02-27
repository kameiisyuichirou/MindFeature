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
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <title>お問い合わせ確認画面</title>
</head>
<body>

  @include('header')

  <div class="contact_guide">
    <div class="contact_border">
      <div class="contact_header">
        <h1>お問い合わせ入力内容</h1>
      </div>
      <div class="notes">
        <p class="note">下記の内容をご確認の上、送信ボタンを押して下さい。</p>
        <p class="note">内容を訂正する場合は戻るボタンを押して下さい。</p>
      </div>
      <div class="inputs">
        <form action="{{ route('send') }}" method="POST">
        @csrf
          <p class="confirm_title">氏名</p>
          <p class="confirm_input">{{ $inputs['name'] }}</p>
          <input type="hidden" class="input" name="name" value="{{ $inputs['name'] }}">
        
          <p class="confirm_title">フリガナ</p>
          <p class="confirm_input">{{ $inputs['kana'] }}</p>
          <input type="hidden" class="input" name="kana" value="{{ $inputs['kana'] }}">

          <p class="confirm_title">電話番号</p>
          <p class="confirm_input">{{ $inputs['tel'] }}</p>
          <input type="hidden" class="input" name="tel" value="{{ $inputs['tel'] }}">

          <p class="confirm_title">メールアドレス</p>
          <p class="confirm_input">{{ $inputs['email'] }}</p>
          <input type="hidden" class="input" name="email" value="{{ $inputs['email'] }}">

          <p class="confirm_title">お問い合わせ</p>
          <p class="confirm_input">{{ $inputs['contact'] }}</p>
          <input type="hidden" class="input" name="contact" value="{{ $inputs['contact'] }}">

        <div class="submit_btn">
          <button type="submit" class="confirm_send" name="action" value="send">送信</button>
          <button type="submit" class="back" name="action" value="back">戻る</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  @include('footer')
  
<script src="/js/main.js"></script>
</body>
</html>