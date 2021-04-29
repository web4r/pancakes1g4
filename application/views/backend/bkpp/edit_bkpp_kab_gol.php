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
                        <h2 class="text-black pb-2 fw-bold">FORM EDIT Daftar Jumlah PNS Kabupaten Menurut Golongan</h2>
                    </div>
                    <form action="<?php echo base_url() ?>Backend/bkpp/update_bkpp_kab_gol/<?php echo $bkpp_kab_gol->id_bkpp_kab_gol ?>" method="post">

                        <div class="form-group form-group-default">
                            <label>Tahun</label>

                            <?php

                            $data = array(
                                '2018' => '2018',
                                '2019' => '2019',
                                '2020' => '2020',
                                '2021' => '2021',
                                '2022' => '2022',
                                '2023' => '2023',
                                '2024' => '2024',
                                '2025' => '2025',



                            );
                            echo form_dropdown('tahun', $data, set_value('tahun', $bkpp_kab_gol->tahun), array('class' => 'form-control'));
                            ?>


                        </div>

                        <div class="form-group form-group-default">
                            <label>Jabatan</label>
                            <input name="jabatan" type="text" class="form-control" value="<?php echo $bkpp_kab_gol->jabatan ?>">
                        </div>

                        <div class="form-group form-group-default">
                            <label>Pria</label>
                            <input name="pria" type="number" class="form-control" value="<?php echo $bkpp_kab_gol->pria ?>">
                        </div>
                        <div class="form-group form-group-default">
                            <label>Perempuan</label>
                            <input name="wanita" type="number" class="form-control" value="<?php echo $bkpp_kab_gol->wanita ?>">
                        </div>



                        <a href="<?php echo base_url() ?>Backend/bkpp/bkpp_kab_gol" class="btn btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>

                    </form>



                </div>
            </div>


        </div>


    </div>
</div>