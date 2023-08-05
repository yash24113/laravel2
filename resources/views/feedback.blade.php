 <!DOCTYPE html>
<html>
<head>
<title>Feedback</title>
<link rel="icon" href="images/feedback.jpg">
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <!-- font awesome cdn link  -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
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
  .feed 
      {
         font-size:20px;
         width: px;
      }
      .uu 
{
   width: 30px;
   height: 30px;
   border-radius: 50%;
   margin-top: ;
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


</style>
</head>
<body class="agileits_w3layouts" >
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

<!-- <center style="font-size:50px">
@if($errors->any())
<span style="color:red"><h4>{{$errors->first()}}</h4></span>
@endif
 -->
   </section>

<div class="heading" style="background:url(images/bg2.jpg)">
   
</div>
<div class='main'>
<center><h1 class="my">Feedback</h1></center>
</div>

   <!--   	
    <h1 class="agile_head text-center">Feedback Form</h1> -->
    <div class="feed">
    <div class="w3layouts_main wrap">
	  <h3>Please help us to serve you better by taking a couple of minutes. </h3>
	    <form action="#" method="post" class="agile_form">
       @csrf
		  <h2 style="color:white">How satisfied were you with our Service?</h2>
			 <ul class="agile_info_select">
				 <li><input type="radio" name="view" value="excellent" id="excellent" required> 
				 	  <label for="excellent">Excellent</label>
				      <div class="check w3"></div>
				 </li>
				 <li><input type="radio" name="view" value="good" id="good"> 
					  <label for="good"> Good</label>
				      <div class="check w3ls"></div>
				 </li>
				 <li><input type="radio" name="view" value="neutral" id="neutral">
					 <label for="neutral">Neutral</label>
				     <div class="check wthree"></div>
				 </li>
				 <li><input type="radio" name="view" value="poor" id="poor"> 
					  <label for="poor">Poor</label>
				      <div class="check w3_agileits"></div>
				 </li>
			 </ul>	  
			<h2 style="color:white">If you have specific feedback, please write to us...</h2>
			<textarea placeholder="Additional comments" class="w3l_summary" name="comments"  required></textarea>
			<input type="text"  name="name"  value="{{ session('user') }}"readonly required />
			<input type="email"  name="email" value="{{ session('email') }}"  readonly required/>
			<input type="text" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" placeholder="Your Number " name="num"/>
         <span style="color:red;font-size:10px;">
               @error('num') {{$message}}
               @enderror
            </span>
			<p><center><input type="submit" value="Submit" class="agileinfo" width="500px" /></center></p>
	  </form>
	</div>
</div>
	<div class="agileits_copyright text-center">
			<h1><center><p>Travel © 2023</p></center>
	</div>

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
               @endif
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

         <div class="credit"> Developed by <span>Khalas Yash</span> | all rights reserved! </div>

      </section>


      </div>
      </section>
<!-- footer ends -->

</body>
</html> 

