<?php include '../includes/session.php'; ?>
<?php include '../includes/header.php';?>
<?php if($admin['cricket_overs_special']){
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
    echo "<td><a class='btn btn-warning btn-sm ' href='overs_bet_list.php?id=$id&win=0&name=$name'><i class='fa fa-play'></i> In Play</a> ";
    echo "<a  class='btn btn-success btn-sm ' href='overs_bet_list.php?id=$id&win=2&name=$name'><i class='fa fa-trophy'></i> Win</a> ";
echo "<a  class='btn btn-danger btn-sm ' href='overs_bet_list.php?id=$id&win=1&name=$name'><i class='fa fa-times'></i> Loss</a></td> "; ?>
                <div class="panel panel-default" style="overflow-x:auto;">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-body">
                                    <table id="example1" class="table table-bordered">
                                        <thead>
                                        <th>SlNo</th>
                                        <th>USER ID</th>
                                        <th>OVER NO</th>
                                        <th>Bellow/Above</th>
                                        <th>SCORE</th>
                                        <th>RATE</th>
                                        <th>PLACED AMOUNT</th>
                                        <th>WIN AMOUNT</th>
                                        <th>TIME</th>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $conn = $pdo->open();

                                        try{
                                            $stmt = $conn->prepare("SELECT * FROM cricket_overs_bet WHERE cricket_overs_bet_cricket_overs_id=:id AND cricket_overs_bet_bet_win=:win ORDER BY cricket_overs_bet_id DESC");
                                            $stmt->execute(['id'=>$id, 'win'=>$win]);
                                            $slno=1;
                                            foreach($stmt as $row){
                                                echo "<tr><td>".$slno++."</td>";
                                                echo "<td>".$row['cricket_overs_bet_user_id']."</td>";
                                                echo "<td>".$row['cricket_overs_bet_overs_no']."</td>";
                                                if($row['cricket_overs_bet_yes_no'])
                                                echo "<td>Above</td>";
                                                else
                                                echo "<td>Bellow</td>";
                                                echo "<td>".$row['cricket_overs_bet_score']."</td>";
                                                echo "<td>".$row['cricket_overs_bet_rate']."</td>";
                                                echo "<td>".$row['cricket_overs_bet_bet_amount']."</td>";
                                                echo "<td>".$row['cricket_overs_bet_win_amount']."</td>";
                                                $date = $row['cricket_overs_bet_added_date']; 
                                                date_default_timezone_set('Asia/Kolkata');
                                                echo "<td>".date('h:i:s a', strtotime($date))."</td>";
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