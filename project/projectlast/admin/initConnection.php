<?php
    $host = "127.0.0.1";
    $user = 'root';
    $password = '';
    $database = 'ayniop_db';
		
        $con = mysqli_connect($host, $user, $password, $dbname, $port);
		
        if (mysqli_connect_errno()) {
            die("Connection Failed! Could not connect to the Database!" . mysqli_connect_error());
        }
?>