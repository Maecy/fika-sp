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
		header("Location: ../parentsignin.php?error=email is required");
	    exit();
	}else if(empty($pass)){
        header("Location: ../parentsignin.php?error=Password is required");
	    exit();
	}else{
		$pass = md5($pass);
		$sql = "SELECT * FROM parents WHERE email='$uname' AND password='$pass'  AND status='1' ";
		$result = mysqli_query($connection,$sql);		
		if(mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $uname && $row['password'] === $pass) {
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['pid'] = $row['pid'];
			echo "plan selected";
            	header("Location:../parenttrack.php");
		        exit();
            }else{
				header("Location: ../parentsignin.php?error=Incorrect email id or password");
		        exit();
			}
		}
		// else{
		// 	header("Location: ../parentsignin.php?error=Incorrect email id or password");
		//    exit();
		// }
		$sql2 = "SELECT * FROM parents WHERE email='$uname' AND password='$pass' AND status='0'";
		$result2 = mysqli_query($connection,$sql2);		
		if(mysqli_num_rows($result2) === 1) {
			$row = mysqli_fetch_assoc($result2);
            if ($row['email'] === $uname && $row['password'] === $pass) {
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['pid'] = $row['pid'];
			echo 'plan not selected';
            	header("Location:../childreg.php");
		        exit();
            }else{
				header("Location: ../parentsignin.php?error=I email student id or password");
		        exit();
			}
		}
		// else{
		// 	header("Location: ../parentsignin.php?error=Incorrect email id or password");
		//    exit();
		// }
	}
	
}else{
	header("Location: ../parentsignin.php");
	exit();
}
