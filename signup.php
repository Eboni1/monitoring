<?php
session_start();

    include("connection.php");
	include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $studname = $_POST['studnum'];
        $email = $_POST['email'];
        $pass1 = $_POST['pass1'];
        $pass2 = $_POST['pass2'];

        if(!empty($firstname) && !empty($lastname) && !empty($email)){
            if($pass1 === $pass2){
                if(!empty($studname)){

                        if($pass1 == $pass2){
                            
                                
                                $query = "INSERT INTO `users` (`firstname`, `lastname`, `password`, `stud_num`,`email`, `user_type`)
                                          VALUES ('$firstname','$lastname','$pass1','$studname','$email','S');";
                                $result = mysqli_query($con, $query);
                                if($result){
                                    echo "Account created";
                                }

                        }
                        
                }else{
                    if($pass1 == $pass2){
                        $query = "INSERT INTO `users` (`firstname`, `lastname`, `password`, `stud_num`,`email`, `user_type`)
                                  VALUES ('$firstname','$lastname','$pass1','$studname','$email','A');";
                        $result = mysqli_query($con, $query);
                        if($result){
                            echo "Account created";
                        }
                    }
                }
                 
                
            
            
        }
        echo '<script>alert("Enter appropriate information")</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body{
            background: url(images/signupback.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
        .container{
            padding: 30px;
            margin-top: 80px;
            background-color: rgba(217, 217, 217, 0.5);
            border-radius: 30px;
        }
        a{
            font-weight: bold;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <div class="container">
            <div class="row px-lg-5 py-3">
                <div class="col-6">
                    <img src="images/LOHOg.png" style="width: 550px;">
                    <h4>SIGNUP PAGE</h4>
                </div>
                <div class="col-6">
                    <div class="input-group mb-4">
                        <span class="input-group-text">First and last name</span>
                        <input type="text" aria-label="First name" class="form-control" name="firstname">
                        <input type="text" aria-label="Last name" class="form-control" name="lastname">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Student Number</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="studnum">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">BU email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" name="pass1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" name="pass2">
                        <a href="index.php">Already have an account?</a>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>