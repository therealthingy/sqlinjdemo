<?php

	$connection = mysqli_connect($_ENV["MYSQL_HOST"], $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD'], "example1-db");

	if (mysqli_connect_errno($connection))
	{
		die ("Failed to connect to MySQL: <strong>" . mysqli_connect_error() . "</strong>");
	}
?>