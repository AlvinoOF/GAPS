<link href="<?=base_url('assets/main/');?>plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="<?=base_url('assets/main/');?>plugins/datatable/css/buttons.bootstrap4.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/main/');?>plugins/datatable/css/responsive.bootstrap4.min.css" rel="stylesheet" />
    <link href="<?=base_url('assets/main/');?>plugins/datatable/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/main/');?>plugins/datatable/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/main/');?>plugins/select2/css/select2.min.css" rel="stylesheet">
	
                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Security Plan</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Site Security Activity Plan</span>
							</div>
						</div>
					</div>
                    <div class="row row-sm">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0"> Site Security Activity Plan</h4>
										<div class="d-flex my-xl-auto right-content">
                                            <div class="mb-3 mb-xl-0" style="margin-right: 10px;">
												<a href="<?=base_url('user/securityprogram/tambah');?>" class="btn btn-success"><i class="mdi mdi-plus"></i> Tambah Plan</a>
											</div>
                                            <div class="mb-3 mb-xl-0" style="margin-right: 10px;">
												<a href="<?=base_url('user/securityprogram/tambah_actual');?>" class="btn btn-primary"><i class="mdi mdi-plus"></i> Tambah Actual</a>
											</div>
                                        </div>
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="" class="table key-buttons text-md-nowrap" border=1>
											<thead>
												<tr>
													<th class="border-bottom-0" style="text-align: center;" rowspan="2">No</th>
													<th class="border-bottom-0" style="text-align: center;" rowspan="2">Operation Program</th>
													<th class="border-bottom-0" style="text-align: center;" rowspan="2">Periodic</th>
													<th class="border-bottom-0" style="text-align: center;" rowspan="2">PIC</th>
                                                    <?php
                                                        for($i=1;$i<=12;$i++){
                                                    ?>
                                                            <th class="border-bottom-0" style="text-align: center;" colspan="2">Month<?=$i;?></th>
                                                    <?php
                                                        }
                                                    ?>
													<th class="border-bottom-0" style="text-align: center;" rowspan="2">Remark</th>
													<th class="border-bottom-0" style="text-align: center;" rowspan="2"></th>
												</tr>
                                                <tr>
                                                    <?php
                                                        for($i=1;$i<=12;$i++){
                                                    ?>
                                                            <td>Plan</td>
                                                            <td>Actual</td>
                                                    <?php
                                                        }
                                                    ?>
                                                </tr>
											</thead>
											<tbody>
                                            <?php
                                                $isi = $data->result();
                                                function generate_anak($array,$head,$tab = null){
                                                    $flt = array_filter($array,function($v) use ($head){
                                                        return($v->id_mst == $head);
                                                    });
                                                    if($tab != null){
                                                        
                                                    }
                                                    if(count($flt) > 0){
                                                        foreach($flt as $row){
                                                    ?>
                                                        <tr>
                                                            <td><?=$row->no_act;?></td>
                                                            <td><?=$row->nama_act;?></td>
                                                            <td><?=$row->periodic_act;?></td>
                                                            <td><?=$row->pic_act;?></td>
                                                    <?php
                                                        $plan2 = json_decode($row->plan_act);
                                                        $plan = array();
                                                        if(is_array($plan2)){
                                                            foreach($plan2 as $arr){
                                                                array_push($plan,$arr);
                                                            }
                                                        }
                                                        $actual2 = json_decode($row->actual_act);
                                                        $actual = array();
                                                        if(is_array($actual2)){
                                                            foreach($actual2 as $arr){
                                                                array_push($actual,$arr);
                                                            }
                                                        }
                                                        for($i=1;$i<=12;$i++){

                                                    ?>
                                                            <td><?php if(in_array($i,$plan)){echo "v";}?></td>
                                                            <td><?php if(in_array($i,$actual)){echo "v";}?></td>
                                                    <?php
                                                        }
                                                    ?>
                                                            <td><?=$row->remark;?></td>
                                                            <td></td>
                                                        </tr>
                                                    <?php   
                                                            generate_anak($array,$row->id_activiry_program,0);
                                                        }
                                                    }
                                                }
                                                generate_anak($isi,0);
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