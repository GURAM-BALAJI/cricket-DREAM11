<?php
	include '../includes/session.php';

	if(isset($_POST['add'])){
        $team1_id=$_POST['team1_id'];
        $team1_rate=$_POST['team1_rate'];
        $team2_id=$_POST['team2_id'];
        $team2_rate=$_POST['team2_rate'];
        $cricket = $_POST['cricket'];
        $conn = $pdo->open();

$stmt = $conn->prepare("INSERT INTO cricket_toss (cricket_toss_cricket_id, cricket_toss_team1_id, cricket_toss_team2_id, cricket_toss_team1_ratio, cricket_toss_team2_ratio) 
VALUES(:cricket_toss_cricket_id, :cricket_toss_team1_id, :cricket_toss_team2_id, :cricket_toss_team1_ratio, :cricket_toss_team2_ratio )");
$stmt->execute(['cricket_toss_cricket_id'=>$cricket, 'cricket_toss_team1_id'=>$team1_id, 'cricket_toss_team2_id'=>$team2_id, 'cricket_toss_team1_ratio'=>$team1_rate, 'cricket_toss_team2_ratio'=>$team2_rate]);
				$_SESSION['success'] = 'cricket toss added successfully';

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up cricket toss form first';
	}
header('location: toss.php');
	

?>