<?php
            
             $error="error";
             $con=mysql_connect('localhost','root','') or die ($error);

         
                    mysql_select_db('study',$con);     
            
        if (isset($_GET['dow'])) {


        	$path=$_GET['dow'];
        	$res=mysql_query("SELECT * FROM duni WHERE path='$path'");
        	header('Content-Type:application/octet-stream');
        	header('Content-Disposition:attachment; filename="'.basename($path).'"');
        	header('Content-Length:' .filesize($path));
        	readfile($path);
        	# code...
        }
        ?>