<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>新規会員登録画面</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        PiGLy
      </a>
    </div>
  </header>
<h1>PiGLy</h1>
 <p>新規会員登録</p>
 <h3>STEP1 アカウント情報の登録</h3>

<form action="{{ route('register') }}" method="post">
  @csrf
  <label>お名前</label>
  <input type="text" name="name" placeholder="名前をを入力してください">
  <label>メールアドレス</label>
  <input type="email" name="email" placeholder="emailを入力してください">
  <label>パスワード</label>
  <input type="password" name="password" placeholder="パスワードを入力してください">
  <label>confirm_password</label>
  <input type="password" name="password_confirmation" placeholder="パスワードを入力してください">
  <input type="submit" value="次に進む">
 <a class="back__logo" href="/">
                ログインはこちら
             </a>

</form>
