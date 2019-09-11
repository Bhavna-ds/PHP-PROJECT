   	

   	<html>
   	<head>
   		<title>upload </title>
   	</head>
   	<body>
   		<form name="form1" method="POST" enctype="multipart/form-data">
UPLOAD FILE<input type="file" name="f"/>
<input type="text" name="t"/>
<input type="submit" name="submit" value ="upload"/>


   		</form>
   	</body>
   	 <?php
    	$filename = $_POST['t'];
   	mysql_connect('localhost','root',"");
   	mysql_select_db("study");
   	if (isset($_POST["submit"])) {
   		$fnm=$_FILES["f"]["name"];
   		$dst="./stdy/".$fnm;
   		move_uploaded_file($_FILES["f"]["tmp_name"], $dst);
        $query="INSERT INTO duni (filename,name,path) VALUES('$filename','$fnm','$dst')";
        $ros=mysql_query($query);
        if ($ros==true) {
        echo "insert data";
        }
        		# code...
   	}
   	?>
   	</html>