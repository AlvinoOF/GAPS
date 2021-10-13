<div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Security Report</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Non Conformity Report / Detail Non Conformity Report / Analisa dan Tindakan</span>
							</div>
						</div>
					</div>
                    <form action="<?=base_url('user/r_conformity/review_save');?>" method="post" id="formInput">
                    <input type="hidden" name="id" value="<?=$data->id_non_conformity;?>">
                    <div class="row row-sm">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Analisa dan Tindakan Perbaikan & Pencegahan</h4>
									</div>
								</div>
								<div class="card-body">
                                    <table width="100%" border="1">
                                        <tr>
                                            <td width="15%">Pelapor:</td>
                                            <td width="25%"><?=$data->pelapor;?></td>
                                            <td width="20%" rowspan="2">Tanda Tangan :<br>________________________</td>
                                            <td width="15%">Tanggal:</td>
                                            <td width="25%"><?=$data->tgl;?></td>
                                        </tr>
                                        <tr>
                                            <td>Dept/Bagian:</td>
                                            <td><?=$data->dept;?></td>
                                            <td>Lokasi</td>
                                            <td><?=$data->lokasi;?></td>
                                        </tr>
                                    </table>
                                    <hr>
                                    <?php 
                                        $ck1 = "";$ck2="";
                                        if($data->jenis=="Permasalahan"){
                                            $ck1 = "Checked";
                                        }else{
                                            $ck2 = "Checked";
                                        }
                                    ?>
                                    
                                    <div class="row">
                                        <div class="col-xl-3" style="border-bottom: 1px solid #000;">
                                            <div class="checkbox">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-11" <?=$ck1;?> disabled>
                                                    <label for="checkbox-11" class="custom-control-label mt-1">Permasalahan</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3" style="border-bottom: 1px solid #000;">
                                            <div class="checkbox">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-12" <?=$ck2;?> disabled>
                                                    <label for="checkbox-12" class="custom-control-label mt-1">Potensi</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <br>Temuan<br>
                                    <p style="margin-left: 30px;min-height: 75px;"><?=$data->temuan;?></p>
                                    <br>Dokumentasi<br>
                                    <table width="100%" border="1">
                                        <tr>
                                            <td width="60%"><b>Penanggung Jawab:</b> <?=$data->penanggung_jawab;?><br><b>Dept/Bagian:</b> <?=$data->dept2;?></td>
                                            <td width="40%" rowspan="2">Tanda Tangan :<br>________________________</td>
                                        </tr>
                                    </table>
                                    <br>Analisa Penyebab:<br>
                                    <p style="margin-left: 30px;min-height: 75px;"><?=$data->analisa;?></p>
                                    <br>Tindakan Perbaikan & Pencegahan:<br>
                                    <p style="margin-left: 30px;min-height: 75px;"><?=$data->tindakan;?></p>
                                    <table width="100%" border="1">
                                        <tr>
                                            <td><b>Tanggal/Batas Penyelesaian:</b> <?=$data->batas;?></td>
                                        </tr>
                                    </table>
                                    <br>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="control-group form-group">
                                                <label class="form-label">Direview Oleh</label>
                                                <input type="text" name="reviewer" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Dept/Bagian</label>
                                                <input type="text" name="dept3" class="form-control required">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="control-group form-group">
                                                <label class="form-label">Tanggal</label>
                                                <input type="date" name="tgl" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Status</label>
                                                <label class="rdiobox"><input type="radio" name="status" value="Open"> <span>Open</span></label>
                                                <label class="rdiobox"><input type="radio" name="status" value="Close"> <span>Close</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <label class="form-label">Catatan</label>
                                        <textarea name="catatan" class="form-control required" rows="4"></textarea>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary mt-3 mb-0">Simpan</button>
								</div>
							</div>
						</div>
                    </div>


<script src="<?=base_url('assets/main/');?>plugins/jquery-steps/jquery.steps.min.js"></script>
<script src="<?=base_url('assets/main/');?>plugins/parsleyjs/parsley.min.js"></script>

<!--Internal Fileuploads js-->
<script src="<?=base_url('assets/main/');?>plugins/fileuploads/js/fileupload.js"></script>
<script src="<?=base_url('assets/main/');?>plugins/fileuploads/js/file-upload.js"></script>

<script src="<?=base_url('assets/main/');?>plugins/sweet-alert/sweetalert.min.js"></script>