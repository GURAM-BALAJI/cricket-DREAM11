<?php include '../includes/session.php'; ?>
<?php include '../includes/header.php';?>
<?php if($admin['cricket_match_view']){ ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include '../includes/navbar.php'; ?>
  <?php include '../includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cricket Match
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Cricket Match</li>
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
              <?php if($admin['cricket_match_create']){ ?>
            <div class="box-header with-border">
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New Cricket match</a>
            </div>
               <?php } ?>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                    <th>SlNo</th>
                    <th>Cricket Name</th>
                    <th>Team-1 </th>
                    <th>Team-2 </th>
                    <?php if($admin['cricket_match_special']){?>
                        <th>Play</th>
                    <?php }  ?>
                    <?php if($admin['cricket_match_special']){ ?>
                        <th>View</th>
                    <?php }?>
                     <?php if($admin['cricket_match_edit'] || $admin['cricket_match_del']){ ?>
                  <th>Tools</th>
                <?php } ?>
                </thead>
                <tbody>
                  <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT *,cricket_name FROM cricket_match left join cricket on cricket_id=cricket_match_cricket_id WHERE cricket_match_delete='0' AND cricket_delete='0' AND cricket_active='1'");
                      $stmt->execute();
                        $slno=1;
                      foreach($stmt as $row){
                           if($row['cricket_match_suspended']==0){
                              $suspend="Activated";
                              $color="success";
                              $pass="Suspend";
                          }else{
                              $suspend="Suspended";
                              $color="danger";
                              $pass="Activate";
                          }
                        echo "<tr>";
                          echo "<td>".$slno++."</td>";
                          $name=$row['cricket_name'];
                           echo "<td>".$row['cricket_name']."</td>";
                          $team=$row['cricket_match_team1_id'];
                          $num = $row['cricket_match_cricket_id'];
                          $num1=$row['cricket_match_id'];
                          $stmt1 = $conn->prepare("SELECT * FROM teams WHERE team_id='$team'");
                      $stmt1->execute();
                      foreach($stmt1 as $row1)
                            echo "<td>".$row1['team_name']."-".$row['cricket_match_team1_ratio']."</td>";
                            $team=$row['cricket_match_team2_id'];
                          $stmt1 = $conn->prepare("SELECT * FROM teams WHERE team_id='$team'");
                      $stmt1->execute();
                      foreach($stmt1 as $row1)
                            echo "<td>".$row1['team_name']."-".$row['cricket_match_team2_ratio']."</td>";
                         if($admin['cricket_match_special']){
                                echo "<td><a  class='btn btn-dropbox btn-sm match_won' data-id='".$row['cricket_match_id']."'> WON</a>";
                         echo "<a class='btn btn-$color btn-sm suspend' data-id='$num,$num1,$pass'>$suspend</a></td> ";
                              $num = $row['cricket_match_cricket_id'];
                              echo "<td><a class='btn btn-warning btn-sm ' href='match_bet_list.php?id=$num&win=0&name=$name'><i class='fa fa-play'></i> In Play</a> ";
                              echo "<a  class='btn btn-success btn-sm ' href='match_bet_list.php?id=$num&win=2&name=$name'><i class='fa fa-trophy'></i> Win</a> ";
                              echo "<a  class='btn btn-danger btn-sm ' href='match_bet_list.php?id=$num&win=1&name=$name'><i class='fa fa-times'></i> Loss</a></td> ";
                          }
                        
                          if($admin['cricket_match_edit'] || $admin['cricket_match_del'])
                          echo "<td>";
                           if($admin['cricket_match_edit'])
                          echo "<button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['cricket_match_id']."'><i class='fa fa-edit'></i> Edit</button> ";
                           if($admin['cricket_match_del'])
                          echo "<button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['cricket_match_id']."'><i class='fa fa-trash'></i> Delete</button>";
                          if($admin['cricket_match_edit'] || $admin['cricket_match_del'])
                          echo "</td>";
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
     <script src="js/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#cricket').on('change',function(){
        var cricket_ID = $(this).val();
        if(cricket_ID){
            $.ajax({
                type:'POST',
                url:'match_team_ajaxData.php',
                data:'cricket_id='+cricket_ID,
                success:function(html){
                    $('#team_rate').html(html);
                }
            }); 
        }else{
            $('#team_rate').html('select cricket first');
        }
    });
    
});    

    </script>
    <?php include 'match_modal.php'; ?>

</div>
<!-- ./wrapper -->

<?php include '../includes/scripts.php'; ?>
<script>
$(function(){
    
    
$(document).on('click', '.match_won', function(e){
    e.preventDefault();
    $('#match_won').modal('show');
    var id = $(this).data('id');
    getRow1(id);
  });
    
  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
    
    $(document).on('click', '.suspend', function(e){
    e.preventDefault();
    $('#suspend').modal('show');
    var id = $(this).data('id');
    getRow12(id);
  });
});
function getRow12(id){
  $.ajax({
    type: 'POST',
    url: 'match_suspend_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
        $('.cricket_suspend_id').val(response.cricket_match_id);
        $('.cricket_suspend_name').html(response.cricket_name);
        $('.suspend_val').html(response.suspened);
        }
  });
}
    
function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'match_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
        $('.delete_cricket_id').val(response.cricket_match_cricket_id);
        $('.edit_cricket_id').val(response.cricket_match_cricket_id);
        $('#edit_team1_id').val(response.cricket_match_team1_id);
        $('#edit_team1_ratio').val(response.cricket_match_team1_ratio);
        $('#edit_team2_id').val(response.cricket_match_team2_id);
        $('#edit_team2_ratio').val(response.cricket_match_team2_ratio);
        $('#edit_team1_name').html(response.team1_name);
        $('#edit_team2_name').html(response.team2_name);
        $('#edit_cricket_name').val(response.cricket_name);
        $('.edit_cricket_name').html(response.cricket_name);
        
    }
  });
}
    function getRow1(id){
  $.ajax({
    type: 'POST',
    url: 'match_won_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
         $('.win_cricket_id').val(response.cricket_id);
        $('.win_cricket_name').html(response.cricket_name);
        $('.win_teams').html(response.options);
    }
  });
}
</script>
</body>
<?php } ?>
</html>