<?php

function check_login($con)
{

	if(isset($_SESSION['num_id']))
	{

		$id = $_SESSION['num_id'];

		
				$query = "select * from users where num_id = '$id' limit 1";

				$result = mysqli_query($con,$query);
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					return $user_data;
				}
			
				
		
	
	}

	//redirect to login
	header("Location: index.php");
	die;

}

