<?php
session_start();

    include("../connection.php");
    include("../functions.php");

    $user_data = check_login($con);
    $email = $user_data['email'];
    
    $query = "SELECT * FROM `subject` WHERE `inst_email` = '$email'";
    $result = mysqli_query($con, $query);
    $subject = mysqli_fetch_assoc($result);
    $what = $subject['sub_code'];

    $what = "SELECT * FROM `class` where `class_sub` = '$what'";
    $hey = mysqli_query($con, $what);
    $class = mysqli_fetch_assoc($hey);

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $sched = $_POST['sched'];
        
        $every = "UPDATE `class` SET `sched3`='$sched'";
        mysqli_query($con, $every);

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
                <li><a href="index.php" class="eh">SCHEDULES</a></li>
                <li><a href="attendance.php" class="eh">ATTENDANCE</a></li>
                <li><a href="#" class="eh">ABOUT</a></li>
                <li><a href="logout.php" class="eh">LOGOUT</a></li>
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
                        <form method="post">
                            <div class="container mt-5">
                                <div class="row">
                                    <div class="col-8 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Schedule</label>
                                        <input class="form-control form-control-lg" type="text" placeholder="<?php echo $class['sched3']; ?>" aria-label=".form-control-lg example" name="sched">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button class="btn btn-danger"><a style="text-decoration: none;" href="index.php">Cancel</a></button>
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