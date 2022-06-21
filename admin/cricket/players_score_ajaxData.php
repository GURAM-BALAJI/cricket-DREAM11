<?php
//Include database configuration file
include '../includes/session.php';
if(isset($_POST["team_val"]) && !empty($_POST["team_val"])){
    $id=$_POST["team_val"];
    $cricket_match_id=$_POST["cricket_match_id"];
    $conn = $pdo->open();
    echo '<div class="form-group">
            <label class="col-sm-5 control-label">Names</label>
            </div>';
		$stmt = $conn->prepare("SELECT * FROM cricket WHERE cricket_id=:id");
		$stmt->execute(['id'=>$cricket_match_id]);
    $data=$stmt->fetchAll();
    if(!empty($data)){
        foreach($data as $row){
            if($row['cricket_team1_id']==$id)
                $num=1;
            elseif($row['cricket_team2_id']==$id)
                $num=2;
            for($i=1;$i<13;$i++){
                $delete = 'cricket_team' . $num . '_player' . $i . '_delete';
                if ($row[$delete] == 0){
                    $player='player'.$i;
                    $stmt1 = $conn->prepare("SELECT $player FROM teams WHERE team_id=$id");
                    $stmt1->execute();
                    foreach($stmt1 as $row1)
                    echo '<div class="form-group">
                    <label for="player1" class="col-sm-6 control-label">' . $row1[$player] . '</label>
                    <div class="col-sm-2">
                    <form method="post" action="cricket_score_add_player.php">
                      <input type="hidden" name="cricket_id" value="'.$cricket_match_id.'">
                      <input type="hidden" name="num" value="'.$num.'">
                      <input type="hidden" name="team_id" value="'.$id.'">
                      <input type="hidden" name="player_id" value="'.$i.'">
                      <input type="hidden" name="player_name" value="' . $row1[$player] . '">
                      <input type="hidden" name="cricket_name" value="' . $row['cricket_name'] . '">
                      <input type="submit" class="btn btn-primary btn-sm btn-flat" name="add_player" value="ADD">
                      </form>
                    </div>
                </div>';
                }
            }
        }
        }else{
        echo '<h3>Team not available</h3>';
    }
    	$pdo->close();
}
?>