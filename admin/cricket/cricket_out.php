<?php
	include '../includes/session.php';

	if(isset($_POST['out'])){
	    $cricketscoreid = $_POST['cricketscoreid'];
	    $cricket_name = $_POST['cricket_name'];
	    $cricket_score_cricket_id = $_POST['cricket_score_cricket_id'];
	    $cricket_score_team_id = $_POST['cricket_score_team_id'];
	    $cricket_score_player_id = $_POST['cricket_score_player_id'];
		$conn = $pdo->open();

		try{
            
             $stmt01 = $conn->prepare("SELECT * FROM cricket_score WHERE cricket_score_id=:id");
        $stmt01->execute(['id' => $cricketscoreid]);
        foreach ($stmt01 as $row0){
            $num_four = $row0['cricket_score_player_four'];
            $num_six = $row0['cricket_score_player_six'];
        }
        $stmt = $conn->prepare("SELECT cricket_bet_id,cricket_bet_users_id,cricket_bet_win_amount FROM cricket_bet WHERE cricket_bet_cricket_id=:cricket_score_cricket_id AND cricket_bet_team_id=:cricket_score_team_id AND cricket_bet_player_id=:cricket_score_player_id AND cricket_bet_four<=:cricket_bet_four AND cricket_bet_six<=:cricket_bet_six AND cricket_bet_win=:cricket_bet_win");
        $stmt->execute(['cricket_score_cricket_id' => $cricket_score_cricket_id, 'cricket_score_team_id' => $cricket_score_team_id, 'cricket_score_player_id' => $cricket_score_player_id, 'cricket_bet_four' => $num_four, 'cricket_bet_six' => $num_six, 'cricket_bet_win'=>'0']);
        foreach ($stmt as $row){
            $bet_id=$row['cricket_bet_id'];
            $user_id = $row['cricket_bet_users_id'];
            $stmt11 = $conn->prepare("SELECT user_amount FROM users WHERE user_id=:user_id ");
        $stmt11->execute([ 'user_id' =>$user_id]);
        foreach ($stmt11 as $row11)
            $amount = $row11['user_amount'];
            $win_amount = $row['cricket_bet_win_amount'];
            $amount=$amount+$win_amount;
            $stmt1 = $conn->prepare("UPDATE cricket_bet SET cricket_bet_win='2' WHERE cricket_bet_id=:id");
            $stmt1->execute(['id' => $bet_id]);
            $stmt2 = $conn->prepare("UPDATE users SET user_amount=:amount WHERE user_id=:id");
            $stmt2->execute(['amount' =>$amount , 'id' => $user_id]);
        }

            
			$stmt = $conn->prepare("SELECT cricket_bet_id FROM cricket_bet WHERE cricket_bet_cricket_id=:cricket_score_cricket_id AND cricket_bet_team_id=:cricket_score_team_id AND cricket_bet_player_id=:cricket_score_player_id AND cricket_bet_win='0'");
			$stmt->execute(['cricket_score_cricket_id'=>$cricket_score_cricket_id, 'cricket_score_team_id'=>$cricket_score_team_id, 'cricket_score_player_id'=>$cricket_score_player_id ]);
            foreach($stmt as $row){
                $bet_id=$row['cricket_bet_id'];
                $stmt1 = $conn->prepare("UPDATE cricket_bet SET cricket_bet_win='1' WHERE cricket_bet_id=:id");
                $stmt1->execute(['id'=>$bet_id]);
            }
            $stmt1 = $conn->prepare("DELETE FROM cricket_score WHERE cricket_score_id=:id");
            $stmt1->execute(['id'=>$cricketscoreid]);
			$_SESSION['success'] = 'Player Out Added successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select Player to delete first';
	}

	header('location: cricket_score.php?id='.$cricket_score_cricket_id.'&name='.$cricket_name);
	
?>