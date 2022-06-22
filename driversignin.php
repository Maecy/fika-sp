<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fika Login</title>
    <link rel="stylesheet" href="css/driversignin.css">
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
                    <li><button class="loginbtn" onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Log in</button></li>
                </ul>
            </nav>
        </div>
        <div id="login-form" class="login-page">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" onclick="login()" class="toggle-btn">Log In</button>
                    <button type="button" onclick="register()" class="toggle-btn">Register</button>
                </div>
                <form action="php/drviersignin.php" id="login" method="POST" class="input-group-login">
                    <input type="email" name="email" class="input-field" placeholder="Email" >
                    <input type="password" name="password" class="input-field" placeholder="Enter your password">
                    <input type="checkbox" class="check-box"><span>Remember Password</span>
                    <button type="submit" class="submit-btn">Login</button>
                </form>
                <form action="php/driverreg.php" method="post" enctype="multipart/form-data" id="register" class="input-group-register">
                    <input type="text" name="uname" class="input-field" placeholder="username">
                    <input type="email" name="email" class="input-field" placeholder="email">
                    <input type="password" name="password" class="input-field" placeholder="password">
                    <input type="password" name="rpassword" class="input-field" placeholder="Confirm Password">
                    <input type="checkbox" class="check-box"><span>I have read and agree with the terms and conditions</span>
                    <input type="submit" name="action" value="Register" class="submit-btn">
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
    <script>
        var x=document.getElementById('login');
        var y=document.getElementById('register');
        var z=document.getElementById('btn');
        function register()
        {
            x.style.left='-400px';
            y.style.left='50px';
            z.style.left='110px';
        }
        function login()
        {
            x.style.left='50px';
            y.style.left='450px';
            z.style.left='0px';
        }
    </script>
    <script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event)
        {
            if (event.target == modal)
            {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>