<?php
$conn=oci_connect("SYSTEM","1234","DESKTOP-NTL5RSH/XE");
if (!$conn) {
	$e = oci_error();
	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
?>