<html>
    <head>
          <title>Contact Page</title>
		  <style>
		         body {
					    font-famaily:latha;
						color:white;
						background:url(image2.jpeg)no-repeat;
						background-size:cover;
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
					  height:639px;
					  background-color:#fffaf0;
					  opacity:0.9;
					  padding:55px;
					  color:black;
				 }
				 
				 h1{
					   color:#a52a2a;
				   }
				
				 label{
                        width:207px;
                        display:inline-block;
                        text-align:;
				      }						
		 </style>			 
    </head>
<body>
<form action="cinsert.php" method="post">
            <div class="box">
			    <ul>
				    <li><a href="Welcome.php"><b>Home</b></a></li>
				    <li><a href="menu.php"><b> Menu</b></a></li>
					<li><a href="new 1.php"> <b>Table Booking</b></a></li>
					<li><a href="about.php"><b>About us</b></a></li>
					<li><a href="contact.php"><b>Contact</b> <a></li>
                </ul>
				</div>
				
      <div class="wd">
	   <h1 > CONTACT US </h1><br>
	   
	   <h3>Please Fill Below Form if you have any query</h3>
	   
	   <label> Name:</label>
	   <input type="text" name="name" ></input><br><br>
	   
	   <label> Email Id:</label>
	   <input type="email" name="email" ></input><br><br>
	   
	   <label> Enter Your Questions:</label>
	   <textarea type="text" col="30" rows="5" name="question"> </textarea><br><br>
	   
	   <input type="submit" name="submit"></input><br><br>
	   
	 <center>  Or </center>
	 
	   <h2> Tel:079 123456 </h2>
	   <h2> Email Id:restro505152@gmail.com</h2>
	   
	   
	   
</body>
</html>	   