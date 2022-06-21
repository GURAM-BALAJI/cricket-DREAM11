<?php
	include 'includes/session.php';

	if(isset($_POST['bet']))
    {
        $id = $_POST['id'];
        $id=explode(',',$id);
        $cricket_bet_placed_amount = $_POST['session_bet_amount'];
        $cricket_bet_users_id=$_SESSION['id'];
		$conn = $pdo->open();
        try{
            
$stmt17 = $conn->prepare("SELECT cricket_session_status FROM cricket_session WHERE cricket_session_id=:id AND cricket_session_delete='0'");
$stmt17->execute(['id'=>$id[0]]);
    foreach($stmt17 as $row17)
        if(intval($row17['cricket_session_status'])==1){
    $stmt_user = $conn->prepare("SELECT user_amount FROM users WHERE user_id=:id");
$stmt_user->execute(['id'=>$cricket_bet_users_id]);
    foreach($stmt_user as $row1){
    $user_amount=$row1['user_amount'];
        if($user_amount>=$cricket_bet_placed_amount){
            
            $user_amount=$user_amount-$cricket_bet_placed_amount;
            
            $stmt = $conn->prepare("UPDATE users SET user_amount=:amount WHERE user_id=:id");
			$stmt->execute(['amount'=>$user_amount, 'id'=>$cricket_bet_users_id]);
            
            $stmt1 = $conn->prepare("SELECT * FROM cricket_session WHERE cricket_session_id=:id AND cricket_session_delete='0'");
    $stmt1->execute(['id'=>$id[0]]);
 $data=$stmt1->fetchAll();
 if(!empty($data))
 {
     foreach($data as $row)
     {
         $cricket_session_bet_till_overs=$row['cricket_session_till_overs'];
         if($id[4]==0)
        $ratio='cricket_session_yes_ratio';
        else
        $ratio='cricket_session_no_ratio';
         $rate=$row[$ratio];
        $rate=explode(",",$rate);
        $rate=$rate[$id[3]];
         
        $score=$row['cricket_session_score'];
        $score=explode(",",$score);
        $score=$score[$id[3]];
         
                    $cricket_bet_win_amount=floatval($rate)*$cricket_bet_placed_amount;
     }
 }
$stmt = $conn->prepare("INSERT INTO cricket_session_bet ( cricket_session_bet_user_id, cricket_session_bet_cricket_session_id, cricket_session_bet_bet_amount, cricket_session_bet_win_amount, cricket_session_bet_session_no, cricket_session_bet_score, cricket_session_bet_yes_no, cricket_session_bet_rate, cricket_session_bet_till_overs) VALUES (:cricket_session_bet_user_id, :cricket_session_bet_cricket_session_id, :cricket_session_bet_bet_amount, :cricket_session_bet_win_amount, :cricket_session_bet_session_no, :cricket_session_bet_score, :cricket_session_bet_yes_no, :cricket_session_bet_rate, :cricket_session_bet_till_overs )");
            
$stmt->execute(['cricket_session_bet_user_id'=>$cricket_bet_users_id, 'cricket_session_bet_cricket_session_id'=>$id[0], 'cricket_session_bet_bet_amount'=>$cricket_bet_placed_amount, 'cricket_session_bet_win_amount'=>$cricket_bet_win_amount, 'cricket_session_bet_session_no'=>$id[3], 'cricket_session_bet_score'=>$score, 'cricket_session_bet_yes_no'=>$id[4], 'cricket_session_bet_rate'=>$rate, 'cricket_session_bet_till_overs'=>$cricket_session_bet_till_overs ]);

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
header('location: cricket_view.php?id='.$id[1]);

?>