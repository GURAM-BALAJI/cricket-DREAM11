<?php
	include '../includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE cricket_session set cricket_session_delete='1' WHERE cricket_session_id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Cricket session deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select cricket session to delete first';
	}

	header('location: session.php');
	
?>