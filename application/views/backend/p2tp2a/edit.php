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
                        <h2 class="text-black pb-2 fw-bold">FORM EDIT P2TP2A</h2>
                    </div>
                    <form action="<?php echo base_url() ?>Backend/p2tp2a/update/<?php echo $p2tp2a->id_p2tp2a ?>" method="post">

                        <div class="form-group form-group-default">
                            <label>Tanggal Pelaporan</label>
                            <input name="tgl_laporan" type="date" class="form-control" value="<?php echo $p2tp2a->tgl_laporan ?>">
                        </div>
                        <div class="form-group form-group-default">
                            <label>Initial</label>
                            <input name="initial" type="text" class="form-control" value="<?php echo $p2tp2a->initial ?>">
                        </div>

                        <div class="form-group form-group-default">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $p2tp2a->alamat ?></textarea>
                        </div>
                        <div class="form-group form-group-default">
                            <label>Jenis Kelamin</label>
                            <?php

                            $data = array(
                                '1' => 'Laki-laki',
                                '2' => 'Perempuan',




                            );
                            echo form_dropdown('jenis_kelamin', $data, set_value('jenis_kelamin', $p2tp2a->jenis_kelamin), array('class' => 'form-control'));
                            ?>
                        </div>

                        <div class="form-group form-group-default">
                            <label>Usia</label>
                            <input name="usia" type="number" class="form-control" value="<?php echo $p2tp2a->usia ?>">
                        </div>
                        <div class="form-group form-group-default">
                            <label>Pendidikan</label>

                            <?php

                            $data = array(
                                '1' => 'Belum Sekolah',
                                '2' => 'SD',
                                '3' => 'SMP',
                                '4' => 'SMA',
                                '5' => 'PT',



                            );
                            echo form_dropdown('pendidikan', $data, set_value('pendidikan', $p2tp2a->pendidikan), array('class' => 'form-control'));
                            ?>


                        </div>
                        <div class="form-group form-group-default">
                            <label>Jenis Kekerasan</label>
                            <select name="id_kat_kekerasan" class="form-control" id="formGroupDefaultSelect">
                                <?php foreach ($kat_kekerasan as $data) { ?>
                                    <option value="<?php echo $data->id_kat_kekerasan ?>" <?php if ($data->id_kat_kekerasan == $p2tp2a->id_kat_kekerasan) {
                                                                                                    echo "selected";
                                                                                                } ?>><?php echo $data->jenis_kekerasan ?></option>
                                <?php } ?>
                            </select>
                        </div>


                        <a href="<?php echo base_url() ?>Backend/p2tp2a" class="btn btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>

                    </form>



                </div>
            </div>


        </div>


    </div>
</div>