<?php
session_start();

    include("../connection.php");
    include("../functions.php");

    $user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BU Staff</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        #wrapper {
        padding-left: 250px;
        transition: all 0.4s ease 0s;
        }

        #sidebar-wrapper {
        margin-left: -250px;
        left: 250px;
        width: 250px;
        background: rgba(0, 179, 236, 1);
        border-right: 8px solid rgba(255, 135, 0, 1);
        position: fixed;
        height: 100%;
        overflow-y: auto;
        z-index: 1000;
        transition: all 0.4s ease 0s;
        display: flex;
        align-items: center;
        text-align: center;
        }
        #page-content-wrapper {
        width: 100%;
        padding-left: 250px;
        }

        .sidebar-nav {
        position: absolute;
        top: 0;
        width: 250px;
        list-style: none;
        margin: 0;
        padding: 0;
        align-content: center;
        }
        @media (max-width:767px) {

        #wrapper {
        padding-left: 0;
        }

        #sidebar-wrapper {
        left: 0;
        }

        #wrapper.active {
        position: relative;
        left: 250px;
        }

        #wrapper.active #sidebar-wrapper {
        left: 250px;
        width: 250px;
        transition: all 0.4s ease 0s;
        }

        }
        a{
        padding: 5px 45px;
        border-radius: 30px;
        background-color:white;
        border: 3px solid rgba(44, 44, 44, 1);
        color:rgba(44, 44, 44, 1);
        text-decoration: none;
        font-weight: bold;
        position: relative;
        font-family: inherit;
        align-content: center;
        justify-content: center;
        }
        li{
        margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <!-- navbar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li><a href="logout.php">Logout</a></li>
                <li><a href="#">Another link</a></li>
                <li><a href="#">Next link</a></li>
                <li><a href="#">Last link</a></li>
            </ul>
        </div>
        <!-- content -->
        <div id="page-content-wrapper">
            <div class="page-content">
                <div class="container px-3 pt-3">
                    <div class="row">
                        <div class="col">
                            <img src="../images/Bicol_UniversityLogo.png" style="height: 100px;">
                            <img src="../images/Schedule.png" style="height: 100px;">
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-4">
                            <h1>Class in Progress:</h1>
                        </div>
                        <div class="col-8">
                            TEST
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</body>
</html>