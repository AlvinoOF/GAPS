<link href="<?=base_url('assets/main/');?>plugins/sweet-alert/sweetalert.css" rel="stylesheet">
<!---Internal Fileupload css-->
<link href="<?=base_url('assets/main/');?>plugins/fileuploads/css/fileupload.css" rel="stylesheet" type="text/css"/>
	
                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
                            <h4 class="content-title mb-0 my-auto">Manajemen Tamu</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Daftar Kendaraan / Tambah Kendaraan</span>
							</div>
						</div>
					</div>
                    <form action="<?=base_url('user/kendaraan/add_save');?>" method="post" id="formInput">
                    <div class="row row-sm">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Tambah Kendaraan</h4><br>
									</div>
								</div>
								<div class="card-body pt-0">
                                    <div class="control-group form-group">
                                        <label class="form-label">Tanggal Pengajuan</label>
                                        <input type="datetime-local" name="tgl" class="form-control required">
                                    </div>
                                    <div class="control-group form-group">
                                        <label class="form-label">PIC Admin / Pengajuan</label>
                                        <input type="text" name="pic" class="form-control required">
                                    </div>
                                    <div class="control-group form-group">
                                        <label class="form-label">No. Telp</label>
                                        <input type="text" name="telp" class="form-control required">
                                    </div>
                                    <div class="control-group form-group">
                                        <label class="form-label">Departemen</label>
                                        <input type="text" name="departemen" class="form-control required">
                                    </div>
                                    <div class="control-group form-group">
                                        <label class="form-label">Jenis Izin Akses Kendaraan</label>
                                        <label class="rdiobox"><input type="radio" name="jenis" value="1"> <span>Permanen (Perusahaan)</span></label>
                                        <label class="rdiobox"><input type="radio" name="jenis" value="2"> <span>Sementara (Kontraktor)</span></label>
                                        <label class="rdiobox"><input type="radio" name="jenis" value="3"> <span>Tamu</span></label>
                                    </div>
                                    <br>
                                    Pengemudi  Kendaraan :<br>
                                    <table width="100%" border="1">
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Nama</th>
                                            <th rowspan="2">No. KTP/Passport/SIM</th>
                                            <th rowspan="2">Perusahaan Kontraktor</th>
                                            <th rowspan="2">ID Badge No.</th>
                                            <th colspan="2">Jangka Waktu kunjungan</th>
                                        </tr>
                                        <tr>
                                            <th>Mulai</th>
                                            <th>Selesai</th>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="text" name="pengemudi[0][nama]" class="form-control" placeholder="Nama">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="text" name="pengemudi[0][ktp]" class="form-control" placeholder="No. KTP/Passport/SIM">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="text" name="pengemudi[0][perusahaan]" class="form-control" placeholder="Perusahaan Kontraktor">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="text" name="pengemudi[0][badge]" class="form-control" placeholder="ID Badge No.">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="time" name="pengemudi[0][mulai]" class="form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="time" name="pengemudi[0][selesai]" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="text" name="pengemudi[1][nama]" class="form-control" placeholder="Nama">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="text" name="pengemudi[1][ktp]" class="form-control" placeholder="No. KTP/Passport/SIM">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="text" name="pengemudi[1][perusahaan]" class="form-control" placeholder="Perusahaan Kontraktor">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="text" name="pengemudi[1][badge]" class="form-control" placeholder="ID Badge No.">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="time" name="pengemudi[1][mulai]" class="form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="time" name="pengemudi[1][selesai]" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="text" name="pengemudi[2][nama]" class="form-control" placeholder="Nama">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="text" name="pengemudi[2][ktp]" class="form-control" placeholder="No. KTP/Passport/SIM">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="text" name="pengemudi[2][perusahaan]" class="form-control" placeholder="Perusahaan Kontraktor">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="text" name="pengemudi[2][badge]" class="form-control" placeholder="ID Badge No.">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="time" name="pengemudi[2][mulai]" class="form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="time" name="pengemudi[2][selesai]" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                    <br>
                                    Data Kendaraan :<br>
                                    <table width="100%" border="1">
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Jenis Kendaraan</th>
                                            <th rowspan="2">Merk Kendaraan</th>
                                            <th rowspan="2">Plat No. Kendaraan</th>
                                            <th rowspan="2">Validasi Surat Tanda Nomor Kendaraan</th>
                                            <th colspan="2">Jangka Waktu kunjungan</th>
                                        </tr>
                                        <tr>
                                            <th>Mulai</th>
                                            <th>Selesai</th>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="text" name="kendaraan[0][jenis]" class="form-control" placeholder="Jenis Kendaraan">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="text" name="kendaraan[0][merk]" class="form-control" placeholder="Merk Kendaraan">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="text" name="kendaraan[0][plat]" class="form-control" placeholder="Plat No. Kendaraan">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="text" name="kendaraan[0][validasi]" class="form-control" placeholder="Validasi Surat Tanda Nomor Kendaraan">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="time" name="kendaraan[0][mulai]" class="form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="time" name="kendaraan[0][selesai]" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="text" name="kendaraan[1][jenis]" class="form-control" placeholder="Jenis Kendaraan">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="text" name="kendaraan[1][merk]" class="form-control" placeholder="Merk Kendaraan">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="text" name="kendaraan[1][plat]" class="form-control" placeholder="Plat No. Kendaraan">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="text" name="kendaraan[1][validasi]" class="form-control" placeholder="Validasi Surat Tanda Nomor Kendaraan">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="time" name="kendaraan[1][mulai]" class="form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="time" name="kendaraan[1][selesai]" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="text" name="kendaraan[2][jenis]" class="form-control" placeholder="Jenis Kendaraan">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="text" name="kendaraan[2][merk]" class="form-control" placeholder="Merk Kendaraan">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="text" name="kendaraan[2][plat]" class="form-control" placeholder="Plat No. Kendaraan">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="text" name="kendaraan[2][validasi]" class="form-control" placeholder="Validasi Surat Tanda Nomor Kendaraan">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="time" name="kendaraan[2][mulai]" class="form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="control-group form-group">
                                                    <input type="time" name="kendaraan[2][selesai]" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                    <br>
                                    <div class="control-group form-group">
                                        <label class="form-label">Tujuan Akses Masuk</label>
                                        <textarea name="tujuan" class="form-control required" rows="4"></textarea>
                                    </div>
                                    <br>Lokasi yang akan dikunjungi :<br>
                                    <div class="form-group mb-0 justify-content-end">
                                        <div class="checkbox">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1" name="lokasi[]" value="1">
                                                <label for="checkbox-1" class="custom-control-label mt-1">Prohibited Area (Area Terlarang)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 justify-content-end">
                                        <div class="checkbox">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2" name="lokasi[]" value="2">
                                                <label for="checkbox-2" class="custom-control-label mt-1">Restricted Area (Area Terbatas)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 justify-content-end">
                                        <div class="checkbox">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-3" name="lokasi[]" value="3">
                                                <label for="checkbox-3" class="custom-control-label mt-1">Non Restricted Area (Area Tidak Terbatas)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <br>Persyaratan  Operasional :<br>
                                    <div class="form-group mb-0 justify-content-end">
                                        <div class="checkbox">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-21" name="syarat[]" value="1">
                                                <label for="checkbox-21" class="custom-control-label mt-1">General Safety Induction</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 justify-content-end">
                                        <div class="checkbox">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-22" name="syarat[]" value="2">
                                                <label for="checkbox-22" class="custom-control-label mt-1">Specific Safety Induction</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 justify-content-end">
                                        <div class="checkbox">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-23" name="syarat[]" value="3">
                                                <label for="checkbox-23" class="custom-control-label mt-1">Security Induction</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 justify-content-end">
                                        <div class="checkbox">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-24" name="syarat[]" value="4">
                                                <label for="checkbox-24" class="custom-control-label mt-1">H2S Sertifikat</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 justify-content-end">
                                        <div class="checkbox">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-25" name="syarat[]" value="5">
                                                <label for="checkbox-25" class="custom-control-label mt-1">Test Antigen/PCR/Swab</label>
                                            </div>
                                        </div>
                                    </div>
                                    <br>Lampiran Data :<br>
                                    <div class="col-sm-12 col-md-12">
                                        <label class="form-label">Personal Photo</label>
                                        <input type="file" name="lampiran[pp]" data-height="200" />
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <label class="form-label">KTP/Passport/SIM</label>
                                        <input type="file" name="lampiran[ktp]" data-height="200" />
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <label class="form-label">Hasil Antigen/PCR/Swab</label>
                                        <input type="file" name="lampiran[antigen]" data-height="200" />
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <label class="form-label">Surat Tanda Nomor Kendaraan</label>
                                        <input type="file" name="lampiran[stnk]" data-height="200" />
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3 mb-0">Simpan</button>
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