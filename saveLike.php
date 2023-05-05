<?php 
include("config.php");
$sql = "UPDATE likes SET count = count + 1 WHERE id = 1";
$res = $conn->query($sql);
?>