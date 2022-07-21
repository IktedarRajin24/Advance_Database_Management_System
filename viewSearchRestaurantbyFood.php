<form>
		<?php
        
			$foodName =$_GET["foodName"];
            $conn = oci_connect('SYSTEM', '1234', 'DESKTOP-NTL5RSH/XE', 'AL32UTF8');
			$sql = "select resturant.*, food_name from Rajin.resturant, Rajin.foods where foods.foodid= resturant.foodid and  FOOD_NAME like '$foodName%' ";
            $stid = oci_parse($conn, $sql);
            oci_execute($stid);
			if($stid)
					{
                        echo "<table class='table'>";
                        echo "<tr>";
                        echo "<th> Restaurant Id</th>";
                        echo "<th>Restaurant name</th>";
                        echo "<th>Address</th>";
                        echo "<th>Phone</th>";
                        echo "<th>Food Name</th>";
                        echo "</tr>";
                        while (oci_fetch($stid))
                        {
                            echo "<tr>";
                            echo "<td>". oci_result($stid, 'RESTURANTID'). "</td>";
                            echo "<td>" . oci_result($stid, 'RESTURANT_NAME')."</td>";
                            echo "<td>" . oci_result($stid, 'ADDRESS')."</td>";
                            echo "<td>" . oci_result($stid, 'PHONE')."</td>";
                            echo "<td>" . oci_result($stid, 'FOOD_NAME')."</td>";
                            echo "</tr>";
                        }	
                echo "</table>";
					
					}


		?>
		<br>
	</form>