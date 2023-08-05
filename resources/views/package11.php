<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Package</title>
   <link rel="icon" href="images/package.jpg">
    <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" type="text/css" href="style.css">
   <style type="text/css">
      .heading{
   background-size: cover !important;
   background-position: center !important;
   padding-top: 10rem;
   padding-bottom:15rem;
   display: flex;
   align-items: center;
   justify-content: center;
}
.header .navbar a:hover{
   color:lime;
}
.header{
   position: sticky;
   top:0; left:0; right:0;
   /*z-index: 1000;*/
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
  
   text-decoration:none;
}

.header .navbar a{
   font-size: 2rem;
   margin-left: 2rem;
   color:black;
   text-decoration:none;
}

/* .header .navbar a:hover{
   color:#8e44ad;
} */

.heading h1{
   font-size: 10rem;
   text-transform: uppercase;
   color:lime;
   text-shadow: var(--text-shadow);
}
.packages .box-container{
  display: flex;
  flex-wrap: wrap;
  gap:2rem;
  padding: 10rem;
}

.packages .box-container .box{
  flex:1 1 31rem;
  border-radius: .5rem;
  overflow: hidden;
  box-shadow: 0 1rem 2rem rgba(0,0,0,.1);
}

.packages .box-container .box img{
  height: 25rem;
  width:100%;
  object-fit: cover;
}

.packages .box-container .box .content{
  padding:2rem;
}

.packages .box-container .box .content h3{
  font-size:2rem;
  color:#333;
}

.packages .box-container .box .content h3 i{
  color:var(--orange);
}

.packages .box-container .box .content p{
  font-size:1.7rem;
  color:#666;
  padding:1rem 0;
}

.packages .box-container .box .content .stars i{
  font-size:1.7rem;
  color:orange;
}

.packages .box-container .box .content .price{
  font-size: 2rem;
  color:#333;
  padding-top: 1rem;
}

.packages .box-container .box .content .price span{
  color:#666;
  font-size: 1.5rem;
  text-decoration: line-through;
}
.p-btn{
   display: inline-block;
   background: black;
   margin-top: 1rem;
   color:white;
   font-size: 1.7rem;
   padding:1rem 3rem;
   cursor: pointer;
   text-decoration:none;
}

.p-btn:hover{
   background: purple;
}
.a 
{
    text-decoration:none;
}
}
   </style>
</head>

<body>
<!-- header section starts  -->

<section class="header">

         <a href="home" class="logo" id="travel">Travel</a>
         <h3 class="search"><input type="text" placeholder="Search here..." name="yash">
      
      <button type="submit"><i class="fa fa-search"></i></button></h3>
      
         <nav class="navbar">
            <a href="home">Home</a>
            <a href="about">About</a>
            <!-- <a href="package11">Package</a> -->
            <!-- <a href="book">book</a> -->
            <a href="gallery">Sevices</a>
            <a href="feedback">Feedback</a>
            <a href="logout">Logout</a>
         </nav>


      </section>

<!-- header end -->

<!-- section -->
<div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
   <h1>package</h1>
</div>

<!-- section -->


<!-- packages section starts  -->

<section class="packages">

   <h1 class="heading-title">Top destinations</h1>

   <div class="box-container">

        <div class="box">
            <img src="images/img-1.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Taj Mahal </h3>
                <p>Taj Mahal is famous for Own beauty and one of <br>the wonders of the world.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $100.00 <span>$150.00</span> </div>
                <a href="book" class="p-btn">Book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/img-2.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Hawaii </h3>
                <p>Hawaii is a group of volcanic islands in the <br>central Pacific Ocean. </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $50.00 <span>$120.00</span> </div>
                <a href="#" class="p-btn">Book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/img-3.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Sydney </h3>
                <p>A city of iconic attractions and brilliant beaches,<br> Sydney is a destination you'll never forget.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$130.00</span> </div>
                <a href="#" class="p-btn">Book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/img-4.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Japan </h3>
                <p>Japan is known for everything from onsen <br>hot springs and kabuki baths</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $200.00 <span>$250.00</span> </div>
                <a href="#" class="p-btn">Book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/img-5.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Tokyo </h3>
                <p>Tokyo is known for iconic landmarks like the Tokyo <br>Skytree and Shibuya Crossing.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $150.00 <span>$180.00</span> </div>
                <a href="#" class="p-btn">Book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/img-6.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Ireland </h3>
                <p>The Emerald island. The first thing Ireland is famous <br>for is the island itself and its shades of green! </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $160.00 <span>$200.00</span> </div>
                <a href="#" class="p-btn">Book now</a>
            </div>
        </div>



         <div class="box">
            <img src="images/p-1.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Mumbai</h3>
                <p>Mumbai, previously known as Bombay is one of the most <br>populous and biggest cities of Maharashtra.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $70.00 <span>$100.00</span> </div>
                <a href="#" class="p-btn">Book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-2.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> New zealand </h3>
                <p>New Zealand is a country of stunning and natural<br>beauty:jagged mountains, pristine trout-filled lakes.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $180.00 <span>$240.00</span> </div>
                <a href="#" class="p-btn">Book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-3.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Dubai </h3>
                <p>Dubai (دبي) is one of the seven emirates that make up <br>the United Arab Emirates. With shape like a slant rectangle,</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $100.00 <span>$120.00</span> </div>
                <a href="#" class="p-btn">Book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-4.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Paris </h3>
                <p>Paris is one of the most beautiful cities.It has <br>a reputation of being a romantic and cultural city.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $130.00 <span>$190.00</span> </div>
                <a href="#" class="p-btn">Book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-5.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Tokyo </h3>
                <p>Tokyo is known for iconic landmarks like the Tokyo <br>Skytree and Shibuya Crossing.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $60.00 <span>$100.00</span> </div>
                <a href="#" class="p-btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-6.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Eygpt </h3>
                <p>Egypt is very famous for its ancient civilization and the <br>monuments of the majestic pharaohs,</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $80.00 <span>$130.00</span> </div>
                <a href="#" class="p-btn"Bbook now</a>
            </div>
        </div>
    </div>

</section>

<!-- packages section ends -->
<!-- footer starts -->
<section class="footer">
         <div class="box-container">
            <div class="box">
               <h3>Quick links</h3>
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

         <div class="credit"> created by <span>Khalas Yash</span> | all rights reserved! </div>

      </section>


      </div>
      </section>
<!-- footer ends -->
</body>
</html>