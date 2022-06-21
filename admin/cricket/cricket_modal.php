<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Cricket</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="cricket_add.php">
                  
                   <div class="form-group">
                    <label for="cricket_name" class="col-sm-3 control-label">Cricket Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="cricket_name" name="cricket_name" required>
                    </div>
                </div>                  
                     <div class="form-group">
                    <label for="cricket_date" class="col-sm-3 control-label">Cricket Date</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="cricket_date" name="cricket_date" required>
                    </div>
                </div>   
                  <div class="form-group">
                    <label for="cricket_time" class="col-sm-3 control-label">Cricket Time</label>
                    <div class="col-sm-9">
                      <input type="time" class="form-control" id="cricket_time" name="cricket_time" required>
                    </div>
                </div>                  
                  <div class="form-group">
                    <label for="category" class="col-sm-3 control-label">Category</label>
                    <div class="col-sm-9">
                      <select class="form-control" id="cricket_category_id" name="cricket_category_id" required>
                          <option value="">Select Category</option>
                          <?php 
                          $stmt1 = $conn->prepare("SELECT * FROM category WHERE category_delete='0' AND category_name='Cricket'");
                      $stmt1->execute();
                      foreach($stmt1 as $row1)
                          echo "<option value='".$row1['category_id']."'>".$row1['category_name']."</option>";
                          ?>
                        </select>
                    </div>
                </div>
                  <div class="form-group">
                    <label for="starting_four" class="col-sm-3 control-label">Starting Four and Six</label>
                    <div class="col-sm-4">
                      <input  type="number" step="any" class="form-control" id="starting_four" name="starting_four" placeholder="Four" required>
                    </div>
                    <div class="col-sm-4">
                      <input  type="number" step="any" class="form-control" id="starting_six" name="starting_six" placeholder="Six" required>
                    </div>
                </div>   
               <div class="form-group">
                    <label for="team1" class="col-sm-3 control-label">Team 1</label>
                    <div class="col-sm-9">
                      <select class="form-control" id="team1" name="team1" required>
                          <option value="">Select Category First</option>
                        </select>
                    </div>
                </div>
                  
                  <div id="player_list_1">
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
              <h4 class="modal-title"><b>Edit Cricket</b></h4>
            </div>
            
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="cricket_edit.php">
                  <input type="hidden" class="cricketid" name="id">
                  
                  <div class="form-group">
                    <label for="cricket_name" class="col-sm-3 control-label">Cricket Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_cricket_name" name="cricket_name" required>
                    </div>
                </div>
                  
                  <div class="form-group">
                    <label for="cricket_date" class="col-sm-3 control-label">Cricket Date</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="edit_cricket_date" name="cricket_date" required>
                    </div>
                </div>   
                  <div class="form-group">
                    <label for="cricket_time" class="col-sm-3 control-label">Cricket Time</label>
                    <div class="col-sm-9">
                      <input type="time" class="form-control" id="edit_cricket_time" name="cricket_time" required>
                    </div>
                </div>
                         <div class="form-group">
                    <label for="team1" class="col-sm-3 control-label">Category</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_category_name" name="category_name" onfocus="this.blur()">
                    </div>
                </div>
                  
                    <div class="form-group">
                    <label for="starting_four" class="col-sm-3 control-label">Starting Four and Six</label>
                    <div class="col-sm-4">
                      <input  type="number" step="any" class="form-control" id="edit_starting_four" name="starting_four" placeholder="Four" required>
                    </div>
                    <div class="col-sm-4">
                      <input  type="number" step="any" class="form-control" id="edit_starting_six" name="starting_six" placeholder="Six" required>
                    </div>
                </div> 
                  
               <div class="form-group">
                    <label for="team1" class="col-sm-3 control-label">Team 1</label>
                     <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_team1_name" name="team1" onfocus="this.blur()">
                    </div>
                </div>
                   <div class="form-group">
            <label class="col-sm-3 control-label">Ratio</label>
            <label class="col-sm-4 ">4`s</label>
            <label class="col-sm-4 ">6`s</label>
            </div>
 
                  <div class="form-group">
                    <label for="player1" class="col-sm-3 control-label"><div id="edit_team1_player1"></div></label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team1_player1_four" name="four_team1_player1">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team1_player1_six" name="six_team1_player1">
                    </div>
                </div>
        
                  
                  <div class="form-group">
                    <label for="player2" class="col-sm-3 control-label"><div id="edit_team1_player2"></div></label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team1_player2_four" name="four_team1_player2">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team1_player2_six" name="six_team1_player2">
                    </div>
                </div>
           
              <div class="form-group">
                    <label for="player3" class="col-sm-3 control-label"><div id="edit_team1_player3"></div></label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team1_player3_four" name="four_team1_player3">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team1_player3_six" name="six_team1_player3">
                    </div>
                </div>
           
             <div class="form-group">
                    <label for="player4" class="col-sm-3 control-label"><div id="edit_team1_player4"></div></label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team1_player4_four" name="four_team1_player4">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team1_player4_six" name="six_team1_player4">
                    </div>
                </div>
          
            <div class="form-group">
                    <label for="player5" class="col-sm-3 control-label"><div id="edit_team1_player5"></div></label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team1_player5_four" name="four_team1_player5">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team1_player5_six" name="six_team1_player5">
                    </div>
                </div>
           
             <div class="form-group">
                    <label for="player6" class="col-sm-3 control-label"><div id="edit_team1_player6"></div></label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team1_player6_four" name="four_team1_player6">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team1_player6_six" name="six_team1_player6">
                    </div>
                </div>
           
          <div class="form-group">
                    <label for="player7" class="col-sm-3 control-label"><div id="edit_team1_player7"></div></label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team1_player7_four" name="four_team1_player7">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team1_player7_six" name="six_team1_player7">
                    </div>
                </div>
          
           <div class="form-group">
                    <label for="player8" class="col-sm-3 control-label"><div id="edit_team1_player8"></div></label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team1_player8_four" name="four_team1_player8">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team1_player8_six" name="six_team1_player8">
                    </div>
                </div>
           
             <div class="form-group">
                    <label for="player9" class="col-sm-3 control-label"><div id="edit_team1_player9"></div></label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team1_player9_four" name="four_team1_player9">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team1_player9_six" name="six_team1_player9">
                    </div>
                </div>
           
            <div class="form-group">
                    <label for="player10" class="col-sm-3 control-label"><div id="edit_team1_player10"></div></label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team1_player10_four" name="four_team1_player10">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team1_player10_six" name="six_team1_player10">
                    </div>
                </div>
            
            <div class="form-group">
                    <label for="player11" class="col-sm-3 control-label"><div id="edit_team1_player11"></div></label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team1_player11_four" name="four_team1_player11">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team1_player11_six" name="six_team1_player11">
                    </div>
                </div>
           
             <div class="form-group">
                    <label for="player12" class="col-sm-3 control-label"><div id="edit_team1_player12"></div></label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team1_player12_four" name="four_team1_player12">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team1_player12_six" name="six_team1_player12">
                    </div>
                </div>
           
             <div class="form-group">
                    <label for="team2" class="col-sm-3 control-label">Team 2</label>
                     <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_team2_name" name="team2" onfocus="this.blur()">
                    </div>
                </div>
                   <div class="form-group">
            <label class="col-sm-3 control-label">Ratio</label>
            <label class="col-sm-4 ">4`s</label>
            <label class="col-sm-4 ">6`s</label>
            </div>
 
                  <div class="form-group">
                    <label for="player1" class="col-sm-3 control-label"><div id="edit_team2_player1"></div></label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team2_player1_four" name="four_team2_player1">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team2_player1_six" name="six_team2_player1">
                    </div>
                </div>
        
                  <div class="form-group">
                    <label for="player2" class="col-sm-3 control-label"><div id="edit_team2_player2"></div></label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team2_player2_four" name="four_team2_player2">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team2_player2_six" name="six_team2_player2">
                    </div>
                </div>
               
              <div class="form-group">
                    <label for="player3" class="col-sm-3 control-label"><div id="edit_team2_player3"></div></label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team2_player3_four" name="four_team2_player3">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team2_player3_six" name="six_team2_player3">
                    </div>
                </div>
               
             <div class="form-group">
                    <label for="player4" class="col-sm-3 control-label"><div id="edit_team2_player4"></div></label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team2_player4_four" name="four_team2_player4">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team2_player4_six" name="six_team2_player4">
                    </div>
                </div>
               
            <div class="form-group">
                    <label for="player5" class="col-sm-3 control-label"><div id="edit_team2_player5"></div></label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team2_player5_four" name="four_team2_player5">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team2_player5_six" name="six_team2_player5">
                    </div>
                </div>
              
             <div class="form-group">
                    <label for="player6" class="col-sm-3 control-label"><div id="edit_team2_player6"></div></label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team2_player6_four" name="four_team2_player6">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team2_player6_six" name="six_team2_player6">
                    </div>
                </div>
               
          <div class="form-group">
                    <label for="player7" class="col-sm-3 control-label"><div id="edit_team2_player7"></div></label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team2_player7_four" name="four_team2_player7">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team2_player7_six" name="six_team2_player7">
                    </div>
                </div>
                
           <div class="form-group">
                    <label for="player8" class="col-sm-3 control-label"><div id="edit_team2_player8"></div></label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team2_player8_four" name="four_team2_player8">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team2_player8_six" name="six_team2_player8">
                    </div>
                </div>
              
             <div class="form-group">
                    <label for="player9" class="col-sm-3 control-label"><div id="edit_team2_player9"></div></label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team2_player9_four" name="four_team2_player9">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team2_player9_six" name="six_team2_player9">
                    </div>
                </div>
              
            <div class="form-group">
                    <label for="player10" class="col-sm-3 control-label"><div id="edit_team2_player10"></div></label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team2_player10_four" name="four_team2_player10">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team2_player10_six" name="six_team2_player10">
                    </div>
                </div>
               
            <div class="form-group">
                    <label for="player11" class="col-sm-3 control-label"><div id="edit_team2_player11"></div></label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team2_player11_four" name="four_team2_player11">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team2_player11_six" name="six_team2_player11">
                    </div>
                </div>
              
             <div class="form-group">
                    <label for="player12" class="col-sm-3 control-label"><div id="edit_team2_player12"></div></label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team2_player12_four" name="four_team2_player12">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_team2_player12_six" name="six_team2_player12">
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
              <form class="form-horizontal" method="POST" action="cricket_delete.php">
                <input type="hidden" class="cricketid" name="id">
                <div class="text-center">
                    <p>DELETE CRICKET</p>
                    <h2 class="bold cricket_name"></h2>
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
              <form class="form-horizontal" method="POST" action="cricket_activate.php">
                <input type="hidden" class="cricketid" name="id">
                <div class="text-center">
                    <p>ACTIVATE CRICKET</p>
                    <h2 class="bold cricket_name"></h2>
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
              <form class="form-horizontal" method="POST" action="cricket_deactivate.php">
                <input type="hidden" class="cricketid" name="id">
                <div class="text-center">
                    <p>DEACTIVATE CRICKET</p>
                    <h2 class="bold cricket_name"></h2>
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

     