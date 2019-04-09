<?php include 'database.php'?>
 
<?php
 
 function generateRandomString($length = 10) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

// create a variable
if(isset($_POST['actionsub']))
{
$id=$_POST['cid'];
$name = $_POST['name'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $date=$_POST['date'];
 $time=$_POST['time'];
 $req=$_POST['req'];
 $desc=$_POST['desc'];
 $radio = $_POST['radio'];
}

$hall_id = null;

if(strcmp($radio, "audi")===0)
{
	$hall_id = "H203";
}
else if(strcmp($radio, "it")===0)
{
	$hall_id = "C203";
}
else if(strcmp($radio, "cs")===0)
{
	$hall_id = "A203";
}
else if(strcmp($radio, "entc")===0)
{
	$hall_id = "D203";
}	
else
{	
	$hall_id = "A120";
}
 
 //echo $id." ".$name." ".$email." ".$phone." ".$date." ".$time." ".$req." ".$desc;
// Execute the query
$appNo = generateRandomString();
 $sql_query = "INSERT INTO reservedhall(appNo,id,name,email,phone,hall_id,seminardate,time,req,description,status)
				VALUES('$appNo','$id','$name','$email','$phone','$hall_id','$date','$time','$req','$desc','Pending')";

if($connect->query($sql_query)===TRUE){
	echo "Record Inserted Successfully";
}
else
{
	echo "Error : ".$sql_query."<br>".$connect->error;
}

$connect->close();
?>