<?php 

include ('connect.php');

if (isset($_POST['action'])){
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	 }
	 $name = validate($_POST['name']);
      $age = validate($_POST['age']);
	 $class = validate($_POST['class']);
      $userId = Validate($_POST['id']);

	if (empty($name)) {
		header("Location: ../childreg.php?error=User name is required");
	    exit();
	}
	if (empty($age )) {
		header("Location: ../childreg.php?error=User email is required");
	    exit();
	}
	if (empty($class)) {
		header("Location: ../childreg.php?error=User password is required");
	    exit();
	}
	else{
	$sql2="INSERT INTO children (full_names,age,class) VALUES ('$name','$age','$class')";
	$result2 = mysqli_query($connection, $sql2);

	if($result2) {
          $sql = "UPDATE parents SET status = 1 WHERE pid = '$userId' " ;
          $result = mysqli_query($connection,$sql);
		header("Location: ../parentsignin.php?success=Student registered successfully is successful");
	 exit();
}else{
	// echo $connection->error;
	exit();
}

}
}
else{
	// header("Location: ../registration.php");
	// echo $connection->error;
	exit();
}
	


?>