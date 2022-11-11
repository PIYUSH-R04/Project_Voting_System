<?php
session_start();
include('connect1.php');

$votes=$_POST['theoryvotes'];
$totalvotes=$votes+1;

$tid=$_POST['theoryid'];
$uid=$_SESSION['id'];

$updatevotes=mysqli_query($con,"update `userdata1` set votes='$totalvotes' where id='$tid'");

$updatestatus=mysqli_query($con,"update `userdata1` set status=1 where id='$uid'");

if($updatevotes and $updatestatus)
{
  $gettheories=mysqli_query($con,"Select username,photo,votes,id from `userdata1` where standard='theory'");
  $theories=mysqli_fetch_all($gettheories,MYSQLI_ASSOC);
  $_SESSION['theories']=$theories;
  $_SESSION['status']=1;
  	echo '<script>
    alert("You have successfully voted!!");
    window.location="../partials/dashboard1.php";

	</script>';

}
else
{
	echo '<script>
    alert("You did something wrong!!Re-evaluate yourself!!");
    window.location="../partials/dashboard1.php";

	</script>';
}

?>