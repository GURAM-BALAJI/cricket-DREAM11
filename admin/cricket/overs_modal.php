<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Cricket Overs</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="overs_add.php">
                  
                             
                  <div class="form-group">
                    <label for="cricket_id" class="col-sm-3 control-label">Cricket Match</label>
                    <div class="col-sm-9">
                      <select class="form-control" id="cricket" name="cricket" required>
                          <option value="">Select Match Name</option>
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
                    <label for="team" class="col-sm-3 control-label">Team Name</label>
                    <div class="col-sm-9">
                      <select class="form-control" id="team" name="team" required>
                          <option value="">Select Match First</option>
                        </select>
                    </div>
                </div>
                  
                  <div class="form-group">
                    <label for="total_overs" class="col-sm-3 control-label">Total Overs</label>
                    <div class="col-sm-9">
                      <input  type="number" step="any" class="form-control" id="total_overs" name="total_overs" required>
                    </div>
                </div>
                  
                  <div id="overs">
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
              <h4 class="modal-title"><b>Edit Cricket Overs</b></h4>
            </div>
            
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="overs_edit.php">
                  <input type="hidden" class="cricket_overs_id" name="id">
                  
                  <div class="form-group">
                    <label for="cricket_name" class="col-sm-3 control-label">Cricket Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="cricket_name" name="cricket_name" required onfocus="this.blur()">
                    </div>
                </div>
                  
                  <div class="form-group">
                    <label for="team_name" class="col-sm-3 control-label">Team Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="team_name" name="team_name" required onfocus="this.blur()">
                    </div>
                </div>
                  
                 <div class="form-group">
                    <label for="cricket_overs_overs" class="col-sm-3 control-label">Total Overs</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="cricket_overs_overs" name="cricket_overs_overs" required onfocus="this.blur()">
                    </div>
                </div>
                  <div class="overs"></div>
                  
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
              <form class="form-horizontal" method="POST" action="overs_delete.php">
                <input type="hidden" class="cricket_overs_id" name="id">
                <div class="text-center">
                    <p>DELETE CRICKET OVERS</p>
                    <h2 class="bold cricket_name"></h2>
                    <h3 class="bold team_name"></h3>
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


<!-- Activate -->
<div class="modal fade" id="activate">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Activating...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="overs_activate.php">
                <input type="hidden" class="cricket_overs_id" name="id">
                <div class="text-center">
                    <p>ACTIVATE CRICKET OVERS</p>
                    <h2 class="bold cricket_name"></h2>
                    <h3 class="bold team_name"></h3>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="activate"><i class="fa fa-check"></i> Activate</button>
              </form>
            </div>
        </div>
    </div>
</div> 


<!-- Not Activate -->
<div class="modal fade" id="not_activate">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Deactivating...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="overs_deactivate.php">
                <input type="hidden" class="cricket_overs_id" name="id">
                <div class="text-center">
                    <p>DEACTIVATE CRICKET OVERS</p>
                    <h2 class="bold cricket_name"></h2>
                    <h3 class="bold team_name"></h3>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="deactivate"><i class="fa fa-check"></i> Deactivate</button>
              </form>
            </div>
        </div>
    </div>
</div> 

     

<!-- overs -->
<div class="modal fade" id="add_over">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add Overs</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="overs_score_add.php">
                <input type="hidden" class="cricket_overs_id" name="cricket_overs_id">
                <div class="text-center">
                    <p>ADD CRICKET OVERS SCORE</p>
                    <h2 class="bold cricket_name"></h2>
                    <h3 class="bold team_name"></h3>
                    <p>Over </p>
                    <h4 class="bold completed_over"></h4>
                    <div class="form-group">
                    <label for="cricket_overs_score" class="col-sm-3 control-label">Total Overs Score</label>
                    <div class="col-sm-9">
                      <input  type="number" step="any" class="form-control" id="cricket_overs_score" name="cricket_overs_score" required>
                    </div>  
                    </div>
                    
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="add"><i class="fa fa-check"></i> Add</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- play-->
<div class="modal fade" id="play">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Started</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="overs_play.php">
                <input type="hidden" class="cricket_overs_id" name="id">
                <div class="text-center">
                    <p>CRICKET STARTED</p>
                    <h2 class="bold cricket_name"></h2>
                    <h3 class="bold team_name"></h3>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="started"><i class="fa fa-check"></i> STARTED</button>
              </form>
            </div>
        </div>
    </div>
</div> 