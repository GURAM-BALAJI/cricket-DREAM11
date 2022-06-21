<?php
//Include database configuration file
include '../includes/session.php';?>
         <script src="js/jquery.min.js"></script>
<script type="text/javascript">
            $(document).ready(function(){
    $('#team2').on('change',function(){
        var team2_val = $(this).val();
        if(team2_val){
            $.ajax({
                type:'POST',
                url:'players2_ajaxData.php',
                data:'team2_val='+team2_val,
                success:function(html){
                    $('#player_list_2').html(html);
                }
            }); 
        }
    });
    
});   
</script>
<?php
if(isset($_POST["team1_val"]) && !empty($_POST["team1_val"])){
    $id=$_POST["team1_val"];
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
                      <input type="text" class="form-control" id="four_team1_player1" name="four_team1_player1">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="six_team1_player1" name="six_team1_player1">
                    </div>
                </div>';
        
              if(!empty($row['player2']))
           echo '<div class="form-group">
                    <label for="player2" class="col-sm-3 control-label">'.$row['player2'].'</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="four_team1_player2" name="four_team1_player2">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="six_team1_player2" name="six_team1_player2">
                    </div>
                </div>';
            
              if(!empty($row['player3']))
           echo '<div class="form-group">
                    <label for="player3" class="col-sm-3 control-label">'.$row['player3'].'</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="four_team1_player3" name="four_team1_player3">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="six_team1_player3" name="six_team1_player3">
                    </div>
                </div>';
            
             if(!empty($row['player4']))
           echo '<div class="form-group">
                    <label for="player4" class="col-sm-3 control-label">'.$row['player4'].'</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="four_team1_player4" name="four_team1_player4">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="six_team1_player4" name="six_team1_player4">
                    </div>
                </div>';
            
             if(!empty($row['player5']))
           echo '<div class="form-group">
                    <label for="player5" class="col-sm-3 control-label">'.$row['player5'].'</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="four_team1_player5" name="four_team1_player5">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="six_team1_player5" name="six_team1_player5">
                    </div>
                </div>';
            
             if(!empty($row['player6']))
           echo '<div class="form-group">
                    <label for="player6" class="col-sm-3 control-label">'.$row['player6'].'</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="four_team1_player6" name="four_team1_player6">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="six_team1_player6" name="six_team1_player6">
                    </div>
                </div>';
            
             if(!empty($row['player7']))
           echo '<div class="form-group">
                    <label for="player7" class="col-sm-3 control-label">'.$row['player7'].'</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="four_team1_player7" name="four_team1_player7">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="six_team1_player7" name="six_team1_player7">
                    </div>
                </div>';
            
             if(!empty($row['player8']))
           echo '<div class="form-group">
                    <label for="player8" class="col-sm-3 control-label">'.$row['player8'].'</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="four_team1_player8" name="four_team1_player8">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="six_team1_player8" name="six_team1_player8">
                    </div>
                </div>';
            
             if(!empty($row['player9']))
           echo '<div class="form-group">
                    <label for="player9" class="col-sm-3 control-label">'.$row['player9'].'</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="four_team1_player9" name="four_team1_player9">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="six_team1_player9" name="six_team1_player9">
                    </div>
                </div>';
            
             if(!empty($row['player10']))
           echo '<div class="form-group">
                    <label for="player10" class="col-sm-3 control-label">'.$row['player10'].'</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="four_team1_player10" name="four_team1_player10">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="six_team1_player10" name="six_team1_player10">
                    </div>
                </div>';
            
             if(!empty($row['player11']))
           echo '<div class="form-group">
                    <label for="player11" class="col-sm-3 control-label">'.$row['player11'].'</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="four_team1_player11" name="four_team1_player11">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="six_team1_player11" name="six_team1_player11">
                    </div>
                </div>';
            
             if(!empty($row['player12']))
           echo '<div class="form-group">
                    <label for="player12" class="col-sm-3 control-label">'.$row['player12'].'</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="four_team1_player12" name="four_team1_player12">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="six_team1_player12" name="six_team1_player12">
                    </div>
                </div>';
            
             echo '<div class="form-group">
                    <label for="team2" class="col-sm-3 control-label">Team 2</label>
                    <div class="col-sm-9">
                      <select class="form-control" id="team2" name="team2" required>';
            $cat_id=$row['team_category_id'];
		$stmt = $conn->prepare("SELECT * FROM teams WHERE team_category_id=:cat_id AND team_delete='0' AND team_id!=:id");
		$stmt->execute(['cat_id'=>$cat_id, 'id'=>$id]);
    $data=$stmt->fetchAll();
    if(!empty($data)){
         echo '<option value="">Select 2nd Team</option>'; 
        foreach($data as $row){
            echo '<option value="'.$row['team_id'].'">'.$row['team_name'].'</option>';
        }
        }else{
        echo '<option value=""> 2nd Team not available</option>';
    }
                       echo '</select>
                    </div>
                </div>';
            echo ' <div id="player_list_2">
                  </div>';
            
        }
        }else{
        echo '<h3>Team not available</h3>';
    }
    	$pdo->close();
}
?>