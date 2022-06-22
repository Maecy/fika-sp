
<?php 
  session_start();
  if (isset($_SESSION['id'])&& isset($_SESSION['email'])) {
include ('include.php');
include ('connect.php');
$request = $connection->query("SELECT COUNT(*) as total FROM `parents`")->fetch_array();
$requestP = $connection->query("SELECT COUNT(*) as total FROM `drivers` ")->fetch_array();
$requestA = $connection->query("SELECT COUNT(*) as total FROM `children` ")->fetch_array();


?>
<div class="grid-container">
    <div class="menu-icon">
        <i class="fas fa-bars header__menu"></i>
    </div>

<?php include ('navigation.php') ?>

    <main class="main">

        <div class="main-overview">
            <div class="row">
            <div class="card text-white bg-primary col-md-4 p-4">
                <div class="row">
                    <div class="col-lg-9">
                    <div class="overviewcard__icon">Students</div>
                    </div>
                    <div class="col-lg-3">
                <div class="overviewcard__info"><?php echo $requestA['total']?></div>
                    </div>
                </div>
            </div>
            <div class="bg-success text-white card col-md-4 p-4">
                <div class="row">
                    <div class="col-lg-9">
                    <div class="overviewcard__icon">Parents</div>
                    </div>
                    <div class="col-lg-3">
                    <div class="overviewcard__info"><?php echo $request['total']?></div>
                    </div>
                </div>
            </div>
            <div class="card bg-info col-md-4 mr-2 p-4">
               <div class="row">
                <div class="col-lg-9">
                <div class="overviewcard__icon">Drivers</div>           
                </div>
                <div class="col-lg-3">
                <div class="overviewcard__info"><?php echo $requestP['total']?></div>
                </div>
               </div>
            </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="footer__copyright">&copy; 2018 MTH</div>
        <div class="footer__signature">Made with love by pure genius</div>
    </footer>
</div>

<?php
  }else{
    header("Location:../institutionsignin.php");
	exit();
  }
?>