<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Account Registration</title>
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
			color: #343C3B;
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
        .reg {
        	border: 1px solid black;
        	border-radius: 10px;
        	width: 600px;
        	height: 850px;
        	margin: 60px auto auto auto;
        	opacity: 0.7;
        	background: #BCBBBB;
        	color: #343C3B;
        	font-size: 23px;
        }
        form {
        	margin: 20px;
        }
        input {
        	height: 30px;
        	width: 90%;
        }
        select {
        	width: 90%;
        	height: 40px;
        }
        button {
          height: 40px;
          background-color: gray;
          color: beige;
          margin-left: 20px;
        }
        button:hover {
        	background-color: green;
        }
</style>		
</head>
<body>
	<header>
    <nav>
      <div class="logo">VOTING SYSTEM</div>
      <ul>
        <li><a href="../indexvote.php">LOGIN</a></li>
        <li><a href="">REGISTER</a></li>
        <li><a href="">ABOUT</a></li>
      </ul>
    </nav>
	</header>
	<div class="reg">
		<h1><u>REGISTRATION</u></h1>

		<form action="../actions/register1.php" method="POST" enctype="multipart/form-data">
		    <p>Username: <input type="text" placeholder="Enter your full name" name="username" required="required"></p>
		    <p>Number: <input type="text" placeholder="Enter your phone number" name="mobile" required="required" maxLength="10" minLength="10"></p>
		    <p>Passcode: <input type="password" placeholder="Enter your password" name="password"></p>
		    <p> Confirm Passcode: <input type="password" placeholder="Re-enter your password" name="cpassword"></p>
		    <p> Upload image: <input type="file" name="photo"></p>
		    <p><select name="std">
		    	<option value="theory">Theory</option>
		    	<option value="voter">Voter</option>
		    </select></p>
		    <button type="submit">REGISTER</button>
	    <div style="margin: 20px; font-size: 25px; color: red;">Already registered? If so, go to home to  </br><a style="margin: 20px; font-size: 25px; color: white;" href="../indexvote.php"><u>LOGIN!</u></a></div>
	</div>
        </form>

</body>
</html>