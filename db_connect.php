<?php
try {
    $conn = new PDO("oci:dbname=DESKTOP-NTL5RSH/XE", "SYSTEM", "1234");
    $conn->setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
    }
    

?>