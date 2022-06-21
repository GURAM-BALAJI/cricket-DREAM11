<?php
//Include database configuration file
include '../includes/session.php';

if(isset($_POST["team_category_id"]) && !empty($_POST["team_category_id"])){
    $id=$_POST["team_category_id"];
    $conn = $pdo->open();

		$stmt = $conn->prepare("SELECT * FROM teams WHERE team_category_id=:id AND team_delete='0'");
		$stmt->execute(['id'=>$id]);
    $data=$stmt->fetchAll();
    if(!empty($data)){
         echo '<option value="">Select Team</option>'; 
        foreach($data as $row){
            echo '<option value="'.$row['team_id'].'">'.$row['team_name'].'</option>';
        }
        }else{
        echo '<option value="">Team not available</option>';
    }
    	$pdo->close();
}
?>