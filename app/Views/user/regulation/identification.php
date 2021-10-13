<link href="<?=base_url('assets/main/');?>plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="<?=base_url('assets/main/');?>plugins/datatable/css/buttons.bootstrap4.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/main/');?>plugins/datatable/css/responsive.bootstrap4.min.css" rel="stylesheet" />
    <link href="<?=base_url('assets/main/');?>plugins/datatable/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/main/');?>plugins/datatable/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/main/');?>plugins/select2/css/select2.min.css" rel="stylesheet">
	
                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Regulation</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Identification & Evaluation</span>
							</div>
						</div>
					</div>
                    <div class="row row-sm">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Identification & Evaluation</h4>
										<div class="d-flex my-xl-auto right-content">
											<div class="mb-3 mb-xl-0" style="margin-right: 10px;">
												<a href="<?=base_url('user/regulation/tambah/');?>" class="btn btn-success"><i class="mdi mdi-plus"></i> Tambah</a>
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
													<th class="border-bottom-0" rowspan="2">Aspek Regulasi</th>
													<th class="border-bottom-0" colspan="2">Peraturan atau Persyaratan</th>
													<th class="border-bottom-0" rowspan="2">Rangkuman Isi</th>
													<th class="border-bottom-0" colspan="3">Metode Aplikasi</th>
													<th class="border-bottom-0" colspan="2">Pemenuhan</th>
													<th class="border-bottom-0" colspan="2"></th>
												</tr>
												<tr>
													<th class="border-bottom-0">Nomor</th>
													<th class="border-bottom-0">Judul</th>
													<th class="border-bottom-0">Dokumen Terkait</th>
													<th class="border-bottom-0">Penerapan</th>
													<th class="border-bottom-0">Bangunan Fisik/Sarana</th>
													<th class="border-bottom-0">%</th>
													<th class="border-bottom-0">Status Pemenuhan</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td></td>
													<td>KEPRES NO 63 tahun 2004</td>
													<td>Pengamanan Objek Vital Nasional</td>
													<td>
														Sebagai  kawasan/ lokasi, bangunan/ instalasi dan / atau usaha yang menyangkut hajat hidup orang banyak, kepentingan negara dan /atau sumber pendapatan yang bersifat strategis.
													</td>
													<td>SK Menteri ESDM No. 3407.K/07/MEM/2012</td>
													<td></td>
													<td></td>
													<td>100</td>
													<td>Terpenuhi</td>
													<td></td>
												</tr>
												<tr>
													<td>2</td>
													<td></td>
													<td>SK Menteri ESDM No. No.3407.K/07/MEM/2012</td>
													<td>Pengamanan Obvitnas sektor energi dan sumber daya mineral</td>
													<td>
														Perusahaan Wajib Melakukan :
														<ol>
															<li>
																Bertanggung jawab atas penyelenggaraanpengamanan internal Obvitnas
															</li>
															<li>
																Menyelenggarakan pengamanan internal Obvitnas dengan mengacu keputusan Kapolri tentang pengamanan Obvitnas
															</li>
														</ol>
													<td>SK MR SMP dan Tim SMP</td>
													<td>16 elemen </td>
													<td></td>
													<td>75%</td>
													<td>Belum dilakukan
														<ol>
															<li>sosialisasi</li>
															<li>penerapan</li>
															<li>audit</li>
															<li>evaluasi</li>
														</ol>
													</td>
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