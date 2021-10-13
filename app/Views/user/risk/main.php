<link href="<?=base_url('assets/main/');?>plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
<link href="<?=base_url('assets/main/');?>plugins/datatable/css/buttons.bootstrap4.min.css" rel="stylesheet">
<link href="<?=base_url('assets/main/');?>plugins/datatable/css/responsive.bootstrap4.min.css" rel="stylesheet" />
<link href="<?=base_url('assets/main/');?>plugins/datatable/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="<?=base_url('assets/main/');?>plugins/datatable/css/responsive.dataTables.min.css" rel="stylesheet">
<link href="<?=base_url('assets/main/');?>plugins/select2/css/select2.min.css" rel="stylesheet">
	
                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">	Security Risk</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Risk Identification</span>
							</div>	
						</div>
					</div>
                    <div class="row row-sm">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Risk Identification</h4>
										<div class="d-flex my-xl-auto right-content">
                                            <div class="mb-3 mb-xl-0" style="margin-right: 10px;">
                                                <a href="<?=base_url('user/risk/tambah');?>" class="btn btn-success"><i class="mdi mdi-plus"></i> Tambah Risk Identification</a>
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
													<th class="border-bottom-0">Aktivitas</th>
													<th class="border-bottom-0">Aset</th>
													<th class="border-bottom-0">Ancaman</th>
													<th class="border-bottom-0">Pengendalian</th>
													<th class="border-bottom-0">Kerawanan</th>
													<th class="border-bottom-0">Peluang</th>
													<th class="border-bottom-0">Keparahan</th>
													<th class="border-bottom-0">Tingkat Risiko</th>
													<th class="border-bottom-0">Mitigasi</th>
													<th class="border-bottom-0"></th>
												</tr>
											</thead>
											<tbody>
												<?php
													$no = 0;
													foreach($data->result() as $row){
														$no++;
														$p="";$peluang="";$keparahan="";$risiko="";
														switch($row->peluang){
															case "0":$p="A";$peluang="A - Almost Certain";break;
															case "1":$p="B";$peluang="B - Likely";break;
															case "2":$p="C";$peluang="C - Moderate";break;
															case "3":$p="D";$peluang="D - Unlikely";break;
															case "4":$p="E";$peluang="E - Rare";break;
														}
														switch($row->risiko){
															case "0":$risiko="Extreme (E)";break;
															case "1":$risiko="High (H)";break;
															case "2":$risiko="Moderate (M)";break;
															case "3":$risiko="Low (L)";break;
														}
												?>
												<tr>
													<td class="border-bottom-0"><?=$no;?></td>
													<td class="border-bottom-0"><?=$row->aktivitas;?></td>
													<td class="border-bottom-0"><?=$row->aset;?></td>
													<td class="border-bottom-0"><?=$row->ancaman;?></td>
													<td class="border-bottom-0"><?=$row->pengendalian;?></td>
													<td class="border-bottom-0"><?=$row->kerawanan;?></td>
													<td class="border-bottom-0"><?=$peluang;?></td>
													<td class="border-bottom-0"><?=$row->keparahan+1;?></td>
													<td class="border-bottom-0">(<?=$p;?>,<?=$row->keparahan+1;?>)<?=$risiko;?></td>
													<td class="border-bottom-0"><?=$row->mitigasi;?></td>
													<td class="border-bottom-0"></th>
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