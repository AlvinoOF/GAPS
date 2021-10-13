<link href="<?=base_url('assets/main/');?>plugins/sweet-alert/sweetalert.css" rel="stylesheet">
<!---Internal Fileupload css-->
<link href="<?=base_url('assets/main/');?>plugins/fileuploads/css/fileupload.css" rel="stylesheet" type="text/css"/>
	
                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
                                <h4 class="content-title mb-0 my-auto">	Security Risk</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Risk Identification / Tambah Risk Identification</span>
							</div>
						</div>
					</div>
                    <form action="<?=base_url('user/risk/tambah_save');?>" method="post" id="formInput">
                    <div class="row row-sm">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Tambah Risk Identification</h4><br>
									</div>
								</div>
								<div class="card-body pt-0">
                                    <div class="control-group form-group">
                                        <label class="form-label">Aktivitas</label>
                                        <input type="text" name="aktivitas" class="form-control required">
                                    </div>
                                    <div class="control-group form-group">
                                        <label class="form-label">Aset</label>
                                        <input type="text" name="aset" class="form-control required">
                                    </div>
                                    <div class="control-group form-group">
                                        <label class="form-label">Ancaman</label>
                                        <input type="text" name="ancaman" class="form-control required">
                                    </div>
                                    <div class="control-group form-group">
                                        <label class="form-label">Pengendalian</label>
                                        <input type="text" name="pengendalian" class="form-control required">
                                    </div>
                                    <div class="control-group form-group">
                                        <label class="form-label">Kerawanan</label>
                                        <input type="text" name="kerawanan" class="form-control required">
                                    </div>
                                    <div class="form-group">
                                        <label>Peluang</label>
                                        <select class="form-control" name="peluang">
                                            <option value="0">A - Almost Certain</option>
                                            <option value="1">B - Likely</option>
                                            <option value="2">C - Moderate</option>
                                            <option value="3">D - Unlikely</option>
                                            <option value="4">E - Rare</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Keparahan</label>
                                        <select class="form-control" name="keparahan">
                                            <option value="0">1 - Tidak mengganggu proses pekerjaan, tidak ada luka, kerugian finansial sangat kecil</option>
                                            <option value="1">2 - Tidak mengganggu proses pekerjaan, berpotensi menimbulkan luka ringan, kerugian finansial kecil</option>
                                            <option value="2">3 - Mengganggu proses pekerjaan, berpotensi menimbulkan luka sedang, kerugian finansial sedang</option>
                                            <option value="3">4 - Mengganggu proses produksi, berpotensi menimbulkan luka berat, kerugian finansial besar</option>
                                            <option value="4">5 - Dapat mengakibatkan terhentinya proses produksi, berpotensi menimbulkan korban jiwa, kerugian finansial sangat besar</option>
                                        </select>
                                    </div>
                                    <div class="control-group form-group">
                                        <label class="form-label">Mitigasi</label>
                                        <input type="text" name="mitigasi" class="form-control required">
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