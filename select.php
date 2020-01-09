<?php
	$dbConn = mysqli_connect('HOST', 'USER', 'PASSWORD', 'DATABASE_NAME');

	mysqli_set_charset($dbConn, 'utf8mb4');
  mysqli_query($dbConn, "SET NAMES 'utf8mb4'");

	// select data from a table
	$sql = 'SELECT * FROM `table_name`';
	if($result = mysqli_query($dbConn, $sql)) {
		while($row = mysqli_fetch_assoc($result)) {
    	// DO SOMETHING HERE WITH $row
    	// e.g. var_dump($row);
    	echo $row['name'] . "\n";
  	}

    mysqli_free_result($result);
	}
