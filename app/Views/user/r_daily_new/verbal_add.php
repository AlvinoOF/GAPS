<link href="<?=base_url('assets/main/');?>plugins/sweet-alert/sweetalert.css" rel="stylesheet">
<!---Internal Fileupload css-->
<link href="<?=base_url('assets/main/');?>plugins/fileuploads/css/fileupload.css" rel="stylesheet" type="text/css"/>
	
                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
                            <h4 class="content-title mb-0 my-auto">Security Report</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Daily Report / Daily Verbal Report / Tambah Daily Verbal Report</span>
							</div>
						</div>
					</div>
                    <!-- <form action="#" method="post" id="formInput"> -->
                    <form action="<?=base_url('user/r_daily_new/verbal_save');?>" method="post" id="formInput" enctype="multipart/form-data">
                    <div class="row row-sm">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Tambah Daily Verbal Report</h4>
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
                                                <label class="form-label">Pembuat laporan</label>
                                                <input type="text" name="nama" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Jabatan</label>
                                                <input type="text" name="jabatan" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Jenis Kegiatan</label>
                                                <select name="kegiatan" class="form-control required" onchange="set_sub_kegiatan(this)">
                                                    <option value="1">Melakukan Patroli rutin</option>
                                                    <option value="2">Pengecekan lokasi</option>
                                                    <option value="3">Pengecekan karyawan</option>
                                                    <option value="4">Pengecekan mobil</option>
                                                </select>
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Sub Jenis Kegiatan</label>
                                                <select name="sub_kegiatan" class="form-control required" id="subkegiatan">
                                                    <option value='1'>Keadaan Lingkungan</option>
                                                    <option value='2'>Kelistrikan</option>
                                                    <option value='3'>Keadaan Lingkungan</option>
                                                    <option value='4'>Safety</option>
                                                    <option value='5'>Dll</option>
                                                </select>
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Kronologis Kejadian</label>
                                                <textarea name="kronologis" class="form-control required"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="control-group form-group">
                                                <label class="form-label">Tindakan yang Dilakukan</label>
                                                <textarea name="tindakan" class="form-control required" rows="7"></textarea>
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Bukti</label>
                                                <textarea name="bukti" class="form-control required"></textarea>
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
            url = "<?=base_url('user/r_daily_new/verbal_save');?>";
        
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
                    text: 'Verbal Report berhasil ditambah!',
                    icon: 'success',
                    button: false,
                    timer: 2000
                }).then(function () {
                    window.location.replace("<?=base_url('user/r_daily_new/verbal');?>");
                });
            }else{
                swal({
                    title: 'Error!',
                    text: 'Verbal Report gagal ditambah!',
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