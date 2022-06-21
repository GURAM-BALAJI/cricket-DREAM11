<?php
	include '../includes/session.php';

	if(isset($_POST['add_player'])){

        $cricket_score_cricket_id = $_POST['cricket_id'];
        $cricket_score_team_id = $_POST['team_id'];
        $cricket_score_player_id = $_POST['player_id'];
        $cricket_score_player_name = $_POST['player_name'];
        $cricket_name = $_POST['cricket_name'];
        $num = $_POST['num'];

		$conn = $pdo->open();
        try{
$stmt = $conn->prepare("INSERT INTO cricket_score ( cricket_score_cricket_id, cricket_score_team_id, cricket_score_player_id, cricket_score_player_name) VALUES (:cricket_score_cricket_id, :cricket_score_team_id, :cricket_score_player_id, :cricket_score_player_name )");
$stmt->execute(['cricket_score_cricket_id'=>$cricket_score_cricket_id, 'cricket_score_team_id'=>$cricket_score_team_id, 'cricket_score_player_id'=>$cricket_score_player_id, 'cricket_score_player_name'=>$cricket_score_player_name ]);
            $delete='cricket_team'.$num.'_player'.$cricket_score_player_id.'_delete';
            $stmt = $conn->prepare("UPDATE cricket SET $delete=1 WHERE cricket_id=:id");
            $stmt->execute(['id'=>$cricket_score_cricket_id ]);
            $_SESSION['success'] = 'Player added successfully';
        }
        catch(PDOException $e){
            $_SESSION['error'] = $e->getMessage();
        }

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up cricket form first';
	}
header('location: cricket_score.php?id='.$cricket_score_cricket_id.'&name='.$cricket_name);

?>