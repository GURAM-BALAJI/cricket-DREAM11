<?php
	include '../includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
        $total_overs = $_POST['cricket_overs_overs'];
        for($i=1;$i<=$total_overs;$i++){
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
			$stmt = $conn->prepare("UPDATE cricket_overs SET cricket_overs_score=:cricket_overs_score, cricket_overs_yes_ratio=:cricket_overs_yes_ratio, cricket_overs_no_ratio=:cricket_overs_no_ratio WHERE cricket_overs_id=:id");
			$stmt->execute(['cricket_overs_score'=>$score1,'cricket_overs_yes_ratio'=>$yes1, 'cricket_overs_no_ratio'=>$no1, 'id'=>$id ]);
			$_SESSION['success'] = 'cricket overs updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit cricket overs form first';
	}

	header('location: overs.php');

?>