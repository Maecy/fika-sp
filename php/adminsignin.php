<?php 
session_start(); 
include ('connect.php');

if (isset($_POST['email']) && isset($_POST['password'])) {
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['email']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: ../institutionsignin.php?error=email is required");
	    exit();
	}else if(empty($pass)){
        header("Location: ../institutionsignin.php?error=Password is required");
	    exit();
	}else{
		$pass = md5($pass);
		$sql = "SELECT * FROM admin WHERE email='$uname' AND password='$pass' ";
		$result = mysqli_query($connection,$sql);		
		if(mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $uname && $row['password'] === $pass) {
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['id'] = $row['id'];
            	header("Location:../admin/index.php");
		        exit();
            }else{
				header("Location: ../institutionsignin.php?error=Incorrect email id or password");
		        exit();
			}
		}else{
               header("Location: ../institutionsignin.php?error=Incorrect email id or password");
             exit();
          }
     }
	
}else{
	header("Location: ../index.php");
	exit();
}
