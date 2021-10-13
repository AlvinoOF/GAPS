<link href="<?=base_url('assets/main/');?>plugins/sweet-alert/sweetalert.css" rel="stylesheet">
<!---Internal Fileupload css-->
<link href="<?=base_url('assets/main/');?>plugins/fileuploads/css/fileupload.css" rel="stylesheet" type="text/css"/>
	
                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
                            <h4 class="content-title mb-0 my-auto">Security Report</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Daily Report / Daily HSE Observation Report / Tambah Daily HSE Observation Report</span>
							</div>
						</div>
					</div>
                    <!-- <form action="#" method="post" id="formInput"> -->
                    <form action="<?=base_url('user/r_daily/hse_save');?>" method="post" id="formInput">
                    <div class="row row-sm">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Tambah Daily HSE Observation Report</h4>
									</div>
								</div>
								<div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="control-group form-group">
                                                <label class="form-label">SITE/LOKASI</label>
                                                <!-- <textarea name="lokasi" class="form-control required" rows="4"></textarea> -->
                                                <input type="text" name="lokasi" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">TANGGAL & WAKTU</label>
                                                <input type="datetime-local" name="tgl" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">SHIFT</label>
                                                <input type="text" name="shift" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">OBSERVER/PENGAMAT</label>
                                                <input type="text" name="observer" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">JABATAN/POSISI</label>
                                                <input type="text" name="jabatan" class="form-control required">
                                            </div>
                                            <!-- <br>
                                            <div class="control-group form-group">
                                                <label class="form-label">AKTIFITAS</label>
                                                <textarea name="aktifitas" class="form-control required" rows="4"></textarea>
                                            </div> -->
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="control-group form-group">
                                                <label class="form-label">First Aid Case (Kasus P3K)</label>
                                                <input type="number" name="p3k" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Medical Treatment Injury Case  (Bantuan Medis)</label>
                                                <input type="number" name="medic" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Fatal Incidents (Korban Jiwa)</label>
                                                <input type="number" name="fatal" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">TOTAL CASE</label>
                                                <input type="number" name="total" class="form-control required">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">JUMLAH TENAGA KERJA</label>
                                                <input type="number" name="jumtk" class="form-control required">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <table width="100%" border="1">
                                                <tr>
                                                    <th width="25%" style="text-align:center;">TTA - TINDAKAN TIDAK AMAN<br>KTA - KONDISI TIDAK AMAN</th>
                                                    <th width="50%" style="text-align:center;">PENGAMATAN K3LL</th>
                                                    <th width="25%" style="text-align:center;">TA - TINDAKAN AMAN<br>KA - KONDISI AMAN</th>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" style="text-align:center;">1. KESELAMATAN KERJA</td>
                                                </tr>
                                                <tr>
                                                    <td><select class="form-control" name="kondisi[0][tta]"><option></option><option>TTA</option><option>KTA</option></select></td>
                                                    <td style="text-align:center;">Berpotensi kecelakaan</td>
                                                    <td><select class="form-control" name="kondisi[0][ta]"><option></option><option>TA</option><option>KA</option></select></td>
                                                </tr>
                                                <tr>
                                                    <td><select class="form-control" name="kondisi[1][tta]"><option></option><option>TTA</option><option>KTA</option></select></td>
                                                    <td style="text-align:center;">Berpotensi kebakaran/meledak</td>
                                                    <td><select class="form-control" name="kondisi[1][ta]"><option></option><option>TA</option><option>KA</option></select></td>
                                                </tr>
                                                <tr>
                                                    <td><select class="form-control" name="kondisi[2][tta]"><option></option><option>TTA</option><option>KTA</option></select></td>
                                                    <td style="text-align:center;">Pencegahan kecelakaan</td>
                                                    <td><select class="form-control" name="kondisi[2][ta]"><option></option><option>TA</option><option>KA</option></select></td>
                                                </tr>
                                                <tr>
                                                    <td><select class="form-control" name="kondisi[3][tta]"><option></option><option>TTA</option><option>KTA</option></select></td>
                                                    <td style="text-align:center;">Pengawas berada dilokasi</td>
                                                    <td><select class="form-control" name="kondisi[3][ta]"><option></option><option>TA</option><option>KA</option></select></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" style="text-align:center;">2. KESEHATAN KERJA</td>
                                                </tr>
                                                <tr>
                                                    <td><select class="form-control" name="kondisi[4][tta]"><option></option><option>TTA</option><option>KTA</option></select></td>
                                                    <td style="text-align:center;">Kondisi sehat/siap untuk kerja</td>
                                                    <td><select class="form-control" name="kondisi[4][ta]"><option></option><option>TA</option><option>KA</option></select></td>
                                                </tr>
                                                <tr>
                                                    <td><select class="form-control" name="kondisi[5][tta]"><option></option><option>TTA</option><option>KTA</option></select></td>
                                                    <td style="text-align:center;">Masalah Psikologi</td>
                                                    <td><select class="form-control" name="kondisi[5][ta]"><option></option><option>TA</option><option>KA</option></select></td>
                                                </tr>
                                                <tr>
                                                    <td><select class="form-control" name="kondisi[6][tta]"><option></option><option>TTA</option><option>KTA</option></select></td>
                                                    <td style="text-align:center;">Ergonomi/posisi tubuh</td>
                                                    <td><select class="form-control" name="kondisi[6][ta]"><option></option><option>TA</option><option>KA</option></select></td>
                                                </tr>
                                                <tr>
                                                    <td><select class="form-control" name="kondisi[7][tta]"><option></option><option>TTA</option><option>KTA</option></select></td>
                                                    <td style="text-align:center;">Lingkungan Kerja</td>
                                                    <td><select class="form-control" name="kondisi[7][ta]"><option></option><option>TA</option><option>KA</option></select></td>
                                                </tr>
                                                <tr>
                                                    <td><select class="form-control" name="kondisi[8][tta]"><option></option><option>TTA</option><option>KTA</option></select></td>
                                                    <td style="text-align:center;">Kebersihan & kesehatan</td>
                                                    <td><select class="form-control" name="kondisi[8][ta]"><option></option><option>TA</option><option>KA</option></select></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" style="text-align:center;">3. LINDUNGAN LINGKUNGAN</td>
                                                </tr>
                                                <tr>
                                                    <td><select class="form-control" name="kondisi[9][tta]"><option></option><option>TTA</option><option>KTA</option></select></td>
                                                    <td style="text-align:center;">Kerapihan & kebersihan</td>
                                                    <td><select class="form-control" name="kondisi[9][ta]"><option></option><option>TA</option><option>KA</option></select></td>
                                                </tr>
                                                <tr>
                                                    <td><select class="form-control" name="kondisi[10][tta]"><option></option><option>TTA</option><option>KTA</option></select></td>
                                                    <td style="text-align:center;">Pemberian simbol2 standar</td>
                                                    <td><select class="form-control" name="kondisi[10][ta]"><option></option><option>TA</option><option>KA</option></select></td>
                                                </tr>
                                                <tr>
                                                    <td><select class="form-control" name="kondisi[11][tta]"><option></option><option>TTA</option><option>KTA</option></select></td>
                                                    <td style="text-align:center;">Berpotensi pencemaran</td>
                                                    <td><select class="form-control" name="kondisi[11][ta]"><option></option><option>TA</option><option>KA</option></select></td>
                                                </tr>
                                                <tr>
                                                    <td><select class="form-control" name="kondisi[12][tta]"><option></option><option>TTA</option><option>KTA</option></select></td>
                                                    <td style="text-align:center;">Boros enerji</td>
                                                    <td><select class="form-control" name="kondisi[12][ta]"><option></option><option>TA</option><option>KA</option></select></td>
                                                </tr>
                                                <!-- <tr>
                                                    <td><select class="form-control" name="kondisi[13][tta]"><option></option><option>TTA</option><option>KTA</option></select></td>
                                                    <td style="text-align:center;">Pencegahan pencemaran</td>
                                                    <td><select class="form-control" name="kondisi[13][ta]"><option></option><option>TA</option><option>KA</option></select></td>
                                                </tr>
                                                <tr>
                                                    <td><select class="form-control" name="kondisi[14][tta]"><option></option><option>TTA</option><option>KTA</option></select></td>
                                                    <td style="text-align:center;">Ketersediaan alat penyerap tumpahan</td>
                                                    <td><select class="form-control" name="kondisi[14][ta]"><option></option><option>TA</option><option>KA</option></select></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" style="text-align:center;">4. PERALATAN</td>
                                                </tr>
                                                <tr>
                                                    <td><select class="form-control" name="kondisi[15][tta]"><option></option><option>TTA</option><option>KTA</option></select></td>
                                                    <td style="text-align:center;"> Alat Pelindung Diri</td>
                                                    <td><select class="form-control" name="kondisi[15][ta]"><option></option><option>TA</option><option>KA</option></select></td>
                                                </tr>
                                                <tr>
                                                    <td><select class="form-control" name="kondisi[16][tta]"><option></option><option>TTA</option><option>KTA</option></select></td>
                                                    <td style="text-align:center;">Alat portabel</td>
                                                    <td><select class="form-control" name="kondisi[16][ta]"><option></option><option>TA</option><option>KA</option></select></td>
                                                </tr>
                                                <tr>
                                                    <td><select class="form-control" name="kondisi[17][tta]"><option></option><option>TTA</option><option>KTA</option></select></td>
                                                    <td style="text-align:center;">Alat Mekanis</td>
                                                    <td><select class="form-control" name="kondisi[17][ta]"><option></option><option>TA</option><option>KA</option></select></td>
                                                </tr>
                                                <tr>
                                                    <td><select class="form-control" name="kondisi[18][tta]"><option></option><option>TTA</option><option>KTA</option></select></td>
                                                    <td style="text-align:center;">Listrik</td>
                                                    <td><select class="form-control" name="kondisi[18][ta]"><option></option><option>TA</option><option>KA</option></select></td>
                                                </tr>
                                                <tr>
                                                    <td><select class="form-control" name="kondisi[19][tta]"><option></option><option>TTA</option><option>KTA</option></select></td>
                                                    <td style="text-align:center;">Kendaraan/alat berat</td>
                                                    <td><select class="form-control" name="kondisi[][ta]"><option></option><option>TA</option><option>KA</option></select></td>
                                                </tr> -->
                                            </table>
                                        </div>
                                        <div class="col-xl-6">
                                            
                                            <div class="form-group mb-0 justify-content-end">
                                                <div class="checkbox">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1" name="diamati1" value="1">
                                                        <label for="checkbox-1" class="custom-control-label mt-1">KONDISI AMAN YANG DIAMATI</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Tindakan</label>
                                                <textarea name="tindakan1" class="form-control required" rows="4"></textarea>
                                            </div>

                                            <div class="form-group mb-0 justify-content-end">
                                                <div class="checkbox">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2" name="diamati2" value="1">
                                                        <label for="checkbox-2" class="custom-control-label mt-1">KONDISI TIDAK AMAN YANG DIAMATI</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Tindakan</label>
                                                <textarea name="tindakan2" class="form-control required" rows="4"></textarea>
                                            </div>
                                            
                                            <div class="form-group mb-0 justify-content-end">
                                                <div class="checkbox">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-3" name="perbaikan" value="1">
                                                        <label for="checkbox-3" class="custom-control-label mt-1">TINDAKAN YANG DILAKUKAN</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Tindakan</label>
                                                <textarea name="tindakan3" class="form-control required" rows="4"></textarea>
                                            </div>
                                            <br>Bukti Dokumentasi<br>
                                            <div class="col-sm-12 col-md-12">
                                                <label class="form-label">Foto Sebelum</label>
                                                <input type="file" name="foto1" data-height="200" />
                                            </div>
                                            <div class="col-sm-12 col-md-12">
                                                <label class="form-label">Foto Sesudah</label>
                                                <input type="file" name="foto2" data-height="200" />
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-3 mb-0">Simpan</button>
                                        </div>
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