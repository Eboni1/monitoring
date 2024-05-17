<?php
session_start();

    include("../connection.php");
    include("../functions.php");

    $user_data = check_login($con);

    $query = "SELECT * FROM `users`;";
    $result = mysqli_query($con, $query);
    $student = mysqli_fetch_assoc($result);
    $email = $student['email'];

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $status = $_POST['atten'];

        switch($status){
            case 'P':
                $query = "UPDATE `users` SET `present` = 1 WHERE `email` = '$email'";
                mysqli_query($con, $query);
                break;
            case 'T':
                $query = "UPDATE `users` SET `tardy` = 1 WHERE `email` = '$email'";
                mysqli_query($con, $query);
                break;
            case 'A':
                $query = "UPDATE `users` SET `present` = 1 WHERE `email` = '$email'";
                mysqli_query($con, $query);
                break;
            default:
                echo '<script>alert"Tick a  box"</script>';
        }

        $query = "INSERT INTO `users` where `email` = '$email'";
    }
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
        .active{
            color: rgba(227, 125, 0, 1);
        }
        h3{
        font-weight: bold;
        }
        h6{
        margin-bottom: 75px;
        }
        .whey{
            background-color: rgba(198, 198, 198, 0.5);
            padding: 30px;
            border-radius: 30px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <!-- navbar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li><img src="../images/LOHOg.png" style="width: 200px;"></li>
                <li><img src="../images/profpic.png" class="rounded-circle" style="width:150px;"></li>
                <li><h3><?php echo $user_data['firstname'] . " " . $user_data['lastname']; ?></h3></li>
                <li><h6><?php echo $user_data['email']; ?></h6></li>
                <li><a href="index.php">SCHEDULES</a></li>
                <li><a href="#" class="active">ATTENDANCE</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
            </ul>
        </div>
        <!-- content -->
        <div id="page-content-wrapper">
            <div class="page-content">
                <div class="container">
                    <section class="px-3 pt-3">
                        <div class="row">
                            <div class="col-12">
                                <img src="../images/Bicol_UniversityLogo.png" style="height: 100px;">
                                <img src="../images/Attendance.png" style="height: 100px;">
                            </div>
                        </div>  
                        <form method="post">
                            <div class="row">
                                <div class="col">
                                    <h1>Enrolled Students:</h1><br>
                                    <div class="col-5 my-3 whey">
                                        <h2 style="font-weight: bold;"><?php echo $student['firstname'] . " " . $student['lastname']; ?></h2>
                                        <p><?php echo $student['email']; ?></p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="P" name="atten" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Present
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="T" name="atten" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Tardy
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="A" name="atten" id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Absent
                                            </label>
                                        </div>
                                    </div>
                                    <button class="btn btn-success">Submit</button>
                                    
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>  
</body>
</html>