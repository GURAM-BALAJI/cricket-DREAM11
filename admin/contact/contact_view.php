<?php include '../includes/session.php'; ?>
<?php include '../includes/header.php';?>
<?php if($admin['contact_view']){?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include '../includes/navbar.php'; ?>
  <?php include '../includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Viewed Contact
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Home</li>
        <li>REPORTS</li>
        <li class="active"> Viewed Contact</li>
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
               
                  <?php
                    $conn = $pdo->open();
$print=0;
                    try{
                      $now = date('Y-m-d');
                      $stmt = $conn->prepare("SELECT * FROM contact WHERE contact_view=1");
                      $stmt->execute();
                      foreach($stmt as $row){
                                if($print==0){
                              echo "<table id='example1' class='table table-bordered'>
                <thead>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Country</th>
                  <th>Subject</th>
                     
                </thead>
                <tbody><h2>Viewed Contacts</h2>";
                              $print=1;
                          }
                        echo "
                          <tr>
                            <td>".$row['contact_name']."</td>
                              <td>".$row['contact_email']."</td>
                                <td>".$row['contact_phone']."</td>
                                  <td>".$row['contact_country']."</td>
                                    <td>".$row['contact_subject']."</td>
                            
                          </tr>
                        ";
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }
echo "</tbody>
              </table>";
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
