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

function incrementScore(){
    global $counter;
    global $file;
    $counter += 1;
    // Write the contents back to the file
    file_put_contents($file, $counter);
}

function decrementScore(){
    global $counter;
    global $file;
    if($counter > 0 ){
        $counter -= 1;
        // Write the contents back to the file
        file_put_contents($file, $counter);
    }
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(array_key_exists('incrementScore',$_POST)){
        incrementScore();
    }
    if(array_key_exists('decrementScore',$_POST)){
        decrementScore();
    }
    unset($_POST);
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Donation Tracker</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid text-center">
    <div class="col-12">
        <img src="img/nav.PNG" alt="navbar">
    </div>
    <div class="row">
        <div class="col-4 offset-4 text-white moveLeft text-justify">
            The SA runs three food banks across each of its main campuses, serving over 600 students,
            and over 10,000 individual food bank visits per year. This number is gradually increasing!<br><br>
            <strong>What to donate:</strong> Non-perishable and personal care items.
            (canned foods, pasta, rice, quinoa, noodles, soups, peanut butter, etc.)<br><br>
            Our goal is to collect 300 grocery bags full of food to help students and their families have a happy
            and worry-free holiday season. We need your help!<br><br>
            All proceeds collected will benefit the Student Association Food Bank at all 3 campuses.
        </div>
        <div class="col-6 offset-3 moveRight">
<!--            <h2 class="text-center">Goal : 300+ donations</h2>-->
<!--            <p class="text-center text-white">Press '+' button when you donate! & '-' button to decrement the donation!</p>-->
            <div class="wrap">
                <h1 id="counter">&nbsp;&nbsp;<?php echo $counter ?><span style="font-size: medium" class="text-white">donation(s)</span></h1>
                <h2 style="font-size: medium"><?php
                    if($counter >= 300){
                        echo "Hurray! We have achieved our goal. Thank you for your support.";
                    }
                    ?></h2>
                <div class="wrap-btns">
                    <form method="post">
                        <button id="increment" type="submit" name="incrementScore" onclick="incrementScore()">+</button>
                        <button id="decrement" type="submit" name="decrementScore" onclick="decrementScore()">-</button>
                    </form>
                </div>
                    <!--                    <button id="reset">Reset</button>-->
                </div>
        </div>
        <div class="col-12">
            <!--Canvas robot goes here-->
            <canvas></canvas>
        </div>
    </div>
</div>

<!--Canvas Robot Dance script-->
<script src="canvasRobot.js"></script>

<script>
    function incrementScore() {
        <?php incrementScore(); ?>
    }

    function decrementScore() {
        <?php decrementScore(); ?>
    }
</script>
</body>
</html>