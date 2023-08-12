<html>
<body>
<?php
         
       $host='localhost';
       $user='root';
       $pass='';	   
	   $db='db1';
	   	   	   
	   $name=$_POST['name'];
       $members=$_POST['members'];
       $time=$_POST['time'];
       $mobile=$_POST['mobile'];
	   $table=$_POST['table'];
	   $rest=$_POST['rest'];
	   $date=$_POST['date'];
	   
	   $con=mysqli_connect($host,$user,$pass,$db);
	   if(!$con)
    {
        echo "Connection Failed due to ".sqli_error();
    }
	
	$sql="insert into book(Name,Members,Mobile,Restaurant,date,Seat,time)values('$name','$members','$mobile','$rest','$date','$table','$time');";
    $query=mysqli_query($con,$sql);
	
	
  if ($query)
  {
    echo"Data Inserted...";
	  header("Location:print.php");
			
	
  }
  else 
  {
    echo "Not Inserted";
  }


 ?>
 