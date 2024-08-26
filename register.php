
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Registration</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
          
       
        }
        .container {
            margin: auto;
        }
        .card {
            padding: 15px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            background-color: #fff;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
        }
        .card-header, .card-footer {
            padding: 12px;
            background-color: #e9ecef;
            border-radius: 8px;
        }
        .card-header h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #343a40;
            transition: color 0.3s;
        }
        .card-header h2:hover {
            color: #007bff;
        }
        .form-label {
            font-size: 13px;
            color: #495057;
        }
        .form-control {
            padding: 6px;
            font-size: 13px;
            border-radius: 6px;
            transition: border-color 0.3s;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: none;
        }
        .btn {
            padding: 8px;
            font-size: 13px;
            border-radius: 6px;
            transition: background-color 0.3s, transform 0.3s;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }
        .btn-danger {
            background-color: #dc3545;
            border: none;
        }
        .btn-danger:hover {
            background-color: #c82333;
            transform: translateY(-2px);
        }
        .form-check-label {
            font-size: 12px;
            color: #6c757d;
        }
        .card-footer small {
            font-size: 12px;
            color: #6c757d;
        }
        a {
            text-decoration: none;
            color: #007bff;
            transition: color 0.3s;
        }
        a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Register</h2>
                </div>
                <div class="card-body">
                <form action="includes/logIn.php" method="post">
<?php
        if (isset($_POST["submit"])) {
            // var_dump($_POST);
            try {
                 
                $username = trim($_POST["username"]);
                $email = trim($_POST["email"]);
                $password = trim($_POST["password"]);
                $confirmpass = trim($_POST["confirmpass"]);
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                
                
                if ($password !== $confirmpass) {
                    throw new Exception("Passwords do not match.");
                }

                header("Location: includes/logIn.php");
                exit(); 
                
            } catch (Exception $e) {
                echo '<div class="alert alert-danger" role="alert">';
                echo 'Error: ' . $e->getMessage();
                echo '</div>';
                
               
            }
        }
    ?>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" name="confirmpass" class="form-control" id="confirmPassword" placeholder="Confirm Password" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="termsCheck" required>
                        <label class="form-check-label" for="termsCheck">I agree to the <a href="#">terms and conditions</a></label>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" name="submit" id="register" class="btn btn-primary">Register</button>
                        <button type="button" onclick="window.location.href='http://localhost/lyrsystem/index.php'" class="btn btn-danger">Go Back</button>
                    </div>
                </form>

                </div>
                <div class="card-footer text-center">
                    <small>
                        Already have an account? <a href="http://localhost/lyrsystem/includes/logIn.php"><strong>Log In</strong></a>
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+DY+z7m0I5frg5a3fS5qN8R+rcPpL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $('#register').click(async function(e){
            async function FetchData(){
                try{
                    const url = await fetch("http://localhost/lyrsystem/index.php");

                    if(!url.ok){
                        throw new Error("Data fetching failed");
                    }
                    const data = await url.text();
                    console.log(data);
                }catch(error){
                    console.error("Fetching data failed", error);
                }
            }

           await FetchData();
        });
    });
</script>
</body>
</html>
