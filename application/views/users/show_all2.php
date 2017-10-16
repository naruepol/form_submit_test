<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Show users</title> 
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
</style>       
</head>
<body>
<center><h1><b>Show all</b></h1></center>
	<table style="width:100%">
	  <tr>
	    <th>ID</th>
	    <th>Name</th>		
	    <th>E-mail</th>
	  </tr>
    <?php
    	foreach($users->result() as $user){
    		echo '<tr>';
    		echo '<td align="center">'.$user->id. '</td>';
    		echo '<td>'.$user->name. '</td>';
    		echo'<td>'.$user->email. '</td>';
    		echo '</tr>';
	    }
    ?>
    </table>
</body>
</html>