
<?php 
  session_start();
  if (isset($_SESSION['id'])&& isset($_SESSION['email'])) {
include ('include.php')

?>
<div class="grid-container">
    <div class="menu-icon">
        <i class="fas fa-bars header__menu"></i>
    </div>

<?php include ('navigation.php') ?>

    <main class="main">

        <div class="main-overview">
        <div class="card">
  <div class="card-header bg-primary">
    <div class="card-title text-white">
      Students
    </div>
  </div>
    <div class="card-body">
    <table class="table" id="boards">
        <thead>
          <tr>
            <th>#</th>
              <th>Name</th>
              <th>Email</th>
          </tr>
        </thead>

        <tbody>
          <tr>
          <?php 
                    require 'connect.php';
                    $query = $connection->query("SELECT * FROM parents ORDER BY pid ");
                    while($row = $query->fetch_array()){
                    $board_id=$row['pid'];
                  ?>
                    
                    <td><?php echo $row ['pid'];?></td>
                    <td><?php echo $row ['username'];?></td>
                    <td><?php echo $row ['email'];?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
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