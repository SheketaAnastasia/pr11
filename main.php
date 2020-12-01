<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title></title>


<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body style="padding-top: 3rem;">
    <div class="butt">
<a href= 'registr.php'><input type='submit' value ='SingUp'  class='bttn'></a>
  </div>

 <div class="tableData">
    <center>
   <table>
     <caption><b>Table users</b></caption>
     <tr><th>#</th><th>First Name</th><th>Last Name</th><th>photo</th></tr>
     <?php 
        require_once "db.php";

        $sql = "SELECT  `id`, `first_name`, `last_name`,`photo`  FROM `users`";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
    // output data of each rowі
        while($row = $result->fetch_assoc()) {
        
            echo "<tr>";
            echo "<td>". $row["id"]. "</td>";
            echo "<td>" . $row["first_name"]. "</td>";
            echo "<td>" . $row["last_name"]."</td>";
            echo "<td><img src='public/images/"  . $row["photo"]."' style='width:100px'></img></td>";
            echo "</tr>";
          
            }

        }
     ?>
   
   </table>
   </center>
 </div>
 
</body>
</html>