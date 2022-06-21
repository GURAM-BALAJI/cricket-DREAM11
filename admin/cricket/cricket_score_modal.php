<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Player</b></h4>
            </div>
            <div class="modal-body form-horizontal">

                  <div class="form-group">
                    <label for="cricket_match_id" class="col-sm-3 control-label">Match </label>
                    <div class="col-sm-9">
                      <select class="form-control" id="cricket_match_id" name="cricket_match_id" required>
                          <option value="">Select Match</option>
                          <?php 
                          $stmt1 = $conn->prepare("SELECT * FROM cricket WHERE cricket_delete='0' AND cricket_active='1'");
                      $stmt1->execute();
                      foreach($stmt1 as $row1)
                          echo "<option value='".$row1['cricket_id']."'>".$row1['cricket_name']."</option>";
                          ?>
                        </select>
                    </div>
                </div>
                  
               <div class="form-group">
                    <label for="team1" class="col-sm-3 control-label">Team</label>
                    <div class="col-sm-9">
                      <select class="form-control" id="team" name="team" required>
                          <option value="">Select Match First</option>
                          ?>
                        </select>
                    </div>
                </div>
                  
                  <div id="player_list">
                  </div>
                                  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Out -->
<div class="modal fade" id="out">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>PLAYER OUT...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="cricket_out.php">
                <input type="hidden" class="cricketscoreid" name="cricketscoreid">
                  <input type="hidden" class="cricket_name" name="cricket_name">
                  <input type="hidden" class="cricket_score_cricket_id" name="cricket_score_cricket_id">
                  <input type="hidden" class="cricket_score_team_id" name="cricket_score_team_id">
                  <input type="hidden" class="cricket_score_player_id" name="cricket_score_player_id">
                <div class="text-center">
                    <h1 class="bold cricket_score_player_name"></h1>
                    <p>PLAYER IS OUT</p>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> NO</button>
              <button type="submit" class="btn btn-danger btn-flat" name="out"><i class="fa fa-trash"></i> YES</button>
              </form>
            </div>
        </div>
    </div>
</div>


<!-- six -->
<div class="modal fade" id="six">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>ADDING SIX..</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="cricket_four_six.php">
                    <input type="hidden" class="cricketscoreid" name="cricketscoreid">
                    <input type="hidden" class="cricket_name" name="cricket_name">
                    <input type="hidden" class="cricket_score_cricket_id" name="cricket_score_cricket_id">
                    <input type="hidden" class="cricket_score_team_id" name="cricket_score_team_id">
                    <input type="hidden" class="cricket_score_player_id" name="cricket_score_player_id">
                    <div class="text-center">
                        <h1 class="bold cricket_score_player_name"></h1>
                        <p class="bold">NOW</p>
                        <input type="number" class="cricket_score_player_six" name="six_num">
                        <p class="bold">SIX'S.</p>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-success btn-flat" name="six"><i class="fa fa-check"></i> ADD SIX</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- four -->
<div class="modal fade" id="four">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>ADDING FOUR..</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="cricket_four_six.php">
                  <input type="hidden" class="cricketscoreid" name="cricketscoreid">
                  <input type="hidden" class="cricket_name" name="cricket_name">
                  <input type="hidden" class="cricket_score_cricket_id" name="cricket_score_cricket_id">
                  <input type="hidden" class="cricket_score_team_id" name="cricket_score_team_id">
                  <input type="hidden" class="cricket_score_player_id" name="cricket_score_player_id">
                <div class="text-center">
                    <h1 class="bold cricket_score_player_name"></h1>
                    <p class="bold">NOW</p>
                    <input type="number" class="cricket_score_player_four" name="four_num">
                    <p class="bold">FOUR'S.</p>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="four"><i class="fa fa-check"></i> ADD FOUR</button>
              </form>
            </div>
        </div>
    </div>
</div> 

     