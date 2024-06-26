<?php
session_start(); //hello

    include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($email) && !empty($password))
		{
            $query = "select * from `users` where email = '$email' limit 1";
            $result = mysqli_query($con, $query);
            $logindata = mysqli_fetch_assoc($result);
            $type = $logindata['user_type'];

            switch($type){
                case 'A':
                    

                    if($logindata['password'] === $password){
                        $_SESSION['num_id'] = $logindata['num_id'];
                        $_SESSION['type'] = $type;
                        header("Location: staff/index.php");
                        die;
                    }
                    break;
                case 'S':
                    
                    if($logindata['password'] === $password){
                        $_SESSION['num_id'] = $logindata['num_id'];
                        $_SESSION['type'] = $type;
                        header("Location: students/index.php");
                        die;
                    }
                    break;
                    default:
                        echo '<script>alert("Undefined user type.")</script>';
                        break;
            }

			
		}else
		{
			echo '<script>alert("Please enter valid information.")</script>';
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body{
            background-image: url("images/bupcblur.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }
        
        .container{
            margin-top: 85px;
        }
        .img{
            width: 90%;
            height: auto;
            transform: scale(1.3);
        }
        .too li{
            margin-top: 15px;
            margin-left: 20px;
            font-size: medium;
        }

        .row{
            margin-top: 10px;
            background-color: rgba(227, 227, 227, 0.5);
            border-radius: 55px;
        }
        .topli{
            font-weight: bold;
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <div class="container align-items-center">
            <div class="too">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <div class="im">
                            <img src="images/Bicol_UniversityLogo.png" width="58" height="60">
                        </div>
                        <li class="breadcrumb-item"><a href="#" class="topli">Home</a></li>
                    </ol>
                </nav>
            </div>
            <div class="row px-lg-5 py-3">
                <div class="col-6 pt-3">
                    <h1>Welcome,</h1><br>
                    <img src="images/csd.png" class="img">
                </div>
                <div class="col-6 form-floating pt-3">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">BU Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Password</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="password">
                        <a href="signup.php" style="font-weight:bold; text-decoration:none;">Don't have an account?</a>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div> 
                </div>
            </div>
        </div>
    </form>
</body>
</html>