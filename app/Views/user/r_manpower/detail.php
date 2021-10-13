                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
                                <h4 class="content-title mb-0 my-auto">Security Report</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Manpower Database / Detail Manpower</span>
							</div>
						</div>
					</div>
                    <div class="row row-sm">
						<div class="col-lg-4">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="pl-0">
										<div class="main-profile-overview">
											<div class="main-img-user profile-user">
												<img alt="" src="<?=base_url('assets/main/');?>img/faces/6.jpg"><a class="fas fa-camera profile-edit" href="JavaScript:void(0);"></a>
											</div>
											<div class="d-flex justify-content-between mg-b-20">
												<div>
													<h5 class="main-profile-name"><?=$data->name;?></h5>
													<p class="main-profile-name-text"><?=$data->job;?></p>
												</div>
											</div>
											<hr class="mg-y-30">
                                            <div class="row">
												<div class="col-md-6 col mb20">Employment Type</div>
												<div class="col-md-6 col mb20"><strong><?=$data->jenis;?></strong></div>
											</div>
                                            <div class="row">
												<div class="col-md-6 col mb20">Aggrement/#Contract</div>
												<div class="col-md-6 col mb20"><strong><?=$data->contract;?></strong></div>
											</div>
                                            <div class="row">
												<div class="col-md-6 col mb20">Start Date</div>
												<div class="col-md-6 col mb20"><strong><?=$data->start;?></strong></div>
											</div>
                                            <div class="row">
												<div class="col-md-6 col mb20">End Date</div>
												<div class="col-md-6 col mb20"><strong><?=$data->end;?></strong></div>
											</div>
                                            <div class="row">
												<div class="col-md-6 col mb20">ID</div>
												<div class="col-md-6 col mb20"><strong><?=$data->id;?></strong></div>
											</div>
                                            <div class="row">
												<div class="col-md-6 col mb20">Status</div>
												<div class="col-md-6 col mb20"><strong><?=$data->status;?></strong></div>
											</div>
                                            <div class="row">
												<div class="col-md-6 col mb20">Working Time</div>
												<div class="col-md-6 col mb20"><strong><?=$data->work;?></strong></div>
											</div>
                                            <div class="row">
												<div class="col-md-6 col mb20">Job Title</div>
												<div class="col-md-6 col mb20"><strong><?=$data->job;?></strong></div>
											</div>
                                            <div class="row">
												<div class="col-md-6 col mb20">Position / Pangkat</div>
												<div class="col-md-6 col mb20"><strong><?=$data->posisi;?></strong></div>
											</div>
                                            <div class="row">
												<div class="col-md-6 col mb20">Department</div>
												<div class="col-md-6 col mb20"><strong><?=$data->department?></strong></div>
											</div>
                                            <div class="row">
												<div class="col-md-6 col mb20">Location</div>
												<div class="col-md-6 col mb20"><strong><?=$data->location;?></strong></div>
											</div>
										</div><!-- main-profile-overview -->
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="card">
								<div class="card-body">
									<div class="tabs-menu ">
										<!-- Tabs -->
										<ul class="nav nav-tabs profile navtab-custom panel-tabs">
											<li class="active">
												<a href="#profile" data-toggle="tab" aria-expanded="true"> <span class="visible-xs"><i class="las la-user-circle tx-16 mr-1"></i></span> <span class="hidden-xs">PROFILE</span> </a>
											</li>
											<li class="">
												<a href="#document" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="las la-images tx-15 mr-1"></i></span> <span class="hidden-xs">DOCUMENT</span> </a>
											</li>
											<li class="">
												<a href="#certificates" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="las la-cog tx-16 mr-1"></i></span> <span class="hidden-xs">CERTIFICATES (EDUCATION/TRAINING)</span> </a>
											</li>
											<li class="">
												<a href="#experience" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="las la-cog tx-16 mr-1"></i></span> <span class="hidden-xs">WORKING EXPERIENCE</span> </a>
											</li>
										</ul>
									</div>
									<div class="tab-content border-left border-bottom border-right border-top-0 p-4">
										<div class="tab-pane active" id="profile">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="FullName">Full Name</label>
                                                        <div><strong><?=$data->name;?></strong></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="FullName">Date Of Birth</label>
                                                        <div><strong><?=$data->tmp_lahir;?>, <?=$data->tgl_lahir;?></strong></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="FullName">Gender</label>
                                                        <div><strong><?=$data->gender;?></strong></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="FullName">Home Address</label>
                                                        <div><strong><?=$data->address;?></strong></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="FullName">Phone / HP</label>
                                                        <div><strong><?=$data->phone;?></strong></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="FullName">Email</label>
                                                        <div><strong><?=$data->email;?></strong></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="FullName">Maritial Status</label>
                                                        <div><strong><?=$data->maritial;?></strong></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="FullName">Dependent (children+wife)</label>
                                                        <div><strong><?=$data->dependent;?></strong></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="FullName">Tinggi (cm)/BB (kg)</label>
                                                        <div><strong><?=$data->tinggi;?> cm / <?=$data->berat;?> kg</strong></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="FullName">KTP Number</label>
                                                        <div><strong><?=$data->ktp;?></strong></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="FullName">NPWP</label>
                                                        <div><strong><?=$data->npwp;?></strong></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="FullName"># KTA</label>
                                                        <div><strong><?=$data->kta;?></strong></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="FullName"># KTA Exp. Date</label>
                                                        <div><strong><?=$data->kta_exp;?></strong></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="FullName">Bank</label>
                                                        <div><strong><?=$data->bank;?> - <?=$data->bank_acc;?></strong></div>
                                                    </div>
                                                </div>
                                            </div>
										</div>
										<div class="tab-pane" id="document">
											<div class="row">
                                                <div class="col-sm-4">
													<div class=" border p-1 card thumb  mb-xl-0">
														<a href="#" class="image-popup" title="Screenshot-2"> <img src="<?=base_url('assets/main/');?>img/photos/5.jpg" class="thumb-img" alt="work-thumbnail"> </a>
														<h4 class="text-center tx-14 mt-3 mb-0">KTP</h4>
														<div class="ga-border"></div>
													</div>
												</div>
                                                <div class="col-sm-4">
													<div class=" border p-1 card thumb  mb-xl-0">
														<a href="#" class="image-popup" title="Screenshot-2"> <img src="<?=base_url('assets/main/');?>img/photos/5.jpg" class="thumb-img" alt="work-thumbnail"> </a>
														<h4 class="text-center tx-14 mt-3 mb-0">NPWP</h4>
														<div class="ga-border"></div>
													</div>
												</div>
                                                <div class="col-sm-4">
													<div class=" border p-1 card thumb  mb-xl-0">
														<a href="#" class="image-popup" title="Screenshot-2"> <img src="<?=base_url('assets/main/');?>img/photos/5.jpg" class="thumb-img" alt="work-thumbnail"> </a>
														<h4 class="text-center tx-14 mt-3 mb-0">KTA</h4>
														<div class="ga-border"></div>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="border p-1 card thumb">
														<a href="#" class="image-popup" title="Screenshot-2"> <img src="<?=base_url('assets/main/');?>img/photos/7.jpg" class="thumb-img" alt="work-thumbnail"> </a>
														<h4 class="text-center tx-14 mt-3 mb-0">SKBN</h4>
														<div class="ga-border"></div>
													</div>
												</div>
												<div class="col-sm-4">
													<div class=" border p-1 card thumb">
														<a href="#" class="image-popup" title="Screenshot-2"> <img src="<?=base_url('assets/main/');?>img/photos/8.jpg" class="thumb-img" alt="work-thumbnail"> </a>
														<h4 class="text-center tx-14 mt-3 mb-0">SKCK</h4>
														<div class="ga-border"></div>
													</div>
												</div>
												<div class="col-sm-4">
													<div class=" border p-1 card thumb">
														<a href="#" class="image-popup" title="Screenshot-2"> <img src="<?=base_url('assets/main/');?>img/photos/9.jpg" class="thumb-img" alt="work-thumbnail"> </a>
														<h4 class="text-center tx-14 mt-3 mb-0">Kartu Keluarga / KK</h4>
														<div class="ga-border"></div>
													</div>
												</div>
												<div class="col-sm-4">
													<div class=" border p-1 card thumb  mb-xl-0">
														<a href="#" class="image-popup" title="Screenshot-2"> <img src="<?=base_url('assets/main/');?>img/photos/10.jpg" class="thumb-img" alt="work-thumbnail"> </a>
														<h4 class="text-center tx-14 mt-3 mb-0">Kartu BPJS Kesehatan</h4>
														<div class="ga-border"></div>
													</div>
												</div>
												<div class="col-sm-4">
													<div class=" border p-1 card thumb  mb-xl-0">
														<a href="#" class="image-popup" title="Screenshot-2"> <img src="<?=base_url('assets/main/');?>img/photos/6.jpg" class="thumb-img" alt="work-thumbnail"> </a>
														<h4 class="text-center tx-14 mt-3 mb-0">Kartu BPJS Ketenagakerjaan</h4>
														<div class="ga-border"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="certificates">
                                            <div class="d-flex my-xl-auto right-content">
                                                <div class="mb-3 mb-xl-10" style="margin-right: 10px;">
                                                    <a href="<?=base_url('user/r_manpower/cert/'.$data->id_manpower);?>" class="btn btn-success"><i class="mdi mdi-plus"></i> Add Certificate</a>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
										        <table id="example1" class="table key-buttons text-md-nowrap" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th class="border-bottom-0">Certificate Name</th>
                                                            <th class="border-bottom-0">Type</th>
                                                            <th class="border-bottom-0">Issued Date</th>
                                                            <th class="border-bottom-0">Expired Date</th>
                                                            <th class="border-bottom-0">Recurrent</th>
                                                            <th class="border-bottom-0">Recurrent Plan</th>
                                                            <th class="border-bottom-0">Remark</th>
                                                            <th class="border-bottom-0"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
										</div>
										<div class="tab-pane" id="experience">
                                            <div class="d-flex my-xl-auto right-content">
                                                <div class="mb-3 mb-xl-10" style="margin-right: 10px;">
                                                    <a href="<?=base_url('user/r_manpower/exp/'.$data->id_manpower);?>" class="btn btn-success"><i class="mdi mdi-plus"></i> Add Working Experience</a>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
										        <table id="example2" class="table key-buttons text-md-nowrap" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th class="border-bottom-0" rowspan="2">Employer Name</th>
                                                            <th class="border-bottom-0" rowspan="2">Core Bussiness</th>
                                                            <th class="border-bottom-0" rowspan="2">Job Position</th>
                                                            <th class="border-bottom-0" colspan="2">working Periode</th>
                                                            <th class="border-bottom-0" rowspan="2"></th>
                                                        </tr>
                                                        <tr>
                                                            <th class="border-bottom-0">From</th>
                                                            <th class="border-bottom-0">Until</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- row closed -->

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

    <!-- <script src="<?=base_url('assets/main/');?>js/table-data.js"></script> -->
    <script>
        var table = $('#example').DataTable({
            lengthChange: false,
            buttons: [ 'copy', 'excel', 'pdf', 'colvis' ],
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ ',
            }
        });
        table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );		
        
        $('#example1').DataTable({
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_',
            }
        });
        $('#example2').DataTable({
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_',
            }
        });
    </script>

