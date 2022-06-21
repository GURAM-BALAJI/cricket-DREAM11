<?php 
	include '../includes/session.php';

	if(isset($_POST['id'])){
		$id=$_POST['id'];
            $id=explode(',',$id);
         $conn = $pdo->open();
                      $stmt = $conn->prepare("SELECT cricket_name FROM cricket WHERE cricket_delete='0' AND cricket_active='1' AND cricket_id=$id[0] ");
                      $stmt->execute();
                      foreach($stmt as $row)
                          $name=$row['cricket_name'];
            $row = array(
'cricket_toss_id'=>$id[1],
'cricket_name'=>$name,
'suspened'=>$id[2],
                );
		echo json_encode($row);
	}
?>