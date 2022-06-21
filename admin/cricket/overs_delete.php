<?php
	include '../includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE cricket_overs set cricket_overs_delete='1' WHERE cricket_overs_id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Cricket overs deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select cricket overs to delete first';
	}

	header('location: overs.php');
	
?>