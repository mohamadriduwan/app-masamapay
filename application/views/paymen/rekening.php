        <!-- main page content -->
        <div class="main-container container">

            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="main-container container">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col align-self-center ps-0">
                                        <p style="font-size: 10px;"><span><b>Transfer Sebelum:</b>
                                                <br><i>18 Oktober 2023, 16:25:59 WIB</i></br>
                                        </p>
                                    </div>
                                    <div class="col-auto">
                                        <center>
                                            <div class="tag bg border-danger text-white py-1 px-2">
                                                <span id="demo" style="color: red; font-weight: bold"><b></b></style=>
                                                </span>
                                            </div>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
                <?php $nominal = "20000000"; ?>
                <div class="main-container container">
                    <div class="card-body">
                        <div class="row">
                            <div class="col align-self-center ps-0">
                                <p style="font-size: 12px; margin-left: 12px;">Nominal Transfer</p>
                                <p style="font-size: 16px; margin-left: 12px; margin-top: 8px; margin-bottom: 8px;"><span><b id="myText2"><?= rupiah(str_replace(".", "", $nominal)); ?></b></span></p>
                            </div>
                            <div class="col-auto" style="margin-top: 16px; margin-bottom: 8px;">
                                <center>
                                    <div class="tag border-danger text-white py-1 px-2">
                                        <a href="#" onclick="copyContent2()" <i style="color: red;">Salin</i>
                                        </a>
                                    </div>
                                </center>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="main-container container">
                    <div class="alert alert-warning ">
                        <p style="font-size: 14px; text-align: center;">Silahkan bayar tagihan ini sebelum membuat Virtual Account lagi</p>
                    </div>
                </div>
                <center>
                    <div class="col align-self-center ps-0 mb-4">
                        <figure class="avatar avatar-100">
                            <img src="https://s3.amazonaws.com/gt7sp-prod/decal/00/44/77/6052868698532774400_1.png" alt="">
                        </figure>
                        <p class="text size-14">Nomor BRI Virtual Account</p>
                        <p style="font-size: 16px;"><span><b id="myText">3236260010127650</b></span></p>
                        <div class="col-auto" style="margin-top: 8px; margin-bottom: 8px;">
                            <div class="tag bg border-danger text-white py-1 px-2">
                                <a href="#" onclick="copyContent()" <i style="color: red;">Salin Nomor</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </center>
                <div class="row mb-4">
                    <center>
                        <div class="col-10 ">
                            <button class="btn btn-default btn-lg shadow-sm w-100" onClick="this.disabled=true; this.value='Sending…'; this.form.submit();">
                                Saya Sudah Transfer
                            </button>
                        </div>
                    </center>
                </div>
                <!-- PWA app install toast message -->

                <div class="position-fixed bottom-0 start-50 translate-middle-x  z-index-10 col-10 hideonprogressbar">
                    <div class="toast mb-3" role="alert" aria-live="assertive" aria-atomic="true" id="toastinstall" data-bs-animation="true">
                        <div class="toast-body">
                            <div class="row">
                                <center>
                                    <div class="col-10">
                                        3236260010127650<br>
                                        Berhasil Dicopy
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="position-fixed bottom-0 start-50 translate-middle-x  z-index-10 col-10">
                    <div class="toast mb-3" role="alert" aria-live="assertive" aria-atomic="true" id="toastinstall2" data-bs-animation="true">
                        <div class="toast-body">
                            <div class="row">
                                <center>
                                    <div class="col-10">
                                        <?= $nominal; ?><br>
                                        Berhasil Dicopy
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>


                <script>
                    let text = document.getElementById('myText').innerHTML;
                    const copyContent = async () => {
                        try {
                            await navigator.clipboard.writeText(text);
                            console.log('Content copied to clipboard');
                            var popup = document.getElementById("toastinstall");
                            popup.classList.toggle("show");

                            const myInterval = setInterval(myTimer, 1000);

                            function myTimer() {
                                var popup = document.getElementById("toastinstall");
                                popup.classList.toggle("show");
                                clearInterval(myInterval);
                            }

                        } catch (err) {
                            console.error('Failed to copy: ', err);
                        }
                    }

                    let text2 = document.getElementById('myText2').innerHTML.replace(/[^0-9]+/g, '');

                    const copyContent2 = async () => {
                        try {
                            await navigator.clipboard.writeText(text2);
                            console.log('Content copied to clipboard');
                            var popup = document.getElementById("toastinstall2");
                            popup.classList.toggle("show");

                            const myInterval = setInterval(myTimer, 1000);

                            function myTimer() {
                                var popup = document.getElementById("toastinstall2");
                                popup.classList.toggle("show");
                                clearInterval(myInterval);
                            }
                        } catch (err) {
                            console.error('Failed to copy: ', err);
                        }
                    }
                </script>

                <br>
            </div>
            <!-- main page content ends -->
        </div>


        <script>
            // Mengatur waktu akhir perhitungan mundur
            var countDownDate = new Date("2023-10-18 08:59:19").getTime();

            // Memperbarui hitungan mundur setiap 1 detik
            var x = setInterval(function() {

                // Untuk mendapatkan tanggal dan waktu hari ini
                var now = new Date().getTime();

                // Temukan jarak antara sekarang dan tanggal hitung mundur
                var distance = countDownDate - now;

                // Perhitungan waktu untuk hari, jam, menit dan detik
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                if (days > 0) {
                    if ((days + "").length === 1) {
                        days = "0" + days + ":";
                    } else {
                        days = days + ":";
                    }
                } else {
                    days = ""
                }


                if ((hours + "").length === 1) {
                    hours = "0" + hours + ":";
                } else {
                    hours = hours + ":";
                }

                if ((seconds + "").length === 1) {
                    seconds = "0" + seconds;
                }

                if ((minutes + "").length === 1) {
                    minutes = "0" + minutes + ":";
                } else {
                    minutes = minutes + ":";
                }


                // Keluarkan hasil dalam elemen dengan id = "demo"
                document.getElementById("demo").innerHTML = days + hours +
                    minutes + seconds;



                // Jika hitungan mundur selesai, tulis beberapa teks 
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("demo").innerHTML = "EXPIRED";
                }
            }, 1000);
        </script>
        </div>
        </main>