<?php
require "connect.php"; 
$result;
$con = mysqli_connect($servername, $username, $password, $database);

     if(isset($_POST['submit']))
      {
         $sql = "INSERT INTO `products` (`pname`, `pcategory`, `perishable`)VALUES ('{$_POST['name']}','{$_POST['category']}','{$_POST['perish']}');";
         $result = mysqli_query($con,$sql);   
         
         ?>
         <script type="text/javascript">
             alert("Product Added Successfully");
             window.location.href = "adddelivery.php";
         </script>
         <?php
      }

  
          ?>