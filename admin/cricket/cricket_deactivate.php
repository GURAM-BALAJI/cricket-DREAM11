<?php
	include '../includes/session.php';

	if(isset($_POST['deactivate'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE cricket SET cricket_active=:status WHERE cricket_id=:id");
			$stmt->execute(['status'=>0, 'id'=>$id]);
			$_SESSION['success'] = 'cricket deactivated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();

	}
	else{
		$_SESSION['error'] = 'Select cricket to deactivate first';
	}

	header('location: cricket.php');
?>