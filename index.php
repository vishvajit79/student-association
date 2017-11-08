<!--////////////////////////////////////////////////////////////////////////-->
<!--//                                                                    //-->
<!--//                     Vishvajit Kher  - 101015270                    //-->
<!--//                    vishvajit.kher@georgebrown.ca                   //-->
<!--////////////////////////////////////////////////////////////////////////-->
<?php

if (!isset($_SESSION)) {
    session_start();
}
$file = 'score.txt';
// Open the file to get existing content
$counter = file_get_contents($file);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Donation Tracker</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style1.css" type="text/css">
    <script src="https://use.fontawesome.com/23bb8c4a30.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-1">
            <img src="img/SA_logo.png" height="70" width="134">
        </div>
        <div class="col-md-10 text-center">
            <p style="font-size: 30px">NOV. 14, 2017 – DEC. 14, 2017</p>
            <p style="font-size: 20px">Drop off locations:</p>
            <p style="font-size: 20px; color: white">Casa Loma campus (Room E127/E100)<br>
                St. James campus (Room 159A/147 in building SJA)<br>
                Waterfront campus (Room 031/033)</p>
        </div>
        <div class="col-md-1">
            <img src="img/George_Brown_College_logo.png" height="70" width="134">
        </div>
    </div>
</div>
<section id="main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <img style="padding-left: 16%" src="img/brand_logo.PNG">
                <img src="img/main_second_logo.PNG" height="50%">
            </div>
            <div class="col-md-6 text-center">
                <p id="counter" style="font-size: 90px;"><?php echo $counter ?><span style="font-size: medium" class="text-white">donation(s)</span></p>
                <p style="font-size: medium"><?php
                    if($counter >= 300){
                        echo "Hurray! We have achieved our goal. Thank you for your support.";
                    }
                    ?></p>
            </div>
            <div class="col-md-3 text-white" style="font-family: 'Calibri Light'">
                <p style="margin-top: -100px">
                    The SA runs three food banks across each of its main campuses, serving over 600 students,
                    and over 10,000 individual food bank visits per year. This number is gradually increasing!</p>
                <p>
                    <strong>What to donate:</strong> Non-perishable and personal care items.
                    (canned foods, pasta, rice, quinoa, noodles, soups, peanut butter, etc.)</p><p>
                    Our goal is to collect 300 grocery bags full of food to help students and their families have a happy
                    and worry-free holiday season. We need your help!</p><p>
                    All proceeds collected will benefit the Student Association Food Bank at all 3 campuses.
                </p>
                <p>For more information contact: Ronnie Cruz – Community Services Coordinator (communitycoordinator@sagbc.ca)</p>
                <p><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;studentassociations.ca | <i class="fa fa-twitter" aria-hidden="true"></i>
                    &nbsp;sagbc | <i class="fa fa-facebook" aria-hidden="true"></i>&nbsp; runyourfuture | <i class="fa fa-snapchat" aria-hidden="true"></i>&nbsp;sa.gbc</p>
            </div>
        </div>
    </div>
</section>
<section id="canvas_dance">
    <canvas class="b-green"></canvas>
</section>
<section>
    <i class="fa fa-plus" aria-hidden="true"></i>
</section>


<!--Canvas Robot Dance script-->
<script src="canvasRobot.js"></script>

</body>
</html>