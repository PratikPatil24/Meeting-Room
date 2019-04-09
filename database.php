<?php
$connect=mysqli_connect('localhost','root','','booking');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
else
{
	//echo "connected";
}
 
?>