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
        /* button {
        font-size: 18px;
        color: #e1e1e1;
        font-family: inherit;
        font-weight: 800;
        cursor: pointer;
        position: relative;
        border: none;
        background: none;
        text-transform: uppercase;
        transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
        transition-duration: 400ms;
        transition-property: color;
        }

        button:focus,
        button:hover {
        color: #fff;
        }

        button:focus:after,
        button:hover:after {
        width: 100%;
        left: 0%;
        }

        button:after {
        content: "";
        pointer-events: none;
        bottom: -2px;
        left: 50%;
        position: absolute;
        width: 0%;
        height: 2px;
        background-color: #fff;
        transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
        transition-duration: 400ms;
        transition-property: width, left;
        } */
        button{
        height:25px;
        width:105px;
        border-radius: 30px;
        background-color:white;
        border: 3px solid black;
        color:black;
        font-weight: bold;
        position: relative;
        font-family: inherit;
        align-content: center;
        justify-content: center;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <!-- navbar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li><button>Home</button></li>
                <li><a href="#">Another link</a></li>
                <li><a href="#">Next link</a></li>
                <li><a href="#">Last link</a></li>
            </ul>
        </div>
        <!-- content -->
        <div id="page-content-wrapper">
            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>TESTTERTTT</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</body>
</html>