<?php 
	include '../includes/session.php';

	if(isset($_POST['id'])){
		$id=$_POST['id'];
		
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT * FROM cricket_session LEFT JOIN teams on cricket_session_team_id=teams.team_id LEFT JOIN cricket ON cricket_session_cricket_id=cricket.cricket_id WHERE cricket_session_id=:id");
		$stmt->execute(['id'=>$id]);
		foreach($stmt as $row1){
            $session="<div class='form-group'>
        <label for='' class='col-sm-3 control-label'>session</label>
        <div class='col-sm-2 control-label'>
                      Score
                    </div>
            <div class='col-sm-3 control-label'>
                    Bellow Ratio
                    </div>
        <div class='col-sm-3 control-label'>
                 Above Ratio
                    </div>
                </div>";
            $str=$row1['cricket_session_score'];
            $score=explode(',',$str);
            $str1=$row1['cricket_session_yes_ratio'];
            $yes=explode(',',$str1);
            $str2=$row1['cricket_session_no_ratio'];
            $no=explode(',',$str2);
            for($i=1;$i<=$row1['cricket_session_session'];$i++)
            {
                $val=$score[$i-1];
                $val1=$yes[$i-1];
                $val2=$no[$i-1];                
            $session.="<div class='form-group'>
        <label for='' class='col-sm-3 control-label'>SESSION $i:</label>
        <div class='col-sm-3'>
                      <input type='number' step='any' class='form-control' id='score_$i' name='score_$i' value='$val' placeholder='score' required>
                    </div>
            <div class='col-sm-3'>
                      <input type='number' step='any' class='form-control' id='yes_$i' name='yes_$i' value='$val1' placeholder='Yes Ratio' required>
                    </div>
        <div class='col-sm-3'>
                      <input type='number' step='any' class='form-control' id='no_$i' name='no_$i' value='$val2' placeholder='Above Ratio' required>
                    </div>
                </div>";
            }
                $info=$row1['cricket_session_till_overs'];
            $row = array(
            'cricket_session_id'=>$row1['cricket_session_id'],
'cricket_session_cricket_id'=>$row1['cricket_session_cricket_id'],
'cricket_name'=>$row1['cricket_name'],
'team_name'=>$row1['team_name'],
'cricket_session_session'=>$row1['cricket_session_session'],
'session'=>$session,
'till_over'=>$info,
                );
        }
		
		$pdo->close();

		echo json_encode($row);
	}
?>