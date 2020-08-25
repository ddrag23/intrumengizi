        <div class="x_panel">
            <div class="x_title">
                <h2>Form Tambah User</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <?= validation_errors(); ?>
                <form method="POST" action="">
                    <input type="hidden" name="id_user" value="<?= $query->id_user;?>" >
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama">
                            Nama Lengkap <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="nama" name="nama" class="form-control" value="<?=$query->nama;?>">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="username">
                            Username <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="username" name="username" class="form-control" value="<?= $query->username;?>">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="password">
                            Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <input type="password" id="password" name="password" class="form-control">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="email" class="col-form-label col-md-3 col-sm-3 label-align">
                            Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <input id="email" class="form-control" type="email" name="email" value="<?= $query->email;?>">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="no_hp" class="col-form-label col-md-3 col-sm-3 label-align">
                            No Telepon <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <input id="no_hp" class="form-control" type="number" name="no_hp" value="<?=$query->no_hp;?>">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="alamat" class="col-form-label col-md-3 col-sm-3 label-align">
                            Alamat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <textarea id="alamat" name="alamat" cols="30" rows="5" class="form-control"><?= $query->alamat;?></textarea>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="email" class="col-form-label col-md-3 col-sm-3 label-align">
                            Level <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <select id="role" name="role" class="form-control">
                              <option value="">--Pilih--</option>
                              <option value="admin" <?= $query->role == 'admin' ? 'selected' : null;?>>Admin</option>
                              <option value="ahli_gizi" <?= $query->role == 'ahli_gizi' ? 'selected' : null; ?>>Ahli Gizi</option>
                            </select>
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
