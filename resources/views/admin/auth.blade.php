<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Login - Creatify</title>
</head>
<body class="auth">

    <div class="card auth-card">
        
        <div class="card-body row">

            <div class="col auth-card__img">
                <img src="{{ asset('img/login.png') }}">
            </div>

            <div class="col auth-card__login-form">
                <h2>Sign In</h2>
                <form action="{{ url('auth/login') }}" method="post">
                    @csrf
                    
                    <div class="form-group auth-card__login-form__group">
                        <label for="email">
                            <i class="fas fa-envelope"></i>
                        </label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="EMAIL">
                    </div>

                    <div class="form-group auth-card__login-form__group">
                        <label for="password">
                            <i class="fas fa-lock"></i>
                        </label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="PASSWORD">
                    </div>

                    <div class="form-group auth-card__login-form__btn">
                        <button type="submit" class="btn auth-card__login-form__btn--submit">Login</button>
                    </div>

                </form>
            </div>

        </div>

    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>