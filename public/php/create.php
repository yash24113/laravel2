<?php 

if (isset($_POST['create'])) {
	include "../db_conn.php";
	

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$location = $_POST['location'];
	$guests = $_POST['guests'];
	$arrivals = $_POST['arrivals'];
	$leaving = $_POST['leaving'];

	$user_data = 'name='.$name. '&email='.$email. '&phone='.$phone. '&address='.$address. '&location='.$location. '&guests='.$guests. '&arrivals='.$arrivals. '&leaving='.$email;

	if (empty($name)) {
		header("Location: ../index.php?error=Name is required&$user_data");
	}
	else if (empty($email)) {
		header("Location: ../index.php?error=Email is required&$user_data");
	}
	else if (empty($phone)) {
		header("Location: ../index.php?error=phone is required&$user_data");
	}
	else if (empty($address)) {
		header("Location: ../index.php?error=address is required&$user_data");
	}
	else if (empty($location)) {
		header("Location: ../index.php?error=location is required&$user_data");
	}
	else if (empty($guests)) {
		header("Location: ../index.php?error=guests is required&$user_data");
	}
	else if (empty($arrivals)) {
		header("Location: ../index.php?error=arrivals is required&$user_data");
	}
	else if (empty($leaving)) {
		header("Location: ../index.php?error=leaving is required&$user_data");
	}
	else 
	{

       $sql = "INSERT INTO book_form(name, email, phone,address , location , guests , arrivals, leaving) 
               VALUES('$name', '$email' , '$phone' , '$address' , '$location' ,'$guests', '$arrivals' ,'$leaving')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully created");
       }else {
          header("Location: ../index.php?error=unknown error occurred&$user_data");
       }
	}

}