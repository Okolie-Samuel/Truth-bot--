<?php

// get value of email on submit
  $email = $_POST['email'];

  $conn = new mysqli('localhost','id14361249_truthb','45[9x33_7yNFvuot','id14361249_truthbot');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into emailsubscribers(email) values(?)");
		$stmt->bind_param("s", $email);
		$execval = $stmt->execute();
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}

?>