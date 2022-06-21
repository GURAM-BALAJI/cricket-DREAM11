<?php
	include '../includes/session.php';

	if(isset($_POST['add'])){
        $team1_id=$_POST['team1_id'];
        $team1_rate=$_POST['team1_rate'];
        $team2_id=$_POST['team2_id'];
        $team2_rate=$_POST['team2_rate'];
        $cricket = $_POST['cricket'];
        $conn = $pdo->open();

$stmt = $conn->prepare("INSERT INTO cricket_match (cricket_match_cricket_id, cricket_match_team1_id, cricket_match_team2_id, cricket_match_team1_ratio, cricket_match_team2_ratio) 
VALUES(:cricket_match_cricket_id, :cricket_match_team1_id, :cricket_match_team2_id, :cricket_match_team1_ratio, :cricket_match_team2_ratio )");
$stmt->execute(['cricket_match_cricket_id'=>$cricket, 'cricket_match_team1_id'=>$team1_id, 'cricket_match_team2_id'=>$team2_id, 'cricket_match_team1_ratio'=>$team1_rate, 'cricket_match_team2_ratio'=>$team2_rate]);
				$_SESSION['success'] = 'cricket match added successfully';

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up cricket match form first';
	}
header('location: match.php');
	

?>