<link href="<?=base_url('assets/main/');?>plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
<link href="<?=base_url('assets/main/');?>plugins/datatable/css/buttons.bootstrap4.min.css" rel="stylesheet">
<link href="<?=base_url('assets/main/');?>plugins/datatable/css/responsive.bootstrap4.min.css" rel="stylesheet" />
<link href="<?=base_url('assets/main/');?>plugins/datatable/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="<?=base_url('assets/main/');?>plugins/datatable/css/responsive.dataTables.min.css" rel="stylesheet">
<link href="<?=base_url('assets/main/');?>plugins/select2/css/select2.min.css" rel="stylesheet">
	
                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Security Report</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Daily Report</span>
							</div>
						</div>
					</div>
                    <div class="row row-sm">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Daily Report</h4>
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table key-buttons text-md-nowrap">
											<thead>
												<tr>
													<th class="border-bottom-0" width="10%">No</th>
													<th class="border-bottom-0" width="50%">Report Name</th>
													<th class="border-bottom-0" width="20%">Last Updated</th>
													<th class="border-bottom-0" width="20%"></th>
												</tr>
											</thead>
											<?php $no = 1;?>
											<tbody>
												<tr>
													<td><?=$no++;?></td>
													<td>Daily Security</td>
													<td>2021-06-30</td>
													<?php if($this->session->userdata('perusahaan_id') == "2"){?>
													<td><a href="<?=base_url('user/r_daily_new/security');?>" class="btn btn-primary btn-with-icon btn-block"><i class="typcn typcn-eye"></i> View Report</a></td>
													<?php }else{ ?>
													<td><a href="<?=base_url('user/r_daily/security');?>" class="btn btn-primary btn-with-icon btn-block"><i class="typcn typcn-eye"></i> View Report</a></td>
													<?php } ?>
												</tr>
												<?php if($this->session->userdata('perusahaan_id') == "2"){?>
												<tr>
													<td><?=$no++;?></td>
													<td>Daily Verbal Report</td>
													<td>2021-06-30</td>
													<td><a href="<?=base_url('user/r_daily_new/verbal');?>" class="btn btn-primary btn-with-icon btn-block"><i class="typcn typcn-eye"></i> View Report</a></td>
												</tr>
												<?php } ?>
												<tr>
													<td><?=$no++;?></td>
													<td>Daily HSE Observation</td>
													<td>2021-06-30</td>
													<td><a href="<?=base_url('user/r_daily/hse');?>" class="btn btn-primary btn-with-icon btn-block"><i class="typcn typcn-eye"></i> View Report</a></td>
												</tr>
												<tr>
													<td><?=$no++;?></td>
													<td>Daily CMS</td>
													<td>2021-06-30</td>
													<td><a href="<?=base_url('user/r_daily/cms');?>" class="btn btn-primary btn-with-icon btn-block"><i class="typcn typcn-eye"></i> View Report</a></td>
												</tr>
												<tr>
													<td><?=$no++;?></td>
													<td>Daily UAV</td>
													<td>2021-06-30</td>
													<td><a href="<?=base_url('user/r_daily/uav');?>" class="btn btn-primary btn-with-icon btn-block"><i class="typcn typcn-eye"></i> View Report</a></td>
												</tr>
												<tr>
													<td><?=$no++;?></td>
													<td>Daily Security System Maintenance</td>
													<td>2021-06-30</td>
													<td><a href="<?=base_url('user/r_daily/ssm');?>" class="btn btn-primary btn-with-icon btn-block"><i class="typcn typcn-eye"></i> View Report</a></td>
												</tr>
												<tr>
													<td><?=$no++;?></td>
													<td>Daily Guard Tour</td>
													<td>2021-06-30</td>
													<?php if($this->session->userdata('perusahaan_id') == "2"){?>
													<td><a href="<?=base_url('user/r_daily_new/guard');?>" class="btn btn-primary btn-with-icon btn-block"><i class="typcn typcn-eye"></i> View Report</a></td>
													<?php }else{ ?>
													<td><a href="<?=base_url('user/r_daily/guard');?>" class="btn btn-primary btn-with-icon btn-block"><i class="typcn typcn-eye"></i> View Report</a></td>
													<?php } ?>
												</tr>
												<?php if($this->session->userdata('perusahaan_id') == "2"){?>
												<tr>
													<td><?=$no++;?></td>
													<td>Finding Report</td>
													<td>2021-06-30</td>
													<td><a href="<?=base_url('user/r_daily_new/finding');?>" class="btn btn-primary btn-with-icon btn-block"><i class="typcn typcn-eye"></i> View Report</a></td>
												</tr>
												<?php } ?>
												<tr>
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