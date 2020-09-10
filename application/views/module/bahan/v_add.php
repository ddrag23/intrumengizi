					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a class="dropdown-item" href="#">Settings 1</a>
												</li>
												<li><a class="dropdown-item" href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
                  <?php if (validation_errors()): ?>
                    <div class="alert alert-danger" role="alert">
                      <?= validation_errors();?>
                    </div>
                  <?php endif; ?>
									<form id="demo-form2" action="" method="post" data-parsley-validate class="form-horizontal form-label-left">

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="kode">Kode Bahan <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="kode" class="form-control" name="kode">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nama_bahan">Nama Bahan <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="nama_bahan" name="nama_bahan" class="form-control">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nama_bahan">Sumber Makanan <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="sumber_makanan" name="sumber_makanan" class="form-control">
											</div>
										</div>
										<div class="item form-group">
											<label for="air" class="col-form-label col-md-3 col-sm-3 label-align">Air</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="air" class="form-control" type="text" name="air">
											</div>
										</div>
										<div class="item form-group">
											<label for="energi" class="col-form-label col-md-3 col-sm-3 label-align">Energi</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="energi" class="form-control" type="text" name="energi">
											</div>
										</div>
										<div class="item form-group">
											<label for="protein" class="col-form-label col-md-3 col-sm-3 label-align">Protein</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="protein" class="form-control" type="text" name="protein">
											</div>
										</div>
										<div class="item form-group">
											<label for="lemak" class="col-form-label col-md-3 col-sm-3 label-align">Lemak</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="lemak" class="form-control" type="text" name="lemak">
											</div>
										</div>
										<div class="item form-group">
											<label for="kh" class="col-form-label col-md-3 col-sm-3 label-align">Karbohidrat</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="kh" class="form-control" type="text" name="kh">
											</div>
										</div>
										<div class="item form-group">
											<label for="serat" class="col-form-label col-md-3 col-sm-3 label-align">Serat</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="serat" class="form-control" type="text" name="serat">
											</div>
										</div>
										<div class="item form-group">
											<label for="abu" class="col-form-label col-md-3 col-sm-3 label-align">Abu</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="abu" class="form-control" type="text" name="abu">
											</div>
										</div>
										<div class="item form-group">
											<label for="kalsium" class="col-form-label col-md-3 col-sm-3 label-align">Kalsium</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="kalsium" class="form-control" type="text" name="kalsium">
											</div>
										</div>
										<div class="item form-group">
											<label for="fosfor" class="col-form-label col-md-3 col-sm-3 label-align">Fosfor</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="fosfor" class="form-control" type="text" name="fosfor">
											</div>
										</div>
										<div class="item form-group">
											<label for="besi" class="col-form-label col-md-3 col-sm-3 label-align">Besi</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="besi" class="form-control" type="text" name="besi">
											</div>
										</div>
										<div class="item form-group">
											<label for="natrium" class="col-form-label col-md-3 col-sm-3 label-align">Natrium</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="natrium" class="form-control" type="text" name="natrium">
											</div>
										</div>
										<div class="item form-group">
											<label for="kalium" class="col-form-label col-md-3 col-sm-3 label-align">Kalium</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="kalium" class="form-control" type="text" name="kalium">
											</div>
										</div>
										<div class="item form-group">
											<label for="tembaga" class="col-form-label col-md-3 col-sm-3 label-align">Tembaga</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="tembaga" class="form-control" type="text" name="tembaga">
											</div>
										</div>
										<div class="item form-group">
											<label for="seng" class="col-form-label col-md-3 col-sm-3 label-align">Seng</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="seng" class="form-control" type="text" name="seng">
											</div>
										</div>
										<div class="item form-group">
											<label for="retinol" class="col-form-label col-md-3 col-sm-3 label-align">Retinol</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="retinol" class="form-control" type="text" name="retinol">
											</div>
										</div>
										<div class="item form-group">
											<label for="bkar" class="col-form-label col-md-3 col-sm-3 label-align">B Kar</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="bkar" class="form-control" type="text" name="bkar">
											</div>
										</div>
										<div class="item form-group">
											<label for="karbototal" class="col-form-label col-md-3 col-sm-3 label-align">Karbohidrat Total</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="karbototal" class="form-control" type="text" name="karbototal">
											</div>
										</div>
										<div class="item form-group">
											<label for="thiamin" class="col-form-label col-md-3 col-sm-3 label-align">Thiamin</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="thiamin" class="form-control" type="text" name="thiamin">
											</div>
										</div>
										<div class="item form-group">
											<label for="riboflavin" class="col-form-label col-md-3 col-sm-3 label-align">Riboflavin</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="riboflavin" class="form-control" type="text" name="riboflavin">
											</div>
										</div>
										<div class="item form-group">
											<label for="niasin" class="col-form-label col-md-3 col-sm-3 label-align">niasin</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="niasin" class="form-control" type="text" name="niasin">
											</div>
										</div>
										<div class="item form-group">
											<label for="vitc" class="col-form-label col-md-3 col-sm-3 label-align">Vitamin C</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="vitc" class="form-control" type="text" name="vitc">
											</div>
										</div>
										<div class="item form-group">
											<label for="bdd" class="col-form-label col-md-3 col-sm-3 label-align">BDD</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="bdd" class="form-control" type="text" name="bdd">
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

