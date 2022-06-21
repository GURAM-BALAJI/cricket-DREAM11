<?php 
	include '../includes/session.php';

	if(isset($_POST['id'])){
		$id=$_POST['id'];
		
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT * FROM cricket_toss WHERE cricket_toss_id=:id");
		$stmt->execute(['id'=>$id]);
		foreach($stmt as $row1){
            $cricket_toss_cricket_id=$row1['cricket_toss_cricket_id'];
            $cricket_toss_team1_id=$row1['cricket_toss_team1_id'];
            $cricket_toss_team1_ratio=$row1['cricket_toss_team1_ratio'];
            $cricket_toss_team2_id=$row1['cricket_toss_team2_id'];
            $cricket_toss_team2_ratio=$row1['cricket_toss_team2_ratio'];
        }
        $stmt = $conn->prepare("SELECT team_name FROM teams WHERE team_id=:id");
		$stmt->execute(['id'=>$cricket_toss_team1_id]);
		foreach($stmt as $row1){
            $team1_name=$row1['team_name'];
        }
           $stmt = $conn->prepare("SELECT team_name FROM teams WHERE team_id=:id");
		$stmt->execute(['id'=>$cricket_toss_team2_id]);
		foreach($stmt as $row1){
            $team2_name=$row1['team_name'];
        }
           $stmt = $conn->prepare("SELECT cricket_name FROM cricket WHERE cricket_id=:id");
		$stmt->execute(['id'=>$cricket_toss_cricket_id]);
		foreach($stmt as $row1){
            $cricket_name=$row1['cricket_name'];
        }
            $row = array(
'cricket_toss_cricket_id'=>$id,
'cricket_toss_team1_id'=>$cricket_toss_team1_id,
'cricket_toss_team1_ratio'=>$cricket_toss_team1_ratio,
'cricket_toss_team2_id'=>$cricket_toss_team2_id,
'cricket_toss_team2_ratio'=>$cricket_toss_team2_ratio,
'team1_name'=>$team1_name,
'team2_name'=>$team2_name,
'cricket_name'=>$cricket_name,
                );
		
		$pdo->close();

		echo json_encode($row);
	}
?>