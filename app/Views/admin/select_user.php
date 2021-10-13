					<div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Select Client</h4>
							</div>
						</div>
					</div>

					<div class="row row-sm">
						<div class="col-xl-12 col-md-12">
							<div class="row row-sm">
								<!-- col -->
								<div class="col-lg-12">
									<div class="card mg-b-20">
										<div class="card-body d-flex p-3">
											<div class="main-content-label mb-0 mg-t-8">Select Client</div>
											<div class="ml-auto"><a class="d-block tx-20" data-placement="top" data-toggle="tooltip" title="Add New Client" href="#"><i class="si si-plus text-muted"></i></a></div>
										</div>
									</div>
								</div>
								<!-- /col -->

								<!-- col -->
								<?php foreach($client->result() as $rw){?>
								<div class="col-xl-3 col-md-6">
									<div class="card mg-b-20 text-center">
										<div class="card-body">
											<img src="<?=base_url('user_data/profile/').$rw->logo;?>" alt="" class="wd-35p">
											<h5 class="mg-b-10 mg-t-15 tx-18"><?=$rw->client_name;?></h5>
											<a href="#" class="text-muted">Check The Settings</a>
										</div>
										<div class="card-footer">
											<a class="btn btn-outline-success float-left" href="#" data-placement="top" data-toggle="tooltip" title="Edit Client">Edit Client</a>
											<a class="btn btn-primary ml-auto float-right" href="<?=base_url('admin/	dashboard/set_client/'.$rw->id_client);?>" data-placement="top" data-toggle="tooltip" title="Select Client">Select Client</a>
										</div>
									</div>
								</div>
								<!-- /col -->
								<?php } ?>
							</div>
						</div>
						<!-- /col -->
					</div>
					<!-- row closed -->

                    <div class="row">

					</div>
                    