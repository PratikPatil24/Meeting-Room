<?php

require "init.php";   //include init.php for connetion

$uname = $_POST['name'];
$ucontact = $_POST['contact'];
$upassword=$_POST['pass'];
$uemail = $_POST['email'];




$sql_query = "insert into sql_project values('$uname','$uemail','$ucontact','$upassword');";  //query to insert data

if(mysqli_query($connection,$sql_query))   //Run The Query
{
	//echo "\nData Inserted";
}
else
{
	//echo "Data Not Inserted";
}

?>