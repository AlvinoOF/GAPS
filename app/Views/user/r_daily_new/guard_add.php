<link href="<?=base_url('assets/main/');?>plugins/sweet-alert/sweetalert.css" rel="stylesheet">
<!---Internal Fileupload css-->
<link href="<?=base_url('assets/main/');?>plugins/fileuploads/css/fileupload.css" rel="stylesheet" type="text/css"/>
	
                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
                            <h4 class="content-title mb-0 my-auto">Security Report</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Daily Report / Daily Guard Report / Tambah Daily Guard Report</span>
							</div>
						</div>
					</div>
                    <!-- <form action="#" method="post" id="formInput"> -->
                    <form action="<?=base_url('user/r_daily_new/guard_save');?>" method="post" id="formInput" enctype="multipart/form-data">
                    <div class="row row-sm">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Tambah Daily Guard Report</h4>
									</div>
								</div>
								<div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="control-group form-group">
                                                <label class="form-label">Tanggal & Jam</label>
                                                <input type="datetime-local" name="tanggal" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Site / Lokasi</label>
                                                <input type="text" name="location" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Tim Patrol</label>
                                                <input type="text" name="tim" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Barcode /QR</label>
                                                <input type="text" name="barcode" class="form-control required">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="control-group form-group">
                                                <label class="form-label">Temuan</label>
                                                <textarea name="finding" class="form-control required" rows="7"></textarea>
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Foto 1</label>
                                                <input type="file" name="foto1" data-height="200" />
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Foto 2</label>
                                                <input type="file" name="foto2" data-height="200" />
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Foto 3</label>
                                                <input type="file" name="foto3" data-height="200" />
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Foto 4</label>
                                                <input type="file" name="foto4" data-height="200" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer pb-0">
                                    <button type="submit" class="btn btn-primary mt-0 mb-3" style="float:right">Simpan</button>
                                    <button type="submit" class="btn btn-danger mt-0 mb-3 mr-3" style="float:right" onclick="window.history.go(-1); return false;">Cancel</button>
								</div>
							</div>
						</div>
                    </div>
                    </form>
<!--Internal Fileuploads js-->
<script src="<?=base_url('assets/main/');?>plugins/fileuploads/js/fileupload.js"></script>
<script src="<?=base_url('assets/main/');?>plugins/fileuploads/js/file-upload.js"></script>

<script src="<?=base_url('assets/main/');?>plugins/sweet-alert/sweetalert.min.js"></script>
<script src="<?=base_url('assets/main/');?>custom/sweetalert.min.js"></script>
<script>

    $( "#formInput" ).submit(function( event ) {
        event.preventDefault();

        var $form = $( this ),
            // data = $( ":input" ).serializeArray(),
            url = "<?=base_url('user/r_daily_new/guard_save');?>";
        
        var data = new FormData(this);


        $.ajax({
            type: "POST",
            url: url,
            data: data,
            contentType: false,
            processData: false,
        }).done(function( data ) {
            if(data == "Success"){
                swal({
                    title: 'Success!',
                    text: 'Guard Report berhasil ditambah!',
                    icon: 'success',
                    button: false,
                    timer: 2000
                }).then(function () {
                    window.location.replace("<?=base_url('user/r_daily_new/guard');?>");
                });
            }else{
                swal({
                    title: 'Error!',
                    text: 'Guard Report gagal ditambah!',
                    type: 'error',
                    button: false,
                    timer: 3000
                });
            }
        }).fail(function() {
            swal({
                title: 'Internal Server Error!',
                text: 'Please Contact Administrator!',
                icon: 'error',
                button: false,
                timer: 3000
            });
        });
    });
</script>