<?php
	include '../includes/session.php';
  $conn = $pdo->open();
    if(isset($_GET['Delete'])){
    $id=$_GET['withdraw_id'];
        try{
            $by=$admin['admin_id'];
				$stmt = $conn->prepare("UPDATE withdraw SET withdrawn=:cview, withdrawn_by=:by WHERE withdraw_id=:id");
				$stmt->execute(['cview'=>2, 'by'=>$by, 'id'=>$id]);
			$_SESSION['success'] ='Deleted Withdraw Request.';
        }
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}

			$pdo->close();
}elseif(isset($_GET['Pay'])){
           $id=$_GET['withdraw_id'];
        $withdraw_amount=$_GET['withdraw_amount'];
        $user_id=$_GET['user_id'];
        try{
          
		$stmt = $conn->prepare("SELECT * FROM users WHERE user_id=:id");
		$stmt->execute(['id'=>$user_id]);
		$row = $stmt->fetch();
			$amount = $row['user_amount'];
        $by=$admin['admin_id'];
        $amount=intval($amount)-intval($withdraw_amount);
            $stmt = $conn->prepare("UPDATE users SET user_amount=:amount WHERE user_id=:id");
			$stmt->execute(['amount'=>$amount, 'id'=>$user_id]);
			
			$stmt = $conn->prepare("UPDATE withdraw SET withdrawn=:cview, withdrawn_by=:by WHERE withdraw_id=:id");
            $stmt->execute(['cview'=>1, 'by'=>$by, 'id'=>$id]);
            
            $_SESSION['success'] = $withdraw_amount.' Rs Withdrawn successfully';
        }
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}

			$pdo->close();
    }
header('location: ../withdraw/withdraw.php');
			?>