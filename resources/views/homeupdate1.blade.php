<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Site</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="icon" href="images/s1.jpg">
    <style>
      body
    {
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      background-image:url( {{ url('images/img-11.jpg') }} );
    }
       .yash
      {
        font-size:20px;
      } 

      .admin 
      {
        color:orange;
        padding:300px;
        padding-left:300px;
        font-size:50px;
        text-shadow:3px 4px blue;
        background-color:skyblue;
        height:900px;
        width:100%;
      }
      div 
    {
      width: 400px;
      height: 500px;
      margin-left: 500px;
      color: red;
      background-color: blue;
      border:solid 2px black;
   }
   body 
   {
    background-color: green;
   }
   .a  
   {
    text-decoration: none;
    width: 300px;
    height: 500px;
  color: blue;
   
   }

      </style>
  </head>
  <body >
    
             <div class="div">
          <center><h1>Update  slider</h1>
          <br><br><br><br>
         <form action="/homeupdate1" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$data[0]->id}}">
                    <input type="file" name="image" value="{{$data[0]->image}}" required /><br><br>
                   
                    <input type="submit" name="submit" />
                </form>

</center>
            </div> 
            
  </body>
</html>





