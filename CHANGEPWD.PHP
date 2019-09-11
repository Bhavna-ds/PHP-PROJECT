<?php 

if (isset($_POST['submit'])){
//$conn = mysql_connect("localhost","root","");
//mysql_select_db("project",$conn);
$username = $_POST['username'];
$newPassword=$_POST['newPassword'];
$currentPassword=$_POST['currentPassword'];
$confirmPassword=$_POST['confirmPassword'];
$con=mysqli_connect("localhost", "root", "") or die(mysqli_error()); 

mysqli_select_db($con,'project') or die(mysqli_error()); 
    //$pass = $_POST['pass'];
if(count($_POST)>0) {
//if(mysqli_num_rows($query_run)>0)
//{ 
$query="SELECT * FROM studyduniya WHERE username='$username' AND password='$currentPassword'";
$query_run=mysqli_query($con,$query);
$row = mysqli_fetch_assoc($query_run);
 
 if(($currentPassword== $row['password'])&&($newPassword==$confirmPassword))
  { 
 mysqli_query($con,"UPDATE studyduniya SET password='$newPassword' WHERE username='$username'");
	$message = "Password Changed";}

else $message="Current Password or credentials is  not correct";}
else $message= "enter valid email id";

}
?>
<html>
<head>
<title>Change Password</title>
<link rel="stylesheet" type="text/css" href="style2.css" />
<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
	currentPassword.focus();
	document.getElementById("currentPassword").innerHTML = "required";
	output = false;
}
    b
else if(!newPassword.value) {
	newPassword.focus();
	document.getElementById("newPassword").innerHTML = "required";
	output = false;
}
else if(!confirmPassword.value) {    
	confirmPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "required";
	output = false;
}
if(newPassword.value != confirmPassword.value) {
	newPassword.value="";
	confirmPassword.value="";
	newPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "not same";
	output = false;
} 	
return output;
}
</script>
</head>
<body>
<form name="frmChange" method="POST" action="" onSubmit="return validatePassword()">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<center><table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Change Password</td>
</tr>
<tr> <td width="40%"><label>EMAIL</label></td>
<td width="60%"><input type="text" name="username" class="txtField"/><span id="username"  class="required"></span></td>
</tr>
<tr>
<td width="40%"><label>Current Password</label></td>
<td width="60%"><input type="password" name="currentPassword" class="txtField"/><span id="currentPassword"  class="required"></span></td>
</tr>
<tr>
<td><label>New Password</label></td>
<td><input type="password" name="newPassword" class="txtField"/><span id="newPassword" class="required"></span></td>
</tr>
<td><label>Confirm Password</label></td>
<td><input type="password" name="confirmPassword" class="txtField"/><span id="confirmPassword" class="required"></span></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table></center>
</div>
</form>
</body></html>