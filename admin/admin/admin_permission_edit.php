<?php
	include '../includes/session.php';

	if(isset($_POST['update'])) {
        $id = $_POST['id'];
        if(isset($_POST['users_view']))
            $users_view =1;
        else
            $users_view =0;
        if(isset($_POST['users_create']))
            $users_create =1;
        else
            $users_create =0;
        if(isset($_POST['users_edit']))
            $users_edit =1;
        else
            $users_edit =0;
        if(isset($_POST['users_del']))
            $users_del =1;
        else
            $users_del =0;
        if(isset($_POST['admin_view']))
            $admin_view =1;
        else
            $admin_view =0;
        if(isset($_POST['admin_create']))
            $admin_create =1;
        else
            $admin_create =0;
        if(isset($_POST['admin_edit']))
            $admin_edit =1;
        else
            $admin_edit =0;
        if(isset($_POST['admin_del']))
            $admin_del =1;
        else
            $admin_del =0;
        if(isset($_POST['cricket_view']))
            $cricket_view =1;
        else
            $cricket_view =0;
        if(isset($_POST['cricket_create']))
            $cricket_create =1;
        else
            $cricket_create =0;
        if(isset($_POST['cricket_edit']))
            $cricket_edit =1;
        else
            $cricket_edit =0;
        if(isset($_POST['cricket_del']))
            $cricket_del =1;
        else
            $cricket_del =0;
        if(isset($_POST['teams_view']))
            $teams_view =1;
        else
            $teams_view =0;
        if(isset($_POST['teams_create']))
            $teams_create =1;
        else
            $teams_create =0;
        if(isset($_POST['teams_edit']))
            $teams_edit =1;
        else
            $teams_edit =0;
        if(isset($_POST['teams_del']))
            $teams_del =1;
        else
            $teams_del =0;
        if(isset($_POST['category_view']))
            $category_view =1;
        else
            $category_view =0;
        if(isset($_POST['category_create']))
            $category_create =1;
        else
            $category_create =0;
        if(isset($_POST['category_edit']))
            $category_edit =1;
        else
            $category_edit =0;
        if(isset($_POST['category_del']))
            $category_del =1;
        else
            $category_del =0;
        if(isset($_POST['cricket_score_view']))
            $cricket_score_view =1;
        else
            $cricket_score_view =0;
        if(isset($_POST['cricket_score_create']))
            $cricket_score_create =1;
        else
            $cricket_score_create =0;
        if(isset($_POST['cricket_score_edit']))
            $cricket_score_edit =1;
        else
            $cricket_score_edit =0;
        if(isset($_POST['cricket_score_del']))
            $cricket_score_del =1;
        else
            $cricket_score_del =0;
            if(isset($_POST['contact_view']))
            $contact_view =1;
        else
            $contact_view =0;
        if(isset($_POST['contact_edit']))
            $contact_edit =1;
        else
            $contact_edit =0;
          if(isset($_POST['withdraw_view']))
            $withdraw_view =1;
        else
            $withdraw_view =0;
        if(isset($_POST['withdraw_edit']))
            $withdraw_edit =1;
        else
            $withdraw_edit =0;
        if(isset($_POST['withdraw_del']))
            $withdraw_del =1;
        else
            $withdraw_del =0;
        if(isset($_POST['users_special']))
            $users_special =1;
        else
            $users_special =0;
        if(isset($_POST['admin_special']))
            $admin_special =1;
        else
            $admin_special =0;
        if(isset($_POST['cricket_special']))
            $cricket_special =1;
        else
            $cricket_special =0;
         if(isset($_POST['cricket_overs_view']))
            $cricket_overs_view =1;
        else
            $cricket_overs_view=0;
        if(isset($_POST['cricket_overs_create']))
            $cricket_overs_create =1;
        else
            $cricket_overs_create=0;
        if(isset($_POST['cricket_overs_edit']))
            $cricket_overs_edit =1;
        else
            $cricket_overs_edit=0;
        if(isset($_POST['cricket_overs_del']))
            $cricket_overs_del =1;
        else
            $cricket_overs_del=0;
          if(isset($_POST['cricket_overs_special']))
            $cricket_overs_special =1;
        else
            $cricket_overs_special=0;
        if(isset($_POST['cricket_match_view']))
            $cricket_match_view =1;
        else
            $cricket_match_view=0;
        if(isset($_POST['cricket_match_create']))
            $cricket_match_create =1;
        else
            $cricket_match_create=0;
        if(isset($_POST['cricket_match_edit']))
            $cricket_match_edit =1;
        else
            $cricket_match_edit=0;
        if(isset($_POST['cricket_match_del']))
            $cricket_match_del =1;
        else
            $cricket_match_del=0;
          if(isset($_POST['cricket_match_special']))
            $cricket_match_special =1;
        else
            $cricket_match_special=0;
        if(isset($_POST['cricket_toss_view']))
            $cricket_toss_view =1;
        else
            $cricket_toss_view=0;
        if(isset($_POST['cricket_toss_create']))
            $cricket_toss_create =1;
        else
            $cricket_toss_create=0;
        if(isset($_POST['cricket_toss_edit']))
            $cricket_toss_edit =1;
        else
            $cricket_toss_edit=0;
        if(isset($_POST['cricket_toss_del']))
            $cricket_toss_del =1;
        else
            $cricket_toss_del=0;
          if(isset($_POST['cricket_toss_special']))
            $cricket_toss_special =1;
        else
            $cricket_toss_special=0;
        if(isset($_POST['cricket_target_view']))
            $cricket_target_view =1;
        else
            $cricket_target_view=0;
          if(isset($_POST['cricket_target_special']))
            $cricket_target_special =1;
        else
            $cricket_target_special=0;
          if(isset($_POST['message_view']))
            $message_view =1;
        else
            $message_view=0;
                if(isset($_POST['cricket_session_view']))
            $cricket_session_view =1;
        else
            $cricket_session_view=0;
        if(isset($_POST['cricket_session_create']))
            $cricket_session_create =1;
        else
            $cricket_session_create=0;
        if(isset($_POST['cricket_session_edit']))
            $cricket_session_edit =1;
        else
            $cricket_session_edit=0;
        if(isset($_POST['cricket_session_del']))
            $cricket_session_del =1;
        else
            $cricket_session_del=0;
          if(isset($_POST['cricket_session_special']))
            $cricket_session_special =1;
        else
            $cricket_session_special=0;
        $conn = $pdo->open();
        try {
            $stmt = $conn->prepare("UPDATE admin SET cricket_score_view=:cricket_score_view,cricket_score_create=:cricket_score_create,cricket_score_edit=:cricket_score_edit,cricket_score_del=:cricket_score_del,users_special=:users_special,admin_special=:admin_special,cricket_special=:cricket_special,users_view=:users_view,users_create=:users_create,users_edit=:users_edit,users_del=:users_del,admin_view=:admin_view,admin_create=:admin_create,admin_edit=:admin_edit,admin_del=:admin_del,cricket_view=:cricket_view,cricket_create=:cricket_create,cricket_edit=:cricket_edit,cricket_del=:cricket_del,teams_view=:teams_view,teams_create=:teams_create,teams_edit=:teams_edit,teams_del=:teams_del,category_view=:category_view,category_create=:category_create,category_edit=:category_edit,category_del=:category_del,contact_view=:contact_view,contact_edit=:contact_edit,withdraw_view=:withdraw_view,withdraw_edit=:withdraw_edit,withdraw_del=:withdraw_del,cricket_overs_view=:cricket_overs_view,cricket_overs_create=:cricket_overs_create,cricket_overs_edit=:cricket_overs_edit,cricket_overs_del=:cricket_overs_del,cricket_overs_special=:cricket_overs_special,cricket_match_view=:cricket_match_view,cricket_match_create=:cricket_match_create, cricket_match_edit=:cricket_match_edit,cricket_match_del=:cricket_match_del,cricket_match_special=:cricket_match_special,cricket_toss_view=:cricket_toss_view,cricket_toss_create=:cricket_toss_create,cricket_toss_edit=:cricket_toss_edit,cricket_toss_del=:cricket_toss_del,cricket_toss_special=:cricket_toss_special,cricket_target_view=:cricket_target_view,cricket_target_special=:cricket_target_special,message_view=:message_view,cricket_session_view=:cricket_session_view,cricket_session_create=:cricket_session_create,cricket_session_edit=:cricket_session_edit,cricket_session_del=:cricket_session_del,cricket_session_special=:cricket_session_special WHERE admin_id=:id");
            $stmt->execute(['cricket_score_view'=>$cricket_score_view, 'cricket_score_create'=>$cricket_score_create, 'cricket_score_edit'=>$cricket_score_edit, 'cricket_score_del'=>$cricket_score_del, 'users_special'=>$users_special, 'admin_special'=>$admin_special, 'cricket_special'=>$cricket_special, 'users_view' => $users_view, 'users_create' => $users_create, 'users_edit' => $users_edit, 'users_del' => $users_del, 'admin_view' => $admin_view, 'admin_create' => $admin_create, 'admin_edit' => $admin_edit, 'admin_del' => $admin_del, 'cricket_view' => $cricket_view, 'cricket_create' => $cricket_create, 'cricket_edit' => $cricket_edit, 'cricket_del' => $cricket_del, 'teams_view' => $teams_view, 'teams_create' => $teams_create, 'teams_edit' => $teams_edit, 'teams_del' => $teams_del, 'category_view' => $category_view, 'category_create' => $category_create, 'category_edit' => $category_edit, 'category_del' => $category_del,'contact_view' => $contact_view,'contact_edit' => $contact_edit,'withdraw_view' => $withdraw_view,'withdraw_edit' => $withdraw_edit,'withdraw_del' => $withdraw_del,'cricket_overs_view' => $cricket_overs_view, 'cricket_overs_create' => $cricket_overs_create, 'cricket_overs_edit' => $cricket_overs_edit, 'cricket_overs_del' => $cricket_overs_del, 'cricket_overs_special'=>$cricket_overs_special,'cricket_match_view' => $cricket_match_view, 'cricket_match_create' => $cricket_match_create, 'cricket_match_edit' => $cricket_match_edit, 'cricket_match_del' => $cricket_match_del, 'cricket_match_special'=>$cricket_match_special,'cricket_toss_view' => $cricket_toss_view, 'cricket_toss_create' => $cricket_toss_create, 'cricket_toss_edit' => $cricket_toss_edit, 'cricket_toss_del' => $cricket_toss_del,'cricket_toss_special'=>$cricket_toss_special,'cricket_target_special'=>$cricket_target_special,'cricket_target_view'=>$cricket_target_view,'message_view'=>$message_view,'cricket_session_view' => $cricket_session_view, 'cricket_session_create' => $cricket_session_create, 'cricket_session_edit' => $cricket_session_edit, 'cricket_session_del' => $cricket_session_del,'cricket_session_special'=>$cricket_session_special,'id' => $id]);
            $_SESSION['success'] = 'Admin Permission Updated Successfully';

        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }
        $pdo->close();
    }
header('location: admin.php');

?>