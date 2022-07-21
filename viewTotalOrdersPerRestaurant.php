<form>
		<?php
        
			$resturant_name =$_GET["restaurantName"];
            $conn = oci_connect('SYSTEM', '1234', 'DESKTOP-NTL5RSH/XE', 'AL32UTF8');
			$sql = "SELECT resturant.resturant_name, count(*) as TOTAL_ORDERS FROM Rajin.customer, Rajin.orders, Rajin.Resturant, Rajin.foods where customer.customerID = orders.customerID and  foods.foodID = orders.foodID and foods.foodID = resturant.foodID and resturant_name like '$resturant_name%' group by resturant.resturant_name
            ";
            $stid = oci_parse($conn, $sql);
            oci_execute($stid);
			if($stid)
					{
                            echo "<table class='table'>";
                            echo "<tr>";
                            echo "<th>Restaurant Name</th>";
                            echo "<th>Total Orders</th>";
                            echo "</tr>";
                            while (oci_fetch($stid))
                            {
                                echo "<tr>";
                                echo "<td>" . oci_result($stid, 'RESTURANT_NAME')."</td>";
                                echo "<td>" . oci_result($stid, 'TOTAL_ORDERS')."</td>";
                                echo "</tr>";
                            }	
                    echo "</table>";
					
					}


		?>
		<br>
		
	</form>