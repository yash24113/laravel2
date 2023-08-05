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
<body style="background-color:green;">
   <center>
  <div>
   
<center><h1>Update  Architecture Package </h1>
          <br><br><br><br>
         <form action="/update13" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$data[0]->id}}">
                    <input type="file" name="image" value="{{$data[0]->image}}" required /><br><br>
                    <input type="text" name="package" placeholder="Enter package name" value="{{$data[0]->package}}" required /><br><br>
                   
                    <input type="text" name="price" placeholder="Enter price" value="{{$data[0]->price}}" required><br><br>
                  
                    <input type="submit" name="submit" />
                </form>

</center>
</div>
<br><br>
 <button class="btn btn-primary btn-block"><a href="/edit13" class="a">Back</a></button>

</center>

</body>
</html>

