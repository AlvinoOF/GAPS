<link href="<?=base_url('assets/main/');?>plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="<?=base_url('assets/main/');?>plugins/datatable/css/buttons.bootstrap4.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/main/');?>plugins/datatable/css/responsive.bootstrap4.min.css" rel="stylesheet" />
    <link href="<?=base_url('assets/main/');?>plugins/datatable/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/main/');?>plugins/datatable/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/main/');?>plugins/select2/css/select2.min.css" rel="stylesheet">
	
                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Security Report</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Incident Report</span>
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
												<a href="<?=base_url('user/r_incident/tambah');?>" class="btn btn-success"><i class="mdi mdi-plus"></i> Tambah</a>
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
													<th class="border-bottom-0">Tanggal Kejadian</th>
													<th class="border-bottom-0">Nama Kejadian</th>
													<th class="border-bottom-0">Tempat Kejadian</th>
													<th class="border-bottom-0">Status</th>
													<th class="border-bottom-0">Tanggal Report</th>
													<th class="border-bottom-0">Tanggal R2</th>
													<th class="border-bottom-0">Tanggal Closed</th>
													<th class="border-bottom-0">Aksi</th>
												</tr>
											</thead>
											<tbody>
												<?php
													$no = 0;
													foreach($data->result() as $row){
														$no++;
														$sts = "R1";
														$sts2 = "Open";
														if($row->is_r2){
															$sts = "R2";
														}
														if($row->closed_at != null){
															$sts2 = "Closed";
														}
												?>
												<tr>
													<td class="border-bottom-0"><?=$no;?></td>
													<td class="border-bottom-0"><?=$row->tgl_incident;?></td>
													<td class="border-bottom-0"><?=$row->nm_inc;?></td>
													<td class="border-bottom-0"><?=$row->site;?></td>
													<td class="border-bottom-0"><?=$sts;?> - <?=$sts2;?></td>
													<td class="border-bottom-0"><?=$row->created_at;?></td>
													<td class="border-bottom-0"><?=$row->r2_at;?></td>
													<td class="border-bottom-0"><?=$row->closed_at;?></td>
													<td class="border-bottom-0"><a href="<?=base_url('user/r_incident/detail/'.$row->id_incident);?>" class="btn btn-primary btn-with-icon btn-block"><i class="typcn typcn-eye"></i> View Report</a></th>
												</tr>
												<?php
													}
												?>
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