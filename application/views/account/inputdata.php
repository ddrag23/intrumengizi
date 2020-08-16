					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<ul class="nav navbar-right panel_toolbox">
                  <li><a href="<?=site_url('pasien');?>" class="text-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
                      <?= validation_errors();?>
                  <form id="demo-form2" action="<?= site_url('pasien/tambah_simpan');?>" method="post" data-parsley-validate class="form-horizontal form-label-left">

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nama_lengkap">Nama Lengkap<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="nama_lengkap"  class="form-control">
											</div>
										</div>
										<div class="item form-group">
											<label for="usia" class="col-form-label col-md-3 col-sm-3 label-align">Usia</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="usia" class="form-control" type="text" name="usia">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
											<div class="col-md-6 col-sm-6 ">
												<div id="gender" class="btn-group" data-toggle="buttons">
													<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
														<input type="radio" name="jenis_kelamin" value="L" class="join-btn"> &nbsp; Laki-Laki &nbsp;
													</label>
													<label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
														<input type="radio" name="jenis_kelamin" value="P" class="join-btn"> Perempuan
													</label>
												</div>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="alamat">Alamat <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
                          <textarea id="alamat" name="alamat" class="form-control" cols="30" rows="5"></textarea>
											</div>
										</div>
										<div class="item form-group">
											<label for="tinggi_badan" class="col-form-label col-md-3 col-sm-3 label-align">Tinggi badan</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="tinggi_badan" class="form-control" type="text" name="tinggi_badan">
											</div>
										</div>
										<div class="item form-group">
											<label for="berat_badan" class="col-form-label col-md-3 col-sm-3 label-align">Berat badan</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="berat_badan" class="form-control" type="text" name="berat_badan">
											</div>
										</div>
										<div class="item form-group">
											<label for="pekerjaan" class="col-form-label col-md-3 col-sm-3 label-align">Pekerjaan</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="pekerjaan" class="form-control" type="text" name="pekerjaan">
											</div>
										</div>
										<div class="item form-group">
											<label for="diagnosa_medis" class="col-form-label col-md-3 col-sm-3 label-align">Diagnosa medis</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="diagnosa_medis" class="form-control" type="text" name="diagnosa_medis">
											</div>
										</div>
										<div class="item form-group">
											<label for="energi" class="col-form-label col-md-3 col-sm-3 label-align">Energi</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="energi" class="form-control" type="text" name="energi">
											</div>
										</div>
										<div class="item form-group">
											<label for="karbohidrat" class="col-form-label col-md-3 col-sm-3 label-align">Karbohidrat</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="karbohidrat" class="form-control" type="text" name="karbohidrat">
											</div>
										</div>
										<div class="item form-group">
											<label for="lemak" class="col-form-label col-md-3 col-sm-3 label-align">Lemak</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="lemak" class="form-control" type="text" name="lemak">
											</div>
										</div>
										<div class="item form-group">
											<label for="protein" class="col-form-label col-md-3 col-sm-3 label-align">Protein</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="protein" class="form-control" type="text" name="protein">
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="button">Cancel</button>
												<button class="btn btn-primary" type="reset">Reset</button>
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>
