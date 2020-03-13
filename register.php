<?php include("connection .php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>

* {
       box-sizing: border-box;
       font-family: sans-serif;
      }
   


   img{
       height: 600px;
       padding:50px 100px ;
   }

   a{
       color:white;
   }
</style>


<body>

    <div class="row">

        <div class="left_side">
            
        </div>

   
       <div class="right_side">
          
        <div class="form">
            <form id="register" action="register.php" method="POST">
                <h3>REGISTER</h3>
                <input type = "text" placeholder="username" name ="name" required>
                <input type = "password" placeholder="password" name="password_1" required >
                <input type = "password" placeholder="confirm password" name="password_2" required>
                <input type = "email" placeholder="email" name="email" required>
                <button type = "submit" id = "sub" name="reg_user">REGISTER</button>
                <a href="index.php" target="_self">Login</a>
            </form>
        </div>

    </div>   

</body>
</html>