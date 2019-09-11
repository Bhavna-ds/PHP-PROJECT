<?php
session_start();
    mysql_connect('localhost','root',"");
    mysql_select_db("study");
/*$username=$_POST['user'];
$password=$_POST['pass'];
$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);
mysql_connect("localhost","root","");
mysql_select_db("project");
$result=mysql_query("select * from studyduniya where username='$username' and password='$password'");
$row=mysql_fetch_array($result);*/
?>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>study duniya</title>
<link rel="stylesheet" type="text/css" href="style1.css";
</head>
<body  style="height:100%;width:100%;background-image:url('img/books.jpg')"><marquee><p style="color:blue;font-weight:bold;direction:ltr;background:yellow">
    A PLACE WHERE THE EDUCATION SHINES</p></marquee> 
<div id="menu" style="background:black;height:30px;width:500px">
    <a href="aboutus.php" style="color:white"/> ABOUT US|</a>
	<a href="contactus.php" style="color:white">CONTACT US|</a>
	 <a href="logout.php"style="color:white">LOGOUT|</a>  
<a href="changepwd.php" style="color:white">CHANGE PASSWORD</a>
		</div>
		<div style="margin-top: 30px;width:100%;background:green"> <img src="img/gate.jpg" height="300x" width="300px"/> <img src="img/apj.jpg" style="height:300px;width:500px;margin-left:130px"/>
          <img src="img/gate2.jpg" style="margin-right:180px;margin-top:30px;width:200px"/>
  <a href="wsd.php"><h3> WHY STUDY DUNIYA?</H3></a>
			<br>

    </div>
          <div style=" border: 4px solid red; padding:10px;margin-top:50px;margin-left:600px;width:360px;background:rgb(0,255,0) ;border-radius:25px ;height:300px">
   <marquee direction="up">   <h3 style="color:purple; font-weight-bold;font-style:italic"> <ul><li>RANKED AS N0.1 EDUCATIONAL SITE BY LIMCA BOOK OF RECORD</li>
     <br/> <li>RANKED AS THE MOST FRUITFUL WEBSITE BY INDIA TODAY</li>
        <br/>
        <li> RANKED AS MOST VOTED SITE BY DAINIK JAAGRAN</li><br/>
<li> AWARDED AS TOP NOTES PROVIDING SITE</li></ul></marquee>
    </div>
           
<div style=" border: 4px solid red; padding: 10px;margin-left:30px;margin-top:30px;width:22%;background:rgb(192,192,192);border-radius:25px ">
       <div style="background:yellow;width:100%;height:40px;background:yellow"> <center> <p style="font-weight:bold;color:solid black";>WEEKLY ADDITION</center></div>
    
<marquee direction="up"><center><p style="color:green;font-style:bold">COMPUTER ORGANISATION AND ARCHITECTURE</p>
<center><p style="color:green;font-style:bold">RELATIONAL DATABASE MGMT SYSTEM</p>
    <center><p style="color:green;font-style:bold">DISCRETE MATHEMATICS</p>
        <center><p style="color:green;font-style:bold">MICROPROCESSOR</p>
            <center><p style="color:green;font-style:bold">OPERATING SYSTEM</p></center></marquee>
    </div></div>

<center><div style="height:300px;width:500px;margin-top:1px;margin-left:200px;background-color:pink">
		<h1>HOME</h1>
		<h2>WELCOME USER</h2>
		<img src="img/456.jpg"/>
</div></center>
<div style=" border: 4px solid red; padding:10px;margin-left:30px;margin-top:0px;width:22%;background:gray;border-radius:25px ">

<center><p style="color:blue;font-weight:bold">"I OWE MY SUCCESS TO STUDY DUNIYA FOR HELPING ME IN MY PREPARATIONS.
 FOR APPLYING SUCH A GOOD  NOTES."</p><h3>
ANU JINDAL (AIR-40)</h3>
</center>

</div>
<center><div class="header" style="background-color:orange; height:150px;width:500px;margin-top:50px;margin-left:130px">
	<h1 style="font-style:bold;color:brown;font-family:georgia">HELLO USER</h1>

<i> <h3 style="color:purple"><a href="query.php">For any query,click here</a></h3>
<h2> Your query is most valuable to us</h2></i> 
</div></center>
<?php
if (isset($_SESSION['message']))
	{ echo"<div id='error_msg'>".$_SESSION['message']."</div>";
unset ($_SESSION['message']); }
?>
<head>
<link rel="stylesheet" href="style4.css" type="text/css" />
</head>

<div id="body" >
 <table width="80%" border="1" style="background:#7FFFD4">
    <tr>
    
    </tr>
    <tr>
    <td style="color:brown;font-weight:bold;background:
#DEB887">File Name</td>
    <td style="color:brown;font-weight:bold;background:
#DEB887">File Type</td>
    <td style="color:brown;font-weight:bold;background:
#DEB887">File Size(KB)</td>
    <td style="color:brown;font-weight:bold;background:
#DEB887">View</td>
    </tr>
    <?php
 $sql="SELECT * FROM duni";
 $result_set=mysql_query($sql);
 while($row=mysql_fetch_array($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['path'] ?></td>
         <td><?php echo $row['filename'] ?></td>
        <td><a href="stdy/<?php echo $row['name'] ?>" target="_blank">view file</a></td>
		  <td><a href='download.php?dow=$row['path']'>download</a>

        </tr>
        <?php
 }
 ?>
    </table>
    
</div>
</body>
</html>

</body>
</html>