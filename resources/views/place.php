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
}body{
   /* background-color:skyblue; */
   background-image:url(images/g-8.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
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
   <a href="home1">Ho</a>
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
<div class='main'>
<center><h1 class="my">Places</h1></center>
</div>

<!-- gallery section starts  -->
<br><br><br>
<section class="gallery" id="gallery">

    <div class="box-container">

        <div class="box">
            <img src="images/pl1.jpg" alt="">
            <div class="content">
                <!-- <h3>Hawaii</h3>
                <p>Best place to enjoy the beach or the water</p>
                <a href="hawai" class="btn">see more</a> -->
            </div>
        </div>
        <div class="box">
            <img src="images/pl2.jpg" alt="">
            <div class="content">
                <!-- <h3>boating</h3>
                <p>Boating through the canals of Venice is imperative for anyone who likes to travel.</p>
                <a href="boating" class="btn">see more</a> -->
            </div>
        </div>
        <div class="box">
            <img src="images/pl3.jpg" alt="">
            <div class="content">
                <!-- <h3>architecture</h3>
                <p>rchitects increase output and provide society with reasons to ponder, smile, celebrate or be proud of the beauty of her country</p>
                <a href="arc" class="btn">see more</a> -->
            </div>
        </div>
        <div class="box">
            <img src="images/pl10.jpg" alt="">
            <div class="content">
                <!-- <h3>Camping Places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="camp" class="btn">see more</a> -->
            </div>
        </div>
        <div class="box">
            <img src="images/pl11.jpg" alt="">
            <div class="content">
                <!-- <h3>Snow Places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="snow" class="btn">see more</a> -->
            </div>
        </div>
        <div class="box">
            <img src="images/pl6.jpg" alt="">
            <div class="content">
                <!-- <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="amazing" class="btn">see more</a> -->
            </div>
        </div>
       
        <div class="box">
            <img src="images/pl7.jpg" alt="">
            <div class="content">
                <!-- <h3>Place Of Worships</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="place" class="btn">see more</a> -->
            </div>
        </div> 

        <div class="box">
            <img src="images/pl8.jpg" alt="">
            <div class="content">
                <!-- <h3>Place Of Worships</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="place" class="btn">see more</a> -->
            </div>
        </div> 

        <div class="box">
            <img src="images/pl12.jpg" alt="">
            <div class="content">
                <!-- <h3>Place Of Worships</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="place" class="btn">see more</a> -->
            </div>
        </div> 

    </div>

</section>

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