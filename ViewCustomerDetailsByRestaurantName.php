<form>
		<?php
        
			$resturant_name =$_GET["restaurantName"];
            $conn = oci_connect('SYSTEM', '1234', 'DESKTOP-NTL5RSH/XE', 'AL32UTF8');
			$sql = "SELECT * FROM Rajin.customer, Rajin.orders, Rajin.Resturant, Rajin.foods where customer.customerID = orders.customerID and  foods.foodID = orders.foodID and foods.foodID = resturant.foodID and resturant_name like '$resturant_name%'";
            $stid = oci_parse($conn, $sql);
            oci_execute($stid);
			if($stid)
					{
                            echo "<table class='table'>";
                            echo "<tr>";
                            echo "<th> Customer ID</th>";
                            echo "<th>Customer Email</th>";
                            echo "<th>Location</th>";
                            echo "<th>Order ID</th>";
                            echo "<th>Order Time</th>";
                            echo "<th>Restaurant Name</th>";
                            echo "<th>Food Name</th>";
                            echo "</tr>";
                            while (oci_fetch($stid))
                            {
                                echo "<tr>";
                                echo "<td>". oci_result($stid, 'CUSTOMERID'). "</td>";
                                echo "<td>" . oci_result($stid, 'EMAIL')."</td>";
                                echo "<td>" . oci_result($stid, 'LOC')."</td>";
                                echo "<td>" . oci_result($stid, 'ORDERID')."</td>";
                                echo "<td>" . oci_result($stid, 'TIMEOFORDER')."</td>";
                                echo "<td>" . oci_result($stid, 'RESTURANT_NAME')."</td>";
                                echo "<td>" . oci_result($stid, 'FOOD_NAME')."</td>";
                                echo "</tr>";
                            }	
                    echo "</table>";
					
					}


		?>
		<br>
		
	</form>