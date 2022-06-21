<?php
	include '../includes/session.php';

	if(isset($_POST['add'])){
        $cricket=$_POST['cricket'];
        $team=$_POST['team'];
        $till_over = $_POST['till_over'];
        $total_session = $_POST['total_session'];
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

$stmt = $conn->prepare("INSERT INTO cricket_session (cricket_session_cricket_id, cricket_session_team_id, cricket_session_till_overs, cricket_session_session, cricket_session_score, cricket_session_yes_ratio, cricket_session_no_ratio) 
VALUES(:cricket_session_cricket_id, :cricket_session_team_id, :cricket_session_till_overs, :cricket_session_session, :cricket_session_score, :cricket_session_yes_ratio, :cricket_session_no_ratio )");
$stmt->execute(['cricket_session_cricket_id'=>$cricket, 'cricket_session_team_id'=>$team, 'cricket_session_till_overs'=>$till_over, 'cricket_session_session'=>$total_session, 'cricket_session_score'=>$score1, 'cricket_session_yes_ratio'=>$yes1, 'cricket_session_no_ratio'=>$no1 ]);
				$_SESSION['success'] = 'cricket session added successfully';

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up cricket form first';
	}
header('location: session.php');
	

?>