<?php

	$NID = $_GET["NID"];

	$VACCINE_DATE_1 = $_GET["VACCINE_DATE_1"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO vaccine_registration VALUES ( '','', '$NID', '$VACCINE_DATE_1' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> f0 = $NID <br> f1 = $VACCINE_DATE_1";



	echo "<p><a href=read.php>READ all records</a>";

?>