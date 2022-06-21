<?php
	include '../includes/session.php';

	if(isset($_POST['four']))
	    $four_six='four';
    elseif(isset($_POST['six']))
        $four_six='six';
if(isset($four_six)){
    $cricketscoreid = $_POST['cricketscoreid'];
    $cricket_name = $_POST['cricket_name'];
    $cricket_score_cricket_id = $_POST['cricket_score_cricket_id'];
    $cricket_score_team_id = $_POST['cricket_score_team_id'];
    $cricket_score_player_id = $_POST['cricket_score_player_id'];
    $conn = $pdo->open();

    try {
        $get_four_six='cricket_score_player_'.$four_six;
        $val=$four_six.'_num';
            $num_four_six=$_POST[$val];
            $stmt12 = $conn->prepare("UPDATE cricket_score SET $get_four_six=$num_four_six WHERE cricket_score_id=:id ");
            $stmt12->execute(['id' => $cricketscoreid]);


        $_SESSION['success'] = 'Player '.$four_six.' Added successfully';
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
    }

    $pdo->close();

}else
    $_SESSION['error'] = 'Select Player to add first';

	header('location: cricket_score.php?id='.$cricket_score_cricket_id.'&name='.$cricket_name);
	
?>