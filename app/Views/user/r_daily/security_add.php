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
                    <form action="<?=base_url('user/r_daily/security_save');?>" method="post" id="formInput" enctype="multipart/form-data">
                    <div class="row row-sm">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Tambah Daily Security Report</h4>
									</div>
								</div>
								<div class="card-body pt-0">
                                <div id="wizard1">
                                    <h3>Daily Security Report</h3>
                                    <section>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="control-group form-group">
                                                    <label class="form-label">SITE/LOKASI</label>
                                                    <input type="text" name="site" class="form-control required" placeholder="Site/Lokasi">
                                                </div>
                                                <div class="control-group form-group">
                                                    <label class="form-label">TANGGAL & WAKTU</label>
                                                    <input type="datetime-local" name="tgl" class="form-control required" value="<?=date('Y-m-d\TH:i');?>" readonly>
                                                </div>
                                                <div class="control-group form-group">
                                                    <label class="form-label">SHIFT</label>
                                                    <input type="text" name="shift" class="form-control required" placeholder="Shift">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="control-group form-group">
                                                    <label class="form-label">LOGISTIK & ADMIN</label>
                                                    <input type="text" name="logistik" class="form-control required">
                                                </div>
                                                <div class="control-group form-group">
                                                    <label class="form-label">INTEL & INVESTIGATOR</label>
                                                    <input type="text" name="intel" class="form-control required">
                                                </div>
                                                <div class="control-group form-group">
                                                    <label class="form-label">SUPERVISOR</label>
                                                    <input type="text" name="supervisor" class="form-control required">
                                                </div>
                                                <div class="control-group form-group">
                                                    <label class="form-label">SHIFT LEADER</label>
                                                    <input type="text" name="leader" class="form-control required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group form-group">
                                            <label class="form-label">RINGKASAN UMUM KEGIATAN PENGAMANAN : </label>
                                            <textarea name="ringkasan" class="form-control required" rows="4"></textarea>
                                        </div>
                                    </section>
                                    <h3>Peristiwa Penting Kegiatan Pengamanan</h3>
                                    <section>
                                        <?php 
                                            for($i=0;$i<5;$i++){
                                                $no = $i+1;
                                        ?>
                                        <div class="row">
                                            <div class="col-xl-2">
                                                <div class="control-group form-group">
                                                    <label class="form-label">Tanggal dan waktu</label>
                                                    <input type="datetime-local" name="peristiwa[<?=$i;?>][tanggal]" class="form-control required">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="control-group form-group">
                                                    <label class="form-label">Peristiwa Penting</label>
                                                    <textarea name="peristiwa[<?=$i;?>][peristiwa]" class="form-control required" rows="4"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </section>
                                    <h3>Temuan aktifitas keamanan</h3>
                                    <section>
                                        <?php 
                                            for($i=0;$i<5;$i++){
                                                $no = $i+1;
                                        ?>
                                        <div class="row">
                                            <div class="col-xl-2">
                                                <div class="control-group form-group">
                                                    <label class="form-label">Tanggal & Waktu</label>
                                                    <input type="datetime-local" name="temuan[<?=$i;?>][tanggal]" class="form-control required">
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="control-group form-group">
                                                    <label class="form-label">Petugas Patroli</label>
                                                    <input type="text" name="temuan[<?=$i;?>][petugas]" class="form-control required">
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="control-group form-group">
                                                    <label class="form-label">Area & Obyek</label>
                                                    <input type="text" name="temuan[<?=$i;?>][area]" class="form-control required">
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="control-group form-group">
                                                    <label class="form-label">Temuan</label>
                                                    <input type="text" name="temuan[<?=$i;?>][temuan]" class="form-control required">
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="control-group form-group">
                                                    <label class="form-label">Laporan Awal</label>
                                                    <input type="text" name="temuan[<?=$i;?>][laporan]]" class="form-control required">
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="control-group form-group">
                                                    <label class="form-label">Status</label>
                                                    <input type="text" name="temuan[<?=$i;?>][status]]" class="form-control required">
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </section>
                                    <h3>Bentuk tindakan & Dokumentasi</h3>
                                    <section>
                                        <div class="control-group form-group">
                                            <label class="form-label">Bentuk Tindakan</label>
                                            <textarea name="tindakan[0]" class="form-control required" rows="4"></textarea>
                                        </div>
                                    </section>
                                    <h3>Potensi Resiko Ancaman</h3>
                                    <section>
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="form-group">
                                                    <label>Upaya Penyusupan</label>
                                                    <select class="form-control" name="pra[]">
                                                        <option>Tidak Ada</option>
                                                        <option>Ada</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Masuk tanpa izin</label>
                                                    <select class="form-control" name="pra[]">
                                                        <option>Tidak Ada</option>
                                                        <option>Ada</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Penipuan aset</label>
                                                    <select class="form-control" name="pra[]">
                                                        <option>Tidak Ada</option>
                                                        <option>Ada</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Manipulasi Informasi</label>
                                                    <select class="form-control" name="pra[]">
                                                        <option>Tidak Ada</option>
                                                        <option>Ada</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Penggelapan</label>
                                                    <select class="form-control" name="pra[]">
                                                        <option>Tidak Ada</option>
                                                        <option>Ada</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Kerjasama dg Kejahatan</label>
                                                    <select class="form-control" name="pra[]">
                                                        <option>Tidak Ada</option>
                                                        <option>Ada</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Pencurian oleh Karyawan</label>
                                                    <select class="form-control" name="pra[]">
                                                        <option>Tidak Ada</option>
                                                        <option>Ada</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Pencurian oleh pihak luar</label>
                                                    <select class="form-control" name="pra[]">
                                                        <option>Tidak Ada</option>
                                                        <option>Ada</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Penyerangan/dg senjata</label>
                                                    <select class="form-control" name="pra[]">
                                                        <option>Tidak Ada</option>
                                                        <option>Ada</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Pemerasan</label>
                                                    <select class="form-control" name="pra[]">
                                                        <option>Tidak Ada</option>
                                                        <option>Ada</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="form-group">
                                                    <label>Penculikan</label>
                                                    <select class="form-control" name="pra[]">
                                                        <option>Tidak Ada</option>
                                                        <option>Ada</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Pengancaman/dg senjata</label>
                                                    <select class="form-control" name="pra[]">
                                                        <option>Tidak Ada</option>
                                                        <option>Ada</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Pembunuhan</label>
                                                    <select class="form-control" name="pra[]">
                                                        <option>Tidak Ada</option>
                                                        <option>Ada</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Perampokan</label>
                                                    <select class="form-control" name="pra[]">
                                                        <option>Tidak Ada</option>
                                                        <option>Ada</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Pembajakan bersenjata</label>
                                                    <select class="form-control" name="pra[]">
                                                        <option>Tidak Ada</option>
                                                        <option>Ada</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Blokade kerja/jalan</label>
                                                    <select class="form-control" name="pra[]">
                                                        <option>Tidak Ada</option>
                                                        <option>Ada</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Perusakan aset</label>
                                                    <select class="form-control" name="pra[]">
                                                        <option>Tidak Ada</option>
                                                        <option>Ada</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Sabotase</label>
                                                    <select class="form-control" name="pra[]">
                                                        <option>Tidak Ada</option>
                                                        <option>Ada</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Pembakaran aset</label>
                                                    <select class="form-control" name="pra[]">
                                                        <option>Tidak Ada</option>
                                                        <option>Ada</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="form-group">
                                                    <label>Unjuk rasa</label>
                                                    <select class="form-control" name="pra[]">
                                                        <option>Tidak Ada</option>
                                                        <option>Ada</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Penambang liar</label>
                                                    <select class="form-control" name="pra[]">
                                                        <option>Tidak Ada</option>
                                                        <option>Ada</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Aktifis Sosial</label>
                                                    <select class="form-control" name="pra[]">
                                                        <option>Tidak Ada</option>
                                                        <option>Ada</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Pelecehan seksual</label>
                                                    <select class="form-control" name="pra[]">
                                                        <option>Tidak Ada</option>
                                                        <option>Ada</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Infrastruktur</label>
                                                    <select class="form-control" name="pra[]">
                                                        <option>Tidak Ada</option>
                                                        <option>Ada</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Anti Warga Asing</label>
                                                    <select class="form-control" name="pra[]">
                                                        <option>Tidak Ada</option>
                                                        <option>Ada</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Sengketa</label>
                                                    <select class="form-control" name="pra[]">
                                                        <option>Tidak Ada</option>
                                                        <option>Ada</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Teroris</label>
                                                    <select class="form-control" name="pra[]">
                                                        <option>Tidak Ada</option>
                                                        <option>Ada</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Bencana Alam</label>
                                                    <select class="form-control" name="pra[]">
                                                        <option>Tidak Ada</option>
                                                        <option>Ada</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <h3>Potensi Kemungkinan / Kerawanan</h3>
                                    <section>
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="form-group">
                                                    <label>Gerbang/gate utama</label>
                                                    <select class="form-control" name="pkk[]">
                                                        <option>Normal</option>
                                                        <option>Perbaikan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Gerbang/ gate pendukung</label>
                                                    <select class="form-control" name="pkk[]">
                                                        <option>Normal</option>
                                                        <option>Perbaikan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Pagar / tembok perimeter</label>
                                                    <select class="form-control" name="pkk[]">
                                                        <option>Normal</option>
                                                        <option>Perbaikan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Lampu perimeter</label>
                                                    <select class="form-control" name="pkk[]">
                                                        <option>Normal</option>
                                                        <option>Perbaikan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Lampu pos</label>
                                                    <select class="form-control" name="pkk[]">
                                                        <option>Normal</option>
                                                        <option>Perbaikan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Panel listrik</label>
                                                    <select class="form-control" name="pkk[]">
                                                        <option>Normal</option>
                                                        <option>Perbaikan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Genset</label>
                                                    <select class="form-control" name="pkk[]">
                                                        <option>Normal</option>
                                                        <option>Perbaikan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Bangunan Kantor Karyawan</label>
                                                    <select class="form-control" name="pkk[]">
                                                        <option>Normal</option>
                                                        <option>Perbaikan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Bangunan Dormitory</label>
                                                    <select class="form-control" name="pkk[]">
                                                        <option>Normal</option>
                                                        <option>Perbaikan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Kabel listrik / Kabel telepon</label>
                                                    <select class="form-control" name="pkk[]">
                                                        <option>Normal</option>
                                                        <option>Perbaikan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="form-group">
                                                    <label>CCTV (tiang dan instalasi)</label>
                                                    <select class="form-control" name="pkk[]">
                                                        <option>Normal</option>
                                                        <option>Perbaikan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Kunci dan gembok</label>
                                                    <select class="form-control" name="pkk[]">
                                                        <option>Normal</option>
                                                        <option>Perbaikan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Barier pagar/tembok/gate</label>
                                                    <select class="form-control" name="pkk[]">
                                                        <option>Normal</option>
                                                        <option>Perbaikan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Gudang utama</label>
                                                    <select class="form-control" name="pkk[]">
                                                        <option>Normal</option>
                                                        <option>Perbaikan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Gudang bahan peledak</label>
                                                    <select class="form-control" name="pkk[]">
                                                        <option>Normal</option>
                                                        <option>Perbaikan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Gudang Bahan Bakar</label>
                                                    <select class="form-control" name="pkk[]">
                                                        <option>Normal</option>
                                                        <option>Perbaikan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Instalasi/area terbatas</label>
                                                    <select class="form-control" name="pkk[]">
                                                        <option>Normal</option>
                                                        <option>Perbaikan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Kondisi akses jalan</label>
                                                    <select class="form-control" name="pkk[]">
                                                        <option>Normal</option>
                                                        <option>Perbaikan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Rambu keselamatan</label>
                                                    <select class="form-control" name="pkk[]">
                                                        <option>Normal</option>
                                                        <option>Perbaikan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="form-group">
                                                    <label>Rambu keamanan</label>
                                                    <select class="form-control" name="pkk[]">
                                                        <option>Normal</option>
                                                        <option>Perbaikan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Kelengkapan kendaraan</label>
                                                    <select class="form-control" name="pkk[]">
                                                        <option>Normal</option>
                                                        <option>Perbaikan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Alat Pelindung Diri</label>
                                                    <select class="form-control" name="pkk[]">
                                                        <option>Normal</option>
                                                        <option>Perbaikan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Barang terlarang</label>
                                                    <select class="form-control" name="pkk[]">
                                                        <option>Normal</option>
                                                        <option>Perbaikan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Cuaca / Suhu</label>
                                                    <select class="form-control" name="pkk[]">
                                                        <option>Normal</option>
                                                        <option>Perbaikan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Tanah / lahan / alam</label>
                                                    <select class="form-control" name="pkk[]">
                                                        <option>Normal</option>
                                                        <option>Perbaikan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Akses menuju site</label>
                                                    <select class="form-control" name="pkk[]">
                                                        <option>Normal</option>
                                                        <option>Perbaikan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Komunikasi / signal</label>
                                                    <select class="form-control" name="pkk[]">
                                                        <option>Normal</option>
                                                        <option>Perbaikan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Lingkungan</label>
                                                    <select class="form-control" name="pkk[]">
                                                        <option>Normal</option>
                                                        <option>Perbaikan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <h3>Disiplin Kinerja Keamanan</h3>
                                    <section>
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="form-group">
                                                    <label>Jumlah & Nama Pos</label>
                                                    <input type="number" class="form-control" name="dk[]" min="0">
                                                </div>
                                                <div class="form-group">
                                                    <label>Jumlah SOP & Pos Order</label>
                                                    <input type="number" class="form-control" name="dk[]" min="0">
                                                </div>
                                                <div class="form-group">
                                                    <label>Mutasi & Alat Tulis</label>
                                                    <input type="number" class="form-control" name="dk[]" min="0">
                                                </div>
                                                <div class="form-group">
                                                    <label>Jumlah & No Kendaraan</label>
                                                    <input type="number" class="form-control" name="dk[]" min="0">
                                                </div>
                                                <div class="form-group">
                                                    <label>P3K Pos Utama & Mobil</label>
                                                    <input type="number" class="form-control" name="dk[]" min="0">
                                                </div>
                                                <div class="form-group">
                                                    <label>Jumlah Helm & Rompi</label>
                                                    <input type="number" class="form-control" name="dk[]" min="0">
                                                </div>
                                                <div class="form-group">
                                                    <label>Jumlah Gatur & HT</label>
                                                    <input type="number" class="form-control" name="dk[]" min="0">
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="form-group">
                                                    <label>Jumlah Senter</label>
                                                    <input type="number" class="form-control" name="dk[]" min="0">
                                                </div>
                                                <div class="form-group">
                                                    <label>Jumlah Jas Hujan</label>
                                                    <input type="number" class="form-control" name="dk[]" min="0">
                                                </div>
                                                <div class="form-group">
                                                    <label>Jumlah Tongkat/Borgol</label>
                                                    <input type="number" class="form-control" name="dk[]" min="0">
                                                </div>
                                                <div class="form-group">
                                                    <label>Jumlah Safety Mirror</label>
                                                    <input type="number" class="form-control" name="dk[]" min="0">
                                                </div>
                                                <div class="form-group">
                                                    <label>ID BED-KTA-SIMPER</label>
                                                    <input type="number" class="form-control" name="dk[]" min="0">
                                                </div>
                                                <div class="form-group">
                                                    <label>Kelengkapan Seragam</label>
                                                    <input type="number" class="form-control" name="dk[]" min="0">
                                                </div>
                                                <div class="form-group">
                                                    <label>Apar Mobil & Pos</label>
                                                    <input type="number" class="form-control" name="dk[]" min="0">
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="form-group">
                                                    <label>Jumlah HP, PC & Laptop</label>
                                                    <input type="number" class="form-control" name="dk[]" min="0">
                                                </div>
                                                <div class="form-group">
                                                    <label>Jumlah Tamu Masuk & Keluar</label>
                                                    <input type="number" class="form-control" name="dk[]" min="0">
                                                </div>
                                                <div class="form-group">
                                                    <label>Jumlah Barang Masuk & Keluar</label>
                                                    <input type="number" class="form-control" name="dk[]" min="0">
                                                </div>
                                                <div class="form-group">
                                                    <label>Total Karyawan</label>
                                                    <input type="number" class="form-control" name="dk[]" min="0">
                                                </div>
                                                <div class="form-group">
                                                    <label>Total Kontraktor</label>
                                                    <input type="number" class="form-control" name="dk[]" min="0">
                                                </div>
                                                <div class="form-group">
                                                    <label>Total Kecelakaan Keamanan</label>
                                                    <input type="number" class="form-control" name="tk_keamanan" min="0">
                                                </div>
                                                <div class="form-group">
                                                    <label>Total Kecelakaan Karyawan</label>
                                                    <input type="number" class="form-control" name="tk_karyawan" min="0">
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <h3>Disiplin Kinerja Keamanan</h3>
                                    <section>
                                        <div class="form-group">
                                            <label>Perbaikan Keamanan</label>
                                            <textarea class="form-control" name="perbaikan" row="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Pengembangan Keamanan</label>
                                            <textarea class="form-control" name="pengembangan" row="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Komunikasi / Kontrol</label>
                                            <textarea class="form-control" name="komunikasi" row="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Informasi Lain</label>
                                            <textarea class="form-control" name="infolain" row="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Saran Tindak Lanjut yang diperlukan oleh kantor pusat PT.GAPARA</label>
                                            <textarea class="form-control" name="saran_tl" row="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Saran rekomendasi untuk pengguna jasa di site</label>
                                            <textarea class="form-control" name="saran_rek" row="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Kesimpulan</label>
                                            <textarea class="form-control" name="kesimpulan" row="3"></textarea>
                                        </div>
                                    </section>
                                    <h3>Lampiran</h3>
                                    <section>
                                    <?php 
                                        for($i=0;$i<5;$i++){
                                            $no = $i+1;
                                    ?>
                                            <div class="form-group">
                                            <label>Nama Foto <?=$no;?></label>
                                            <input type="text" class="form-control" name="lampiran[<?=$i;?>][nama]" min="0">
                                            </div>
                                            <div class="form-group">
                                            <label class="form-label">Foto <?=$no;?></label>
                                            <input type="file" name="lampiran[<?=$i;?>][foto]" data-height="200" />
                                            </div>
                                    <?php } ?>
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