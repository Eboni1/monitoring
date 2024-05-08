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
    
</head>
<body>
    <!-- TOPBAR -->
    <?php require("nav.php"); ?>
    <!-- Attendance Summary -->
    <section id="stat" class="px-3 pt-3">
        <div class="row">
            <div class="col">
                <h1>Attendance</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-4 text-center">
                <h1>Absent:<br>0</h1>
            </div>
            <div class="col-4 text-center">
                <h1>Tardy:<br>0</h1>
            </div>
            <div class="col-4 text-center">
                <h1>Classes Attended:<br>0</h1>
            </div>
        </div>
    </section>
    <!-- Class schedule -->
    <section class="px-3 pt-3">
        <div class="row">
            <h1>Schedule</h1>
            <table>
                <tr>
                    <th>Day/Period</th>
                    <th>I<br>9:30-10:20</th>
                    <th>II<br>10:20-11:10</th>
                    <th>III<br>11:10-12:00</th>
                    <th>12:00-12:40</th>
                    <th>IV<br>12:40-1:30</th>
                    <th>V<br>1:30-2:20</th>
                    <th>VI<br>2:20-3:10</th>
                    <th>VII<br>3:10-4:00</th>
                </tr>
                <tr>
                    <td class="highlight"><b>Monday</b></td>
                    <td>Eng</td>
                    <td>Mat</td>
                    <td>Che</td>
                    <td rowspan="6" class="special"><b>LUNCH</b></td>
                    <td colspan="3" class="special">LAB</td>
                    <td>Phy</td>
                </tr>
                <tr>
                    <td class="highlight"><b>Tuesday</b></td>
                    <td colspan="3" class="special">LAB</td>
                    <td>Eng</td>
                    <td>Che</td>
                    <td>Mat</td>
                    <td class="special">SPORTS</td>
                </tr>
                <tr>
                    <td class="highlight"><b>Wednesday</b></td>
                    <td>Mat</td>
                    <td>Phy</td>
                    <td>Eng</td>
                    <td>Che</td>
                    <td colspan="3">LIBRARY</td>
                </tr>
                <tr>
                    <td class="highlight"><b>Thursday</b></td>
                    <td>Phy</td>
                    <td>Eng</td>
                    <td>Che</td>
                    <td colspan="3" class="special">LAB</td>
                    <td>Mat</td>
                </tr>
                <tr>
                    <td class="highlight"><b>Friday</b></td>
                    <td colspan="3" class="special">LAB</td>
                    <td>Mat</td>
                    <td>Che</td>
                    <td>Eng</td>
                    <td>Phy</td>
                </tr>
                <tr>
                    <td class="highlight"><b>Saturday</b></td>
                    <td>Eng</td>
                    <td>Che</td>
                    <td>Mat</td>
                    <td colspan="3">SEMINAR</td>
                    <td class="special">SPORTS</td>
                </tr>
            </table>
        </div>
    </section>
</body>
</html>