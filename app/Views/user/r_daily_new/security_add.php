<link href="<?=base_url('assets/main/');?>plugins/sweet-alert/sweetalert.css" rel="stylesheet">
<!---Internal Fileupload css-->
<link href="<?=base_url('assets/main/');?>plugins/fileuploads/css/fileupload.css" rel="stylesheet" type="text/css"/>
	
                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
                            <h4 class="content-title mb-0 my-auto">Security Report</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Daily Report / Daily Security Report / Tambah Daily Security Report</span>
							</div>
						</div>
					</div>
                    <!-- <form action="#" method="post" id="formInput"> -->
                    <form action="<?=base_url('user/r_daily_new/security_save');?>" method="post" id="formInput" enctype="multipart/form-data">
                    <div class="row row-sm">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Tambah Daily Security Report</h4>
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
                                                <label class="form-label">Shift</label>
                                                <select name="shift" class="form-control required">
                                                    <option value="1">Shift I  (07.00 – 15.00)</option>
                                                    <option value="2">Shift II (15.00 – 23.00)</option>
                                                    <option value="3">Shift III (23.00 – 07.00)</option>
                                                </select>
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Pembuat laporan</label>
                                                <input type="text" name="nama" class="form-control required">
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
                                                <label class="form-label">Ringkasan Kegiatan</label>
                                                <textarea name="ringkasan" class="form-control required"></textarea>
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
                                        <div class="col-lg-6">
                                            <div class="table-responsive">
                                                <table id="example1" class="table key-buttons text-md-nowrap" border="1">
                                                    <thead>
                                                        <tr>
                                                            <th class="border-bottom-0" width="10%">Kode Barang</th>
                                                            <th class="border-bottom-0" width="30%">Nama Barang</th>
                                                            <th class="border-bottom-0" width="30%">Jumlah</th>
                                                            <th class="border-bottom-0" width="30%">Kondisi (Baik, Rusak Ringan, Rusak Berat)</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php for($i=0;$i<5;$i++){?>
                                                        <tr>
                                                            <td><input type="text" name="aset[<?=$i;?>][kode]" class="form-control required"></td>
                                                            <td><input type="text" name="aset[<?=$i;?>][nama]" class="form-control required"></td>
                                                            <td><input type="number" name="aset[<?=$i;?>][jumlah]" class="form-control required"></td>
                                                            <td>
                                                                <select name="aset[<?=$i;?>][kondisi]" class="form-control required">
                                                                    <option>Baik</option>
                                                                    <option>Rusak Ringan</option>
                                                                    <option>Ringan Berat</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
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
     function set_sub_kegiatan(obj)
    {
        var kegiatan = obj.value;
        switch(kegiatan){
            case "1":
                var rs = "<option value='1'>Keadaan Lingkungan</option><option value='2'>Kelistrikan</option><option value='3'>Keadaan Lingkungan</option><option value='4'>Safety</option><option value='5'>Dll</option>";
                $('#subkegiatan').html(rs);
                break;
            case "2":
                var rs = "<option value='6'>Main Gate</option><option value='7'>Pos Jaga I</option><option value='8'>Pos Jaga II</option><option value='9'>Warehouse</option><option value='10'>Area Parking</option><option value='11'>Production</option><option value='12'>Kamar Mandi</option><option value='13'>APAR</option><option value='14'>dll</option>";
                $('#subkegiatan').html(rs);
                break;
            case "3":
                var rs = "<option value='15'>Barang Bawaan</option><option value='16'>Perlengkapan perkantoran (ID Card, Helmet, dll)</option><option value='17'>Dll</option>";
                $('#subkegiatan').html(rs);
                break;
            case "4":
                var rs = "<option value='18'>Bagasi</option><option value='19'>Barang bawaan</option><option value='20'>Kap mesin</option><option value='21'>Dll</option>";
                $('#subkegiatan').html(rs);
                break;
        }
    }

    $( "#formInput" ).submit(function( event ) {
        event.preventDefault();

        var $form = $( this ),
            // data = $( ":input" ).serializeArray(),
            url = "<?=base_url('user/r_daily_new/security_save');?>";
        
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
                    text: 'Security Report berhasil ditambah!',
                    icon: 'success',
                    button: false,
                    timer: 2000
                }).then(function () {
                    window.location.replace("<?=base_url('user/r_daily_new/security');?>");
                });
            }else{
                swal({
                    title: 'Error!',
                    text: 'Security Report gagal ditambah!',
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