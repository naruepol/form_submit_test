<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>My View</title>
</head>
<body>
<center><h1><b>Show data from controller</b></h1></center>
	<?php
		foreach($users as $user)
        echo "Name: ".$user."<br>";
	?>
</body>
</html>