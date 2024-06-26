<?php
	include '../includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
        $icon = $_POST['icon'];

		try{
			$stmt = $conn->prepare("UPDATE category SET category_name=:name, category_icon=:icon WHERE category_id=:id");
			$stmt->execute(['name'=>$name,'icon'=>$icon, 'id'=>$id]);
			$_SESSION['success'] = 'Category updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit category form first';
	}

	header('location: category.php');

?>