<?php
//Include database configuration file
include '../includes/session.php';

if(isset($_POST["cricket_id"]) && !empty($_POST["cricket_id"])){
    $id=$_POST["cricket_id"];
    $conn = $pdo->open();
		$stmt = $conn->prepare("SELECT cricket_team1_id,cricket_team2_id FROM cricket WHERE cricket_id=:id AND cricket_delete='0'");
		$stmt->execute(['id'=>$id]);
    $data=$stmt->fetchAll();
    if(!empty($data)){
        foreach($data as $row){
            $team1=$row['cricket_team1_id'];
            $team2=$row['cricket_team2_id'];
            
            $stmt1 = $conn->prepare("SELECT team_name,team_id FROM teams where team_id=$team1");
            $stmt1->execute();
            foreach($stmt1 as $row1){
            $team1_name=$row1['team_name'];
               echo "<div class='form-group'>
                    <label for='team1_rate' class='col-sm-3 control-label'>$team1_name</label>
                    <div class='col-sm-9'>
                    <input type='hidden' class='form-control' id='team1_id' name='team1_id' value='$team1'>
                      <input type='text' class='form-control' id='team1_rate' name='team1_rate' required>
                    </div>
                </div>";
            }
            $stmt1 = $conn->prepare("SELECT team_name,team_id FROM teams where team_id=$team2");
            $stmt1->execute();
            foreach($stmt1 as $row1){
               $team2_name=$row1['team_name'];
               echo "<div class='form-group'>
                    <label for='team2_rate' class='col-sm-3 control-label'>$team2_name</label>
                    <div class='col-sm-9'>
                    <input type='hidden' class='form-control' id='team2_id' name='team2_id' value='$team2'>
                      <input type='text' class='form-control' id='team2_rate' name='team2_rate' required>
                    </div>
                </div>";}
             }
        }else{
        echo 'Team not available';
    }
    	$pdo->close();
}
?>