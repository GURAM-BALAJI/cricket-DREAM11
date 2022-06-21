<?php
	include '../includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
        $edit_team1_ratio = $_POST['edit_team1_ratio'];
        $edit_team2_ratio = $_POST['edit_team2_ratio'];
		$conn = $pdo->open();
		try{
			$stmt = $conn->prepare("UPDATE cricket_toss SET cricket_toss_team1_ratio=:cricket_toss_team1_ratio, cricket_toss_team2_ratio=:cricket_toss_team2_ratio WHERE cricket_toss_id=:id");
			$stmt->execute(['cricket_toss_team1_ratio'=>$edit_team1_ratio,'cricket_toss_team2_ratio'=>$edit_team2_ratio, 'id'=>$id ]);
			$_SESSION['success'] = 'cricket toss updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit cricket toss form first';
	}

	header('location: toss.php');

?>