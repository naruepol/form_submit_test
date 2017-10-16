<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Show users</title>
</head>
<body>
<center><h1><b>Show all</b></h1></center>

    <?php
			foreach ($users->result() as $row)
			{
			   echo $row->id."<br>";
			   echo $row->name."<br>";
			   echo $row->email."<br>";
			}
     ?>
</body>
</html>