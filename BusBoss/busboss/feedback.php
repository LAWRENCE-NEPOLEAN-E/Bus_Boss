<?php

$name=$_POST['name'];
$name=$_POST['designation'];
$name=$_POST['street'];
$name=$_POST['city'];
$name=$_POST['state'];
$name=$_POST['pincode'];
$name=$_POST['phoneno'];
$name=$_POST['emailid'];
$name=$_POST['feedback'];

//DATABASE CONNECTION

$conn=new mysqli('localhost','root','test');
if($conn->connect_error){
	die('connection Failed:'.$conn->connect_error);
}
else{
	$stmt=$conn->prepare("insert into registration(Name,Designation,street,city,state,pincode,phoneno,emailid,feedback)
				values(?,?,?,?,?,?,?,?,?)";
				
	$stmt->blind_parm("sssssiiss",$name,$designation,$street,$city,$state,$pincode,$phoneno,$emailid,$feedback);
	$stmt->execute();
	echo "Registration Suceessfully.....";
	$stmt->close();
	$conn->close();
?>