<?php
	include '../includes/session.php';

	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];
        $dob = $_POST['dob'];
        $amount = $_POST['amount'];
        $referal = $_POST['referal'];
        $by=$admin['admin_id'];
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE user_email=:email || user_phone=:phone");
		$stmt->execute(['email'=>$email, 'phone'=>$contact]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Email or phone number already taken.';
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
$stmt = $conn->prepare("INSERT INTO users (user_email, user_password, first_name, last_name, user_phone, user_photo, user_status, user_dob, user_amount, referal_by) VALUES (:email, :password, :firstname, :lastname, :contact, :photo, :status, :dob, :amount, :referal_by)");
$stmt->execute(['email'=>$email, 'password'=>$password, 'firstname'=>$firstname, 'lastname'=>$lastname, 'contact'=>$contact, 'photo'=>$filename, 'status'=>1, 'dob'=>$dob, 'amount'=>$amount, 'referal_by'=>$referal ]);
    
   $stmt_user2 = $conn->prepare("SELECT user_id FROM users WHERE user_email=:email");
$stmt_user2->execute(['email'=>$email]);
    foreach($stmt_user2 as $row1){
        $user_id=$row1['user_id'];
    };
    
    $stmt = $conn->prepare("INSERT INTO transaction ( transaction_user_id, transaction_send_to, transaction_amount, transaction_method, transaction_added_by) VALUES (:transaction_user_id, :transaction_send_to, :transaction_amount, :transaction_method, :transaction_added_by)");
$stmt->execute(['transaction_user_id'=>$user_id, 'transaction_send_to'=>0, 'transaction_amount'=>$amount, 'transaction_method'=>'login', 'transaction_added_by'=>$by]);

				$_SESSION['success'] = 'User added successfully';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up user form first';
	}

	header('location: users.php');

?>