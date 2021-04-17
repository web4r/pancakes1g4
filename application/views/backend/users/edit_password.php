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
                        <h2 class="text-black pb-2 fw-bold">FORM EDIT PASSWORD</h2>
                    </div>
                    <form action="<?php echo base_url() ?>Admin/update_password/<?php echo $user->id_user ?>" method="post">
                        <div class="modal-body">

                            <div class="form-group form-group-default">
                                <label>Password</label>
                                <input name="password" type="password" class="form-control" required="required">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <a href="<?php echo base_url() ?>Admin/users" type="button" class="btn btn-primary" data-dismiss="modal">Kembali</a>
                            <button type="submit" class="btn btn-danger">Update Password</button>
                        </div>
                    </form>


                </div>
            </div>


        </div>


    </div>
</div>