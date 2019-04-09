<?php include 'database.php'?>
 
<?php
 
// create a variable
if(isset($_POST['date']))
{
$id=$_POST['cid'];
 $date=($_POST['date']);
 $time=$_POST['time'];
 $hall_id = $_POST['hall_id'];
}
 
 // echo $hall_id;

 $sql_query = ("SELECT * from reservedhall where (hall_id = '$hall_id') AND (seminardate='$date') AND (time='$time'); ");

// echo $sql_query;
$result =  $connect->query($sql_query);

if($result->num_rows > 0)
{
	echo "Not Available";
}
else
{
	echo "Available";
}
//  $sql_query->bind_param("s",$hall);
//  $hall=$_POST['hall_id'];
//  $sql_query->execute();

// $sql_query->bind_result($result);
// $sql_query->fetch();

// echo $result;


// if(strcmp($, "Reserved")){
// 	echo "Reserved";
// }
// else
// {
// 	echo "Available";
// }

$connect->close();
?>