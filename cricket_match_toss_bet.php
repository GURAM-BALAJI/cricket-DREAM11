<?php
	include 'includes/session.php';

	if(isset($_POST['bet']))
    {
        $match_toss_cricket_id = $_POST['match_toss_cricket_id'];
        $match_toss_team_id = $_POST['match_toss_team_id'];
        $toss_match = $_POST['toss_match'];
        $bet_amount = $_POST['match_toss_bet_amount'];
        $users_id=$_SESSION['id'];
        if($toss_match==0)
            $toss_match="match";
        else
            $toss_match="toss";
		$conn = $pdo->open();
        try{
            
            $cricket_toss_match='cricket_'.$toss_match;
             $cricket_toss_match_cricket_id='cricket_'.$toss_match.'_cricket_id';
            $cricket_match_toss_suspended='cricket_'.$toss_match.'_suspended';
            $cricket_match_toss_delete='cricket_'.$toss_match.'_delete';
$stmt_user17 = $conn->prepare("SELECT $cricket_match_toss_suspended FROM $cricket_toss_match WHERE $cricket_toss_match_cricket_id=:id AND $cricket_match_toss_delete=0");
$stmt_user17->execute(['id'=>$match_toss_cricket_id]);
    foreach($stmt_user17 as $row17)
        if($row17[$cricket_match_toss_suspended]==0){
    $stmt_user = $conn->prepare("SELECT user_amount FROM users WHERE user_id=:id");
$stmt_user->execute(['id'=>$users_id]);
    foreach($stmt_user as $row1){
    $user_amount=$row1['user_amount'];
        if($user_amount>=$bet_amount){
            $user_amount=$user_amount-$bet_amount;
            $stmt = $conn->prepare("UPDATE users SET user_amount=:amount WHERE user_id=:id");
			$stmt->execute(['amount'=>$user_amount, 'id'=>$users_id]);

    $stmt1 = $conn->prepare("SELECT * FROM $cricket_toss_match WHERE $cricket_toss_match_cricket_id=:id AND $cricket_match_toss_delete=0");
    $stmt1->execute(['id'=>$match_toss_cricket_id]);
 $data=$stmt1->fetchAll();
 if(!empty($data))
 {
     foreach($data as $row)
     {
         for($i=1;$i<3;$i++){
         $cricket_toss_match_team_id='cricket_'.$toss_match.'_team'.$i.'_id';
               if($row[$cricket_toss_match_team_id]==$match_toss_team_id){
                   $cricket_toss_match_team_ratio='cricket_'.$toss_match.'_team'.$i.'_ratio';
                   $rate=$row[$cricket_toss_match_team_ratio];
               }
         }
                    $cricket_bet_win_amount=floatval($rate)*$bet_amount;
     }
 }
            $cricket_toss_match_bet='cricket_'.$toss_match.'_bet';
            $cricket_toss_match_bet_rate='cricket_'.$toss_match.'_bet_rate';
            $cricket_toss_match_bet_user_id='cricket_'.$toss_match.'_bet_user_id';
            $cricket_toss_match_bet_cricket_id='cricket_'.$toss_match.'_bet_cricket_id';	
            $cricket_toss_match_bet_team_id='cricket_'.$toss_match.'_bet_team_id';	
            $cricket_toss_match_bet_bet_amount='cricket_'.$toss_match.'_bet_bet_amount';	
            $cricket_toss_match_bet_win_amount='cricket_'.$toss_match.'_bet_win_amount';				
$stmt = $conn->prepare("INSERT INTO $cricket_toss_match_bet ( $cricket_toss_match_bet_user_id, $cricket_toss_match_bet_cricket_id, $cricket_toss_match_bet_team_id, $cricket_toss_match_bet_bet_amount, $cricket_toss_match_bet_win_amount,$cricket_toss_match_bet_rate ) VALUES (:cricket_toss_match_bet_user_id, :cricket_toss_match_bet_cricket_id, :cricket_toss_match_bet_team_id, :cricket_toss_match_bet_bet_amount, :cricket_toss_match_bet_win_amount, :cricket_toss_match_bet_rate )");
            
$stmt->execute([ 'cricket_toss_match_bet_user_id'=>$users_id,  'cricket_toss_match_bet_cricket_id'=>$match_toss_cricket_id,  'cricket_toss_match_bet_team_id'=>$match_toss_team_id, 'cricket_toss_match_bet_bet_amount'=>$bet_amount,  'cricket_toss_match_bet_win_amount'=>$cricket_bet_win_amount, 'cricket_toss_match_bet_rate'=>$rate ]);

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
header('location: cricket_view.php?id='.$match_toss_cricket_id);

?>