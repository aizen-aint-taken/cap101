<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Log In</title>
    <style>
        body {
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .login-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 350px;
        }
        .login-container h1 {
            color: #1877f2;
            font-size: 32px;
            font-weight: 600;
            margin-bottom: 20px;
            text-align: center;
        }
        .form-label {
            font-weight: 600;
            color: #606770;
        }
        .form-control {
            height: 48px;
            font-size: 16px;
            border-radius: 6px;
            border: 1px solid #dddfe2;
            margin-bottom: 10px;
        }
        .btn-primary {
            background-color: #1877f2;
            border-color: #1877f2;
            font-size: 18px;
            width: 100%;
            height: 48px;
            border-radius: 6px;
        }
        .btn-primary:hover {
            background-color: #165ecb;
            border-color: #165ecb;
        }
        .form-check-label {
            color: #606770;
            font-size: 14px;
        }
        .form-text {
            color: #606770;
            font-size: 12px;
        }
        .forgot-password {
            text-align: center;
            margin-top: 10px;
            font-size: 14px;
            color: #1877f2;
        }
        .forgot-password:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Log In</h1>
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Keep me logged in</label>
            </div>
            <button type="submit" class="btn btn-primary">Log In</button>
            <a href="#" class="forgot-password">Forgotten password?</a>
        </form>
    </div>
</body>
</html>
