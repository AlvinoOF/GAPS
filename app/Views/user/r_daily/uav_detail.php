<div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Security Report</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Daily Report / Daily UAV Report / Detail Daily UAV Report</span>
							</div>
						</div>
					</div>
                    <div class="row row-sm">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Detail Daily UAV Report</h4>
										<div class="d-flex my-xl-auto right-content">
                                            <div class="mb-3 mb-xl-0" style="margin-right: 10px;">
												<a href="#" class="btn btn-warning"><i class="mdi mdi-plus"></i> Edit</a>
											</div>
                                            <div class="mb-3 mb-xl-0" style="margin-right: 10px;">
												<a href="#" class="btn btn-danger"><i class="mdi mdi-delete"></i> Delete</a>
											</div>
                                        </div>
									</div>
								</div>
								<div class="card-body">
                                    <h4 style="text-align:center">UAV FORM</h4><br>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <table width="100%" border="1">
                                                <tr>
                                                    <td width="40%">DATE</td>
                                                    <td width="60%"><?=$data->tanggal;?></td>
                                                </tr>
                                                <tr>
                                                    <td>LOCATION/SITE</td>
                                                    <td><?=$data->location;?></td>
                                                </tr>
                                                <tr>
                                                    <td>PILOT & OBSERVER</td>
                                                    <td><?=$data->pilot;?></td>
                                                </tr>
                                            </table>
                                            <br>
                                        </div>
                                    </div>
                                    <?php
                                        $dv1="";$dv2="";$dv3="";
                                        $ac1="";$ac2="";$ac3="";$ac4="";
                                        switch($data->device){
                                            case "1": $dv1="Checked";break;
                                            case "2": $dv2="Checked";break;
                                            case "3": $dv3="Checked";break;
                                        }
                                        switch($data->activity){
                                            case "1": $ac1="Checked";break;
                                            case "2": $ac2="Checked";break;
                                            case "3": $ac3="Checked";break;
                                            case "4": $ac4="Checked";break;
                                        }
                                    ?>
                                    <div class="row mg-t-10">
                                        <div class="col-lg-3">DEVICE NAME</div>
										<div class="col-lg-3">
                                            <label class="rdiobox"><input type="radio" name="device" value="1" <?=$dv1;?> disabled> <span>DJI MAVIC 2 ENTERPRISE</span></label>
										</div>
										<div class="col-lg-3 mg-t-20 mg-lg-t-0">
											<label class="rdiobox"><input type="radio" name="device" value="2" <?=$dv2;?> disabled> <span>DJI MAVIC 2 ZOOM ENTRIPRICE</span></label>
										</div>
										<div class="col-lg-3 mg-t-20 mg-lg-t-0">
                                            <label class="rdiobox"><input type="radio" name="device" value="3" <?=$dv3;?> disabled> <span>FIXED WING</span></label>
										</div>
									</div>
                                    <div class="row mg-t-10">
                                        <div class="col-lg-3">NAME OF ACTIVITY</div>
										<div class="col-lg-2">
                                            <label class="rdiobox"><input type="radio" name="activity" value="1" <?=$ac1;?> disabled> <span>Flight Drone Patrol</span></label>
										</div>
										<div class="col-lg-2 mg-t-20 mg-lg-t-0">
											<label class="rdiobox"><input type="radio" name="activity" value="2" <?=$ac2;?> disabled> <span>Spesial Mission</span></label>
										</div>
										<div class="col-lg-2 mg-t-20 mg-lg-t-0">
                                            <label class="rdiobox"><input type="radio" name="activity" value="3" <?=$ac3;?> disabled> <span>Mapping</span></label>
										</div>
										<div class="col-lg-2 mg-t-20 mg-lg-t-0">
                                            <label class="rdiobox"><input type="radio" name="activity" value="4" <?=$ac4;?> disabled> <span>Event</span></label>
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
                                                <?php
                                                    $flight = json_decode($data->flight);
                                                    if(is_array($flight)){
                                                        $no = 0;
                                                        foreach($flight as $row){
                                                            $no++;
                                                            $sc = "";$theft = "";$shelter = "";$mass = "";$fire = "";$natural = "";$etc = "";
                                                            if(isset($row->sc)){$sc="checked";}
                                                            if(isset($row->theft)){$theft="checked";}
                                                            if(isset($row->shelter)){$shelter="checked";}
                                                            if(isset($row->mass)){$mass="checked";}
                                                            if(isset($row->fire)){$fire="checked";}
                                                            if(isset($row->natural)){$natural="checked";}
                                                            if(isset($row->etc)){$etc="checked";}
                                                ?>
                                                <tr>
                                                    <td><?=$no;?>.</td>
                                                    <td><?=$row->from;?></td>
                                                    <td><?=$row->to;?></td>
                                                    <td><?=$row->departure;?></td>
                                                    <td><?=$row->destination;?></td>
                                                    <td><?=$row->altitude;?></td>
                                                    <td><?=$row->distance;?></td>
                                                    <td><input type="checkbox" name="sc" class="form-control" value="1" <?=$sc;?> disabled></td>
                                                    <td><input type="checkbox" name="theft" class="form-control" value="1" <?=$theft;?> disabled></td>
                                                    <td><input type="checkbox" name="shelter" class="form-control" value="1" <?=$shelter;?> disabled></td>
                                                    <td><input type="checkbox" name="mass" class="form-control" value="1" <?=$mass;?> disabled></td>
                                                    <td><input type="checkbox" name="fire" class="form-control" value="1" <?=$fire;?> disabled></td>
                                                    <td><input type="checkbox" name="natural" class="form-control" value="1" <?=$natural;?> disabled></td>
                                                    <td><input type="checkbox" name="etc" class="form-control" value="1" <?=$etc;?> disabled></td>
                                                </tr>
                                                <?php }} ?>
                                            </table>
                                        </div>
                                    </div>
                                    <br>
                                    <table width="100%" border="1">
                                        <tr><td>
                                        Remark :<br>
                                        <p><?=$data->remarks;?></p>
                                        </td></tr>
                                    </table>
								</div>
							</div>
						</div>
                    </div>