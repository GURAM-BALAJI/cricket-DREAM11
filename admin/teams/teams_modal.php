<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Team</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="teams_add.php">
                  
                  <div class="form-group">
                    <label for="category" class="col-sm-3 control-label">Category</label>
                    <div class="col-sm-9">
                      <select class="form-control" id="team_category_id" name="team_category_id" required>
                          <option value="">Select Category</option>
                          <?php 
                          $stmt1 = $conn->prepare("SELECT * FROM category");
                      $stmt1->execute();
                      foreach($stmt1 as $row1)
                          echo "<option value='".$row1['category_id']."'>".$row1['category_name']."</option>";
                          ?>
                        </select>
                    </div>
                </div>
                  
                  <div class="form-group">
                    <label for="team_name" class="col-sm-3 control-label">Team_name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="team_name" name="team_name" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="player1" class="col-sm-3 control-label">Player-1</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="player1" name="player1">
                    </div>
                </div>
                  
                   <div class="form-group">
                    <label for="player2" class="col-sm-3 control-label">Player-2</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="player2" name="player2">
                    </div>
                </div>
               
                   <div class="form-group">
                    <label for="player3" class="col-sm-3 control-label">Player-3</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="player3" name="player3">
                    </div>
                </div>
                  
                   <div class="form-group">
                    <label for="player4" class="col-sm-3 control-label">Player-4</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="player4" name="player4">
                    </div>
                </div>
                  
                   <div class="form-group">
                    <label for="player5" class="col-sm-3 control-label">Player-5</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="player5" name="player5">
                    </div>
                </div>
                  
                   <div class="form-group">
                    <label for="player6" class="col-sm-3 control-label">Player-6</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="player6" name="player6">
                    </div>
                </div>
                  
                   <div class="form-group">
                    <label for="player7" class="col-sm-3 control-label">Player-7</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="player7" name="player7">
                    </div>
                </div>
                  
                   <div class="form-group">
                    <label for="player8" class="col-sm-3 control-label">Player-8</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="player8" name="player8">
                    </div>
                </div>
                  
                   <div class="form-group">
                    <label for="player9" class="col-sm-3 control-label">Player-9</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="player9" name="player9">
                    </div>
                </div>
                  
                   <div class="form-group">
                    <label for="player10" class="col-sm-3 control-label">Player-10</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="player10" name="player10">
                    </div>
                </div>
                  
                   <div class="form-group">
                    <label for="player11" class="col-sm-3 control-label">Player-11</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="player11" name="player11">
                    </div>
                </div>
                  
                   <div class="form-group">
                    <label for="player12" class="col-sm-3 control-label">Player-12</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="player12" name="player12">
                    </div>
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
              <h4 class="modal-title"><b>Edit Team</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="teams_edit.php">
                  <input type="hidden" class="teamid" name="id">
                  <input type="hidden" class="team_category_id" name="category_id">
                 <center><b>NOTE:</b>  If you don't want to change Category leave that Option.</center>
                      <div class="form-group">
                    <label for="category" class="col-sm-3 control-label">Category</label>
                    <div class="col-sm-9">
                      <select class="form-control" name="category">
                          <option value="">Select Category</option>
                          <?php 
                          $stmt1 = $conn->prepare("SELECT * FROM category");
                      $stmt1->execute();
                      foreach($stmt1 as $row1)
                          echo "<option value='".$row1['category_id']."'>".$row1['category_name']."</option>";
                          ?>
                        </select>
                    </div>
                </div>
                  
                <div class="form-group">
                    <label for="team_name" class="col-sm-3 control-label">Team_name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_team_name" name="team_name" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="player1" class="col-sm-3 control-label">Player-1</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_player1" name="player1">
                    </div>
                </div>
                  
                   <div class="form-group">
                    <label for="player2" class="col-sm-3 control-label">Player-2</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_player2" name="player2">
                    </div>
                </div>
               
                   <div class="form-group">
                    <label for="player3" class="col-sm-3 control-label">Player-3</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_player3" name="player3">
                    </div>
                </div>
                  
                   <div class="form-group">
                    <label for="player4" class="col-sm-3 control-label">Player-4</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_player4" name="player4">
                    </div>
                </div>
                  
                   <div class="form-group">
                    <label for="player5" class="col-sm-3 control-label">Player-5</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_player5" name="player5">
                    </div>
                </div>
                  
                   <div class="form-group">
                    <label for="player6" class="col-sm-3 control-label">Player-6</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_player6" name="player6">
                    </div>
                </div>
                  
                   <div class="form-group">
                    <label for="player7" class="col-sm-3 control-label">Player-7</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_player7" name="player7">
                    </div>
                </div>
                  
                   <div class="form-group">
                    <label for="player8" class="col-sm-3 control-label">Player-8</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_player8" name="player8">
                    </div>
                </div>
                  
                   <div class="form-group">
                    <label for="player9" class="col-sm-3 control-label">Player-9</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_player9" name="player9">
                    </div>
                </div>
                  
                   <div class="form-group">
                    <label for="player10" class="col-sm-3 control-label">Player-10</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_player10" name="player10">
                    </div>
                </div>
                  
                   <div class="form-group">
                    <label for="player11" class="col-sm-3 control-label">Player-11</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_player11" name="player11">
                    </div>
                </div>
                  
                   <div class="form-group">
                    <label for="player12" class="col-sm-3 control-label">Player-12</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_player12" name="player12">
                    </div>
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
              <form class="form-horizontal" method="POST" action="teams_delete.php">
                <input type="hidden" class="teamid" name="id">
                <div class="text-center">
                    <p>DELETE TEAM</p>
                    <h2 class="bold team_name"></h2>
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



     