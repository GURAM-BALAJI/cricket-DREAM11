<?php
	include '../includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
        if(!empty($_POST['category']))
        $team_category_id=$_POST['category'];
            else
        $team_category_id=$_POST['category_id'];
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

		try{
			$stmt = $conn->prepare("UPDATE teams SET team_category_id=:team_category_id, team_name=:team_name, player1=:player1, player2=:player2, player3=:player3, player4=:player4, player5=:player5, player6=:player6, player7=:player7, player8=:player8, player9=:player9, player10=:player10, player11=:player11, player12=:player12 WHERE team_id=:id");
			$stmt->execute(['team_category_id'=>$team_category_id, 'team_name'=>$team_name, 'player1'=>$player1, 'player2'=>$player2, 'player3'=>$player3, 'player4'=>$player4, 'player5'=>$player5, 'player6'=>$player6, 'player7'=>$player7, 'player8'=>$player8, 'player9'=>$player9, 'player10'=>$player10, 'player11'=>$player11, 'player12'=>$player12, 'id'=>$id]);
			$_SESSION['success'] = 'Team updated successfully';

		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit team form first';
	}

	header('location: teams.php');

?>