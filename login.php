<html>
<head> <title>login page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image:url('img/189.jpg');background-repeat:repeat">
	<div class="header"><center><div style="background:yellow;width:500px">
<marquee><h1 style="font-weight:bold;color:green"> WELCOME TO STUDY DUNIYA</h1></marquee></div></center>
</div>
<?php
if (isset($_SESSION['message']))
	{ echo"<div id='error_msg'>".$_SESSION['message']."</div>";
unset ($_SESSION['message']); }
?>
	 

	</div>
	<div id="frm" style="background:pink">
		<form method="POST">

<p> 
	<strong><label> EMAIL:</label></strong>
	<input type="text" id="user" name="user"/>
</p>
<strong><p> <label> PASSWORD: </label></strong>
	<input type="password" id="pass" name="pass"/>
</p>
<p> <input type="submit" id="btn" value="login" name="login" />
	</p> 
		</form>
		<?php
		$con=mysqli_connect("localhost","root","") or die("unable to connect");
mysqli_select_db($con,'project');
if(isset($_POST['login'])){
$username=$_POST['user'];
$password=$_POST['pass'];
$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);

$query="select * from studyduniya where username='$username' and password='$password'"
or die ("failed to query  database".mysql_error());
$query_run=mysqli_query($con,$query);
if(mysqli_num_rows($query_run)>0)
{ $row=mysqli_fetch_assoc($query_run);
	$_SESSION['username']=$username;
if(isset($_POST['login']))
header("location: home.php");
}

else 
	{	echo'<script type="text/javascript">alert ("invalid or empty credentials")</script>';
}
}
?>
	</body>
	