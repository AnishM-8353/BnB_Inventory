<?php
require 'connect.php';
?>
<?php 
$result;
$con = mysqli_connect($servername, $username, $password, $database);

     if(isset($_POST['submit']))
      {
         $sql = "INSERT INTO `delivery` (`pid`, `est_time`, `act_time`, `npalletes`, `Expiry`)VALUES ('{$_POST['Selectedproduct']}','{$_POST['esTime']}','{$_POST['acTime']}','{$_POST['palletes']}','{$_POST['exp']}' );";
         $result = mysqli_query($con,$sql);
         

         ?>
         <script type="text/javascript">
             alert("Delivery");
            window.location.href = "ToStorage.php";
         </script>
         <?php
      }
?>