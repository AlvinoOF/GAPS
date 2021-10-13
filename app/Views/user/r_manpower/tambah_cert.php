<link href="<?=base_url('assets/main/');?>plugins/sweet-alert/sweetalert.css" rel="stylesheet">
<!---Internal Fileupload css-->
<link href="<?=base_url('assets/main/');?>plugins/fileuploads/css/fileupload.css" rel="stylesheet" type="text/css"/>
	
                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
                                <h4 class="content-title mb-0 my-auto">Security Report</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Manpower Database / Tambah Certificate</span>
							</div>
						</div>
					</div>
                    <form action="<?=base_url('user/r_manpower/cert_save');?>" method="post" id="formInput">
                    <div class="row row-sm">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Tambah Certificate</h4><br>
									</div>
								</div>
								<div class="card-body pt-0">
                                    <div class="control-group form-group">
                                        <label class="form-label">Certificate Name</label>
                                        <input type="text" name="nama" class="form-control required">
                                    </div>
                                    <div class="control-group form-group">
                                        <label class="form-label">Certificate Type</label>
                                        <select name="type" class="form-control required">
                                            <option>AK 3 Umum</option>
                                            <option>First Aid</option>
                                            <option>Basic Fire Fighter</option>
                                            <option>HUET</option>
                                            <option>T BOSIET</option>
                                            <option>POP</option>
                                            <option>Beladiri</option>
                                        </select>
                                    </div>
                                    <div class="row row-sm">
                                        <div class="col-xl-6">
                                            <div class="control-group form-group">
                                                <label class="form-label">Issued Date</label>
                                                <input type="date" name="issued" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Expired Date</label>
                                                <input type="date" name="expired" class="form-control required">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="control-group form-group">
                                                <label class="form-label">Recurrent</label>
                                                <label class="rdiobox"><input type="radio" name="recurrent" value="Yes" checked> <span>Yes</span></label>
                                                <label class="rdiobox"><input type="radio" name="recurrent" value="No"> <span>No</span></label>
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Recurrent Plan</label>
                                                <input type="date" name="recurrent_plan" class="form-control required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <label class="form-label">Remark</label>
                                        <input type="text" name="remark" class="form-control required">
                                    </div>
                                    <div class="control-group form-group">
                                        <label class="form-label">Upload Certificate</label>
                                        <input type="file" name="cert" data-height="200" />
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