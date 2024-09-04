<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
   
    <style>
body {
display: flex;
align-items: center;
justify-content: center;
height: 100vh;
margin: 0;
}

.login_container {
background-color: white;
width: 300px;
border-radius: 10px;
box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}

.login-SingIN {
color: #fff;
font-size: 20px;
background-color: lightgreen;
padding: 15px;
text-align: center;
font-weight: bold;
border-top-left-radius: 10px;
border-top-right-radius: 10px;

}

.login-form {
padding: 20px;
}

.login-form input {
width: 100%;
padding: 10px;
margin: 10px -10px;
border: 1px solid #ccc;
border-radius: 5px;
}
.login-form button  {
border-color: white;
border-radius: 10px;
padding: 10px;
background-color: lightgreen;
font-size: 17px;
width: 100%;
font-weight: bold;
color: #fff;
}

.succsse-message {
    color: green;
    text-align: center;
    margin: 10px;
}
.errol {
    color: red;
    text-align: center;
    margin: 10px;
}
    </style>
</head>
<body>
    <div class="login_container">
        <div class="login-SingIN"> Sign In </div>
        <form class="login-form" method="post" action="">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit"> Login In </button>
        </form>
</div>
</body>
</html>

<?php
// xử lý from đăng nhập
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];
   if( $username == "admin" &&  $password == "admin"){
    echo "<p class='succsse-message'> xin chao,  $username</p>";
   }
   else {
    echo "<p class='errol'> Thông tin tài khoản không chính xác</p>";

   }
}