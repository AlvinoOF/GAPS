<link href="<?=base_url('assets/main/');?>plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="<?=base_url('assets/main/');?>plugins/datatable/css/buttons.bootstrap4.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/main/');?>plugins/datatable/css/responsive.bootstrap4.min.css" rel="stylesheet" />
    <link href="<?=base_url('assets/main/');?>plugins/datatable/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/main/');?>plugins/datatable/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/main/');?>plugins/select2/css/select2.min.css" rel="stylesheet">
	
                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Report</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Incident Report / Follow Up Incident Report</span>
							</div>
						</div>
					</div>
                    <div class="row row-sm">
						<div class="col-xl-4">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Incident Report</h4>
									</div>
								</div>
								<div class="card-body">
									<?php $rw = $data->row();?>	
									<div class="row">
                                        <div class="col-xl-12">
                                            <h4 class="font-weight-semibold tx-15">IR Number</h4>
                                            <p><?=$rw->incident_no;?></p>
                                        </div>
									</div>
									<div class="row">
                                        <div class="col-xl-12">
                                            <h4 class="font-weight-semibold tx-15">Subject / Judul</h4>
                                            <p><?=$rw->incident_title;?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <h4 class="font-weight-semibold tx-15">Location / Tempat</h4>
                                            <p><?=$rw->incident_location;?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <h4 class="font-weight-semibold tx-15">Date / Tanggal</h4>
                                            <p><?=$rw->incident_date;?></p>
                                        </div>
                                        <div class="col-xl-6">
                                            <h4 class="font-weight-semibold tx-15">Time / Waktu</h4>
                                            <p><?=$rw->incident_time;?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <h4 class="font-weight-semibold tx-15">Reported By / Pelapor</h4>
                                            <p><?=$rw->reported_by;?></p>
                                        </div>
                                        <div class="col-xl-6">
                                            <h4 class="font-weight-semibold tx-15">Date Reported / Tanggal Dilaporkan</h4>
                                            <p><?=$rw->reported_date;?></p>
                                        </div>
                                    </div>
								</div>
                            </div>
						</div>
                        <div class="col-xl-8">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Follow Up Incident Report</h4>
										<div class="d-flex my-xl-auto right-content">
                                            <div class="mb-3 mb-xl-0" style="margin-right: 10px;">
											</div>
                                            <div class="mb-3 mb-xl-0" style="margin-right: 10px;">
                                                <button type="button" class="btn btn-primary"><i class="mdi mdi-refresh"></i> Refresh</button>
                                            </div>
                                            <div class="mb-3 mb-xl-0">
                                                <a href="<?=base_url('user/report_incident/');?>" class="btn btn-secondary">
                                                    <i class="mdi mdi-arrow-left"></i> Back
                                                </a>
                                            </div>
                                        </div>
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="example1" class="table key-buttons text-md-nowrap">
											<thead>
												<tr>
													<th class="border-bottom-0" rowspan="2" width="5%">No</th>
													<th class="border-bottom-0" rowspan="2" width="10%">Tanggal</th>
													<th class="border-bottom-0" rowspan="2" width="40%">Rekomendasi</th>
													<th class="border-bottom-0" colspan="2" width="35%">Follow Up</th>
													<th class="border-bottom-0" rowspan="2" width="10%">Aksi</th>
                                                </tr>
                                                <tr>
                                                    <td>Follow Up</td>
                                                    <td>Tanggal</td>
                                                </tr>
											</thead>
											<tbody>
												<?php
                                                    $no = 0;
                                                    $fl = $follow->result();
													foreach($saran->result() as $rw){
                                                        $no++;
                                                        $id_saran = $rw->id_incident_saran;
                                                        $ffl = array_filter($fl,function($v) use ($id_saran){
                                                            return ($v->id_incident_saran == $id_saran);
                                                        });
                                                        $row = 1;
                                                        if(count($ffl) > 1){
                                                            $row = count($ffl);
                                                        }
												?>
												<tr>
													<td rowspan="<?=$row;?>"><?=$no;?></td>
													<td rowspan="<?=$row;?>"><?=$rw->tgl_saran;?></td>
													<td rowspan="<?=$row;?>"><?=$rw->rekomendasi;?></td>
                                                    <?php if($rw->follow == 1){ ?>
                                                    <?php
                                                        if(count($ffl) != 0){
                                                            $x = 0;
                                                            foreach($ffl as $rw2){
                                                                $x++;
                                                                if($x != 1){
                                                                    echo "<tr>";
                                                                }
                                                    ?>
                                                        <td><?=$rw2->follow_up;?></td>
                                                        <td><?=$rw2->follow_up_date;?></td>
                                                    <?php 
                                                        if($x != 1){
                                                            echo "</tr>";
                                                        }else{
                                                    ?>
                                                        <td>
                                                        <a href="<?=base_url('user/report_incident/follow_up_tambah/'.$rw->id_incident.'/'.$rw->id_incident_saran);?>" class="btn btn-sm btn-success" style="margin:5px;">
															<i class="las la-plus"></i> Tambah Follow Up
                                                        </a>
                                                        </td></tr>
                                                    <?php }}}else{ ?>
                                                        <td colspan="2">Belum ada Follow Up</td>
                                                        <td>
                                                        <a href="<?=base_url('user/report_incident/follow_up_tambah/'.$rw->id_incident.'/'.$rw->id_incident_saran);?>" class="btn btn-sm btn-success" style="margin:5px;">
															<i class="las la-plus"></i> Tambah Follow Up
                                                        </a>
                                                        </td></tr>
                                                    <?php }}else{ ?>
                                                        <td colspan="2">Tidak perlu follow up</td>
                                                        <td>
                                                        <a href="<?=base_url('user/report_incident/follow_up_tambah/'.$rw->id_incident.'/'.$rw->id_incident_saran);?>" class="btn btn-sm btn-success" style="margin:5px;">
															<i class="las la-plus"></i> Tambah Follow Up
                                                        </a>
                                                        </td></tr>
                                                    <?php } ?>
												</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
                    </div>

    <!-- Internal Data tables -->
    <script src="<?=base_url('assets/main/');?>plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url('assets/main/');?>plugins/datatable/js/dataTables.dataTables.min.js"></script>
    <script src="<?=base_url('assets/main/');?>plugins/datatable/js/dataTables.responsive.min.js"></script>
    <script src="<?=base_url('assets/main/');?>plugins/datatable/js/responsive.dataTables.min.js"></script>
    <script src="<?=base_url('assets/main/');?>plugins/datatable/js/jquery.dataTables.js"></script>
    <script src="<?=base_url('assets/main/');?>plugins/datatable/js/dataTables.bootstrap4.js"></script>
    <script src="<?=base_url('assets/main/');?>plugins/datatable/js/dataTables.buttons.min.js"></script>
    <script src="<?=base_url('assets/main/');?>plugins/datatable/js/buttons.bootstrap4.min.js"></script>
    <script src="<?=base_url('assets/main/');?>plugins/datatable/js/jszip.min.js"></script>
    <script src="<?=base_url('assets/main/');?>plugins/datatable/js/pdfmake.min.js"></script>
    <script src="<?=base_url('assets/main/');?>plugins/datatable/js/vfs_fonts.js"></script>
    <script src="<?=base_url('assets/main/');?>plugins/datatable/js/buttons.html5.min.js"></script>
    <script src="<?=base_url('assets/main/');?>plugins/datatable/js/buttons.print.min.js"></script>
    <script src="<?=base_url('assets/main/');?>plugins/datatable/js/buttons.colVis.min.js"></script>
    <script src="<?=base_url('assets/main/');?>plugins/datatable/js/dataTables.responsive.min.js"></script>
    <script src="<?=base_url('assets/main/');?>plugins/datatable/js/responsive.bootstrap4.min.js"></script>

    <script src="<?=base_url('assets/main/');?>js/table-data.js"></script>