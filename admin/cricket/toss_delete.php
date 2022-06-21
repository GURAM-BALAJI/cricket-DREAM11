<?php
	include '../includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE cricket_toss set cricket_toss_delete='1' WHERE cricket_toss_id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Cricket toss deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select cricket toss to delete first';
	}

	header('location: toss.php');
	
?>