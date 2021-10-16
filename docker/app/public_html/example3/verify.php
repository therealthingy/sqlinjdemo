<?php
mysql_connect($_ENV["MYSQL_HOST"],$_ENV['MYSQL_USER'],$_ENV['MYSQL_PASSWORD']);
mysql_select_db("example3-db");

$user=$_POST["UserId"];
$pass=$_POST["Password"];
$query=mysql_query("Select * from users where username='$user' and password='$pass';");

if(mysql_num_rows($query)){
	echo "<strong style='color:green;'>Bingo!!! You are logged in as <span style='color:red;'>admin</span> </strong><br><br>";
	$users_data = mysql_query("select * from users;");
	echo "<table border='1'><thead><td>username</td><Td>password</td></thead>";
	while($row = mysql_fetch_array($users_data)) {
		echo "<tr><td>".$row["username"]."</td><td>".$row["password"]."</td></tr>";
	}
	echo "</table>";
}
else{
	echo "<strong style='color:red;'>Invalid Credentials.</strong><br><br>";
}
?>
