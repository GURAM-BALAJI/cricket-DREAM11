<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$id=explode(",",$id);
		$conn = $pdo->open();
		$stmt = $conn->prepare("SELECT * FROM cricket left join teams on team_id=:id1 WHERE cricket_id=:id2");
		$stmt->execute(['id1'=>$id[1], 'id2'=>$id[0]]);
    foreach($stmt as $row1){
        $four=$row1['starting_four'];
        $six=$row1['starting_six'];
        $player='player'.$id[2];
        $ratio_four='cricket_team'.$id[3].'_player'.$id[2].'_four';
        $ratio_six='cricket_team'.$id[3].'_player'.$id[2].'_six';
         $four_store=" ";
         $six_store=" ";
        if($four!=0){
            $four_store.="<option id='0'>0</option>";}
        if($six!=0){
            $six_store.="<option id='0'>0</option>";}
        for(;$four<=15;$four++)
        $four_store.="<option id='$four'>$four</option>";
       
        for(;$six<=15;$six++)
        $six_store.="<option id='$six'>$six</option>";
		$row = array(
            'four_store'=>$four_store,
            'six_store'=>$six_store,
            'cricket_id' => $row1['cricket_id'],
            'cricket_name' => $row1['cricket_name'],
            'team_id' => $row1['team_id'],
            'team_name' => $row1['team_name'],
            'player_id' => $id[2],
            'player_name' => $row1[$player],
            'ratio_four' => $row1[$ratio_four],
            'ratio_six' => $row1[$ratio_six],
			 );
		$pdo->close();
		echo json_encode($row);
	}}
?>