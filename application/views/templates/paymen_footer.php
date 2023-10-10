<!-- Footer -->
<footer class="footer">
    <div class="container">
        <ul class="nav nav-pills nav-justified">
            <?php
            $menuId = 4;
            $querySubMenu = "SELECT *
               FROM `user_sub_menu` JOIN `user_menu` 
                 ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
              WHERE `user_sub_menu`.`menu_id` = $menuId
                AND `user_sub_menu`.`is_active` = 1
        ";
            $subMenu = $this->db->query($querySubMenu)->result_array();
            ?>
            <?php foreach ($subMenu as $sm) : ?>
                <li class="nav-item">
                    <?php if ($title == $sm['title']) : ?>
                        <a class="nav-link active" href="<?= base_url($sm['url']); ?>">
                        <?php else : ?>
                            <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                            <?php endif; ?>
                            <span>
                                <i class="<?= $sm['icon']; ?>"></i>
                                <span class="nav-text"><?= $sm['title']; ?></span>
                            </span>
                            </a>
                </li>
            <?php endforeach; ?>

        </ul>
    </div>
</footer>
<!-- Footer ends-->

<!-- Required jquery and libraries -->
<script src="<?= base_url(''); ?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url(''); ?>assets/js/popper.min.js"></script>
<script src="<?= base_url(''); ?>assets/vendor/bootstrap-5/js/bootstrap.bundle.min.js"></script>

<!-- cookie js -->
<script src="<?= base_url(''); ?>assets/js/jquery.cookie.js"></script>

<!-- Customized jquery file  -->
<script src="<?= base_url(''); ?>assets/js/mainmobile.js"></script>
<script src="<?= base_url(''); ?>assets/js/color-scheme.js"></script>

<!-- PWA app service registration and works -->
<script src="<?= base_url(''); ?>assets/js/pwa-services.js"></script>

<!-- Chart js script -->
<script src="<?= base_url(''); ?>assets/vendor/chart-js-3.3.1/chart.min.js"></script>

<!-- Progress circle js script -->
<script src="<?= base_url(''); ?>assets/vendor/progressbar-js/progressbar.min.js"></script>

<!-- swiper js script -->
<script src="<?= base_url(''); ?>assets/vendor/swiperjs-6.6.2/swiper-bundle.min.js"></script>

<!-- page level custom script -->
<script src="<?= base_url(''); ?>assets/js/app.js"></script>

</body>

</html>