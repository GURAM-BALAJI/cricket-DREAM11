<?php
	include '../includes/session.php';

	
if(isset($_POST['add'])){
    $cricket_session_id = $_POST['cricket_session_id'];
    $cricket_session_score = $_POST['cricket_session_score'];
    $conn = $pdo->open();

    try {


        $stmt = $conn->prepare("SELECT * FROM cricket_session_bet WHERE cricket_session_bet_cricket_session_id=:cricket_session_bet_cricket_session_id AND cricket_session_bet_bet_win=:cricket_session_bet_bet_win ");
        $stmt->execute([ 'cricket_session_bet_cricket_session_id' => $cricket_session_id, 'cricket_session_bet_bet_win'=>'0']);
        foreach ($stmt as $row){
            $yes_no=$row['cricket_session_bet_yes_no'];
            $user_id = $row['cricket_session_bet_user_id'];
            $score = $row['cricket_session_bet_score'];
            $bet_id=$row['cricket_session_bet_id'];
            if($yes_no==0){
                if($score>$cricket_session_score){
                       $stmt11 = $conn->prepare("SELECT user_amount FROM users WHERE user_id=:user_id ");
        $stmt11->execute([ 'user_id' =>$user_id]);
        foreach($stmt11 as $row11)
            $amount = $row11['user_amount'];
            $win_amount = $row['cricket_session_bet_win_amount'];
            $amount=$amount+$win_amount;
            $stmt1 = $conn->prepare("UPDATE cricket_session_bet SET cricket_session_bet_bet_win='2' WHERE cricket_session_bet_id=:id");
            $stmt1->execute(['id' => $bet_id]);
            $stmt2 = $conn->prepare("UPDATE users SET user_amount=:amount WHERE user_id=:id");
            $stmt2->execute(['amount'=>$amount , 'id'=>$user_id]);
                }else{
                 $stmt1 = $conn->prepare("UPDATE cricket_session_bet SET cricket_session_bet_bet_win='1' WHERE cricket_session_bet_id=:id");
            $stmt1->execute(['id' => $bet_id]);   
                }
            }else{
                if($score<$cricket_session_score){
                       $stmt11 = $conn->prepare("SELECT user_amount FROM users WHERE user_id=:user_id ");
        $stmt11->execute([ 'user_id' =>$user_id]);
        foreach($stmt11 as $row11)
                $amount = $row11['user_amount'];
            $win_amount = $row['cricket_session_bet_win_amount'];
            $amount=$amount+$win_amount;
            $stmt1 = $conn->prepare("UPDATE cricket_session_bet SET cricket_session_bet_bet_win='2' WHERE cricket_session_bet_id=:id");
            $stmt1->execute(['id' => $bet_id]);
            $stmt2 = $conn->prepare("UPDATE users SET user_amount=:amount WHERE user_id=:id");
            $stmt2->execute(['amount' =>$amount , 'id' => $user_id]);
            }else{
                    $stmt1 = $conn->prepare("UPDATE cricket_session_bet SET cricket_session_bet_bet_win='1' WHERE cricket_session_bet_id=:id");
            $stmt1->execute(['id' => $bet_id]);   
                }
            }
            if($score==$cricket_session_score){
                 $stmt1 = $conn->prepare("UPDATE cricket_session_bet SET cricket_session_bet_bet_win='1' WHERE cricket_session_bet_id=:id");
            $stmt1->execute(['id' => $bet_id]);
            }
        }

        $_SESSION['success'] = 'SESSION Added successfully';
    }catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
    }

    $pdo->close();

}else
    $_SESSION['error'] = 'Select SESSION to add first';

	header('location: session.php');
	
?>