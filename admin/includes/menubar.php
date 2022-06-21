<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo (!empty($admin['admin_photo'])) ? '../../images/'.$admin['admin_photo'] : '../../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $admin['admin_name']; ?></p>
        <a><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">REPORTS</li>
      <li><a href="../home/home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
       <?php if($admin['contact_view'] || $admin['withdraw_view']){ ?>
          <li class="header">REQUESTS</li>
        <?php } ?>
        <?php if($admin['contact_view']){ ?>
        <li class="treeview">
      <a href="#">
       <i class="fa fa-phone"></i> 
          <span>Contacts</span> <b style="color:RED;"> <?php 
        foreach($conn->query('SELECT COUNT(*) FROM contact WHERE contact_view=0') as $row) {
            if($row['COUNT(*)']!=0)
echo $row['COUNT(*)']; }?></b>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="../contact/contact.php"><i class="fa fa-eye-slash"></i> New Contact</a></li>
          <li><a href="../contact/contact_view.php"><i class="fa fa-eye"></i> Viewed Contact</a></li>
     </ul>
    </li>
        <?php } ?>
         <?php if($admin['withdraw_view']){ ?>
              <li class="treeview">
      <a href="#">
       <i class="fa fa-refresh"></i> 
          <span>Withdraw</span> <b style="color:RED;"> <?php 
        foreach($conn->query('SELECT COUNT(*) FROM withdraw WHERE withdrawn=0') as $row) {
            if($row['COUNT(*)']!=0)
echo $row['COUNT(*)']; }?></b>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="../withdraw/withdraw.php"><i class="fa fa-eye-slash"></i> New Withdraw Requests</a></li>
          <li><a href="../withdraw/withdraw_view.php"><i class="fa fa-eye"></i> Withdrawn Requests</a></li>
          <li><a href="../withdraw/withdraw_delete.php"><i class="fa fa-trash"></i> Withdraw Deleted Requests</a></li>
     </ul>
    </li> <?php } ?>
        
      <li class="header">MANAGE</li>
        <?php if($admin['users_view']){ ?>
      <li><a href="../users/users.php"><i class="fa fa-users"></i> <span>Users</span></a></li>
        <?php }
        if($admin['admin_view']){?>
      <li><a href="../admin/admin.php"><i class="fa fa-grav"></i> <span>Admin</span></a></li>
        <?php } ?>  
        
         <?php if($admin['cricket_view'] || $admin['cricket_overs_view'] || $admin['cricket_target_view'] || $admin['cricket_match_view'] || $admin['cricket_toss_view'] ){ ?>
        <li class="treeview">
      <a href="#">
       <i class="fa fa-list"></i> 
          <span>Cricket</span> 
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
           <?php if($admin['cricket_view']){ ?>
           <li><a href="../cricket/cricket.php"><i class="fa fa-compress"></i> Cricket Match/4s 6s</a></li>
          <?php } ?>
          <?php if($admin['cricket_overs_view']){ ?>
        <li><a href="../cricket/overs.php"><i class="fa fa-globe"></i> Overs</a></li>
           <?php } ?>
           <?php if($admin['cricket_session_view']){ ?>
        <li><a href="../cricket/session.php"><i class="fa fa-ravelry"></i> Session</a></li>
           <?php } ?>
           <?php if($admin['cricket_target_view']){ ?>
        <li><a href="../cricket/target.php"><i class="fa fa-bullseye"></i> Target</a></li>
           <?php } ?>
           <?php if($admin['cricket_match_view']){ ?>
        <li><a href="../cricket/match.php"><i class="fa fa-trophy"></i> Match</a></li>
           <?php } ?>
           <?php if($admin['cricket_toss_view']){ ?>
        <li><a href="../cricket/toss.php"><i class="fa fa-eercast"></i> Toss</a></li>
           <?php } ?>
     </ul>
    </li>
        <?php } ?>
        
    
        <?php if($admin['teams_view']){ ?>
         <li><a href="../teams/teams.php"><i class="fa fa-users"></i><span>Teams</span></a></li>
        <?php }
        if($admin['category_view']){?>
          <li><a href="../category/category.php"><i class="fa fa-sitemap"></i> <span>Category</span></a></li>
    <?php } if($admin['message_view']){?>
          <li><a href="../message/message.php"><i class="fa fa-comment"></i> <span>Message</span></a></li>
    <?php }?>
      </ul>
  </section>
  <!-- /.sidebar -->
</aside>