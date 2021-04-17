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


</head>

<body>
    <div class="wrapper horizontal-layout-3">

        <div class="main-header no-box-shadow" data-background-color="blue2">
            <div class="nav-top">
                <div class="container d-flex flex-row">
                    <button class="navbar-toggler sidenav-toggler2 ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <i class="icon-menu"></i>
                        </span>
                    </button>

                    <!-- Logo Header -->
                    <a href="<?php echo base_url() ?>" class="logo d-flex align-items-center">
                        <!-- <img src="<?php echo base_url() ?>assets/img/logo.svg" alt="navbar brand" class="navbar-brand"> -->
                        <h5 class="text-white">SIGADIS Kab.Bogor</h5>
                    </a>
                    <!-- End Logo Header -->

                    <!-- Navbar Header -->
                    <nav class="navbar navbar-header-left navbar-expand-lg p-0">
                        <ul class="navbar-nav page-navigation pl-md-3">
                            <h3 class="title-menu d-flex d-lg-none">
                                Menu
                                <div class="close-menu"> <i class="flaticon-cross"></i></div>
                            </h3>
                            <li class="nav-item active">
                                <a class="nav-link" href="#">
                                    Beranda
                                </a>

                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Data Terpilah
                                </a>
                                <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="projects.html">P2TP2A</a>
                                    <a class="dropdown-item" href="<?php echo base_url() ?>Frontend/disnaker">DINAS KETENAGAKERJAAN</a>
                                    <a class="dropdown-item" href="projects.html">DINAS SOSIAL</a>
                                    <a class="dropdown-item" href="email-inbox.html">DINAS KESEHATAN</a>
                                    <a class="dropdown-item" href="email-detail.html">DINAS PENDIDIKAN</a>
                                    <a class="dropdown-item" href="email-compose.html">SETWAN</a>
                                    <a class="dropdown-item" href="messages.html">KEJAKSAAN NEGERI CIBINONG</a>
                                    <a class="dropdown-item" href="conversations.html">PENGADILAN NEGERI CIBINONG</a>
                                    <a class="dropdown-item" href="conversations.html">PENGADILAN AGAMA CIBINONG</a>
                                    <a class="dropdown-item" href="conversations.html">POLRES BOGOR</a>
                                    <a class="dropdown-item" href="conversations.html">BKPP KAB.BOGOR</a>
                                    <a class="dropdown-item" href="conversations.html">KESBANGPOL KAB.BOGOR</a>
                                    <a class="dropdown-item" href="conversations.html">LAPAS</a>
                                    <a class="dropdown-item" href="conversations.html">BPBD KAB.BOGOR</a>
                                    <a class="dropdown-item" href="conversations.html">DISDUKCAPIL KAB.BOGOR</a>
                                    <a class="dropdown-item" href="conversations.html">DATA PEKKA</a>
                                    <a class="dropdown-item" href="conversations.html">IDG</a>
                                    <a class="dropdown-item" href="conversations.html">IPG</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Perlindungan Anak
                                </a>

                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Data Tambahan
                                </a>
                                <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="starter-template.html">P2WKSS</a>
                                    <a class="dropdown-item" href="starter-template.html">PEMENANGAN APE</a>
                                    <a class="dropdown-item" href="starter-template.html">INDUSTRI RUMAHAN</a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="https://geoportal.bogorkab.go.id/bogapeta/apps/opsdashboard/index.html#/1044ff99ce5a49f1a7ae7a9cc533ec01">
                                    Geoportal
                                </a>

                            </li>

                        </ul>
                    </nav>

                    <!-- End Navbar -->
                </div>
            </div>
        </div>

        <div class="main-panel">

            <?php $this->load->view($frontend_page); ?>
        </div>
        <footer class="footer">
            <div class="container">
                <nav class="pull-left">
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
                </nav>
                <div class="copyright ml-auto">
                    2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="http://www.themekita.com">ThemeKita</a>
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

    <!-- jQuery Vector Maps -->
    <script src="<?php echo base_url() ?>assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

    <!-- Google Maps Plugin -->
    <script src="<?php echo base_url() ?>assets/js/plugin/gmaps/gmaps.js"></script>

    <!-- Dropzone -->
    <script src="<?php echo base_url() ?>assets/js/plugin/dropzone/dropzone.min.js"></script>

    <!-- Fullcalendar -->
    <script src="<?php echo base_url() ?>assets/js/plugin/fullcalendar/fullcalendar.min.js"></script>

    <!-- DateTimePicker -->
    <script src="<?php echo base_url() ?>assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>

    <!-- Bootstrap Tagsinput -->
    <script src="<?php echo base_url() ?>assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

    <!-- Bootstrap Wizard -->
    <script src="<?php echo base_url() ?>assets/js/plugin/bootstrap-wizard/bootstrapwizard.js"></script>

    <!-- jQuery Validation -->
    <script src="<?php echo base_url() ?>assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>

    <!-- Summernote -->
    <script src="<?php echo base_url() ?>assets/js/plugin/summernote/summernote-bs4.min.js"></script>

    <!-- Select2 -->
    <script src="<?php echo base_url() ?>assets/js/plugin/select2/select2.full.min.js"></script>

    <!-- Sweet Alert -->
    <script src="<?php echo base_url() ?>assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Owl Carousel -->
    <script src="<?php echo base_url() ?>assets/js/plugin/owl-carousel/owl.carousel.min.js"></script>

    <!-- Magnific Popup -->
    <script src="<?php echo base_url() ?>assets/js/plugin/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Atlantis JS -->
    <script src="<?php echo base_url() ?>assets/js/atlantis2.min.js"></script>

    <!-- Fonts and icons -->
    <script src="<?php echo base_url('assets/js/plugin/webfont/webfont.min.js') ?>"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
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
            $('#basic-datatables').DataTable({});

        });
    </script>


</body>

</html>