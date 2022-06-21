<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$id=explode(",",$id);
		$row = array(
            'cricket_id'=>$id[0],
            'team_id'=>$id[1],
            'rate'=>$id[2],
            'cricket_name'=>$id[3],
            'team_name'=>$id[4],
            'toss_match'=>$id[5],
			 );
		$pdo->close();
		echo json_encode($row);
	}
?>