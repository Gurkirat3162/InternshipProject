<?php

		$username = filter_input(INPUT_POST,'username');
		$password = filter_input(INPUT_POST,'password');
		
		if( ! empty ($username ))
		{
			if ( ! empty ($password ))
			{
				$host = "localhost";
				$dbusername = "root";
				$dbpassword = "";
				$dbname = "project1";
				
				// Create connection 
				$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
				if (mysqli_connect_error ())
				{
					die ('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
				}
				else {
					
					$sql = "INSERT INTO users (`email`,`password` )
					values ('$username','$password' )";
					if ( $conn->query($sql))
					{
						echo "New record is inserted successfully";
					}
					else
					{
						
						echo "Error :".$sql;
					}
				}
				
			}
			else 
			{
				echo " Password should not be empty";
			 die();
			}
		
			
		}
		 else
		 {
			 echo " Username should not be empty";
			 die();
		 }

?>

		<input type="text" name="Username" placeholder="Your Email" required/
				
