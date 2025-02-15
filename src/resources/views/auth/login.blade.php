<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite(['resources/css/app.css'])
        <title>ログイン画面</title>
    </head>
    <body>
    <div class="wrapper">
        <div class="container">
            <h1>PiGLy</h1>
             <p>ログイン</p>
            <form class="form" action="{{ route('login') }}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="username">
                <input type="password" name="password" placeholder="password"><button type="'submit" id="login-button">”ログイン"</button>

                <button type="'submit" id="login-button">Login</button>
            </form>
        </div>

        <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
</body>
</html>
