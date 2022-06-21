<?php
	include '../includes/session.php';

	if(isset($_POST['started'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
            $stmt1 = $conn->prepare("SELECT * FROM cricket_overs WHERE cricket_overs_id='$id'");
                      $stmt1->execute();
                      foreach($stmt1 as $row1)
                          $completed=$row1['cricket_overs_completed_overs'];
            $started="is in ".$completed." over.";
            if($completed==-1){
                $started="started";
                $completed=0;
            }elseif($completed==0){
            $started="not started";
                $completed=-1;
            }
			$stmt = $conn->prepare("UPDATE cricket_overs SET cricket_overs_completed_overs=:over WHERE cricket_overs_id=:id");
			$stmt->execute(['over'=>$completed, 'id'=>$id]);
            
			$_SESSION['success'] = 'cricket '.$started;
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();

	}
	else{
		$_SESSION['error'] = 'Select cricket overs to started first';
	}

	header('location: overs.php');
?>