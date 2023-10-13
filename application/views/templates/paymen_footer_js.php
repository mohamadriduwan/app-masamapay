<!-- Footer ends-->
<script type="text/javascript">
    var rupiah = document.getElementById('jumlahpembayaran');
    rupiah.addEventListener('keyup', function(e) {
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
        rupiah.value = formatRupiah(this.value, 'Rp. ');
    });

    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
    }
</script>
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