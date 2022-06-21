<?php
	include 'includes/session.php';

	if(isset($_POST['bet']))
    {
        $cricket_bet_cricket_id = $_POST['cricket_id'];
        $cricket_bet_team_id = $_POST['team_id'];
        $cricket_bet_player_id = $_POST['player_id'];
        $cricket_bet_placed_amount = $_POST['bet_amount'];
        $cricket_bet_four = $_POST['four'];
        $cricket_bet_six = $_POST['six'];
        $cricket_bet_users_id=$_SESSION['id'];
		$conn = $pdo->open();
        try{

$stmt17 = $conn->prepare("SELECT cricket_team1_id,cricket_team2_id FROM cricket WHERE cricket_id=:id");
$stmt17->execute(['id'=>$cricket_bet_cricket_id]);
    foreach($stmt17 as $row17)
    if($row17['cricket_team1_id']==$cricket_bet_team_id)
        $team17=1;
    else
        $team17=2;
            $player_delete17='cricket_team'.$team17.'_player'.$cricket_bet_player_id.'_delete';
$stmt17 = $conn->prepare("SELECT $player_delete17 FROM cricket WHERE cricket_id=:id");
$stmt17->execute(['id'=>$cricket_bet_cricket_id]);
    foreach($stmt17 as $row17)
        if($row17[$player_delete17]==0){        
$stmt_user = $conn->prepare("SELECT user_amount,user_id FROM users WHERE user_id=:id");
$stmt_user->execute(['id'=>$cricket_bet_users_id]);
    foreach($stmt_user as $row1){
    $user_amount=$row1['user_amount'];
        if($user_amount>=$cricket_bet_placed_amount){
            
            $user_amount=$user_amount-$cricket_bet_placed_amount;
            
            $stmt = $conn->prepare("UPDATE users SET user_amount=:amount WHERE user_id=:id");
			$stmt->execute(['amount'=>$user_amount, 'id'=>$cricket_bet_users_id]);
            
            $stmt1 = $conn->prepare("SELECT * FROM cricket WHERE cricket_id=:id AND cricket_delete='0'");
    $stmt1->execute(['id'=>$cricket_bet_cricket_id]);
 $data=$stmt1->fetchAll();
 if(!empty($data))
 {
     foreach($data as $row)
     {
            for($i=1;$i<3;$i++)
            {
                $team='cricket_team'.$i.'_id';
                if($row[$team]==$cricket_bet_team_id)
                {
                    $player_four='cricket_team'.$i.'_player'.$cricket_bet_player_id.'_four';
                    $player_six='cricket_team'.$i.'_player'.$cricket_bet_player_id.'_six';
                    $four_ratio=floatval($cricket_bet_four)*$row[$player_four];
                    $six_ratio=floatval($cricket_bet_six)*$row[$player_six];
                    $ratio=$four_ratio+$six_ratio;
                    $cricket_bet_win_amount=$ratio*floatval($cricket_bet_placed_amount)+floatval($cricket_bet_placed_amount);
                }
            }
     }
 }
$stmt = $conn->prepare("INSERT INTO cricket_bet ( cricket_bet_users_id, cricket_bet_cricket_id, cricket_bet_team_id, cricket_bet_player_id, cricket_bet_four, cricket_bet_six, cricket_bet_placed_amount, cricket_bet_win_amount) VALUES (:cricket_bet_users_id, :cricket_bet_cricket_id, :cricket_bet_team_id, :cricket_bet_player_id, :cricket_bet_four, :cricket_bet_six, :cricket_bet_placed_amount, :cricket_bet_win_amount )");
            
$stmt->execute(['cricket_bet_users_id'=>$cricket_bet_users_id, 'cricket_bet_cricket_id'=>$cricket_bet_cricket_id, 'cricket_bet_team_id'=>$cricket_bet_team_id, 'cricket_bet_player_id'=>$cricket_bet_player_id, 'cricket_bet_four'=>$cricket_bet_four, 'cricket_bet_six'=>$cricket_bet_six, 'cricket_bet_placed_amount'=>$cricket_bet_placed_amount, 'cricket_bet_win_amount'=>$cricket_bet_win_amount ]);

            $_SESSION['success'] = 'Bet Placed successfully';
    }else{
    $_SESSION['error'] ='You don`t have sufficient balance.';
        }
    }
    }else{
            $_SESSION['error'] ='Please reload page before bet.';
        }
        }catch(PDOException $e){
            $_SESSION['error'] = $e->getMessage();
        }

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up cricket form first';
	}
header('location: cricket_view.php?id='.$cricket_bet_cricket_id);

?>