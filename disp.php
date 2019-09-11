<?php
    mysql_connect('localhost','root',"");
    mysql_select_db("study");
?>

<html >
<head>
<title>File Uploading With PHP and MySql</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
<label>File Uploading With PHP and MySql</label>
</div>
<div id="body">
 <table width="80%" border="1">
    <tr>
    <th colspan="4">your uploads...<label><a href="index.php">upload new files...</a></label></th>
    </tr>
    <tr>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
    <td>View</td>
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











































