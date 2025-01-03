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
    font-size: 50px;
    color:blue;
    margin-left: 100px;

    padding: 5px;
    
 }
 .img 
 {
     margin-left: 50px;
     box-sizing: border-box;
     background-color: red;
   /*  height: 250px;*/
     width:250px;
     padding: 5px;
     float:center;
 }
 .h4 
 {
   background-color: orange;
   width: 200px;
   margin: 80px;
   margin-top: 100px;
    
 }
 
 


   </style>
</head>
<body>

   <!-- header section starts  -->

   <section class="header">

   <h1><a href="home" class="logo" id="travel"><img src="images/s1.jpg" width="40px" height="40px">&nbsp;&nbsp;Travel </a></h1>


<h3 class="search"><input type="text" placeholder="Search here..." name="yash">

<button type="submit"><i class="fa fa-search"></i></button></h3>

<nav class="navbar">
   <a href="home1">Home</a>
   <a href="about">About</a>
   <!-- <a href="package11">Package</a> -->
   <!-- <a href="book">book</a> -->
   <a href="service">Sevices</a>
   <a href="feedback">Feedback</a>
   <a href="log">Login</a>
</nav>


</section>

<!-- section 1 starts -->

<div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
   
</div>

<!-- gallery section starts  -->
<div class='main'>
<center><h1 class="my">Camping</h1></center>
</div>
<br><br><br>
<section>
    
<div class="box-container">

         @foreach ($in as $data)
<div class="box">
            <img src="{{ asset('images/'  . $data->image) }}"  id="pic" object-fit="cover" class="img">
            <div class="content">
                <h1 class="h3">{{$data->package}}</h1>

            <h1 class="h3">₹{{$data->price}}</h1>
            <h1 class="h4"><a href="book" class="btn" >Book Now</a></h1>
    
            </div>
        </div>
        
        
   </div>
   @endforeach
</section>

<br><br><br>
<!-- gallery section ends -->
   <!-- footer starts -->
   <section class="footer">
         <div class="box-container">
            <div class="box">
               <h3>quick links</h3>
               <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
               <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
               <a href="package.php"> <i class="fas fa-angle-right"></i> Package</a>
               <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>
            </div>

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






