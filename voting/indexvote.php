<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VOTING SYSTEM</title>
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
			padding: 20px;
      font-size: 70px;
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
        .intro {
        	color: beige;
        	font-family: cursive;
        	font-size: 40px;
        	text-align: center;
        }
        .item1 {
        	border: 1px solid black;
        	border-radius: 10px;
        	background-color: #90EAE4;
        	opacity: 0.4;
        	color: #343C3B;
        	font-size: 25px;
        	margin: 20px;
        	display: inline-block;
        }
        .item2 {
        	border: 1px solid black;
        	border-radius: 10px;
        	background-color: #90EAE4;
        	opacity: 0.4;
        	color: #343C3B;
        	font-size: 25px;
        	margin: 20px;
        	display: inline-block;

        }

        h2 {
        	font-size: 30px;
        	text-align: center;
        }
        .mar {
        	margin: 20px;
        }
        .arrange {
        	width: 900px;
        }
        .log {
        	height: 645px;
        	width: 600px;
            border: 1px solid black;
            border-radius: 10px;
            margin: 20px;
            background: #BCBBBB;
            opacity: 0.7;
            align-items: center;
            color: #343C3B;
        }
        .frmt {
        	display: flex;
        	justify-content: space-between;
        }
        form {
        	margin-left: 20px;
        	width: 100%;
        	font-size: 25px;
        	color: #343C3B;
        }
        input {
        	height: 30px;
        	width: 90%;
        }
        select {
        	height: 30px;
        }
        button {
          background-color: gray;
          color: beige;
          margin-left: 20px;
          height: 40px;
        }
        button:hover {
        	background-color: green;
        }
        .acc-combine {
        	display: flex;
        }
        select {
        	width: 90%;
        	height: 40px;
        }

    </style>
</head>
<body>
	<header>
    <nav>
      <div class="logo">VOTING SYSTEM</div>
      <ul>
        <li><a href="./indexvote.php">LOGIN</a></li>
        <li><a href="./partials/registration1.php">REGISTER</a></li>
        <li><a href="#">ABOUT</a></li>
      </ul>
    </nav>
	</header>

	<h1><u>WHAT TO VOTE?</u></h1>
	<div class="intro">
	In this voting contest, you are requested to choose between two "MODELS OF TIME"	
	</div>
<div class="frmt">
 <div class="arrange">
    <div class="item1">
		<h2><U>ABSOLUTE TIME MODEL</U></h2>
		<div class="mar">Features:</div>
		<ol>
			<li>Frequency of synchronization is periodic.</li>
			<li>Error of timing increases with time during a synchronizing period and increase with synchronization error(hops).</li>
			<li> Needs global refrence timing.</li>
			<li>Scalability depends on the scalability of the synchronized algorithm.</li>
		</ol>
	</div>
         
	<div class="item2">
		<h2><U>RELATIVE TIME MODEL</U></h2>
		<div class="mar">Features:</div>
		<ol>
			<li>Frequency of synchronization occurs only once.</li>
			<li>Error of timing increases with the synchronization error between event source and observer.</li>
			<li>Global refrence timing is not necessary.</li>
			<li>Scalability high as compared to the absoulte time model.</li>
		</ol>
	</div>
 </div>
  <div class="log">
	<h2><u>LOGIN</u></h2>
	<form action="./actions/login1.php" method="POST">
	<p>NAME: <input type="text" name="username" placeholder="Enter your full name" required="required"></p>
	<p>PHONE NUMBER: <input type="text" name="mobile" placeholder="Enter valid number" required="required" maxLength="10" minLength="10"></p>
	<p>PASSCODE: <input type="password" name="password" placeholder="passcode here" required="required"></p>
	<p>USER TYPE: <select name="std"> <option value="theory">Theory</option><option value="voter">Voter</option></select></p>
	<button type="submit">LOGIN</button>
    </form>
<div style="margin: 20px; font-size: 25px; color: red;">Don't have an account? Register first!</div>

	
  </div>
</div>
</body>
</html>