
<html>
<head><title>login</title></head>
<body style="background-image:url('img/sad.jpg')"/>
</body>
</head>
<?php
$username=$_POST['user'];
$password=$_POST['pass'];
$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);
$con=mysql_connect("localhost","root","");
mysql_select_db("project");
$result=mysql_query("select * from studyduniya where username='$username' and password='$password'")
or die ("failed to query  database".mysql_error());
$row=mysql_fetch_array($result);
if(mysql_num_rows($result)>0)
{ $row=mysql_fetch_assoc($result);
	$_SESSION['username']=$username;
if(isset($_POST['login'])){
header("location: home.php");
}
}
else 
	{	echo"<center><h1>FAILED TO LOGIN!!!!</h1></center>";
 } 


?>
</html>