    <style type="text/css">
      .nav-item:hover {
        background-color: #FEEF1D;
      }
    </style>

    <!-- Sidebar -->
    <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #193C7F;">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-business-time"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Dashboard</div>
      </a>

      <!-- Divider -->


      <!-- Query Menu-->
      <?php
      $role_id = $this->session->userdata('role_id');
      $querryMenu = " SELECT `user_menu`.`id`, `menu`
                            FROM `user_menu` JOIN `user_access_menu`
                              ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                           WHERE `user_access_menu`.`role_id` = $role_id
                        ORDER BY `user_access_menu`.`menu_id` ASC
                        ";
      $menu = $this->db->query($querryMenu)->result_array();
      ?>


      <!-- LOOPING MENU -->
      <?php foreach ($menu as $m) : ?>
        <div class="sidebar-heading" style="background-color: #FEEF1D; color: black; font-size: 13px; border-top-right-radius: 80px; border-bottom-right-radius: 80px;">
          <?= $m['menu']; ?>
        </div>

        <!-- Siapkan Sub Menu Sesuai Menu-->
        <?php
        $menuId = $m['id'];
        $querrySubMenu = "
                        SELECT *
                          FROM `user_sub_menu` JOIN `user_menu` 
                            ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                         WHERE `user_sub_menu`.`menu_id` = $menuId
                           AND `user_sub_menu`.`is_active` = 1 
                           ORDER BY `user_sub_menu`.`id` DESC
                        ";
        $subMenu = $this->db->query($querrySubMenu)->result_array();
        ?>

        <?php foreach ($subMenu as $sm) : ?>
          <!-- Nav Item - Dashboard -->
          <?php if ($title == $sm['title']) : ?>
            <li class="nav-item active" style="border-top-right-radius: 80px; border-bottom-right-radius: 80px; background-color: #FFD700; margin-top:3%;">
              <a class="nav-link" href="<?php echo base_url($sm['url']); ?>">
                <i class="<?php echo $sm['icon']; ?>" style="color: black;"></i>
                <span style="color: black;"><?php echo $sm['title']; ?></span></a>
            <?php else : ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url($sm['url']); ?>">
                <i class="<?php echo $sm['icon']; ?>"></i>
                <span><?php echo $sm['title']; ?></span></a>
            <?php endif; ?>
            </li>

          <?php endforeach; ?>

          <hr class="sidebar-divider">

        <?php endforeach; ?>


        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Keluar</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-md-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <small style="color: #DCDCDC; font-family: arial; margin: 1%; padding: 10px;">Version 1.1.4</small>

    </ul>
    <!-- End of Sidebar -->