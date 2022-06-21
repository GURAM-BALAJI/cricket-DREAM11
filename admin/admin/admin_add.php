<?php
	include '../includes/session.php';

	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];
        $dob = $_POST['dob'];

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM admin WHERE admin_email=:email");
		$stmt->execute(['email'=>$email]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Email already taken';
		}
		else{
			$password = password_hash($password, PASSWORD_DEFAULT);
			$filename = $_FILES['photo']['name'];
			if(!empty($filename)){
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                    $filename=date('Y-m-d').'_'.time().'.'.$ext;
				move_uploaded_file($_FILES['photo']['tmp_name'], '../../images/'.$filename);	
			}
try{
$stmt = $conn->prepare("INSERT INTO admin (admin_email, admin_password, admin_name, admin_phone, admin_photo, admin_status, admin_dob) VALUES (:email, :password, :name, :contact, :photo, :status, :dob)");
$stmt->execute(['email'=>$email, 'password'=>$password, 'name'=>$name, 'contact'=>$contact, 'photo'=>$filename, 'status'=>1, 'dob'=>$dob ]);
				$_SESSION['success'] = 'admin added successfully';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up admin form first';
	}

	header('location: admin.php');

?>