<?php include '../includes/session.php'; ?>
<?php include '../includes/header.php';?>
<?php if($admin['cricket_target_view']){ ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include '../includes/navbar.php'; ?>
  <?php include '../includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cricket Target
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Cricket Target</li>
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
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                    <th>SlNo</th>
                    <th>Cricket Name</th>
                    <?php if($admin['cricket_target_special']){?>
                     <th>Suspend</th>
                    <th>Submit</th>
                        <th>Play</th>
                    <?php }  ?>
                </thead>
                <tbody>
                  <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT cricket_name,cricket_target_suspended,cricket_id FROM cricket WHERE cricket_delete='0' AND cricket_active='1' ");
                      $stmt->execute();
                        $slno=1;
                      foreach($stmt as $row){
                          if($row['cricket_target_suspended']==0){
                              $suspend="Activated";
                              $color="success";
                              $pass="Suspend";
                          }else{
                              $suspend="Suspended";
                              $color="danger";
                              $pass="Activate";
                          }
                          $num = $row['cricket_id'];
                        echo "<tr>";
                          echo "<td>".$slno++."</td>";
                          $name=$row['cricket_name'];
                           echo "<td>".$row['cricket_name']."</td>";
                          if($admin['cricket_target_special']){
                          echo "<td><a class='btn btn-$color btn-sm suspend' data-id='$num,$pass'>$suspend</a> ";
                              echo "<td><form action='target_bet.php' method='post'><input type='hidden' name='id' id='id' value='$num'><input type='number' step='any' placeholder='Score' name='cricket_score' required><input class='btn btn-success btn-sm' type='submit' name='bet' id='submit' ></form></td>";
                              echo "<td><a class='btn btn-warning btn-sm ' href='target_bet_list.php?id=$num&win=0&name=$name'><i class='fa fa-play'></i> In Play</a> ";
                              echo "<a  class='btn btn-success btn-sm ' href='target_bet_list.php?id=$num&win=2&name=$name'><i class='fa fa-trophy'></i> Win</a> ";
                              echo "<a  class='btn btn-danger btn-sm ' href='target_bet_list.php?id=$num&win=1&name=$name'><i class='fa fa-times'></i> Loss</a></td> ";
                          }
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
</div>
<!-- ./wrapper -->
 <?php include 'target_modal.php'; ?>
<?php include '../includes/scripts.php'; ?>
    <script>
$(function(){
    
$(document).on('click', '.suspend', function(e){
    e.preventDefault();
    $('#suspend').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
    });

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'target_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
        $('.cricket_id').val(response.cricket_id);
        $('.cricket_name').html(response.cricket_name);
        $('.suspend_val').html(response.suspened);
        }
  });
}
    </script>
</body>
<?php } ?>
</html>