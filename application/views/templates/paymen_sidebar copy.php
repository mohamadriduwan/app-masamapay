<!-- Sidebar main menu -->
<div class="sidebar-wrap  sidebar-pushcontent">
    <!-- Add overlay or fullmenu instead overlay -->
    <div class="closemenu text-muted">Close Menu</div>
    <div class="sidebar dark-bg">
        <!-- user information -->
        <div class="row my-3">
            <div class="col-12 ">
                <div class="card shadow-sm bg-opac text-white border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <figure class="avatar avatar-44 rounded-15">
                                    <?php
                                    $filejpg = base_url('assets/') . 'assets/img/profile/' . $user['image'];
                                    if (file_exists($filejpg)) {
                                        $saya = $user['image'];
                                    } else {
                                        $saya = "default.jpg";
                                    }
                                    ?>
                                    <img src="<?= base_url('assets/'); ?>/img/profile/<?= $saya; ?>" alt="">
                                </figure>
                            </div>
                            <div class="col px-0 align-self-center">
                                <p class="mb-1"><?= $user['name']; ?></p>
                                <p class="text-muted size-12">Kelas <?= $user['kelas']; ?></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- user emnu navigation -->

        <!-- QUERY MENU -->
        <?php
        $role_id = $this->session->userdata('role_id');
        $queryMenu = "SELECT `user_menu`.`id`, `menu`
                            FROM `user_menu` JOIN `user_access_menu`
                              ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                           WHERE `user_access_menu`.`role_id` = $role_id
                        ORDER BY `user_access_menu`.`menu_id` ASC
                        ";
        $menu = $this->db->query($queryMenu)->result_array();
        ?>

        <div class="row">
            <div class="col-12">
                <ul class="nav nav-pills">
                    <?php foreach ($menu as $m) : ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                                <div class="avatar avatar-40 rounded icon"><i class="fas fa-caret-square-down"></i></div>
                                <div class="col"><?= $m['menu']; ?></div>
                                <div class="arrow"><i class="bi bi-plus plus"></i> <i class="bi bi-dash minus"></i>
                                </div>
                            </a>
                            <?php
                            $menuId = $m['id'];
                            $querySubMenu = "SELECT *
                               FROM `user_sub_menu` JOIN `user_menu` 
                                 ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                              WHERE `user_sub_menu`.`menu_id` = $menuId
                                AND `user_sub_menu`.`is_active` = 1
                        ";
                            $subMenu = $this->db->query($querySubMenu)->result_array();
                            ?>
                            <ul class="dropdown-menu">
                                <?php foreach ($subMenu as $sm) : ?>
                                    <?php if ($title == $sm['title']) : ?>
                                        <li><a class="dropdown-item nav-link active" href="<?= base_url($sm['url']); ?>">
                                            <?php else : ?>
                                        <li><a class="dropdown-item nav-link" href="<?= base_url($sm['url']); ?>">
                                            <?php endif; ?>
                                            <div class="avatar avatar-40 rounded icon"><i class="<?= $sm['icon']; ?>"></i></div>
                                            <div class="col"><?= $sm['title']; ?></div>
                                            <div class="arrow"><i class="bi bi-chevron-right"></i>
                                            </div>
                                            </a></li>
                                    <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php endforeach; ?>
                    <li class="nav-item">
                        <a class="nav-link" href="signin.html" tabindex="-1">
                            <div class="avatar avatar-40 rounded icon"><i class="bi bi-box-arrow-right"></i></div>
                            <div class="col">Logout</div>
                            <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sidebar main menu ends -->

<!-- Begin page -->
<main class="h-100">

    <!-- Header -->
    <header class="header position-fixed">
        <div class="row">
            <div class="col-auto">
                <a href="javascript:void(0)" target="_self" class="btn btn-light btn-44 menu-btn">
                    <i class="bi bi-list"></i>
                </a>
            </div>
            <div class="col align-self-center text-center">
                <div class="logo-small">
                    <img src="<?= base_url('assets/') ?>img/lembaga/logo.jpg" alt="">
                    <h5>MasamaPAY</h5>
                </div>
            </div>
            <div class="col-auto">
                <a href="paymen/history" target="_self" class="btn btn-light btn-44">
                    <i class="bi bi-bell"></i>
                    <span class="count"></span>
                </a>
            </div>
        </div>
    </header>
    <!-- Header ends -->