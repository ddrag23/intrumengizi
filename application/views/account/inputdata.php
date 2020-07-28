<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Form Perencanaan Menu Diet</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <?= validation_errors(); ?>
                <form method="post" action="<?= site_url('pasien/tambah_simpan'); ?>">
                    <!-- Smart Wizard -->
                    <p></p>
                    <div id="wizard" class="form_wizard wizard_horizontal">
                        <ul class="wizard_steps">
                            <li>
                                <a href="#step-1">
                                    <span class="step_no">1</span>
                                    <span class="step_descr">
                                        Step 1<br />
                                        <small>Identitas</small>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#step-2">
                                    <span class="step_no">2</span>
                                    <span class="step_descr">
                                        Step 2<br />
                                        <small>Kebutuhan zat Gizi</small>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#step-3">
                                    <span class="step_no">3</span>
                                    <span class="step_descr">
                                        Step 3<br />
                                        <small>Perencanaan Menu</small>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#step-4">
                                    <span class="step_no">4</span>
                                    <span class="step_descr">
                                        Step 4<br />
                                        <small>Presentase Pemenuhan Kebutuhan</small>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div id="step-1">
                            <form class="form-horizontal form-label-left">

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama_lengkap">Nama Lengkap<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="nama_lengkap" id="nama_lengkap" required="required" class="form-control  " value="<?= set_value('nama_lengkap'); ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="alamat">Alamat <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="alamat" name="alamat" required="required" class="form-control ">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="usia" class="col-form-label col-md-3 col-sm-3 label-align">Usia
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="usia" class="form-control col" type="text" name="usia">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="tinggi_badan">
                                        Tinggi Badan<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input name="tinggi_badan" id="tinggi_badan" class="form-control col" required="required" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="berat_badan">
                                        Berat Badan<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input name="berat_badan" id="berat_badan" class="form-control col" required="required" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <div id="gender" class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                                <input type="radio" name="jenis_kelamin" value="L" class="join-btn"> &nbsp; Laki-laki &nbsp;
                                            </label>
                                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                                <input type="radio" name="jenis_kelamin" value="P" class="join-btn"> Perempuan
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="pekerjaan">
                                        Pekerjaan <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="pekerjaan" name="pekerjaan" class="form-control col" required="required" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="diagnosa_medis">
                                        Diagnosa Medis <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="diagnosa_medis" name="diagnosa_medis" class="form-control col" required="required" type="text">
                                    </div>
                                </div>



                        </div>
                        <div id="step-2">

                            <div class="form-group row">
                                <label for="karbohidrat" class="col-form-label col-md-3 col-sm-3 label-align">
                                    Karbohidrat <small class="required">*</small>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="karbohidrat" name="karbohidrat" class="form-control col" required="required" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lemak" class="col-form-label col-md-3 col-sm-3 label-align">
                                    Lemak <small class="required">*</small>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="lemak" name="lemak" class="form-control col" required="required" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="protein" class="col-form-label col-md-3 col-sm-3 label-align">
                                    Protein <small class="required">*</small>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="protein" name="protein" class="form-control col" required="required" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="energi" class="col-form-label col-md-3 col-sm-3 label-align">
                                    Energi <small class="required">*</small>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="energi" name="energi" class="form-control col" required="required" type="text">
                                </div>
                            </div>
                        </div>
                        <div id="step-3">
                            <div class="form-group row">
                                <label for="menu" class="col-form-label col-md-3 col-sm-3 label-align">
                                    Menu Makanan <small class="required">*</small>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="menu" name="menu[]" class="form-control col" required="required" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3 col-sm-3 label-align">
                                    Pilih bahan Makanan<small class="required">*</small>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                    <select type="text" id="select" name="bahan" class="form-control col select2" style="width: 100%;">
                                        <option value="" disabled selected>---Pilih Bahan---</option>
                                        <?php
                                        foreach ($bahan as $u) {
                                        ?>
                                            <option value="<?= $u->kode; ?>"><?= $u->nama_bahan ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="step-4">

                    </div>
            </div>
        </div>
    </div>
</div>
</form>

<script>
    //Initialize Select2 Elements
    $(document).ready(function() {

        $('.select2').select2()
    })
    const select = document.getElementById('select');
</script>