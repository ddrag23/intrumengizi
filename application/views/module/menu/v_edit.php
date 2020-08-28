		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12 ">
				<div class="x_panel">
					<div class="x_title">
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="text-primary" href="<?= site_url('menu/detail/'.$row->id_menu); ?>"><i class="fa fa-arrow-left"></i> Kembali</a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<br />
						<?= validation_errors() ?>
						<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="" method="post">
							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="pasien">Nama Pasien <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 ">
									<select id="" name="pasien_id" class="form-control">
										<?php foreach ($pasien as $value) : ?>
											<option value="<?= $value->id ?>" <?= $value->id == $row->id ? 'selected' : null; ?>><?= $value->nama_lengkap; ?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>
							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="menu">Menu Makanan <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 ">
									<?php
									$menu = implode(", ", json_decode($row->nama_menu, true));
									$berat = implode(", ", json_decode($row->berat, true));
									?>
									<input id="tags_1" type="text" class="tags form-control" name="nama_menu" value="<?= $menu; ?>" />
									<div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
								</div>
							</div>
							<div class="item form-group">
								<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Bahan Makanan</label>
								<div class="col-md-6 col-sm-6 ">
									<select id="select2" name="nama_bahan[]" multiple="multiple" class="form-control" style="width: 100%;">
										<?php foreach ($bahan as $value) : ?>
											<?php foreach (json_decode($row->nama_bahan) as $key => $val) : ?>
												<option value="<?= $value->nama_bahan; ?>" <?= $value->nama_bahan == $val ? 'selected' : null; ?>><?= $value->nama_bahan; ?></option>
											<?php endforeach; ?>
										<?php endforeach; ?>
									</select>
								</div>
							</div>
							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align">Berat</label>
								<div class="col-md-6 col-sm-6">
									<input id="berat" type="text" class="tags form-control" value="<?= $berat; ?>" name="berat" style="width: 100%;" />
									<div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
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
