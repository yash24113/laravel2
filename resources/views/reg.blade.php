<!-- 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register Form</title>
	<style type="text/css">
	
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
        .c1 
        {
            text-decoration:none;
            color:white;
        }


	</style>
</head>
<body>
	<div class="login">
		<form  class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="login-input">
				<input type="text" placeholder="Username" name="username" value="" required>
			</div>
			<div class="login-input">
				<input type="email" placeholder="Email" name="email" value="" required>
			</div>
			<div class="login-input">
				<input type="password" placeholder="Password" name="password" value="" required>
            </div>
			<div class="login-input">
				<button name="submit" class="login-btn"><a href="home" class="c1">Register</a> </button>
			</div>
            <div>
			<p class="login-register-text">Have an account? <a href="login">Login Here</a>.</p>
    </div>
		</form>
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
    height: 700px;
    width: 500px;
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
body 
{
    background-image: url('images/p-2.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}
   .login {
            width: 400px;
            min-height: 500px;
            background: #FFF;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0,0,0,.3);
            padding: 40px 30px;
        }
    .login-input {
            width: 300px;
            height: 50px;
            margin-bottom: 25px;
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
        .login-btn1{
            display: block;
            width: 350px;
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
        .login-btn{
            display: block;
            width: 100%;
            padding: 15px 20px;
            text-align: center;
            border: solid black;
            background: white;
            outline: none;
            border-radius: 30px;
            font-size: 1.2rem;
            color: black;
            cursor: pointer;
            transition: .3s;
            margin-right: 200px;
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
      .c1 
        {
            text-decoration:none;
            color:white;
        }

</style>
<body>
    <center>
        
      
<div class="login">
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])


     <form action="#" method="post">
        
      <p class="login-text" style="font-size: 3rem; font-weight: 800;">Registration</p>
      
        @csrf
        <div class="login-input">
            <input type="text" name="name" placeholder="enter name" required class="login-btn">
            </div><br>
            <div class="login-input">
            <input type="email" name="email" placeholder="enter email" required class="login-btn">
            </div><br>
            <div class="login-input">
          <input type="password" name="password" placeholder="enter password" required class="login-btn">
          </div><br>
            
            <div class="login-input">
               <center><input type="submit"  value="Register" class="login-btn1"></center>
            </div>
            <p class="login-register-text">Have an account? <a href="log" class="a1">Login Here</a>.</p>
     </form>
       <!-- @if($errors->any())
<span style="color:red"><h4>{{$errors->first()}}</h4></span>
@endif -->
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