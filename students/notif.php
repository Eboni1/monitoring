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
    <title>BU Students</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        body{
            background: rgba(152, 217, 245, 1);
        }
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
        margin-left: 0px;
        }
        section{
        width: 100%;
        margin-left: 135px;
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
        a.eh{
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
        a.active{
            color: rgba(227, 125, 0, 1);
        }
        h3{
        font-weight: bold;
        }
        h6{
        margin-bottom: 75px;
        }
        a.prof{
            text-decoration: none;
        }
        .badge {
        background-color: red;
        color: white;
        padding: 4px 8px;
        text-align: center;
        border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        
        <!-- SIDEBAR -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li><img src="../images/LOHOg.png" style="width:200px;"></li>
                <li><a href="profile.php" class="prof"><img src="../images/profpic.png" class="rounded-circle" style="width:150px;"></a></li>
                <li><a href="profile.php" class="prof"><h3><?php echo $user_data['firstname'] . " " . $user_data['lastname']; ?></h3></a></li>
                <li><h6><?php echo $user_data['email']; ?></h6></li>
                <li><a href="#" class="notification eh active">
                    <span>Inbox</span>
                    <span class="badge">1</span>
                </a></li>
                <li><a href="index.php" class="eh">SCHEDULE</a></li>
                <li><a href="attendance.php" class="eh">ATTENDACE</a></li>
                <li><a href="#" class="eh">ABOUT</a></li>
                <li><a href="logout.php" class="eh">LOGOUT</a></li>
            </ul>
        </div>
        <div id="page-content-container">
            <div class="page-content">
                <div class="container">
                    <!-- Attendance Summary -->
                    <section id="stat" class="px-3 pt-3">
                        <div class="row">
                            <div class="col">
                                <img src="../images/Bicol_UniversityLogo.png" style="height: 100px;">
                                <h1>Notifications</h1>
                            </div>
                        </div>
                    </section>
                    <!-- Class schedule -->
                    <section class="px-3 pt-3">
                        <div class="row">
                            <div class="col">
                                <h3>TEST</h3>
                            </div>
                        </div>
                    </section>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>