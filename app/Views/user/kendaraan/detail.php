<div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
                                <h4 class="content-title mb-0 my-auto">Manajemen Tamu</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Daftar Tamu / Detail Tamu</span>
							</div>
						</div>
					</div>
                    <div class="row row-sm">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Detail Tamu</h4>
										<div class="d-flex my-xl-auto right-content">
                                            <div class="mb-3 mb-xl-0" style="margin-right: 10px;">
												<a href="#" class="btn btn-warning"><i class="mdi mdi-plus"></i> Edit</a>
											</div>
                                            <div class="mb-3 mb-xl-0" style="margin-right: 10px;">
												<a href="#" class="btn btn-danger"><i class="mdi mdi-delete"></i> Delete</a>
											</div>
                                        </div>
									</div>
								</div>
								<div class="card-body">
                                    <h4 style="text-align:center">FORMULIR KUNJUNGAN TAMU</h4><br>
                                    <table width="100%">
                                        <tr>
                                            <td width="25%">No. Register *</td>
                                            <td width="5%">:</td>
                                            <td width="70%"><?=$data->no_reg;?></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Pengajuan</td>
                                            <td>:</td>
                                            <td><?=$data->tgl;?></td>
                                        </tr>
                                        <tr>
                                            <td>PIC  Admin / Pengajuan</td>
                                            <td>:</td>
                                            <td><?=$data->pic;?></td>
                                        </tr>
                                        <tr>
                                            <td>No. Telp</td>
                                            <td>:</td>
                                            <td><?=$data->telp;?></td>
                                        </tr>
                                        <tr>
                                            <td>Departemen</td>
                                            <td>:</td>
                                            <td><?=$data->departemen;?></td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align: top;">Jenis</td>
                                            <td style="vertical-align: top;">:</td>
                                            <?php
                                            $j1="";$j3="";$j2="";
                                            switch($data->jenis){
                                                case "1":$j1="checked";break;
                                                case "3":$j2="checked";break;
                                                case "2":$j3="checked";break;
                                            }
                                            ?>
                                            <td>
                                                <label class="rdiobox"><input type="radio" name="jenis" value="1" <?=$j1;?> disabled> <span>Permanen (Perusahaan)</span></label>
                                                <label class="rdiobox"><input type="radio" name="jenis" value="2" <?=$j2;?> disabled> <span>Sementara (Kontraktor)</span></label>
                                                <label class="rdiobox"><input type="radio" name="jenis" value="3" <?=$j3;?> disabled> <span>Tamu</span></label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Pengemudi  Kendaraan</td>
                                            <td>:</td>
                                            <td></td>
                                        </tr>
                                    </table>
                                    <br>
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
                                        <?php
                                            $tamu = json_decode($data->pengemudi);
                                            $no=0;
                                            if(is_array($tamu)){
                                                foreach($tamu as $row){
                                                    $no++;
                                        ?>
                                        <tr>
                                            <td><?=$no;?>.</td>
                                            <td><?=$row->nama;?></td>
                                            <td><?=$row->ktp;?></td>
                                            <td><?=$row->perusahaan;?></td>
                                            <td><?=$row->badge;?></td>
                                            <td><?=$row->mulai;?></td>
                                            <td><?=$row->selesai;?></td>
                                        </tr>
                                        <?php }} ?>
                                    </table>
                                    <br>
                                    <table width="100%">
                                        <tr>
                                            <td width="25%">Data Kendaraan</td>
                                            <td width="5%">:</td>
                                            <td width="70%"></td>
                                        </tr>
                                    </table>
                                    <br>
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
                                        <?php
                                            $tamu2 = json_decode($data->kendaraan);
                                            $no=0;
                                            if(is_array($tamu2)){
                                                foreach($tamu2 as $row){
                                                    $no++;
                                        ?>
                                        <tr>
                                            <td><?=$no;?>.</td>
                                            <td><?=$row->jenis;?></td>
                                            <td><?=$row->merk;?></td>
                                            <td><?=$row->plat;?></td>
                                            <td><?=$row->validasi;?></td>
                                            <td><?=$row->mulai;?></td>
                                            <td><?=$row->selesai;?></td>
                                        </tr>
                                        <?php }} ?>
                                    </table>
                                    <br>
                                    <table width="100%">
                                        <tr>
                                            <td width="25%">Tujuan  Kunjungan</td>
                                            <td width="5%">:</td>
                                            <td colspan="2"><?=$data->tujuan;?></td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align: top;">Lokasi yang akan dikunjungi</td>
                                            <td style="vertical-align: top;">:</td>
                                            <?php
                                                $lokasi = json_decode($data->lokasi);
                                                $ck1 = "";$ck2 = "";$ck3 = "";
                                                if(is_array($lokasi)){
                                                    if(in_array("1",$lokasi)){$ck1 = "Checked";}
                                                    if(in_array("2",$lokasi)){$ck2 = "Checked";}
                                                    if(in_array("3",$lokasi)){$ck3 = "Checked";}
                                                }
                                            ?>
                                            <td colspan="2" style="vertical-align: top;">
                                                <div class="form-group mb-0 justify-content-end">
                                                    <div class="checkbox">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1" name="lokasi[]" value="1" <?=$ck1;?> disabled>
                                                            <label for="checkbox-1" class="custom-control-label mt-1">Prohibited Area (Area Terlarang)</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 justify-content-end">
                                                    <div class="checkbox">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2" name="lokasi[]" value="2" <?=$ck2;?> disabled>
                                                            <label for="checkbox-2" class="custom-control-label mt-1">Restricted Area (Area Terbatas)</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 justify-content-end">
                                                    <div class="checkbox">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-3" name="lokasi[]" value="3" <?=$ck3;?> disabled>
                                                            <label for="checkbox-3" class="custom-control-label mt-1">Non Restricted Area (Area Tidak Terbatas)</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align: top;">Persyaratan  Operasional</td>
                                            <td style="vertical-align: top;">:</td>
                                            <?php
                                                $syarat = json_decode($data->syarat);
                                                $ck21 = "";$ck22 = "";$ck23 = "";$ck24 = "";$ck25 = "";
                                                if(is_array($syarat)){
                                                    if(in_array("1",$syarat)){$ck21 = "Checked";}
                                                    if(in_array("2",$syarat)){$ck22 = "Checked";}
                                                    if(in_array("3",$syarat)){$ck23 = "Checked";}
                                                    if(in_array("4",$syarat)){$ck24 = "Checked";}
                                                    if(in_array("5",$syarat)){$ck25 = "Checked";}
                                                }
                                            ?>
                                            <td style="vertical-align: top;" width="30%">
                                                <div class="form-group mb-0 justify-content-end">
                                                    <div class="checkbox">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-21" name="syarat[]" value="1" <?=$ck21;?> disabled>
                                                            <label for="checkbox-21" class="custom-control-label mt-1">General Safety Induction</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 justify-content-end">
                                                    <div class="checkbox">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-22" name="syarat[]" value="2" <?=$ck22;?> disabled>
                                                            <label for="checkbox-22" class="custom-control-label mt-1">Specific Safety Induction</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 justify-content-end">
                                                    <div class="checkbox">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-23" name="syarat[]" value="3" <?=$ck23;?> disabled>
                                                            <label for="checkbox-23" class="custom-control-label mt-1">Security Induction</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="vertical-align: top;" width="40%">
                                                <div class="form-group mb-0 justify-content-end">
                                                    <div class="checkbox">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-24" name="syarat[]" value="4" <?=$ck24;?> disabled>
                                                            <label for="checkbox-24" class="custom-control-label mt-1">H2S Sertifikat</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 justify-content-end">
                                                    <div class="checkbox">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-25" name="syarat[]" value="5" <?=$ck25;?> disabled>
                                                            <label for="checkbox-25" class="custom-control-label mt-1">Test Antigen/PCR/Swab</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">Persetujuan</td>
                                        </tr>
                                        <tr>
                                            <td><ul><li>PIC Safety</li></ul></td>
                                            <td>:</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td><ul><li>PIC Supervisor Departemen</li></ul></td>
                                            <td>:</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td><ul><li>PIC Security Supervisor</li></ul></td>
                                            <td>:</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">Melampirkan data :</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td colspan="2"></td>
                                        </tr>
                                    </table>
								</div>
							</div>
						</div>
                    </div>