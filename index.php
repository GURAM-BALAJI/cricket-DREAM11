<!DOCTYPE html>
<?php
include 'includes/session.php';
include 'includes/header.php';
?>
<html lang="en" >
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="./style_nav_bar.css">

</head>
<style>
    body{
        background-color: #cfcfd2;
    }

    hr {
        display: block;
        margin-top: 0.5em;
        margin-bottom: 0.5em;
        margin-left: auto;
        margin-right: auto;
        border-style: dot-dot-dash;
        border-width: 2px;
        color: #0E2231;
        width: 98%;
    }
    h5{
        margin-left:10px;
        color:darkgreen;
        font-family:bold;
    }
    .hr_last {
        border-style: dot-dash;
        border-width: 4px;
        color: #181914;
        width: 98%;
    }
    div.scrollmenu {
        background-color: #333;
        overflow: auto;
        white-space: nowrap;
    }

    div.scrollmenu a {
        display: inline-block;
        text-align: center;
        padding: 14px;
        color: white;
        text-decoration: none;
        text-decoration-color: snow;
    }
    .back_ground{
    background-color: #777;
    }
    div.scrollmenu a:hover {
        background-color: #777;
    }
    p{
        float: right;
        color:darkgray;
        margin-top: -10px;
    }
</style>
<body>
<!-- partial:index.partial.html -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<center>
<div style="background-color: #333;">
    <table><tr>
            <th>
<img src="logo.png" width="100%" height="70px">
            </th><?php if(!isset($_SESSION['id'])){ ?><th>
    <a href="login.php">
        <button style="align; background-color: #d24026; border: none; color: white; padding: 18px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; border-radius: 10px;">
            LOGIN</button>
    </a></th><?php }?>
        </tr></table>
</div>
 
<div class="scrollmenu">
    <?php
    $conn = $pdo->open();
    $stmt = $conn->prepare("SELECT * FROM category WHERE category_delete = '0'");
    $stmt->execute();
    $i=0;
    $back_ground='';
    foreach($stmt as $row){
        $i++;
        if(isset($_GET['id'])){
            if($_GET['id']==$row['category_id'])
            $back_ground = 'back_ground';
        }else{
            if($i==1)
            $back_ground = 'back_ground';
        }
echo "<a class='$back_ground' href='index.php?id=".$row['category_id']."'><i class='material-icons nav__icon '>".$row['category_icon']."</i> ".$row['category_name']."</a>";
        $back_ground='';
    }
    ?>
</div>
    
<div style="background-color: #001a35;color: #89E6C4;">Match</div>
</center>
<section class="content">
        <div class="modal-content">
            <div class="modal-body">
<?php
if(!isset($_GET['id'])){
    $conn = $pdo->open();
    $stmt = $conn->prepare("SELECT * FROM category WHERE category_delete = '0' LIMIT 1");
    $stmt->execute();
    foreach($stmt as $row){
        $name=strtolower($row['category_name']);
        $stmt1 = $conn->prepare("SELECT * FROM $name WHERE cricket_delete=0 AND cricket_active=1");
        $stmt1->execute();
        foreach($stmt1 as $row1){
            $id=$row1['cricket_id'];
            $link1=$name.'_view'.'.php?id='.$id;
            echo "<a href='$link1'><h5>".$row1['cricket_name']."</h5></a>";
             $date=date("d/M/Y", strtotime($row1['cricket_date']));
            $time=date("h:i A", strtotime($row1['cricket_time']));
            echo "<p>".$date." ".$time."</p>";
            echo "<hr>";
            $link1='';
        }
        echo "<hr class='hr_last'>";
    }
}else{
    $id=$_GET['id'];
    $conn = $pdo->open();
    $stmt = $conn->prepare("SELECT * FROM category WHERE category_delete = '0' AND category_id=$id");
    $stmt->execute();
    foreach($stmt as $row){
        $name=strtolower($row['category_name']);
        $stmt1 = $conn->prepare("SELECT * FROM $name WHERE cricket_delete=0 AND cricket_active=1");
        $stmt1->execute();
        foreach($stmt1 as $row1){
            $id=$row1['cricket_id'];
            $link1=$name.'_view'.'.php?id='.$id;
            echo "<a href='$link1'><h5>".$row1['cricket_name']."</h5></a>";
             $date=date("d/M/Y", strtotime($row1['cricket_date']));
            $time=date("h:i A", strtotime($row1['cricket_time']));
            echo "<p>".$date." ".$time."</p>";
            echo "<hr>";
        }
        echo "<hr class='hr_last'>";
    }
}
?>
    </div></div>
    </section>
    
<br><br><br><br>
<nav class="nav">

    <a href="index.php" class="nav__link nav__link--active">
        <i class="material-icons nav__icon">home</i>
        <span class="nav__text">Home</span>
    </a>

    <a href="account.php" class="nav__link">
        <i class="material-icons nav__icon">account_balance_wallet</i>
        <span class="nav__text">Wallet</span>
    </a>

    <a href="profile.php" class="nav__link ">
        <i class="material-icons nav__icon">person</i>
        <span class="nav__text">Profile</span>
    </a>

    <a href="settings.php" class="nav__link">
        <i class="material-icons nav__icon">settings</i>
        <span class="nav__text">Settings</span>
    </a>

</nav>
<!-- partial -->

</body>
</html>
