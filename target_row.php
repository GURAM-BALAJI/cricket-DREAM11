<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$id=explode(",",$id);
        $conn = $pdo->open();
        $stmt1 = $conn->prepare("SELECT cricket_name FROM cricket WHERE cricket_id=$id[2]");
    $stmt1->execute();
    foreach($stmt1 as $row1){
        $cricket_name=$row1['cricket_name'];
    }
		
		$row = array(
            'target'=>$id[0],
            'amount'=>$id[1],
            'cricket_id'=>$id[2],
            'cricket_name'=>$cricket_name,
			 );
		$pdo->close();
		echo json_encode($row);
	}
?>