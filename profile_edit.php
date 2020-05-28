<?php

		include 'session.php';

	$conn = $pdo->open();




	if(isset($_POST['edit'])){
		$curr_password = $_POST['curr_password'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$mobile = $_POST['mobile'];
		$address1 = $_POST['address1'];
		$photo = $_FILES['photo']['name'];
		if($curr_password!=NULL){
			
			if(!empty($photo)){
				move_uploaded_file($_FILES['photo']['tmp_name'], 'images/'.$photo);
				$filename = $photo;	
			}
			else{
				$filename = $user_id['photo'];
			}

			
			try{
				$stmt = $conn->prepare("UPDATE user_info SET first_name=:first_name, last_name=:last_name, email=:email, password=:password, mobile=:mobile, address1=:address1, photo=:photo  WHERE user_id=:user_id");
				$stmt->execute(['first_name'=>$first_name, 'last_name'=>$last_name, 'email'=>$email, 'password'=>$password, 'mobile'=>$mobile, 'address1'=>$address1, 'photo'=>$filename, 'user_id'=>$_SESSION['user_id']]);

				$_SESSION['success'] = 'Account updated successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
			
		}
		else{
			$_SESSION['error'] = 'Incorrect password';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	$pdo->close();

	header('location: profile.php');

?>