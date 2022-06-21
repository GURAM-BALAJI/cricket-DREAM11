<?php
	include '../includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE teams set team_delete='1' WHERE team_id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Team deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select Team to delete first';
	}

	header('location: teams.php');
	
?>