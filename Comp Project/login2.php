<?php 
session_start(); 
include "db2_conn.php";

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
		header("Location: teacher_login.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: teacher_login.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users_teachers WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if ($row['user_name'] === $uname && $row['password'] === $pass) {
				$_SESSION['user_name'] = $row['user_name'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['id'] = $row['id'];
				$_SESSION['status'] = $row['status'];
				$_SESSION['role'] = $row['role']; // Set the 'role' key in $_SESSION
				header("Location: user_page.php");
				exit();
			} else {
				header("Location: teacher_login.php?error=Incorrect User name or password");
				exit();
			}
		} else {
			header("Location: teacher_login.php?error=Incorrect User name or password");
			exit();
		}
	}
	
}else{
	header("Location: teacher_login.php");
	exit();
}