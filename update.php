<?php
$file = 'score.txt';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $counter = $_POST["updateScore"];
    file_put_contents($file, $counter);
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
</head>
<body>
<div class="container" style="padding-top: 100px">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <form method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Enter new updated score:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter score" name="updateScore" required>
                    <small id="emailHelp" class="form-text text-muted">Please don't update score if you are not allowed.</small>
                </div>
                <button type="submit" class="btn btn-primary text-center">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
