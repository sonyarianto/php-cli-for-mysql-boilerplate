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

	mysqli_close($dbConn);

	//////////////////////////////////////////////////////////

	// select data from a table (non-loop)
	// $sql = 'SELECT * FROM `table_name`';
	// if($result = mysqli_query($dbConn, $sql)) {
	// 	if(mysqli_num_rows($result) > 0) {
	// 		mysqli_data_seek($result, 0);
	        
	// 		$row = mysqli_fetch_assoc($result);

	// 		$name = $row['name'];
	        
	// 		mysqli_free_result($result);
	// 	}
	// }

	// mysqli_close($dbConn);

	//////////////////////////////////////////////////////////

	// select data from a table using prepared statement (loop)
	// $preparedStatement = mysqli_prepare($dbConn, 'SELECT * FROM `table_name` WHERE `id` = ? AND `name` = ?');
	
	// mysqli_stmt_bind_param($preparedStatement, 'is', $id, $name);
	
	// $executeStatus = mysqli_stmt_execute($preparedStatement);
	// if($executeStatus) {
	// 	$result = mysqli_stmt_get_result($preparedStatement);
			
	// 	while($row = mysqli_fetch_assoc($result)) {
	// 		// DO SOMETHING HERE WITH $row
	// 		// e.g. var_dump($row);

	// 		echo $row['name'] . "\n";
	// 	}
		
	// 	mysqli_free_result($result);
	// }

	// mysqli_stmt_close($preparedStatement);

	// mysqli_close($dbConn);

	//////////////////////////////////////////////////////////

	// select data from a table using prepared statement (non-loop)
	// $preparedStatement = mysqli_prepare($dbConn, 'SELECT * FROM `table_name` WHERE `id` = ? AND `name` = ?');
	
	// mysqli_stmt_bind_param($preparedStatement, 'is', $id, $name);
	
	// $executeStatus = mysqli_stmt_execute($preparedStatement);
	// if($executeStatus) {
	// 	$result = mysqli_stmt_get_result($preparedStatement);
			
	// 	if($result = mysqli_query($dbConn, $sql)) {
	// 		if(mysqli_num_rows($result) > 0) {
	// 			mysqli_data_seek($result, 0);
		        
	// 			$row = mysqli_fetch_assoc($result);

	// 			$name = $row['name'];
		        
	// 			mysqli_free_result($result);
	// 		}
	// 	}
		
	// 	mysqli_free_result($result);
	// }

	// mysqli_stmt_close($preparedStatement);

	// mysqli_close($dbConn);