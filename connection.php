<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'id18248380_root', 'Webhost@9078','id18248380_participant_details');

// get the post records
$pname = $_POST['pname'];
$clgname = $_POST['clgname'];
$city = $_POST['city'];
$branch = $_POST['branch'];
$tsize = $_POST['tsize'];
$tmembers = $_POST['tmembers'];
$trans = $_POST['trans'];
$ename = $_POST['ename'];


// database insert SQL code
$sql = "INSERT INTO `participant_detail` (`pname`,`clgname`,`city`,`branch`,`tsize`,`tmembers`,`trans`,`ename`) VALUES ('$pname','$clgname','$city','$branch','$tsize','$tmembers','$trans','$ename')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo " mr/miss $pname you have successfully registered";
}else{
    echo "the transaction id is already exist you cant able to register please visit help";
}

?>