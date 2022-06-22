<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fika login</title>
    <link rel="stylesheet" href="css/parentsignin.css">
</head>
<body>
    <div class="full-page">
        <div class="navbar">
            <div>
                <a href="#">Fika</a>
            </div> 
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><button class="loginbtn" style="width:auto;"><a href="parentsignin.php">Log In</a></button></li>
                    <li><button class="loginbtn" style="width:auto;"><a href="parentsignin.php">Sign-Up</a></button></li>
                </ul>
            </nav>
        </div>
        <div  class="login-page">
            <div class="form-box">
            <form action="php/parentreg.php" method="post" enctype="multipart/form-data"  class="input-group-register">
                    <input type="text" name="uname" class="input-field" placeholder="username">
                    <input type="email" name="email" class="input-field" placeholder="email">
                    <input type="password" name="password" class="input-field" placeholder="password">
                    <input type="password" name="rpassword" class="input-field" placeholder="Confirm Password">
                    <input type="checkbox" class="check-box"><span>I have read and agree with the terms and conditions</span>
                    <button type="submit" name="action" class="submit-btn">Register</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/sweetalert.min.js"></script>
    <?php if (isset($_GET['success'])) { ?>
   <script>
      swal({
         title: "<?php echo $_GET['success']; ?>",
         // text: "You clicked the button!",
         icon: "success",
      });
   </script>
<?php } ?>
<?php if (isset($_GET['error'])) { ?>
   <script>
      swal({
         title: "<?php echo $_GET['error']; ?>",
         // text: "You clicked the button!",
         icon: "error",
      });
   </script>
<?php } ?>
</body>
</html>