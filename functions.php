<?php

function check_login($con)
{

	if(isset($_SESSION['num_id']))
	{

		$id = $_SESSION['num_id'];
		$type = $_SESSION['type'];
		switch($type){
			case 'A':
				$query = "select * from faculty where num_id = '$id' limit 1";

				$result = mysqli_query($con,$query);
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					return $user_data;
				}
				break;
			case 'S':
				$query = "select * from users where num_id = '$id' limit 1";

				$result = mysqli_query($con,$query);
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					return $user_data;
				}
				break;
			default:
				
		}
	
	}

	//redirect to login
	header("Location: index.php");
	die;

}