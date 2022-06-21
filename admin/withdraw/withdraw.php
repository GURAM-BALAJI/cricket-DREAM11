<?php include '../includes/session.php';
include '../includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php if($admin['withdraw_view']){?>
  <?php include '../includes/navbar.php'; ?>
  <?php include '../includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
    Withdraw
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Home</li>
        <li>REPORTS</li>
        <li class="active"></li>
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
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
            
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Name</th>
                  <th>Phone</th>
                    <th>Total Amount</th>
                    <th>Withdraw Amount</th>
                     <?php if($admin['withdraw_del'] || $admin['withdraw_edit']){ ?>
                       <th>Tool</th>
                    <?php } ?>
                </thead>
                <tbody>
                  <?php
                    $conn = $pdo->open();
$print=0;
                    try{
                      $stmt = $conn->prepare("SELECT * FROM withdraw left join users on user_id=withdraw_user_id WHERE withdrawn=0");
                      $stmt->execute();
                      foreach($stmt as $row){
                            if($print==0){
                              echo "<h2>Withdraw</h2>";
                              $print=1;
                          }
                    $user_amount=$row['user_amount']-50;
                          if($user_amount>=$row['withdraw_amount']){
                              $color='';
                              $result='Pay';
                              $permission='withdraw_edit';
                          }else{
                          $color='red';
                              $result='Delete';
                               $permission='withdraw_del';
                          }
                        echo "
                          <tr style='background-color:$color;'>
                            <td>".$row['first_name']." ".$row['last_name']."</td>
                              <td>".$row['user_phone']."</td>
                                <td>".$row['user_amount']."</td>
                                  <td>".$row['withdraw_amount']."</td>";
                           if($admin[$permission]){ 
                                  echo "<td><form action='withdraw_view_row.php' method='get'>
                                  <input type='hidden' name='withdraw_id' value='".$row['withdraw_id']."' >
                            <input type='hidden' name='user_id' value='".$row['user_id']."' >
                            <input type='hidden' name='withdraw_amount' value='".$row['withdraw_amount']."' >
                            <input type='submit' name='$result' value='$result'></form></td>  
                          </tr>
                        ";}
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }

                    $pdo->close();
                  
                    ?>
                </tbody>
              </table>
             <?php
                    $pdo->close(); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
     
  </div>

</div>
<!-- ./wrapper -->

<?php include '../includes/scripts.php'; ?>
</body>
<?php } ?>
</html>
