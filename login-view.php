<?php
include('Login.php');
?>


<html>
<head>
	<title>Login</title>

	 <link rel="stylesheet" href="../css/Login.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<br>
<br>
<br>
<br>
<br>
    <body>
        
            <div class="container" style="width:40%; background-color: orange; ">
                <form method="post" action="Login.php">
                    <h2 style="text-align:center; color: white">Login</h2>
                    <br>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label" style="color: white">Email</label>
                        <div class="col-sm-10">
                        <input type="text" name="email" id="email"class="form-control" id="inputEmail" placeholder="E-mail" style="width:75%">
                        </div>
                        
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label" style="color: white">Password</label>
                        <div class="col-sm-10">
                        <input type="password" name="pass" id="pass"class="form-control" id="inputPassword" placeholder="Password" style="width:75%">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="checkbox" name="remember" id="remember"class="btn btn-success" value="remember"> <span style="color: white" >Remember me</span>
                    </div>
                    <br>
                    <div class="form-group" style="text-align:center">
                        <input type="submit" name="submit" id="login-btn" class="btn btn-success" value="Login" >
                    </div>
                    <br>
                    <div class="form-group" style="text-align:center">
                        <p style="color: white">Don't have an account? <a href="Registration.php">Sign up</a></p>
                    </div>
                </form>
                <br> 
            </div>

    </body>

</html>