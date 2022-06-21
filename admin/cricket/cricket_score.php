<?php include '../includes/session.php'; ?>
<?php include '../includes/header.php';?>
<?php if($admin['cricket_score_view']){
    $id=$_GET['id'];
    $name=$_GET['name'];?>
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php include '../includes/navbar.php'; ?>
        <?php include '../includes/menubar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Cricket score - <?php echo $name; ?>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Cricket score</li>
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
                                <?php if($admin['cricket_score_create']){ ?>
                                    <div class="box-header with-border">
                                        <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New Player</a>
                                    </div>
                                <?php } ?>
                                <div class="box-body">
                                    <table id="example1" class="table table-bordered">
                                        <thead>
                                        <th>Team Name</th>
                                        <th>Player Name</th>
                                        <th>Four's</th>
                                        <th>Six's</th>
                                        <?php if($admin['cricket_score_del']){ ?>
                                            <th>Out</th>
                                        <?php } ?>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $conn = $pdo->open();

                                        try{
                                            $stmt = $conn->prepare("SELECT cricket_score_player_name,cricket_score_id,team_id,team_name,cricket_score_player_id,cricket_score_player_four,cricket_score_player_six FROM cricket_score LEFT JOIN teams ON team_id=cricket_score_team_id WHERE cricket_score_cricket_id=:id");
                                            $stmt->execute(['id'=>$id]);
                                            foreach($stmt as $row) {
                                                echo "<tr>";
                                                echo "<td>".$row['team_name']."</td>";
                                                echo "<td>".$row['cricket_score_player_name']."</td>";
                                                echo "<td>".$row['cricket_score_player_four'];
                                                if($admin['cricket_score_edit'])
                                                    echo "<button class='btn btn-success btn-sm four btn-flat pull-right' data-id='".$row['cricket_score_id']."'><i class='fa fa-plus'></i></button></td>";
                                                echo "<td>".$row['cricket_score_player_six'];
                                                if($admin['cricket_score_edit'])
                                                    echo "<button class='btn btn-success btn-sm six btn-flat pull-right' data-id='".$row['cricket_score_id']."'><i class='fa fa-plus'></i></button></td>";
                                                if($admin['cricket_score_del'])
                                                    echo "<td><button class='btn btn-danger btn-sm out btn-flat' data-id='".$row['cricket_score_id']."'><i class='fa fa-times'></i> OUT</button></td>";
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
        <?php include 'cricket_score_modal.php'; ?>

    </div>
    <!-- ./wrapper -->
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#cricket_match_id').on('change',function(){
                var team_match_ID = $(this).val();
                if(team_match_ID){
                    $.ajax({
                        type:'POST',
                        url:'score_ajaxData.php',
                        data:'team_match_id='+team_match_ID,
                        success:function(html){
                            $('#team').html(html);
                        }
                    });
                }else{
                    $('#team').html('<option value="">Select match first</option>');
                }
            });

        });
        $(document).ready(function(){
            $('#team').on('change',function(){
                var team_val = $(this).val();
                var cricket_match_id = $('#cricket_match_id').val();
                if(team_val){
                    $.ajax({
                        type:'POST',
                        url:'players_score_ajaxData.php',
                        data: { team_val : team_val, cricket_match_id : cricket_match_id},
                        success:function(html){
                            $('#player_list').html(html);
                        }
                    });
                }
            });

        });
    </script>
    <?php include '../includes/scripts.php'; ?>
    <script>
        $(function(){
            $(document).on('click', '.four', function(e){
                e.preventDefault();
                $('#four').modal('show');
                var id = $(this).data('id');
                getRow(id);
            });

            $(document).on('click', '.out', function(e){
                e.preventDefault();
                $('#out').modal('show');
                var id = $(this).data('id');
                getRow(id);
            });

            $(document).on('click', '.six', function(e){
                e.preventDefault();
                $('#six').modal('show');
                var id = $(this).data('id');
                getRow(id);
            });

        });

        function getRow(id){
            $.ajax({
                type: 'POST',
                url: 'cricket_score_row.php',
                data: {id:id},
                dataType: 'json',
                success: function(response){
                    $('.cricketscoreid').val(response.cricket_score_id);
                    $('.cricket_score_cricket_id').val(response.cricket_score_cricket_id);
                    $('.cricket_score_team_id').val(response.cricket_score_team_id);
                    $('.cricket_score_player_id').val(response.cricket_score_player_id);
                    $('.cricket_score_player_name').html(response.cricket_score_player_name);
                    $('.cricket_score_player_four').html(response.cricket_score_player_four);
                    $('.cricket_score_player_six').html(response.cricket_score_player_six);
                    $('#cricket_name').val(response.cricket_name);
                    $('.cricket_name').val(response.cricket_name);
                }
            });
        }
    </script>
    </body>
<?php } ?>
</html>