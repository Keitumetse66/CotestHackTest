<?php
require_once('config.php');

?>

<html>
<head>
        
<meta charset="=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<style>

body
{
font-family :Arial;
background-image: url("swaziland2.jpg");
}

form{ 
	border: 10px solid #f1f1f1;
	background-color: grey;
	margin-left: 35%;
	margin-right: 25%;
	
}

input[type=text], input[type=password]
{
	width: 30%;
	padding: 12px 20px;
	margin: 18px 0;
	display: inline-block;
	border: 1px solid #ccc;
	box-sizing:border-box;
}

button{
	background-color:#4CAF50;
	color: white;
	padding:14px 20px;
	margin: 8px;
	border: none;
	cursor: pointer;
	width:30%
}

button:hover{
	opacity: 0.8;
}

.cancelbtn{
	width:auto;
	padding: 10px, 18px;
	background-color: #f44336;
}

img.avatar{
	width:15%;
	border-radius: 25%;
	margin-left: 25%;
}

.container{
	padding:16px;
}

span.psw{
	float: right;
	padding-top:16px;
}

@media screen and (max-width:300px){
	.col-25,.col-75.input[type=submit]{
	display: block;
	float: none;
		}
	}
	
.cancelbtn{
	width:25%;
}


</style>
</head>
<body>
<button style="width:7%" onclick="goBack()">Go Back</button>



<h2 style="text-align:center; font-size:30px">Login Form</h2>
<form action="login.php" method="post">
	<div class="imgcontainer">
	<img src="./images/avatar.jpg" alt="Avatar" class="avatar">
	</div>

	<div class="container">
	<label for="uname"><b>Username</b></label>
	<input type="text" placeholder="Enter username" name="username" id="uname" required>
	<br>

	<label for="password"><b>Password</b></label>
	<input type="text" placeholder="Enter password" name="psw" id="psw" required>
	<br>

	<button type="submit" name="login">Login</button>
	<label>
	<input type="checkbox" checked="checked" name="remember"> Remember me</label>
	</div>

	<div class="container" style="background-color:#f1f1f1">
	<button type="button" class="cancelbtn">Cancel</button>
	<span class ="psw"> Forgot <a href="#">password?</a></span>
	</div>
</form>

<script>
	function goBack(){
	window.history.back();
	}
</script>
</body>
</html>