
<?php
	include '../includes/session.php';

	if(isset($_POST['add'])){
		$name = $_POST['name'];
        $icon = $_POST['icon'];
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM category WHERE category_name=:name");
		$stmt->execute(['name'=>$name]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Category already exist';
		}
		else{
			try{
				$stmt = $conn->prepare("INSERT INTO category (category_name,category_icon) VALUES (:name, :icon)");
				$stmt->execute(['name'=>$name, 'icon'=>$icon]);
				$_SESSION['success'] = 'Category added successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up category form first';
	}

	header('location: category.php');

?>