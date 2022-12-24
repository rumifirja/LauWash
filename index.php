<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/style-landing.css">
</head>
<body>
    <!-- Login -->
    <div class="container">
        <div class="login">
            
            <h1>Lau<span>Wash</span></h1>
            
            <div class="login-form">
                <form action="proses_login.php" method="post">
                    <input type="text" id="username" name="username" placeholder="Username" class="login-form"><br>
                    <div class="line-dark"></div>
                    <input type="password" id="password" name="password" placeholder="Password" class="login-form"><br>
                    <div class="line-dark"></div>
                    <input type="submit" id="login" value="Login" class="btn">
                </form> 
            </div>
        </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/9c74db1b34.js" crossorigin="anonymous"></script>
</html>