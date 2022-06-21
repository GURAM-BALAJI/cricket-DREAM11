<?php
	include '../includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
        $total_session = $_POST['cricket_session_session'];
        $edit_till_over = $_POST['edit_till_over'];
        for($i=1;$i<=$total_session;$i++){
        $score=$_POST['score_'.$i];
        $yes=$_POST['yes_'.$i];
        $no = $_POST['no_'.$i];
            if($i!=1){
              $score1.=','.$score;
                $yes1.=','.$yes;
                $no1.=','.$no;
            }else{
               $score1=$score;
                 $yes1=$yes;
                 $no1=$no;
            }
        }

		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE cricket_session SET cricket_session_score=:cricket_session_score, cricket_session_yes_ratio=:cricket_session_yes_ratio, cricket_session_no_ratio=:cricket_session_no_ratio, cricket_session_till_overs=:cricket_session_till_over WHERE cricket_session_id=:id");
			$stmt->execute(['cricket_session_score'=>$score1,'cricket_session_yes_ratio'=>$yes1, 'cricket_session_no_ratio'=>$no1, 'cricket_session_till_over'=>$edit_till_over, 'id'=>$id ]);
			$_SESSION['success'] = 'cricket session updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit cricket session form first';
	}

	header('location: session.php');

?>