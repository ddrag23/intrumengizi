<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Form Tambah User</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <?= validation_errors(); ?>
                <form method="POST" action="<?= site_url('user/tambah_simpan'); ?>">
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama">
                            Nama Lengkap <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="nama" name="nama" class="form-control ">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="username">
                            Username <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="username" name="username" class="form-control">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="email" class="col-form-label col-md-3 col-sm-3 label-align">
                            Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input id="email" class="form-control" type="email" name="email">
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>