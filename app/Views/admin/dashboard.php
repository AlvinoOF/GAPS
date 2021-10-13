					<div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Dashboard</h4>
							</div>
						</div>
					</div>

                    <div class="row row-sm">
						<div class="col-xl-4 col-lg-4 col-md-4 col-xm-12">
							<div class="card overflow-hidden sales-card bg-danger-gradient">
								<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
									<div class="">
										<h6 class="mb-3 tx-12 text-white">Total Security Incident</h6>
									</div>
									<div class="pb-0 mt-0">
										<div class="d-flex">
											<div class="">
												<h4 class="tx-20 font-weight-bold mb-1 text-white"><?=$incident['Total'];?></h4>
												<p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
											</div>
											<span class="float-right my-auto ml-auto">
												<i class="fas fa-arrow-circle-up text-white"></i>
												<span class="text-white op-7"> +5</span>
											</span>
										</div>
									</div>
								</div>
								<span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-4 col-xm-12">
							<div class="card overflow-hidden sales-card bg-warning-gradient">
								<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
									<div class="">
										<h6 class="mb-3 tx-12 text-white">Waiting To Be Solved</h6>
									</div>
									<div class="pb-0 mt-0">
										<div class="d-flex">
											<div class="">
												<h4 class="tx-20 font-weight-bold mb-1 text-white"><?=$incident['Open'];?></h4>
												<p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
											</div>
											<span class="float-right my-auto ml-auto">
												<i class="fas fa-arrow-circle-down text-white"></i>
												<span class="text-white op-7"> -2</span>
											</span>
										</div>
									</div>
								</div>
								<span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-4 col-xm-12">
							<div class="card overflow-hidden sales-card bg-success-gradient">
								<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
									<div class="">
										<h6 class="mb-3 tx-12 text-white">Solved</h6>
									</div>
									<div class="pb-0 mt-0">
										<div class="d-flex">
											<div class="">
												<h4 class="tx-20 font-weight-bold mb-1 text-white"><?=$incident['Closed'];?></h4>
												<p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
											</div>
											<span class="float-right my-auto ml-auto">
												<i class="fas fa-arrow-circle-up text-white"></i>
												<span class="text-white op-7"> +2</span>
											</span>
										</div>
									</div>
								</div>
								<span id="compositeline3" class="pt-1">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span>
							</div>
						</div>
						
					</div>

                    <div class="row row-sm">
						<div class="col-md-12 col-lg-12 col-xl-6">
							<div class="card">
								<div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mb-0">KPI </h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 text-muted mb-0"></p>
								</div>
								<div class="card-body">
									<div class="total-revenue">
										<div>
										  <h4>10</h4>
										  <label><span class="bg-success"></span>Total</label>
										</div>
										<div>
										  <h4>7</h4>
										  <label><span class="bg-primary"></span>Solved</label>
										</div>
										<div>
										  <h4>3</h4>
										  <label><span class="bg-danger"></span>Unsolved</label>
										</div>
									  </div>
									<div id="bar" class="sales-bar mt-4" style="min-height:500px !important"></div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-lg-6">
							<div class="card">
								<div class="card-header pb-0">
									<div class="card-title pb-0  mb-2">Security Program</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col text-center">
											<label class="tx-12">Target</label>
											<p class="font-weight-bold tx-20">100</p>
										</div><!-- col -->
										<div class="col border-left text-center">
											<label class="tx-12">Realized</label>
											<p class="font-weight-bold tx-20">74</p>
										</div><!-- col -->
										<div class="col border-left text-center">
											<label class="tx-12">On Progress</label>
											<p class="font-weight-bold tx-20">26</p>
										</div><!-- col -->
									</div><!-- row -->
									<div class="progress ht-20 mt-4">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary ht-20 w-50" style="width:74% !important;">74%</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header pb-0">
									<div class="card-title pb-0  mb-2">CCTV Access</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col text-center">
											<p><a href="<?=base_url('admin/dashboard/video/1');?>" target="_blank" class="btn btn-info-gradient btn-block">Point 1</a></p>
										</div><!-- col -->
										<div class="col border-left text-center">
											<p><a href="<?=base_url('admin/dashboard/video/2');?>" target="_blank" class="btn btn-info-gradient btn-block">Point 2</a></p>
										</div><!-- col -->
										<div class="col border-left text-center">
											<p><a href="<?=base_url('admin/dashboard/video/3');?>" target="_blank" class="btn btn-info-gradient btn-block">Point 3</a></p>
										</div><!-- col -->
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-xl-3">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Recent Incident</h3>
								</div>
								<div class="card-body">
									<div>
										<div class="chips">
											<div class="team">
												<a href="javascript:void(0)" class="chip">
													<span class="avatar cover-image" data-image-src="<?=base_url('assets/main/');?>img/faces/2.jpg"></span> Victoria
												</a>
												<i class="text-primary" aria-hidden="true">Solved</i>
												<p>On the other hand, we denounce with right indignation and dislike imagesralized</p>
											</div>
											<div class="team">
												<a href="javascript:void(0)" class="chip">
													<span class="avatar cover-image" data-image-src="<?=base_url('assets/main/');?>img/faces/3.jpg"></span> Nathan
												</a>
												<i class="text-primary" aria-hidden="true">On Progress</i>
												<p>On the other hand, we denounce with right indignation and dislike imagesralized</p>
											</div>
											<div class="team">
												<a href="javascript:void(0)" class="chip">
													<span class="avatar cover-image" data-image-src="<?=base_url('assets/main/');?>img/faces/4.jpg"></span> Alice
												</a>
												<i class="text-primary" aria-hidden="true">Solved</i>
												<p class="mb-0">On the other hand, we denounce with right indignation and dislike imagesralized</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-xl-3">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Security Condition</h3>
								</div>
								<div class="card-body">
									<div>
										<div class="chips">
											<div class="team">
												<a href="javascript:void(0)" class="chip">
													<span class="avatar cover-image" data-image-src="<?=base_url('assets/main/');?>img/faces/2.jpg"></span> Victoria
												</a>
												<i class="text-primary" aria-hidden="true">07 September 2020</i>
												<p>On the other hand, we denounce with right indignation and dislike imagesralized</p>
											</div>
											<div class="team">
												<a href="javascript:void(0)" class="chip">
													<span class="avatar cover-image" data-image-src="<?=base_url('assets/main/');?>img/faces/3.jpg"></span> Nathan
												</a>
												<i class="text-primary" aria-hidden="true">07 September 2020</i>
												<p>On the other hand, we denounce with right indignation and dislike imagesralized</p>
											</div>
											<div class="team">
												<a href="javascript:void(0)" class="chip">
													<span class="avatar cover-image" data-image-src="<?=base_url('assets/main/');?>img/faces/4.jpg"></span> Alice
												</a>
												<i class="text-primary" aria-hidden="true">07 September 2020</i>
												<p class="mb-0">On the other hand, we denounce with right indignation and dislike imagesralized</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">News</h3>
								</div>
								<div class="card-body">
									<div>
										<div class="chips">
											<div class="team">
												<a href="javascript:void(0)" class="chip">
													<span class="avatar cover-image" data-image-src="<?=base_url('assets/main/');?>img/faces/2.jpg"></span> Resmikan Jogjaprov CSIRT, BSSN Harap Bisa Tekan Ancaman Siber di Yogyakarta
												</a>
												<i class="text-primary" aria-hidden="true">15 Oktober 2020</i>
												<p>Badan Siber dan Sandi Negara (BSSN) meresmikan Computer Security Incident Response Team (CSIRT) Provinsi Daerah Istimewa Yogyakarta dengan nama Jogjaprov CSIRT di Hotel Royal Ambarukmo, Yogyakarta pada Rabu (14/10/2020).
													<br><a href="https://biz.kompas.com/read/2020/10/15/133036728/resmikan-jogjaprov-csirt-bssn-harap-bisa-tekan-ancaman-siber-di-yogyakarta" target="_blank">Read More...</a>
													</p>
											</div>
											<div class="team">
												<a href="javascript:void(0)" class="chip">
													<span class="avatar cover-image" data-image-src="<?=base_url('assets/main/');?>img/faces/2.jpg"></span> Pertamina Gandeng Peruri untuk Terapkan Digital Security
												</a>
												<i class="text-primary" aria-hidden="true">15 Oktober 2020</i>
												<p>Dalam upaya meenerapkan digital security untuk memperkuat integritas dan transparansi, PT Pertamina (Persero) bekerja sama dengan Perusahaan Umum Percetakan Uang Republik Indonesia (Perum Peruri).
													<br><a href="https://biz.kompas.com/read/2020/08/10/230853728/pertamina-gandeng-peruri-untuk-terapkan-digital-security" target="_blank">Read More...</a>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

                    <div class="row">

					</div>

                    <!--Internal  Chart.bundle js -->
		            <script src="<?=base_url('assets/main/');?>plugins/chart.js/Chart.bundle.min.js"></script>

                    <!--Internal Sparkline js -->
		            <script src="<?=base_url('assets/main/');?>plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
                    <script src="<?=base_url('assets/main/');?>plugins/raphael/raphael.min.js"></script>
                    
                    <!--Internal  Flot js-->
                    <script src="<?=base_url('assets/main/');?>plugins/jquery.flot/jquery.flot.js"></script>
                    <script src="<?=base_url('assets/main/');?>plugins/jquery.flot/jquery.flot.pie.js"></script>
                    <script src="<?=base_url('assets/main/');?>plugins/jquery.flot/jquery.flot.resize.js"></script>
                    <script src="<?=base_url('assets/main/');?>plugins/jquery.flot/jquery.flot.categories.js"></script>
                    <script src="<?=base_url('assets/main/');?>js/dashboard.sampledata.js"></script>
                    <script src="<?=base_url('assets/main/');?>js/chart.flot.sampledata.js"></script>
                    
                    <!--Internal Apexchart js-->
		            <script src="<?=base_url('assets/main/');?>js/apexcharts.js"></script>

                    <script src="<?=base_url('assets/main/');?>js/index.js"></script>