<link href="<?=base_url('assets/main/');?>plugins/sweet-alert/sweetalert.css" rel="stylesheet">
                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Monitoring & Evaluation</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Non-Conformity Report / Tambah</span>
							</div>
						</div>
					</div>
                    <div class="row row-sm">
                        <div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
							<div class="card  box-shadow-0 ">
								<div class="card-header">
									<h4 class="card-title mb-1">Tambah Non-Conformity Report</h4>
								</div>
								<div class="card-body pt-0">
									<form action="#" method="post" id="formInput">
										<div class="">
                                            <div class="form-group">
												<label>Full Name</label>
												<input type="text" class="form-control" name="name" placeholder="Full Name" value="" required>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-6 col-xl-6 col-md-12 col-sm-12">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" name="email" placeholder="Email" value="">
                                                </div>
                                                <div class="form-group col-lg-6 col-xl-6 col-md-12 col-sm-12">
                                                    <label>Phone</label>
                                                    <input type="text" class="form-control" name="phone" placeholder="Phone" value="">
                                                </div>
                                            </div>  
                                            <div class="form-group">
                                                <label>Address</label>
                                                <textarea class="form-control" name="address" placeholder="Address" rows="2"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Complaint</label>
                                                <textarea class="form-control" name="complaint" placeholder="Please describe the nature of your concern or complaint..." rows="4"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Suggestions</label>
                                                <textarea class="form-control" name="suggestions" placeholder="Please provide suggestions or recomendations for changes..." rows="4"></textarea>
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
                                                url = "<?=base_url('user/complaint/tambah_simpan');?>";

                                            var posting = $.post( url, data );
                                            posting.done(function( data ) {
                                                if(data == "Success"){
                                                    swal({
                                                        title: 'Success!',
                                                        text: 'Non-Conformity Report berhasil ditambah!',
                                                        type: 'success',
                                                        showConfirmButton: false,
                                                        timer: 2000
                                                    },function () {
                                                        window.location.replace("<?=base_url('user/complaint');?>");
                                                    });
                                                }else{
                                                    swal({
                                                        title: 'Error!',
                                                        text: 'Non-Conformity Report gagal ditambah!',
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