<?php
    if(isset($_POST['submit'])) {
        mysql_connect ("localhost", "root", "") or die ('Error: ' . mysql_error());
        mysql_select_db("project") or die ('Data error:' . mysql_error());
        $text = mysql_real_escape_string($_POST['comments']); 
        $query="INSERT INTO query (textarea) VALUES ('$text')";
       if (mysql_query($query))
       	{   echo "query submitted ...we will rely u soon";

header("location:home.php");
   } 
       	else{ die('Error updating database' . mysql_error());}
    }
?>
<html>
<head><title>query</title></head>
<body style="background-image:url('img/cute.jpg')">

<center><form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<textarea name="comments" rows="15" cols="27">ur valuable query plz..</textarea>
    <input type="submit" name="submit" value="submit" /></center>
</form>
</body>
</html>