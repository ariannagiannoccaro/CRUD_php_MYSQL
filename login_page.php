<?php include("db.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!--FONT AWESOME-->
<script src="https://kit.fontawesome.com/803cf7e363.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="card  card-body text-center position-absolute top-50 start-50 translate-middle" style="width: 25rem;">
        <form action="index.php" onsubmit="return isvalid()" method="POST">
            <div class="form-group">
                <h1 class="card-title">LOGIN</h1>
                <br><br>
                <h3 class="card-text"> Username</h3>
                <input type="text" name="user" class="form-control"
                placeholder="Enter your username" autofocus>
            </div>
            <br>
            <div class="form-group">
                <h3 class="card-text">Password</h3>
            <input type="password" name="pass" class="form-control"
            placeholder="Enter your password" autofocus>
            </div> <br>
            <input type="submit" class="btn btn-warning btn-block"
            name="save_user" value="Save">
        </form>
    </div>
    <script>
        function isvalid(){
            var user = document.form.user.value;
            var pass = document.form.pass.value;
            if(user.lenght=="" && pass.length==""){
                alert("Username and password field is empty");
                return false
            }
            else{
                if(user.lenght==""){
                alert("Username is empty");
                return false
                }
                if(pass.length==""){
                alert("password field is empty");
                return false
                }

            }
        }
    </script>
    
</body>
</html>