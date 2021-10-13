<link href="<?=base_url('assets/main/');?>plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
<link href="<?=base_url('assets/main/');?>plugins/datatable/css/buttons.bootstrap4.min.css" rel="stylesheet">
<link href="<?=base_url('assets/main/');?>plugins/datatable/css/responsive.bootstrap4.min.css" rel="stylesheet" />
<link href="<?=base_url('assets/main/');?>plugins/datatable/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="<?=base_url('assets/main/');?>plugins/datatable/css/responsive.dataTables.min.css" rel="stylesheet">
<link href="<?=base_url('assets/main/');?>plugins/select2/css/select2.min.css" rel="stylesheet">
	
                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Security Report</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Daily Report / Daily Verbal Report</span>
							</div>
						</div>
					</div>
                    <div class="row row-sm">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Daily Verbal Report</h4>
										<div class="d-flex my-xl-auto right-content">
                                            <div class="mb-3 mb-xl-0" style="margin-right: 10px;">
                                                <a href="<?=base_url('user/r_daily_new/verbal_add');?>" class="btn btn-success"><i class="mdi mdi-plus"></i> New Report</a>
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
													<th class="border-bottom-0" width="30%">Report Date</th>
													<th class="border-bottom-0" width="30%">Site</th>
													<th class="border-bottom-0" width="30%">Jenis</th>
													<th class="border-bottom-0" width="30%">Kategori</th>
													<th class="border-bottom-0" width="20%"></th>
												</tr>
											</thead>
											<tbody>
												<?php
													$no = 0;
													foreach($data->result() as $row){
														$no++;
                                                        $kegiatan = "";
                                                        switch($row->kegiatan){
                                                            case "1":$kegiatan="Melakukan Patroli rutin";break;
                                                            case "2":$kegiatan="Pengecekan lokasi";break;
                                                            case "3":$kegiatan="Pengecekan karyawan";break;
                                                            case "4":$kegiatan="Pengecekan mobil";break;
                                                        }
                                                        $sub_kegiatan = "";
                                                        switch($row->sub_kegiatan){
                                                            case "1":$sub_kegiatan="Keadaan Lingkungan";break;
                                                            case "2":$sub_kegiatan="Kelistrikan";break;
                                                            case "3":$sub_kegiatan="Keadaan Lingkungan";break;
                                                            case "4":$sub_kegiatan="Safety";break;
                                                            case "5":$sub_kegiatan="Dll";break;
                                                            case "6":$sub_kegiatan="Main Gate";break;
                                                            case "7":$sub_kegiatan="Pos Jaga I";break;
                                                            case "8":$sub_kegiatan="Pos Jaga II";break;
                                                            case "9":$sub_kegiatan="Warehouse";break;
                                                            case "10":$sub_kegiatan="Area Parking";break;
                                                            case "11":$sub_kegiatan="Production";break;
                                                            case "12":$sub_kegiatan="Kamar Mandi";break;
                                                            case "13":$sub_kegiatan="APAR";break;
                                                            case "14":$sub_kegiatan="Dll";break;
                                                            case "15":$sub_kegiatan="Barang Bawaan";break;
                                                            case "16":$sub_kegiatan="Perlengkapan perkantoran (ID Card, Helmet, dll)";break;
                                                            case "17":$sub_kegiatan="Dll";break;
                                                            case "18":$sub_kegiatan="Bagasi";break;
                                                            case "19":$sub_kegiatan="Barang bawaan";break;
                                                            case "20":$sub_kegiatan="Kap mesin";break;
                                                            case "21":$sub_kegiatan="Dll";break;
                                                        }
												?>
												<tr>
													<td class="border-bottom-0"><?=$no;?></td>
													<td class="border-bottom-0"><?=$row->tanggal;?></td>
													<td class="border-bottom-0"><?=$row->location;?></td>
													<td class="border-bottom-0"><?=$kegiatan;?></td>
													<td class="border-bottom-0"><?=$sub_kegiatan;?></td>
													<td class="border-bottom-0"><a href="<?=base_url('user/r_daily_new/verbal_detail/'.$row->id_daily_verbal);?>" class="btn btn-primary btn-with-icon btn-block"><i class="typcn typcn-eye"></i> View Report</a></th>
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