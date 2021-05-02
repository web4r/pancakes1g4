<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>SIGADIS KAB.BOGOR</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?php echo base_url('assets/img/icon.ico') ?>" type="image/x-icon" />



    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/atlantis2.css') ?>">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <style>
        body * {
            font-family: 'Montserrat', sans-serif;

        }
    </style>
</head>

<body>
    <div class="wrapper horizontal-layout-3">



        <div class="bg-primary-gradient pt-4 pb-5">
            <div class="container text-white py-2">
                <div class="d-flex align-items-center">
                    <div class="mr-3">
                        <h1 class="mb-3">SIGADIS</h1>
                        <h5 class="op-7 mb-3">SISTEM INFORMASI PENGADUAN DAN DATA INFORMASI GENDERS.</h5>
                    </div>
                </div>
                <a href="<?php echo base_url() ?>" class="btn btn-danger btn-round">Beranda</a>
                <a href="<?php echo base_url() ?>login" class="btn btn-dark btn-round">Login</a>
            </div>
        </div>

        <div class="main-panel">

            <?php $this->load->view($frontend_page); ?>
        </div>
        <footer class="footer">
            <div class="container">
                <!-- <nav class="pull-left">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="http://www.themekita.com">
                                ThemeKita
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Help
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav> -->
                <div class="copyright ml-auto">
                    Copyright <?php echo date('Y') ?>, <i class="fa fa-heart heart text-danger"></i> by <a href="#">SIGADIS Kabupaten Bogor</a>
                </div>
            </div>
        </footer>

    </div>
    <!--   Core JS Files   -->
    <script src="<?php echo base_url() ?>assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/core/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery UI -->
    <script src="<?php echo base_url() ?>assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="<?php echo base_url() ?>assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Moment JS -->
    <script src="<?php echo base_url() ?>assets/js/plugin/moment/moment.min.js"></script>

    <!-- Chart JS -->
    <script src="<?php echo base_url() ?>assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="<?php echo base_url() ?>assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="<?php echo base_url() ?>assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="<?php echo base_url() ?>assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="<?php echo base_url() ?>assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- Bootstrap Toggle -->
    <script src="<?php echo base_url() ?>assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>


    <!-- Select2 -->
    <script src="<?php echo base_url() ?>assets/js/plugin/select2/select2.full.min.js"></script>


    <!-- Magnific Popup -->
    <script src="<?php echo base_url() ?>assets/js/plugin/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Atlantis JS -->
    <script src="<?php echo base_url() ?>assets/js/atlantis2.min.js"></script>

    <!-- Fonts and icons -->
    <script src="<?php echo base_url('assets/js/plugin/webfont/webfont.min.js') ?>"></script>
    <script>
        WebFont.load({

            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['<?php echo base_url() ?>assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            // disnaker
            $('#basic-datatables').DataTable({});
            $('#kkm').DataTable({});
            $('#akad').DataTable({});
            $('#akan').DataTable({});
            $('#formal').DataTable({});
            $('#informal').DataTable({});
            $('#umk').DataTable({});
            $('#koperasi').DataTable({});
            $('#kredit').DataTable({});
            $('#jpa').DataTable({});
            $('#jpata').DataTable({});
            $('#djsp').DataTable({});

            // dinsos
            $('#dinsos_kkm').DataTable({});
            $('#dinsos_pendidikan').DataTable({});
            $('#dinsos_aktifitas').DataTable({});
            $('#dinsos_sakit').DataTable({});
            $('#dinsos_dmp').DataTable({});
            $('#dinsos_dma').DataTable({});
            $('#dinsos_jaj').DataTable({});
            $('#dinsos_jta').DataTable({});
            $('#dinsos_abk').DataTable({});

            // dinkes
            $('#dinkes_ahp').DataTable({});
            $('#dinkes_kim').DataTable({});
            $('#dinkes_pkim').DataTable({});
            // $('#dinkes_cpp').DataTable({});
            // $('#dinkes_kih').DataTable({});
            $('#dinkes_tetanus').DataTable({});
            // $('#dinkes_zat').DataTable({});
            // $('#dinkes_kb').DataTable({});
            // $('#dinkes_napza').DataTable({});




        });
    </script>

    <script>
        $(document).ready(function() {
            $.ajax({
                url: "http://localhost/sigadisrest/api/data/statistic_p2tp2a",
                method: "GET",
                success: function(data) {
                    console.log(data);
                    var label = [];
                    var value = [];
                    for (var i in data) {
                        label.push(data[i].jenis_kekerasan);
                        value.push(data[i].jumlahdata);
                    }
                    var ctx = document.getElementById('lineChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: label,
                            datasets: [{
                                label: 'Jumlah Kasus',
                                data: [12, 19, 3, 5, 2, 3],
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1,
                                data: value
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            },
                        }
                    });


                }
            });
        });
    </script>


</body>

</html>