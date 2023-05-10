<?php 
include("config.php");
$sql = "UPDATE NewTable SET likecount = likecount + 1 WHERE id_like = 1";
$res = $conn->query($sql);
?>