<?php 
  include '../includes/session.php';
  include '../includes/header.php'; ?>

  <?php include '../includes/navbar.php'; ?>
  <?php include '../includes/menubar.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Home</li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
        <?php if($admin['users_view']){?>
      <!-- /.row -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-gray">
                    <div class="inner">
                        <?php
                        $conn = $pdo->open();
                        $query5=0;
                        $stmt1=$conn->prepare("SELECT user_amount from users Where user_delete='0'");
                        $stmt1->execute();
                        foreach($stmt1 as $row1)
                            $query5+=$row1['user_amount'];
                        echo "<h3>".$query5."</h3>";
                        ?>
                        <div class="stat-panel-title text-uppercase">Total User`s Amount</div>
                    </div>
                    <div class="icon">
                        <i class="fa fa-money"></i>
                    </div>
                    <a href="../users/users.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <?php
                        $sql6 ="SELECT admin_id from admin Where admin_delete=0 AND admin_status=1";
                        $query6 = $conn -> prepare($sql6);;
                        $query6->execute();
                        $results6=$query6->fetchAll(PDO::FETCH_OBJ);
                        $query=$query6->rowCount();
                        $sql2 ="SELECT admin_id from admin Where admin_delete=0 AND admin_status=0";
                        $query2 = $conn -> prepare($sql2);;
                        $query2->execute();
                        $results2=$query2->fetchAll(PDO::FETCH_OBJ);
                        $query1=$query2->rowCount();
                        echo "<h6>Active Admin's: ".htmlentities($query)."</h6>";
                        echo "<h6>In-Active Admin's:". htmlentities($query1)."</h6>";
                        echo "<h6>Total Admin's:". htmlentities($query1+$query)."</h6>";
                        ?>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="../admin/admin.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                          <?php
    $query=$query1=0;
                        $sql6 ="SELECT user_id from users Where user_delete=0 AND user_status=1";
                        $query6 = $conn -> prepare($sql6);;
                        $query6->execute();
                        $results6=$query6->fetchAll(PDO::FETCH_OBJ);
                        $query=$query6->rowCount();
                        $sql2 ="SELECT user_id from users Where user_delete=0 AND user_status=0";
                        $query2 = $conn -> prepare($sql2);;
                        $query2->execute();
                        $results2=$query2->fetchAll(PDO::FETCH_OBJ);
                        $query1=$query2->rowCount();
                        echo "<h6>Active User's: ".htmlentities($query)."</h6>";
                        echo "<h6>In-Active User's:". htmlentities($query1)."</h6>";
                        echo "<h6>Total User's:". htmlentities($query1+$query)."</h6>";
                        ?>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="../users/users.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
<?php } ?>
         <?php if($admin['admin_special']){?>
        
        <div class="form-group">
                    <label for="cricket" class="col-sm-3 control-label">Match </label>
                    <div class="col-sm-9">
                      <select class="form-control" id="cricket" name="cricket">
                          <option value="">Select Match</option>
                          <?php 
                          $stmt1 = $conn->prepare("SELECT * FROM cricket");
                      $stmt1->execute();
                      foreach($stmt1 as $row1)
                          echo "<option value='".$row1['cricket_id']."'>".$row1['cricket_name']."</option>";
                          ?>
                        </select>
                    </div>
                </div>
        
        <div id="total_amount">
       <!-- 4s 6s-->
            <div class="row">
                <div class="col-md-12">
                   
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <?php
                        $query5=0;
                        $stmt1=$conn->prepare("SELECT cricket_bet_win_amount,cricket_bet_placed_amount from cricket_bet Where cricket_bet_win='2'");
                        $stmt1->execute();
                        foreach($stmt1 as $row1){
                            $query5+=$row1['cricket_bet_win_amount'];
                            $query5-=$row1['cricket_bet_placed_amount'];
                        }
                        echo "<h3>".$query5."</h3>";
                        ?>
                        <div class="stat-panel-title text-uppercase">Total 4`s-6`s Win Amount</div>
                    </div>
                    <div class="icon">
                        <i class="fa fa-money"></i>
                    </div>
                    <a href="../cricket/cricket.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>




            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <?php
                            $query5=0;
                            $stmt1=$conn->prepare("SELECT cricket_bet_placed_amount from cricket_bet Where cricket_bet_win='1'");
                            $stmt1->execute();
                            foreach($stmt1 as $row1)
                                $query5+=$row1['cricket_bet_placed_amount'];
                            echo "<h3>".$query5."</h3>";
                            ?>
                            <div class="stat-panel-title text-uppercase">Total 4`s-6`s Loss Amount</div>
                        </div>
                        <div class="icon">
                            <i class="fa fa-money"></i>
                        </div>
                        <a href="../cricket/cricket.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>


            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-black">
                        <div class="inner">
                            <?php
                            $queryloss=$querywin=0;
                            $stmt1=$conn->prepare("SELECT cricket_bet_placed_amount,cricket_bet_win_amount from cricket_bet Where cricket_bet_win='0'");
                            $stmt1->execute();
                            foreach($stmt1 as $row1) {
                                $queryloss += $row1['cricket_bet_placed_amount'];
                                $querywin += $row1['cricket_bet_win_amount'];
                            }
                            echo "<h6>Bet amount : ".$queryloss."</h6>";
                            echo "<h6>Win amount: ".$querywin."</h6>";
                            ?>
                            <div class="stat-panel-title text-uppercase">Total 4`s-6`s amount in play</div>
                        </div>
                        <div class="icon">
                            <i class="fa fa-money"></i>
                        </div>
                        <a href="../cricket/cricket.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
                </div></div>
                     </div></div>
        
        <!--overs-->
        <div class="row">
                <div class="col-md-12">
                   
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <?php
                        $query5=0;
                        $stmt1=$conn->prepare("SELECT cricket_overs_bet_win_amount,cricket_overs_bet_bet_amount from cricket_overs_bet Where cricket_overs_bet_bet_win='2'");
                        $stmt1->execute();
                        foreach($stmt1 as $row1){
                            $query5+=$row1['cricket_overs_bet_win_amount'];
                            $query5-=$row1['cricket_overs_bet_bet_amount'];
                        }
                        echo "<h3>".$query5."</h3>";
                        ?>
                        <div class="stat-panel-title text-uppercase">Total Overs Win Amount</div>
                    </div>
                    <div class="icon">
                        <i class="fa fa-money"></i>
                    </div>
                    <a href="../cricket/overs.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>




            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <?php
                            $query5=0;
                            $stmt1=$conn->prepare("SELECT cricket_overs_bet_bet_amount from cricket_overs_bet Where cricket_overs_bet_bet_win='1'");
                            $stmt1->execute();
                            foreach($stmt1 as $row1)
                                $query5+=$row1['cricket_overs_bet_bet_amount'];
                            echo "<h3>".$query5."</h3>";
                            ?>
                            <div class="stat-panel-title text-uppercase">Total Overs Loss Amount</div>
                        </div>
                        <div class="icon">
                            <i class="fa fa-money"></i>
                        </div>
                        <a href="../cricket/overs.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>


            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-black">
                        <div class="inner">
                            <?php
                            $queryloss=$querywin=0;
                            $stmt1=$conn->prepare("SELECT cricket_overs_bet_win_amount,cricket_overs_bet_bet_amount from cricket_overs_bet Where cricket_overs_bet_bet_win='0'");
                            $stmt1->execute();
                            foreach($stmt1 as $row1) {
                                $queryloss += $row1['cricket_overs_bet_bet_amount'];
                                $querywin += $row1['cricket_overs_bet_win_amount'];
                            }
                            echo "<h6>Bet amount : ".$queryloss."</h6>";
                            echo "<h6>Win amount: ".$querywin."</h6>";
                            ?>
                            <div class="stat-panel-title text-uppercase">Total Overs amount in play</div>
                        </div>
                        <div class="icon">
                            <i class="fa fa-money"></i>
                        </div>
                        <a href="../cricket/overs.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
                </div></div>
                     </div></div>
        
        <!-- match -->
        
        <div class="row">
                <div class="col-md-12">
                   
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <?php
                        $query5=0;
                        $stmt1=$conn->prepare("SELECT cricket_match_bet_win_amount,cricket_match_bet_bet_amount from cricket_match_bet Where cricket_match_bet_win='2'");
                        $stmt1->execute();
                        foreach($stmt1 as $row1){
                            $query5+=$row1['cricket_match_bet_win_amount'];
                        $query5-=$row1['cricket_match_bet_bet_amount'];
                        }
                        echo "<h3>".$query5."</h3>";
                        ?>
                        <div class="stat-panel-title text-uppercase">Total Match Win Amount</div>
                    </div>
                    <div class="icon">
                        <i class="fa fa-money"></i>
                    </div>
                    <a href="../cricket/match.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>




            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <?php
                            $query5=0;
                            $stmt1=$conn->prepare("SELECT cricket_match_bet_bet_amount from cricket_match_bet Where cricket_match_bet_win='1'");
                            $stmt1->execute();
                            foreach($stmt1 as $row1)
                                $query5+=$row1['cricket_match_bet_bet_amount'];
                            echo "<h3>".$query5."</h3>";
                            ?>
                            <div class="stat-panel-title text-uppercase">Total Match Loss Amount</div>
                        </div>
                        <div class="icon">
                            <i class="fa fa-money"></i>
                        </div>
                        <a href="../cricket/match.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>


            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-black">
                        <div class="inner">
                            <?php
                            $queryloss=$querywin=0;
                            $stmt1=$conn->prepare("SELECT cricket_match_bet_bet_amount,cricket_match_bet_win_amount from cricket_match_bet Where cricket_match_bet_win='0'");
                            $stmt1->execute();
                            foreach($stmt1 as $row1) {
                                $queryloss += $row1['cricket_match_bet_bet_amount'];
                                $querywin += $row1['cricket_match_bet_win_amount'];
                            }
                            echo "<h6>Bet amount : ".$queryloss."</h6>";
                            echo "<h6>Win amount: ".$querywin."</h6>";
                            ?>
                            <div class="stat-panel-title text-uppercase">Total Match amount in play</div>
                        </div>
                        <div class="icon">
                            <i class="fa fa-money"></i>
                        </div>
                        <a href="../cricket/match.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
                </div></div>
                     </div></div>
            
                    
              
    
    <!-- toss -->
        
        <div class="row">
                <div class="col-md-12">
                   
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <?php
                        $query5=0;
                        $stmt1=$conn->prepare("SELECT cricket_toss_bet_win_amount,cricket_toss_bet_bet_amount from cricket_toss_bet Where cricket_toss_bet_win='2'");
                        $stmt1->execute();
                        foreach($stmt1 as $row1){
                            $query5+=$row1['cricket_toss_bet_win_amount'];
                        $query5-=$row1['cricket_toss_bet_bet_amount'];
                        }
                        echo "<h3>".$query5."</h3>";
                        ?>
                        <div class="stat-panel-title text-uppercase">Total Toss Win Amount</div>
                    </div>
                    <div class="icon">
                        <i class="fa fa-money"></i>
                    </div>
                    <a href="../cricket/toss.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>




            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <?php
                            $query5=0;
                            $stmt1=$conn->prepare("SELECT cricket_toss_bet_bet_amount from cricket_toss_bet Where cricket_toss_bet_win='1'");
                            $stmt1->execute();
                            foreach($stmt1 as $row1)
                                $query5+=$row1['cricket_toss_bet_bet_amount'];
                            echo "<h3>".$query5."</h3>";
                            ?>
                            <div class="stat-panel-title text-uppercase">Total Toss Loss Amount</div>
                        </div>
                        <div class="icon">
                            <i class="fa fa-money"></i>
                        </div>
                        <a href="../cricket/toss.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>


            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-black">
                        <div class="inner">
                            <?php
                            $queryloss=$querywin=0;
                            $stmt1=$conn->prepare("SELECT cricket_toss_bet_bet_amount,cricket_toss_bet_win_amount from cricket_toss_bet Where cricket_toss_bet_win='0'");
                            $stmt1->execute();
                            foreach($stmt1 as $row1) {
                                $queryloss += $row1['cricket_toss_bet_bet_amount'];
                                $querywin += $row1['cricket_toss_bet_win_amount'];
                            }
                            echo "<h6>Bet amount : ".$queryloss."</h6>";
                            echo "<h6>Win amount: ".$querywin."</h6>";
                            ?>
                            <div class="stat-panel-title text-uppercase">Total Toss amount in play</div>
                        </div>
                        <div class="icon">
                            <i class="fa fa-money"></i>
                        </div>
                        <a href="../cricket/toss.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
                </div></div>
                     </div></div>
        
            <!-- target -->
        
        <div class="row">
                <div class="col-md-12">
                   
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <?php
                        $query5=0;
                        $stmt1=$conn->prepare("SELECT cricket_target_bet_win_amount,cricket_target_bet_bet_amount from cricket_target_bet Where cricket_target_bet_win='2'");
                        $stmt1->execute();
                        foreach($stmt1 as $row1){
                            $query5+=$row1['cricket_target_bet_win_amount'];
                            $query5-=$row1['cricket_target_bet_bet_amount'];
}
                        echo "<h3>".$query5."</h3>";
                        ?>
                        <div class="stat-panel-title text-uppercase">Total Target Win Amount</div>
                    </div>
                    <div class="icon">
                        <i class="fa fa-money"></i>
                    </div>
                    <a href="../cricket/target.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>




            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <?php
                            $query5=0;
                            $stmt1=$conn->prepare("SELECT cricket_target_bet_bet_amount from cricket_target_bet Where cricket_target_bet_win='1'");
                            $stmt1->execute();
                            foreach($stmt1 as $row1)
                                $query5+=$row1['cricket_target_bet_bet_amount'];
                            echo "<h3>".$query5."</h3>";
                            ?>
                            <div class="stat-panel-title text-uppercase">Total Target Loss Amount</div>
                        </div>
                        <div class="icon">
                            <i class="fa fa-money"></i>
                        </div>
                        <a href="../cricket/target.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>


            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-black">
                        <div class="inner">
                            <?php
                            $queryloss=$querywin=0;
                            $stmt1=$conn->prepare("SELECT cricket_target_bet_bet_amount,cricket_target_bet_win_amount from cricket_target_bet Where cricket_target_bet_win='0'");
                            $stmt1->execute();
                            foreach($stmt1 as $row1) {
                                $queryloss += $row1['cricket_target_bet_bet_amount'];
                                $querywin += $row1['cricket_target_bet_win_amount'];
                            }
                            echo "<h6>Bet amount : ".$queryloss."</h6>";
                            echo "<h6>Win amount: ".$querywin."</h6>";
                            ?>
                            <div class="stat-panel-title text-uppercase">Total Target amount in play</div>
                        </div>
                        <div class="icon">
                            <i class="fa fa-money"></i>
                        </div>
                        <a href="../cricket/target.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
                </div></div>
            </div></div>
                    <?php } ?>
        </div>
               </section></div></div>
     <script src="js/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#cricket').on('change',function(){
        var cricket_ID = $(this).val();
            $.ajax({
                type:'POST',
                url:'total_ajaxData.php',
                data:'cricket_id='+cricket_ID,
                success:function(html){
                    $('#total_amount').html(html);
                }
            }); 
        
    });
    
});    

    </script>
                    <?php include '../includes/scripts.php'; ?>
</body>
</html>
