<link href="<?=base_url('assets/main/');?>plugins/sweet-alert/sweetalert.css" rel="stylesheet">
<!---Internal Fileupload css-->
<link href="<?=base_url('assets/main/');?>plugins/fileuploads/css/fileupload.css" rel="stylesheet" type="text/css"/>
	
                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
                            <h4 class="content-title mb-0 my-auto">Security Report</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Incident Report/ Tambah Incident Report</span>
							</div>
						</div>
					</div>
                    <!-- <form action="#" method="post" id="formInput"> -->
                    <form action="<?=base_url('user/r_incident/tambah_save');?>" method="post" id="formInput" enctype="multipart/form-data">
                    <div class="row row-sm">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Tambah Incident Report</h4>
									</div>
								</div>
								<div class="card-body pt-0">
                                <div id="wizard1">
										<h3>Incident Report</h3>
										<section>
											<div class="control-group form-group">
												<label class="form-label">NAMA KEJADIAN</label>
												<input type="text" name="nm_inc" class="form-control required" placeholder="Nama Kejadian">
											</div>
											<div class="control-group form-group">
												<label class="form-label">SITE/LOKASI</label>
												<input type="text" name="site" class="form-control required" placeholder="Site/Lokasi">
											</div>
											<div class="control-group form-group">
												<label class="form-label">NAMA KLIEN & JABATAN</label>
												<input type="text" name="klien" class="form-control required" placeholder="Nama Klien & Jabatan">
											</div>
											<div class="control-group form-group">
												<label class="form-label">TANGGAL & WAKTU</label>
												<input type="datetime-local" name="tgl" class="form-control required">
											</div>
											<div class="control-group form-group mb-0">
												<label class="form-label">NAMA (GAPARA)</label>
												<input type="text" name="nama_gapara" class="form-control required" placeholder="Nama (Gapara)">
											</div>
										</section>
                                        <!--
										<h3>Kategori Ancaman</h3>
										<section>
                                            <div class="row">
                                                <div class="col-xl-3">
											<?php
                                                $total = $ancaman->num_rows();
                                                $GLOBALS['max'] = ceil($total / 4);
                                                $isi = $ancaman->result();
                                                $GLOBALS['rw'] = 0;
                                                function cek_row(){
                                                    global $rw,$max;
                                                    if($rw >= $max){
                                                    ?>
                                                        </div><div class="col-xl-3">
                                                    <?php
                                                        $rw = 0;
                                                    }
                                                    $rw++;
                                                }

                                                function generate_anak($array,$head,$no = null){
                                                    $flt = array_filter($array,function($v) use ($head){
                                                        return($v->id_mst == $head);
                                                    });
                                                    $urut = 0;
                                                    if($no != null){
                                                        $no = $no.".";
                                                    }
                                                    if(count($flt) > 0){
                                                        foreach($flt as $row){
                                                            cek_row();
                                                            $urut++;
                                                    ?>
                                                        <div class="form-group mb-0 justify-content-end">
                                                            <div class="checkbox">
                                                                <div class="custom-checkbox custom-control">
                                                                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-<?=$row->id_mst_ancaman;?>" name="kt_ancaman[]" value="<?=$row->id_mst_ancaman;?>">
                                                                    <label for="checkbox-<?=$row->id_mst_ancaman;?>" class="custom-control-label mt-1"><?=$no.$urut." ".$row->nm_ancaman;?></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php   
                                                            generate_anak($array,$row->id_mst_ancaman,$no.$urut);
                                                        }
                                                    }
                                                }
                                                generate_anak($isi,0);
                                            ?>
                                                </div>
                                            </div>
										</section>
                                        -->
										<h3>Identitas</h3>
										<section>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <h4>Identitas Pelaku (KTP)</h4>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Nama</label>
                                                        <input type="text" name="nama1" class="form-control required" placeholder="Nama">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Alamat</label>
                                                        <input type="text" name="alm1" class="form-control required" placeholder="Alamat">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Telephone</label>
                                                        <input type="text" name="tlp1" class="form-control required" placeholder="Telephone">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Tempat Lahir</label>
                                                        <input type="text" name="tmp1" class="form-control required" placeholder="Tempat Lahir">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Tanggal Lahir</label>
                                                        <input type="date" name="tgl1" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Agama</label>
                                                        <input type="text" name="agama1" class="form-control required" placeholder="Agama">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Menikah</label>
                                                        <select name="nikah1" class="form-control required">
                                                            <option>Belum Menikah</option>
                                                            <option>Menikah</option>
                                                        </select>
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Suami/Istri</label>
                                                        <input type="text" name="suami1" class="form-control required" placeholder="Suami/Istri">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Anak</label>
                                                        <input type="text" name="anak1" class="form-control required" placeholder="Anak">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <h4>Identitas Target/Korban (KTP)</h4>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Nama</label>
                                                        <input type="text" name="nama2" class="form-control required" placeholder="Nama">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Alamat</label>
                                                        <input type="text" name="alm2" class="form-control required" placeholder="Alamat">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Telephone</label>
                                                        <input type="text" name="tlp2" class="form-control required" placeholder="Telephone">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Tempat Lahir</label>
                                                        <input type="text" name="tmp2" class="form-control required" placeholder="Tempat Lahir">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Tanggal Lahir</label>
                                                        <input type="date" name="tgl2" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Agama</label>
                                                        <input type="text" name="agama2" class="form-control required" placeholder="Agama">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Menikah</label>
                                                        <select name="nikah2" class="form-control required">
                                                            <option>Belum Menikah</option>
                                                            <option>Menikah</option>
                                                        </select>
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Suami/Istri</label>
                                                        <input type="text" name="suami2" class="form-control required" placeholder="Suami/Istri">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Anak</label>
                                                        <input type="text" name="anak2" class="form-control required" placeholder="Anak">
                                                    </div>
                                                </div>
                                            </div>
										</section>
                                        <h3>Detail Kronologi</h3>
										<section>
											<div class="control-group form-group">
												<label class="form-label">1. Apa</label>
												<textarea name="apa" class="form-control required"></textarea>
											</div>
											<div class="control-group form-group">
												<label class="form-label">2. Dimana</label>
												<textarea name="dimana" class="form-control required"></textarea>
											</div>
											<div class="control-group form-group">
												<label class="form-label">3. Dengan Apa</label>
												<textarea name="dengan" class="form-control required"></textarea>
											</div>
											<div class="control-group form-group">
												<label class="form-label">4. Informasi Lain</label>
												<textarea name="lain" class="form-control required"></textarea>
											</div>
										</section>
                                        <h3>Potensi Kerugian & Diamankan</h3>
										<section>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <h4>Potensi Kerugian</h4>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Aset (stok, barang, unit, dll)</label>
                                                        <input type="number" name="aset1" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Uang (rupiah)</label>
                                                        <input type="number" name="uang1" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Peralatan Kerja</label>
                                                        <input type="number" name="alat1" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Lainnya</label>
                                                        <input type="number" name="lainnya1" class="form-control required">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <h4>Potensi Diamankan</h4>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Aset (stok, barang, unit, dll)</label>
                                                        <input type="number" name="aset2" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Uang (rupiah)</label>
                                                        <input type="number" name="uang2" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Peralatan Kerja</label>
                                                        <input type="number" name="alat2" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Lainnya</label>
                                                        <input type="number" name="lainnya2" class="form-control required">
                                                    </div>
                                                </div>
                                            </div>
										</section>
                                        <h3>Tindakan oleh petugas keamanan</h3>
										<section>
                                            <?php 
                                                for($i=0;$i<5;$i++){
                                                    $no = $i+1;
                                            ?>
                                            <div class="row">
                                                <div class="col-xl-2">
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Metode & Kontrol</label>
                                                        <input type="text" name="tindakan[<?=$i;?>][metode]" class="form-control required">
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Tanggal & Waktu</label>
                                                        <input type="datetime-local" name="tindakan[<?=$i;?>][tw]" class="form-control required">
                                                    </div>
                                                </div>
                                                <div class="col-xl-3">
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Bentuk Tindakan</label>
                                                        <input type="text" name="tindakan[<?=$i;?>][tindakan]" class="form-control required">
                                                    </div>
                                                </div>
                                                <div class="col-xl-3">
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Disetujui Oleh</label>
                                                        <input type="text" name="tindakan[<?=$i;?>][setuju]]" class="form-control required">
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>
										</section>
                                        <h3>Dokumentasi</h3>
										<section>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12">
                                                    <label class="form-label">Dokumen pendukung</label>
											        <input type="file" name="dok" data-height="200" />
										        </div>
                                                <div class="col-sm-12 col-md-12">
                                                    <label class="form-label">Gambar Pelaku</label>
											        <input type="file" name="gam1" data-height="200" />
										        </div>
                                                <div class="col-sm-12 col-md-12">
                                                    <label class="form-label">Gambar Target/Korban</label>
											        <input type="file" name="gam2" data-height="200" />
										        </div>
                                                <div class="col-sm-12 col-md-12">
                                                    <label class="form-label">Bukti Tindakan</label>
											        <input type="file" name="bukti1" data-height="200" />
										        </div>
                                                <div class="col-sm-12 col-md-12">
                                                    <label class="form-label">Bukti Tindakan</label>
											        <input type="file" name="bukti2" data-height="200" />
										        </div>
                                                <div class="col-sm-12 col-md-12">
                                                    <label class="form-label">Bukti Tindakan Klien</label>
											        <input type="file" name="bukti3" data-height="200" />
										        </div>
                                            </div>
										</section>
								</div>
							</div>
						</div>
                    </div>
                    </form>

<script src="<?=base_url('assets/main/');?>plugins/jquery-steps/jquery.steps.min.js"></script>
<script src="<?=base_url('assets/main/');?>plugins/parsleyjs/parsley.min.js"></script>

<!--Internal Fileuploads js-->
<script src="<?=base_url('assets/main/');?>plugins/fileuploads/js/fileupload.js"></script>
<script src="<?=base_url('assets/main/');?>plugins/fileuploads/js/file-upload.js"></script>

<script src="<?=base_url('assets/main/');?>plugins/sweet-alert/sweetalert.min.js"></script>
<script>
    $('#wizard1').steps({
		headerTag: 'h3',
		bodyTag: 'section',
		autoFocus: true,
		titleTemplate: '<span class="number">#index#<\/span> <span class="title">#title#<\/span>',
        onFinished: function (event, currentIndex) {
            $("#formInput").submit();
        }
	});
    // $( "#formInput" ).submit(function( event ) {
    //     event.preventDefault();

    //     var $form = $( this ),
    //         data = $( ":input" ).serializeArray(),
    //         url = "<?=base_url('user/r_daily/security_save');?>";

    //     var posting = $.post( url, data );
    //     posting.done(function( data ) {
    //         if(data == "Success"){
    //             swal({
    //                 title: 'Success!',
    //                 text: 'Security Report berhasil ditambah!',
    //                 type: 'success',
    //                 showConfirmButton: false,
    //                 timer: 2000
    //             },function () {
    //                 window.location.replace("<?=base_url('user/r_daily/security');?>");
    //             });
    //         }else{
    //             swal({
    //                 title: 'Error!',
    //                 text: 'Security Report gagal ditambah!',
    //                 type: 'error',
    //                 showConfirmButton: false,
    //                 timer: 3000
    //             });
    //         }
    //     });
    // });
</script>