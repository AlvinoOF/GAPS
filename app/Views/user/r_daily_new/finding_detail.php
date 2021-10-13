<link href="<?=base_url('assets/main/');?>plugins/sweet-alert/sweetalert.css" rel="stylesheet">

                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Security Report</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Daily Report / Daily Finding Report / Detail Daily Finding Report</span>
							</div>
						</div>
					</div>
                    <div class="row row-sm">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Detail Daily Finding Report</h4>
										<div class="d-flex my-xl-auto right-content">
                                            <div class="mb-3 mb-xl-0" style="margin-right: 10px;">
												<a href="#" class="btn btn-warning"><i class="mdi mdi-plus"></i> Edit</a>
											</div>
                                            <div class="mb-3 mb-xl-0" style="margin-right: 10px;">
                                                <button type="submit" class="btn btn-danger mt-0 mb-3 mr-3" onclick="delete_daily()"> Delete</button>
											</div>
                                        </div>
									</div>
								</div>
								<div class="card-body">
                                    <h4 style="text-align:center">FINDING REPORT (DRAFT)</h4><br>
                                    <div class="row">
                                        <div class="col-xl-8">
                                            <table border="1" class="table">
                                                <tr>
                                                    <td>Site / Lokasi</td>
                                                    <td><?=$data->location;?></td>
                                                </tr>
                                                <tr>
                                                    <td>Pembuat laporan</td>
                                                    <td><?=$data->nama;?></td>
                                                </tr>
                                                <tr>
                                                    <td>Jabatan</td>
                                                    <td><?=$data->jabatan;?></td>
                                                </tr>
                                            <?php
                                                $temuan = "";
                                                switch($data->temuan){
                                                    case "1":$temuan="Aman terkendali";break;
                                                    case "2":$temuan="Keadaan dan kondisi lingkungan";break;
                                                    case "3":$temuan="Upaya Penyusupan";break;
                                                    case "4":$temuan="Pengancaman";break;
                                                    case "5":$temuan="Blokade";break;
                                                    case "6":$temuan="Demonstrasi";break;
                                                    case "7":$temuan="Aktifitas Sosial";break;
                                                    case "8":$temuan="Anti warga Asing";break;
                                                    case "9":$temuan="Sengketa";break;
                                                    case "10":$temuan="Lainnya";break;
                                                }
                                            ?>
                                                <tr>
                                                    <td>Temuan</td>
                                                    <td><?=$temuan;?></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-xl-4">
                                            <table border="1" class="table">
                                                <tr><td><?=$data->tanggal;?></td></tr>
                                                <tr><td>DR-XXXX-0001</td></tr>
                                            </table>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="control-group form-group">
                                        <label class="form-label">Deskripsi</label>
                                        <textarea name="deskripsi" class="form-control required" rows="7" readonly><?=$data->deskripsi;?></textarea>
                                    </div>
                                    <div class="control-group form-group">
                                        <label class="form-label">Aksi</label>
                                        <textarea name="aksi" class="form-control required" rows="7" readonly><?=$data->aksi;?></textarea>
                                    </div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Foto</h4>
									</div>
								</div>
								<div class="card-body">
                                    <div class="row">
                                    <?php 
                                        $no = 0;
                                        foreach($foto->result() as $row){
                                            $no++;
                                    ?>
                                        <div class="col-sm-4">
                                            <div class=" border p-1 card thumb  mb-xl-0">
                                                <a href="#" class="image-popup" title="Screenshot-2" style="text-align: center;"> <img src="<?=base_url('user_data/report/daily/finding/'.$row->file);?>" class="thumb-img" alt="work-thumbnail" style="max-height:200px;"> </a>
                                                <h4 class="text-center tx-14 mt-3 mb-0">Foto-<?=$no;?></h4>
                                                <div class="ga-border"></div>
                                            </div>
                                        </div>                                            
                                    <?php } ?>   
                                    </div>
								</div>
							</div>
						</div>
                    </div>

<script src="<?=base_url('assets/main/');?>custom/sweetalert.min.js"></script>
<script>
    function delete_daily(){
        swal({
            title: 'Warning!',
            text: 'Anda yakin akan menghapus daily report?',
            icon: 'warning',
            dangerMode: true,
            buttons: [true, "Delete!"],
        }).then(function (result){
            if (result) {
                var url = "<?=base_url('user/r_daily_new/finding_delete/'.$data->id_daily_finding);?>";
                var posting = $.get( url );
                posting.done(function( data ) {
                    if(data == "Success"){
                        swal({
                            title: 'Success!',
                            text: 'Finding Report Berhasil Dihapus',
                            icon: 'success',
                            button: false,
                            timer: 2000
                        }).then(function (){
                            window.location.replace("<?=base_url('user/r_daily_new/finding');?>");
                        });;
                    }else{
                        swal({
                            title: 'Warning!',
                            text: 'Finding Report Gagal Dihapus',
                            icon: 'error',
                            button: false,
                            timer: 2000
                        });
                    }
                })
                .fail(function() {
                    swal({
                        title: 'Internal Server Error!',
                        text: 'Please Contact Administrator!',
                        icon: 'error',
                        button: false,
                        timer: 3000
                    });
                });
            }
        });
    }
    function delete_img(id = null){
        if(id != null){
            swal({
                title: 'Warning!',
                text: 'Anda yakin akan menghapus foto?',
                icon: 'warning',
                dangerMode: true,
                buttons: [true, "Delete!"],
            }).then(function (result){
                if (result) {
                    var url = "<?=base_url('user/r_daily_new/finding_delete_img/');?>"+id;
                    var posting = $.get( url );
                    posting.done(function( data ) {
                        if(data == "Success"){
                            swal({
                                title: 'Success!',
                                text: 'Foto Berhasil Dihapus',
                                icon: 'success',
                                button: false,
                                timer: 2000
                            }).then(function (){
                                window.location.reload();
                            });;
                        }else{
                            swal({
                                title: 'Warning!',
                                text: 'Foto Gagal Dihapus',
                                icon: 'error',
                                button: false,
                                timer: 2000
                            });
                        }
                    })
                    .fail(function() {
                        swal({
                            title: 'Internal Server Error!',
                            text: 'Please Contact Administrator!',
                            icon: 'error',
                            button: false,
                            timer: 3000
                        });
                    });
                }
            });
        }
    }
</script>