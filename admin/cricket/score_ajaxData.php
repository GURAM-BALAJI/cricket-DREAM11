<?php
//Include database configuration file
include '../includes/session.php';

if(isset($_POST["team_match_id"]) && !empty($_POST["team_match_id"])){
    $id=$_POST["team_match_id"];
    $conn = $pdo->open();
		$stmt = $conn->prepare("SELECT cricket_team1_id,cricket_team2_id FROM cricket WHERE cricket_id=:id AND cricket_delete='0'");
		$stmt->execute(['id'=>$id]);
    $data=$stmt->fetchAll();
    if(!empty($data)){
         echo '<option value="">Select Team</option>'; 
        foreach($data as $row){
            $team1=$row['cricket_team1_id'];
            $team2=$row['cricket_team2_id'];
            $stmt1 = $conn->prepare("SELECT team_name,team_id FROM teams where team_id=$team1");
            $stmt1->execute();
            foreach($stmt1 as $row1)
            echo '<option value="'.$row1['team_id'].'">'.$row1['team_name'].'</option>';
            $stmt1 = $conn->prepare("SELECT team_name,team_id FROM teams where team_id=$team2");
            $stmt1->execute();
            foreach($stmt1 as $row1)
                echo '<option value="'.$row1['team_id'].'">'.$row1['team_name'].'</option>';
        }
        }else{
        echo '<option value="">Team not available</option>';
    }
    	$pdo->close();
}
?>