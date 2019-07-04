<?php
		$link = mysqli_connect("localhost", "root", "", "demo");
 
					// Check connection
					if($link === false){
					die("ERROR: Could not connect. " . mysqli_connect_error());
					}
	
			$sql = "SELECT ticket_id from reg_table ORDER BY ticket_id desc LIMIT 1";
			$result=mysqli_query($link,$sql);
			
			while($row = mysqli_fetch_array($result)){
				
				echo $row['ticket_id'];
				
			}
?>


<!DOCTYPE html>
<html>
<head>
</head>
<body>

<button type="button" >Ok</button>
</body>
</html>
