<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Cricket Session</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="session_add.php">
                  
                             
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
                    <label for="till_over" class="col-sm-3 control-label">Till Over </label>
                    <div class="col-sm-9">
                      <input type="number" step="any" class="form-control" id="till_over" name="till_over" required>
                    </div>
                </div>
                  <div class="form-group">
                    <label for="total_session" class="col-sm-3 control-label">Total session</label>
                    <div class="col-sm-9">
                      <input type="number" step="any" class="form-control" id="total_session" name="total_session" required>
                    </div>
                </div>
                  
                  <div id="session">
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
              <h4 class="modal-title"><b>Edit Cricket session</b></h4>
            </div>
            
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="session_edit.php">
                  <input type="hidden" class="cricket_session_id" name="id">
                  
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
                    <label for="edit_till_over" class="col-sm-3 control-label">Till Over </label>
                    <div class="col-sm-9">
                      <input type="number" step="any" class="form-control" id="edit_till_over" name="edit_till_over" required onfocus="this.blur()">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="cricket_session_session" class="col-sm-3 control-label">Total session</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="cricket_session_session" name="cricket_session_session" required onfocus="this.blur()">
                    </div>
                </div>
                  <div class="session"></div>
                  
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
              <form class="form-horizontal" method="POST" action="session_delete.php">
                <input type="hidden" class="cricket_session_id" name="id">
                <div class="text-center">
                    <p>DELETE CRICKET SESSION</p>
                    <h2 class="bold cricket_name"></h2>
                    <h3 class="bold team_name"></h3>
                    <h3 class="bold till_over"></h3>
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
              <form class="form-horizontal" method="POST" action="session_activate.php">
                <input type="hidden" class="cricket_session_id" name="id">
                <div class="text-center">
                    <p>ACTIVATE CRICKET SESSION</p>
                    <h2 class="bold cricket_name"></h2>
                    <h3 class="bold team_name"></h3>
                    <h3 class="bold till_over"></h3>
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
              <form class="form-horizontal" method="POST" action="session_deactivate.php">
                <input type="hidden" class="cricket_session_id" name="id">
                <div class="text-center">
                    <p>DEACTIVATE CRICKET SESSION</p>
                    <h2 class="bold cricket_name"></h2>
                    <h3 class="bold team_name"></h3>
                    <h3 class="bold till_over"></h3>
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

     

<!-- session -->
<div class="modal fade" id="add_SESSION">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add Session</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="session_score_add.php">
                <input type="hidden" class="cricket_session_id" name="cricket_session_id">
                <div class="text-center">
                    <p>ADD CRICKET SESSION SCORE</p>
                    <h2 class="bold cricket_name"></h2>
                    <h3 class="bold team_name"></h3>
                    <p>SESSION </p>
                    <h4 class="bold till_over"></h4>
                    <div class="form-group">
                    <label for="cricket_session_score" class="col-sm-3 control-label">Total Session Score</label>
                    <div class="col-sm-9">
                      <input  type="number" step="any" class="form-control" id="cricket_session_score" name="cricket_session_score" required>
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

