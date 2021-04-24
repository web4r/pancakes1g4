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
                        <h2 class="text-black pb-2 fw-bold">FORM EDIT Pengurus Dan Anggota Kaukus Perempuan Politik</h2>
                    </div>
                    <form action="<?php echo base_url() ?>Backend/kesbangpol/update_pengurus/<?php echo $pengurus->id_kesbangpol_pengurus ?>" method="post">



                        <div class="form-group form-group-default">
                            <label>Pilih Tahun</label>
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
                            echo form_dropdown('tahun', $data, set_value('tahun', $pengurus->tahun), array('class' => 'form-control'));
                            ?>
                        </div>

                        <div class="form-group form-group-default">
                            <label>Jumlah Pengurus Dan Anggota Kaukus Perempuan Politik</label>
                            <input name="jumlah" type="number" class="form-control" value="<?php echo $pengurus->jumlah ?>">
                        </div>






                        <a href="<?php echo base_url('Backend/kesbangpol/pengurus') ?>" type="button" class="btn btn-danger" data-dismiss="modal">Kembali</a>
                        <button type="submit" class="btn btn-primary">Update Data</button>

                    </form>


                </div>
            </div>


        </div>


    </div>
</div>