<?php
	include '../includes/session.php';

	if(isset($_POST['suspend'])){
		$id = $_POST['id'];
		$conn = $pdo->open();
		try{
            $stmt = $conn->prepare("SELECT cricket_target_suspended FROM cricket WHERE cricket_id=$id ");
                      $stmt->execute();
                      foreach($stmt as $row)
                          if($row['cricket_target_suspended']==0){
                              $status=1;
                              $success='cricket Suspended successfully';
                            }else{
                                $status=0;
                              $success='cricket Activated successfully';
                          }
			$stmt = $conn->prepare("UPDATE cricket SET cricket_target_suspended=:status WHERE cricket_id=:id");
			$stmt->execute(['status'=>$status, 'id'=>$id]);
			$_SESSION['success'] = $success;
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select cricket target first to suspend ';
	}

	header('location: target.php');
?>