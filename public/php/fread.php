<?php  

include "conffig.php";

$sql = "SELECT * FROM poll ORDER BY id DESC";
$result = mysqli_query($con, $sql);