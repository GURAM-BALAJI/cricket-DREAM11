<?php include '../includes/session.php'; ?>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
h2 {
    color: #1c94c4;
    text-align: center;
}
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {background-color:#f5f5f5;}
    </style>
</head>
<body>

<h2>PERMISSION</h2>
<form class="form-horizontal" method="POST" action="admin_permission_edit.php">
<?php
$id = $_GET['id'];
$conn = $pdo->open();
$stmt = $conn->prepare("SELECT * FROM admin WHERE admin_id=:id");
$stmt->execute(['id'=>$id]);
foreach($stmt as $row){
?>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
<table>
    <tr>
        <th>  </th>
        <th style="color: #3a8104;"> Name </th>
        <th style="color: #3a8104;"> View </th>
        <th style="color: #3a8104;"> Create </th>
        <th style="color: #3a8104;"> Edit </th>
        <th style="color: #3a8104;"> Delete </th>
        <th style="color: #3a8104;"> Special </th>
        <th>  </th>
    </tr>
    <tr>
        <td>  </td>
        <td> USER </td>
        <td style="text-align: center;"> <input type="checkbox" name="users_view" <?php if($row['users_view']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="users_create" <?php if($row['users_create']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="users_edit" <?php if($row['users_edit']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="users_del" <?php if($row['users_del']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="users_special" <?php if($row['users_special']) echo "checked"; ?>> </td>
        <td>  </td>
    </tr>
    <tr>
         <td>  </td>
        <td> ADMIN </td>
        <td style="text-align: center;"> <input type="checkbox" name="admin_view" <?php if($row['admin_view']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="admin_create" <?php if($row['admin_create']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="admin_edit" <?php if($row['admin_edit']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="admin_del" <?php if($row['admin_del']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="admin_special" <?php if($row['admin_special']) echo "checked"; ?>> </td>
        <td>  </td>
    </tr>
    <tr>
         <td>  </td>
        <td> CRICKET </td>
        <td style="text-align: center;"> <input type="checkbox" name="cricket_view" <?php if($row['cricket_view']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="cricket_create" <?php if($row['cricket_create']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="cricket_edit" <?php if($row['cricket_edit']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="cricket_del" <?php if($row['cricket_del']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="cricket_special" <?php if($row['cricket_special']) echo "checked"; ?>> </td>
        <td>  </td>
    </tr>
    <tr>
         <td>  </td>
        <td> TEAMS </td>
        <td style="text-align: center;"> <input type="checkbox" name="teams_view" <?php if($row['teams_view']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="teams_create" <?php if($row['teams_create']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="teams_edit" <?php if($row['teams_edit']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="teams_del" <?php if($row['teams_del']) echo "checked"; ?>> </td>
        <td>  </td>
        <td>  </td>
    </tr>
    <tr>
         <td>  </td>
        <td> CATEGORY </td>
        <td style="text-align: center;"> <input type="checkbox" name="category_view" <?php if($row['category_view']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="category_create" <?php if($row['category_create']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="category_edit" <?php if($row['category_edit']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="category_del" <?php if($row['category_del']) echo "checked"; ?>> </td>
        <td>  </td>
        <td>  </td>
    </tr>
    <tr>
        <td>  </td>
        <td> CRICKET 4s 6s </td>
        <td style="text-align: center;"> <input type="checkbox" name="cricket_score_view" <?php if($row['cricket_score_view']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="cricket_score_create" <?php if($row['cricket_score_create']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="cricket_score_edit" <?php if($row['cricket_score_edit']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="cricket_score_del" <?php if($row['cricket_score_del']) echo "checked"; ?>> </td>
        <td>  </td>
        <td>  </td>
    </tr>
     <tr>
         <td>  </td>
        <td> Cricket Overs </td>
        <td style="text-align: center;"> <input type="checkbox" name="cricket_overs_view" <?php if($row['cricket_overs_view']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="cricket_overs_create" <?php if($row['cricket_overs_create']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="cricket_overs_edit" <?php if($row['cricket_overs_edit']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="cricket_overs_del" <?php if($row['cricket_overs_del']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="cricket_overs_special" <?php if($row['cricket_overs_special']) echo "checked"; ?>> </td>
        <td>  </td>
    </tr>
      <tr>
         <td>  </td>
        <td> Cricket Target </td>
        <td style="text-align: center;"> <input type="checkbox" name="cricket_target_view" <?php if($row['cricket_target_view']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> </td>
        <td style="text-align: center;"> </td>
        <td style="text-align: center;"> </td>
        <td style="text-align: center;"> <input type="checkbox" name="cricket_target_special" <?php if($row['cricket_target_special']) echo "checked"; ?>> </td>
        <td>  </td>
    </tr>
       <tr>
         <td>  </td>
        <td> Cricket Match </td>
        <td style="text-align: center;"> <input type="checkbox" name="cricket_match_view" <?php if($row['cricket_match_view']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="cricket_match_create" <?php if($row['cricket_match_create']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="cricket_match_edit" <?php if($row['cricket_match_edit']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="cricket_match_del" <?php if($row['cricket_match_del']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="cricket_match_special" <?php if($row['cricket_match_special']) echo "checked"; ?>> </td>
        <td>  </td>
    </tr>
        <tr>
         <td>  </td>
        <td> Cricket Toss </td>
        <td style="text-align: center;"> <input type="checkbox" name="cricket_toss_view" <?php if($row['cricket_toss_view']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="cricket_toss_create" <?php if($row['cricket_toss_create']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="cricket_toss_edit" <?php if($row['cricket_toss_edit']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="cricket_toss_del" <?php if($row['cricket_toss_del']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="cricket_toss_special" <?php if($row['cricket_toss_special']) echo "checked"; ?>> </td>
        <td>  </td>
    </tr>
      <tr>
         <td>  </td>
        <td> Cricket Session </td>
        <td style="text-align: center;"> <input type="checkbox" name="cricket_session_view" <?php if($row['cricket_session_view']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="cricket_session_create" <?php if($row['cricket_session_create']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="cricket_session_edit" <?php if($row['cricket_session_edit']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="cricket_session_del" <?php if($row['cricket_session_del']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="cricket_session_special" <?php if($row['cricket_session_special']) echo "checked"; ?>> </td>
        <td>  </td>
    </tr>
       <tr>
        <td>  </td>
        <td> Contact </td>
        <td style="text-align: center;"> <input type="checkbox" name="contact_view" <?php if($row['contact_view']) echo "checked"; ?>> </td>
        <td style="text-align: center;">  </td>
        <td style="text-align: center;"> <input type="checkbox" name="contact_edit" <?php if($row['contact_edit']) echo "checked"; ?>> </td>
        <td style="text-align: center;"></td>
        <td>  </td>
        <td>  </td>
    </tr>
      <tr>
        <td>  </td>
        <td> Withdraw </td>
        <td style="text-align: center;"> <input type="checkbox" name="withdraw_view" <?php if($row['withdraw_view']) echo "checked"; ?>> </td>
        <td style="text-align: center;">  </td>
        <td style="text-align: center;"> <input type="checkbox" name="withdraw_edit" <?php if($row['withdraw_edit']) echo "checked"; ?>> </td>
        <td style="text-align: center;"> <input type="checkbox" name="withdraw_del" <?php if($row['withdraw_del']) echo "checked"; ?>> </td>
        <td>  </td>
        <td>  </td>
    </tr>
       <tr>
         <td>  </td>
        <td> MESSAGE </td>
        <td style="text-align: center;"> <input type="checkbox" name="message_view" <?php if($row['message_view']) echo "checked"; ?>> </td>
        <td>  </td>
           <td>  </td>
           <td>  </td>
           <td>  </td>
        <td>  </td>
    </tr>
</table>
<?php } ?>
    <div class="modal-footer">
    <button type="submit" class="btn btn-success btn-flat" name="update"><i class="fa fa-check"></i> UPDATE</button>
    </div>
</form>
</body>
</html>