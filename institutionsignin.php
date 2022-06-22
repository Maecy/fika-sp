<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fika Login</title>
    <link rel="stylesheet" href="css/institutionsignin.css">
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
                </ul>
            </nav>
        </div>
        <div id="" class="login-page">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" onclick="login()" class="toggle-btn">Log In</button>
                </div>
                <form action="php/adminsignin.php" id="login" method="POST" class="input-group-login">
                    <input type="email" class="input-field" name="email" placeholder="Email" >
                    <input type="password" class="input-field" name="password" placeholder="Enter your password">
                    <input type="checkbox" class="check-box"><span>Remember me</span>
                    <button type="submit" class="submit-btn">Login</button>
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