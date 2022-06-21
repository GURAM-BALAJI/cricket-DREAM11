<?php 
	include '../includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$conn = $pdo->open();
		$stmt = $conn->prepare("SELECT *,cricket_name FROM cricket_score left join cricket on cricket_id=cricket_score_cricket_id WHERE cricket_score_id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();
		
		$pdo->close();

		echo json_encode($row);
	}
?>