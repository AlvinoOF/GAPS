<div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Security Report</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Non Conformity Report / Detail Non Conformity Report</span>
							</div>
						</div>
					</div>
                    <div class="row row-sm">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Detail Non Conformity Report</h4>
										<div class="d-flex my-xl-auto right-content">
                                            <?php if($data->tgl2 == null){?>
                                            <div class="mb-3 mb-xl-0" style="margin-right: 10px;">
												<a href="<?=base_url('user/r_conformity/analisa/'.$data->id_non_conformity);?>" class="btn btn-success"><i class="mdi mdi-plus"></i> Analisa & Tindakan</a>
                                            </div>
                                            <?php }elseif($data->tanggal_review == null){?>
                                            <div class="mb-3 mb-xl-0" style="margin-right: 10px;">
												<a href="<?=base_url('user/r_conformity/review/'.$data->id_non_conformity);?>" class="btn btn-success"><i class="mdi mdi-plus"></i> Review</a>
                                            </div>
                                            <?php }elseif($data->closed_at == null){?>
                                            <div class="mb-3 mb-xl-0" style="margin-right: 10px;">
												<a href="<?=base_url('user/r_conformity/close/'.$data->id_non_conformity);?>" class="btn btn-success"><i class="mdi mdi-plus"></i> Close Report</a>
                                            </div>
                                            <?php } ?>
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
                                    <h4 style="text-align:center">FORMULIR KETIDAKSESUAIAN, TINDAKAN PERBAIKAN DAN PENCEGAHAN</h4><br>
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
                                    <table width="100%" border="1">
                                        <tr>
                                            <td width="60%" style="vertical-align: top;">
                                                <b>Direview Oleh:</b> <?=$data->reviewer;?><br>
                                                <b>Dept/Bagian:</b> <?=$data->dept3;?><br>
                                                <b>Tanggal:</b> <?=$data->tanggal_review;?><br><br>
                                                <b>Tanda Tangan:</b><br><br><br><br></td>
                                            <td width="40%" rowspan="2" style="vertical-align: top;">
                                                <b>Status</b><br>
                                                <?php 
                                                    $ck21 = "";$ck22="";
                                                    if($data->closed_at != null && $data->closed_at != ""){
                                                        $ck22 = "checked";    
                                                    }else{
                                                        $ck21 = "checked";
                                                    }
                                                ?>
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="checkbox">
                                                            <div class="custom-checkbox custom-control">
                                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-21" name="status[]" value="1" <?=$ck21;?> disabled>
                                                                <label for="checkbox-21" class="custom-control-label mt-1">Open</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="checkbox">
                                                            <div class="custom-checkbox custom-control">
                                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-22" name="status[]" value="2" <?=$ck22;?> disabled>
                                                                <label for="checkbox-22" class="custom-control-label mt-1">Close</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <b>Catatan</b><br>
                                                <p><?=$data->catatan;?></p>
                                            </td>
                                        </tr>
                                    </table>
								</div>
							</div>
						</div>
                    </div>