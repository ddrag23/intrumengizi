<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="<?= base_url() ?>assets/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url(); ?>assets/gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url(); ?>assets/gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?= base_url(); ?>assets/gentelella/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url(); ?>assets/gentelella/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
    <div>
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form action="" method="post">
                        <h1>Login Form</h1>
                        <div>
                            <input type="text" class="form-control" name="username" placeholder="Username" />
                            <small class="text-danger"><?= form_error('username'); ?></small>
                        </div>
                        <div>
                            <input type="password" class="form-control" name="password" placeholder="Password" />
                            <small class="text-danger"><?= form_error('password'); ?></small>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-secondary">Log in</button>
                            <a class="reset_pass" href="#">Lost your password?</a>
                        </div>
                        <?php if ($this->session->flashdata('msg')) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $this->session->flashdata('msg'); ?>
                            </div>
                        <?php endif ?>
                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">New to site?
                                <a href="#signup" class="to_register"> Create Account </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />
                            <a href="<?= site_url('beranda'); ?>" style="font-size: 20px;"><i class="fa fa-home"></i> Halaman utama</a>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>

</html>