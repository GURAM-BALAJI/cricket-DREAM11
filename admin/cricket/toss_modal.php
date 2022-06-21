<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Cricket Toss</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="toss_add.php">
                  
                             
                  <div class="form-group">
                    <label for="cricket_id" class="col-sm-3 control-label">Cricket Toss</label>
                    <div class="col-sm-9">
                      <select class="form-control" id="cricket" name="cricket" required>
                          <option value="">Select Toss Name</option>
                          <?php 
                $stmt1 = $conn->prepare("SELECT cricket_id,cricket_name FROM cricket WHERE cricket_delete='0' AND cricket_active='1' AND cricket_id NOT in (select cricket_toss_cricket_id from cricket_toss where cricket_toss_delete='0')");
                      $stmt1->execute();
                      foreach($stmt1 as $row1){
                          echo "<option value='".$row1['cricket_id']."'>".$row1['cricket_name']."</option>";
                          }?>
                        </select>
                    </div>
                </div>
                  
                  <div id="team_rate">
                  </div>
                                  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Edit Cricket Toss</b></h4>
            </div>
            
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="toss_edit.php">
                  <input type="hidden" class="edit_cricket_id" name="id">
                <div class="form-group">
                    <label for="cricket_id" class="col-sm-3 control-label">Cricket Toss</label>
                    <div class="col-sm-9">
            <input type="text" class="form-control" id="edit_cricket_name" name="edit_cricket_name" onfocus="this.blur();">
                    </div>
                </div>              

                <div class='form-group'>
                    <label for='edit_team1_rate' class='col-sm-3 control-label'><div id="edit_team1_name"></div></label>
                    <div class='col-sm-9'>
                    <input type='hidden' class='form-control' id='edit_team1_id' name='edit_team1_id'>
                      <input type='text' class='form-control' id='edit_team1_ratio' name='edit_team1_ratio' required>
                    </div>
                </div>
                  <div class='form-group'>
                    <label for='edit_team2_rate' class='col-sm-3 control-label'><div id="edit_team2_name"></div></label>
                    <div class='col-sm-9'>
                    <input type='hidden' class='form-control' id='edit_team2_id' name='edit_team2_id'>
                      <input type='text' class='form-control' id='edit_team2_ratio' name='edit_team2_ratio' required>
                    </div>
                </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="toss_delete.php">
                <input type="hidden" class="delete_cricket_id" name="id">
                <div class="text-center">
                    <p>DELETE CRICKET TOSS</p>
                    <h2 class="bold edit_cricket_name"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>


<!-- toss won -->
<div class="modal fade" id="toss_won">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Toss Won By</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="toss_won_by.php">
                <input type="hidden" class="win_cricket_id" name="cricket_id">
                <div class="text-center">
                    <p>CRICKET TOSS WON BY</p>
                    <h2 class="bold win_cricket_name"></h2>
                    <h4 class="bold win_teams"></h4>                
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="won"><i class="fa fa-check"></i> WON</button>
              </form>
            </div>
        </div>
    </div>
</div>
<!-- suspend -->
<div class="modal fade" id="suspend">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title suspend_val"><b></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="toss_suspend.php">
                <input type="hidden" class="cricket_suspend_id" name="id">
                <div class="text-center">
                    <p>SUSPEND CRICKET TOSS</p>
                    <h2 class="bold cricket_suspend_name"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="suspend"><i class="fa fa-check"></i> SAVE</button>
              </form>
            </div>
        </div>
    </div>
</div> 