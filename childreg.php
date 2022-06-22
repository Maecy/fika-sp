<?php
  session_start();
  if (isset($_SESSION['pid'])&& isset($_SESSION['email'])) {
?>




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
        </div>
        <div  class="login-page">
            <div class="form-box">
            <form action="php/childreg.php" method="post" enctype="multipart/form-data"  class="input-group-register">
                    <input type="text" name="name" class="input-field" placeholder="Full Names">
                    <input type="number" name="age" class="input-field" placeholder="Age">
                    <input type="text" name="class" class="input-field" placeholder="Class">
                    <input type="text" name="id" value ="<?php echo $_SESSION['pid'] ?>" class="input-field" placeholder="Class">
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

<?php
  }else{
     header('location:parentsignin.php');
  }
  ?>
