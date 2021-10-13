<link href="<?=base_url('assets/main/');?>plugins/sweet-alert/sweetalert.css" rel="stylesheet">
<!---Internal Fileupload css-->
<link href="<?=base_url('assets/main/');?>plugins/fileuploads/css/fileupload.css" rel="stylesheet" type="text/css"/>
	
                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
                                <h4 class="content-title mb-0 my-auto">Security Report</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Manpower Database / Tambah Manpower</span>
							</div>
						</div>
					</div>
                    <form action="<?=base_url('user/r_manpower/add_save');?>" method="post" id="formInput">
                    <div class="row row-sm">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Tambah Manpower</h4><br>
									</div>
								</div>
								<div class="card-body pt-0">
                                    <div class="row row-sm">
                                        <div class="col-xl-6">
                                            <div class="control-group form-group">
                                                <label class="form-label">KTP Number</label>
                                                <input type="text" name="ktp" class="form-control required">
                                                File
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Name</label>
                                                <input type="text" name="name" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Location Of Birth</label>
                                                <input type="text" name="tmp_lahir" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Date Of Birth</label>
                                                <input type="date" name="tgl_lahir" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Gender</label>
                                                <label class="rdiobox"><input type="radio" name="gender" value="Male" checked> <span>Male</span></label>
                                                <label class="rdiobox"><input type="radio" name="gender" value="Female"> <span>Female</span></label>
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Home Address</label>
                                                <textarea name="address" class="form-control required" rows="4"></textarea>
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Phone / HP</label>
                                                <input type="text" name="phone" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Email</label>
                                                <input type="text" name="email" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Maritial Status</label>
                                                <label class="rdiobox"><input type="radio" name="maritial" value="Married" checked> <span>Married</span></label>
                                                <label class="rdiobox"><input type="radio" name="maritial" value="Unmarried"> <span>Unmarried</span></label>
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Dependent (children+wife)</label>
                                                <input type="number" name="dependent" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Tinggi (cm)</label>
                                                <input type="number" name="tinggi" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">BB (kg)</label>
                                                <input type="number" name="berat" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">NPWP</label>
                                                <input type="text" name="npwp" class="form-control required">
                                                File
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label"># KTA</label>
                                                <label class="rdiobox"><input type="radio" name="kta" value="Gada Pratama" checked> <span>Gada Pratama</span></label>
                                                <label class="rdiobox"><input type="radio" name="kta" value="Gada Madya"> <span>Gada Madya</span></label>
                                                <label class="rdiobox"><input type="radio" name="kta" value="Gada Utama"> <span>Gada Utama</span></label>
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label"># KTA Exp. Date</label>
                                                <input type="date" name="kta_exp" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Bank Name</label>
                                                <input type="text" name="bank" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Bank Acc</label>
                                                <input type="text" name="bank_acc" class="form-control required">
                                                File
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="control-group form-group">
                                                <label class="form-label">Employment Type</label>
                                                <label class="rdiobox"><input type="radio" name="jenis" value="PKWT" checked> <span>Certain Time Contract (PKWT)</span></label>
                                                <label class="rdiobox"><input type="radio" name="jenis" value="PKWTT"> <span>Permanent Employee (PKWTT)</span></label>
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Aggrement/#Contract</label>
                                                <input type="text" name="contract" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Start Date</label>
                                                <input type="date" name="start" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">End Date</label>
                                                <input type="date" name="end" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">ID</label>
                                                <input type="text" name="id" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Status</label>
                                                <label class="rdiobox"><input type="radio" name="status" value="Active" checked> <span>Active</span></label>
                                                <label class="rdiobox"><input type="radio" name="status" value="Terminate/Resign"> <span>Terminate/Resign</span></label>
                                                <label class="rdiobox"><input type="radio" name="status" value="Mutasi"> <span>Mutasi</span></label>
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Working Time</label>
                                                <label class="rdiobox"><input type="radio" name="work" value="Shift/Scheduled" checked> <span>Shift/Scheduled</span></label>
                                                <label class="rdiobox"><input type="radio" name="work" value="Office/Daily Worker"> <span>Office/Daily Worker</span></label>
                                                <label class="rdiobox"><input type="radio" name="work" value="Offshore/Onshore"> <span>Offshore/Onshore</span></label>
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Job Title</label>
                                                <input type="text" name="job" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Position / Pangkat</label>
                                                <input type="text" name="posisi" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Department</label>
                                                <input type="text" name="department" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Location </label>
                                                <input type="text" name="location" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">SKBN</label>
                                                <input type="file" name="lampiran[skbn]" data-height="200" />
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">SKCK</label>
                                                <input type="file" name="lampiran[skck]" data-height="200" />
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Kartu Keluarga / KK</label>
                                                <input type="file" name="lampiran[kk]" data-height="200" />
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Kartu BPJS Kesehatan</label>
                                                <input type="file" name="lampiran[bpjs]" data-height="200" />
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Kartu BPJS Ketenagakerjaan</label>
                                                <input type="file" name="lampiran[bpjs2]" data-height="200" />
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Upload Foto</label>
                                                <input type="file" name="foto" data-height="200" />
                                            </div>
                                        </div>
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