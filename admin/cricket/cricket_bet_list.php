<?php include '../includes/session.php'; ?>
<?php include '../includes/header.php';?>
<?php if($admin['cricket_special']){
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
    echo "<td><a class='btn btn-warning btn-sm ' href='cricket_bet_list.php?id=$id&win=0&name=$name'><i class='fa fa-play'></i> In Play</a> ";
    echo "<a  class='btn btn-success btn-sm ' href='cricket_bet_list.php?id=$id&win=2&name=$name'><i class='fa fa-trophy'></i> Win</a> ";
echo "<a  class='btn btn-danger btn-sm ' href='cricket_bet_list.php?id=$id&win=1&name=$name'><i class='fa fa-times'></i> Loss</a></td> "; ?>
                <div class="panel panel-default" style="overflow-x:auto;">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-body">
                                    <table id="example1" class="table table-bordered">
                                        <thead>
                                        <th>SlNo</th>
                                        <th>USER ID</th>
                                        <th>PLAYER NAME</th>
                                        <th>NO FOUR'S</th>
                                        <th>NO SIX'S</th>
                                        <th>PLACED AMOUNT</th>
                                        <th>WIN AMOUNT</th>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $conn = $pdo->open();

                                        try{
                                            $stmt = $conn->prepare("SELECT * FROM cricket_bet WHERE cricket_bet_cricket_id=:id AND cricket_bet_win=:win ORDER BY cricket_bet_id DESC");
                                            $stmt->execute(['id'=>$id, 'win'=>$win]);
                                            $slno=1;
                                            foreach($stmt as $row){
                                                echo "<tr><td>".$slno++."</td>";
                                                echo "<td>".$row['cricket_bet_users_id']."</td>";
                                                $player_name='player'.$row['cricket_bet_player_id'];
                                                $id1=$row['cricket_bet_team_id'];
                                                $stmt1 = $conn->prepare("SELECT $player_name FROM teams WHERE team_id=:id");
                                                $stmt1->execute(['id'=>$id1]);
                                                foreach($stmt1 as $row1)
                                                echo "<td>".$row1[$player_name]."</td>";
                                                echo "<td>".$row['cricket_bet_four']."</td>";
                                                echo "<td>".$row['cricket_bet_six']."</td>";
                                                echo "<td>".$row['cricket_bet_placed_amount']."</td>";
                                                echo "<td>".$row['cricket_bet_win_amount']."</td>";
                                                echo "</tr>";
                                            }
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