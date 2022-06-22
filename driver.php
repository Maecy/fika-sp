<?php
  session_start();
  if (isset($_SESSION['id'])&& isset($_SESSION['email'])) {
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Driver Portal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/driver.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="js/driver.js" defer></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?v=3&sensor=false" type="text/javascript"></script>
</head>
<body>
    <div class="container p-5">
        <div class="text-center">
            <h1>You Are A Driver</h1>
            <p>Find passanger on the map</p>
        </div>
        <div class="container d-flex justify-content-between">
            <div class="col-4">
                <button type="button" class="form-control btn btn-secondary btn-block">Allow location to be seen</button>

            </div>
            <div class="col-4">
                <button type="button" class="form-control btn btn-secondary btn-block">End pick up session</button>
            </div>
        </div>
        <div>
            <h3>Map Overview</h3>
        </div>
        <div id="google-map"><iframe src="" frameborder="0"></iframe></div>

        <div>
            <button class="btn btn-info btn-block mt-4">Report a problem</button>
        </div>
        <div>
            <button class="btn btn-info btn-block mt-4"><a href="logout.php">Logout</a></button>
        </div>
    </div>
</body>
</html>
<?php
  }else{
    header("Location:driversignin.php");
	exit();
  }
?>