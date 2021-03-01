<?php
require_once('config.php');

?>

<html>
<head>
        
<meta charset="=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<style>

body{
	font-family :Arial;
	background-image: linear-gradient(to right top, #65c83a, #88cb43, #a4ce4f, #bbd25d, #d0d56e, #d9d773, #e2d878, #ebda7d, #efda76, #f3da6e, #f7d967, #fbd95f);
}

*{
box-sizing: border-box;
}

.container{
padding:12px;
background-image: linear-gradient(to left bottom, #d16ba5, #ea7794, #f88983, #fca078, #f7b976, #f5c476, #f1cf78, #ebda7d, #efda76, #f3da6e, #f7d967, #fbd95f);
margin-left: 25%;
margin-right: 25%;
margin-top: 50px;
}

input[type=text]
{
	width: 50%;
	padding: 15px;
	margin: 8px 22px 10px;
	display: inline-block;
	border: none;
	background:#f1f1f1;
	border-radius:3px;
}

input[type=email] 
{
	width: 50%;
	padding: 15px;
	margin: 8px 55px 10px;
	display: inline-block;
	border: none;
	background:#f1f1f1;
	border-radius:3px;
}

input[type=password]
{
	width: 50%;
	padding: 15px;
	margin: 8px 22px 10px;
	display: inline-block;
	border: none;
	background:#f1f1f1;
	border-radius:3px;
}

input[type=text]:focus, 
input[type=password]:focus, input[type=email]:focus{
	background-color:#ddd;
	outline:none;
	}


.registerbtn{
	background-color:#4CAF50;
	color:white;
	padding:15px 20px;
	margin:8px 0;
	border:none;
	cursor:pointer;
	width:50%;
	opacity:0.9;
	}

.goBack {
	background-color:#4CAF50;
	color:white;
	padding:15px 20px;
	margin:8px 0;
	border:none;
	cursor:pointer;
	width:130px;
	opacity:0.9;
}
	
.registerbtn:hover{
	opacity: 1;
	}
	
a {
	color: blue;
	}
	
.signin{
	background-color:#f1f1f1;
	text-align:center;
	}
	
</style>
</head>
	
<body>
<button onclick="goBack()" class="goBack">Go Back</button>


<form action="registration.php" method="post">
	
	<div class="container">
		<h1 style="text-align:center">Register</h1>
		<p>Please fill in this form to create an account.</p>
		<hr>
		<label for="firstname"><b>Firstname</b></label>
		<input type="text" placeholder="Enter firstname" name="firstname" id="firstname" required>

		<br>
		<label for="lastname"><b>Lastname</b></label>
		<input type="text" placeholder="Enter lastname" name="lastname" id="lastname" required>

		<br>
		<label for="username"><b>Username</b></label>
		<input type="text" placeholder="Enter username" name="username" id="username" required>

		<br>
		<label for="email"><b>Email</b></label>
		<input type="email" placeholder="Enter email" name="email" id="email" required>

		<br>
		<label for="password"><b>Password</b></label>
		<input type="password" placeholder="Enter password" name="psw" id="psw" required>

		<br>
		<label for="password"><b>Repeat password</b></label>
		<input type="password" placeholder="Repeat password" name="psw_repeat" id="psw-repeat" required>
		<p>By creating an account you agree to our <a href="#">Terms and Conditions</a>.</p>
		<br>
		<hr>
		<button type="Submit" class="registerbtn" name="create">Register</button>
		</div>

		<div class="container signin">
		<p>Already have an account?<a href="login.php">Sign in</a>.</p>
		</div>
</div>

</form>

<script>
	function goBack(){
	window.history.back();
	}
</script>




</body>
</html>