<?php
include('connect1.php');

$username=$_POST['username'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$std=$_POST['std'];


if($password!=$cpassword)
{
	echo '<script> alert("Password should match");
	window.location="../partials/registration1.php";
	 </script>';
}
else {
	move_uploaded_file($tmp_name,"../uploads/$image");
	$sql="insert into `userdata1` (username,mobile,password,photo,standard,status,votes) values ('$username','$mobile','$password','$image','$std',0,0)";

$result=mysqli_query($con,$sql);
if ($result) {
		echo '<script> alert("Successfully Registered");
	window.location="../indexvote.php";
	 </script>';
}
else {
	die(mysqli_error($con));
}

}


?>