<?php
session_start(); 
$conn = DbConfig();

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: ../login?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: ../login?error=Password is required");
	    exit();
	}else{
		// hashing the password
        // $pass = md5($pass);

		$sql = "SELECT * FROM admin WHERE `Email`='$uname' AND `Pass`='$pass'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['Email'] === $uname && $row['Pass'] === $pass) {
            	$_SESSION['Email'] = $row['Email'];
            	$_SESSION['Name'] = $row['Name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: ../admin/index");
		        exit();
            }else{
				header("Location: ../login?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: ../login?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: ../login");
	exit();
}