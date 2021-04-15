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
                        <h2 class="text-black pb-2 fw-bold">FORM EDIT Jumlah Pekerja Anak</h2>
                    </div>
                    <form action="<?php echo base_url() ?>Backend/disnaker/update_jpa/<?php echo $jpa->id_jpa ?>" method="post">
                        <div class="modal-body">


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
                                echo form_dropdown('tahun', $data, set_value('tahun', $jpa->tahun), array('class' => 'form-control'));
                                ?>
                            </div>
                            <div class="form-group form-group-default">
                                <label>Laki-laki</label>
                                <input name="pria" type="number" class="form-control" value="<?php echo $jpa->pria ?>">
                            </div>
                            <div class="form-group form-group-default">
                                <label>Perempuan</label>
                                <input name="wanita" type="number" class="form-control" value="<?php echo $jpa->wanita ?>">
                            </div>

                            <div class="form-group form-group-default">
                                <label>Status</label>
                                <input name="status" type="text" class="form-control" value="<?php echo $jpa->status ?>">
                            </div>



                        </div>
                        <div class="modal-footer">
                            <a href="<?php echo base_url('Backend/disnaker/jpa') ?>" type="button" class="btn btn-danger" data-dismiss="modal">Kembali</a>
                            <button type="submit" class="btn btn-primary">Update Data</button>
                        </div>
                    </form>


                </div>
            </div>


        </div>


    </div>
</div>