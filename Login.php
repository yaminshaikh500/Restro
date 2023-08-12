<html>
     <head>
	      <title> Restaurant Booking System </title>
		   <style>
		         
		         body {
					    font-famaily:latha;
						color:white;
						background:url(image2.jpeg);
						background-size:cover;
				      } 
					  
		         	
				 
				 
				 .wd{
					  width:300px;
					  height:500px;
					  background-color:#fffaf0;
					  opacity:1.0;
					  padding:40px;
					  color:#a52a2a;
				  }
				 
			</style>		 
					  
	 </head>
<body>
   <center>
		
	
	<form action="" method="POST">
            		
      
				
				<div class="wd">
				   <img src="WhatsApp Image 1.jpeg" width=200 height=200 ></img>
				     <h1> Login</h1>
					 
                     
                      		   
                      <h4>Please Enter Your Credentials</h4>
					  
                      
                      <label>Username:</label>
                      <input type="text" name="lusername"></input><br><br>

                      <label>Password:</label>
                      <input type="password" name="lpassword"></input><br><br>
					  	<center>			  				  
					  <input type="Submit" name="lsubmit" id="submit" value="login"></input><br><br>
					  Don't have an account?<br><br>
					  <button><a href="signup.php">Signup Here<a/></button>
					  
					  <br><br>

			</form>	
	 
	
<?php 

if (isset($_POST['lsubmit']))
{
    $host='localhost';
    $user='root';
    $pass='';
    $db='db1';

    $lusername=$_POST['lusername'];
    $lpassword=$_POST['lpassword']; 

    $con=mysqli_connect($host,$user,$pass,$db);

    if(!$con)
    {
        echo "Connection Failed due to ".sqli_error();
    }
  $sql="SELECT * FROM login WHERE Username='$lusername' AND Password='$lpassword'";
  $query=mysqli_query($con,$sql);
  $num=mysqli_num_rows($query);

  if ($num>0)
  { 
   
    header("Location:welcome.php");
  }
  else
  {
    echo "Invalid Credantials";

  }
}

?>
</body>
</html>

       	  