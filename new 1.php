
<html>

<head>
	<title>project</title>

	<style>
		         body {
					    font-famaily:latha;
						color:white;
						background:url(image2.jpeg)no-repeat;
						background-size:cover;
						color:#a52a2a;
				      } 
		         	
	              .box{
					   width:800px;
					   float:right;
					   border:1px solid none;
					   }
				.box ul li{
                            width:100px;
                            float:left;
                            margin:10px;
                            text-align:center;
				
  				          }							
			    .box ul li a{
					           text-decoration:none;
							   color:white	;
				            }
			     .box ul li :hover{ background-color:green;}
				 .box ul li a:hover{ color:white;}
				  .wd{
					  width:300px;
					  height:539px;
					  background-color:#fffaf0;
					  opacity:0.9;
					  padding:55px;
					  color:#a52a2a;
					  display:inline-block;
				  }
				  label{
					    width:207px;
                        display:inline-block;
                       
					    
				  }
				 
	</style>
</head>

<body>
        <div class="box">
			    <ul>
				  	<li><a href="Welcome.php"><b>Home</b></a></li>			    
				    <li><a href="menu.php"> <b>Menu</b></a></li>
					<li><a href="new 1.php"> <b>Table Booking</b></a></li>
					<li><a href="about.php"><b>About us</b></a></li>
					<li><a href="contact.php"><b>Contact</b> <a></li>
                </ul>
				</div>
	
		<div class="wd">
		
		<br>
		
    <h3> Plese Fill Below Form to Book Your Table</h3><br><br>

		<form action="book1.php" method="post">
					  	Restaurant:<Select value="restaurant" name="rest">
				<option value="">--Select Restaurant-- </option>
				<option value="Restaurant 1" name="rest1">Restaurant 1</option>
				<option value="Restaurant 2" name="rest2">Restaurant 2</option>
			    <option value="Restaurant 3" name="rest3">Restaurant 3</option>
			    <option value="Restaurant 4" name="rest4">Restaurant 4</option>
	  </select><br><br>
	  	
		            <label>Select Date:</label>
					<input type="date" name="date" required /><br/><br/>
					
					Time:
					<input type="time" name="time" required /><br/><br/>
	    
				    
					<label>Name:</label>
					<input type="text" name="name" required /><br/><br/>
					
                    <label>mobile no.:</label>
					<input type="text" name="mobile" required /><br/><br/>
				    
				    <label>Total Members:</label>
					<input type="number" name="members" required /><br/><br/>
										
					<input type="submit" name="submit" value="Submit" />
					
				    
		
		</form></div>
	</center>
</body>

</html>
