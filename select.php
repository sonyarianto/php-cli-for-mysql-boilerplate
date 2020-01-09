<?php
	$dbConn = mysqli_connect('HOST', 'USER', 'PASSWORD', 'DATABASE_NAME');

	mysqli_set_charset($dbConn, 'utf8mb4');
  	mysqli_query($dbConn, "SET NAMES 'utf8mb4'");

	// select data from a table (loop)
	$sql = 'SELECT * FROM `table_name`';
	if($result = mysqli_query($dbConn, $sql)) {
		while($row = mysqli_fetch_assoc($result)) {
    	// DO SOMETHING HERE WITH $row
    	// e.g. var_dump($row);
    	echo $row['name'] . "\n";
  		}

    	mysqli_free_result($result);
	}

	mysql_close($dbConn);

	// select data from a table (non-loop)
	// if($result = mysqli_query($dbConn, $sql)) {
	// 	if(mysqli_num_rows($result) > 0) {
	// 		mysqli_data_seek($result, 0);
	        
	// 		$row = mysqli_fetch_assoc($result);

	// 		$name = $row['name'];
	        
	// 		mysqli_free_result($result);
	// 	}
	// }

	// mysqli_close($dbConn);