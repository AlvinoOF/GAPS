<link href="<?=base_url('assets/main/');?>plugins/sweet-alert/sweetalert.css" rel="stylesheet">
                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Report / Incident Report</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Tambah</span>
							</div>
						</div>
					</div>
                    <div class="row row-sm">
                        <div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
							<div class="card  box-shadow-0 ">
								<div class="card-header">
									<h4 class="card-title mb-1">Tambah Incident Report</h4>
								</div>
								<div class="card-body pt-0">
									<form action="#" method="post" id="formInput">
										<div class="">
                                            <div class="row">
                                                <div class="form-group col-lg-6 col-xl-6 col-md-12 col-sm-12">
                                                    <label>Pembuat Berita Acara</label>
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
												<input type="text" class="form-control" name="nomor" placeholder="Incident No." value="" required>
                                            </div>
                                            <div class="form-group">
												<label>Incident Title</label>
												<input type="text" class="form-control" name="title" placeholder="Incident Title" value="" required>
                                            </div>
                                            <div class="form-group">
												<label>Incident Location</label>
                                                <textarea class="form-control" name="location" placeholder="Incident Location"></textarea>
                                            </div>
                                            <div class="form-group">
												<label>Category</label>
												<input type="text" class="form-control" name="category" placeholder="Category" value="" required>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-6 col-xl-6 col-md-12 col-sm-12">
                                                    <label>Incident Date</label>
                                                    <input type="date" class="form-control" name="inc_date" value="" required>
                                                </div>
                                                <div class="form-group col-lg-6 col-xl-6 col-md-12 col-sm-12">
                                                    <label>Incident Time</label>
                                                    <input type="time" class="form-control" name="inc_time" value="" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-6 col-xl-6 col-md-12 col-sm-12">
                                                    <label>Logweek</label>
                                                    <input type="text" class="form-control" name="logweek" placeholder="Logweek" value="" readonly>
                                                </div>
                                                <div class="form-group col-lg-6 col-xl-6 col-md-12 col-sm-12">
                                                    <label>Shift</label>
                                                    <select name="shift" class="form-control" required>
                                                        <option>Day</option>
                                                        <option>Night</option>
                                                        <option>Cuti</option>
                                                        <option>Keluar</option>
                                                        <option>Morning</option>
                                                        <option>Evening</option>
                                                        <option>Afternoon</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-6 col-xl-6 col-md-12 col-sm-12">
                                                    <label>Reported By</label>
                                                    <input type="text" class="form-control" name="reported_by" placeholder="Reported By" value="" required>
                                                </div>
                                                <div class="form-group col-lg-6 col-xl-6 col-md-12 col-sm-12">
                                                    <label>Date Reported</label>
                                                    <input type="date" class="form-control" name="report_date" value="" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Incident Detail</label>
                                                <textarea class="form-control" name="detail" placeholder="Incident Detail" rows="5"></textarea>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-6 col-xl-6 col-md-12 col-sm-12">
                                                    <label>Follow Up Person</label>
                                                    <input type="text" class="form-control" name="follow_up" placeholder="Reported By" value="" required>
                                                </div>
                                                <div class="form-group col-lg-6 col-xl-6 col-md-12 col-sm-12">
                                                    <label>Important Level</label>
                                                    <label class="rdiobox">
                                                        <input type="radio" name="level" value="Yellow" required><span>Yellow</span>
                                                    </label>
                                                    <label class="rdiobox">
                                                        <input type="radio" name="level" value="Red" required><span>Red (Urgent)</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-6 col-xl-6 col-md-12 col-sm-12">
                                                    <label>When (plan) to complete</label>
                                                    <input type="number" class="form-control" name="plan" placeholder="Complete Plan" value="" min=1 required>
                                                </div>
                                                <div class="form-group col-lg-6 col-xl-6 col-md-12 col-sm-12">
                                                    <label>When (plan) to complete Period</label>
                                                    <select name="period" class="form-control" required>
                                                        <option>Day</option>
                                                        <option>Week</option>
                                                        <option>Month</option>
                                                        <option>Year</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Kesimpulan</label>
                                                <textarea class="form-control" name="kesimpulan" placeholder="Kesimpulan" rows="5"></textarea>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-6 col-xl-6 col-md-12 col-sm-12">
                                                    <label>Report To Client</label>
                                                    <input type="text" class="form-control" name="reported_to" placeholder="Reported By" value="" required>
                                                </div>
                                                <div class="form-group col-lg-6 col-xl-6 col-md-12 col-sm-12">
                                                    <label>Report Date/Time</label>
                                                    <input type="datetime-local" class="form-control" name="report_to_date" value="" required>
                                                </div>
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
                                                url = "<?=base_url('user/report_incident/tambah_simpan');?>";

                                            var posting = $.post( url, data );
                                            posting.done(function( data ) {
                                                if(data == "Success"){
                                                    swal({
                                                        title: 'Success!',
                                                        text: 'Incident berhasil ditambah!',
                                                        type: 'success',
                                                        showConfirmButton: false,
                                                        timer: 2000
                                                    },function () {
                                                        window.location.replace("<?=base_url('user/report_incident');?>");
                                                    });
                                                }else{
                                                    swal({
                                                        title: 'Error!',
                                                        text: 'Incident gagal ditambah!',
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