<?php
	include '../includes/session.php';

	if(isset($_POST['add'])){
        $team_category_id=$_POST['team_category_id'];
		$team_name = $_POST['team_name'];
        $player1 = $_POST['player1'];
         $player2 = $_POST['player2'];
         $player3 = $_POST['player3'];
         $player4 = $_POST['player4'];
         $player5 = $_POST['player5'];
         $player6 = $_POST['player6'];
         $player7 = $_POST['player7'];
         $player8 = $_POST['player8'];
         $player9 = $_POST['player9'];
         $player10 = $_POST['player10'];
         $player11 = $_POST['player11'];
         $player12 = $_POST['player12'];
        
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM teams WHERE team_name=:team_name");
		$stmt->execute(['team_name'=>$team_name]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Team name already taken';
		}
try{
$stmt = $conn->prepare("INSERT INTO teams (team_category_id,team_name, player1, player2, player3, player4, player5, player6, player7, player8, player9, player10, player11, player12) VALUES (:team_category_id, :team_name, :player1, :player2, :player3, :player4, :player5, :player6, :player7, :player8, :player9, :player10, :player11, :player12)");
$stmt->execute(['team_category_id'=>$team_category_id,'team_name'=>$team_name, 'player1'=>$player1, 'player2'=>$player2, 'player3'=>$player3, 'player4'=>$player4, 'player5'=>$player5, 'player6'=>$player6, 'player7'=>$player7, 'player8'=>$player8, 'player9'=>$player9, 'player10'=>$player10, 'player11'=>$player11, 'player12'=>$player12 ]);
				$_SESSION['success'] = 'Team added successfully';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up team form first';
	}

	header('location: teams.php');

?>