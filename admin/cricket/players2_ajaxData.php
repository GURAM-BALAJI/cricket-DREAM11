<?php
//Include database configuration file
include '../includes/session.php';

if(isset($_POST["team2_val"]) && !empty($_POST["team2_val"])){
    $id=$_POST["team2_val"];
    $conn = $pdo->open();

		$stmt = $conn->prepare("SELECT * FROM teams WHERE team_id=:id");
		$stmt->execute(['id'=>$id]);
    $data=$stmt->fetchAll();
    if(!empty($data)){
        foreach($data as $row){
            echo '<div class="form-group">
            <label class="col-sm-3 control-label">Ratio</label>
            <label class="col-sm-4 ">4`s</label>
            <label class="col-sm-4 ">6`s</label>
            </div>';
           if(!empty($row['player1']))
           echo '<div class="form-group">
                    <label for="player1" class="col-sm-3 control-label">'.$row['player1'].'</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="four_team2_player1" name="four_team2_player1">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="six_team2_player1" name="six_team2_player1">
                    </div>
                </div>';
            
        
              if(!empty($row['player2']))
           echo '<div class="form-group">
                    <label for="player2" class="col-sm-3 control-label">'.$row['player2'].'</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="four_team2_player2" name="four_team2_player2">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="six_team2_player2" name="six_team2_player2">
                    </div>
                </div>';
            
              if(!empty($row['player3']))
           echo '<div class="form-group">
                    <label for="player3" class="col-sm-3 control-label">'.$row['player3'].'</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="four_team2_player3" name="four_team2_player3">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="six_team2_player3" name="six_team2_player3">
                    </div>
                </div>';
            
             if(!empty($row['player4']))
           echo '<div class="form-group">
                    <label for="player4" class="col-sm-3 control-label">'.$row['player4'].'</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="four_team2_player4" name="four_team2_player4">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="six_team2_player4" name="six_team2_player4">
                    </div>
                </div>';
            
             if(!empty($row['player5']))
           echo '<div class="form-group">
                    <label for="player5" class="col-sm-3 control-label">'.$row['player5'].'</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="four_team2_player5" name="four_team2_player5">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="six_team2_player5" name="six_team2_player5">
                    </div>
                </div>';
            
             if(!empty($row['player6']))
           echo '<div class="form-group">
                    <label for="player6" class="col-sm-3 control-label">'.$row['player6'].'</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="four_team2_player6" name="four_team2_player6">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="six_team2_player6" name="six_team2_player6">
                    </div>
                </div>';
            
             if(!empty($row['player7']))
           echo '<div class="form-group">
                    <label for="player7" class="col-sm-3 control-label">'.$row['player7'].'</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="four_team2_player7" name="four_team2_player7">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="six_team2_player7" name="six_team2_player7">
                    </div>
                </div>';
            
             if(!empty($row['player8']))
           echo '<div class="form-group">
                    <label for="player8" class="col-sm-3 control-label">'.$row['player8'].'</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="four_team2_player8" name="four_team2_player8">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="six_team2_player8" name="six_team2_player8">
                    </div>
                </div>';
            
             if(!empty($row['player9']))
           echo '<div class="form-group">
                    <label for="player9" class="col-sm-3 control-label">'.$row['player9'].'</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="four_team2_player9" name="four_team2_player9">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="six_team2_player9" name="six_team2_player9">
                    </div>
                </div>';
            
             if(!empty($row['player10']))
           echo '<div class="form-group">
                    <label for="player10" class="col-sm-3 control-label">'.$row['player10'].'</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="four_team2_player10" name="four_team2_player10">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="six_team2_player10" name="six_team2_player10">
                    </div>
                </div>';
            
             if(!empty($row['player11']))
           echo '<div class="form-group">
                    <label for="player11" class="col-sm-3 control-label">'.$row['player11'].'</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="four_team2_player11" name="four_team2_player11">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="six_team2_player11" name="six_team2_player11">
                    </div>
                </div>';
            
             if(!empty($row['player12']))
           echo '<div class="form-group">
                    <label for="player12" class="col-sm-3 control-label">'.$row['player12'].'</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="four_team2_player12" name="four_team2_player12">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="six_team2_player12" name="six_team2_player12">
                    </div>
                </div>';
    
            
        }
        }else{
        echo '<h3>Team not available</h3>';
    }
    	$pdo->close();
}
?>