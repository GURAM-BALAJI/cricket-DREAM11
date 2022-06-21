<!-- Bet -->
<div class="modal fade" id="bet_model">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>NEW BET (<spam class="bold cricket_name"></spam>)</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="cricket_bet.php">
               <input type="hidden" name="cricket_id" id="cricket_id">
                  <input type="hidden" name="team_id" id="team_id">
                  <input type="hidden" name="player_id" id="player_id">
                    <div class="form-group">
                    <label for="TEAM" class="col-sm-3 control-label">TEAM: </label>
                    <div class="col-sm-9">
                   <h3 class="bold team_name"></h3>
                    </div>
                </div>
                     <div class="form-group">
                    <label for="PLAYER" class="col-sm-3 control-label">PLAYER: </label>
                    <div class="col-sm-9">
                  <h3 class="bold player_name"></h3>
                    </div>
                </div>
                <div class="form-group">
                    <label for="bet_amount" class="col-sm-3 control-label">BET AMOUNT: </label>
                    <div class="col-sm-9">
                  <input  type="number" step="any" name="bet_amount" id="bet_amount" min="10" required>
                    </div>
                </div>
               
                <div class="form-group">
                    <label for="bet" class="col-sm-3 control-label">SELECT NUMBER OF 4`s and 6`s: </label>
                    <div class="col-sm-9">
                    <select name="four" id="four" required>
                    </select> Four's &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="six" id="six">                        
                    </select> Six's
                    </div>
                   <p style="color:red;">You can win if it`s Equal or Above.</p>
                </div>
                <div class="form-group">
                    <label for="win_amount" class="col-sm-3 control-label">WIN AMOUNT: </label>
                    <div class="col-sm-9">
                        <p id="win_amount"></p>
                    </div>
                </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <?php if(!isset($_SESSION['id'])){ ?>
    <a href="login.php">
        <p style="align; background-color: #d24026; border: none; color: white; padding: 10px; text-align: center; text-decoration: none; display: inline-block; font-size: 12px; margin: 4px 2px; cursor: pointer; border-radius: 10px;">
            LOGIN</p>
    </a><?php }else{?>
              <button type="submit" class="btn btn-primary btn-flat" name="bet"><i class="fa fa-ravelry"></i> Place Bet</button>
                <?php } ?>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Overs Bet -->
<div class="modal fade" id="overs">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>NEW BET (<spam class="bold cricket_name"></spam>)</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="cricket_over_bet.php">
                  <input type="hidden" name="id" id="id">
                  <input type="hidden" name="rate" id="rate">
                    <div class="form-group">
                    <label for="TEAM" class="col-sm-3 control-label">TEAM: </label>
                    <div class="col-sm-9">
                   <h3 class="bold team_name"></h3>
                    </div>
                </div>
                <div class="form-group">
                    <label for="over_bet_amount" class="col-sm-3 control-label">BET AMOUNT: </label>
                    <div class="col-sm-9">
                  <input  type="number" step="any" name="over_bet_amount" id="over_bet_amount" min="10" required oninput="myratecal()">
                    </div>
                </div>
               
                <div class="form-group">
                    <label for="over_win_amount" class="col-sm-3 control-label">WIN AMOUNT: </label>
                    <div class="col-sm-9">
                        <p id="over_win_amount"></p>
                    </div>
                </div>
                  <div id="info"></div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <?php if(!isset($_SESSION['id'])){ ?>
  <a href="login.php">
        <p style="align; background-color: #d24026; border: none; color: white; padding: 10px; text-align: center; text-decoration: none; display: inline-block; font-size: 12px; margin: 4px 2px; cursor: pointer; border-radius: 10px;">
            LOGIN</p>
    </a><?php }else{?>
              <button type="submit" class="btn btn-primary btn-flat" name="bet"><i class="fa fa-ravelry"></i> Place Bet</button>
                <?php } ?>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Session Bet -->
<div class="modal fade" id="session">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>NEW BET (<spam class="bold session_cricket_name"></spam>)</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="cricket_session_bet.php">
                  <input type="hidden" name="id" id="session_id">
                  <input type="hidden" name="rate" id="session_rate">
                    <div class="form-group">
                    <label for="TEAM" class="col-sm-3 control-label">TEAM: </label>
                    <div class="col-sm-9">
                   <h3 class="bold session_team_name"></h3>
                    </div>
                </div>
                <div class="form-group">
                    <label for="session_bet_amount" class="col-sm-3 control-label">BET AMOUNT: </label>
                    <div class="col-sm-9">
                  <input  type="number" step="any" name="session_bet_amount" id="session_bet_amount" min="10" required oninput="mysessionratecal()">
                    </div>
                </div>
               
                <div class="form-group">
                    <label for="session_win_amount" class="col-sm-3 control-label">WIN AMOUNT: </label>
                    <div class="col-sm-9">
                        <p id="session_win_amount"></p>
                    </div>
                </div>
                  <div id="session_info"></div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <?php if(!isset($_SESSION['id'])){ ?>
  <a href="login.php">
        <p style="align; background-color: #d24026; border: none; color: white; padding: 10px; text-align: center; text-decoration: none; display: inline-block; font-size: 12px; margin: 4px 2px; cursor: pointer; border-radius: 10px;">
            LOGIN</p>
    </a><?php }else{?>
              <button type="submit" class="btn btn-primary btn-flat" name="bet"><i class="fa fa-ravelry"></i> Place Bet</button>
                <?php } ?>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- target Bet -->
<div class="modal fade" id="target">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>You Want To Place Bet</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="target_bet.php">
                 
                  <input type="hidden" name="target_val" id="target_val_modal">
                   <input type="hidden" name="target_amount" id="target_amount_modal">
                  <input type="hidden" name="target_cricket_id" id="target_cricket_id_modal">
        
                  <div class="text-center">
                    <p>TARGET BET ON</p>
                    <h2 class="bold target_cricket_name"></h2>
                </div>           
                
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <?php if(!isset($_SESSION['id'])){ ?>
  <a href="login.php">
        <p style="align; background-color: #d24026; border: none; color: white; padding: 10px; text-align: center; text-decoration: none; display: inline-block; font-size: 12px; margin: 4px 2px; cursor: pointer; border-radius: 10px;">
            LOGIN</p>
    </a><?php }else{?>
              <button type="submit" class="btn btn-primary btn-flat" name="bet"><i class="fa fa-ravelry"></i> Place Bet</button>
                <?php } ?>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Overs Bet -->
<div class="modal fade" id="match_toss_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>NEW BET (<spam class="bold cricket_name"></spam>)</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="cricket_match_toss_bet.php">
                  <input type="hidden" name="match_toss_cricket_id" id="match_toss_cricket_id">
                  <input type="hidden" name="match_toss_team_id" id="match_toss_team_id">
                  <input type="hidden" name="match_toss_rate" id="match_toss_rate">
                   <input type="hidden" name="toss_match" id="toss_match">
                    <div class="form-group">
                    <label for="TEAM" class="col-sm-3 control-label">To Win: </label>
                    <div class="col-sm-9">
                   <h3 class="bold team_name"></h3>
                    </div>
                </div>
                <div class="form-group">
                    <label for="match_bet_amount" class="col-sm-3 control-label">BET AMOUNT: </label>
                    <div class="col-sm-9">
                  <input  type="number" step="any" name="match_toss_bet_amount" id="match_toss_bet_amount" min="10" required oninput="matchratecal()">
                    </div>
                </div>
               
                <div class="form-group">
                    <label for="match_win_amount" class="col-sm-3 control-label">WIN AMOUNT: </label>
                    <div class="col-sm-9">
                        <p id="match_toss_win_amount"></p>
                    </div>
                </div>
                  <div id="info"></div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <?php if(!isset($_SESSION['id'])){ ?>
  <a href="login.php">
        <p style="align; background-color: #d24026; border: none; color: white; padding: 10px; text-align: center; text-decoration: none; display: inline-block; font-size: 12px; margin: 4px 2px; cursor: pointer; border-radius: 10px;">
            LOGIN</p>
    </a><?php }else{?>
              <button type="submit" class="btn btn-primary btn-flat" name="bet"><i class="fa fa-ravelry"></i> Place Bet</button>
                <?php } ?>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>