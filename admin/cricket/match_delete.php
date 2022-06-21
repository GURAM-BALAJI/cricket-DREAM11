<?php
	include '../includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE cricket_match set cricket_match_delete='1' WHERE cricket_match_id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Cricket match deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select cricket match to delete first';
	}

	header('location: match.php');
	
?>