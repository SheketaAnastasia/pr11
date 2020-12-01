<?php session_start();
 require_once "db.php";
?>

<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <link rel="stylesheet" type="text/css" href="assets/css/style.css">



</head>
<body style="padding-top: 3rem;">
      <div class="butt">
        <a  href="main.php"><input type='submit' value ='Back'   class='bttn' ></a>
      </div>

<div class="container">
   <form action="upload.php" method="post" enctype="multipart/form-data">
		First Name: <input type="text" name="first_name" placeholder= "только a-z, A-Z" pattern="^[A-Za-zА-Яа-яЁё]{1,20}$" required/><br>
		Last Name: <input type="text" name="last_name" placeholder= "только a-z, A-Z " pattern="^[A-Za-zА-Яа-яЁё]{1,20}$" required/><br>
    Password: <input type="password" name="password" placeholder= "не менее 6 символов"  pattern="(?=^.{6,}$).*$" required/><br>
	
  Select image to upload:
  
    <input type="file" name="fileToUpload" id="fileToUpload" class="bttn">

    <input type="submit" class="bttn">
   </form>
</div>



</body>
</html>
