<link href="<?=base_url('assets/main/');?>plugins/sweet-alert/sweetalert.css" rel="stylesheet">
                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Report </h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Incident Report / Follow Up Incident Report / Tambah</span>
							</div>
						</div>
					</div>
                    <div class="row row-sm">
                        <div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
							<div class="card  box-shadow-0 ">
								<div class="card-header">
									<h4 class="card-title mb-1">Tambah Follow Up Incident Report</h4>
								</div>
								<div class="card-body pt-0">
                                    <?php $rw = $data->row();?>	
                                    <?php $rw2 = $saran->row();?>	
                                    <form action="#" method="post" id="formInput" enctype="multipart/form-data">
                                        <input type="hidden" name="id_incident_saran" value="<?=$rw2->id_incident_saran;?>">
										<div class="">
                                            <div class="row">
                                                <div class="form-group col-lg-6 col-xl-6 col-md-12 col-sm-12">
                                                    <label>Uploader Name</label>
                                                    <input type="text" class="form-control" value="<?=$this->session->userdata('nama_lengkap');?>" readonly>
                                                </div>
                                                <div class="form-group col-lg-6 col-xl-6 col-md-12 col-sm-12">
                                                    <label>Job Title</label>
                                                    <input type="text" class="form-control" value="<?=$this->session->userdata('jabatan');?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
												<label>Client</label>
												<input type="text" class="form-control" name="client" placeholder="Incident Title" value="<?=$this->session->userdata('perusahaan');?>" readonly>
                                            </div>
                                            <div class="form-group">
												<label>Incident No.</label>
												<input type="text" class="form-control" name="nomor" placeholder="Incident No." value="<?=$rw->incident_no;?>" readonly>
                                            </div>
                                            <div class="form-group">
												<label>Incident Title</label>
												<input type="text" class="form-control" name="title" placeholder="Incident Title" value="<?=$rw->incident_title;?>" readonly>
                                            </div>
                                            <div class="form-group">
												<label>Saran</label>
												<textarea class="form-control" name="saran" placeholder="Saran" readonly><?=$rw2->rekomendasi;?></textarea>
                                            </div>
                                            <div class="form-group">
												<label>Follow Up</label>
                                                <textarea class="form-control" name="follow_up" placeholder="Follow Up"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Follow Up</label>
                                                <input type="date" class="form-control" name="follow_up_date" value="" required>
                                            </div>
										</div>
										<button type="submit" class="btn btn-primary mt-3 mb-0">Simpan</button>
                                    </form>
                                    <script src="<?=base_url('assets/main/');?>plugins/sweet-alert/sweetalert.min.js"></script>
                                    <script>
                                        $( "#formInput" ).submit(function( event ) {
                                            event.preventDefault();

                                            var $form = $( this ),
                                                data = $( ":input" ).serializeArray(),
                                                url = "<?=base_url('user/report_incident/follow_up_tambah_simpan');?>";

                                            var posting = $.post( url, data );
                                            posting.done(function( data ) {
                                                if(data == "Success"){
                                                    swal({
                                                        title: 'Success!',
                                                        text: 'Follow Up berhasil ditambah!',
                                                        type: 'success',
                                                        showConfirmButton: false,
                                                        timer: 2000
                                                    },function () {
                                                        window.location.replace("<?=base_url('user/report_incident/follow_up/'.$rw->id_incident);?>");
                                                    });
                                                }else{
                                                    swal({
                                                        title: 'Error!',
                                                        text: 'Follow Up gagal ditambah!',
                                                        type: 'error',
                                                        showConfirmButton: false,
                                                        timer: 3000
                                                    });
                                                }
                                            });
                                        });
                                    </script>
								</div>
							</div>
						</div>
                    </div>