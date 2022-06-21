<?php include '../includes/session.php'; ?>
<?php include '../includes/header.php';?>
<?php if($admin['cricket_match_special']){
    $id=$_GET['id'];
    $win=$_GET['win'];
    $name=$_GET['name'];
    ?>
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php include '../includes/navbar.php'; ?>
        <?php include '../includes/menubar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
            <!-- Content Header (Page header) -->
                <h1>
                    <?php
                    echo "$name - ";
                    if($win==0)
                        echo "IN PLAY";
                    elseif($win==2)
                    echo "WIN";
                    elseif ($win==1)
                    echo "LOSS";?>
                </h1>

            </section>

            <!-- Main content -->
            <section class="content">
  <?php 
    echo "<td><a class='btn btn-warning btn-sm ' href='match_bet_list.php?id=$id&win=0&name=$name'><i class='fa fa-play'></i> In Play</a> ";
    echo "<a  class='btn btn-success btn-sm ' href='match_bet_list.php?id=$id&win=2&name=$name'><i class='fa fa-trophy'></i> Win</a> ";
echo "<a  class='btn btn-danger btn-sm ' href='match_bet_list.php?id=$id&win=1&name=$name'><i class='fa fa-times'></i> Loss</a></td> "; ?>
                <div class="panel panel-default" style="overflow-x:auto;">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-body">
                                    <table id="example1" class="table table-bordered">
                                        <thead>
                                        <th>SLNO</th>
                                        <th>USER ID</th>
                                        <th>TEAM</th>
                                        <th>RATE</th>
                                        <th>PLACED AMOUNT</th>
                                        <th>WIN AMOUNT</th>
                                        <th>TIME</th>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $conn = $pdo->open();

                                        try{
                                            $stmt = $conn->prepare("SELECT * FROM cricket_match_bet WHERE cricket_match_bet_cricket_id=:id AND cricket_match_bet_win=:win ORDER BY cricket_match_bet_id DESC");
                                            $stmt->execute(['id'=>$id, 'win'=>$win]);
                                            $slno=1;
                                                $var1_id=$var2_id=$var1=$var2=$var1_win=$var2_win=0;
                                            $name1=$name2='';
                                            foreach($stmt as $row){
                                                if($var1_id==0)
                                                    $var1_id=$row['cricket_match_bet_team_id'];
                                                elseif($var1_id!=$row['cricket_match_bet_team_id'])
                                                    $var2_id=$row['cricket_match_bet_team_id'];
                                                if($var1_id==$row['cricket_match_bet_team_id']){
                                                    $var1+=$row['cricket_match_bet_bet_amount'];
                                                $var1_win+=$row['cricket_match_bet_win_amount'];
                                                }
                                                    elseif($var2_id==$row['cricket_match_bet_team_id']){
                                                        $var2+=$row['cricket_match_bet_bet_amount'];
                                                    $var2_win+=$row['cricket_match_bet_win_amount'];
                                                    }
                                                echo "<tr><td>".$slno++."</td>";
                                                echo "<td>".$row['cricket_match_bet_user_id']."</td>";
                                                $team=$row['cricket_match_bet_team_id'];
                                                $stmt1 = $conn->prepare("SELECT * FROM teams WHERE team_id='$team'");
                                                $stmt1->execute();
                                                foreach($stmt1 as $row1)
                                                echo "<td>".$row1['team_name']."</td>";
                                                if($var1_id==$team && empty($name1))
                                                    $name1=$row1['team_name'];
                                                if($var2_id==$team && empty($name2))
                                                    $name2=$row1['team_name'];
                                                echo "<td>".$row['cricket_match_bet_rate']."</td>";
                                                echo "<td>".$row['cricket_match_bet_bet_amount']."</td>";
                                                echo "<td>".$row['cricket_match_bet_win_amount']."</td>";
                                                $date = $row['cricket_match_bet_added_date']; 
                                                date_default_timezone_set('Asia/Kolkata');
                                                echo "<td>".date('h:i:s a', strtotime($date))."</td>";
                                                echo "</tr>";
                                            }
                                            echo "LOSS: $name1: $var1 - $var2 :$name2<br>";
                                             echo "WIN: $name1: $var1_win - $var2_win :$name2";
                                        }
                                        catch(PDOException $e){
                                            echo $e->getMessage();
                                        }
                                        $pdo->close();
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </div>
    </div>
    <?php include '../includes/scripts.php'; ?>
    </body>
<?php } ?>
</html>