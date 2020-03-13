<?php include('/home/saru/Desktop/htdocs/new/connection .php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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
   a
   {
     color:white;
   }
   input{
        padding:5px;
        margin: 10px auto;
        align-self: center;
        width:100%;
        border-radius: 5px;
    }
</style>
<body>
    <div class="row">

        <div class="left_side">

            
        </div>

   
       <div class="right_side">
          
            <div class="form">
                <form action="index.php" method="POST">
                    <h3>Login</h3>
                    <input type = "text" placeholder = "username" name="username" required>
                    <input type = "password" placeholder = "password" name="password" required>
                    <button type = "submit" id="sub" name = "login_user">LOGIN</button>
                    <p>Not registered!<a id="reg" href="register.php" target="_self"> Register</a></p>
                </form>
             </div>

    </div>
</body>
</html>

  <!--
  <h2>Register</h2>
  
  <form action="">
    
     Login -->
     <!--
    
    <div class="login-form form">
      

      <label for="username">Username</label>
      <input type="text" id="username" placeholder="Username">
      
      <label for="password">Password</label>
      <input type="password" id="password" placeholder="Password">
      
    </div>
    
    <!-- Register -->
    <!--
    <div class="register-form form">
      
      <label for="first-name">First Name</label>
      <input disabled type="text" id="first-name" placeholder="First Name">
      
      <label for="last-name">Last Name</label>
      <input disabled type="text" id="last-name" placeholder="Last Name">
      
      <label for="email">E-mail Adress</label>
      <input disabled type="text" id="email" placeholder="E-mail Address">
      
      <label for="confirm-email">Confirm E-mail Address</label>
      <input disabled type="text" id="confirm-email" placeholder="Confirm E-mail Address">
      
      <div class="captcha">
        <label for="captcha">What is <strong>10 + 3</strong>?</label>
        <input disabled type="text" id="captcha" placeholder="Your answer">
        
      </div>
      
    </div>
    
    <!-- Submit -->
    <!--
    <input type="submit" id="submit" value="">
    
    <!-- Help -->
    <!--
    <a href="register.htm" class="register">Login!</a>
    <a href="#" class="forgot-password" title="Forgot password?">Forgot?</a>
    
  </form>
</div> -->

