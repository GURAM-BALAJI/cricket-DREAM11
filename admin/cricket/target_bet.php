<?php
	include '../includes/session.php';

	
if(isset($_POST['bet'])){
    $cricket_id = $_POST['id'];
    $cricket_score = $_POST['cricket_score'];
    $conn = $pdo->open();

    try {

for($i=0;$i<10;$i++){
    $neg_score=$cricket_score-$i;
    $pos_score=$cricket_score+$i;
    $mul=10-$i;
    $stmt = $conn->prepare("SELECT * FROM cricket_target_bet WHERE cricket_target_bet_target=:neg_score AND cricket_target_bet_win=:win AND cricket_target_bet_cricket_id=:id");
        $stmt->execute([ 'neg_score' =>$neg_score, 'id'=>$cricket_id, 'win'=>'0']);
        foreach($stmt as $row){
            $cricket_target_bet_id=$row['cricket_target_bet_id'];
            $user_id=$row['cricket_target_bet_user_id'];
            $bet_amount=$row['cricket_target_bet_bet_amount'];
             $amount=$bet_amount*$mul;
            $amount=$amount/2;
            if($cricket_score==$neg_score)
                $amount=$amount*2;
            $amount+=$bet_amount;
    $stmt1 = $conn->prepare("UPDATE cricket_target_bet SET cricket_target_bet_win='2', cricket_target_bet_win_amount=:win_amount WHERE cricket_target_bet_id=:id");
    $stmt1->execute(['id' => $cricket_target_bet_id, 'win_amount'=>$amount]);
           

            $stmt11 = $conn->prepare("SELECT user_amount FROM users WHERE user_id=:user_id ");
        $stmt11->execute([ 'user_id' =>$user_id]);
        foreach($stmt11 as $row11)
            $amount+=$row11['user_amount'];
            $stmt2 = $conn->prepare("UPDATE users SET user_amount=:amount WHERE user_id=:id");
            $stmt2->execute(['amount' =>$amount , 'id' => $user_id]);
        }
     $stmt = $conn->prepare("SELECT * FROM cricket_target_bet WHERE cricket_target_bet_target=:pos_score AND cricket_target_bet_win=:win AND cricket_target_bet_cricket_id=:id");
        $stmt->execute([ 'pos_score' =>$pos_score, 'id'=>$cricket_id, 'win'=>'0']);
        foreach($stmt as $row){
            $cricket_target_bet_id=$row['cricket_target_bet_id'];
            $user_id=$row['cricket_target_bet_user_id'];
            $bet_amount=$row['cricket_target_bet_bet_amount'];
    $amount=$bet_amount*$mul;
            $amount=$amount/2;
            $amount+=$bet_amount;
    $stmt1 = $conn->prepare("UPDATE cricket_target_bet SET cricket_target_bet_win='2', cricket_target_bet_win_amount=:win_amount WHERE cricket_target_bet_id=:id");
    $stmt1->execute(['id' => $cricket_target_bet_id, 'win_amount'=>$amount]);
            
            $stmt = $conn->prepare("SELECT user_amount FROM users WHERE user_id=:user_id ");
        $stmt->execute([ 'user_id' =>$user_id]);
        foreach($stmt as $row11)
            $amount+=$row11['user_amount'];
            $stmt2 = $conn->prepare("UPDATE users SET user_amount=:amount WHERE user_id=:id");
            $stmt2->execute(['amount'=>$amount , 'id'=>$user_id]);
        }
}
        $stmt = $conn->prepare("SELECT * FROM cricket_target_bet WHERE cricket_target_bet_win=:win AND cricket_target_bet_cricket_id=:id");
        $stmt->execute([ 'id'=>$cricket_id, 'win'=>'0']);
        foreach ($stmt as $row){
            $cricket_target_bet_id=$row['cricket_target_bet_id'];
            $stmt1 = $conn->prepare("UPDATE cricket_target_bet SET cricket_target_bet_win='1' WHERE cricket_target_bet_id=:id");
    $stmt1->execute(['id' => $cricket_target_bet_id]);
        }
        $_SESSION['success'] = 'cricket score updated successfully';
    }catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
    }

    $pdo->close();

}else
    $_SESSION['error'] = 'Select target to add first';

	header('location: target.php');
	
?>