<?php
	include '../includes/session.php';

	if(isset($_POST['add'])){
		$id = $_POST['id'];
		$add_amount = $_POST['add_amount'];

		$conn = $pdo->open();
		$stmt = $conn->prepare("SELECT * FROM users WHERE user_id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();

			$amount = $row['user_amount'];
        $by=$admin['admin_id'];
        $amount=intval($add_amount)+intval($amount);
		try{
			$stmt = $conn->prepare("UPDATE users SET user_amount=:amount, updated_by_id=:by WHERE user_id=:id");
			$stmt->execute(['amount'=>$amount, 'by'=>$by, 'id'=>$id]);
            
             $stmt = $conn->prepare("INSERT INTO transaction ( transaction_user_id, transaction_send_to, transaction_amount, transaction_method, transaction_added_by) VALUES (:transaction_user_id, :transaction_send_to, :transaction_amount, :transaction_method, :transaction_added_by)");
$stmt->execute(['transaction_user_id'=>$id, 'transaction_send_to'=>'BY YOUR SELF', 'transaction_amount'=>$add_amount, 'transaction_method'=>'add amount', 'transaction_added_by'=>$by]);
            
			$_SESSION['success'] = $add_amount.' Rs updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up money user form first';
	}

	header('location: users.php');

?>