<?php
	include '../includes/session.php';

	
if(isset($_POST['won'])){
    $cricket_id = $_POST['cricket_id'];
    $won_team = $_POST['won_team'];
    $conn = $pdo->open();

    try {

     $stmt = $conn->prepare("SELECT * FROM cricket_match_bet WHERE cricket_match_bet_cricket_id=:cricket_id AND cricket_match_bet_team_id=:team_id AND cricket_match_bet_win=:win");
        $stmt->execute([ 'cricket_id' =>$cricket_id, 'team_id'=>$won_team, 'win'=>'0']);
        foreach ($stmt as $row){
            $cricket_match_bet_win_amount=$row['cricket_match_bet_win_amount'];
            $user_id=$row['cricket_match_bet_user_id'];
            $cricket_match_bet_id=$row['cricket_match_bet_id'];
    $stmt1 = $conn->prepare("UPDATE cricket_match_bet SET cricket_match_bet_win='2' WHERE cricket_match_bet_id=:id");
    $stmt1->execute(['id' => $cricket_match_bet_id]);  
             $stmt11 = $conn->prepare("SELECT user_amount FROM users WHERE user_id=:user_id ");
        $stmt11->execute([ 'user_id' =>$user_id]);
        foreach($stmt11 as $row11)
            $cricket_match_bet_win_amount+=$row11['user_amount'];
            $stmt2 = $conn->prepare("UPDATE users SET user_amount=:amount WHERE user_id=:id");
            $stmt2->execute(['amount'=>$cricket_match_bet_win_amount , 'id'=>$user_id]);
        }
         $stmt = $conn->prepare("SELECT * FROM cricket_match_bet WHERE cricket_match_bet_cricket_id=:cricket_id AND cricket_match_bet_win=:win");
        $stmt->execute([ 'cricket_id' =>$cricket_id, 'win'=>'0']);
        foreach ($stmt as $row){
             $cricket_match_bet_id=$row['cricket_match_bet_id'];
        $stmt1 = $conn->prepare("UPDATE cricket_match_bet SET cricket_match_bet_win='1' WHERE cricket_match_bet_id=:id");
    $stmt1->execute(['id' => $cricket_match_bet_id]);
        }
        $_SESSION['success'] = 'cricket match updated successfully';
    }catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
    }

    $pdo->close();

}else
    $_SESSION['error'] = 'Select match to add first';

	header('location: match.php');
	
?>