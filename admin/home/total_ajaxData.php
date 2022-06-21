<?php
//Include database configuration file
include '../includes/session.php';

if(isset($_POST["cricket_id"]) && !empty($_POST["cricket_id"])){
    $id=$_POST["cricket_id"]; ?>
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
                        $stmt1=$conn->prepare("SELECT cricket_bet_win_amount,cricket_bet_placed_amount from cricket_bet Where cricket_bet_win='2' AND cricket_bet_cricket_id=$id");
                        $stmt1->execute();
                        foreach($stmt1 as $row1){
                            $query5+=$row1['cricket_bet_win_amount'];
                            $query5-=$row1['cricket_bet_placed_amount'];}
                        echo "<h3>".$query5."</h3>";
                        ?>
                        <div class="stat-panel-title text-uppercase"> Total 4`s-6`s Win Amount</div>
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
                            $stmt1=$conn->prepare("SELECT cricket_bet_placed_amount from cricket_bet Where cricket_bet_win='1' AND cricket_bet_cricket_id=$id");
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
                            $stmt1=$conn->prepare("SELECT cricket_bet_placed_amount,cricket_bet_win_amount from cricket_bet Where cricket_bet_win='0' AND cricket_bet_cricket_id=$id");
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
                        $stmt1=$conn->prepare("SELECT cricket_overs_bet_win_amount,cricket_overs_bet_bet_amount from cricket_overs_bet left join cricket_overs on cricket_overs_id=cricket_overs_bet_cricket_overs_id Where cricket_overs_bet_bet_win='2' AND cricket_overs_cricket_id=$id");
                        $stmt1->execute();
                        foreach($stmt1 as $row1){
                            $query5+=$row1['cricket_overs_bet_win_amount'];
                        $query5-=$row1['cricket_overs_bet_bet_amount'];}
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
                             $stmt1=$conn->prepare("SELECT cricket_overs_bet_bet_amount from cricket_overs_bet left join cricket_overs on cricket_overs_id=cricket_overs_bet_cricket_overs_id Where cricket_overs_bet_bet_win='1' AND cricket_overs_cricket_id=$id");
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
                             $stmt1=$conn->prepare("SELECT cricket_overs_bet_win_amount,cricket_overs_bet_bet_amount from cricket_overs_bet left join cricket_overs on cricket_overs_id=cricket_overs_bet_cricket_overs_id Where cricket_overs_bet_bet_win='0' AND cricket_overs_cricket_id=$id");
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
                        $stmt1=$conn->prepare("SELECT cricket_match_bet_win_amount,cricket_match_bet_bet_amount from cricket_match_bet Where cricket_match_bet_win='2' AND cricket_match_bet_cricket_id=$id");
                        $stmt1->execute();
                        foreach($stmt1 as $row1){
                            $query5+=$row1['cricket_match_bet_win_amount'];
                        $query5-=$row1['cricket_match_bet_bet_amount'];}
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
                            $stmt1=$conn->prepare("SELECT cricket_match_bet_bet_amount from cricket_match_bet Where cricket_match_bet_win='1' AND cricket_match_bet_cricket_id=$id");
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
                            $stmt1=$conn->prepare("SELECT cricket_match_bet_bet_amount,cricket_match_bet_win_amount from cricket_match_bet Where cricket_match_bet_win='0' AND cricket_match_bet_cricket_id=$id");
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
                        $stmt1=$conn->prepare("SELECT cricket_toss_bet_win_amount,cricket_toss_bet_bet_amount from cricket_toss_bet Where cricket_toss_bet_win='2' AND cricket_toss_bet_cricket_id=$id");
                        $stmt1->execute();
                        foreach($stmt1 as $row1){
                            $query5+=$row1['cricket_toss_bet_win_amount'];
    $query5-=$row1['cricket_toss_bet_bet_amount'];}
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
                            $stmt1=$conn->prepare("SELECT cricket_toss_bet_bet_amount from cricket_toss_bet Where cricket_toss_bet_win='1' AND cricket_toss_bet_cricket_id=$id");
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
                            $stmt1=$conn->prepare("SELECT cricket_toss_bet_bet_amount,cricket_toss_bet_win_amount from cricket_toss_bet Where cricket_toss_bet_win='0' AND cricket_toss_bet_cricket_id=$id");
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
                        $stmt1=$conn->prepare("SELECT cricket_target_bet_win_amount,cricket_target_bet_bet_amount from cricket_target_bet Where cricket_target_bet_win='2' AND cricket_target_bet_cricket_id=$id");
                        $stmt1->execute();
                        foreach($stmt1 as $row1){
                            $query5+=$row1['cricket_target_bet_win_amount'];
                        $query5-=$row1['cricket_target_bet_bet_amount'];}
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
                            $stmt1=$conn->prepare("SELECT cricket_target_bet_bet_amount from cricket_target_bet Where cricket_target_bet_win='1' AND cricket_target_bet_cricket_id=$id");
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
                            $stmt1=$conn->prepare("SELECT cricket_target_bet_bet_amount,cricket_target_bet_win_amount from cricket_target_bet Where cricket_target_bet_win='0' AND cricket_target_bet_cricket_id=$id");
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
                     <?php
                     }else{
?>   <!-- 4s 6s-->
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
            </div></div><?php }?>