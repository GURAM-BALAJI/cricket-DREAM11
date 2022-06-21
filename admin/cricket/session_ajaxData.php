<?php
//Include database configuration file
include '../includes/session.php';

if(isset($_POST["total_session"]) && !empty($_POST["total_session"])){
    $session=$_POST["total_session"];
    echo "<div class='form-group'>
        <label for='' class='col-sm-3 control-label'>session</label>
        <div class='col-sm-2 control-label'>
                      Score
                    </div>
            <div class='col-sm-3 control-label'>
                    Bellow Ratio
                    </div>
        <div class='col-sm-3 control-label'>
                 Above Ratio
                    </div>
                </div>";
  for($i=1;$i<=$session;$i++){
    echo "<div class='form-group'>
        <label for='' class='col-sm-3 control-label'>SESSION $i:</label>
        <div class='col-sm-3'>
                      <input type='number' step='any' class='form-control' id='score_$i' name='score_$i' placeholder='score' required>
                    </div>
            <div class='col-sm-3'>
                      <input type='number' step='any' class='form-control' id='yes_$i' name='yes_$i' placeholder='Bellow Ratio' required>
                    </div>
        <div class='col-sm-3'>
                      <input type='number' step='any' class='form-control' id='no_$i' name='no_$i' placeholder='Above Ratio' required>
                    </div>
                </div>";
  }
}
?>