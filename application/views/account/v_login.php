<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>
        Halaman Login
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <h2>Halaman Login</h2>
    <?php
    // Cetak jika ada notifikasi
    if ($this->session->flashdata('sukses')) {
        echo '<p class="warning" style="margin: 10px 20px;">' . $this->session->flashdata('sukses') . '</p>';
    }
    ?>
    <?php if (!empty($this->session->flashdata('msg'))) : ?>
        <div class="alert alert-danger" role="alert">
            <?= $this->session->flashdata('msg'); ?>
        </div>
    <?php endif; ?>
    <?php echo form_open('login'); ?>
    <p>Username:</p>
    <p>
        <input type="text" name="username" value="<?php echo set_value('username'); ?>" />
    </p>
    <p> <?php echo form_error('username'); ?> </p>

    <p>Password:</p>
    <p>
        <input type="password" name="password" value="<?php echo set_value('password'); ?>" />
    </p>
    <p> <?php echo form_error('password'); ?> </p>

    <p>
        <input type="submit" name="btnSubmit" value="Login" />
    </p>

    <?php echo form_close(); ?>

    <p>Klik <a href="<?= base_url('beranda'); ?>">beranda</a> jika ingin kembali ke halaman utama</p>
</body>

</html>