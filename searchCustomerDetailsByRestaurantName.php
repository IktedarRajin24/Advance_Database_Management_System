<?php
    session_start();
    include('db_connect.php');
    if(!isset($_SESSION['email'])){
        header("location:login-view.php");

    }
	if ($_SERVER['REQUEST_METHOD']== "POST") 
	{
		$restaurantName = $restaurantNameErr = "";
		$restaurantName = $_POST['restaurantName'];
		if (empty($restaurantName)) 
		{
			$restaurantNameErr = "Please insert an appointment number";
		}
		if(empty($searchErr))
		{
			$_SESSION['restaurantName'] = $restaurantName;
			header("Location: ViewCustomerDetailsByRestaurantName.php");
		}
	}

    
	
?>


<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>


    <title>Customer & Order Details</title>
</head>

<body>
    <div class="container">
        <h1 style='text-align: center'>Customer & Order Details</h1>
        <br>
        <br>
        <br>
        <form action="searchCustomerDetailsByRestaurantName.php" method="POST">

            <label><b>Search Restaurant:</b></label>
            <input type="text" name="restaurantName" id="restaurantName" placeholder="Restaurant Name" oninput="showCustomerDetailsByRestaurantName(this.value)">



        </form>
        <br>
        <div id="txtHint">

        </div>

        <br>
        <p><a href="ComplexSearches.php" class="btn btn-danger" style="text-decoration: none">
                <-Back </a>
        </p>
    </div>
    <script>
    function showCustomerDetailsByRestaurantName(str) {
        if (str == "") {
            document.getElementById("txtHint").innerHTML = "";
            return;
        }

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "ViewCustomerDetailsByRestaurantName.php?restaurantName=" + str, true);
        xmlhttp.send();
    }
    </script>



</body>

</html>