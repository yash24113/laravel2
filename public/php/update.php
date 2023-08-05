<?php 

if (isset($_GET['id'])) {
	include "db_conn.php";

	

	$id = $_GET['id'];

	$sql = "SELECT * FROM book_form WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: read.php");
    }


}else if(isset($_POST['update'])){
    include "../db_conn.php";
   

	// $name = $_POST['name'];
	// $email = $_POST['email'];
 //    $phone = $_POST['phone'];
 //    $address = $_POST['address'];
 //    $location = $_POST['location'];
 //    $guests = $_POST['guests'];
 //    $arrivals = $_POST['arrivals'];
 //    $leaving = $_POST['leaving'];
	// $id =$_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];
    $id =$_POST['id'];

	if (empty($name)) {
		header("Location: ../update.php?id=$id&error=Name is required");
	}else if (empty($email)) {
		header("Location: ../update.php?id=$id&error=Email is required");
	}

    else if (empty($phone)) {
        header("Location: ../update.php?id=$id&error=number is required&");
    }
    else if (empty($address)) {
        header("Location: ../update.php?id=$id&error=address is required&");
    }
    else if (empty($location)) {
        header("Location: ../update.php?id=$id&error=place is required&");
    }
    else if (empty($guests)) {
        header("Location: ../update.php?id=$id&error=guests is required&");
    }
    else if (empty($arrivals)) {
        header("Location: ../update.php?id=$id&error=arrivals is required&");
    }
    else if (empty($leaving)) {
        header("Location: ../index.php?error=leaving is required&$user_data");
    }
    else 
    {

       $sql = "UPDATE book_form
               SET name='$name', email='$email', phone='$phone', address='$address', location='$location', guests='$guests', arrivals='$arrivals', leaving='$leaving'
               WHERE id=$id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully updated");
       }else {
          header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}else {
	header("Location: read.php");
}