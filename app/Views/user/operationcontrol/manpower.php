<link href="<?=base_url('assets/main/');?>plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="<?=base_url('assets/main/');?>plugins/datatable/css/buttons.bootstrap4.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/main/');?>plugins/datatable/css/responsive.bootstrap4.min.css" rel="stylesheet" />
    <link href="<?=base_url('assets/main/');?>plugins/datatable/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/main/');?>plugins/datatable/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/main/');?>plugins/select2/css/select2.min.css" rel="stylesheet">
	
                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Operation Control</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Man Power</span>
							</div>
						</div>
					</div>
                    <div class="row row-sm">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Man Power</h4>
										<div class="d-flex my-xl-auto right-content">
											<div class="mb-3 mb-xl-0" style="margin-right: 10px;">
												<a href="<?=base_url('user/manpower/tambah/');?>" class="btn btn-success"><i class="mdi mdi-plus"></i> Tambah</a>
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
													<th class="border-bottom-0" rowspan="2">No</th>
													<th class="border-bottom-0" rowspan="2">Posisi/Lokasi</th>
													<th class="border-bottom-0" colspan="4">Existing</th>
													<th class="border-bottom-0" rowspan="2">Total</th>
													<th class="border-bottom-0" colspan="4">Propose</th>
													<th class="border-bottom-0" rowspan="2">Total</th>
													<th class="border-bottom-0" rowspan="2">Remarks</th>
													<th class="border-bottom-0" rowspan="2"></th>
												</tr>
												<tr>
													<th class="border-bottom-0">D</th>
													<th class="border-bottom-0">N</th>
													<th class="border-bottom-0">NS</th>
													<th class="border-bottom-0">Off</th>
													<th class="border-bottom-0">D</th>
													<th class="border-bottom-0">N</th>
													<th class="border-bottom-0">Off</th>
													<th class="border-bottom-0">NS</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Gate 1 (in-out)</td>
													<td>1</td>
													<td>1</td>
													<td>0</td>
													<td>1</td>
													<td>3</td>
													<td>1</td>
													<td>1</td>
													<td>1</td>
													<td>0</td>
													<td>3</td>
													<td></td>
													<td></td>
												</tr>
												<tr>
													<td>2</td>
													<td>Gate 2 tentative</td>
													<td>0</td>
													<td>0</td>
													<td>0</td>
													<td>0</td>
													<td>0</td>
													<td>1</td>
													<td>1</td>
													<td>1</td>
													<td>0</td>
													<td>3</td>
													<td>Ishoma/backup</td>
													<td></td>
												</tr>
												<tr>
													<td>3</td>
													<td>Posko</td>
													<td>1</td>
													<td>1</td>
													<td>0</td>
													<td>1</td>
													<td>3</td>
													<td>1</td>
													<td>1</td>
													<td>1</td>
													<td>0</td>
													<td>3</td>
													<td>Ishoma/backup</td>
													<td></td>
												</tr>
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