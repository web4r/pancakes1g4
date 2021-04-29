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
                        <h2 class="text-black pb-2 fw-bold">FORM EDIT Angka Lulus Paket SD, SLTP Dan SLTA</h2>
                    </div>
                    <form action="<?php echo base_url() ?>Backend/disdik/update_disdik_paket/<?php echo $disdik_paket->id_disdik_paket ?>" method="post">

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
                            echo form_dropdown('tahun', $data, set_value('tahun', $disdik_paket->tahun), array('class' => 'form-control'));
                            ?>


                        </div>
                        <div class="form-group form-group-default">
                            <label>SD</label>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>L</label>
                                        <input name="paket_a_l" type="number" class="form-control" value="<?php echo $disdik_paket->paket_a_l ?>">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>P</label>
                                        <input name="paket_a_p" type="number" class="form-control" value="<?php echo $disdik_paket->paket_a_p ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-group-default">
                            <label>SLTP</label>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>L</label>
                                        <input name="paket_b_l" type="number" class="form-control" value="<?php echo $disdik_paket->paket_b_l ?>">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>P</label>
                                        <input name="paket_b_p" type="number" class="form-control" value="<?php echo $disdik_paket->paket_b_p ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-group-default">
                            <label>SLTA</label>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>L</label>
                                        <input name="paket_c_l" type="number" class="form-control" value="<?php echo $disdik_paket->paket_c_l ?>">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>P</label>
                                        <input name="paket_c_p" type="number" class="form-control" value="<?php echo $disdik_paket->paket_c_p ?>">
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="form-group form-group-default">
                            <label>Status</label>
                            <input name="status_pendidikan" type="text" class="form-control" value="<?php echo $disdik_paket->status_pendidikan ?>">
                        </div>


                        <a href="<?php echo base_url() ?>Backend/disdik/disdik_paket" class="btn btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>

                    </form>



                </div>
            </div>


        </div>


    </div>
</div>