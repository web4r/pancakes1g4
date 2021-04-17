<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>SIGADIS KAB.BOGOR</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?php echo base_url('assets/img/icon.ico') ?>" type="image/x-icon" />



    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/atlantis.css') ?>">


</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">

                <a href="<?php echo base_url() ?>Admin" class="logo">
                    <!-- <img src="<?php //echo base_url('assets/sigadis/kpppa2.png') 
                                    ?>" alt="navbar brand" class="navbar-brand "> -->
                    <p class="text-medium navbar-brand text-white">SIGADIS</p>
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>

                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="<?php echo base_url() ?>assets/sigadis/logo.png" alt="..." class="avatar-img rounded-circle-xxl">
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>

                                    <span class="user-level"><?php echo  $this->session->userdata('role_name') ?></span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <div class="clearfix"></div>

                            <div class="collapse in" id="collapseExample">
                                <ul class="nav">
                                    <li>
                                        <a href="#profile">
                                            <span class="link-collapse">My Profile</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-primary">
                        <li class="<?php if ($this->uri->segment(1) == "admin") {
                                        echo "nav-item active";
                                    } else {
                                        echo "nav-item ";
                                    } ?>">
                            <a href="<?php echo base_url('admin') ?>">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>

                            </a>
                        </li>



                        <?php if ($this->session->id_role == 1) : ?>
                            <!-- section navigation -->
                            <li class="nav-section">
                                <span class="sidebar-mini-icon">
                                    <i class="fa fa-ellipsis-h"></i>
                                </span>
                                <h4 class="text-section">INDIKATOR MAKRO</h4>
                            </li>

                            <li class="<?php if ($this->uri->segment(2) == "ipm") {
                                                echo "nav-item active";
                                            } else {
                                                echo "nav-item ";
                                            } ?>">
                                <a href="<?php echo base_url('Backend/ipm') ?>">
                                    <i class="fas fa-layer-group"></i>
                                    <span class="sub-item">IPM</span>
                                </a>
                            </li>
                            <li class="<?php if ($this->uri->segment(2) == "ipg") {
                                                echo "nav-item active";
                                            } else {
                                                echo "nav-item ";
                                            } ?>">
                                <a href="<?php echo base_url('Backend/ipg') ?>">
                                    <i class="fas fa-layer-group"></i>
                                    <span class="sub-item">IPG</span>
                                </a>
                            </li>
                        <?php endif; ?>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">DATA TERPILAH</h4>
                        </li>

                        <li class="<?php if ($this->uri->segment(2) == "p2tp2a") {
                                        echo "nav-item active";
                                    } else {
                                        echo "nav-item ";
                                    } ?>">
                            <a href="<?php echo base_url('Backend/p2tp2a') ?>">
                                <i class="fas fa-layer-group"></i>
                                <p>P2TP2A</p>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#base">
                                <i class="fas fa-layer-group"></i>
                                <p>DISNAKER</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="base">
                                <ul class="nav nav-collapse">
                                    <li class="<?php if ($this->uri->segment(3) == "tpak") {
                                                    echo "nav-item active";
                                                } else {
                                                    echo "nav-item ";
                                                } ?>">
                                        <a href=" <?php echo base_url('Backend/disnaker/tpak') ?>">
                                            <span class="sub-item">Tingkat Partisipasi Angkatan Kerja (TPAK)</span>
                                        </a>
                                    </li>
                                    <li class="<?php if ($this->uri->segment(3) == "kkm") {
                                                    echo "nav-item active";
                                                } else {
                                                    echo "nav-item ";
                                                } ?>">
                                        <a href="<?php echo base_url('Backend/disnaker/kkm') ?>">
                                            <span class="sub-item">Kepala Keluarga Miskin</span>
                                        </a>
                                    </li>

                                    <li class="<?php if ($this->uri->segment(3) == "akad") {
                                                    echo "nav-item active";
                                                } else {
                                                    echo "nav-item ";
                                                } ?>">
                                        <a href="<?php echo base_url('Backend/disnaker/akad') ?>">
                                            <span class="sub-item">Tenaga Kerja Migran Antar Kerja Antar Daerah (AKAD)</span>
                                        </a>
                                    </li>
                                    <li class="<?php if ($this->uri->segment(3) == "akan") {
                                                    echo "nav-item active";
                                                } else {
                                                    echo "nav-item ";
                                                } ?>">
                                        <a href="<?php echo base_url('Backend/disnaker/akan') ?>">
                                            <span class="sub-item">Tenaga Kerja Migran Antar Kerja Antar Negara (AKAN)</span>
                                        </a>
                                    </li>

                                    <li class="<?php if ($this->uri->segment(3) == "formal") {
                                                    echo "nav-item active";
                                                } else {
                                                    echo "nav-item ";
                                                } ?>">
                                        <a href="<?php echo base_url('Backend/disnaker/formal') ?>">
                                            <span class="sub-item">Pekerja Di Sektor Formal</span>
                                        </a>
                                    </li>

                                    <li class="<?php if ($this->uri->segment(3) == "informal") {
                                                    echo "nav-item active";
                                                } else {
                                                    echo "nav-item ";
                                                } ?>">
                                        <a href="<?php echo base_url('Backend/disnaker/informal') ?>">
                                            <span class="sub-item">Pekerja Di Sektor InFormal</span>
                                        </a>
                                    </li>

                                    <li class="<?php if ($this->uri->segment(3) == "umk") {
                                                    echo "nav-item active";
                                                } else {
                                                    echo "nav-item ";
                                                } ?>">
                                        <a href="<?php echo base_url('Backend/disnaker/umk') ?>">
                                            <span class="sub-item">Usaha Mikro dan Kecil (UMK)</span>
                                        </a>
                                    </li>

                                    <li class="<?php if ($this->uri->segment(3) == "koperasi") {
                                                    echo "nav-item active";
                                                } else {
                                                    echo "nav-item ";
                                                } ?>">
                                        <a href="<?php echo base_url('Backend/disnaker/koperasi') ?>">
                                            <span class="sub-item">Koperasi</span>
                                        </a>
                                    </li>
                                    <li class="<?php if ($this->uri->segment(3) == "kredit") {
                                                    echo "nav-item active";
                                                } else {
                                                    echo "nav-item ";
                                                } ?>">
                                        <a href="<?php echo base_url('Backend/disnaker/kredit') ?>">
                                            <span class="sub-item">Kredit</span>
                                        </a>
                                    </li>

                                    <li class="<?php if ($this->uri->segment(3) == "jpa") {
                                                    echo "nav-item active";
                                                } else {
                                                    echo "nav-item ";
                                                } ?>">
                                        <a href="<?php echo base_url('Backend/disnaker/jpa') ?>">
                                            <span class="sub-item">Jumlah Pekerja Anak </span>
                                        </a>
                                    </li>

                                    <li class="<?php if ($this->uri->segment(3) == "jpata") {
                                                    echo "nav-item active";
                                                } else {
                                                    echo "nav-item ";
                                                } ?>">
                                        <a href="<?php echo base_url('Backend/disnaker/jpata') ?>">
                                            <span class="sub-item">Jumlah Pekerja Rumah Tangga Anak </span>
                                        </a>
                                    </li>

                                    <li class="<?php if ($this->uri->segment(3) == "djsp") {
                                                    echo "nav-item active";
                                                } else {
                                                    echo "nav-item ";
                                                } ?>">
                                        <a href="<?php echo base_url('Backend/disnaker/djsp') ?>">
                                            <span class="sub-item">Daftar Jumlah Serikat Pekerja </span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Setting</h4>
                        </li>
                        <?php if ($this->session->id_role == 1) : ?>
                            <li class="<?php if ($this->uri->segment(2) == "users") {
                                                echo "nav-item active";
                                            } else {
                                                echo "nav-item ";
                                            } ?>">
                                <a href="<?php echo base_url('Admin/users') ?>">
                                    <i class="fas fa-users"></i>
                                    <p>Users</p>

                                </a>
                            </li>
                        <?php endif; ?>
                        <li class="nav-item">
                            <a href="<?php echo base_url('login/logout') ?>">
                                <i class="fas fa-sign-out-alt"></i>
                                <p>Logout</p>

                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="container">
                <?php $this->load->view($backend_page) ?>
            </div>
            <footer class="footer">
                <div class="container-fluid">
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
    <script src="<?php echo base_url() ?>assets/js/atlantis.min.js"></script>

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
        Circles.create({
            id: 'circles-1',
            radius: 45,
            value: 60,
            maxValue: 100,
            width: 7,
            text: 5,
            colors: ['#f1f1f1', '#FF9E27'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        })

        Circles.create({
            id: 'circles-2',
            radius: 45,
            value: 70,
            maxValue: 100,
            width: 7,
            text: 36,
            colors: ['#f1f1f1', '#2BB930'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        })

        Circles.create({
            id: 'circles-3',
            radius: 45,
            value: 40,
            maxValue: 100,
            width: 7,
            text: 12,
            colors: ['#f1f1f1', '#F25961'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        })

        var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

        var mytotalIncomeChart = new Chart(totalIncomeChart, {
            type: 'bar',
            data: {
                labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
                datasets: [{
                    label: "Total Income",
                    backgroundColor: '#ff9e27',
                    borderColor: 'rgb(23, 125, 255)',
                    data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false,
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            display: false //this will remove only the label
                        },
                        gridLines: {
                            drawBorder: false,
                            display: false
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            drawBorder: false,
                            display: false
                        }
                    }]
                },
            }
        });

        $('#lineChart').sparkline([105, 103, 123, 100, 95, 105, 115], {
            type: 'line',
            height: '70',
            width: '100%',
            lineWidth: '2',
            lineColor: '#ffa534',
            fillColor: 'rgba(255, 165, 52, .14)'
        });
    </script>
    < /body> < /html>