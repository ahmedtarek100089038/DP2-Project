<?php
	include 'conn.php';
	session_start();

	if(isset($_SESSION['loggedin'])){
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("SELECT * FROM user_info WHERE user_id=:user_id");
			$stmt->execute(['user_id'=>$_SESSION['loggedin']]);
			$loggedinuser = $stmt->fetch();
			$_SESSION['loggedinuser']=$loggedinuser;
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}

		$pdo->close();
	}
?>