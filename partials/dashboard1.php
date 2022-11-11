<?php
session_start();
if(!isset($_SESSION['id']))
{
  header('location:../indexvote.php');
}
$data=$_SESSION['data'];

if($_SESSION['status']==1)
{
  $status='<b style="color: green;">VOTED</b>';
}
else 
{
  $status='<b style="color: red;">NOT VOTED</b>';
}


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <style>
    body {
      background: #343C3B;
      font-family: cursive;
    }

    h1 {
      text-align: center;
      font-family: cursive;
      color: white;
      opacity: 0.6; 
      font-size: 60px;
    }

    nav {
      display: flex;
      height: 60px;
      background: #BCBBBB;
      align-items: center;
      opacity: 0.7;
      border-radius: 10px;
      justify-content: space-between;
      flex-wrap: wrap;
      margin-top: 10px;
    }

    .logo{
      color:#343C3B;
      font-size: 35px;
      font-weight: 600;
      margin: 10px;
      flex-wrap: wrap;
    }

    ul{
      display: flex;
      list-style: none;
      flex-wrap: wrap;
    }

    a{
      color: #343C3B;
      text-decoration: none;
      font-size: 18px;
      font-weight: 500;
      padding: 8px 15px;
      letter-spacing: 1px;
    }

    .info_vtr {
      border: 1px solid black;
      border-radius: 15px;
      background-color: #90EAE4;
      color: #343C3B;
      opacity: 0.4;
      padding: 15px;
    }

    .voter_title {
      text-align: center;
      font-size: 25px;
    }

    .list {
      list-style: none;
      display: flex;
      flex-direction: column;
      font-size: 30px;
      text-decoration: underline;
    }

    img {
      width: 250px;
      height: 250px;
      border-radius: 50%;
    }

    .arng {
      display: flex;
      justify-content: left;
      align-items: center;
      gap: 50px;
    }

    .content1 {
      color: beige;
      opacity: 0.4;
      padding: 10px;
    }

    .try1 {
      display: flex;
      justify-content: space-evenly;
      margin: 40px;
    }

    button {
      font-size: 20px;
      border-radius: 20px;
      opacity: 0.5;
      padding: 10px;
      color: beige;
    }
    
    button:hover {
      opacity: 1;
    }


  </style>
</head>
<body>
  <header>
    <nav>
      <div class="logo">VOTING SYSTEM</div>
      <ul>
        <li><a href="../indexvote.php">BACK</a></li>
        <li><a href="logout1.php">LOGOUT</a></li>
        <li><a href="#">ABOUT</a></li>
      </ul>
    </nav>
   </header>
<h1><u>WELCOME TO DASHBOARD</u></h1>
<!-- Voter profile info start -->
<div class="arng">
 <div class="info_vtr">
    <div class="voter_title">
      <u><h2>VOTER LOGIN INFO:<h2></u>
    </div>  
    <ul class="list">
      <li>Name: <?php echo $data['username'];?></li>
      <li>Number: <?php echo $data['mobile'];?></li>
      <li>Status: <?php echo $status;?></li>
    </ul>
  </div>
  <div><img src="../uploads/<?php echo $data['photo'] ?>" alt="Voter's Image"> </div>
</div>
<!-- Voter profile info end -->
<hr>
<!-- Theory vote information starts -->
<?php

if(isset($_SESSION['theories']))
{
  $theories=$_SESSION['theories'];
  for($i=0;$i<count($theories);$i++)
  { ?>
    <div class="try1">
  <div class="content1">
     <ul class="list">
       <li><h1><?php echo $theories[$i]['username'] ?></h1></li>
       <li>Votes:<b style="color: aqua; opacity: 1;"> <?php echo $theories[$i]['votes'] ?></b></li>
     </ul>
  </div>
  <img src="../uploads/<?php echo $theories[$i]['photo'] ?>" alt="Theory Image">
</div>
<form action="../actions/voting1.php" method="POST">
  <input type="hidden" name="theoryvotes" value="<?php echo $theories[$i]['votes'] ?>">
  <input type="hidden" name="theoryid" value="<?php echo $theories[$i]['id'] ?>">
  <?php
if($_SESSION['status']==1)
{
  ?>
  <button style="background-color: green;">VOTED</button>
  <?php
}
else
{
  ?>
  <button style="background-color: red;" type="submit">VOTE!!</button>
  <?php
}

?>
</form>
<hr>
<?php
  }
}
else
{
  ?>
  <div>
    <p ><h2><u>NOTHING TO VOTE YET!</u></h2></p>
  </div>
  <?php
}

?>

<!-- Theory vote information ends -->
</html>