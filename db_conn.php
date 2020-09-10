<?php
//connect to mysql
$mysqli = new mysqli('localhost', 'thyvo', '513579', 'thyvo');

if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}
?>