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
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <title>新規登録画面</title>
</head>
<body>

  @include('header')

  <div class="contact_guide">
    <div class="contact_border">
      <div class="contact_header">
      <h1>新規登録</h1>
      </div>
      <div class="notes">
      <p class="note">サービスを利用するためにユーザー情報登録を行って下さい。
      </p>
      </div>
      <div class="inputs">
        <form action="{{ route('register_complete') }}" method="POST">
        @csrf
        <div class="contact_input">
          <label for="name">ユーザー名<span>*</span></label>
          <div class="error_text">
          {{ $errors->first('name') }}
          </div>
          <input type="text" class="input" id="name" name="name" placeholder="（例）山田太郎" value="{{ old('name') }}">
        </div>
        <div class="contact_input">
          <label for="email">メールアドレス<span>*</span></label>
          <div class="error_text">
          {{ $errors->first('email') }}
          </div>
          <input type="email" class="input" id="email" name="email" placeholder="（例）mind@feature.co.jp" value="{{ old('email') }}">
        </div>
        <div class="contact_input">
          <label for="password">パスワード<span>*</span></label>
          <div class="error_text">
          {{ $errors->first('password') }}
          </div>
          <input type="password" class="input" id="password" name="password" value="{{ old('password') }}">
        </div>
        <div class="contact_input">
          <p>ユーザー選択<span>*</span></p>
          <div class="error_text">
          {{ $errors->first('role') }}
          </div>
          <select name="role" id="role" value="{{ old('role') }}">
            <option value="">ユーザー選択</option>
            <option value="0" @if(old('role') == '0') selected @endif>管理者</option>
            <option value="1" @if(old('role') == '1') selected @endif>一般</option>
          </select>
        </div>
        <div class="register_send_btn">
        <input type="submit" name="register_complete" value="登録する" class="register_complete">
        </div>
        </form>
      </div>
    </div>
  </div>

  @include('footer')
  
<script src="/js/main.js"></script>
</body>
</html>