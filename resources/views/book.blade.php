<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Book Now</title>
   <link rel="icon" href="images/book.jpg">
  
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="style.css">

   <style type="text/css">
        .uu 
{
   width: 30px;
   height: 30px;
   border-radius: 50%;
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
	 .header .navbar a:hover{
   color:lime;
}
   *{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
   text-transform: capitalize;
}

.heading{
   background-size: cover !important;
   background-position: center !important;
   padding-top: 10rem;
   padding-bottom:15rem;
   display: flex;
   align-items: center;
   justify-content: center;
}
.header{
   position: fixed;
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
   font-family: sans-serif;
   
   color:black;
   text-decoration:none;
}


/* .header .navbar a:hover{
   color:#8e44ad;
} */

.heading h1{
   font-size: 50px;
   text-transform: uppercase;
   color:lime;
   text-shadow: var(--text-shadow);
}
      #travel {
         text-decoration: none;
      }
      .divnavbar{
         margin-right: 140px;
      }

      /* .agileits_w3layouts {
	background:url(../images/bg2.jpg); 
	background-size: ;
	background-attachment: ;
} */
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

.booking .book-form .flex .inputBox{
   flex:1 1 51rem;
   height: 50px;
   width: 50px;
}

.booking .book-form .flex .inputBox input{
   width: 100%;
   padding:1.2rem 1.4rem;
   font-size: 1.6rem;
   color:var(--light-black);
   text-transform: none;
   margin-top: 1.5rem;
   border:red;
}

.booking .book-form .flex .inputBox input:focus{
   background: red;
   color:lime;
}

.booking .book-form .flex .inputBox input:focus::placeholder{
   color:var(--light-white);
}

.booking .book-form .flex .inputBox span{
   font-size: 1.5rem;
   color:red;
}

.booking .book-form .btn{
   margin-top: 2rem;
}
body{
   background-color:skyblue;
}
.b1
{
   font-size:50px;
   color:lime
}
.f1
{
   color:blue;
   font-size:30px;
}
.main{
   background-color:white;
   width:100%;
   height:100px;
}
.login-btn{
            display: block;
            width: 10%;
            padding: 15px 20px;
            text-align: center;
            border: none;
            background: #a29bfe;
            outline: none;
            border-radius: 30px;
            font-size: 1.2rem;
            color: #FFF;
            cursor: pointer;
            transition: .3s;
        }

        .login-btn:hover {
            transform: translateY(-5px);
            background: #6c5ce7;
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
 .b  
 {
    height: 30px;
    width: 200px;
    padding-left: 15px;
    border: 2px solid;
    position: sticky;
 }
   </style>
 
 }

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

<!-- header section ends -->
 @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])


<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
  
</div>
<div class='main'>
<center><h1 class="my">Book Now</h1></center>
</div>
<!-- booking section starts  -->

<section class="booking">

   <center><h1 class="b1">Book your trip!</h1>

         
   <form class="f1" action="book" method="post">
      @csrf
      <div class="flex">
         <div class="inputBox">
            <span>Passenger name </span>
            <input type="text" placeholder="enter your name" name="name" value="{{ session('user') }}"readonly required class="b">
         </div><br>
         <div class="inputBox">
            <span>email </span>           &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
            <input type="email" placeholder="enter your email" name="email" value="{{ session('email') }}"readonly required class="b">
         </div><br>
         <div class="inputBox">
            <span>phone </span>           &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
            <input type="text" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" placeholder="enter your number" name="phone" class="b"><br/>
            <span style="color:red;font-size:20px;">
               @error('phone') {{$message}}
               @enderror
            </span>
         </div><br>
         <div class="inputBox">
            <span>address </span>
           &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input type="text" placeholder="enter your address" name="address" required class="b">
         </div><br>
         <div class="inputBox">
            <span>where to </span>           &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
            <input type="text" placeholder="place you want to visit" name="location" required value="{{Session::get('package')}}" readonly class="b">
         </div><br>
         <div class="inputBox">
            <span>Price</span>           &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;           &nbsp; &nbsp;&nbsp;
            <input type="text" placeholder="place you want to visit" name="price" required value="{{Session::get('price')}}" readonly class="b">
         </div><br>
         <div class="inputBox">
            <span>how many Passanger </span>
            <input type="number" placeholder="number of Passanger" name="guests" required min="1" class="b">
         </div><br>
         <div class="inputBox">
            <span>arrivals </span> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
          
         <select name="arrivals" required class="b">
             <option>-- select --</option>
         <option>2023-05-01</option>
         <option>2023-05-02</option>
         <option>2023-05-03</option>
         <option>2023-05-04</option>
         <option>2023-05-05</option>
         <option>2023-05-06</option>
         <option>2023-05-07</option>
         <option>2023-05-08</option>
         <option>2023-05-09</option>
         <option>2023-05-10</option>
         <option>2023-05-11</option>
         <option>2023-05-12</option>
         <option>2023-05-13</option>
         <option>2023-05-14</option>
         <option>2023-05-15</option>
         <option>2023-05-16</option>
         <option>2023-05-17</option>
         <option>2023-05-18</option>
         <option>2023-05-19</option>
         <option>2023-05-20</option>
         <option>2023-05-21</option>
         <option>2023-05-22</option>
         <option>2023-05-23</option>
         <option>2023-05-24</option>
         <option>2023-05-25</option>
         <option>2023-05-26</option>
         <option>2023-05-27</option>
         <option>2023-05-28</option>
         <option>2023-05-29</option>
         <option>2023-05-30</option>
         <option>2023-05-31</option>
      </select>
         </div><br>
         <div class="inputBox">
            <span>leaving </span> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
            <input type="date" name="leaving"  min="<?php echo date('Y-m-d'); ?>"  required class="b">
         </div>
      </div><br><br>
      
     

    <!--   <div class="login-input">
            <button name="reset" class="login-btn">Reset</button>
         </div> -->
<br>
      <div class="login-input">
				<button name="submit" class="login-btn" class="b">Submit</button>
			</div>

   </form>
   
</section>
<br><br><br>
<!-- booking section ends -->

<!-- footer section starts  -->

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

         <div class="credit"> created by <span>Khalas Yash</span> | all rights reserved! </div>

      </section>


      </div>
      </section>
<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>