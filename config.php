<?php
         
       $host='localhost';
       $user='root';
       $pass='';	   
	   $db='db1';
	  
	   
	   $con=mysqli_connect($host,$user,$pass,$db);
	   if(!$con)
    {
        echo "Connection Failed due to ".sqli_error();
    }
	?>