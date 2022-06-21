<?php
	include '../includes/session.php';

	if(isset($_POST['deactivate'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE cricket_overs SET cricket_overs_status=:status WHERE cricket_overs_id=:id");
			$stmt->execute(['status'=>0, 'id'=>$id]);
			$_SESSION['success'] = 'cricket overs deactivated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();

	}
	else{
		$_SESSION['error'] = 'Select cricket overs to deactivate first';
	}

	header('location: overs.php');
?>