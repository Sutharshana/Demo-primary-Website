<?php
	$uname = $_POST["uname"];
	$email = $_POST["email"];
	$psw = $_POST["psw"];
	$cpsw = $_POST["cpsw"];
	if (!empty($name) || !empty($email) || !empty($psw) || !empty($cpsw) ){
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbname = "web";
		
		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
		
		if(mysqli_connect_error()){
			die('Connect error ('.mysqli_connect_error().')'.mysqli_connect_error());
		} else {
			$SELECT = "SELECT email From details Where email=? Limit 1";
			$INSERT = "INSERT Into details (UName, Email, Password, CPassword) values (?,?,?,?)"; 
			
			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("s", $email);
			$stmt->execute();
			$stmt->bind_result($email);
			$stmt->store_result();
			$rnum = $stmt->num_rows;
			
			if ($rnum == 0){
				$stmt->close();
				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("ssss", $uname, $email, $psw, $cpsw);
				$stmt->execute();
				echo "<script>alert('Thanks for Signing Up!!!\nPlease Login to your account');</script>";
				header('Location: index.html');
			} else{
				echo "<script>alert('This email id already exist');</script>";
				#header('Location: signup.html');
			}
			$stmt->close();
			$conn->close();
		}
	} else {
		echo "All fields are required";
		die();
	}
	
?>