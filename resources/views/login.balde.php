
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Login Form</title>
	<style>
		

        * {
               margin: 0;
               padding: 0;
               box-sizing: border-box;
               font-family: 'Poppins', sans-serif;
        }
           body {
            width: 100%;
            min-height: 100vh;
            background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(images/a.jpg);
            background-position: center;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }
            .login {
            width: 400px;
            min-height: 400px;
            background: #FFF;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0,0,0,.3);
            padding: 40px 30px;
        }

        .login-text{
            color: #111;
            font-weight: 500;
            font-size: 1.1rem;
            text-align: center;
            margin-bottom: 20px;
            display: block;
            text-transform: capitalize;
        }
        .login-input {
            width: 100%;
            height: 50px;
            margin-bottom: 25px;
        }
        input{
            width: 100%;
            height: 100%;
            border: 2px solid #e7e7e7;
            padding: 15px 20px;
            font-size: 1rem;
            border-radius: 30px;
            background: transparent;
            outline: none;
            transition: .3s;
        }   
        .login-btn{
            display: block;
            width: 100%;
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
        .login-register-text {
            color: #111;
            font-weight: 600;
        }
        .login-register-text a {
            text-decoration: none;
            color: #6c5ce7;
        }
        .forgot-btn{
            text-align: left;
        }
        .forgot-btn button {
            border: none;
            background-color: transparent;
            outline: none;
            font-weight: 450;
            cursor: pointer;
        }



	</style>

</head>
<body>
	<div class="login">
		<form action="login" method="post" class="login-email">
        @include('sweetalert::alert')
			<p class="login-text" style="font-size: 3rem; font-weight: 800;">Login</p>
			<div class="login-input">
				<input type="email" placeholder="Email" name="email" value="email" required>
			</div>
			<div class="login-input">
				<input type="password" placeholder="Password" name="password" value="password" required>
			</div>
            <!-- <div class="forgot-btn">
                <p class="login-register-text"><a href="recover.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Forgot Password?</a></p><br>
            </div> -->
			<div class="login-input">
				<input type="submit"  value="insert" class="login-btn">
			</div>
			<!-- <p class="login-register-text">Don't have an account? <a href="register">Register Here</a></p> -->
		<!-- </form>
	</div>
    
   
</body>
</html> -->



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
 <style>
.yash 
{
    height: 400px;
    width: 300px;
    background-color: skyblue;
    color: blue;
    font-size: 50px;
    margin-top: 100px;
     border: solid black;
}
.y1 
{
    margin-bottom: 200px;
    text-decoration: none;
    color: blue;
}
.in 
{
    width: 200px;
      border: solid black;
}
.btn
{
     width: 100px;
     height: 30px;
      border: solid black;
}
.y2
{
    font-size: 20px;
}
.a1 
{
    font-size: 20px;
}

 .login {
            width: 400px;
            min-height: 500px;
            background: #FFF;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0,0,0,.3);
            padding: 40px 30px;
        }

        .login-text{
            color: #111;
            font-weight: 500;
            font-size: 1.1rem;
            text-align: center;
            margin-bottom: 20px;
            display: block;
            text-transform: capitalize;
        }
        .login-input {
            width: 300px;
            height: 50px;
            margin-bottom: 25px;
        }
        input{
            width: 100%;
            height: 100%;
            border: 2px solid #e7e7e7;
            padding: 15px 20px;
            font-size: 1rem;
            border-radius: 30px;
            background: transparent;
            outline: none;
            transition: .3s;
        }   
        .login-btn{
            display: block;
            width: 100%;
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
         .login-register-text {
            color: #111;
            font-weight: 600;
        }
        .login-register-text a {
            text-decoration: none;
            color: #6c5ce7;
        }
body 
{
    background-image: url('images/g-8.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}
</style> 
<body>
    <center>
        
      
    <div class='login'>

     <form action="#" method="post">
        <!-- <a class="y1" href="#">LOGIN</a>
        <p> -->
      
        @csrf
            <!-- <input type="email" name="email" placeholder="enter email" required class="in"><br>
            <input type="password" name="password" placeholder="enter password" required class="in"><br> -->


            <p class="login-text" style="font-size: 3rem; font-weight: 800;">Login</p>
            <div class="login-input">
                <input type="email" placeholder="Email" name="email" value="" required>
            </div><br><br>
            <div class="login-input">
                <input type="password" placeholder="Password" name="password" value="" required>
            </div><br><br>
            <div class="forgot-btn">
                <p class="login-register-text"><a href="login">&nbsp&nbsp&nbspForgot Password?</a></p><br>
            </div>
            <!-- <div class="login-input">
                <input type="submit"  value="insert" class="login-btn">
            </div> -->
            <div class="login-input">
                <input type="submit"  value="Login" class="login-btn">
            </div>
            <p class="login-register-text">Don't have an account? <a href="reg">Register Here</a></p>
          
            
            <!-- <input type="submit" value="Login" class="btn"> -->
            <!-- <p class="y2">Don't have an account? <a href="reg" class="a1">Register Here</a></p> -->
     </form>
</div>
<center>
</body>
</html>













<!-- 
<span style="color:red">
            @error('txtname'){{$message}}@enderror</span>
            <br><br> -->
            <!-- <input type="password" name="txtpassword" placeholder="enter password" required><br><br> -->
            <!-- <input type="email" name="txtemail" placeholder="enter email" required><br><br>
            <input type="number" name="txtnum" placeholder="enter number" required><br><br>
            <input type="date" name="txtdate" required><br><br>
 -->