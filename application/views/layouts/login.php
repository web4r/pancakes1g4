<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Login</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="../assets/img/icon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="<?php echo base_url() ?>assets/js/plugin/webfont/webfont.min.js"></script>
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

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/atlantis.css">
</head>

<body class="login">
    <div class="wrapper wrapper-login">
        <div class="container container-login animated fadeIn">


            <h3 class="text-center">Login Dashboard</h3>
            <?php if ($this->session->flashdata('login_success')) : ?>
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>
                        <?php echo $this->session->flashdata('login_success'); ?>
                    </strong>
                </div>
            <?php endif; ?>

            <?php if ($this->session->flashdata('login_failed')) : ?>
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>
                        <?php echo $this->session->flashdata('login_failed'); ?>
                    </strong>
                </div>
            <?php endif; ?>

            <?php if ($this->session->flashdata('no_access')) : ?>
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>
                        <?php echo $this->session->flashdata('no_access'); ?>
                    </strong>
                </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('errors')) : ?>
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>
                        <?php echo $this->session->flashdata('errors'); ?>
                    </strong>
                </div>
            <?php endif; ?>

            <?php if ($this->session->flashdata('no_account')) : ?>
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>
                        <?php echo $this->session->flashdata('no_account'); ?>
                    </strong>
                </div>
            <?php endif; ?>



            <div class="login-form">
                <form action="<?php echo base_url() ?>login/authUser" method="post">
                    <div class="form-group form-floating-label">
                        <input id="username" name="email" type="email" class="form-control input-border-bottom">
                        <label for="username" class="placeholder">Email</label>
                    </div>
                    <div class="form-group form-floating-label">
                        <input id="password" name="password" type="password" class="form-control input-border-bottom">
                        <label for="password" class="placeholder">Password</label>
                        <div class="show-password">
                            <i class="icon-eye"></i>
                        </div>
                    </div>
                    <div class="form-action mb-3">
                        <button type="submit" class="btn btn-primary btn-rounded btn-block ">Login</button>
                        <a href="<?php echo base_url() ?>" class="btn btn-outline-dark btn-rounded btn-block">
                            <i class="fas fa-arrow-circle-left"></i> Beranda
                        </a>
                    </div>
                </form>


            </div>
        </div>


    </div>
    <script src="<?php echo base_url() ?>assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/core/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/core/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/atlantis.min.js"></script>
</body>

</html>