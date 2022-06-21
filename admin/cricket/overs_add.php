<?php
	include '../includes/session.php';

	if(isset($_POST['add'])){
        $cricket=$_POST['cricket'];
        $team=$_POST['team'];
        $total_overs = $_POST['total_overs'];
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

$stmt = $conn->prepare("INSERT INTO cricket_overs (cricket_overs_cricket_id, cricket_overs_team_id, cricket_overs_overs, cricket_overs_score, cricket_overs_yes_ratio, cricket_overs_no_ratio) 
VALUES(:cricket_overs_cricket_id, :cricket_overs_team_id, :cricket_overs_overs, :cricket_overs_score, :cricket_overs_yes_ratio, :cricket_overs_no_ratio )");
$stmt->execute(['cricket_overs_cricket_id'=>$cricket, 'cricket_overs_team_id'=>$team, 'cricket_overs_overs'=>$total_overs, 'cricket_overs_score'=>$score1, 'cricket_overs_yes_ratio'=>$yes1, 'cricket_overs_no_ratio'=>$no1 ]);
				$_SESSION['success'] = 'cricket overs added successfully';

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up cricket form first';
	}
header('location: overs.php');
	

?>