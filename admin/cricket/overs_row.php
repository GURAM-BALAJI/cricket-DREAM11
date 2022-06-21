<?php 
	include '../includes/session.php';

	if(isset($_POST['id'])){
		$id=$_POST['id'];
		
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT * FROM cricket_overs LEFT JOIN teams on cricket_overs_team_id=teams.team_id LEFT JOIN cricket ON cricket_overs_cricket_id=cricket.cricket_id WHERE cricket_overs_id=:id");
		$stmt->execute(['id'=>$id]);
		foreach($stmt as $row1){
            $overs="<div class='form-group'>
        <label for='' class='col-sm-3 control-label'>Overs</label>
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
            $str=$row1['cricket_overs_score'];
            $score=explode(',',$str);
            $str1=$row1['cricket_overs_yes_ratio'];
            $yes=explode(',',$str1);
            $str2=$row1['cricket_overs_no_ratio'];
            $no=explode(',',$str2);
            for($i=1;$i<=$row1['cricket_overs_overs'];$i++)
            {
                $val=$score[$i-1];
                $val1=$yes[$i-1];
                $val2=$no[$i-1];                
            $overs.="<div class='form-group'>
        <label for='' class='col-sm-3 control-label'>Over $i:</label>
        <div class='col-sm-3'>
                      <input type='number' step='any' class='form-control' id='score_$i' name='score_$i' value='$val' placeholder='score' required>
                    </div>
            <div class='col-sm-3'>
                      <input type='number' step='any' class='form-control' id='yes_$i' name='yes_$i' value='$val1' placeholder='Bellow Ratio' required>
                    </div>
        <div class='col-sm-3'>
                      <input type='number' step='any' class='form-control' id='no_$i' name='no_$i' value='$val2' placeholder='Above Ratio' required>
                    </div>
                </div>";
            }
            if($row1['cricket_overs_completed_overs']==$row1['cricket_overs_overs'])
            $info="Completed";
            else
                $info=$row1['cricket_overs_completed_overs']+1;
            $row = array(
            'cricket_overs_id'=>$row1['cricket_overs_id'],
'cricket_overs_cricket_id'=>$row1['cricket_overs_cricket_id'],
'cricket_name'=>$row1['cricket_name'],
'team_name'=>$row1['team_name'],
'cricket_overs_overs'=>$row1['cricket_overs_overs'],
'overs'=>$overs,
'completed_over'=>$info,
                );
        }
		
		$pdo->close();

		echo json_encode($row);
	}
?>