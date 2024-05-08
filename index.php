<?php 
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BU Monitoring System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body{
            background-color: #010101;
            background-image: url("images/bupc.jpg");
            background-position: center;
            background-size: cover;
        }
        .card {
            width: 170px;
            height: 400px;
            border-radius: 20px;
            background-image: url("images/bu-main.png");
            background-position: center;
            background-size: cover;
            opacity: 0.6;
            position: relative;
            padding: 1.8rem;
            border: 1px solid #c3c6ce;
            transition: 0.5s ease-out;
            overflow: visible;
        }

        .card2 {
            width: 170px;
            height: 400px;
            border-radius: 20px;
            background-image: url("images/students.jpeg");
            background-position: center;
            background-size: cover;
            opacity: 0.6;
            position: relative;
            padding: 1.8rem;
            border: 1px solid #c3c6ce;
            transition: 0.5s ease-out;
            overflow: visible;
        }

        .card-details {
            color: black;
            height: 100%;
            gap: .5em;
            justify-content: center;
        }

        /*Text*/
        .text-title {
            font-size: 4em;
            font-weight: bold;
            position: relative;
            text-align: center;
            text-anchor: middle;
        }

        /*Hover*/
        .card:hover {
            border-color: #ff751a;
            opacity: 1;
            box-shadow: 0 4px 18px 0 rgba(0, 0, 0, 0.25);
        }

        .card2:hover {
            border-color: #ff751a;
            opacity: 1;
            box-shadow: 0 4px 18px 0 rgba(0, 0, 0, 0.25);
        }
    </style>
</head>
    <!-- NAVBAR -->
    <?php require("nav.php"); ?>
<body>
    <!-- HOME -->
    <div class="container text-center">
        <div class="row mt-3">
            <h1 style="text-align:center;">Log in as:</h1>
        </div>
        <div class="row align-items-start animate__animated animate__fadeIn py-3">
            <div class="card text-dark col">
                <a href="loginS.php">
                    <div class="card-details ms-3 mt-3">
                        <p class="text-title">STAFF</p>
                    </div>
                </a>
            </div>
            
            <div class="card2 text-dark col">
                <a href="login.php">
                    <div class="card-details ms-3 mt-3">
                        <p class="text-title">STUDENT</p>
                    </div>
                </a>
            </div>
        </div>  
    </div>
</body>
</html>
