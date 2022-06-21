<?php
	include 'includes/session.php';

	if(isset($_POST['bet']))
    {
        $target_val = $_POST['target_val'];
     $cricket_bet_placed_amount = $_POST['target_amount'];
        $target_cricket_id = $_POST['target_cricket_id'];
        $cricket_bet_users_id=$_SESSION['id'];
		$conn = $pdo->open();
        try{
            
     $stmt17 = $conn->prepare("SELECT cricket_target_suspended FROM cricket WHERE cricket_id=:id AND cricket_delete=0");
$stmt17->execute(['id'=>$target_cricket_id]);
    foreach($stmt17 as $row17)
        if($row17['cricket_target_suspended']==0){
    $stmt_user = $conn->prepare("SELECT user_amount FROM users WHERE user_id=:id");
$stmt_user->execute(['id'=>$cricket_bet_users_id]);
    foreach($stmt_user as $row1){
    $user_amount=$row1['user_amount'];
        if($user_amount>=$cricket_bet_placed_amount){
            $user_amount=$user_amount-$cricket_bet_placed_amount;
            $stmt = $conn->prepare("UPDATE users SET user_amount=:amount WHERE user_id=:id");
			$stmt->execute(['amount'=>$user_amount, 'id'=>$cricket_bet_users_id]);
$stmt = $conn->prepare("INSERT INTO cricket_target_bet ( cricket_target_bet_user_id, cricket_target_bet_cricket_id, cricket_target_bet_target, cricket_target_bet_bet_amount)  VALUES (:cricket_target_bet_user_id, :cricket_target_bet_cricket_id, :cricket_target_bet_target, :cricket_target_bet_bet_amount )");
$stmt->execute(['cricket_target_bet_user_id'=>$cricket_bet_users_id, 'cricket_target_bet_cricket_id'=>$target_cricket_id, 'cricket_target_bet_target'=>$target_val, 'cricket_target_bet_bet_amount'=>$cricket_bet_placed_amount ]);

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
header('location: cricket_view.php?id='.$target_cricket_id);

?>