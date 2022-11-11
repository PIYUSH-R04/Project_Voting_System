<?php
session_start();
include("connect1.php");


$username=$_POST['username'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$std=$_POST['std'];

$sql="select * from `userdata1` where username='$username' and mobile='$mobile' and password='$password' and standard='$std'";

$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result)>0) {
     $sql="select username,photo,votes,id from `userdata1` where standard='theory'";
     $resulttheory=mysqli_query($con,$sql);
     if (mysqli_num_rows($resulttheory)>0) {
     	$theories=mysqli_fetch_all($resulttheory,MYSQLI_ASSOC);
     	$_SESSION['theories']=$theories;
     }
     $data=mysqli_fetch_array($result);
     $_SESSION['id']=$data['id'];
     $_SESSION['status']=$data['status'];
     $_SESSION['data']=$data;

echo '<script>
	window.location="../partials/dashboard1.php";
	</script>';

}
else{
	echo '<script>
	alert("Invalid Info");
	window.location="../indexvote.php";
	</script>';

}




?>