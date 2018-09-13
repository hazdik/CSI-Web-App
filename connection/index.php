<?php
function getconnection()
{
	$connection= mysqli_connect("localhost","root","jaswanth","csidb");
	return $connection;
}
?>