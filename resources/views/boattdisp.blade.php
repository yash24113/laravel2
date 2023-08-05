

      <!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Admin</title>
   <link rel="icon" href="images/about.jpg">
    <!-- font awesome cdn link  -->
    
 <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" type="text/css" href="Untitled-1.css">

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

   <style>
       .d 
      {
        background-image: url('images/img-11.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position:center ;
        height: 1100px;
      }


   .footer
   {
    margin-top: -50px;
   }
       .y 
      {
        margin-left: 50px;
        margin-right: 50px;
      }
      .ee 
      {
         text-decoration: none;
         background-color: white;
         color: black;
         padding: 5px;
      }
      .e 
      {
         background-color: white;
         width: 20px;
         hight: 20px;
         color: white;
      }
      .ll 
      {
         font-size: 50px;
           text-decoration: none;
           color: lime;
      }
       .div 
    {
      width: 400px;
      height: 500px;
      color: blue;
      /*background-color: blue;*/
       background-image:url( {{ url('images/img-11.jpg') }} );
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      border:solid 2px black;
      margin-top: 25px;
           margin-bottom: 25px;
   }
   </style>
</head>
<body>
    <center>
  <div class="div">
   
<center><h1>Temple Package </h1>
          <br><br><br><br>
         <form action="{{route('boatt.show',$boatt->id)}}" method="post" class="">
  @csrf
  <input type="text" name="package" placeholder="enter package"><br><br>
  <input type="text" name="price" placeholder="enter price"><br><br>
  <input type="submit" value="Add Data">
</form>
</center>
</div>
    <div class="d">
          <div class="y">
    <center style="color:Blue;font-size: 100px;padding-top:50px">Temple Package Details</center>
         <br><br><br><br>
       
<table class = "table table-dark table-striped">
	<tr>
		<th>ID </th>
		<th> Package</th>
		<th>Price</th>
		
      
</tr>
@foreach($boat as $boatt)
<tr>
	<td>{{$boatt->id}}</td>
	<td>{{$boatt->package}}</td>
	<td>{{$boatt->price}}</td>
  

</tr>
@endforeach
</table>
<div class="ll">
	{{$boat->links()}}
</div>
</div>
</div>
</body>
</html>