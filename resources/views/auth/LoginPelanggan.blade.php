<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Shopee</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #FF5722; /* Latar belakang oranye */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: white;
            width: 350px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        .login-container input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            outline: none;
        }
        .login-container input:focus {
            border-color: #FF5722;
        }
        .login-container button {
            width: 100%;
            padding: 12px;
            background-color: #FF5722;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        .login-container button:hover {
            background-color: #e64a19;
        }
        .login-container .qr-login {
            text-align: right;
            font-size: 14px;
            color: #FF5722;
        }
        .login-container .forgot-password {
            display: block;
            text-align: left;
            color: #1e88e5;
            font-size: 14px;
            margin-top: 10px;
        }
        .login-container .social-login {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .login-container .social-login a {
            width: 48%;
            padding: 12px;
            font-size: 14px;
            text-align: center;
            border-radius: 4px;
            text-decoration: none;
            display: inline-block;
            cursor: pointer;
        }
        .login-container .facebook {
            background-color: #3b5998;
            color: white;
        }
        .login-container .facebook:hover {
            background-color: #2d4373;
        }
        .login-container .google {
            background-color: #db4437;
            color: white;
        }
        .login-container .google:hover {
            background-color: #c1351d;
        }
        .login-container .signup {
            text-align: center;
            margin-top: 20px;
        }
        .login-container .signup a {
            color: #1e88e5;
            text-decoration: none;
        }
        .login-container .signup a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Log in</h2>

        <input type="email" placeholder="Email">
        <input type="password" placeholder="Password">
        <button type="submit">LOG IN</button>
        <a href="#" class="forgot-password">Lupa Password</a>

        <div class="social-login">
            <a href="#" class="facebook">Facebook</a>
            <a href="#" class="google">Google</a>
        </div>

        <div class="signup">
            <p>Baru di Shopee? <a href="/register">Daftar</a></p>
        </div>
    </div>

</body>
</html>