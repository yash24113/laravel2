<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Review</title>
   <link rel="icon" href="images/about.jpg">
    <!-- font awesome cdn link  -->
    


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" type="text/css" href="Untitled-1.css">

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

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

.about{
   display: flex;
   align-items: center;
   flex-wrap: wrap;
   gap:3rem;
}

.about .image{
   flex:1 1 41rem;
}

.about .image img{
   width: 100%;
   height:500px;
   margin-left:20px;
}

.about .content{
   flex:1 1 41rem;
   text-align: center;
}

.about .content h3{
   font-size: 3rem;
   color:lime;
}

.about .content p{
   font-size: 1.5rem;
   color:black;
   line-height: 2;
   padding:1rem 0;
}

.about .content .icons-container{
   margin-top: 2rem;
   display: flex;
   flex-wrap: wrap;
   gap:1.5rem;
   align-items: flex-end;
}

.about .content .icons-container .icons{
   background: var(--light-bg);
   padding:2rem;
   flex:1 1 16rem;
}

.about .content .icons-container .icons i{
   font-size: 4rem;
   margin-bottom: 2rem;
   color:var(--main-color);
}

.about .content .icons-container .icons span{
   font-size: 1.5rem;
   color:var(--light-black);
   display:block;
}

.reviews{
   background: var(--light-bg);
}

.reviews .slide{
   padding:2rem;
   border:var(--border);
   background: var(--white);
   text-align: center;
   box-shadow: var(--box-shadow);
   user-select: none;
}

.reviews .slide .stars{
   padding-bottom: .5rem;
}

.reviews .slide .stars i{
   font-size: 1.7rem;
   color:orange;
}

.reviews .slide p{
   font-size: 1.5rem;
   color:black;
   line-height: 2;
   padding:1rem 0;
}

.reviews .slide h3{
   font-size: 2rem;
   color:var(--black);
}

.reviews .slide span{
   font-size: 1.5rem;
   color:var(--main-color);
   display: block;
}

.reviews .slide img{
   height: 7rem;
   width: 7rem;
   border-radius: 50%;
   margin-top: 1rem;
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
  .home-packages {
         background: #eee;
         margin-top: 100px;
      }

      .heading-title {
         text-align: center;
         margin-bottom: -7rem;
         font-size: 6rem;
         text-transform: uppercase;
         color: #222;
      }

      .home-packages .box-container {
         display: grid;
         /* image in line */
         grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
         gap: 2rem;
         /* gap between image */
         padding: 10rem;
      }

      .home-packages .box-container .box {
         border: .1rem solid black;
         box-shadow: 0 .5rem 1rem rgba(0, 0, 0, 1);
         background: #fff;
      }

      .home-packages .box-container .box:hover .image img {
         transform: scale(1.1);
         /*zoom image*/
      }

      .home-packages .box-container .box .image {
         height: 25rem;
         /*margin-top: 50px;*/
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

         color: #777;
         line-height: 2;
         padding: 1rem 0;
      }
      .r1 
      {
         color:white; 
         font-size:20px;
      }


     /* .pk-btn {
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
      }*/

      hr 
      {
       //  border: 5px black;
         color: black;
         height: 10px;
         border-width: 0;


      }
.img:hover 
 {
    transform: scale(1.5);
 }
 .star:hover 
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

<h1><a href="home1" class="logo" id="travel"><img src="images/s1.jpg" width="40px" height="40px">&nbsp;&nbsp;Travel </a></h1>

     
      
         <nav class="navbar">
            <a href="home1">Home</a>
            <a href="about">About</a>
            <!-- <a href="package11">Package</a> -->
            <!-- <a href="book">book</a> -->
            <a href="service">Sevices</a>
          
          
            @if(session('user'))
            
                <a href="#"><h1 class="uu"> {{ session('user') }} </h1></a>
                 <a href="book_disp1">My Booking</a>
                  <a href="feedback">Feedback</a> 
                 <a href="/">Logout</a>
                 
                 @else
                     
                      <a href="review">Review</a> 
                     <a href="log">Login</a>  
                     

            
           
            @endif
         </nav>


      </section>


<!-- header end -->

<!-- section -->
<div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
   
   
</div>






<div class='main'>
<center><h1 class="my">Review</h1></center>
</div>

<!-- about section starts  -->


<!-- about section ends -->


<!-- reviews section starts  -->

<section class="reviews">
<br>
<br>
   

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">
<hr>
         <div class="swiper-slide slide">
           
               
            <p style="color:white; font-size:20px">
               <div class="img">
               <img src="images/pic-1.png" alt="">
            </div>
                <h3>Mihir Vaghela</h3>
            <span>Traveler</span>
             <div class="stars">
               <div class="star">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
                  <h1 style="color:white; font-size:20px" >Trip to Manali</h1>
         
         <p style="color:white; font-size:20px">
   It was a wonderful experience for us.All arrangements were up to te mark. All hotels and transportation arrangements were excellent.</p>
           
            
         </div>
          </div>

          <hr>

         <div class="swiper-slide slide">
            <div class="img">
            <img src="images/pic-2.png" alt="">
         </div>
            <h3>Pooja Shah</h3>
            <span>Traveler</span>
            <div class="stars">
                 <div class="star">

               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
               <h1 style="color:white; font-size:20px">Trip to Abu</h1>
            </div>
            <p style="color:white; font-size:20px"> 
   We had a great trip in India for 10 days. It can be said that we have received a great services from your team . All hotels were we stayed were very conformtable , clean and had a very good staff. The food we had from hotels was very healthy and delicious in taste.
</p>
<hr>
            
         </div>

        <!--  <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i> -->
              
       
           
         </div>

         <div class="swiper-slide slide">
            <div class="img">
            <img src="images/pic-3.png" alt="">
         </div>
            <h3>Nayan Pitroda</h3>
            <span>Traveler</span>
            <div class="stars">
                 <div class="star">

               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
               <h1 style="color:white; font-size:20px">Trip to Ladakh</h1>
            </div>
            <p style="color:white; font-size:20px">
   We had an excellent trip to ladakh. It was one of our best trips in recent times. This was our first trip from your company. Ww would like to thank you for helping us to  organize this trip for us
</p>
<hr>
          
            
         </div>

         <div class="swiper-slide slide">
            <div class="img">
            <img src="images/pic-4.png" alt="">
         </div>
              <h3>Sneha Patel</h3>
            <span>traveler</span>
            <div class="stars">
                 <div class="star">

               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
               <h1 style="color:white; font-size:20px">Trip to Jaipur</h1>
            </div>
            <p style="color:white; font-size:20px">
   It was a good experience with your company and your team mates. Thank you for organizing a trip on a short notice.Though your company arranged it on short notice but the  arrangements were amazing.We would like to organize another trip from your company for sure.
 </p>
 <hr>
           
         </div>

         <div class="swiper-slide slide">
            <div class="img">
            <img src="images/pic-5.png" alt="">
         </div>
             <h3>john deo</h3>
            <span>traveler</span>
            
            <div class="stars">
                 <div class="star">

               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
               <h1 style="color:white; font-size:20px">Trip to Ooty</h1>
            </div>
            <p style="color:white; font-size:20px">
   Thank you for organizing a trip for us . We will recomend your company's name to others and our relatives for sure.</p>
   <hr>
           
           
         </div>
         <div class="swiper-slide slide">
            <div class="img">
            <img src="images/pic-6.png" alt="">
         </div>
             <h3>Kinjal Kharva</h3>
            <span>traveler</span> 
         <div class="stars">
            <div class="star">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            </div>
             <h1 style="color:white; font-size:20px">Trip to Golden Temple</h1>
            </div>
            <center>
            <p style="color:white; font-size:20px">
   Thank you for organizing a trip to pilgrimage places. It was best experience we had ever. 
</p>
</center>
<hr>
      </div>

   </div>

</section>

<!-- reviews section ends -->
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
               @endif     </div>

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

         <div class="credit"> Developed by <span>Khalas Yash</span> | all rights reserved! </div>

      </section>


      </div>
      </section>
<!-- footer ends -->

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>