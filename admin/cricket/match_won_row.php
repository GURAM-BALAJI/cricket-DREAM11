<?php
include '../includes/session.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $conn = $pdo->open();

    $stmt = $conn->prepare("SELECT * FROM cricket_match WHERE cricket_match_id=:id");
    $stmt->execute(['id' => $id]);
    foreach ($stmt as $row1) {
        $cricket_match_cricket_id = $row1['cricket_match_cricket_id'];
        $cricket_match_team1_id = $row1['cricket_match_team1_id'];
        $cricket_match_team1_ratio = $row1['cricket_match_team1_ratio'];
        $cricket_match_team2_id = $row1['cricket_match_team2_id'];
        $cricket_match_team2_ratio = $row1['cricket_match_team2_ratio'];
    }
    $stmt = $conn->prepare("SELECT team_name FROM teams WHERE team_id=:id");
    $stmt->execute(['id' => $cricket_match_team1_id]);
    foreach ($stmt as $row1) {
        $team1_name = $row1['team_name'];
    }
    $stmt = $conn->prepare("SELECT team_name FROM teams WHERE team_id=:id");
    $stmt->execute(['id' => $cricket_match_team2_id]);
    foreach ($stmt as $row1) {
        $team2_name = $row1['team_name'];
    }
    $stmt = $conn->prepare("SELECT cricket_name FROM cricket WHERE cricket_id=:id");
    $stmt->execute(['id' => $cricket_match_cricket_id]);
    foreach ($stmt as $row1) {
        $cricket_name = $row1['cricket_name'];
    }
    $options = "  <div class='form-group'>
                    <label for='won_team' class='col-sm-3 control-label'>Match Won By</label>
                    <div class='col-sm-9'>
                      <select class='form-control' id='won_team' name='won_team' required>
                          <option value=''>Select Won Team</option>
<option value='$cricket_match_team1_id'>$team1_name</option>
<option value='$cricket_match_team2_id'>$team2_name</option>
                        </select>
                    </div>
                </div>";

    $row = array(
        'cricket_id' => $cricket_match_cricket_id,
        'cricket_name' => $cricket_name,
        'options' => $options,
    );

    $pdo->close();

    echo json_encode($row);
}
