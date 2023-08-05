<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Services</title>
   <link rel="icon" href="images/ga.jpg">
    <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" type="text/css" href="style.css">
   <style type="text/css">

* {
         font-family: 'Poppins', sans-serif;
         margin: 0;
         padding: 0;
         box-sizing: border-box;
         outline: none;
         border: none;
         text-decoration: none;
         text-transform: capitalize;
      }

      html {
         font-size: 62.5%;
         overflow-x: hidden;
      }


   .header .navbar a:hover{
   color:lime;
}

.header{
   position: sticky;
   top:0; left:0; right:0;
   z-index: 1000;
   background-color: white;
   display: flex;
   padding-top: 2rem;
   padding-bottom: 2rem;
   box-shadow: 0 .5rem 1rem rgba(0, 0, 0, 1);
   align-items: center;
   justify-content: space-between;
   
}


.header .logo{
   font-size: 2.5rem;
   color:black;
   margin-left:10px;
   text-decoration:none;
}


.header .navbar a{
   font-size: 2rem;
   margin-left: 2rem;
   margin-right: 1rem;
   
   color:black;
   text-decoration:none;
}

.header .navbar a:hover{
   color:lime;
}

.heading{
   background-size: cover !important;
   background-position: center !important;
   padding-top: 10rem;
   padding-bottom:15rem;
   display: flex;
   align-items: center;
   justify-content: center;
   color:lime;
}


      .gallery .box-container{
  display: flex;
  flex-wrap: wrap;
  gap:1.5rem;
}

.gallery .box-container .box{
  overflow: hidden;
  box-shadow: 0 1rem 2rem rgba(0,0,0,.1);
  border:1rem solid #fff;
  border-radius: .5rem;
  flex:1 1 41rem;
  height: 25rem;
  position: relative;
}

.gallery .box-container .box img{
  height: 100%;
  width:100%;
  object-fit: cover;
}

.gallery .box-container .box .content{
  position: absolute;
  top:-100%; left:0;
  height: 100%;
  width:100%;
  text-align: center;
  background:rgba(0,0,0,.7);
  padding:2rem;
  padding-top: 5rem;
}

.gallery .box-container .box:hover .content{
  top:0;
}

.gallery .box-container .box .content h3{
  font-size: 2.5rem;
  color:orange;
}

.gallery .box-container .box .content p{
  font-size: 1.5rem;
  color:#eee;
  padding:.5rem 0;
}
.btn{
   display: inline-block;
   background: var(--black);
   margin-top: 1rem;
   color:white;
   font-size: 1.7rem;
   padding:1rem 3rem;
   cursor: pointer;
}
.dropbtn {
  background-color: white;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  margin-right: 100px;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: ;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: white;}



.btn:hover{
   background: orange;
}
.footer {
         background: url(images/footer.jpg) no-repeat;
         background-size: cover;
         background-position: center;
         padding-top: 5rem;
         padding-bottom: 5rem;
      }

      .footer .box-container {
         display: grid;
         grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
         gap: 3rem;
         padding-left: 10rem;
      }

      .footer .box-container .box h3 {
         color: white;
         font-size: 2.5rem;
         padding-bottom: 2rem;
      }

      .footer .box-container .box a {
         /* color: var(--light-white); */
         color:white;
         font-size: 1.5rem;
         padding-bottom: 1.5rem;
         display: block;
         text-decoration: none;
      }

      .footer .box-container .box a i {
         color: violet;
         padding-right: .5rem;
         transition: .3s linear;
         text-decoration: none;
      }

      .footer .box-container .box a:hover i {
         padding-right: 2rem;
      }

      .footer .credit {
         text-align: center;
         padding-top: 3rem;
         margin-top: 3rem;
         border-top: .1rem solid var(--light-white);
         font-size: 2rem;
         color: white;
      }

      .footer .credit span {
         color: violet;
      }

      body{
   background-color:skyblue;
}
body{
   /* background-color:skyblue; */
   background-image:url(images/g-8.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
.main{
   background-color:white;
   width:100%;
   height:100px;
   margin-top:20px;
   margin-bottom:20px;
}
 .my 
 {
      height:50px;
      padding-top:30px;
      font-size:50px;
 }

 .h3 
 {
    font-size: 30px;
    color:blue;
    margin-left: 100px;

    padding: 5px;
    
 }
 .img 
 {
     margin-left: 50px;
     box-sizing: border-box;
     background-color: skyblue;
   /*  height: 250px;*/
     width:250px;
     padding: 5px;
     float:;
     margin-top: 50px;
 }
 .h4 
 {
   background-color: orange;
   width: 200px;
   margin: 80px;
   margin-top: 00px;
   margin-bottom:100px ;
    
 }
 .yy 
 {
   float: right;
  
 }
    .uu 
{
   width: 30px;
   height: 30px;
   border-radius: 50%;
}
 
 .img:hover 
 {
    transform: scale(1.5);
 }
 .btn:hover 
 {
    transform: scale(1.1);
 }

 


   </style>
</head>
<body>

   <!-- header section starts  -->
   <section class="header">

   <h1><a href="home" class="logo" id="travel"><img src="images/s1.jpg" width="40px" height="40px">&nbsp;&nbsp;Travel </a></h1>




<nav class="navbar">
   <a href="home1">Home</a>
   <a href="about">About</a>
   <!-- <a href="package11">Package</a> -->
   <!-- <a href="book">book</a> -->
   <a href="service">Sevices</a>
   

              @if(session('user'))
            
                 <a href="feedback">Feedback</a> 
                 
                


                <div class="dropdown">
                  
  <button class="dropbtn"><img src="images/user.jpg" alt="" class="uu">&nbsp;&nbsp;&nbsp;{{ session('user') }}</button>
  <div class="dropdown-content">
     <a href="book_disp1">My Booking</a>
                 <a href="ds">Logout</a>
  </div>
</div>

                 
                 @else
                       <a href="review">Review</a>  
                     <a href="log">Login</a>  
                 

            
           
            @endif

</nav>


</section>

<!-- section 1 starts -->

<div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
   
</div>

<!-- gallery section starts  -->
<div class='main'>
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

<center><h1 class="my">Amazing</h1></center>
</div>
<center style="font-size:50px">
@if($errors->any())
<span style="color:red"><h4>{{$errors->first()}}</h4></span>
@endif
</center>

<br><br><br>
<section>
    

<!-- gallery section starts  -->

<section>

   <div class="box-container">

         @foreach ($in as $data)
         <div class="yy">
<div class="box">
            <img src="{{ asset('images/'  . $data->image) }}"  id="pic" object-fit="cover" class="img">
            <div class="content">
                <h1 class="h3">{{$data->package}}</h1>

            <h1 class="h3">₹{{$data->price}}</h1>
            <h1 class="h4"><a href="book_amazing/{{$data->id}}" class="btn" >Book Now</a></h1>
    
            </div>
        </div>
       </div> 
        
   </div>
   @endforeach

</section>
<!-- gallery section ends -->
   <!-- footer starts -->
   <section class="footer">
         <div class="box-container">
            <div class="box">
               <h3>quick links</h3>
               <a href="home1"> <i class="fas fa-angle-right"></i> Home</a>
               <a href="about"> <i class="fas fa-angle-right"></i> About</a>
               <a href="service"> <i class="fas fa-angle-right"></i> Service</a>
               @if(session('user'))
               <a href="feedback"> <i class="fas fa-angle-right"></i> Feedback</a>
            
               @else
            
               <a href="review"> <i class="fas fa-angle-right"></i> Review</a>
               @endif   </div>

            <div class="box">
               <h3>extra links</h3>
               <a href="#"> <i class="fas fa-angle-right"></i> Ask questions</a>
               <a href="#"> <i class="fas fa-angle-right"></i> About us</a>
               <a href="#"> <i class="fas fa-angle-right"></i> Privacy policy</a>
               <a href="#"> <i class="fas fa-angle-right"></i> Terms of use</a>
            </div>

            <div class="box">
               <h3>contact info</h3>
               <a href="#"> <i class="fas fa-phone"></i> +918347727949 </a>
               <a href="#"> <i class="fas fa-envelope"></i> yashkharva@gmail.com </a>
               <a href="#"> <i class="fas fa-map"></i> gujarat, india - 382443 </a>
            </div>

            <div class="box">
               <h3>follow us</h3>
               <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
               <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
               <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
               <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            </div>

         </div>

         <div class="credit"> created by <span>Yash & Mita</span> | all rights reserved! </div>

      </section>


      </div>
      </section>
<!-- footer ends -->
</body>
</html>

<!-- hello -->