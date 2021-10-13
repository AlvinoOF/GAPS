<link href="<?=base_url('assets/main/');?>plugins/sweet-alert/sweetalert.css" rel="stylesheet">
<!---Internal Fileupload css-->
<link href="<?=base_url('assets/main/');?>plugins/fileuploads/css/fileupload.css" rel="stylesheet" type="text/css"/>
	
                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Security Report</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Non Conformity Report / Tambah Non Conformity Report</span>
							</div>
						</div>
					</div>
                    <form action="<?=base_url('user/r_conformity/tambah_save');?>" method="post" id="formInput">
                    <div class="row row-sm">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Non Conformity Report</h4><br>
									</div>
								</div>
								<div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="control-group form-group">
                                                <label class="form-label">Tanggal dan waktu</label>
                                                <input type="datetime-local" name="tgl" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Lokasi</label>
                                                <textarea name="lokasi" class="form-control required" rows="2"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="control-group form-group">
                                                <label class="form-label">Pelapor</label>
                                                <input type="text" name="pelapor" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Dept/Bagian</label>
                                                <input type="text" name="dept" class="form-control required">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="control-group form-group">
                                        <label class="form-label">Jenis</label>
                                        <label class="rdiobox"><input type="radio" name="jenis" value="Permasalahan"> <span>Permasalahan</span></label>
                                        <label class="rdiobox"><input type="radio" name="jenis" value="Potensi"> <span>Potensi</span></label>
                                    </div>
                                    <div class="control-group form-group">
                                        <label class="form-label">Temuan</label>
                                        <textarea name="temuan" class="form-control required" rows="4"></textarea>
                                    </div>
                                    <br>Dokumentasi :<br>
                                    <div class="col-sm-12 col-md-12">
                                        <label class="form-label">Dokumentasi 1</label>
                                        <input type="file" name="dokumentasi[]" data-height="200" />
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <label class="form-label">Dokumentasi 2</label>
                                        <input type="file" name="dokumentasi[]" data-height="200" />
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <label class="form-label">Dokumentasi 3</label>
                                        <input type="file" name="dokumentasi[]" data-height="200" />
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <label class="form-label">Dokumentasi 4</label>
                                        <input type="file" name="dokumentasi[]" data-height="200" />
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3 mb-0">Simpan</button>
							    </div>
							</div>
						</div>
                    </div>
                    </form>

<script src="<?=base_url('assets/main/');?>plugins/jquery-steps/jquery.steps.min.js"></script>
<script src="<?=base_url('assets/main/');?>plugins/parsleyjs/parsley.min.js"></script>

<!--Internal Fileuploads js-->
<script src="<?=base_url('assets/main/');?>plugins/fileuploads/js/fileupload.js"></script>
<script src="<?=base_url('assets/main/');?>plugins/fileuploads/js/file-upload.js"></script>

<script src="<?=base_url('assets/main/');?>plugins/sweet-alert/sweetalert.min.js"></script>