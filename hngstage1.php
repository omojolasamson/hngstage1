<?php
	define("DB_SERVER", "localhost");
	define("DB_USER", "root");
	define("DB_PASS", "");
	define("DB_NAME", "eepme");

	$dbc = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
	
	
	$query = "SELECT name, email FROM users";
    $data = mysqli_query($dbc, $query);
?>	
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php
			while ($row = mysqli_fetch_array($data)) {
				echo $row['name'] . ' ' . $row['email'] . '<br>';
			}
			mysqli_close($dbc);
		?>
	</body>
</html>