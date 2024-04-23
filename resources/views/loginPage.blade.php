<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" >
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <div class="login_box">
            <form action="{{route('login')}}">
                @csrf
                <div class="login-header">
                    <span>Login</span>
                </div>

                <div class="input_box">
                    <input type="text" id="user" class="input-field" required>
                    <label for="user" class="label">Username</label>
                    <i class="bx bx-user-alt icon"></i>
                </div>

                <div class="input_box">
                    <input type="text" id="pass" class="input-field" required>
                    <label for="pass" class="label">Password</label>
                    <i class="bx bx-user-alt icon"></i>
                </div>

                <div class="remember-forgot">
                    <div class="remember-me">
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember me</label>
                    </div>

                    <div class="forgot">
                        <a href="#">Forgot password?</a>
                    </div>
                </div>

                <div class="input-box">
                    <input type="submit" class="input-submit" value="Login">
                </div>

                <div class="register">
                    <span>Don't have an account? <a href="#">Register</a></span>
                </div>
            </form>
        </div>
    </div>
</body>
</html>