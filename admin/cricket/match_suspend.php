<?php
	include '../includes/session.php';

	if(isset($_POST['suspend'])){
		$id = $_POST['id'];
		$conn = $pdo->open();
		try{
            $stmt = $conn->prepare("SELECT cricket_match_suspended FROM cricket_match WHERE cricket_match_id=$id ");
                      $stmt->execute();
                      foreach($stmt as $row)
                          if($row['cricket_match_suspended']==0){
                              $status=1;
                              $success='cricket match Suspended successfully';
                            }else{
                                $status=0;
                              $success='cricket match Activated successfully';
                          }
			$stmt = $conn->prepare("UPDATE cricket_match SET cricket_match_suspended=:status WHERE cricket_match_id=:id");
			$stmt->execute(['status'=>$status, 'id'=>$id]);
			$_SESSION['success'] = $success;
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select cricket match first to suspend ';
	}

	header('location: match.php');
?>