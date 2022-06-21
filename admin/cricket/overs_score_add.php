<?php
	include '../includes/session.php';

	
if(isset($_POST['add'])){
    $cricket_overs_id = $_POST['cricket_overs_id'];
    $cricket_overs_score = $_POST['cricket_overs_score'];
    $conn = $pdo->open();

    try {

        $stmt0 = $conn->prepare("SELECT cricket_overs_completed_overs FROM cricket_overs WHERE cricket_overs_id=:id");
        $stmt0->execute(['id' => $cricket_overs_id]);
        foreach ($stmt0 as $row0){
            $completed_overs=$row0['cricket_overs_completed_overs']+1;
            $stmt12 = $conn->prepare("UPDATE cricket_overs SET cricket_overs_completed_overs=$completed_overs WHERE cricket_overs_id=:id ");
            $stmt12->execute(['id' => $cricket_overs_id]);
        }

        $stmt = $conn->prepare("SELECT * FROM cricket_overs_bet WHERE cricket_overs_bet_cricket_overs_id=:cricket_overs_bet_cricket_overs_id AND cricket_overs_bet_overs_no=:cricket_overs_completed_no AND cricket_overs_bet_bet_win=:cricket_overs_bet_bet_win ");
        $stmt->execute([ 'cricket_overs_bet_cricket_overs_id' => $cricket_overs_id, 'cricket_overs_completed_no'=>$completed_overs, 'cricket_overs_bet_bet_win'=>'0']);
        foreach ($stmt as $row){
            $yes_no=$row['cricket_overs_bet_yes_no'];
            $user_id = $row['cricket_overs_bet_user_id'];
            $score = $row['cricket_overs_bet_score'];
            $bet_id=$row['cricket_overs_bet_id'];
            if($yes_no==0){
                if($score>$cricket_overs_score){
                       $stmt11 = $conn->prepare("SELECT user_amount FROM users WHERE user_id=:user_id ");
        $stmt11->execute([ 'user_id' =>$user_id]);
        foreach($stmt11 as $row11)
            $amount = $row11['user_amount'];
            $win_amount = $row['cricket_overs_bet_win_amount'];
            $amount=$amount+$win_amount;
            $stmt1 = $conn->prepare("UPDATE cricket_overs_bet SET cricket_overs_bet_bet_win='2' WHERE cricket_overs_bet_id=:id");
            $stmt1->execute(['id' => $bet_id]);
            $stmt2 = $conn->prepare("UPDATE users SET user_amount=:amount WHERE user_id=:id");
            $stmt2->execute(['amount'=>$amount , 'id'=>$user_id]);
                }else{
                 $stmt1 = $conn->prepare("UPDATE cricket_overs_bet SET cricket_overs_bet_bet_win='1' WHERE cricket_overs_bet_id=:id");
            $stmt1->execute(['id' => $bet_id]);   
                }
            }else{
                if($score<$cricket_overs_score){
                       $stmt11 = $conn->prepare("SELECT user_amount FROM users WHERE user_id=:user_id ");
        $stmt11->execute([ 'user_id' =>$user_id]);
        foreach($stmt11 as $row11)
                $amount = $row11['user_amount'];
            $win_amount = $row['cricket_overs_bet_win_amount'];
            $amount=$amount+$win_amount;
            $stmt1 = $conn->prepare("UPDATE cricket_overs_bet SET cricket_overs_bet_bet_win='2' WHERE cricket_overs_bet_id=:id");
            $stmt1->execute(['id' => $bet_id]);
            $stmt2 = $conn->prepare("UPDATE users SET user_amount=:amount WHERE user_id=:id");
            $stmt2->execute(['amount' =>$amount , 'id' => $user_id]);
            }else{
                    $stmt1 = $conn->prepare("UPDATE cricket_overs_bet SET cricket_overs_bet_bet_win='1' WHERE cricket_overs_bet_id=:id");
            $stmt1->execute(['id' => $bet_id]);   
                }
            }
            if($score==$cricket_overs_score){
                 $stmt1 = $conn->prepare("UPDATE cricket_overs_bet SET cricket_overs_bet_bet_win='1' WHERE cricket_overs_bet_id=:id");
            $stmt1->execute(['id' => $bet_id]);
            }
        }

        $_SESSION['success'] = 'Over Added successfully';
    }catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
    }

    $pdo->close();

}else
    $_SESSION['error'] = 'Select over to add first';

	header('location: overs.php');
	
?>