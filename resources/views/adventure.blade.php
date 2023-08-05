<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Adventure</title>
   <link rel="icon" href="images/adventure.jpg">
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
  border:1rem solid skyblue;
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

/*.gallery .box-container .box:hover .content{
  top:0;
}

.gallery .box-container .box .content h3{
  font-size: 2.5rem;
  color:var(--orange);
}

*/.gallery .box-container .box .content p{
  font-size: 1.5rem;
  color:#eee;
  padding:.5rem 0;
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

   .uu 
{
   width: 30px;
   height: 30px;
   border-radius: 50%;
}
.dropdown 
{
   display: inline-block;
   position: relative;
}
.dropdown-options 
{
   display: none;
   position: absolute;
   overflow: auto;
}
.dropdown:hover .dropdown-options 
{
   display: block;
}
.s 
{
   font-size: 30px;
   font-family: arial;
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

 .home-packages .box-container {
         display: grid;
         /* image in line */
         grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
         gap: 2rem;
         /* gap between image */
         padding: 10rem;
      }

      .home-packages .box-container .box {
         border: .1rem solid blue;
         box-shadow: 0 .5rem 1rem rgba(0, 0, 0, 1);
         background:skyblue;
      }

      .home-packages .box-container .box:hover .image img {
         transform: scale(1.1);
         /*zoom image*/
      }

      .home-packages .box-container .box .image {
         height: 25rem;
         overflow: hidden;
         /* image dont go outside the box */
      }

      .home-packages .box-container .box .image img {
         height: 100%;
         width: 100%;
         object-fit: cover;
         /*fit the image according to border */
         transition: .2s linear;
         /*thoda smooth */
      }

      .home-packages .box-container .box .contentt {
         padding: 2rem;
         /* box mai space */
         text-align: center;
         color: pink;
      }

      .home-packages .box-container .box .contentt h3 {
         font-size: 2.5rem;
         color: black;
      }

      .home-packages .box-container .box .contentt p {
         font-size: 1.5rem;
         color: #777;
         line-height: 2;
         padding: 1rem 0;
      }


      .pk-btn {
         display: inline-block;
         background: black;
         margin-top: -1rem;
         color: white;
         font-size: 1.7rem;
         padding: 1rem 3rem;
         cursor: pointer;
         height: 40px;
      }

      .pk-btn:hover {
         background: #8e44ad;
      }

      .home-packages .load-more {
         text-align: center;
         margin-top: -7rem;
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


</section>

<!-- section 1 starts -->

<div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
   
</div>
<div class='main'>
<center><h1 class="my">Adventure</h1></center>
</div>
<!-- gallery section starts  -->
<br><br><br>
  
      <section class="home-packages">
<section class="gallery" id="gallery">
    <div class="box-container">

        <div class="box">
             <div class="image">
            <img src="images/a1.jpg" alt="">
        </div>
            <div class="content">
                <!-- <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a> -->
            </div>
        </div>
        <div class="box">
             <div class="image">
            <img src="images/a2.jpg" alt="">
        </div>
            <div class="content">
                <!-- <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a> -->
            </div>
        </div>
        <div class="box">
             <div class="image">
            <img src="images/a3.jpg" alt="">
        </div>
            <div class="content">
                <!-- <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a> -->
            </div>
        </div>
        <div class="box">
             <div class="image">
            <img src="images/a4.jpg" alt="">
        </div>
            <div class="content">
            <!--     <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
             -->
            </div>
        </div>
        <div class="box">
             <div class="image">
            <img src="images/a5.jpg" alt="">
        </div>
            <div class="content">
            <!--     <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            
             --></div>
        </div>
        <div class="box">
             <div class="image">
            <img src="images/a6.jpg" alt="">
        </div>
            <div class="content">
            <!--     <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            
             --></div>
        </div>
        <div class="box">
             <div class="image">
            <img src="images/a7.jpg" alt="">
        </div>
            <div class="content">
            <!--     <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
             --></div>
        </div>
        <div class="box">
             <div class="image">
            <img src="images/a8.jpg" alt="">
        </div>
            <div class="content">
            <!--     <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
             --></div>
        </div>
        <div class="box">
             <div class="image">
            <img src="images/a9.jpg" alt="">
        </div>
            <div class="content">
            <!--     <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
             --></div>
        </div>

    </div>
</section>
</section>
<br><br><br>
<!-- gallery section ends -->
   <!-- footer starts -->
   <section class="footer">
      <div class="box-container">
         <div class="box">
              <h3>quick links</h3>
                  <a href="home1"> <i class="fas fa-angle-right"></i> home</a>
                  <a href="about"> <i class="fas fa-angle-right"></i> about</a>
                  <a href="service"> <i class="fas fa-angle-right"></i> Service</a>
               @if(session('user'))
               <a href="feedback"> <i class="fas fa-angle-right"></i> Feedback</a>
            
               @else
            
               <a href="review"> <i class="fas fa-angle-right"></i> Review</a>
               @endif 
         </div>

          <div class="box">
               <h3>extra links</h3>
               <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
               <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
               <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
               <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
            </div>

            <div class="box">
               <h3>contact info</h3>
               <a href="#"> <i class="fas fa-phone"></i> +918347727949 </a>
               <a href="#"> <i class="fas fa-envelope"></i> yashkharva506@gmail.com </a>
               <a href="#"> <i class="fas fa-map"></i> gujarat,Ahmedabad  - 382443 </a>
            </div>

            <div class="box">
               <h3>follow us</h3>
               <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
               <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
               <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
               <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            </div>

   </div>

   <div class="credit"> created by <span>Yash</span> | all rights reserved! </div>

</section>


      </div>
   </section>
<!-- footer ends -->
</body>
</html>

<!-- hello -->