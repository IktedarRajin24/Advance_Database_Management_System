<form>
		<?php
        
			$resturant_name =$_GET["restaurantName"];
            $conn = oci_connect('SYSTEM', '1234', 'DESKTOP-NTL5RSH/XE', 'AL32UTF8');
			$sql = "SELECT * FROM RaJIN.resturant WHERE RESTURANT_NAME like '$resturant_name%' ";
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
                            echo "</tr>";
                            while (oci_fetch($stid))
                            {
                                echo "<tr>";
                                echo "<td>". oci_result($stid, 'RESTURANTID'). "</td>";
                                echo "<td>" . oci_result($stid, 'RESTURANT_NAME')."</td>";
                                echo "<td>" . oci_result($stid, 'ADDRESS')."</td>";
                                echo "<td>" . oci_result($stid, 'PHONE')."</td>";
                                echo "</tr>";
                            }	
                    echo "</table>";
					
					}


		?>
		<br>
		
	</form>