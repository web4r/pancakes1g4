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
                            <!-- IPM -->
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
                            <!-- IPG -->
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

                            <li class="nav-section">
                                <span class="sidebar-mini-icon">
                                    <i class="fa fa-ellipsis-h"></i>
                                </span>
                                <h4 class="text-section">DATA TERPILAH</h4>
                            </li>
                            <!-- PTTP2A -->
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
                            <!-- DISNAKER -->
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#base">
                                    <i class="fas fa-layer-group"></i>
                                    <p>Disnaker</p>
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
                            <!-- KEJAKSAAN -->
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#kejaksaan">
                                    <i class="fas fa-layer-group"></i>
                                    <p>Kejaksaan</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="kejaksaan">
                                    <ul class="nav nav-collapse">
                                        <li class="<?php if ($this->uri->segment(3) == "jaksa") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/kejaksaan/jaksa') ?>">
                                                <span class="sub-item">Data Jaksa</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($this->uri->segment(3) == "hakim") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href="<?php echo base_url('Backend/kejaksaan/hakim') ?>">
                                                <span class="sub-item">Data Hakim</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- PENGADILAN NEGERI -->
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#pn">
                                    <i class="fas fa-layer-group"></i>
                                    <p>Pengadilan Negeri</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="pn">
                                    <ul class="nav nav-collapse">
                                        <li class="<?php if ($this->uri->segment(3) == "jaksa") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/pn/jaksa') ?>">
                                                <span class="sub-item">Data Jaksa</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($this->uri->segment(3) == "hakim") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href="<?php echo base_url('Backend/pn/hakim') ?>">
                                                <span class="sub-item">Data Hakim</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- PENGADILAN AGAMA -->
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#agama">
                                    <i class="fas fa-layer-group"></i>
                                    <p>Pengadilan Agama</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="agama">
                                    <ul class="nav nav-collapse">
                                        <li class="<?php if ($this->uri->segment(3) == "jaksa") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/P_agama/jaksa') ?>">
                                                <span class="sub-item">Data Jaksa</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($this->uri->segment(3) == "hakim") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href="<?php echo base_url('Backend/P_agama/hakim') ?>">
                                                <span class="sub-item">Data Hakim</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- DISDUKCAPIL -->
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#disduk">
                                    <i class="fas fa-layer-group"></i>
                                    <p>Disdukcapil</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="disduk">
                                    <ul class="nav nav-collapse">
                                        <li class="<?php if ($this->uri->segment(3) == "akte") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/disduk/akte') ?>">
                                                <span class="sub-item">Data Akte Kelahiran</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            <!-- BPBD -->
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#bpbd">
                                    <i class="fas fa-layer-group"></i>
                                    <p>BPBD</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="bpbd">
                                    <ul class="nav nav-collapse">
                                        <li class="<?php if ($this->uri->segment(3) == "pak") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/bpbd/pak') ?>">
                                                <span class="sub-item">Pengungsi Akibat Konflik</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "pab") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/bpbd/pab') ?>">
                                                <span class="sub-item">Pengungsi Akibat Bencana</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($this->uri->segment(3) == "akb") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/bpbd/akb') ?>">
                                                <span class="sub-item">Anak Korban Bencana</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>

                            <!-- BIDANG HUKUM -->
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#hukum">
                                    <i class="fas fa-layer-group"></i>
                                    <p>Bidang Hukum</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="hukum">
                                    <ul class="nav nav-collapse">
                                        <li class="<?php if ($this->uri->segment(3) == "pendidikan") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/hukum/pendidikan') ?>">
                                                <span class="sub-item">Penghuni Lapas Menurut Jenis Lapas & Pendidikan</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "usia") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/hukum/usia') ?>">
                                                <span class="sub-item">Penghuni Lapas Menurut Jenis Lapas & Usia</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($this->uri->segment(3) == "kasus") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/hukum/kasus') ?>">
                                                <span class="sub-item">Penghuni Lapas Menurut Jenis Lapas & Kasus</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($this->uri->segment(3) == "lapas") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/hukum/lapas') ?>">
                                                <span class="sub-item">Jumlah Data Jenis Lapas</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            <!-- KESBANGPOL -->
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#kesbangpol">
                                    <i class="fas fa-layer-group"></i>
                                    <p>Kesbangpol</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="kesbangpol">
                                    <ul class="nav nav-collapse">

                                        <li class="<?php if ($this->uri->segment(3) == "desa") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/kesbangpol/desa') ?>">
                                                <span class="sub-item">Daftar Jumlah Badan Musyawarah Desa</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "pangkat") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/kesbangpol/pangkat') ?>">
                                                <span class="sub-item">Daftar Jumlah Badan Pertimbangan dan Pangkat</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "pengurus") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/kesbangpol/pengurus') ?>">
                                                <span class="sub-item">Daftar Jumlah Badan Pertimbangan dan Pangkat</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "partai") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/kesbangpol/partai') ?>">
                                                <span class="sub-item">Daftar Jumlah Partai Harian</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "organisasi") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/kesbangpol/organisasi') ?>">
                                                <span class="sub-item">Daftar Jumlah Pengurus Oraganisasi</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            <!-- SETWAN -->
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#setwan">
                                    <i class="fas fa-layer-group"></i>
                                    <p>Setwan</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="setwan">
                                    <ul class="nav nav-collapse">

                                        <li class="<?php if ($this->uri->segment(3) == "partai") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/setwan/partai') ?>">
                                                <span class="sub-item">Angka DPR-RI Menurut Partai</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "komisi") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/setwan/komisi') ?>">
                                                <span class="sub-item">Angka DPR-RI Menurut Komisi</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "prov_partai") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/setwan/prov_partai') ?>">
                                                <span class="sub-item">Angka DPRD Provinsi Menurut Partai</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "prov_komisi") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/setwan/prov_komisi') ?>">
                                                <span class="sub-item">Angka DPRD Provinsi Menurut Komisi</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "kab_partai") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/setwan/kab_partai') ?>">
                                                <span class="sub-item">Angka DPRD Kabupaten Menurut Partai</span>
                                            </a>
                                        </li>


                                        <li class="<?php if ($this->uri->segment(3) == "kab_komisi") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/setwan/kab_komisi') ?>">
                                                <span class="sub-item">Angka DPRD Kabupaten Menurut Komisi</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- DISDIK -->
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#disdik">
                                    <i class="fas fa-layer-group"></i>
                                    <p>Disdik</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="disdik">
                                    <ul class="nav nav-collapse">

                                        <li class="<?php if ($this->uri->segment(3) == "disdik_apk") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/disdik/disdik_apk') ?>">
                                                <span class="sub-item">Angka Partisipasi Kasar (APK) Menurut Jenjang Pendidikan SD, SLTP dan SLTA</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "disdik_aps") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/disdik/disdik_aps') ?>">
                                                <span class="sub-item">Angka Partisipasi Sekolah (APS) Menurut Kelompok Umur (7-12, 13-15 dan 16-18 tahun)</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "disdik_apm") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/disdik/disdik_apm') ?>">
                                                <span class="sub-item">Angka Partisipasi Murni (APM) Menurut Jenjang Pendidikan SD, SLTP Dan SLTA</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($this->uri->segment(3) == "disdik_jenjang") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/disdik/disdik_jenjang') ?>">
                                                <span class="sub-item">Angka Putus Sekolah Menurut Jenjang Pendidikan SD, SLTP Dan SLTA</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "disdik_sertifikat") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/disdik/disdik_sertifikat') ?>">
                                                <span class="sub-item">Angka Sertifikat Guru SD, SLTP Dan SLTA</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "disdik_paket") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/disdik/disdik_paket') ?>">
                                                <span class="sub-item">Angka Lulus Paket SD, SLTP Dan SLTA</span>
                                            </a>
                                        </li>


                                        <li class="<?php if ($this->uri->segment(3) == "disdik_sekolah") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/disdik/disdik_sekolah') ?>">
                                                <span class="sub-item">Rata-Rata Lama Sekolah</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "disdik_pt") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/disdik/disdik_pt') ?>">
                                                <span class="sub-item">Angka Data Pendididkan Beasiswa SLTA dan Perguruan Tinggi</span>
                                            </a>
                                        </li>


                                    </ul>
                                </div>
                            </li>
                            <!-- DINKES -->
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#dinkes">
                                    <i class="fas fa-layer-group"></i>
                                    <p>Dinkes</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="dinkes">
                                    <ul class="nav nav-collapse">

                                        <li class="<?php if ($this->uri->segment(3) == "dinkes_ahp") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinkes/dinkes_ahp') ?>">
                                                <span class="sub-item">Angka Harapan Hidup</span>
                                            </a>
                                        </li>


                                        <li class="<?php if ($this->uri->segment(3) == "disdik_kim") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinkes/dinkes_kim') ?>">
                                                <span class="sub-item">Jumlah Kematian Ibu Melahirkan</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "disdik_pkim") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinkes/dinkes_pkim') ?>">
                                                <span class="sub-item">Penyebab Kematian Ibu Melahirkan</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "disdik_cpp") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinkes/dinkes_cpp') ?>">
                                                <span class="sub-item">Cakupan Pertolongan Persalinan</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "dinkes_kih") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinkes/dinkes_kih') ?>">
                                                <span class="sub-item">Kunjungan Ibu Hamil (K1/K4) </span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "dinkes_tetanus") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinkes/dinkes_tetanus') ?>">
                                                <span class="sub-item">Imunisasi Tetanus </span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "dinkes_zat") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinkes/dinkes_zat') ?>">
                                                <span class="sub-item">Pemberian Zat Besi </span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "dinkes_kb") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinkes/dinkes_kb') ?>">
                                                <span class="sub-item">Keluarga Berencana </span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "dinkes_napza") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinkes/dinkes_napza') ?>">
                                                <span class="sub-item">NAPZA </span>
                                            </a>
                                        </li>




                                    </ul>
                                </div>
                            </li>
                            <!-- DINSOS -->
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#dinsos">
                                    <i class="fas fa-layer-group"></i>
                                    <p>Dinsos</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="dinsos">
                                    <ul class="nav nav-collapse">

                                        <li class="<?php if ($this->uri->segment(3) == "dinsos_kkm") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinsos/dinsos_kkm') ?>">
                                                <span class="sub-item">Kepala Keluarga Miskin</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "dinsos_pendidikan") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinsos/dinsos_pendidikan') ?>">
                                                <span class="sub-item">Data Penduduk Lansia Menurut Pendidikan</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "dinsos_aktifitas") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinsos/dinsos_aktifitas') ?>">
                                                <span class="sub-item">Data Penduduk Lansia Menurut Aktifitas</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "dinsos_sakit") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinsos/dinsos_sakit') ?>">
                                                <span class="sub-item">Data Penduduk Lansia yang sakit </span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "dinsos_dmp") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinsos/dinsos_dmp') ?>">
                                                <span class="sub-item">Data Penyandang Disablitas Menurut Pendidikan </span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "dinsos_dma") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinsos/dinsos_dma') ?>">
                                                <span class="sub-item">Data Penyandang Disablitas Menurut Aktifitas</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "dinsos_jaj") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinsos/dinsos_jaj') ?>">
                                                <span class="sub-item">Jumlah Anak Jalan</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "dinsos_jta") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinsos/dinsos_jta') ?>">
                                                <span class="sub-item">Jumlah Terlantar Anak </span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "dinsos_abk") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinsos/dinsos_abk') ?>">
                                                <span class="sub-item">Data Anak Berkebutuhan Khusus</span>
                                            </a>
                                        </li>



                                    </ul>
                                </div>
                            </li>
                            <!-- BKPP -->
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#bkpp">
                                    <i class="fas fa-layer-group"></i>
                                    <p>BKPP</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="bkpp">
                                    <ul class="nav nav-collapse">

                                        <li class="<?php if ($this->uri->segment(3) == "bkpp_pusat") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/bkpp/bkpp_pusat') ?>">
                                                <span class="sub-item">Daftar Jumlah PNS Pusat</span>
                                            </a>
                                        </li>


                                        <li class="<?php if ($this->uri->segment(3) == "bkpp_golongan") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/bkpp/bkpp_golongan') ?>">
                                                <span class="sub-item">Daftar Jumlah PNS Pusat Menurut Golongan</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "bkpp_kabupaten") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/bkpp/bkpp_kabupaten') ?>">
                                                <span class="sub-item">Daftar Jumlah PNS Kabupaten</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "bkpp_kab_gol") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/bkpp/bkpp_kab_gol') ?>">
                                                <span class="sub-item">Daftar Jumlah PNS Kabupaten Menurut Golongan</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "bkpp_camat") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/bkpp/bkpp_camat') ?>">
                                                <span class="sub-item">Daftar Jumlah Camat Kabupaten Menurut Golongan</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "bkpp_desa") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/bkpp/bkpp_desa') ?>">
                                                <span class="sub-item">Daftar Jumlah Kepala Desa/Kelurahan Kabupaten Menurut Golongan</span>
                                            </a>
                                        </li>





                                    </ul>
                                </div>
                            </li>



                            <!-- SETTING DAN USER MANAGEMENT -->
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

                                <li class="<?php if ($this->uri->segment(2) == "api") {
                                                        echo "nav-item active";
                                                    } else {
                                                        echo "nav-item ";
                                                    } ?>">
                                    <a href="<?php echo base_url('Admin/api') ?>">
                                        <i class="fas fa-link"></i>
                                        <p>API</p>

                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endif; ?>





                        <?php if ($this->session->id_role == 2) : ?>
                            <!-- DISNAKER -->
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#base">
                                    <i class="fas fa-layer-group"></i>
                                    <p>Disnaker</p>
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
                        <?php endif; ?>

                        <?php if ($this->session->id_role == 3) : ?>
                            <!-- DINSOS -->
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#dinsos">
                                    <i class="fas fa-layer-group"></i>
                                    <p>Dinsos</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="dinsos">
                                    <ul class="nav nav-collapse">

                                        <li class="<?php if ($this->uri->segment(3) == "dinsos_kkm") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinsos/dinsos_kkm') ?>">
                                                <span class="sub-item">Kepala Keluarga Miskin</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "dinsos_pendidikan") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinsos/dinsos_pendidikan') ?>">
                                                <span class="sub-item">Data Penduduk Lansia Menurut Pendidikan</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "dinsos_aktifitas") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinsos/dinsos_aktifitas') ?>">
                                                <span class="sub-item">Data Penduduk Lansia Menurut Aktifitas</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "dinsos_sakit") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinsos/dinsos_sakit') ?>">
                                                <span class="sub-item">Data Penduduk Lansia yang sakit </span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "dinsos_dmp") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinsos/dinsos_dmp') ?>">
                                                <span class="sub-item">Data Penyandang Disablitas Menurut Pendidikan </span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "dinsos_dma") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinsos/dinsos_dma') ?>">
                                                <span class="sub-item">Data Penyandang Disablitas Menurut Aktifitas</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "dinsos_jaj") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinsos/dinsos_jaj') ?>">
                                                <span class="sub-item">Jumlah Anak Jalan</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "dinsos_jta") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinsos/dinsos_jta') ?>">
                                                <span class="sub-item">Jumlah Terlantar Anak </span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "dinsos_abk") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinsos/dinsos_abk') ?>">
                                                <span class="sub-item">Data Anak Berkebutuhan Khusus</span>
                                            </a>
                                        </li>



                                    </ul>
                                </div>
                            </li>
                        <?php endif; ?>

                        <?php if ($this->session->id_role == 4) : ?>
                            <!-- DINKES -->
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#dinkes">
                                    <i class="fas fa-layer-group"></i>
                                    <p>Dinkes</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="dinkes">
                                    <ul class="nav nav-collapse">

                                        <li class="<?php if ($this->uri->segment(3) == "dinkes_ahp") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinkes/dinkes_ahp') ?>">
                                                <span class="sub-item">Angka Harapan Hidup</span>
                                            </a>
                                        </li>


                                        <li class="<?php if ($this->uri->segment(3) == "disdik_kim") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinkes/dinkes_kim') ?>">
                                                <span class="sub-item">Jumlah Kematian Ibu Melahirkan</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "disdik_pkim") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinkes/dinkes_pkim') ?>">
                                                <span class="sub-item">Penyebab Kematian Ibu Melahirkan</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "disdik_cpp") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinkes/dinkes_cpp') ?>">
                                                <span class="sub-item">Cakupan Pertolongan Persalinan</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "dinkes_kih") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinkes/dinkes_kih') ?>">
                                                <span class="sub-item">Kunjungan Ibu Hamil (K1/K4) </span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "dinkes_tetanus") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinkes/dinkes_tetanus') ?>">
                                                <span class="sub-item">Imunisasi Tetanus </span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "dinkes_zat") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinkes/dinkes_zat') ?>">
                                                <span class="sub-item">Pemberian Zat Besi </span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "dinkes_kb") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinkes/dinkes_kb') ?>">
                                                <span class="sub-item">Keluarga Berencana </span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "dinkes_napza") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/dinkes/dinkes_napza') ?>">
                                                <span class="sub-item">NAPZA </span>
                                            </a>
                                        </li>




                                    </ul>
                                </div>
                            </li>
                        <?php endif; ?>

                        <?php if ($this->session->id_role == 5) : ?>
                            <!-- DISDIK -->
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#disdik">
                                    <i class="fas fa-layer-group"></i>
                                    <p>Disdik</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="disdik">
                                    <ul class="nav nav-collapse">

                                        <li class="<?php if ($this->uri->segment(3) == "disdik_apk") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/disdik/disdik_apk') ?>">
                                                <span class="sub-item">Angka Partisipasi Kasar (APK) Menurut Jenjang Pendidikan SD, SLTP dan SLTA</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "disdik_aps") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/disdik/disdik_aps') ?>">
                                                <span class="sub-item">Angka Partisipasi Sekolah (APS) Menurut Kelompok Umur (7-12, 13-15 dan 16-18 tahun)</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "disdik_apm") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/disdik/disdik_apm') ?>">
                                                <span class="sub-item">Angka Partisipasi Murni (APM) Menurut Jenjang Pendidikan SD, SLTP Dan SLTA</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($this->uri->segment(3) == "disdik_jenjang") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/disdik/disdik_jenjang') ?>">
                                                <span class="sub-item">Angka Putus Sekolah Menurut Jenjang Pendidikan SD, SLTP Dan SLTA</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "disdik_sertifikat") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/disdik/disdik_sertifikat') ?>">
                                                <span class="sub-item">Angka Sertifikat Guru SD, SLTP Dan SLTA</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "disdik_paket") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/disdik/disdik_paket') ?>">
                                                <span class="sub-item">Angka Lulus Paket SD, SLTP Dan SLTA</span>
                                            </a>
                                        </li>


                                        <li class="<?php if ($this->uri->segment(3) == "disdik_sekolah") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/disdik/disdik_sekolah') ?>">
                                                <span class="sub-item">Rata-Rata Lama Sekolah</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "disdik_pt") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/disdik/disdik_pt') ?>">
                                                <span class="sub-item">Angka Data Pendididkan Beasiswa SLTA dan Perguruan Tinggi</span>
                                            </a>
                                        </li>


                                    </ul>
                                </div>
                            </li>
                        <?php endif; ?>

                        <?php if ($this->session->id_role == 6) : ?>
                            <!-- SETWAN -->
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#setwan">
                                    <i class="fas fa-layer-group"></i>
                                    <p>Setwan</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="setwan">
                                    <ul class="nav nav-collapse">

                                        <li class="<?php if ($this->uri->segment(3) == "partai") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/setwan/partai') ?>">
                                                <span class="sub-item">Angka DPR-RI Menurut Partai</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "komisi") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/setwan/komisi') ?>">
                                                <span class="sub-item">Angka DPR-RI Menurut Komisi</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "prov_partai") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/setwan/prov_partai') ?>">
                                                <span class="sub-item">Angka DPRD Provinsi Menurut Partai</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "prov_komisi") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/setwan/prov_komisi') ?>">
                                                <span class="sub-item">Angka DPRD Provinsi Menurut Komisi</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "kab_partai") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/setwan/kab_partai') ?>">
                                                <span class="sub-item">Angka DPRD Kabupaten Menurut Partai</span>
                                            </a>
                                        </li>


                                        <li class="<?php if ($this->uri->segment(3) == "kab_komisi") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/setwan/kab_komisi') ?>">
                                                <span class="sub-item">Angka DPRD Kabupaten Menurut Komisi</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        <?php endif; ?>

                        <?php if ($this->session->id_role == 7) : ?>
                            <!-- KEJAKSAAN -->
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#kejaksaan">
                                    <i class="fas fa-layer-group"></i>
                                    <p>Kejaksaan</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="kejaksaan">
                                    <ul class="nav nav-collapse">
                                        <li class="<?php if ($this->uri->segment(3) == "jaksa") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/kejaksaan/jaksa') ?>">
                                                <span class="sub-item">Data Jaksa</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($this->uri->segment(3) == "hakim") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href="<?php echo base_url('Backend/kejaksaan/hakim') ?>">
                                                <span class="sub-item">Data Hakim</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        <?php endif; ?>

                        <?php if ($this->session->id_role == 8) : ?>
                            <!-- PENGADILAN NEGERI -->
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#pn">
                                    <i class="fas fa-layer-group"></i>
                                    <p>Pengadilan Negeri</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="pn">
                                    <ul class="nav nav-collapse">
                                        <li class="<?php if ($this->uri->segment(3) == "jaksa") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/pn/jaksa') ?>">
                                                <span class="sub-item">Data Jaksa</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($this->uri->segment(3) == "hakim") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href="<?php echo base_url('Backend/pn/hakim') ?>">
                                                <span class="sub-item">Data Hakim</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        <?php endif; ?>

                        <?php if ($this->session->id_role == 9) : ?>
                            <!-- PENGADILAN AGAMA -->
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#agama">
                                    <i class="fas fa-layer-group"></i>
                                    <p>Pengadilan Agama</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="agama">
                                    <ul class="nav nav-collapse">
                                        <li class="<?php if ($this->uri->segment(3) == "jaksa") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/P_agama/jaksa') ?>">
                                                <span class="sub-item">Data Jaksa</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($this->uri->segment(3) == "hakim") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href="<?php echo base_url('Backend/P_agama/hakim') ?>">
                                                <span class="sub-item">Data Hakim</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        <?php endif; ?>

                        <?php if ($this->session->id_role == 10) : ?>
                        <?php endif; ?>

                        <?php if ($this->session->id_role == 11) : ?>
                            <!-- BKPP -->
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#bkpp">
                                    <i class="fas fa-layer-group"></i>
                                    <p>BKPP</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="bkpp">
                                    <ul class="nav nav-collapse">

                                        <li class="<?php if ($this->uri->segment(3) == "bkpp_pusat") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/bkpp/bkpp_pusat') ?>">
                                                <span class="sub-item">Daftar Jumlah PNS Pusat</span>
                                            </a>
                                        </li>


                                        <li class="<?php if ($this->uri->segment(3) == "bkpp_golongan") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/bkpp/bkpp_golongan') ?>">
                                                <span class="sub-item">Daftar Jumlah PNS Pusat Menurut Golongan</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "bkpp_kabupaten") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/bkpp/bkpp_kabupaten') ?>">
                                                <span class="sub-item">Daftar Jumlah PNS Kabupaten</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "bkpp_kab_gol") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/bkpp/bkpp_kab_gol') ?>">
                                                <span class="sub-item">Daftar Jumlah PNS Kabupaten Menurut Golongan</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "bkpp_camat") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/bkpp/bkpp_camat') ?>">
                                                <span class="sub-item">Daftar Jumlah Camat Kabupaten Menurut Golongan</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "bkpp_desa") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/bkpp/bkpp_desa') ?>">
                                                <span class="sub-item">Daftar Jumlah Kepala Desa/Kelurahan Kabupaten Menurut Golongan</span>
                                            </a>
                                        </li>





                                    </ul>
                                </div>
                            </li>
                        <?php endif; ?>

                        <?php if ($this->session->id_role == 12) : ?>
                            <!-- KESBANGPOL -->
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#kesbangpol">
                                    <i class="fas fa-layer-group"></i>
                                    <p>Kesbangpol</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="kesbangpol">
                                    <ul class="nav nav-collapse">

                                        <li class="<?php if ($this->uri->segment(3) == "desa") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/kesbangpol/desa') ?>">
                                                <span class="sub-item">Daftar Jumlah Badan Musyawarah Desa</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "pangkat") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/kesbangpol/pangkat') ?>">
                                                <span class="sub-item">Daftar Jumlah Badan Pertimbangan dan Pangkat</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "pengurus") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/kesbangpol/pengurus') ?>">
                                                <span class="sub-item">Daftar Jumlah Badan Pertimbangan dan Pangkat</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "partai") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/kesbangpol/partai') ?>">
                                                <span class="sub-item">Daftar Jumlah Partai Harian</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "organisasi") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/kesbangpol/organisasi') ?>">
                                                <span class="sub-item">Daftar Jumlah Pengurus Oraganisasi</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                        <?php endif; ?>


                        <?php if ($this->session->id_role == 13) : ?>
                            <!-- BIDANG HUKUM -->
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#hukum">
                                    <i class="fas fa-layer-group"></i>
                                    <p>Bidang Hukum</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="hukum">
                                    <ul class="nav nav-collapse">
                                        <li class="<?php if ($this->uri->segment(3) == "pendidikan") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/hukum/pendidikan') ?>">
                                                <span class="sub-item">Penghuni Lapas Menurut Jenis Lapas & Pendidikan</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "usia") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/hukum/usia') ?>">
                                                <span class="sub-item">Penghuni Lapas Menurut Jenis Lapas & Usia</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($this->uri->segment(3) == "kasus") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/hukum/kasus') ?>">
                                                <span class="sub-item">Penghuni Lapas Menurut Jenis Lapas & Kasus</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($this->uri->segment(3) == "lapas") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/hukum/lapas') ?>">
                                                <span class="sub-item">Jumlah Data Jenis Lapas</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                        <?php endif; ?>

                        <?php if ($this->session->id_role == 14) : ?>
                            <!-- BPBD -->
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#bpbd">
                                    <i class="fas fa-layer-group"></i>
                                    <p>BPBD</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="bpbd">
                                    <ul class="nav nav-collapse">
                                        <li class="<?php if ($this->uri->segment(3) == "pak") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/bpbd/pak') ?>">
                                                <span class="sub-item">Pengungsi Akibat Konflik</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($this->uri->segment(3) == "pab") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/bpbd/pab') ?>">
                                                <span class="sub-item">Pengungsi Akibat Bencana</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($this->uri->segment(3) == "akb") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/bpbd/akb') ?>">
                                                <span class="sub-item">Anak Korban Bencana</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                        <?php endif; ?>

                        <?php if ($this->session->id_role == 15) : ?>
                            <!-- DISDUKCAPIL -->
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#disduk">
                                    <i class="fas fa-layer-group"></i>
                                    <p>Disdukcapil</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="disduk">
                                    <ul class="nav nav-collapse">
                                        <li class="<?php if ($this->uri->segment(3) == "akte") {
                                                            echo "nav-item active";
                                                        } else {
                                                            echo "nav-item ";
                                                        } ?>">
                                            <a href=" <?php echo base_url('Backend/disduk/akte') ?>">
                                                <span class="sub-item">Data Akte Kelahiran</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                        <?php endif; ?>


                        <!-- SETTING DAN USER MANAGEMENT -->
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
        $(document).ready(function() {
            $('#basic-datatables').DataTable({});

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