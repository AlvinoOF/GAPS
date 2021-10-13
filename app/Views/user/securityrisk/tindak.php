<link href="<?=base_url('assets/main/');?>plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="<?=base_url('assets/main/');?>plugins/datatable/css/buttons.bootstrap4.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/main/');?>plugins/datatable/css/responsive.bootstrap4.min.css" rel="stylesheet" />
    <link href="<?=base_url('assets/main/');?>plugins/datatable/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/main/');?>plugins/datatable/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/main/');?>plugins/select2/css/select2.min.css" rel="stylesheet">
	
                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Security Risk</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Detail Security Risk</span>
							</div>
						</div>
					</div>
                    <div class="row row-sm">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0"><?=$judul;?></h4>
										<div class="d-flex my-xl-auto right-content">
                                            <div class="mb-3 mb-xl-0">
                                                <button type="button" class="btn btn-primary"><i class="mdi mdi-refresh"></i> Refresh</button>
                                            </div>
                                            <div class="mb-3 mb-xl-0">
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
													<th class="border-bottom-0">Deskripsi Program</th>
													<th class="border-bottom-0">Target</th>
													<th class="border-bottom-0">Realisasi</th>
													<th class="border-bottom-0">Keterangan</th>
												</tr>
											</thead>
											<tbody>
											<?php if($id == "1"){?>
												<tr>
													<td>1</td>
													<td>Refresh penerapan 3S setiap minggu</td>
													<td>Minggu Ke-2 setiap bulan</td>
													<td>Minggu Ke-2 setiap bulan</td>
													<td></td>
												</tr>
											<?php }elseif($id == "2"){ ?>
												<tr>
													<td>1</td>
													<td>Awareness aspek pengamanan</td>
													<td>Minggu Ke-2 setiap bulan</td>
													<td>Minggu Ke-2 setiap bulan</td>
													<td></td>
												</tr>
												<tr>
													<td>2</td>
													<td>Penambahan jumlah satpam</td>
													<td>Minggu Ke-4 November</td>
													<td>-</td>
													<td>Penambahan sebanyak 5 orang</td>
												</tr>
												<tr>
													<td>3</td>
													<td>Penambahan jumlah CCTV</td>
													<td>Minggu Ke-3 Oktober</td>
													<td>-</td>
													<td>Penambahan sebanyak 10 unit</td>
												</tr>
												<tr>
													<td>4</td>
													<td>Review Prosedur & Jadwal Patroli</td>
													<td>Minggu Ke-5 September</td>
													<td>Minggu Ke-1 Oktober</td>
													<td>Review baru dilaksanakan awal bulan Oktober karena di akhir bulan September ada kunjungan Menteri</td>
												</tr>
												<tr>
													<td>5</td>
													<td>Simulasi keadaan darurat peledakan</td>
													<td>Minggu Ke-3 Desember</td>
													<td>-</td>
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