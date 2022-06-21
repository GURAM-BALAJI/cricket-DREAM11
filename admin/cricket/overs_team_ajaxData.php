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
         echo '<option value="">Select Team</option>'; 
        foreach($data as $row){
            $team1=$row['cricket_team1_id'];
            $team2=$row['cricket_team2_id'];
            $stmt2 = $conn->prepare("SELECT cricket_overs_id FROM cricket_overs WHERE cricket_overs_cricket_id=:id AND cricket_overs_delete='0' AND cricket_overs_team_id=:teamid");
		$stmt2->execute(['id'=>$id,'teamid'=>$team1]);
    $data2=$stmt2->fetchAll();
            if(empty($data2)){
            if(!empty($team1)){
            $stmt1 = $conn->prepare("SELECT team_name,team_id FROM teams where team_id=$team1");
            $stmt1->execute();
            foreach($stmt1 as $row1)
            echo '<option value="'.$row1['team_id'].'">'.$row1['team_name'].'</option>';
            }}
             $stmt2 = $conn->prepare("SELECT cricket_overs_id FROM cricket_overs WHERE cricket_overs_cricket_id=:id AND cricket_overs_delete='0' AND cricket_overs_team_id=:teamid");
		$stmt2->execute(['id'=>$id,'teamid'=>$team2]);
    $data2=$stmt2->fetchAll();
            if(empty($data2)){
             if(!empty($team2)){
            $stmt1 = $conn->prepare("SELECT team_name,team_id FROM teams where team_id=$team2");
            $stmt1->execute();
            foreach($stmt1 as $row1)
                echo '<option value="'.$row1['team_id'].'">'.$row1['team_name'].'</option>';
             }
        }}
        }else{
        echo '<option value="">Team not available</option>';
    }
    	$pdo->close();
}
?>