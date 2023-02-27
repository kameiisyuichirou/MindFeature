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
  <link rel="stylesheet" href="/css/register.css">
  <link rel="stylesheet" href="/css/login.css">
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <title>ログイン画面</title>
</head>
<body>

  @include('header')

  <div class="contact_guide">
    <div class="contact_border">
      <div class="contact_header">
      <h1>パスワードリセット</h1>
      </div>
      <div class="notes">
      <p class="note">パスワードリセットのためにメールアドレスと変更後パスワードを入力して下さい。
      </p>
      @if(session('reset'))
      <div class="reset_message">
        {{ session('reset') }}
      </div>
      @endif
      </div>
      <div class="inputs">
        <form action="{{ route('reset_register') }}" method="POST">
        @csrf
        <div class="contact_input">
          <label for="email">メールアドレス<span>*</span></label>
          <div class="error_text">
          {{ $errors->first('email') }}
          </div>
          <input type="email" class="input" id="email" name="email" placeholder="（例）mind@feature.co.jp" value="{{ old('email') }}">
        </div>
        <div class="contact_input">
          <label for="password">変更後パスワード<span>*</span></label>
          <div class="error_text">
          {{ $errors->first('password') }}
          </div>
          <input type="password" class="input" id="password" name="password" value="{{ old('password') }}">
        </div>
        <div class="register_send_btn">
        <input type="submit" name="register_complete" value="変更" class="register_complete">
        </div>
        </form>
      </div>
    </div>
    <div class="reset">
      <a href="{{ route('login') }}">ログインの方はこちら</a>
    </div>
  </div>

  @include('footer')
  
<script src="/js/main.js"></script>
</body>
</html>