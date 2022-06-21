<!-- Bet -->
<div class="modal fade" id="withdraw">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>WITHDRAW TO UPI</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="withdraw_request.php">
                To UPI Withdraw:
                <div class="form-group">
                    <label for="withdraw_amount" class="col-sm-3 control-label">WITHDRAW AMOUNT: </label>
                    <div class="col-sm-9">
                  <input  type="number" step="any" name="withdraw_amount" id="withdraw_amount" min="50">
                    </div>
                </div>
                  
               <h5><u><b>NOTE:</b></u></h5>
                  <p>* Minimum balance is &#8377;50.</p>
                  <p>* Your amount will be transferred with in 12 hours.</p>
            <div class="modal-footer">
<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <?php if(!isset($_SESSION['id'])){ ?>
    <a href="login.php">
        <button style="align; background-color: #d24026; border: none; color: white; padding: 10px; text-align: center; text-decoration: none; display: inline-block; font-size: 12px; margin: 4px 2px; cursor: pointer; border-radius: 10px;">
            LOGIN</button>
    </a><?php }else{?>
              <button type="submit" class="btn btn-primary btn-flat" name="withdraw"><i class="fa fa-lightbulb-o"></i>  Withdraw</button>
                <?php } ?>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
  

<div class="modal fade" id="withdraw_bank">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>WITHDRAW TO BANK</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="withdraw_request.php">
                To transfer To Bank:
                  <div class="form-group">
                    <label for="withdraw_amount" class="col-sm-3 control-label">WITHDRAW AMOUNT: </label>
                    <div class="col-sm-9">
                  <input  type="number" step="any" name="withdraw_amount" id="withdraw_amount" min="50">
                    </div>
                </div>
                  
                  <div class="form-group">
                    <label for="account_no" class="col-sm-3 control-label">ACCOUNT NO: </label>
                    <div class="col-sm-9">
                  <input  type="text" name="account_no" id="account_no" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ifsc" class="col-sm-3 control-label">IFSC CODE: </label>
                    <div class="col-sm-9">
                  <input  type="text" name="ifsc" id="ifsc" required>
                    </div>
                </div>
                  
               <h5><u><b>NOTE:</b></u></h5>
                  <p>* Minimum balance is &#8377;50.</p>
                  <p>* Your amount will be transferred with in 12 hours.</p>
            <div class="modal-footer">
<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <?php if(!isset($_SESSION['id'])){ ?>
    <a href="login.php">
        <button style="align; background-color: #d24026; border: none; color: white; padding: 10px; text-align: center; text-decoration: none; display: inline-block; font-size: 12px; margin: 4px 2px; cursor: pointer; border-radius: 10px;">
            LOGIN</button>
    </a><?php }else{?>
              <button type="submit" class="btn btn-primary btn-flat" name="withdraw"><i class="fa fa-lightbulb-o"></i>  Withdraw</button>
                <?php } ?>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php if(isset($_SESSION['id'])){?>
<!-- play list -->
<div class="modal fade" id="play_list">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>PLAY LIST </b></h4>
            </div>
            <div class="modal-body"> 
                     <table style="border-collapse: collapse;">
               
            <?php
    $str=0;
    $id=$_SESSION['id'];
    $conn = $pdo->open();
    $stmt = $conn->prepare("SELECT cricket_name, cricket_bet_player_id, cricket_bet_four, cricket_bet_six, cricket_bet_placed_amount, cricket_bet_win_amount, cricket_bet_win, player1, player2, player3, player4, player5, player6, player7, player8, player9, player10, player11, player12 FROM cricket_bet left join users on user_id=cricket_bet_users_id left join cricket on cricket_id=cricket_bet_cricket_id left join teams on team_id=cricket_bet_team_id WHERE cricket_bet_users_id = $id ORDER BY cricket_bet_id DESC LIMIT 7");
    $stmt->execute();
    foreach($stmt as $row){
        if($str==0){ $str=1;?>
                <tr style="background-color:#919191; ">
                    <th style="padding: 5px;">MATCH NAME</th>
                    <th style="padding: 5px;">PLAYER NAME</th>
                    <th style="padding: 5px;">4</th>
                    <th style="padding: 5px;">6</th>
                    <th style="padding: 5px;">BET</th>
                    <th style="padding: 5px;">WIN</th>
                    </tr>          
        <?php }
        $color=$row['cricket_bet_win'];
                        if($color==0)
                            $color="Orange";
                            elseif($color==1)
                                $color="red";
                                elseif($color==2)
                                    $color="green";
                        ?>
                    <tr style="background-color:<?php echo $color; ?>;">
                        <td style=" padding: 5px;"><?php echo $row['cricket_name'];?></td>
                        <?php $ply_id=$row['cricket_bet_player_id'];
                        $player='player'.$ply_id;?>
                        <td style=" padding: 5px;"><?php echo $row[$player];?></td>
                        <td style=" padding: 5px;"><?php echo $row['cricket_bet_four'];?></td>
                         <td style=" padding: 5px;"><?php echo $row['cricket_bet_six'];?></td>
                        <td style=" padding: 5px;"><?php echo $row['cricket_bet_placed_amount'];?></td>
                        <td style=" padding: 5px;"><?php echo $row['cricket_bet_win_amount'];?></td>
                    </tr>
                <?php } ?>
            </table>
            </div>
                    <div class="modal-body"> 
                 
            <?php
    $str=0;
    $conn = $pdo->open();
    $stmt = $conn->prepare("SELECT * FROM cricket_match_bet left join users on user_id=cricket_match_bet_user_id left join cricket on cricket_id=cricket_match_bet_cricket_id left join teams on team_id=cricket_match_bet_team_id WHERE cricket_match_bet_user_id = $id ORDER BY cricket_match_bet_id DESC LIMIT 7");
    $stmt->execute();
    foreach($stmt as $row){
        if($str==0){ $str=1;?>
                    <caption style="background-color:#919191; ">MATCH</caption>
                     <table style="border-collapse: collapse;">
                <tr style="background-color:#919191; ">
                    <th style="padding: 5px;">MATCH NAME</th>
                    <th style="padding: 5px;">TEAM NAME</th>
                    <th style="padding: 5px;">BET</th>
                    <th style="padding: 5px;">RATE</th>
                    <th style="padding: 5px;">WIN</th>
                    </tr>            
        <?php }
        $color=$row['cricket_match_bet_win'];
                        if($color==0)
                            $color="Orange";
                            elseif($color==1)
                                $color="red";
                                elseif($color==2)
                                    $color="green";
                        ?>
                    <tr style="background-color:<?php echo $color; ?>;">
                        <td style=" padding: 5px;"><?php echo $row['cricket_name'];?></td>
                        <td style=" padding: 5px;"><?php echo $row['team_name'];?></td>
                        <td style=" padding: 5px;"><?php echo $row['cricket_match_bet_bet_amount'];?></td>
                        <td style=" padding: 5px;"><?php echo $row['cricket_match_bet_rate'];?></td>
                        <td style=" padding: 5px;"><?php echo $row['cricket_match_bet_win_amount'];?></td>
                    </tr>
                <?php } ?>
            </table>
            </div>
                 <div class="modal-body"> 
                
            <?php
     $str=0;
    $conn = $pdo->open();
    $stmt = $conn->prepare("SELECT * FROM cricket_toss_bet left join users on user_id=cricket_toss_bet_user_id left join cricket on cricket_id=cricket_toss_bet_cricket_id left join teams on team_id=cricket_toss_bet_team_id WHERE cricket_toss_bet_user_id = $id ORDER BY cricket_toss_bet_id DESC LIMIT 7");
    $stmt->execute();
    foreach($stmt as $row){
        if($str==0){ $str=1;?>
                           <caption style="background-color:#919191; ">TOSS</caption>
                     <table style="border-collapse: collapse;">
                <tr style="background-color:#919191; ">
                    <th style="padding: 5px;">MATCH NAME</th>
                    <th style="padding: 5px;">TEAM NAME</th>
                    <th style="padding: 5px;">BET</th>
                    <th style="padding: 5px;">RATE</th>
                    <th style="padding: 5px;">WIN</th>
                    </tr>      
          <?php }
        $color=$row['cricket_toss_bet_win'];
                        if($color==0)
                            $color="Orange";
                            elseif($color==1)
                                $color="red";
                                elseif($color==2)
                                    $color="green";
                        ?>
                    <tr style="background-color:<?php echo $color; ?>;">
                        <td style=" padding: 5px;"><?php echo $row['cricket_name'];?></td>
                        <td style=" padding: 5px;"><?php echo $row['team_name'];?></td>
                        <td style=" padding: 5px;"><?php echo $row['cricket_toss_bet_bet_amount'];?></td>
                        <td style=" padding: 5px;"><?php echo $row['cricket_toss_bet_rate'];?></td>
                        <td style=" padding: 5px;"><?php echo $row['cricket_toss_bet_win_amount'];?></td>
                    </tr>
                <?php } ?>
            </table>
            </div>
                 <div class="modal-body"> 
                
            <?php
    $str=0;
    $conn = $pdo->open();
    $stmt = $conn->prepare("SELECT * FROM cricket_target_bet left join users on user_id=cricket_target_bet_user_id left join cricket on cricket_id=cricket_target_bet_cricket_id WHERE cricket_target_bet_user_id = $id ORDER BY cricket_target_bet_id DESC LIMIT 7");
    $stmt->execute();
    foreach($stmt as $row){ 
        if($str==0){ $str=1;?>
                      <caption style="background-color:#919191; ">TARGET</caption>
                     <table style="border-collapse: collapse;">
                <tr style="background-color:#919191; ">
                    <th style="padding: 5px;">MATCH NAME</th>
                    <th style="padding: 5px;">SCORE</th>
                    <th style="padding: 5px;">BET</th>
                    <th style="padding: 5px;">WIN</th>
                    </tr>           
        <?php }
        $color=$row['cricket_target_bet_win'];
                        if($color==0)
                            $color="Orange";
                            elseif($color==1)
                                $color="red";
                                elseif($color==2)
                                    $color="green";
                        ?>
                    <tr style="background-color:<?php echo $color; ?>;">
                        <td style=" padding: 5px;"><?php echo $row['cricket_name'];?></td>
                        <td style=" padding: 5px;"><?php echo $row['cricket_target_bet_target'];?></td>
                        <td style=" padding: 5px;"><?php echo $row['cricket_target_bet_bet_amount'];?></td>
                        <td style=" padding: 5px;"><?php echo $row['cricket_target_bet_win_amount'];?></td>
                    </tr>
                <?php } ?>
            </table>
            </div>
                 <div class="modal-body"> 
                  
            <?php
    $str=0;
    $conn = $pdo->open();
    $stmt = $conn->prepare("SELECT * FROM cricket_overs_bet left join cricket_overs on cricket_overs_id=cricket_overs_bet_cricket_overs_id left join users on user_id=cricket_overs_bet_user_id left join cricket on cricket_id=cricket_overs_cricket_id WHERE cricket_overs_bet_user_id = $id ORDER BY cricket_overs_bet_id DESC LIMIT 7");
    $stmt->execute();
    foreach($stmt as $row){
        if($str==0){ $str=1;?>
                     
                  <caption style="background-color:#919191; ">OVERS</caption>
                     <table style="border-collapse: collapse;">
                <tr style="background-color:#919191; ">
                    <th style="padding: 5px;">MATCH NAME</th>
                    <th style="padding: 5px;">OVER NO</th>
                    <th style="padding: 5px;">Bel/Abo</th>
                    <th style="padding: 5px;">RATE</th>
                    <th style="padding: 5px;">SCORE</th>
                    <th style="padding: 5px;">BET</th>
                    <th style="padding: 5px;">WIN</th>
                    </tr>
       <?php }
        $color=$row['cricket_overs_bet_bet_win'];
                        if($color==0)
                            $color="Orange";
                            elseif($color==1)
                                $color="red";
                                elseif($color==2)
                                    $color="green";
                        ?>
                    <tr style="background-color:<?php echo $color; ?>;">
                        <td style=" padding: 5px;"><?php echo $row['cricket_name'];?></td>
                        <td style=" padding: 5px;"><?php echo $row['cricket_overs_bet_overs_no'];?></td>
                        <?php if($row['cricket_overs_bet_yes_no'])
                                                echo "<td>Above</td>";
                                                else
                                                echo "<td>Bellow</td>";?>
                        <td style=" padding: 5px;"><?php echo $row['cricket_overs_bet_rate'];?></td>
                        <td style=" padding: 5px;"><?php echo $row['cricket_overs_bet_score'];?></td>
                        <td style=" padding: 5px;"><?php echo $row['cricket_overs_bet_bet_amount'];?></td>
                        <td style=" padding: 5px;"><?php echo $row['cricket_overs_bet_win_amount'];?></td>
                    </tr>
                <?php } ?>
            </table>
            </div>
                       <div class="modal-body"> 
                  
            <?php
    $str=0;
    $conn = $pdo->open();
    $stmt = $conn->prepare("SELECT * FROM cricket_session_bet left join cricket_session on cricket_session_id=cricket_session_bet_cricket_session_id left join users on user_id=cricket_session_bet_user_id left join cricket on cricket_id=cricket_session_cricket_id WHERE cricket_session_bet_user_id = $id ORDER BY cricket_session_bet_id DESC LIMIT 7");
    $stmt->execute();
    foreach($stmt as $row){
        if($str==0){ $str=1;?>
                     
                  <caption style="background-color:#919191; ">SESSION</caption>
                     <table style="border-collapse: collapse;">
                <tr style="background-color:#919191; ">
                    <th style="padding: 5px;">MATCH NAME</th>
                    <th style="padding: 5px;">OVER NO</th>
                    <th style="padding: 5px;">Bel/Abo</th>
                    <th style="padding: 5px;">RATE</th>
                    <th style="padding: 5px;">SCORE</th>
                    <th style="padding: 5px;">BET</th>
                    <th style="padding: 5px;">WIN</th>
                    </tr>
       <?php }
        $color=$row['cricket_session_bet_bet_win'];
                        if($color==0)
                            $color="Orange";
                            elseif($color==1)
                                $color="red";
                                elseif($color==2)
                                    $color="green";
                        ?>
                    <tr style="background-color:<?php echo $color; ?>;">
                        <td style=" padding: 5px;"><?php echo $row['cricket_name'];?></td>
                        <td style=" padding: 5px;"><?php echo $row['cricket_session_bet_till_overs'];?></td>
                        <?php if($row['cricket_session_bet_yes_no'])
                                                echo "<td>Above</td>";
                                                else
                                                echo "<td>Bellow</td>";?>
                        <td style=" padding: 5px;"><?php echo $row['cricket_session_bet_rate'];?></td>
                        <td style=" padding: 5px;"><?php echo $row['cricket_session_bet_score'];?></td>
                        <td style=" padding: 5px;"><?php echo $row['cricket_session_bet_bet_amount'];?></td>
                        <td style=" padding: 5px;"><?php echo $row['cricket_session_bet_win_amount'];?></td>
                    </tr>
                <?php } ?>
            </table>
            </div>
            
        </div>
    </div>
</div>
<?php } ?>
<!-- trasaction -->
<div class="modal fade" id="trasaction">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>TRANSACTION HISTORY</b></h4>
            </div>
            <div class="modal-body"> 
               
            <?php
    if(isset($_SESSION['id'])){
    $id=$_SESSION['id'];
    $conn = $pdo->open();
    $stmt = $conn->prepare("SELECT * FROM transaction WHERE transaction_user_id = $id ORDER BY transaction_id DESC LIMIT 15");
    $stmt->execute();
    foreach($stmt as $row){?>
                    <div style="padding: 5px; margin: 0;  background-color:#e4faff;  border-radius: 9px;">
                     <table style="width:100%;">
                        <tr>
                        <td style="float:left;"><h3><?php echo $row['transaction_send_to'];?></h3></td>
                            <?php if($row['transaction_amount']<0)
                            $color="red";
                            else
                            $color="green";?>
                         <td rowspan="2" style="color:<?php echo $color;?>">&#8377;<?php echo $row['transaction_amount'];?></td>
                        <tr><td style=""><?php echo date("d-M-Y H:i:s A",strtotime($row['transaction_date']));?></td></tr>
                    </tr>
                </table>
                    </div><hr>
                <?php }} ?>
            
            </div>
        </div>
    </div>
</div>

<!-- Pay -->
<div class="modal fade" id="pay">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Pay To Friend </b></h4>
            </div>
            <div class="modal-body"> 
            <form class="form-horizontal" method="POST" action="pay_friend.php">
                
            <div class="form-group">
            <label for="phone" class="col-sm-3 control-label">ENTER PHONE NUMBER: </label>
            <div class="col-sm-9">
            <input type="phone" name="phone" id="phone" placeholder="With Out +91" required>
            </div>
            </div>
                
                <div class="form-group">
                <label for="amount" class="col-sm-3 control-label">AMOUNT TO SEND: </label>
                <div class="col-sm-9">
                <input  type="number" step="any" name="amount" id="amount" placeholder="10" min="10" required>
                </div>
                </div>
                    
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">PASSWORD: </label>
                    <div class="col-sm-9">
                  <input type="password" name="password" id="password" placeholder="login password" required>
                    </div>
                </div>
                    
 <div class="modal-footer">
<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <?php if(!isset($_SESSION['id'])){ ?>
    <a href="login.php">
        <button style="align; background-color: #d24026; border: none; color: white; padding: 10px; text-align: center; text-decoration: none; display: inline-block; font-size: 12px; margin: 4px 2px; cursor: pointer; border-radius: 10px;">
            LOGIN</button>
    </a><?php }else{?>
              <button type="submit" class="btn btn-primary btn-flat" name="pay"><i class="fa fa-paper-plane-o"></i> PAY</button>
                <?php } ?>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>