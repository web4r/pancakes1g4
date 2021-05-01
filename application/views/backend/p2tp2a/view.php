<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
    </div>
</div>

<div class="page-inner mt--5">
    <div class="row mt--2">



        <div class="col-lg-6 ml-auto mr-auto">

            <div class="card card-stats  card-round">
                <div class="card-body">
                    <div class="card-title">
                        <h2 class="text-black pb-2 fw-bold">DETAIL DATA P2TP2A</h2>
                    </div>
                    <ul class="list-group list-group-bordered">
                        <?php
                        if ($p2tp2a->jenis_kelamin == 1) {
                            $jk = "L";
                        } else {
                            $jk = "P";
                        }
                        
                        ?>
                        <li class="list-group-item">Tanggal Pelaporan : <?php echo $p2tp2a->tgl_laporan ?></li>
                        <li class="list-group-item">Initial : <?php echo $p2tp2a->initial ?></li>
                        <li class="list-group-item">Alamat : <?php echo $p2tp2a->alamat ?></li>
                        <li class="list-group-item">Jenis Kelamin : <?php echo $jk ?></li>
                        <li class="list-group-item">Usia : <?php echo $p2tp2a->usia ?></li>
                        <li class="list-group-item">Pendidikan : <?php echo $p2tp2a->jenis_pendidikan ?></li>
                        <li class="list-group-item">Jenis Kekerasan : <?php echo $p2tp2a->jenis_kekerasan ?></li>

                    </ul>

                    <a href="<?php echo base_url() ?>Backend/p2tp2a" class="btn btn-danger">Kembali</a>


                </div>
            </div>


        </div>


    </div>
</div>