<?php
	include '../includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE category set category_delete='1' WHERE category_id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Category deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select category to delete first';
	}

	header('location: category.php');
	
?>