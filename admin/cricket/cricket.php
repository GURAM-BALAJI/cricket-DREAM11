<?php include '../includes/session.php'; ?>
<?php include '../includes/header.php';?>
<?php if($admin['cricket_view']){ ?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php include '../includes/navbar.php'; ?>
        <?php include '../includes/menubar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Cricket
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Cricket</li>
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
                <div class="panel panel-default" style="overflow-x:auto;">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <?php if($admin['cricket_create']){ ?>
                                <div class="box-header with-border">
                                    <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i
                                            class="fa fa-plus"></i> New Cricket</a>
                                </div>
                                <?php } ?>
                                <div class="box-body">
                                    <table id="example1" class="table table-bordered">
                                        <thead>
                                            <th>SlNo</th>
                                            <th>Cricket Name</th>
                                            <th>Team 1</th>
                                            <th>Team 2</th>
                                            <th>Status</th>
                                            <?php if($admin['cricket_special']){ ?>
                                            <th>View</th>
                                            <?php if($admin['cricket_score_view']){?>
                                            <th>Play</th>
                                            <?php } } ?>
                                            <?php if($admin['cricket_edit'] || $admin['cricket_del']){ ?>
                                            <th>Tools</th>
                                            <?php } ?>
                                        </thead>
                                        <tbody>
                                            <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM cricket WHERE cricket_delete='0'");
                      $stmt->execute();
                        $slno=1;
                      foreach($stmt as $row){
                          $status = ($row['cricket_active']) ? '<span class="label label-success">Active</span>' : '<span class="label label-danger">Not Active</span>';
                        $active = (!$row['cricket_active']) ? '<span class="pull-right"><a href="#activate" class="status" data-toggle="modal" data-id="'.$row['cricket_id'].'"><i class="fa fa-check-square-o"></i></a></span>' : '<span class="pull-right"><a href="#not_activate" class="status" data-toggle="modal" data-id="'.$row['cricket_id'].'"><i class="fa fa-check-square-o"></i></a></span>';
                        echo "<tr>";
                          $team_category_id=$row['cricket_category'];
                          $stmt1 = $conn->prepare("SELECT * FROM category WHERE category_id='$team_category_id'");
                      $stmt1->execute();
                      foreach($stmt1 as $row1){
                          echo "<td>".$slno++."</td>";
                             echo "<td>".$row['cricket_name']."</td>";
                          $team1=$row['cricket_team1_id'];
                           $team2=$row['cricket_team2_id'];
                         
                          $stmt1 = $conn->prepare("SELECT * FROM teams WHERE team_id='$team1'");
                      $stmt1->execute();
                      foreach($stmt1 as $row1)
                            echo "<td>".$row1['team_name']."</td>";
                                 $stmt1 = $conn->prepare("SELECT * FROM teams WHERE team_id='$team2'");
                      $stmt1->execute();
                      foreach($stmt1 as $row1)
                            echo "<td>".$row1['team_name']."</td>";
                          echo "<td>";
                            echo "$status";
                          if($admin['cricket_edit'])
                              echo "$active";
                          echo "</td>";
                          if($admin['cricket_special']) {
                              $num = $row['cricket_id'];
                              $name = $row['cricket_name'];
                              echo "<td><a class='btn btn-warning btn-sm ' href='cricket_bet_list.php?id=$num&win=0&name=$name'><i class='fa fa-play'></i> In Play</a> ";
                              echo "<a  class='btn btn-success btn-sm ' href='cricket_bet_list.php?id=$num&win=2&name=$name'><i class='fa fa-trophy'></i> Win</a> ";
                              echo "<a  class='btn btn-danger btn-sm ' href='cricket_bet_list.php?id=$num&win=1&name=$name'><i class='fa fa-times'></i> Loss</a></td> ";
                              if($admin['cricket_score_view'])
                                  echo "<td><a  class='btn btn-dropbox btn-sm ' href='cricket_score.php?id=$num&name=$name'><i class='fa fa-gamepad'></i> score</a></td> ";
                          }
                          if($admin['cricket_edit'] || $admin['cricket_del'])
                          echo "<td>";
                           if($admin['cricket_edit'])
                          echo "<button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['cricket_id']."'><i class='fa fa-edit'></i> Edit</button> ";
                           if($admin['cricket_del'])
                          echo "<button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['cricket_id']."'><i class='fa fa-trash'></i> Delete</button>";
                          if($admin['cricket_edit'] || $admin['cricket_del'])
                          echo "</td>";
                          echo "</tr>";
                      }
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

        <script src="js/jquery.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $('#cricket_category_id').on('change', function() {
                var team_category_ID = $(this).val();
                if (team_category_ID) {
                    $.ajax({
                        type: 'POST',
                        url: 'team_ajaxData.php',
                        data: 'team_category_id=' + team_category_ID,
                        success: function(html) {
                            $('#team1').html(html);
                        }
                    });
                } else {
                    $('#team1').html('<option value="">Select category first</option>');
                }
            });

        });

        $(document).ready(function() {
            $('#team1').on('change', function() {
                var team1_val = $(this).val();
                if (team1_val) {
                    $.ajax({
                        type: 'POST',
                        url: 'players1_ajaxData.php',
                        data: 'team1_val=' + team1_val,
                        success: function(html) {
                            $('#player_list_1').html(html);
                        }
                    });
                }
            });

        });
        </script>

        <?php include 'cricket_modal.php'; ?>

    </div>
    <!-- ./wrapper -->

    <?php include '../includes/scripts.php'; ?>
    <script>
    $(function() {

        $(document).on('click', '.edit', function(e) {
            e.preventDefault();
            $('#edit').modal('show');
            var id = $(this).data('id');
            getRow(id);
            getRow1(id);
        });

        $(document).on('click', '.delete', function(e) {
            e.preventDefault();
            $('#delete').modal('show');
            var id = $(this).data('id');
            getRow(id);
        });

        $(document).on('click', '.status', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            getRow(id);
        });

    });

    function getRow(id) {
        $.ajax({
            type: 'POST',
            url: 'cricket_team1_row.php',
            data: {
                id: id
            },
            dataType: 'json',
            success: function(response) {
                $('.cricketid').val(response.cricket_id);
                $('.cricket_name').html(response.cricket_name);
                $('#edit_cricket_date').val(response.cricket_date);
                $('#edit_cricket_time').val(response.cricket_time);
                $('#edit_cricket_name').val(response.cricket_name);
                $('#edit_category_name').val(response.category_name);
                $('#edit_team1_name').val(response.team_name);
                $('#edit_team1_player1').html(response.player1);
                $('#edit_team1_player2').html(response.player2);
                $('#edit_team1_player3').html(response.player3);
                $('#edit_team1_player4').html(response.player4);
                $('#edit_team1_player5').html(response.player5);
                $('#edit_team1_player6').html(response.player6);
                $('#edit_team1_player7').html(response.player7);
                $('#edit_team1_player8').html(response.player8);
                $('#edit_team1_player9').html(response.player9);
                $('#edit_team1_player10').html(response.player10);
                $('#edit_team1_player11').html(response.player11);
                $('#edit_team1_player12').html(response.player12);
                $('#edit_starting_four').val(response.starting_four);
                $('#edit_starting_six').val(response.starting_six);

                $('#edit_team1_player1_four').val(response.cricket_team1_player1_four);
                $('#edit_team1_player2_four').val(response.cricket_team1_player2_four);
                $('#edit_team1_player3_four').val(response.cricket_team1_player3_four);
                $('#edit_team1_player4_four').val(response.cricket_team1_player4_four);
                $('#edit_team1_player5_four').val(response.cricket_team1_player5_four);
                $('#edit_team1_player6_four').val(response.cricket_team1_player6_four);
                $('#edit_team1_player7_four').val(response.cricket_team1_player7_four);
                $('#edit_team1_player8_four').val(response.cricket_team1_player8_four);
                $('#edit_team1_player9_four').val(response.cricket_team1_player9_four);
                $('#edit_team1_player10_four').val(response.cricket_team1_player10_four);
                $('#edit_team1_player11_four').val(response.cricket_team1_player11_four);
                $('#edit_team1_player12_four').val(response.cricket_team1_player12_four);

                $('#edit_team1_player1_six').val(response.cricket_team1_player1_six);
                $('#edit_team1_player2_six').val(response.cricket_team1_player2_six);
                $('#edit_team1_player3_six').val(response.cricket_team1_player3_six);
                $('#edit_team1_player4_six').val(response.cricket_team1_player4_six);
                $('#edit_team1_player5_six').val(response.cricket_team1_player5_six);
                $('#edit_team1_player6_six').val(response.cricket_team1_player6_six);
                $('#edit_team1_player7_six').val(response.cricket_team1_player7_six);
                $('#edit_team1_player8_six').val(response.cricket_team1_player8_six);
                $('#edit_team1_player9_six').val(response.cricket_team1_player9_six);
                $('#edit_team1_player10_six').val(response.cricket_team1_player10_six);
                $('#edit_team1_player11_six').val(response.cricket_team1_player11_six);
                $('#edit_team1_player12_six').val(response.cricket_team1_player12_six);

            }
        });
    }

    function getRow1(id) {
        $.ajax({
            type: 'POST',
            url: 'cricket_team2_row.php',
            data: {
                id: id
            },
            dataType: 'json',
            success: function(response) {
                $('#edit_team2_name').val(response.team_name);
                $('#edit_team2_player1').html(response.player1);
                $('#edit_team2_player2').html(response.player2);
                $('#edit_team2_player3').html(response.player3);
                $('#edit_team2_player4').html(response.player4);
                $('#edit_team2_player5').html(response.player5);
                $('#edit_team2_player6').html(response.player6);
                $('#edit_team2_player7').html(response.player7);
                $('#edit_team2_player8').html(response.player8);
                $('#edit_team2_player9').html(response.player9);
                $('#edit_team2_player10').html(response.player10);
                $('#edit_team2_player11').html(response.player11);
                $('#edit_team2_player12').html(response.player12);

                $('#edit_team2_player1_four').val(response.cricket_team2_player1_four);
                $('#edit_team2_player2_four').val(response.cricket_team2_player2_four);
                $('#edit_team2_player3_four').val(response.cricket_team2_player3_four);
                $('#edit_team2_player4_four').val(response.cricket_team2_player4_four);
                $('#edit_team2_player5_four').val(response.cricket_team2_player5_four);
                $('#edit_team2_player6_four').val(response.cricket_team2_player6_four);
                $('#edit_team2_player7_four').val(response.cricket_team2_player7_four);
                $('#edit_team2_player8_four').val(response.cricket_team2_player8_four);
                $('#edit_team2_player9_four').val(response.cricket_team2_player9_four);
                $('#edit_team2_player10_four').val(response.cricket_team2_player10_four);
                $('#edit_team2_player11_four').val(response.cricket_team2_player11_four);
                $('#edit_team2_player12_four').val(response.cricket_team2_player12_four);

                $('#edit_team2_player1_six').val(response.cricket_team2_player1_six);
                $('#edit_team2_player2_six').val(response.cricket_team2_player2_six);
                $('#edit_team2_player3_six').val(response.cricket_team2_player3_six);
                $('#edit_team2_player4_six').val(response.cricket_team2_player4_six);
                $('#edit_team2_player5_six').val(response.cricket_team2_player5_six);
                $('#edit_team2_player6_six').val(response.cricket_team2_player6_six);
                $('#edit_team2_player7_six').val(response.cricket_team2_player7_six);
                $('#edit_team2_player8_six').val(response.cricket_team2_player8_six);
                $('#edit_team2_player9_six').val(response.cricket_team2_player9_six);
                $('#edit_team2_player10_six').val(response.cricket_team2_player10_six);
                $('#edit_team2_player11_six').val(response.cricket_team2_player11_six);
                $('#edit_team2_player12_six').val(response.cricket_team2_player12_six);
            }
        });
    }
    </script>
</body>
<?php } ?>

</html>