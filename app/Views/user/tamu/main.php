<link href="<?=base_url('assets/main/');?>plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
<link href="<?=base_url('assets/main/');?>plugins/datatable/css/buttons.bootstrap4.min.css" rel="stylesheet">
<link href="<?=base_url('assets/main/');?>plugins/datatable/css/responsive.bootstrap4.min.css" rel="stylesheet" />
<link href="<?=base_url('assets/main/');?>plugins/datatable/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="<?=base_url('assets/main/');?>plugins/datatable/css/responsive.dataTables.min.css" rel="stylesheet">
<link href="<?=base_url('assets/main/');?>plugins/select2/css/select2.min.css" rel="stylesheet">
	
                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Manajemen Tamu</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Daftar Tamu</span>
							</div>
						</div>
					</div>
                    <div class="row row-sm">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Daftar Tamu</h4>
										<div class="d-flex my-xl-auto right-content">
                                            <div class="mb-3 mb-xl-0" style="margin-right: 10px;">
                                                <a href="<?=base_url('user/tamu/add');?>" class="btn btn-success"><i class="mdi mdi-plus"></i> Tambah Tamu</a>
                                            </div>
                                        </div>
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="example1" class="table key-buttons text-md-nowrap">
											<thead>
												<tr>
													<th class="border-bottom-0" width="10%">No</th>
													<th class="border-bottom-0" width="30%">Tanggal Kunjungan</th>
													<th class="border-bottom-0" width="30%">Nama Tamu</th>
													<th class="border-bottom-0" width="20%"></th>
												</tr>
											</thead>
											<tbody>
												<?php
													$no = 0;
													foreach($data->result() as $row){
														$no++;
                                                        $tamu = json_decode($row->pengunjung);
                                                        $nama = "";
                                                        if(is_array($tamu)){
                                                            $nama = $tamu[0]->nama;
                                                        }
												?>
												<tr>
													<td class="border-bottom-0"><?=$no;?></td>
													<td class="border-bottom-0"><?=$row->tgl;?></td>
													<td class="border-bottom-0"><?=$nama;?></td>
													<td class="border-bottom-0"><a href="<?=base_url('user/tamu/detail/'.$row->id_tamu);?>" class="btn btn-primary btn-with-icon btn-block"><i class="typcn typcn-eye"></i> View Report</a></th>
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