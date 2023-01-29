<?php
require 'connect.php';
?>
<?php
$last_did;
$sql1 = "SELECT * FROM `delivery`;";
$res = mysqli_query($conn, $sql1);

if ($res) 
{
    $result = mysqli_fetch_all($res);
    $last_did = $result[count($result) - 1][0];
}

$sql2 = "INSERT INTO `storageunit` (`pid`, `did`, `loc_id`)VALUES ('{$result[count($result)-1][1]}','{$last_did}', 1 );";
$ressql2 = mysqli_query($conn, $sql2);
?>
<script type="text/javascript">
alert("Added to Storage Unit");
window.location.href = "IncomingOrders.php";
</script>