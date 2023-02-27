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
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <title>お問い合わせフォーム</title>
</head>
<body>

  @include('header')

  <div class="contact_guide">
    <div class="contact_border">
      <div class="contact_header">
      <h1>お問い合わせ</h1>
      </div>
      <div class="notes">
      <p class="note">サービスに関してのご質問、各種問い合わせにつきましては、お問い合わせフォームにご記入下さい。
      </p>
      <p class="note">後日、担当者よりご連絡させて頂きます。</p>
      <p class="note">また、回答までに数日頂くこともございますので、予めご了承下さい。</p>
      </div>
      <div class="inputs">
        <form action="{{ route('confirm') }}" method="POST">
        @csrf
        <div class="contact_input">
          <label for="name">氏名<span>*</span></label>
          <div class="error_text">
          {{ $errors->first('name') }}
          </div>
          <input type="text" class="input" id="name" name="name" placeholder="（例）山田太郎" value="{{ old('name') }}">
        </div>
        <div class="contact_input">
          <label for="kana">フリガナ<span>*</span></label>
          <div class="error_text">
          {{ $errors->first('kana') }}
          </div>
          <input type="text" class="input" id="kana" name="kana" placeholder="（例）ヤマダタロウ" value="{{ old('kana') }}">
        </div>
        <div class="contact_input">
          <label for="tel">電話番号</label>
          <div class="error_text">
          {{ $errors->first('tel') }}
          </div>
          <input type="text" class="input" id="tel" name="tel" placeholder="（例）09012345678" value="{{ old('tel') }}">
        </div>
        <div class="contact_input">
          <label for="email">メールアドレス<span>*</span></label>
          <div class="error_text">
          {{ $errors->first('email') }}
          </div>
          <input type="email" class="input" id="email" name="email" placeholder="（例）mind@feature.co.jp" value="{{ old('email') }}">
        </div>
        <div class="contact_input">
          <p>お問い合わせ内容<span>*</span></p>
          <div class="error_text">
          {{ $errors->first('contact') }}
          </div>
          <textarea name="contact" id="contact" cols="30" rows="15" placeholder="お問合せ内容について記載して下さい">{{ old('contact') }}</textarea>
        </div>
        <div class="send_btn">
        <input type="submit" name="send" value="確認" class="send">
        </div>
        </form>
      </div>
    </div>
  </div>

  @include('footer')
  
<script src="/js/main.js"></script>
</body>
</html>