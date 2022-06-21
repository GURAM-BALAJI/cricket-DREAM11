<?php
	include '../includes/session.php';

	if(isset($_POST['suspend'])){
		$id = $_POST['id'];
		$conn = $pdo->open();
		try{
            $stmt = $conn->prepare("SELECT cricket_toss_suspended FROM cricket_toss WHERE cricket_toss_id=$id ");
                      $stmt->execute();
                      foreach($stmt as $row)
                          if($row['cricket_toss_suspended']==0){
                              $status=1;
                              $success='cricket toss Suspended successfully';
                            }else{
                                $status=0;
                              $success='cricket toss Activated successfully';
                          }
			$stmt = $conn->prepare("UPDATE cricket_toss SET cricket_toss_suspended=:status WHERE cricket_toss_id=:id");
			$stmt->execute(['status'=>$status, 'id'=>$id]);
			$_SESSION['success'] = $success;
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select cricket toss first to suspend ';
	}

	header('location: toss.php');
?>