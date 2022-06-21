<?php
	include 'includes/session.php';

	if(isset($_POST['bet']))
    {
        $id = $_POST['id'];
        $id=explode(',',$id);
        $cricket_bet_placed_amount = $_POST['over_bet_amount'];
        $cricket_bet_users_id=$_SESSION['id'];
		$conn = $pdo->open();
        try{
            
$stmt17 = $conn->prepare("SELECT cricket_overs_completed_overs FROM cricket_overs WHERE cricket_overs_id=:id AND cricket_overs_delete='0'");
$stmt17->execute(['id'=>$id[0]]);
    foreach($stmt17 as $row17)
        if(intval($row17['cricket_overs_completed_overs']+1)<$id[3]){
    $stmt_user = $conn->prepare("SELECT user_amount FROM users WHERE user_id=:id");
$stmt_user->execute(['id'=>$cricket_bet_users_id]);
    foreach($stmt_user as $row1){
    $user_amount=$row1['user_amount'];
        if($user_amount>=$cricket_bet_placed_amount){
            
            $user_amount=$user_amount-$cricket_bet_placed_amount;
            
            $stmt = $conn->prepare("UPDATE users SET user_amount=:amount WHERE user_id=:id");
			$stmt->execute(['amount'=>$user_amount, 'id'=>$cricket_bet_users_id]);
            
            $stmt1 = $conn->prepare("SELECT * FROM cricket_overs WHERE cricket_overs_id=:id AND cricket_overs_delete='0'");
    $stmt1->execute(['id'=>$id[0]]);
 $data=$stmt1->fetchAll();
 if(!empty($data))
 {
     foreach($data as $row)
     {
         if($id[4]==0)
        $ratio='cricket_overs_yes_ratio';
        else
        $ratio='cricket_overs_no_ratio';
         $rate=$row[$ratio];
        $rate=explode(",",$rate);
        $rate=$rate[$id[3]-1];
         
        $score=$row['cricket_overs_score'];
        $score=explode(",",$score);
        $score=$score[$id[3]-1];
         
                    $cricket_bet_win_amount=floatval($rate)*$cricket_bet_placed_amount;
     }
 }
$stmt = $conn->prepare("INSERT INTO cricket_overs_bet ( cricket_overs_bet_user_id, cricket_overs_bet_cricket_overs_id, cricket_overs_bet_bet_amount, cricket_overs_bet_win_amount, cricket_overs_bet_overs_no, cricket_overs_bet_score, cricket_overs_bet_yes_no, cricket_overs_bet_rate) VALUES (:cricket_overs_bet_user_id, :cricket_overs_bet_cricket_overs_id, :cricket_overs_bet_bet_amount, :cricket_overs_bet_win_amount, :cricket_overs_bet_overs_no, :cricket_overs_bet_score, :cricket_overs_bet_yes_no, :cricket_overs_bet_rate )");
            
$stmt->execute(['cricket_overs_bet_user_id'=>$cricket_bet_users_id, 'cricket_overs_bet_cricket_overs_id'=>$id[0], 'cricket_overs_bet_bet_amount'=>$cricket_bet_placed_amount, 'cricket_overs_bet_win_amount'=>$cricket_bet_win_amount, 'cricket_overs_bet_overs_no'=>$id[3], 'cricket_overs_bet_score'=>$score, 'cricket_overs_bet_yes_no'=>$id[4], 'cricket_overs_bet_rate'=>$rate ]);

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