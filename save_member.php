<?php
	session_start();
	require_once 'conn.php';
	
	if(ISSET($_POST['register'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];

		$sql = "INSERT INTO member (username, password, email, firstname, lastname) VALUES ('$username', '$password','$email', '$firstname', '$lastname')";	
		if ($conn->query($sql)) {
			$_SESSION['success'] = "Successfully created an account";
			header('location: index.php');
		} else {
			echo "Error: " . $sql . "<br>"  ;//mysqli_error($conn);
		}
		
		//mysqli_close($conn);


	}
?>