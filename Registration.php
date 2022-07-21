<?php
include 'database.php'; 
$message = '';
    $cidErr =  $locErr = $emailErr = $passErr = "";
    $cid = $loc = $email = $pass = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        if(empty($_POST["id"])){
            $cidErr ="ID is required";
        }
        else{
            $cid = test_input($_POST["id"]);
        }
        if (empty($_POST["address"])) {
            $locErr = "Address is required";
        }
        else{
            $loc = test_input($_POST["address"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$loc)) {
                $locErr = "Only letters and white space allowed";
            }        
        }


        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
                $email = "";
            }
        }

        
        if(empty($_POST["password"]))
        {
            $passErr = "Password is required";
        }
        else {
            $pass=test_input($_POST["password"]);
            
        }
        if(empty($cidErr)&& empty($locErr) && empty($emailErr) && empty($passErr))
        {
            $query = oci_parse($conn, "INSERT INTO Rajin.customer(CUSTOMERID, LOC, EMAIL, PASS) values ('$cid','$loc','$email','$pass')");
            $result = oci_execute($query);
            if ($result) {
                $message = "Registration Successful!";
                header("location: login-view.php");   
	        }
            
        }
        else
        {
            $message ="Error";
            
        }
    }

    


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}                 
              
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <style>
    .error {color: #FF0000;}
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
    <br>
    <br>
    <br>
            <div class="container" style="width:40%; background-color: orange; ">
                <form method="post" action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
                    <p style="text-align: center">
                    <?php 
                        if($message){
                            echo $message;
                        }
                    ?>  
                    </p> 
                    <h2 style="text-align:center; color: white">Sign Up</h2>
                    <br>
                    <div class="form-group row">
                        <label for="staticID" class="col-sm-2 col-form-label" style="color: white">ID</label>
                        <div class="col-sm-10">
                        <input type="text" name="id" id="id"class="form-control" id="inputID" placeholder="ID" style="width:75%">
                        <span class="error"> <?php echo'*'. $cidErr;?></span>
                        </div>
                        
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="staticAddress" class="col-sm-2 col-form-label" style="color: white">Address</label>
                        <div class="col-sm-10">
                        <input type="text" name="address" id="address"class="form-control" id="inputAddress" placeholder="Address" style="width:75%">
                        <span class="error"> <?php echo'*'. $locErr;?></span>
                        </div>
                        
                    </div>
                    
                    <br>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label" style="color: white">Email</label>
                        <div class="col-sm-10">
                        <input type="text" name="email" id="email"class="form-control" id="inputEmail" placeholder="E-mail" style="width:75%">
                        <span class="error"> <?php echo'*'. $emailErr;?></span>
                        </div>
                        
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label" style="color: white">Password</label>
                        <div class="col-sm-10">
                        <input type="password" name="password" id="password"class="form-control" id="inputPassword" placeholder="Password" style="width:75%">
                        <span class="error"> <?php echo'*'. $passErr;?></span>
                        </div>
                        
                    </div>
                    <br>
                    <div class="form-group" style="text-align:center">
                        <input type="submit" name="submit" class="btn btn-success" value="Sign Up" >
                    </div>
                    <br>
                    <div class="form-group" style="text-align:center">
                        <p style="color: white">Already Registered? <a href="login-view.php">Login</a></p>
                    </div>
                </form>
                <br> 
            </div>
    </body>

</html>