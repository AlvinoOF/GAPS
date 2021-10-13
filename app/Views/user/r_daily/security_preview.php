
                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
                            <h4 class="content-title mb-0 my-auto">Security Report</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Daily Report / Daily Security Report / Preview Report</span>
							</div>
						</div>
					</div>
                    <!-- <form action="#" method="post" id="formInput"> -->
                    <form action="<?=base_url('user/r_daily/security_save');?>" method="post" id="formInput">
                    <div class="row row-sm">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h3 class="card-title mg-b-0"></h3>
									</div>
								</div>
								<div class="card-body pt-0">
                                    <table width="100%" border="1">
                                        <tr>
                                            <td style="text-align:center;"><b>FORMULIR LAPORAN HARIAN & MINGGUAN SECURITY (DRAFT)</b></td>
                                            <td style="text-align:left;" colspan="2"><b>NOMOR</b><br>GPN-FRM-14.2021-OPS"</td>
                                            <td style="text-align:center;" rowspan="4"><img src="<?=base_url('assets/logo/');?>gapara.jpg" style="max-height: 100px;"></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:center;" rowspan="3"><b>PT GARDA PAKSI NUSANTARA</b></td>
                                            <td style="text-align:left;"><b>FUNGSI</b></td>
                                            <td style="text-align:left;">OPS</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:left;"><b>REVISI KE</b></td>
                                            <td style="text-align:left;">0</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:left;"><b>BERLAKU TMT</b></td>
                                            <td style="text-align:left;"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" style="padding:20px">
                                                <table width="100%" border="1">
                                                    <tr>
                                                        <td width="55%">Peristiwa Penting Kegiatan Pengamanan</td>
                                                        <td width="5%"></td>
                                                        <td width="15%" style="background-color: green;">SITE/LOKASI</td>
                                                        <td width="15%"></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="55%">Peristiwa Penting Kegiatan Pengamanan</td>
                                                        <td width="5%"></td>
                                                        <td width="15%" style="background-color: green;">TANGGAL & WAKTU</td>
                                                        <td width="15%"></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="55%">Peristiwa Penting Kegiatan Pengamanan</td>
                                                        <td width="5%"></td>
                                                        <td width="15%" style="background-color: green;">SHIFT</td>
                                                        <td width="15%"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
								</div>
							</div>
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h3 class="card-title mg-b-0">Pengendalian Resiko Keamanan</h3>
									</div>
								</div>
								<div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <label><b>Potensi Kerugian</b></label>
                                            <div class="form-group">
                                                <label>Aset (stok,barang,unit,dll)</label>
                                                <input type="number" class="form-control" name="pk_aset" min="0">
                                            </div>
                                            <div class="form-group">
                                                <label>Uang (rupiah)</label>
                                                <input type="number" class="form-control" name="pk_uang" min="0">
                                            </div>
                                            <div class="form-group">
                                                <label>Peralatan kerja</label>
                                                <input type="number" class="form-control" name="pk_peralatan" min="0">
                                            </div>
                                            <div class="form-group">
                                                <label>Lainnya</label>
                                                <input type="number" class="form-control" name="pk_lain" min="0">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <label><b>Potensi Diamankan</b></label>
                                            <div class="form-group">
                                                <label>Aset (stok,barang,unit,dll)</label>
                                                <input type="number" class="form-control" name="pd_aset" min="0">
                                            </div>
                                            <div class="form-group">
                                                <label>Uang (rupiah)</label>
                                                <input type="number" class="form-control" name="pd_uang" min="0">
                                            </div>
                                            <div class="form-group">
                                                <label>Peralatan kerja</label>
                                                <input type="number" class="form-control" name="pd_peralatan" min="0">
                                            </div>
                                            <div class="form-group">
                                                <label>Lainnya</label>
                                                <input type="number" class="form-control" name="pd_lain" min="0">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <label><b>Potensi Diamankan</b></label>
                                            <div class="form-group">
                                                <label>Total Insiden Keamanan</label>
                                                <input type="number" class="form-control" name="t_insiden" min="0">
                                            </div>
                                            <div class="form-group">
                                                <label>Total Kecelakaan Keamanan</label>
                                                <input type="number" class="form-control" name="t_kkeamanan" min="0">
                                            </div>
                                            <div class="form-group">
                                                <label>Total Kecelakaan Karyawan</label>
                                                <input type="number" class="form-control" name="t_kkaryawan" min="0">
                                            </div>
                                            <div class="form-group">
                                                <label>Total Potensi Resiko Ancaman</label>
                                                <input type="number" class="form-control" name="t_prancaman" min="0">
                                            </div>
                                            <div class="form-group">
                                                <label>Total Potensi Resiko Rawan</label>
                                                <input type="number" class="form-control" name="t_prrawan" min="0">
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
                            <div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h3 class="card-title mg-b-0">Disiplin Kinerja Keamanan</h3>
									</div>
								</div>
								<div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label>Jumlah & Nama Pos</label>
                                                <input type="number" class="form-control" name="dk_pos" min="0">
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah SOP & Pos Order</label>
                                                <input type="number" class="form-control" name="dk_sop" min="0">
                                            </div>
                                            <div class="form-group">
                                                <label>Mutasi & Alat Tulis</label>
                                                <input type="number" class="form-control" name="dk_mutasi" min="0">
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah & No Kendaraan</label>
                                                <input type="number" class="form-control" name="dk_kendaraan" min="0">
                                            </div>
                                            <div class="form-group">
                                                <label>P3K Pos Utama & Mobil</label>
                                                <input type="number" class="form-control" name="dk_p3k" min="0">
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah Helm & Rompi</label>
                                                <input type="number" class="form-control" name="dk_helm" min="0">
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah Gatur & HT</label>
                                                <input type="number" class="form-control" name="dk_gatur" min="0">
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label>Jumlah Senter</label>
                                                <input type="number" class="form-control" name="dk_senter" min="0">
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah Jas Hujan</label>
                                                <input type="number" class="form-control" name="dk_jas" min="0">
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah Tongkat/Borgol</label>
                                                <input type="number" class="form-control" name="dk_tongkat" min="0">
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah Safety Mirror</label>
                                                <input type="number" class="form-control" name="dk_safety" min="0">
                                            </div>
                                            <div class="form-group">
                                                <label>ID BED-KTA-SIMPER</label>
                                                <input type="number" class="form-control" name="dk_id" min="0">
                                            </div>
                                            <div class="form-group">
                                                <label>Kelengkapan Seragam</label>
                                                <input type="number" class="form-control" name="dk_seragam" min="0">
                                            </div>
                                            <div class="form-group">
                                                <label>Apar Mobil & Pos</label>
                                                <input type="number" class="form-control" name="dk_apar" min="0">
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label>Jumlah HP, PC & Laptop</label>
                                                <input type="number" class="form-control" name="dk_hp" min="0">
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah Tamu Masuk & Keluar</label>
                                                <input type="number" class="form-control" name="dk_tamu" min="0">
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah Barang Masuk & Keluar</label>
                                                <input type="number" class="form-control" name="dk_barang" min="0">
                                            </div>
                                            <div class="form-group">
                                                <label>Total Karyawan</label>
                                                <input type="number" class="form-control" name="dk_karyawan" min="0">
                                            </div>
                                            <div class="form-group">
                                                <label>Total Kontraktor</label>
                                                <input type="number" class="form-control" name="dk_kontraktor" min="0">
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
                            <div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h3 class="card-title mg-b-0">Potensi Resiko Ancaman</h3>
									</div>
								</div>
								<div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label>Upaya Penyusupan</label>
                                                <select class="form-control" name="pra[]">
                                                    <option value="0">Tidak Ada</option>
                                                    <option value="1">Ada</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Masuk tanpa izin</label>
                                                <select class="form-control" name="pra[]">
                                                    <option value="0">Tidak Ada</option>
                                                    <option value="1">Ada</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Penipuan aset</label>
                                                <select class="form-control" name="pra[]">
                                                    <option value="0">Tidak Ada</option>
                                                    <option value="1">Ada</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Manipulasi Informasi</label>
                                                <select class="form-control" name="pra[]">
                                                    <option value="0">Tidak Ada</option>
                                                    <option value="1">Ada</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Penggelapan</label>
                                                <select class="form-control" name="pra[]">
                                                    <option value="0">Tidak Ada</option>
                                                    <option value="1">Ada</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Kerjasama dg Kejahatan</label>
                                                <select class="form-control" name="pra[]">
                                                    <option value="0">Tidak Ada</option>
                                                    <option value="1">Ada</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Pencurian oleh Karyawan</label>
                                                <select class="form-control" name="pra[]">
                                                    <option value="0">Tidak Ada</option>
                                                    <option value="1">Ada</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Pencurian oleh pihak luar</label>
                                                <select class="form-control" name="pra[]">
                                                    <option value="0">Tidak Ada</option>
                                                    <option value="1">Ada</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Penyerangan/dg senjata</label>
                                                <select class="form-control" name="pra[]">
                                                    <option value="0">Tidak Ada</option>
                                                    <option value="1">Ada</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Pemerasan</label>
                                                <select class="form-control" name="pra[]">
                                                    <option value="0">Tidak Ada</option>
                                                    <option value="1">Ada</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label>Penculikan</label>
                                                <select class="form-control" name="pra[]">
                                                    <option value="0">Tidak Ada</option>
                                                    <option value="1">Ada</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Pengancaman/dg senjata</label>
                                                <select class="form-control" name="pra[]">
                                                    <option value="0">Tidak Ada</option>
                                                    <option value="1">Ada</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Pembunuhan</label>
                                                <select class="form-control" name="pra[]">
                                                    <option value="0">Tidak Ada</option>
                                                    <option value="1">Ada</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Perampokan</label>
                                                <select class="form-control" name="pra[]">
                                                    <option value="0">Tidak Ada</option>
                                                    <option value="1">Ada</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Pembajakan bersenjata</label>
                                                <select class="form-control" name="pra[]">
                                                    <option value="0">Tidak Ada</option>
                                                    <option value="1">Ada</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Blokade kerja/jalan</label>
                                                <select class="form-control" name="pra[]">
                                                    <option value="0">Tidak Ada</option>
                                                    <option value="1">Ada</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Perusakan aset</label>
                                                <select class="form-control" name="pra[]">
                                                    <option value="0">Tidak Ada</option>
                                                    <option value="1">Ada</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Sabotase</label>
                                                <select class="form-control" name="pra[]">
                                                    <option value="0">Tidak Ada</option>
                                                    <option value="1">Ada</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Pembakaran aset</label>
                                                <select class="form-control" name="pra[]">
                                                    <option value="0">Tidak Ada</option>
                                                    <option value="1">Ada</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label>Unjuk rasa</label>
                                                <select class="form-control" name="pra[]">
                                                    <option value="0">Tidak Ada</option>
                                                    <option value="1">Ada</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Penambang liar</label>
                                                <select class="form-control" name="pra[]">
                                                    <option value="0">Tidak Ada</option>
                                                    <option value="1">Ada</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Aktifis Sosial</label>
                                                <select class="form-control" name="pra[]">
                                                    <option value="0">Tidak Ada</option>
                                                    <option value="1">Ada</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Pelecehan seksual</label>
                                                <select class="form-control" name="pra[]">
                                                    <option value="0">Tidak Ada</option>
                                                    <option value="1">Ada</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Infrastruktur</label>
                                                <select class="form-control" name="pra[]">
                                                    <option value="0">Tidak Ada</option>
                                                    <option value="1">Ada</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Anti Warga Asing</label>
                                                <select class="form-control" name="pra[]">
                                                    <option value="0">Tidak Ada</option>
                                                    <option value="1">Ada</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Sengketa</label>
                                                <select class="form-control" name="pra[]">
                                                    <option value="0">Tidak Ada</option>
                                                    <option value="1">Ada</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Teroris</label>
                                                <select class="form-control" name="pra[]">
                                                    <option value="0">Tidak Ada</option>
                                                    <option value="1">Ada</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Bencana Alam</label>
                                                <select class="form-control" name="pra[]">
                                                    <option value="0">Tidak Ada</option>
                                                    <option value="1">Ada</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
                            <div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h3 class="card-title mg-b-0">Potensi Kemungkinan / Kerawanan</h3>
									</div>
								</div>
								<div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label>Gerbang/gate utama</label>
                                                <select class="form-control" name="pkk[]">
                                                    <option value="1">Normal</option>
                                                    <option value="0">Perbaikan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Gerbang/ gate pendukung</label>
                                                <select class="form-control" name="pkk[]">
                                                    <option value="1">Normal</option>
                                                    <option value="0">Perbaikan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Pagar / tembok perimeter</label>
                                                <select class="form-control" name="pkk[]">
                                                    <option value="1">Normal</option>
                                                    <option value="0">Perbaikan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Lampu perimeter</label>
                                                <select class="form-control" name="pkk[]">
                                                    <option value="1">Normal</option>
                                                    <option value="0">Perbaikan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Lampu pos</label>
                                                <select class="form-control" name="pkk[]">
                                                    <option value="1">Normal</option>
                                                    <option value="0">Perbaikan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Panel listrik</label>
                                                <select class="form-control" name="pkk[]">
                                                    <option value="1">Normal</option>
                                                    <option value="0">Perbaikan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Genset</label>
                                                <select class="form-control" name="pkk[]">
                                                    <option value="1">Normal</option>
                                                    <option value="0">Perbaikan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Bangunan Kantor Karyawan</label>
                                                <select class="form-control" name="pkk[]">
                                                    <option value="1">Normal</option>
                                                    <option value="0">Perbaikan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Bangunan Dormitory</label>
                                                <select class="form-control" name="pkk[]">
                                                    <option value="1">Normal</option>
                                                    <option value="0">Perbaikan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Kabel listrik / Kabel telepon</label>
                                                <select class="form-control" name="pkk[]">
                                                    <option value="1">Normal</option>
                                                    <option value="0">Perbaikan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label>CCTV (tiang dan instalasi)</label>
                                                <select class="form-control" name="pkk[]">
                                                    <option value="1">Normal</option>
                                                    <option value="0">Perbaikan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Kunci dan gembok</label>
                                                <select class="form-control" name="pkk[]">
                                                    <option value="1">Normal</option>
                                                    <option value="0">Perbaikan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Barier pagar/tembok/gate</label>
                                                <select class="form-control" name="pkk[]">
                                                    <option value="1">Normal</option>
                                                    <option value="0">Perbaikan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Gudang utama</label>
                                                <select class="form-control" name="pkk[]">
                                                    <option value="1">Normal</option>
                                                    <option value="0">Perbaikan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Gudang bahan peledak</label>
                                                <select class="form-control" name="pkk[]">
                                                    <option value="1">Normal</option>
                                                    <option value="0">Perbaikan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Gudang Bahan Bakar</label>
                                                <select class="form-control" name="pkk[]">
                                                    <option value="1">Normal</option>
                                                    <option value="0">Perbaikan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Instalasi/area terbatas</label>
                                                <select class="form-control" name="pkk[]">
                                                    <option value="1">Normal</option>
                                                    <option value="0">Perbaikan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Kondisi akses jalan</label>
                                                <select class="form-control" name="pkk[]">
                                                    <option value="1">Normal</option>
                                                    <option value="0">Perbaikan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Rambu keselamatan</label>
                                                <select class="form-control" name="pkk[]">
                                                    <option value="1">Normal</option>
                                                    <option value="0">Perbaikan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label>Rambu keamanan</label>
                                                <select class="form-control" name="pkk[]">
                                                    <option value="1">Normal</option>
                                                    <option value="0">Perbaikan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Kelengkapan kendaraan</label>
                                                <select class="form-control" name="pkk[]">
                                                    <option value="1">Normal</option>
                                                    <option value="0">Perbaikan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Alat Pelindung Diri</label>
                                                <select class="form-control" name="pkk[]">
                                                    <option value="1">Normal</option>
                                                    <option value="0">Perbaikan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Barang terlarang</label>
                                                <select class="form-control" name="pkk[]">
                                                    <option value="1">Normal</option>
                                                    <option value="0">Perbaikan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Cuaca / Suhu</label>
                                                <select class="form-control" name="pkk[]">
                                                    <option value="1">Normal</option>
                                                    <option value="0">Perbaikan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Tanah / lahan / alam</label>
                                                <select class="form-control" name="pkk[]">
                                                    <option value="1">Normal</option>
                                                    <option value="0">Perbaikan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Akses menuju site</label>
                                                <select class="form-control" name="pkk[]">
                                                    <option value="1">Normal</option>
                                                    <option value="0">Perbaikan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Komunikasi / signal</label>
                                                <select class="form-control" name="pkk[]">
                                                    <option value="1">Normal</option>
                                                    <option value="0">Perbaikan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Lingkungan</label>
                                                <select class="form-control" name="pkk[]">
                                                    <option value="1">Normal</option>
                                                    <option value="0">Perbaikan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
                    </div>