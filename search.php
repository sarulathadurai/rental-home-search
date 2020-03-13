<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
    <link rel=stylesheet href="style.css">
</head>
<style>
    *{
        box-sizing: border-box;
        font-size: 15px;
        font-family: sans-serif;
    }
    nav{
        
        background-color: rgba(29,161,242,1.00);
            
    }

 
</style>

<body>

    <nav>
        <input class = "search " type="search" placeholder="Search State..." >
        <input class = "search"  type="search" placeholder="Search District..">
        <link href="add_home.html">rent your home</links>

        
    </nav>

</body>
</html>