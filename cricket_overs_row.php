<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$id=explode(",",$id);
		$conn = $pdo->open();
		$stmt = $conn->prepare("SELECT *,team_name,cricket_name FROM cricket_overs left join teams on team_id=cricket_overs_team_id left join cricket on cricket_id=cricket_overs_cricket_id WHERE cricket_overs_id=:id");
		$stmt->execute(['id'=>$id[0]]);
    foreach($stmt as $row1){
        if($id[4]==0){
        $ratio='cricket_overs_yes_ratio';
            $yes_no="Bellow";
        }else{
        $ratio='cricket_overs_no_ratio';
            $yes_no="Above";
        }
        $rate=$row1[$ratio];
        $rate=explode(",",$rate);
        $rate=$rate[$id[3]-1];
        $score=$row1['cricket_overs_score'];
        $score=explode(",",$score);
        $score=$score[$id[3]-1];
        $info="To Win <b>".$id[3]."</b> Over, The score should be <b>".$yes_no."</b> ".$score;
		$row = array(
            'id' => $_POST['id'],
            'cricket_name' => $row1['cricket_name'],
            'team_name' => $row1['team_name'],
            'info' => $info,
            'rate'=>$rate,
			 );
		$pdo->close();
		echo json_encode($row);
	}}
?>