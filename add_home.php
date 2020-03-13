<?php  
 $connect = mysqli_connect("localhost", "root", "", "home");  
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(name) VALUES ('$file')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  
 ?>  



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Home</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>

<style>
      * {
       box-sizing: border-box;
       font-family: sans-serif;
    }
    body{

       background-color: #da2547;
    }
</style>
<body>
   
    <div>
        <form class="form" action="connection .php" method="POST">
            <h3>Add Home</h3>
            <label>Name</label>
            <input type="text" name="name">
            <label>Address</label>
            <input type="text" name="address">
            <label>District</label>
            <input type="text" name="district">
            <label>State</label>
            <input type="text" name="country">
            <label>Pin Code</label>
            <input type="text" name="pin_code"><br><br>
            <button id="sub" type="submit" name="add_Hm">Add Home</button>
        </form>
    </div>
    <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Insert and Display Images From Mysql Database in PHP</h3>  
                <br />  
                <form method="post" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" />  
                     <br />  
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                </form>  
                <br />  
                <br />  
                <table class="table table-bordered">  
                     <tr>  
                          <th>Image</th>  
                     </tr>  
                <?php  
                $query = "SELECT * FROM tbl_images ORDER BY id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
                ?>  
                </table>  
           </div>  
    
</body>
</html>

<script>  
    $(document).ready(function(){  
         $('#insert').click(function(){  
              var image_name = $('#image').val();  
              if(image_name == '')  
              {  
                   alert("Please Select Image");  
                   return false;  
              }  
              else  
              {  
                   var extension = $('#image').val().split('.').pop().toLowerCase();  
                   if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                   {  
                        alert('Invalid Image File');  
                        $('#image').val('');  
                        return false;  
                   }  
              }  
         });  
    });  
    </script>  
   