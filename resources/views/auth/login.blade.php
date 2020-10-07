<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="{{ asset('backend/css/admin-style.css') }}">
</head>
<body>
<form method="POST" action="{{ url('login') }}">
    @csrf
    <div class="login-box">
        <h1>Admin</h1>
        <div class="textbox">
            <i class="fas fa-user"></i>
            <input id="email" type="email" placeholder="Email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
            @enderror
        </div>

        <div class="textbox">
            <i class="fas fa-lock"></i>
            <input id="password" type="password" placeholder="Password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
            @enderror
        </div>

        <input type="submit" class="btn" value="Sign in">
    </div>
</form>
</body>
</html>
