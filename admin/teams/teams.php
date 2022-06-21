<?php include '../includes/session.php'; ?>
<?php include '../includes/header.php';?>
<?php if($admin['teams_view']){?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include '../includes/navbar.php'; ?>
  <?php include '../includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Teams
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Teams</li>
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
               <?php if($admin['teams_create']){ ?>
            <div class="box-header with-border">
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New Team</a>
            </div>
               <?php } ?>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                    <th>Category</th>
                  <th>Name</th>
                    <th>Player-1</th>
                    <th>Player-2</th>
                    <th>Player-3</th>
                    <th>Player-4</th>
                    <th>Player-5</th>
                    <th>Player-6</th>
                    <th>Player-7</th>
                    <th>Player-8</th>
                    <th>Player-9</th>
                    <th>Player-10</th>
                    <th>Player-11</th>
                    <th>Player-12</th>
                     <?php if($admin['teams_edit'] || $admin['teams_del']){ ?>
                  <th>Tools</th>
                 <?php } ?>
                </thead>
                <tbody>
                  <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM teams WHERE team_delete='0'");
                      $stmt->execute();
                      foreach($stmt as $row){
                        echo "<tr>";
                          $team_category_id=$row['team_category_id'];
                          $stmt1 = $conn->prepare("SELECT * FROM category WHERE category_id='$team_category_id'");
                      $stmt1->execute();
                      foreach($stmt1 as $row1)
                          echo "<td>".$row1['category_name']."</td>";
                             echo "<td>".$row['team_name']."</td>
                            <td>".$row['player1']."</td>
                             <td>".$row['player2']."</td>
                              <td>".$row['player3']."</td>
                               <td>".$row['player4']."</td>
                                <td>".$row['player5']."</td>
                                 <td>".$row['player6']."</td>
                                  <td>".$row['player7']."</td>
                                   <td>".$row['player8']."</td>
                                    <td>".$row['player9']."</td>
                                     <td>".$row['player10']."</td>
                                      <td>".$row['player11']."</td>
                                       <td>".$row['player12']."</td>";
                            if($admin['teams_edit'] || $admin['teams_del'])
                             echo "<td>";
                             if($admin['teams_edit'])
                              echo "<button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['team_id']."'><i class='fa fa-edit'></i> Edit</button> ";
                               if($admin['teams_del'])
                              echo "<button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['team_id']."'><i class='fa fa-trash'></i> Delete</button>";
                           if($admin['teams_edit'] || $admin['teams_del'])
                              echo " </td>";
                          echo "</tr>
                        ";
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
    <?php include 'teams_modal.php'; ?>

</div>
<!-- ./wrapper -->

<?php include '../includes/scripts.php'; ?>
<script>
$(function(){

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
});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'teams_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
        $('.teamid').val(response.team_id);
        $('.team_name').html(response.team_name);
        $('.team_category_id').val(response.team_category_id);
        $('#edit_team_name').val(response.team_name);
        $('#edit_player1').val(response.player1);
        $('#edit_player2').val(response.player2);
        $('#edit_player3').val(response.player3);
        $('#edit_player4').val(response.player4);
        $('#edit_player5').val(response.player5);
        $('#edit_player6').val(response.player6);
        $('#edit_player7').val(response.player7);
        $('#edit_player8').val(response.player8);
        $('#edit_player9').val(response.player9);
        $('#edit_player10').val(response.player10);
        $('#edit_player11').val(response.player11);
        $('#edit_player12').val(response.player12);
    }
  });
}
</script>
</body>
<?php } ?>
</html>