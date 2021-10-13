<link href="<?=base_url('assets/main/');?>plugins/sweet-alert/sweetalert.css" rel="stylesheet">
<!---Internal Fileupload css-->
<link href="<?=base_url('assets/main/');?>plugins/fileuploads/css/fileupload.css" rel="stylesheet" type="text/css"/>
	
                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
                            <h4 class="content-title mb-0 my-auto">Security Report</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Daily Report / Daily UAV Report / Tambah Daily UAV Report</span>
							</div>
						</div>
					</div>
                    <!-- <form action="#" method="post" id="formInput"> -->
                    <form action="<?=base_url('user/r_daily/uav_save');?>" method="post" id="formInput">
                    <div class="row row-sm">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Tambah Daily UAV Report</h4>
									</div>
								</div>
								<div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="control-group form-group">
                                                <label class="form-label">Tanggal</label>
                                                <input type="date" name="tanggal" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Location/Site</label>
                                                <input type="text" name="location" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Pilot & Observer</label>
                                                <input type="text" name="pilot" class="form-control required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mg-t-10">
                                        <div class="col-lg-3">DEVICE NAME</div>
										<div class="col-lg-3">
                                            <label class="rdiobox"><input type="radio" name="device" value="1"> <span>DJI MAVIC 2 ENTERPRISE</span></label>
										</div>
										<div class="col-lg-3 mg-t-20 mg-lg-t-0">
											<label class="rdiobox"><input type="radio" name="device" value="2"> <span>DJI MAVIC 2 ZOOM ENTRIPRICE</span></label>
										</div>
										<div class="col-lg-3 mg-t-20 mg-lg-t-0">
                                            <label class="rdiobox"><input type="radio" name="device" value="3"> <span>FIXED WING</span></label>
										</div>
									</div>
                                    <div class="row mg-t-10">
                                        <div class="col-lg-3">NAME OF ACTIVITY</div>
										<div class="col-lg-2">
                                            <label class="rdiobox"><input type="radio" name="activity" value="1"> <span>Flight Drone Patrol</span></label>
										</div>
										<div class="col-lg-2 mg-t-20 mg-lg-t-0">
											<label class="rdiobox"><input type="radio" name="activity" value="2"> <span>Spesial Mission</span></label>
										</div>
										<div class="col-lg-2 mg-t-20 mg-lg-t-0">
                                            <label class="rdiobox"><input type="radio" name="activity" value="3"> <span>Mapping</span></label>
										</div>
										<div class="col-lg-2 mg-t-20 mg-lg-t-0">
                                            <label class="rdiobox"><input type="radio" name="activity" value="4"> <span>Event</span></label>
										</div>
									</div>
                                    <br>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <table width="100%" border="1">
                                                <tr>
                                                    <th rowspan="2" style="text-align:center;">NO</th>
                                                    <th colspan="2" style="text-align:center;">FLIGHT TIME</th>
                                                    <th rowspan="2" style="text-align:center;">DEPARTURE</th>
                                                    <th rowspan="2" style="text-align:center;">DESTINATION</th>
                                                    <th rowspan="2" style="text-align:center;">Altitude (Meter)</th>
                                                    <th rowspan="2" style="text-align:center;">Distance (Meter)</th>
                                                    <th colspan="7" style="text-align:center;">FINDINGS</th>
                                                </tr>
                                                <tr>
                                                    <th>FROM</th>
                                                    <th>TO</th>
                                                    <th width="5%">SAFE CONTROLLED</th>
                                                    <th width="5%">THEFT</th>
                                                    <th width="5%">SHELTER</th>
                                                    <th width="5%">MASS MOVEMENT</th>
                                                    <th width="5%">FIRE</th>
                                                    <th width="5%">NATURAL DISASTERS</th>
                                                    <th width="5%">ETC</th>
                                                </tr>
                                                <tr>
                                                    <td>1.</td>
                                                    <td><input type="time" name="flight[0][from]" class="form-control required"></td>
                                                    <td><input type="time" name="flight[0][to]" class="form-control required"></td>
                                                    <td><input type="text" name="flight[0][departure]" class="form-control required"></td>
                                                    <td><input type="text" name="flight[0][destination]" class="form-control required"></td>
                                                    <td><input type="text" name="flight[0][altitude]" class="form-control required"></td>
                                                    <td><input type="text" name="flight[0][distance]" class="form-control required"></td>
                                                    <td><input type="checkbox" name="flight[0][sc]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[0][theft]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[0][shelter]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[0][mass]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[0][fire]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[0][natural]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[0][etc]" class="form-control" value="1"></td>
                                                </tr>
                                                <tr>
                                                    <td>2.</td>
                                                    <td><input type="time" name="flight[1][from]" class="form-control required"></td>
                                                    <td><input type="time" name="flight[1][to]" class="form-control required"></td>
                                                    <td><input type="text" name="flight[1][departure]" class="form-control required"></td>
                                                    <td><input type="text" name="flight[1][destination]" class="form-control required"></td>
                                                    <td><input type="text" name="flight[1][altitude]" class="form-control required"></td>
                                                    <td><input type="text" name="flight[1][distance]" class="form-control required"></td>
                                                    <td><input type="checkbox" name="flight[1][sc]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[1][theft]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[1][shelter]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[1][mass]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[1][fire]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[1][natural]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[1][etc]" class="form-control" value="1"></td>
                                                </tr>
                                                <tr>
                                                    <td>3.</td>
                                                    <td><input type="time" name="flight[2][from]" class="form-control required"></td>
                                                    <td><input type="time" name="flight[2][to]" class="form-control required"></td>
                                                    <td><input type="text" name="flight[2][departure]" class="form-control required"></td>
                                                    <td><input type="text" name="flight[2][destination]" class="form-control required"></td>
                                                    <td><input type="text" name="flight[2][altitude]" class="form-control required"></td>
                                                    <td><input type="text" name="flight[2][distance]" class="form-control required"></td>
                                                    <td><input type="checkbox" name="flight[2][sc]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[2][theft]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[2][shelter]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[2][mass]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[2][fire]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[2][natural]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[2][etc]" class="form-control" value="1"></td>
                                                </tr>
                                                <tr>
                                                    <td>4.</td>
                                                    <td><input type="time" name="flight[3][from]" class="form-control required"></td>
                                                    <td><input type="time" name="flight[3][to]" class="form-control required"></td>
                                                    <td><input type="text" name="flight[3][departure]" class="form-control required"></td>
                                                    <td><input type="text" name="flight[3][destination]" class="form-control required"></td>
                                                    <td><input type="text" name="flight[3][altitude]" class="form-control required"></td>
                                                    <td><input type="text" name="flight[3][distance]" class="form-control required"></td>
                                                    <td><input type="checkbox" name="flight[3][sc]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[3][theft]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[3][shelter]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[3][mass]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[3][fire]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[3][natural]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[3][etc]" class="form-control" value="1"></td>
                                                </tr>
                                                <tr>
                                                    <td>5.</td>
                                                    <td><input type="time" name="flight[4][from]" class="form-control required"></td>
                                                    <td><input type="time" name="flight[4][to]" class="form-control required"></td>
                                                    <td><input type="text" name="flight[4][departure]" class="form-control required"></td>
                                                    <td><input type="text" name="flight[4][destination]" class="form-control required"></td>
                                                    <td><input type="text" name="flight[4][altitude]" class="form-control required"></td>
                                                    <td><input type="text" name="flight[4][distance]" class="form-control required"></td>
                                                    <td><input type="checkbox" name="flight[4][sc]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[4][theft]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[4][shelter]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[4][mass]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[4][fire]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[4][natural]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[4][etc]" class="form-control" value="1"></td>
                                                </tr>
                                                <tr>
                                                    <td>6.</td>
                                                    <td><input type="time" name="flight[5][from]" class="form-control required"></td>
                                                    <td><input type="time" name="flight[5][to]" class="form-control required"></td>
                                                    <td><input type="text" name="flight[5][departure]" class="form-control required"></td>
                                                    <td><input type="text" name="flight[5][destination]" class="form-control required"></td>
                                                    <td><input type="text" name="flight[5][altitude]" class="form-control required"></td>
                                                    <td><input type="text" name="flight[5][distance]" class="form-control required"></td>
                                                    <td><input type="checkbox" name="flight[5][sc]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[5][theft]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[5][shelter]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[5][mass]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[5][fire]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[5][natural]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[5][etc]" class="form-control" value="1"></td>
                                                </tr>
                                                <tr>
                                                    <td>7.</td>
                                                    <td><input type="time" name="flight[6][from]" class="form-control required"></td>
                                                    <td><input type="time" name="flight[6][to]" class="form-control required"></td>
                                                    <td><input type="text" name="flight[6][departure]" class="form-control required"></td>
                                                    <td><input type="text" name="flight[6][destination]" class="form-control required"></td>
                                                    <td><input type="text" name="flight[6][altitude]" class="form-control required"></td>
                                                    <td><input type="text" name="flight[6][distance]" class="form-control required"></td>
                                                    <td><input type="checkbox" name="flight[6][sc]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[6][theft]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[6][shelter]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[6][mass]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[6][fire]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[6][natural]" class="form-control" value="1"></td>
                                                    <td><input type="checkbox" name="flight[6][etc]" class="form-control" value="1"></td>
                                                </tr>
                                            </table>
                                            <br>
                                            Remarks:<br>
                                            <textarea name="remarks" class="form-control required" rows="6"></textarea>
                                            <br>
                                            <button type="submit" class="btn btn-primary mt-3 mb-0">Simpan</button>
                                        </div>
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