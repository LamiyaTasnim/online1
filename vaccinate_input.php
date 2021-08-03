<?php

	$NID = $_GET["NID"];
	$NO = $_GET["ID"];

	$VACCINE_DATE_1 = $_GET["VACCINE_DATE_1"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");

		$NO = ID("0");

		if ($NO < "0") {
		  echo mysqli_query( $connect, "INSERT INTO vaccine_registration VALUES ( '','$VACCINE_DATE_2', '$NID', '' )" )	
		}
	mysqli_query( $connect, "INSERT INTO vaccine_registration VALUES ( '','', '$NID', '$VACCINE_DATE_1' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> NID = $NID <br>  VACCINE_DATE_1= $VACCINE_DATE_1 <br> VACCINE_DATE_2= $VACCINE_DATE_2";



	echo "<p><a href=read.php>READ all records</a>";

?>