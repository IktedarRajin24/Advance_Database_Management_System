
<?php

        session_start();
        global $conn;
        $conn = oci_connect('SYSTEM', '1234', 'DESKTOP-NTL5RSH/XE', 'AL32UTF8');
        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $s = oci_parse($conn, "select email,pass from Rajin.customer where email='$email' and pass='$pass'");       
            oci_execute($s);
            $row = oci_fetch_all($s, $res);
            if($row){
                    $_SESSION['email']=$email;
                    header("location: Dashboard.php");
            }else{

                echo "wrong password or username";
            }
        }



     ?>