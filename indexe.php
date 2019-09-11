<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "study";
mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
mysql_select_db($dbname) or die('database selection problem');
if(isset($_POST['btn-upload']))
{    
     
 $file = $_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="stdy/";
 
 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="INSERT INTO duniya(file,type,size) VALUES('$final_file','$file_type','$new_size')";
  mysql_query($sql);
  
  echo"successfully uploaded";
        
        
 }
 else
 {
  
  echo'error while uploading file';
 }
}
?>
 
<html>
<head>
<title>File Uploading With PHP and MySql</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
<label>File Uploading With PHP and MySql</label>
</div>
<div id="body">
 <form method="post" enctype="multipart/form-data">
 <input type="file" name="file" />
 <button type="submit" name="btn-upload">upload</button>
 </form>
    <br /><br />
    <?php
 if(isset($_GET['success']))
 {
        echo"File Uploaded Successfully </label>";
      
 }
 else if(isset($_GET['fail']))
 {
        echo"Problem While File Uploading !";
        
 }
 else
 {
  
        echo"Try to upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...)</label>";
        
 }
 ?>
</div>
<div id="footer">
<label>By <a href="http://cleartuts.blogspot.com">cleartuts.blogspot.com</a></label>
</div>
</body>
</html>