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
</head>
<body>
    <!-- navbar -->
    <?php require("nav.php"); ?>
    <!-- content -->
    <h1>This is the staff page</h1>
    <div class="container">
        <div class="row">
            <div class="col-4">
                
            </div>
            <div class="col-4">

            </div>
            <div class="col-4">

            </div>
        </div>
    </div>
</body>
</html>