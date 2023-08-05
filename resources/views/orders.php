<?php include "php/read.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="stylee.css">
    <style type="text/css">
.ashu
{
	border:1px solid #333;
	border-collapse:collapse;
		color:#FFF;
}
#head{
	text-align: center;
}
body{
	margin-top: 17rem;
}

</style>
</head>
<body >
	<div class="container">
		<div class="box">
			<h4 class="subHead" id="head">Orders</h4><br>
			<?php if (isset($_GET['success'])) { ?>
		    <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
			<table class="table table-striped">
			  <thead>
			    <tr>
			      <th class="ashu">#</th>
			      <th class="ashu">Name</th>
			      <th class="ashu">Email</th>
			       <th class="ashu">Phone</th>
			      <th class="ashu">address</th>
			       <th class="ashu">Location</th>
			      <th class="ashu">guests</th>
			       <th class="ashu">arrivals</th>
			      <th class="ashu">leaving</th>
			      <!-- <th class="ashu">Action</th> -->

			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
			  	 ?>
			    <tr>
			      <th scope="row"><?=$i?></th>
			      <td><?=$rows['name']?></td>
			      <td><?php echo $rows['email']; ?></td>
			      <td><?php echo $rows['phone']; ?></td>
			      <td><?php echo $rows['address']; ?></td>
			      <td><?php echo $rows['location']; ?></td>
			      <td><?php echo $rows['guests']; ?></td>
			      <td><?php echo $rows['arrivals']; ?></td>
			      <td><?php echo $rows['leaving']; ?></td>
			      <td class="ashu">


			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php } ?>
			<div class="link-right">
				<!-- <a href="index.php" class="link-primary">Create</a> -->
			</div>
		</div>
	</div>
			<center><td><a href="ahome.php" class="cmd" id="hover"> BACK</a></td></center>
</body>
</html>