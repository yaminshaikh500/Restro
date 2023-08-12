<?php


?>
<html>
     <head>
	      <title> Restaurant Booking System </title>
		  <style>
		  
		         body {
					    font-famaily:latha;
						color:#872657;
						background:url(image2.jpeg);
						background-size:cover;
				      } 
					
		         		 
				 
				 .wd{
					  width:300px;
					  height:500px;
					  background-color:#fffaf0;
					  opacity:1.0;
					  padding:50px;					 
					  color:#a52a2a;
				    }
				label{
					    width:100px;
                        display:inline-block;
                        
				        }
				  </style>
         
	 </head>
<body>
  <center>
	<form action="" method="POST">
	
            <div class="wd">
     <img src="WhatsApp Image 1.jpeg" width=200 height=200 ></img>
                      <h3>Create Your New Account</h3>
							  
                      
                      <label>Username:</label>
                      <input type="text" name="username"required></input><br><br>
                      
					 
                      <label>Password:</label>
                      <input type="password" name="password"required></input><br><br>
					  
					 
					  <label>Confirm Password: </label>
                      <input type="password" name="confirm" required></input><br><br>
                      
					  
		              <label>Email: </label>
                      <input type="email" name="email" required></input><br><br>
                      
					  
               	      <label>Mobile No: </label>
                      <input type="text" name="mobile" required></input><br><br>
		   	  		
                      <br>		   
					 <center> <input type="Submit" name="submit" value="submit"></input></center>
					  
					  <br><br>
			
       </form></center></div></center>
	   
	
<?php	
    if(isset($_POST['submit']))
	{
       $host='localhost';
       $user='root';
       $pass='';	   
	   $db='db1';
	   
	   $username=$_POST['username'];
	   $password=$_POST['password'];
	   $confirm=$_POST['confirm'];
	   $email=$_POST['email'];
	   $mobile=$_POST['mobile'];
	   
	   $con=mysqli_connect($host,$user,$pass,$db);
	   if(!$con)
    {
        echo "Connection Failed due to ".sqli_error();
    }
	if($password==$confirm)
	{
	$sql="insert into login(Username,Password,Email,Mobile)values('$username','$password','$email','$mobile');";
    $query=mysqli_query($con,$sql);
	
	}  
  if ($query)
  {
    header("Location:Login.php");
  }
  else 
  {
    echo "Not Inserted";
  }
}
  else 
  
      echo "Alert...! Type the same Password";

  
	?>
</body>
</html>
