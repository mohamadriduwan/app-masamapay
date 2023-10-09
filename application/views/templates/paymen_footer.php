<!-- Footer -->
<footer class="footer">
    <div class="container">
        <ul class="nav nav-pills nav-justified">
            <li class="nav-item">
                <a class="nav-link active" href="#">
                    <span>
                        <i class="nav-icon bi bi-house"></i>
                        <span class="nav-text">Home</span>
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(''); ?>paymen/history">
                    <span>
                        <i class="nav-icon bi bi-clock-history"></i>
                        <span class="nav-text">History</span>
                    </span>
                </a>
            </li>
            <li class="nav-item centerbutton">
                <div class="nav-link">
                    <span class="theme-radial-gradient">
                        <i class="close bi bi-x"></i>
                        <img src="<?= base_url(''); ?>assets/img/centerbutton.svg" class="nav-icon" alt="" />
                    </span>
                    <div class="nav-menu-popover justify-content-between">
                        <a href="<?= base_url(''); ?>paymen" type="button" class="btn btn-lg btn-icon-text">
                            <i class="bi bi-house size-32"></i><span>Home</span>
                        </a>

                        <a href="<?= base_url(''); ?>paymen/history" type="button" class="btn btn-lg btn-icon-text">
                            <i class="bi bi-clock-history size-32"></i><span>History</span>
                        </a>

                        <a href="<?= base_url(''); ?>paymen/profile" type="button" class="btn btn-lg btn-icon-text">
                            <i class="bi bi-person-fill size-32"></i><span>Profile</span>
                        </a>

                        <a href="<?= base_url(''); ?>paymen/setting" type="button" class="btn btn-lg btn-icon-text">
                            <i class="bi bi-gear size-32"></i><span>Setting</span>
                        </a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(''); ?>paymen/profile">
                    <span>
                        <i class="nav-icon bi bi-person-fill"></i>
                        <span class="nav-text">Profile</span>
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(''); ?>paymen/setting">
                    <span>
                        <i class="nav-icon bi bi-gear"></i>
                        <span class="nav-text">Setting</span>
                    </span>
                </a>
            </li>
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