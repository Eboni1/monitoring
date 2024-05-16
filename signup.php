<?php

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
            background-color: rgba(0, 152, 239, 1);
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
                    <h1>test</h1>
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
                        <input type="password" class="form-control" id="exampleInputEmail1" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" name="email">
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