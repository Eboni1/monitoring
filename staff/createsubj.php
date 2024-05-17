<?php
session_start();

    include("../connection.php");
    include("../functions.php");

    $user_data = check_login($con);
    $email = $user_data['email'];

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $code = $_POST['subcode'];
        $subname = $_POST['subname'];
        $prof = $_POST['prof'];
        $email = $_POST['email'];

        $query = "INSERT INTO `subject`(`sub_code`, `sub_name`, `instructor`, `inst_email`) 
                  VALUES ('$code','$subname','$prof','$email')";
        $result = mysqli_query($con, $query);
        if($result){
            echo "Subject successfully added";
        }
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
        .whe{
        font-weight: bold;
        }
        h6{
        margin-bottom: 75px;
        }
        .wait{
            background-color: rgba(199, 199, 199, 0.5);
            border-radius: 30px;
        }
        .buttonsched{
            float: right;
            margin-top: 30px;
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
                <li><h3 class="whe"><?php echo $user_data['firstname'] . " " . $user_data['lastname']; ?></h3></li>
                <li><h6><?php echo $user_data['email']; ?></h6></li>
                <li><a href="#" class="active">SCHEDULES</a></li>
                <li><a href="attendance.php">ATTENDANCE</a></li>
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
                            <div class="col-8">
                                <img src="../images/Bicol_UniversityLogo.png" style="height: 100px;">
                                <img src="../images/Schedule.png" style="height: 100px;">
                            </div>
                        </div>
                        <!-- SCHEDULES  -->
                        <div class="row mt-3">
                            <div class="col-3 mt-2">
                                <a href="index.php">Back to Schedules</a>
                            <div class="col-6"></div>
                        </div>
                        <form action="" method="post">
                            <div class="container mt-5">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Subject Code</label>
                                            <input type="text" class="form-control" placeholder="eg. IS204 SADD" id="exampleInputEmail1" name="subcode">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Subject Name</label>
                                            <input type="text" placeholder="eg. System Analysis and Design" class="form-control" id="exampleInputEmail1" name="subname">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Professor</label>
                                            <input type="text" placeholder="instructor of the subject" class="form-control" id="exampleInputEmail1" name="prof">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email</label>
                                            <input type="text" placeholder="BU email of the instructor" class="form-control" id="exampleInputEmail1" name="email">
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-success">Create Subject</button>
                                        </div> 
                                    </div>
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