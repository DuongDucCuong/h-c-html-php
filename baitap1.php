<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login Form</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
            margin: 0;
        }
        .login-container {
            width: 300px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .login-header {
            background-color: lightgreen;
            padding: 15px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            text-align: center;   /* chu can chinh giua*/
            font-size: 20px;  
            font-weight: bold;
            color: #fff;
        }
        .login-form {
            padding: 20px;
        }
        .login-form input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }
        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: lightgreen;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            color: #fff;
            cursor: pointer;
        }

        .succsse-message{
            color: green;
            text-align: center;
            margin-top: 10px;
        }
        .error-message {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <div class="login-header"> Sign in </div>
    <form class="login-form" method="post" action="">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    
</div>
<?php
    // Xử lý form đăng nhập
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Kiểm tra thông tin đăng nhập
        if ($username == "admin" && $password == "admin") {
            echo "<p class='succsse-message'>Xin chào, $username!</p>";
        } else {
            echo "<p class='error-message'>Thông tin đăng nhập không chính xác. Xin hãy kiểm tra lại!</p>";
        }
    }
?>

</body>
</html>

