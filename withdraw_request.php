<?php
	include 'includes/session.php';

	if(isset($_POST['withdraw']))
    {
        $withdraw_amount = $_POST['withdraw_amount'];
        $users_id=$_SESSION['id'];
		$conn = $pdo->open();
        try{
        $win='';
    $stmt_user = $conn->prepare("SELECT user_amount,user_id FROM users WHERE user_id=:id");
$stmt_user->execute(['id'=>$users_id]);
    foreach($stmt_user as $row1){
    $user_amount=$row1['user_amount']-50;
        if($user_amount>=$withdraw_amount && $withdraw_amount>=50){
            
$stmt = $conn->prepare("INSERT INTO withdraw ( withdraw_user_id, withdraw_amount) VALUES (:withdraw_user_id, :withdraw_amount )");
            
$stmt->execute(['withdraw_user_id'=>$users_id, 'withdraw_amount'=>$withdraw_amount ]);

            $_SESSION['success'] = 'Withdraw request sent successfully';
    }else{
    $_SESSION['error'] ='You don`t have sufficient balance';
        }
    }
    }
        catch(PDOException $e){
            $_SESSION['error'] = $e->getMessage();
        }

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up cricket form first';
	}
header('location: account.php');

?>