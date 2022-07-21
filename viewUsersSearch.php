<form>
		<?php
        
			$cid =$_GET["customerID"];
            $conn = oci_connect('SYSTEM', '1234', 'DESKTOP-NTL5RSH/XE', 'AL32UTF8');
			$sql = "SELECT * FROM RaJIN.customer WHERE customerid like '$cid%'";
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
								//SELECT * FROM RaJIN.customer WHERE customerid like '$cid%' 
							}	
					echo "</table>";
					
					}


		?>
		<br>
	</form>

	