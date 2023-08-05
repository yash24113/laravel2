<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <style>
    body
    {
      background-image:url( {{ url('images/img-11.jpg') }} );
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }
    div 
    {
      width: 400px;
      height: 500px;
      color: red;
      background-color: blue;
      border:solid 2px black;
   }
   .a  
   {
    text-decoration: none;
    width: 300px;
    height: 500px;
  color: blue;
   }
   }
  </style>
</head>
<body style="background-color: green;">
   <center>
  <div>
   
<center><h1>Update  Temple Package </h1>
          <br><br><br><br>
        <form action="{{route('boatt.update',$boatt->id)}}" method="post">
  @csrf
  @method('PUT')
  <input type="file" value="{{$boatt->image}}" name="image" ><br><br>
  <input type="text" value="{{$boatt->package}}" name="package" placeholder="enter package"><br><br>
  <input type="text" value="{{$boatt->price}}" name="price" placeholder="enter price"><br><br>
  <input type="submit" value="Update Data">
</form>
</center>
</div>
<br><br>
 
</center>

</body>
</html>

