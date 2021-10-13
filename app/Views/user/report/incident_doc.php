	<link href="<?=base_url('assets/main/');?>plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="<?=base_url('assets/main/');?>plugins/datatable/css/buttons.bootstrap4.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/main/');?>plugins/datatable/css/responsive.bootstrap4.min.css" rel="stylesheet" />
    <link href="<?=base_url('assets/main/');?>plugins/datatable/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/main/');?>plugins/datatable/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/main/');?>plugins/select2/css/select2.min.css" rel="stylesheet">
	
                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Report</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Incident Report / Dokumentasi Incident Report</span>
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
										<h4 class="card-title mg-b-0">Dokumentasi Incident Report</h4>
										<div class="d-flex my-xl-auto right-content">
                                            <div class="mb-3 mb-xl-0" style="margin-right: 10px;">
												<a href="<?=base_url('user/report_incident/dokumentasi_tambah/'.$id);?>" class="btn btn-success"><i class="mdi mdi-plus"></i> Tambah</a>
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
													<th class="border-bottom-0">No</th>
													<th class="border-bottom-0">Foto</th>
													<th class="border-bottom-0">Keterangan</th>
													<th class="border-bottom-0">Tanggal</th>
													<th class="border-bottom-0">Aksi</th>
												</tr>
											</thead>
											<tbody>
												<?php
													$no = 0;
													foreach($doc->result() as $rw){
														$no++;
												?>
												<tr>
													<td><?=$no;?></td>
													<td><img src="<?=base_url('user_data/incident/doc/'.$rw->incident_foto);?>" style="max-height:100px"></td>
													<td><?=$rw->keterangan;?></td>
													<td><?=$rw->tanggal;?></td>
													<td></td>
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