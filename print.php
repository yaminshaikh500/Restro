<?php
	include('config.php');
	?>
<html>
      <head>
	        <style>
			         body {
					    font-famaily:latha;
						color:black;
						background:url(image2.jpeg)no-repeat;
						background-size:cover;
				      } 
					

					.wd{
					  width:350px;
					  height:200px;
					  background-color:#fffaf0;
					  opacity:0.9;
					  padding:55px;
					  color:#a52a2a;
				  }
			</style>		  
      <center>
              <body>
				     <div class="wd">
                                    <table border="2">
			                                        <thead>
				                                           <th>Name</th>
				                                           <th>Members</th>
				                                           <th>Mobile</th>
														   <th>Restaurant</th>
														   <th colspan=2>Date</th>
				                                           <th>time</th>
				                                          
			                                         </thead>
			
				<tbody></div>
					<?php
					      $sql="SELECT * FROM book ORDER BY Id DESC limit 1";
						  $quser=mysqli_query($con,$sql);
						
						while($urow=mysqli_fetch_assoc($quser)){
							?>
								<tr>
									<td><?php echo $urow['Name']; ?></td>
									<td><?php echo $urow['Members']; ?></td>
									<td><?php echo $urow['Mobile']; ?></td>
									<td><?php echo $urow['Restaurant']; ?></td>
									<td colspan=2><?php echo $urow['date']; ?></td>
									<td><?php echo $urow['time']; ?></td>
							
									
								</tr>
					
						<?php } ?>
						<b> Table Booked.....</b><br>
	
				
				</tbody><br>
							
			</table><br>
			          <b>Take a ScreenShot For the Use at Restaurant<b><br><br>
					  </center>
</body>
</html>