<?php
	include 'includes/session.php';


	if(isset($_POST['edit'])){
		$curr_password = $_POST['curr_password'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
        $dob = $_POST['dob'];
		$phone = $_POST['contact'];
		$photo = $_FILES['photo']['name'];
		if(password_verify($curr_password, $user['user_password'])){
			if(!empty($photo)){
				move_uploaded_file($_FILES['photo']['tmp_name'], 'images/'.$photo);
				$filename = $photo;	
			}
			else{
				$filename = $user['photo'];
			}

			if($password == $user['user_password']){
				$password = $user['user_password'];
			}
			else{
				$password = password_hash($password, PASSWORD_DEFAULT);
			}

			$conn = $pdo->open();

			try{
				$stmt = $conn->prepare("UPDATE users SET user_email=:email, user_password=:password, first_name=:firstname, last_name=:lastname, user_photo=:photo, user_dob=:dob, user_phone=:phone WHERE user_id=:id");
				$stmt->execute(['email'=>$email, 'password'=>$password, 'firstname'=>$firstname, 'lastname'=>$lastname, 'photo'=>$filename, 'dob'=>$dob, 'phone'=>$phone, 'id'=>$user['user_id']]);

				$_SESSION['success'] = 'Account updated successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}

			$pdo->close();
			
		}
		else{
			$_SESSION['error'] = 'Incorrect password';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up required details first';
	}

	header('location:profile.php');

?>