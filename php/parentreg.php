<?php 

include ('connect.php');

if (isset($_POST['action'])){
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	 }
	 $username = validate($_POST['uname']);
      $email = validate($_POST['email']);
	 $password = validate($_POST['password']);
	 $rpassword = validate($_POST['rpassword']);
echo "hello world";

	if (empty($username)) {
		header("Location: ../parentreg.php?error=User name is required");
	    exit();
	}
	if (empty($email )) {
		header("Location: ../parentreg.php?error=User email is required");
	    exit();
	}
	if (empty($password)) {
		header("Location: ../parentreg.php?error=User password is required");
	    exit();
	}
	if (empty($rpassword)) {
		header("Location: ../parentreg.php?error=User repeat password is required");
	    exit();
	}

	else if($password !== $rpassword){
        header("Location: ../parentreg.php?error=The confirmation password  does not match");
	    exit();
	}
	else{
		$pass =md5($password);

		$squery = "SELECT * FROM parents WHERE email='$email'";
		$res = mysqli_query($connection, $squery);

		if (mysqli_num_rows($res) > 0) {
			header("Location: ../parentreg.php?error=Your  Email is already registered please Login");
	        exit();
		}else {


	$sql2="INSERT INTO parents (username,email,status,password) VALUES ('$username','$email',0,'$pass')";
	$result2 = mysqli_query($connection, $sql2);

	if($result2) {
		header("Location: ../parentreg.php?success=Registrations is successful");
	 exit();
}else{
	// echo $connection->error;
	exit();
}
}
}
}
else{
	// header("Location: ../registration.php");
	// echo $connection->error;
	exit();
}
	


?>