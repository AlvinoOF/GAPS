	<link href="<?=base_url('assets/main/');?>plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="<?=base_url('assets/main/');?>plugins/datatable/css/buttons.bootstrap4.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/main/');?>plugins/datatable/css/responsive.bootstrap4.min.css" rel="stylesheet" />
    <link href="<?=base_url('assets/main/');?>plugins/datatable/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/main/');?>plugins/datatable/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/main/');?>plugins/select2/css/select2.min.css" rel="stylesheet">
	
                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Report</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Incident Report</span>
							</div>
						</div>
					</div>
                    <div class="row row-sm">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Incident Report</h4>
										<div class="d-flex my-xl-auto right-content">
                                            <div class="mb-3 mb-xl-0" style="margin-right: 10px;">
												<a href="<?=base_url('user/report_incident/tambah');?>" class="btn btn-success"><i class="mdi mdi-plus"></i> Tambah</a>
											</div>
                                            <div class="mb-3 mb-xl-0">
                                                <button type="button" class="btn btn-primary"><i class="mdi mdi-refresh"></i> Refresh</button>
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
													<th class="border-bottom-0"></th>
													<th class="border-bottom-0">Tanggal</th>
													<th class="border-bottom-0">Nama Kejadian</th>
													<th class="border-bottom-0">Tempat Kejadian</th>
													<th class="border-bottom-0">Jenis Kejadian</th>
													<th class="border-bottom-0">Status</th>
													<th class="border-bottom-0">Aksi</th>
												</tr>
											</thead>
											<tbody>
												<?php
													$no = 0;
													foreach($data->result() as $rw){
														$no++;
												?>
												<tr>
													<td><?=$no;?></td>
													<td>
														<?php if($rw->important_level == 'Red'){ ?>
															<div class="btn btn-sm btn-danger">Urgent</div>
														<?php } ?>
													</td>
													<td><?=$rw->incident_date;?> - <?=$rw->incident_time;?></td>
													<td><?=$rw->incident_title;?></td>
													<td><?=$rw->incident_location;?></td>
													<td><?=$rw->nm_cat;?></td>
													<td><?=$rw->incident_status;?></td>
													<td>
														<a href="<?=base_url('user/report_incident/detail/'.$rw->id_incident);?>" class="btn btn-sm btn-info" style="margin:5px;">
															<i class="las la-eye"></i> Detail
														</a>
														<a href="<?=base_url('user/report_incident/follow_up/'.$rw->id_incident);?>" class="btn btn-sm btn-success" style="margin:5px;">
															<i class="las la-step-forward"></i> Follow Up
														</a>
														<a href="<?=base_url('user/report_incident/dokumentasi/'.$rw->id_incident);?>" class="btn btn-sm btn-teal" style="margin:5px;">
															<i class="las la-file-image"></i> Dokumentasi
														</a>
														<!-- <a href="<?=base_url('user/report_incident/cetak/'.$rw->id_incident);?>" class="btn btn-sm btn-secondary" style="margin:5px;">
															<i class="las la-print"></i> Print
														</a> -->
														<a href="<?=base_url('user_data/'.$rw->id_incident.".pdf");?>" class="btn btn-sm btn-secondary" style="margin:5px;" target="_blank">
															<i class="las la-print"></i> Print
														</a>
													</td>
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