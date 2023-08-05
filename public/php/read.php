<?php  

include "db_conn.php";

$sql = "SELECT * FROM book_form ORDER BY id DESC";
$result = mysqli_query($conn, $sql);