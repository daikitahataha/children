<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <form action="{{ route('user_send_mail') }}" method="POST">
        {{ csrf_field() }}
        <input type="text" name='email' placeholder='メールアドレスを入力してください' value="{{ old('email', session('post')['email']) }}"><br>
        @if( $errors->has('email') )
            <div class="error">
                <p>{{ $errors->first('email') }}</p>
            </div>
        @endif
        <button type="submit">メール送信</button>
    </form>
</body>
</html>