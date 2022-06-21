<!DOCTYPE html>
<?php
include 'includes/session.php';
include 'includes/header.php';
if(!isset($_GET['id']) || empty($_GET['id']))
    header('location: index.php');
?>
<html lang="en" >
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="style_nav_bar.css">
 <script src="js/jquery.min.js" type="text/javascript"></script>
</head>
<style>
    body{
        background-color: #721564;
    }

    hr {
        display: block;
        margin-top: 0.5em;
        margin-bottom: 0.5em;
        margin-left: auto;
        margin-right: auto;
        border-style: dot-dot-dash;
        border-width: 2px;
        color: #0E2231;
        width: 98%;
        
    }
    h3{
        margin-left:10px;
    }
    .hr_last {
        border-style: dot-dash;
        border-width: 4px;
        color: #181914;
        width: 98%;
    }
    div.scrollmenu {
        background-color: #333;
        overflow: auto;
        white-space: nowrap;
    }

    div.scrollmenu button {
        display: inline-block;
        text-align: center;
        padding: 8px;
        background-color:darkslategrey;
        color: white;
        text-decoration: none;
        text-decoration-color: snow;
    }
    div.scrollmenu button:hover {
        background-color: #777;
    }
    
#table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#table td, #table th {
  border: 1px solid #ddd;
  padding: 3px;
    text-align: center;
}


#table tr:hover {background-color: #a1cdd1;}

#table th {
  padding-top: 5px;
  padding-bottom: 5px;
  text-align: center;
  background-color: #3b3d3e;
  color: white;
}
   
</style>
<body>
<!-- partial:index.partial.html -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<center>
<div style="background-color: #333;">
    <table><tr>
            <th>
<img src="logo.png" width="100%" height="70px">
            </th><?php if(!isset($_SESSION['id'])){ ?><th>
    <a href="login.php">
        <button style="align; background-color: #d24026; border: none; color: white; padding: 18px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; border-radius: 10px;">
            LOGIN</button>
    </a></th><?php }?>
        </tr></table>
</div>
<div style="background-color: #001a35;color: #89E6C4;">Match</div>
    <div class="scrollmenu">
        <button onclick="All()" id="BAll">&nbsp; All &nbsp;</button>&nbsp;
        <button onclick="Vs()" id="BVs">&nbsp;Vs&nbsp;</button>&nbsp;
        <button onclick="four_six()" id="Bfour_six">4s 6s</button>&nbsp;
         <button onclick="Overs()" id="BOvers">Overs</button>&nbsp;
        <button onclick="Session()" id="BSession">Session</button>&nbsp;
         <button onclick="Fancy()" id="BFancy">Fancy</button>
</div>
    <?php
     $conn = $pdo->open();
    $stmt = $conn->prepare("SELECT * FROM message");
                      $stmt->execute();
                      foreach($stmt as $row){ 
                          if($row['message_id']==1 && !empty($row['message'])){?>
                           <marquee style="color:yellow;"><?php echo $row['message'];?></marquee>
                       <?php } if($row['message_id']==2 && !empty($row['message'])){?>
                     <marquee style="color:yellow;"><?php echo $row['message'];?></marquee>
                <?php }} ?>

</center>
       <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
   <div id="Vs">
                <section class="content">
<div class="modal-content">
        <div class="modal-body">
           <?php
    $id=$_GET['id'];
   
        $stmt1 = $conn->prepare("SELECT *,cricket_name FROM cricket_match left join cricket on cricket_id=cricket_match_cricket_id WHERE cricket_match_delete='0' AND cricket_delete = '0' AND cricket_active = '1' AND cricket_id=$id ");
    $stmt1->execute();
    foreach($stmt1 as $row1){
            $team=$row1['cricket_match_team1_id'];?>
          <center><h3><b><?php echo $row1['cricket_name']; ?></b></h3></center>
            <?php $stmt1 = $conn->prepare("SELECT team_id,team_name FROM teams WHERE team_id=$team");
    $stmt1->execute();
    foreach($stmt1 as $row){
        $team_name=$row['team_name'];
            $rate=$row1['cricket_match_team1_ratio'];
            $cricket_name=$row1['cricket_name'];?>
    <caption><h4>Match Winner:</h4></caption>
            <center>
<button onClick="clearform();" class='<?php if($row1['cricket_match_suspended']==0) echo 'match_toss_modal';?>' data-id='<?php echo "$id,$team,$rate,$cricket_name,$team_name,0"; ?>' style=" border: none;background-color: #d6fdfd;padding: 5px 8px;width:47%;"><p><?php echo substr($row['team_name'],0,15).".."; ?></p><?php echo $row1['cricket_match_team1_ratio']; ?></button>
            <?php } 
 $team=$row1['cricket_match_team2_id'];
        $stmt1 = $conn->prepare("SELECT * FROM teams WHERE team_id=$team");
    $stmt1->execute();
    foreach($stmt1 as $row){
        $team_name=$row['team_name'];
            $rate=$row1['cricket_match_team2_ratio'];
                ?>
            <button onClick="clearform();" class='<?php if($row1['cricket_match_suspended']==0) echo 'match_toss_modal';?>' data-id='<?php echo "$id,$team,$rate,$cricket_name,$team_name,0"; ?>' style=" border: none;background-color: #d6fdfd;padding: 5px 8px;width:47%;"><p><?php echo substr($row['team_name'],0,15).".."; ?></p><?php echo $row1['cricket_match_team2_ratio']; ?></button>
            <?php }}
    $stmt1 = $conn->prepare("SELECT *,cricket_name FROM cricket_toss left join cricket on cricket_id=cricket_toss_cricket_id WHERE cricket_toss_delete='0' AND cricket_delete = '0' AND cricket_active = '1' AND cricket_id=$id ");
    $stmt1->execute();
    foreach($stmt1 as $row1){
            $team=$row1['cricket_toss_team1_id'];?>
            <?php $stmt1 = $conn->prepare("SELECT * FROM teams WHERE team_id=$team");
    $stmt1->execute();
    foreach($stmt1 as $row){
                $team_name=$row['team_name'];
            $rate=$row1['cricket_toss_team1_ratio'];?>
                </center>
    <caption><h4>Toss Winner:</h4></caption>
            <center>
<button onClick="clearform();" class='<?php if($row1['cricket_toss_suspended']==0) echo 'match_toss_modal';?>' data-id='<?php echo "$id,$team,$rate,$cricket_name,$team_name,1"; ?>' style=" border: none;background-color: #d6fdfd;padding: 5px 8px;width:47%;"><p><?php echo substr($row['team_name'],0,15).".."; ?></p><?php echo $row1['cricket_toss_team1_ratio']; ?></button>
            <?php } 
 $team=$row1['cricket_toss_team2_id'];
        $stmt1 = $conn->prepare("SELECT * FROM teams WHERE team_id=$team");
    $stmt1->execute();
    foreach($stmt1 as $row){
                $team_name=$row['team_name'];
            $rate=$row1['cricket_toss_team2_ratio'];?>
            <button onClick="clearform();" class='<?php if($row1['cricket_toss_suspended']==0) echo 'match_toss_modal';?>' data-id='<?php echo "$id,$team,$rate,$cricket_name,$team_name,1"; ?>' style=" border: none;background-color: #d6fdfd;padding: 5px 8px;width:47%;"><p><?php echo substr($row['team_name'],0,15).".."; ?></p><?php echo $row1['cricket_toss_team2_ratio']; ?></button>
            <?php } ?>
            <?php }?>  
                </center>
    </div></div></section></div>
            <div id="four_six">
                <section class="content">
<div class="modal-content">
        <div class="modal-body">
        <?php
    $id=$_GET['id'];
    $conn = $pdo->open();
    $stmt = $conn->prepare("SELECT * FROM cricket WHERE cricket_delete='0' AND cricket_active = '1' AND cricket_id = $id ");
    $stmt->execute();
    foreach($stmt as $row){?>
       <center><h3><b><?php echo $row['cricket_name']; ?></b></h3></center>
            <?php
    for($team_num=1;$team_num<3;$team_num++){
    $conn = $pdo->open();
        $team_name='cricket_team'.$team_num.'_id';
    $team=$row[$team_name];
    $stmt1 = $conn->prepare("SELECT * FROM teams WHERE team_id=$team");
    $stmt1->execute();
    foreach($stmt1 as $row1){ ?>
            <caption><h4><?php echo $row1['team_name']; ?></h4></caption>
            <table border='1' id='table'>
            <tr>
            <th rowspan="2">Player</th>
            <th colspan="2">Ratio</th>
            <th rowspan="2">Play</th>
            <tr>
                <th>4</th>
                <th>6</th>
                </tr>
                </tr>
            <?php
            for($i=1;$i<13;$i++){
                $out_or_not='cricket_team'.$team_num.'_player'.$i.'_delete';
                $player='player'.$i; 
                if($row[$out_or_not]==0 && !empty($row1[$player])){
                $four='cricket_team'.$team_num.'_player'.$i.'_four';
                $six='cricket_team'.$team_num.'_player'.$i.'_six';
            ?>
            <tr>
                <td style="text-align: left;"><?php echo $row1[$player]; ?></td>
                <td><?php echo $row[$four]; ?></td>
                <td><?php echo $row[$six]; ?></td>
                 <td><button class='btn btn-success btn-sm bet_model btn-flat' onClick="clearform();" data-id='<?php echo $row['cricket_id']; ?>,<?php echo $row1['team_id']; ?>,<?php echo $i; ?>,<?php echo $team_num; ?>' style='width:100%;height:100%'> BET</td>
            </tr>
            <?php }}} ?>

            </table>
    <?php }} ?>
             </div></div>
</section>
            </div>
        <div id="Overs">
            <section class="content">
<div class="modal-content">
        <div class="modal-body">
             <?php
    $id=$_GET['id'];
    $conn = $pdo->open();
    $stmt = $conn->prepare("SELECT * FROM cricket_overs WHERE cricket_overs_delete = '0' AND cricket_overs_status = '1' AND cricket_overs_cricket_id = $id AND cricket_overs_overs!=cricket_overs_completed_overs");
    $stmt->execute();
    foreach($stmt as $row){
        $cricket_id=$row['cricket_overs_cricket_id'];
        $stmt1 = $conn->prepare("SELECT cricket_name FROM cricket WHERE cricket_id=$cricket_id");
    $stmt1->execute();
    foreach($stmt1 as $row1){?>
          <center><h3><b><?php echo $row1['cricket_name']; ?></b></h3></center>
            <?php }?>
       
            
           <?php $team=$row['cricket_overs_team_id'];
        $stmt1 = $conn->prepare("SELECT team_name FROM teams WHERE team_id=$team");
    $stmt1->execute();
    foreach($stmt1 as $row1){?>
            <caption><h4><?php echo $row1['team_name']; ?></h4></caption>
           <?php } ?>
                              <table border='1' id='table'>
            <tr>
            <th>Overs</th>
            <th>Bellow / Under</th>
            <th>Above / Over</th>
            </tr>
                <?php 
            $overs_completed=$row['cricket_overs_completed_overs'];
            $total_overs=$row['cricket_overs_overs'];
                           $yes=$row['cricket_overs_yes_ratio'];
                            $no=$row['cricket_overs_no_ratio'];
                            $score=$row['cricket_overs_score'];
                           $yes=explode(',',$yes);
                               $no=explode(',',$no);
                               $score=explode(',',$score);
                           $five=0;
                           for($i=$overs_completed+2;$i<=$total_overs;$i++){
                               if($five==3)
                                   break;
                               $five++;
                                  ?>
            <tr>
                <td  style="text-align: left;"><b><?php echo 'Over-'.$i; ?></b><br><?php echo 'score-'.$score[$i-1]; ?></td>
             <td><button class='btn btn-info btn-sm overs btn-flat' onClick="clearform();" data-id='<?php echo $row['cricket_overs_id'];?>,<?php echo $cricket_id; ?>,<?php echo $team; ?>,<?php echo $i; ?>,<?php echo 0; ?>' style='width:100%;height: 100%;'> <?php echo $yes[$i-1];?></td>
                 <td><button class='btn btn-warning btn-sm overs btn-flat' onClick="clearform();" data-id='<?php echo $row['cricket_overs_id'];?>,<?php echo $cricket_id; ?>,<?php echo $team; ?>,<?php echo $i; ?>,<?php echo 1; ?>' style='width: 100%;height: 100%;'> <?php echo $no[$i-1]; ?></td>
            </tr>
           
                <?php }?></table> <?php }?>
                      </div></div>
</section>              
        </div>
    <div id="Session">
            <section class="content">
<div class="modal-content">
    <div class="modal-body">
                <?php
    $id=$_GET['id'];
    $conn = $pdo->open();
        $stmt1 = $conn->prepare("SELECT cricket_name FROM cricket WHERE cricket_id=$id");
    $stmt1->execute();
    foreach($stmt1 as $row1){?>
          <center><h3><b><?php echo $row1['cricket_name']; ?></b></h3></center>
            <?php }
    $stmt = $conn->prepare("SELECT * FROM cricket_session WHERE cricket_session_delete = '0' AND cricket_session_status = '1' AND cricket_session_cricket_id = $id ");
    $stmt->execute();
    foreach($stmt as $row){       
             $team=$row['cricket_session_team_id'];
        $stmt1 = $conn->prepare("SELECT team_name FROM teams WHERE team_id=$team");
    $stmt1->execute();
    foreach($stmt1 as $row1){?>
            <caption><h4><?php echo $row1['team_name']; ?> first <?php echo $row['cricket_session_till_overs']; ?> Overs Total</h4></caption>
           <?php } ?>
                              <table border='1' id='table'>
            <tr>
            <th>Score</th>
            <th>Bellow / Under</th>
            <th>Above / Over</th>
            </tr>
                <?php 
            $total_session=$row['cricket_session_session'];
                           $yes=$row['cricket_session_yes_ratio'];
                            $no=$row['cricket_session_no_ratio'];
                            $score=$row['cricket_session_score'];
                           $yes=explode(',',$yes);
                               $no=explode(',',$no);
                               $score=explode(',',$score);
                           for($i=0;$i<$total_session;$i++){
                               
                                  ?>
            <tr>
                <td  style="text-align: center;"><b><br><?php echo $score[$i]; ?></b></td>
             <td><button class='btn btn-info btn-sm session btn-flat' onClick="clearform();" data-id='<?php echo $row['cricket_session_id'];?>,<?php echo $cricket_id; ?>,<?php echo $team; ?>,<?php echo $i; ?>,<?php echo 0; ?>' style='width:100%;height: 100%;'> <?php echo $yes[$i];?></td>
                 <td><button class='btn btn-warning btn-sm session btn-flat' onClick="clearform();" data-id='<?php echo $row['cricket_session_id'];?>,<?php echo $cricket_id; ?>,<?php echo $team; ?>,<?php echo $i; ?>,<?php echo 1; ?>' style='width: 100%;height: 100%;'> <?php echo $no[$i]; ?></td>
            </tr>
           
                <?php }?></table> <?php }?>
    </div></div></section></div>
        <div id="Fancy">
<section class="content">
<div class="modal-content">
<div class="modal-body">
    <center>
        <?php $id=$_GET['id'];
    $conn = $pdo->open();
        $stmt1 = $conn->prepare("SELECT cricket_name,cricket_target_suspended FROM cricket WHERE cricket_delete = '0' AND cricket_active = '1' AND cricket_id=$id");
    $stmt1->execute();
    foreach($stmt1 as $row1){?>
          <center><h3><b><?php echo $row1['cricket_name']; ?></b></h3></center>
        <input type="hidden" name="target_cricket_id" id="target_cricket_id" value="<?php echo $id;?>">
        <input type="hidden" name="target_suspended" id="target_suspended" value="<?php echo $row1['cricket_target_suspended'];?>">           
<h2>1<sup>st</sup> INNINGS</h2>
        
        <div class="form-group">
            <label for="score" class="col-sm-3 control-label">EXPECTED TARGET: </label>
            <div class="col-sm-9">
            <input  type="number" step="any" name="target_score" id="target_score" required oninput="mytarget()" placeholder="ex: 160">
            </div>
        </div>
        <div class="form-group">
             <label for="amount" class="col-sm-3 control-label">BET AMOUNT: </label>
             <div class="col-sm-9">
            <input  type="number" step="any" name="target_amount" id="target_amount" required oninput="mytarget()" placeholder="ex: 100">
                    </div>
        </div>
        <div id="target_bet_button"></div>
        <div class="form-group">
            <div class="col-sm-12">
        <div id="target_info">You can Earn <b>10 times</b> of your BET,<br>Just Enter Values for Target and Amount..</div>
            </div>
        </div>
         <?php }?>
    </center>
</div>
</div>
</section>
        </div>
   
      <?php include 'cricket_bet_modal.php'; ?>
<br><br><br><br>
<nav class="nav">

    <a href="index.php" class="nav__link nav__link--active">
        <i class="material-icons nav__icon">home</i>
        <span class="nav__text">Home</span>
    </a>

    <a href="account.php" class="nav__link">
        <i class="material-icons nav__icon">account_balance_wallet</i>
        <span class="nav__text">Wallet</span>
    </a>

    <a href="profile.php" class="nav__link ">
        <i class="material-icons nav__icon">person</i>
        <span class="nav__text">Profile</span>
    </a>

    <a href="settings.php" class="nav__link">
        <i class="material-icons nav__icon">settings</i>
        <span class="nav__text">Settings</span>
    </a>

</nav>
<!-- partial -->
    <?php include 'includes/scripts.php'; ?>
    
 <script>
     document.getElementById('Vs').style.display = 'block';
     document.getElementById('four_six').style.display = 'block';
   document.getElementById('Overs').style.display = 'block';
     document.getElementById('Session').style.display = 'block';
    document.getElementById('Fancy').style.display = 'block';
     
          document.getElementById('BAll').style.borderColor = 'yellow';
     function All(){
         document.getElementById('Vs').style.display = 'block';
   document.getElementById('four_six').style.display = 'block';
          document.getElementById('Session').style.display = 'block';
   document.getElementById('Overs').style.display = 'block';
    document.getElementById('Fancy').style.display = 'block';
          document.getElementById('BAll').style.borderColor = 'yellow';
          document.getElementById('BOvers').style.borderColor = '#777';
          document.getElementById('BFancy').style.borderColor = '#777';
         document.getElementById('Bfour_six').style.borderColor = '#777';
         document.getElementById('BVs').style.borderColor = '#777';
           document.getElementById('BSession').style.borderColor = '#777';
     }
     function Vs(){
         document.getElementById('Vs').style.display = 'block';
         document.getElementById('four_six').style.display = 'none';
          document.getElementById('Session').style.display = 'none';
   document.getElementById('Overs').style.display = 'none';
    document.getElementById('Fancy').style.display = 'none';
          document.getElementById('Bfour_six').style.borderColor = '#777';
          document.getElementById('BOvers').style.borderColor = '#777';
          document.getElementById('BFancy').style.borderColor = '#777';
         document.getElementById('BAll').style.borderColor = '#777';
         document.getElementById('BVs').style.borderColor = 'yellow';
           document.getElementById('BSession').style.borderColor = '#777';
     }
     function Session(){
         document.getElementById('Vs').style.display = 'none';
         document.getElementById('four_six').style.display = 'none';
          document.getElementById('Session').style.display = 'block';
   document.getElementById('Overs').style.display = 'none';
    document.getElementById('Fancy').style.display = 'none';
          document.getElementById('Bfour_six').style.borderColor = '#777';
          document.getElementById('BOvers').style.borderColor = '#777';
          document.getElementById('BFancy').style.borderColor = '#777';
         document.getElementById('BAll').style.borderColor = '#777';
         document.getElementById('BVs').style.borderColor = '#777';
           document.getElementById('BSession').style.borderColor = 'yellow';
     }
     function four_six(){
         document.getElementById('Vs').style.display = 'none';
         document.getElementById('four_six').style.display = 'block';
   document.getElementById('Overs').style.display = 'none';
          document.getElementById('Session').style.display = 'none';
    document.getElementById('Fancy').style.display = 'none';
          document.getElementById('Bfour_six').style.borderColor = 'yellow';
          document.getElementById('BOvers').style.borderColor = '#777';
          document.getElementById('BFancy').style.borderColor = '#777';
         document.getElementById('BAll').style.borderColor = '#777';
         document.getElementById('BVs').style.borderColor = '#777';
           document.getElementById('BSession').style.borderColor = '#777';
     }
     function Overs(){
            document.getElementById('Vs').style.display = 'none';
         document.getElementById('four_six').style.display = 'none';
          document.getElementById('Session').style.display = 'none';
    document.getElementById('Fancy').style.display = 'none';
            document.getElementById('Overs').style.display = 'block';
         document.getElementById('Bfour_six').style.borderColor = '#777';
          document.getElementById('BOvers').style.borderColor = 'yellow';
          document.getElementById('BFancy').style.borderColor = '#777';
         document.getElementById('BAll').style.borderColor = '#777';
         document.getElementById('BVs').style.borderColor = '#777';
           document.getElementById('BSession').style.borderColor = '#777';
     }
        function Fancy(){
               document.getElementById('Vs').style.display = 'none';
         document.getElementById('four_six').style.display = 'none';
   document.getElementById('Overs').style.display = 'none';
             document.getElementById('Session').style.display = 'none';
    document.getElementById('Fancy').style.display = 'block';
                document.getElementById('Bfour_six').style.borderColor = '#777';
          document.getElementById('BOvers').style.borderColor = '#777';
          document.getElementById('BFancy').style.borderColor = 'yellow';
            document.getElementById('BAll').style.borderColor = '#777';
            document.getElementById('BVs').style.borderColor = '#777';
             document.getElementById('BSession').style.borderColor = '#777';
     }
     
        $(document).ready(function() {
            $('#bet_amount').keyup(function(ev) {
                var bet_amount = $('#bet_amount').val();
                var cricket_id = $('#cricket_id').val();
                var team_id = $('#team_id').val();
                var player_id = $('#player_id').val();
                var four = $('#four').val();
                var six = $('#six').val();
        if(bet_amount){
            $.ajax({
                type:'POST',
                url:'win_amount_ajaxData.php',
                data:'bet_amount='+bet_amount+ '&cricket_id='+ cricket_id + '&team_id=' +team_id+ '&player_id=' +player_id+ '&four=' +four+ '&six=' +six ,  
                success:function(html){
                    $('#win_amount').html(html);
                }
            }); 
        }else{
            $('#win_amount').html('0');
        }
            });
        });
     $(document).ready(function(){
    $('#four').on('change',function(){
          var bet_amount = $('#bet_amount').val();
                var cricket_id = $('#cricket_id').val();
                var team_id = $('#team_id').val();
                var player_id = $('#player_id').val();
                var four = $('#four').val();
                var six = $('#six').val();
        if(bet_amount){
            $.ajax({
                type:'POST',
                url:'win_amount_ajaxData.php',
                data:'bet_amount='+bet_amount+ '&cricket_id='+ cricket_id + '&team_id=' +team_id+ '&player_id=' +player_id+ '&four=' +four+ '&six=' +six ,  
                success:function(html){
                    $('#win_amount').html(html);
                }
            }); 
        }else{
            $('#win_amount').html('0');
        }
    });
         
         
    
});
     $(document).ready(function(){
    $('#six').on('change',function(){
          var bet_amount = $('#bet_amount').val();
                var cricket_id = $('#cricket_id').val();
                var team_id = $('#team_id').val();
                var player_id = $('#player_id').val();
                var four = $('#four').val();
                var six = $('#six').val();
        if(bet_amount){
            $.ajax({
                type:'POST',
                url:'win_amount_ajaxData.php',
                data:'bet_amount='+bet_amount+ '&cricket_id='+ cricket_id + '&team_id=' +team_id+ '&player_id=' +player_id+ '&four=' +four+ '&six=' +six ,  
                success:function(html){
                    $('#win_amount').html(html);
                }
            }); 
        }else{
            $('#win_amount').html('0');
        }
    });
});
     function clearform()
{
    document.getElementById("bet_amount").value="";
    document.getElementById("win_amount").innerHTML ="";
    document.getElementById("over_win_amount").innerHTML="";
    document.getElementById("over_bet_amount").value ="";
    document.getElementById("rate").value ="";
    document.getElementById("session_win_amount").innerHTML=""
    document.getElementById("session_bet_amount").value ="";
    document.getElementById("session_rate").value ="";
    document.getElementById("match_toss_win_amount").innerHTML="";
    document.getElementById("match_toss_bet_amount").value ="";
}
    </script>
<script>
$(function(){
  $(document).on('click', '.bet_model', function(e){
    e.preventDefault();
    $('#bet_model').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
    $(document).on('click', '.overs', function(e){
    e.preventDefault();
    $('#overs').modal('show');
    var id = $(this).data('id');
    getRow1(id);
  });
    $(document).on('click', '.session', function(e){
    e.preventDefault();
    $('#session').modal('show');
    var id = $(this).data('id');
    getRow_session(id);
  });
     $(document).on('click', '.target', function(e){
    e.preventDefault();
    $('#target').modal('show');
    var id = $(this).data('id');
    getRow_target(id);
  });
    $(document).on('click', '.match_toss_modal', function(e){
    e.preventDefault();
    $('#match_toss_modal').modal('show');
    var id = $(this).data('id');
    getRow_match_toss(id);
  });
   
});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'cricket_bet_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('#cricket_id').val(response.cricket_id);
     $('.cricket_name').html(response.cricket_name);
      $('#team_id').val(response.team_id);
      $('.team_name').html(response.team_name);
      $('#player_id').val(response.player_id);
      $('.player_name').html(response.player_name);
      $('.ratio_four').val(response.ratio_four);
      $('.ratio_six').val(response.ratio_six);
      $('#four').html(response.four_store);
    $('#six').html(response.six_store);
    }
  });
}
    function getRow1(id){
  $.ajax({
    type: 'POST',
    url: 'cricket_overs_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('#id').val(response.id);
        $('#rate').val(response.rate);
     $('.cricket_name').html(response.cricket_name);
      $('.team_name').html(response.team_name);
      $('#info').html(response.info);
    }
  });
}
    function getRow_session(id){
  $.ajax({
    type: 'POST',
    url: 'cricket_session_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('#session_id').val(response.id);
        $('#session_rate').val(response.rate);
     $('.session_cricket_name').html(response.cricket_name);
      $('.session_team_name').html(response.team_name);
      $('#session_info').html(response.info);
    }
  });
}
    
    function getRow_target(id){
  $.ajax({
    type: 'POST',
    url: 'target_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
    $('#target_val_modal').val(response.target);
    $('#target_amount_modal').val(response.amount);
    $('.target_val').html(response.target);
    $('.target_amount').html(response.amount);
    $('#target_cricket_id_modal').val(response.cricket_id);
    $('.target_cricket_name').html(response.cricket_name);
    }
  });
}
 
     function getRow_match_toss(id){
  $.ajax({
    type: 'POST',
    url: 'match_toss_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
    $('#match_toss_cricket_id').val(response.cricket_id);
    $('#match_toss_team_id').val(response.team_id);
    $('#match_toss_rate').val(response.rate);
    $('#toss_match').val(response.toss_match);
    $('.cricket_name').html(response.cricket_name);
    $('.team_name').html(response.team_name);
    }
  });
}
function myratecal(){
 document.getElementById("over_win_amount").innerHTML=document.getElementById("over_bet_amount").value*document.getElementById("rate").value;
}
function mysessionratecal(){
 document.getElementById("session_win_amount").innerHTML=document.getElementById("session_bet_amount").value*document.getElementById("session_rate").value;
}
    function mytarget(){
       var target_score=document.getElementById("target_score").value;
       var target_amount=document.getElementById("target_amount").value;
        var cricket_id=document.getElementById("target_cricket_id").value;
        if(target_score.length!=0 && target_amount.length!=0){
            target_info="";
        for(i=parseInt(target_score)-10;i<=parseInt(target_score)+10;i++){
            win=Math.abs(i-parseInt(target_score));
            win=Math.abs(win-10);
            win=parseInt(target_amount)*win;
            win=win/2;
            if(parseInt(i)==parseInt(target_score)){
                win=win*2;
                target_info+="<b>if real TARGET is "+i+", you WIN <b>&#8377;"+win+"</b></b><br>";
            }else
            target_info+="if real TARGET is "+i+", you WIN <b>&#8377;"+win+"</b><br>";
        }
 document.getElementById("target_info").innerHTML=target_info;
            if(parseInt(document.getElementById("target_suspended").value)==0){
            document.getElementById("target_bet_button").innerHTML="<?php if(!isset($_SESSION['id'])){ ?><a href='login.php'><p style='align; background-color: #d24026; border: none; color: white; padding: 10px; text-align: center; text-decoration: none; display: inline-block; font-size: 12px; margin: 4px 2px; cursor: pointer; border-radius: 10px;'>LOGIN</p></a><?php }else{?><div class='col-sm-4'><input type='submit' class='btn btn-primary btn-sm target btn-flat' data-id='"+parseInt(target_score)+","+parseInt(target_amount)+","+parseInt(cricket_id)+"' name='bet' id='bet' value='BET' ></div><?php } ?>";}else{
                document.getElementById("target_bet_button").innerHTML="<?php if(!isset($_SESSION['id'])){ ?><a href='login.php'><p style='align; background-color: #d24026; border: none; color: white; padding: 10px; text-align: center; text-decoration: none; display: inline-block; font-size: 12px; margin: 4px 2px; cursor: pointer; border-radius: 10px;'>LOGIN</p></a><?php }else{?><div class='col-sm-4'><input type='submit' class='btn btn-primary btn-sm btn-flat' name='bet' id='bet' value='Suspended' ></div><?php } ?>";
            }
        }else{
        document.getElementById("target_info").innerHTML="You can Earn <b>10 times</b> of your BET,<br>Just Enter Values for Target and Amount.<br>";
            document.getElementById("target_bet_button").innerHTML="";
        }
}
    function matchratecal(){
document.getElementById("match_toss_win_amount").innerHTML=document.getElementById("match_toss_rate").value*document.getElementById("match_toss_bet_amount").value;
    }
</script>
</body>
</html>
