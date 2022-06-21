<?php
	include '../includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE cricket set cricket_delete='1' WHERE cricket_id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Team deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select cricket to delete first';
	}

	header('location: cricket.php');
	
?>