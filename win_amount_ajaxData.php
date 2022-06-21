<?php
//Include database configuration file
include 'includes/session.php';

if(isset($_POST["bet_amount"]) && !empty($_POST["bet_amount"]))
{
    $bet_amount=$_POST["bet_amount"];
    $cricket_id=$_POST["cricket_id"];
    $team_id=$_POST["team_id"];
    $player_id=$_POST["player_id"];
    $four=$_POST["four"];
    $six=$_POST["six"];

$conn = $pdo->open();
$stmt = $conn->prepare("SELECT * FROM cricket WHERE cricket_id=:id AND cricket_delete='0'");
    $stmt->execute(['id'=>$cricket_id]);
 $data=$stmt->fetchAll();
 if(!empty($data))
 {
     foreach($data as $row)
     {
            for($i=1;$i<3;$i++)
            {
                $team='cricket_team'.$i.'_id';
                if($row[$team]==$team_id)
                {
                    $player_four='cricket_team'.$i.'_player'.$player_id.'_four';
                    $player_six='cricket_team'.$i.'_player'.$player_id.'_six';
                    $four_ratio=floatval($four)*$row[$player_four];
                    $six_ratio=floatval($six)*$row[$player_six];
                    $ratio=$four_ratio+$six_ratio;
                    $win=$ratio*floatval($bet_amount)+floatval($bet_amount);
                    echo $win;
                }
            }
     }
 }
  $pdo->close();
}
?>