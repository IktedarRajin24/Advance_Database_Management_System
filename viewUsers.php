<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	

<title>customers</title>
</head>
    <body>
        <h1 style='text-align: center'>Customer List</h1>
        <br>
        <br>
        <br>
        <?php

                    session_start();
                    include('db_connect.php');
                    if(!isset($_SESSION['email'])){
                        header("location:login-view.php");

                    }

					$conn = oci_connect('SYSTEM', '1234', 'DESKTOP-NTL5RSH/XE', 'AL32UTF8');
					$sql =  "select customerid, loc, email,pass from Rajin.customer";
					$stid = oci_parse($conn, $sql);
					oci_execute($stid);
					if($stid)
					{
							echo "<table class='table'>";
							echo "<tr>";
							echo "<th> Customer ID</th>";
							echo "<th>Location</th>";
							echo "<th>Email</th>";
							echo "<th>Password</th>";
							echo "</tr>";
							while (oci_fetch($stid))
							{
								echo "<tr>";
								echo "<td>". oci_result($stid, 'CUSTOMERID'). "</td>";
								echo "<td>" . oci_result($stid, 'LOC')."</td>";
								echo "<td>" . oci_result($stid, 'EMAIL')."</td>";
								echo "<td>" . oci_result($stid, 'PASS')."</td>";
								echo "</tr>";
							}	
					echo "</table>";
					
					}


    ?>
    <p><a href="Dashboard.php" class="btn btn-danger" style="text-decoration: none"><-Back</a></p>
    
	
</body>
</html>