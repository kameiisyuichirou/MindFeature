<div class="general_header">
    <div class="user_name">
      <p>ようこそ{{ Auth::user()->name }}さん！</p>
    </div>
    <form action="{{ route('logout') }}" method="POST">
    @csrf
    <div class="logout">
      <input type="submit" class="logout_btn" id="logout" value="ログアウト">
    </div>
    </form>
</div>