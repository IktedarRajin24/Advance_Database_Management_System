<html>

<head>
    <title>dashboard</title>

    <link rel="stylesheet" href="../css/Login.css">
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
</head>
<br>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="Dashboard.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="viewusers.php">Customer List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="searchUsers.php">Search customeres</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="viewRestaurant.php">Restaurant List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="viewRestaurantsW_food.php">Restaurant List(with
                            food)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="viewFoods.php">Food List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="orderedFoods.php">Order Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="ComplexSearches.php">Search</a>
                    </li>
                    <li class="nav-item ">
                        <a class="btn btn-danger" href="logout.php">Logout</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <div class="container-fluid" style="width: 100%; height: 60%; background-color: orange; ">

        <form method="post" action="Login.php"></form>

        <?php 
                        session_start();
                        if(isset($_SESSION['email'])){
                        echo "<h1 style='text-align: center' > Welcome ".$_SESSION['email']."!</h1>";
                        
                        }
                        else{
                        header("location:login-view.php");
                        }
                    ?>
        </form>
        <br>
    </div>

</body>

</html>