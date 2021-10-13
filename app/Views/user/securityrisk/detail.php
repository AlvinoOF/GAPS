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
											<div class="mb-3 mb-xl-0" style="margin-right: 10px;">
												<a href="<?=base_url('user/securityrisk/tambah_detail/'.$id);?>" class="btn btn-success"><i class="mdi mdi-plus"></i> Tambah</a>
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
													<th class="border-bottom-0">Nama Aktifitas</th>
													<th class="border-bottom-0">Aset</th>
													<th class="border-bottom-0">Ancaman</th>
													<th class="border-bottom-0">Kontrol yang ada</th>
													<th class="border-bottom-0">Kelemahan atas kontrol yang ada</th>
													<th class="border-bottom-0">Kemungkinan<br>(K)</th>
													<th class="border-bottom-0">Dampak<br>(D)</th>
													<th class="border-bottom-0">Lever Risiko<br>(K x D)</th>
													<th class="border-bottom-0">Mitigasi Risiko</th>
												</tr>
											</thead>
											<tbody>
											<?php if($id == "1"){?>
												<tr>
													<td>1</td>
													<td>Pemeriksaan Keluar Masuk Tamu</td>
													<td>Petugas Satpam</td>
													<td>Intimidasi</td>
													<td>Penerapan 3S saat melaksanakan pemeriksaan</td>
													<td>Satpam tidak konsisten dalam penerapan 3S</td>
													<td>B</td>
													<td>2</td>
													<td>L</td>
													<td>Refresh penerapan 3S setiap minggu</td>
												</tr>
												<tr>
													<td>2</td>
													<td>Pemeriksaan Keluar Masuk Tamu</td>
													<td>Peralatan pemeriksaan</td>
													<td>Pengrusakan</td>
													<td>Penerapan 3S saat melaksanakan pemeriksaan</td>
													<td>Satpam tidak konsisten dalam penerapan 3S</td>
													<td>B</td>
													<td>2</td>
													<td>L</td>
													<td>Refresh penerapan 3S setiap minggu</td>
												</tr>
											<?php }elseif($id == "2"){ ?>
												<tr>
													<td>1</td>
													<td>Operasional produksi</td>
													<td>Instalasi produksi</td>
													<td>Pengrusakan</td>
													<td>Pemeriksaan keluar masuk area produksi</td>
													<td>Pemeriksaan tidak konsisten</td>
													<td>C</td>
													<td>4</td>
													<td>H</td>
													<td>Awareness aspek pengamanan</td>
												</tr>
												<tr>
													<td>2</td>
													<td>Operasional produksi</td>
													<td>Instalasi produksi</td>
													<td>Pengrusakan</td>
													<td>CCTV</td>
													<td>Belum ada petugas khusus pemantau CCTV, area pantauan CCTV belum mencakup seluruh area</td>
													<td>C</td>
													<td>4</td>
													<td>H</td>
													<td>Penambahan jumlah satpam</td>
												</tr>
												<tr>
													<td>3</td>
													<td>Operasional produksi</td>
													<td>Instalasi produksi</td>
													<td>Pengrusakan</td>
													<td>CCTV</td>
													<td>Belum ada petugas khusus pemantau CCTV, area pantauan CCTV belum mencakup seluruh area</td>
													<td>C</td>
													<td>4</td>
													<td>H</td>
													<td>Penambahan jumlah CCTV</td>
												</tr>
												<tr>
													<td>4</td>
													<td>Operasional produksi</td>
													<td>Instalasi produksi</td>
													<td>Pengrusakan</td>
													<td>Patroli</td>
													<td>Waktu patroli telah terbaca oleh pelaku</td>
													<td>C</td>
													<td>4</td>
													<td>H</td>
													<td>Mekanisme waktu patroli dilakukan secara acak</td>
												</tr>
												<tr>
													<td>5</td>
													<td>Operasional produksi</td>
													<td>Instalasi produksi</td>
													<td>Peledakan</td>
													<td>Pemeriksaan keluar masuk area produksi</td>
													<td>Pemeriksaan tidak konsisten</td>
													<td>C</td>
													<td>5</td>
													<td>E</td>
													<td>Awareness aspek pengamanan</td>
												</tr>
												<tr>
													<td>6</td>
													<td>Operasional produksi</td>
													<td>Instalasi produksi</td>
													<td>Peledakan</td>
													<td>CCTV</td>
													<td>Belum ada petugas khusus pemantau CCTV, area pantauan CCTV belum mencakup seluruh area</td>
													<td>C</td>
													<td>5</td>
													<td>E</td>
													<td>Penambahan jumlah satpam</td>
												</tr>
												<tr>
													<td>7</td>
													<td>Operasional produksi</td>
													<td>Instalasi produksi</td>
													<td>Peledakan</td>
													<td>CCTV</td>
													<td>Belum ada petugas khusus pemantau CCTV, area pantauan CCTV belum mencakup seluruh area</td>
													<td>C</td>
													<td>5</td>
													<td>E</td>
													<td>Penambahan jumlah CCTV</td>
												</tr>
												<tr>
													<td>8</td>
													<td>Operasional produksi</td>
													<td>Instalasi produksi</td>
													<td>Peledakan</td>
													<td>Patroli</td>
													<td>Waktu patroli telah terbaca oleh pelaku</td>
													<td>C</td>
													<td>5</td>
													<td>E</td>
													<td>Mekanisme waktu patroli dilakukan secara acak</td>
												</tr>
												<tr>
													<td>9</td>
													<td>Operasional produksi</td>
													<td>Instalasi produksi</td>
													<td>Peledakan</td>
													<td>Patroli</td>
													<td>Waktu patroli telah terbaca oleh pelaku</td>
													<td>C</td>
													<td>5</td>
													<td>E</td>
													<td>Simulasi keadaan darurat peledakan</td>
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