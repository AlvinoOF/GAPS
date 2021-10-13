<div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Security Report</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Daily Report / Daily HSE Observation Report / Detail Daily HSE Observation Report</span>
							</div>
						</div>
					</div>
                    <div class="row row-sm">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Detail Daily HSE Observation Report</h4>
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
                                    <h4 style="text-align:center">FORMULIR LAPORAN HARIAN & MINGGUAN HSE Observation (DRAFT)</h4><br>
                                    <table width="100%" border="1">
                                        <tr>
                                            <th width="20%">SITE/LOKASI</th>
                                            <td width="25%"><?=$data->lokasi;?></td>
                                            <th width="10%" rowspan="5"></th>
                                            <th width="20%">First Aid Case (Kasus P3K)</th>
                                            <td width="25%"><?=$data->p3k;?></td>
                                        </tr>
                                        <tr>
                                            <th>TANGGAL & WAKTU</th>
                                            <td><?=$data->tgl;?></td>
                                            <th>Medical Treatment Injury Case  (Bantuan Medis)</th>
                                            <td><?=$data->medic;?></td>
                                        </tr>
                                        <tr>
                                            <th>SHIFT</th>
                                            <td><?=$data->shift;?></td>
                                            <th>Fatal Incidents (Korban Jiwa)</th>
                                            <td><?=$data->fatal;?></td>
                                        </tr>
                                        <tr>
                                            <th>OBSERVER/PENGAMAT</th>
                                            <td><?=$data->observer;?></td>
                                            <th>TOTAL CASE</th>
                                            <td><?=$data->total;?></td>
                                        </tr>
                                        <tr>
                                            <th>JABATAN/POSISI</th>
                                            <td><?=$data->jabatan;?></td>
                                            <th>JUMLAH TENAGA KERJA</th>
                                            <td><?=$data->jumtk;?></td>
                                        </tr>
                                    </table>
                                    <br>
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
                                                <?php 
                                                    $kondisi = json_decode($data->kondisi);
                                                ?>
                                                <tr>
                                                    <td><?=$kondisi[0]->tta;?></td>
                                                    <td style="text-align:center;">Berpotensi kecelakaan</td>
                                                    <td><?=$kondisi[0]->ta;?></td>
                                                </tr>
                                                <tr>
                                                    <td><?=$kondisi[1]->tta;?></td>
                                                    <td style="text-align:center;">Berpotensi kebakaran/meledak</td>
                                                    <td><?=$kondisi[1]->ta;?></td>
                                                </tr>
                                                <tr>
                                                    <td><?=$kondisi[2]->tta;?></td>
                                                    <td style="text-align:center;">Pencegahan kecelakaan</td>
                                                    <td><?=$kondisi[2]->ta;?></td>
                                                </tr>
                                                <tr>
                                                    <td><?=$kondisi[3]->tta;?></td>
                                                    <td style="text-align:center;">Pengawas berada dilokasi</td>
                                                    <td><?=$kondisi[3]->ta;?></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" style="text-align:center;">2. KESEHATAN KERJA</td>
                                                </tr>
                                                <tr>
                                                    <td><?=$kondisi[4]->tta;?></td>
                                                    <td style="text-align:center;">Kondisi sehat/siap untuk kerja</td>
                                                    <td><?=$kondisi[4]->ta;?></td>
                                                </tr>
                                                <tr>
                                                    <td><?=$kondisi[5]->tta;?></td>
                                                    <td style="text-align:center;">Masalah Psikologi</td>
                                                    <td><?=$kondisi[5]->ta;?></td>
                                                </tr>
                                                <tr>
                                                    <td><?=$kondisi[6]->tta;?></td>
                                                    <td style="text-align:center;">Ergonomi/posisi tubuh</td>
                                                    <td><?=$kondisi[6]->ta;?></td>
                                                </tr>
                                                <tr>
                                                    <td><?=$kondisi[7]->tta;?></td>
                                                    <td style="text-align:center;">Lingkungan Kerja</td>
                                                    <td><?=$kondisi[7]->ta;?></td>
                                                </tr>
                                                <tr>
                                                    <td><?=$kondisi[8]->tta;?></td>
                                                    <td style="text-align:center;">Kebersihan & kesehatan</td>
                                                    <td><?=$kondisi[8]->ta;?></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" style="text-align:center;">3. LINDUNGAN LINGKUNGAN</td>
                                                </tr>
                                                <tr>
                                                    <td><?=$kondisi[9]->tta;?></td>
                                                    <td style="text-align:center;">Kerapihan & kebersihan</td>
                                                    <td><?=$kondisi[9]->ta;?></td>
                                                </tr>
                                                <tr>
                                                    <td><?=$kondisi[10]->tta;?></td>
                                                    <td style="text-align:center;">Pemberian simbol2 standar</td>
                                                    <td><?=$kondisi[10]->ta;?></td>
                                                </tr>
                                                <tr>
                                                    <td><?=$kondisi[11]->tta;?></td>
                                                    <td style="text-align:center;">Berpotensi pencemaran</td>
                                                    <td><?=$kondisi[11]->ta;?></td>
                                                </tr>
                                                <tr>
                                                    <td><?=$kondisi[12]->tta;?></td>
                                                    <td style="text-align:center;">Boros enerji</td>
                                                    <td><?=$kondisi[12]->ta;?></td>
                                                </tr>
                                                <!-- <tr>
                                                    <td><?=$kondisi[13]->tta;?></td>
                                                    <td style="text-align:center;">Pencegahan pencemaran</td>
                                                    <td><?=$kondisi[13]->ta;?></td>
                                                </tr>
                                                <tr>
                                                    <td><?=$kondisi[14]->tta;?></td>
                                                    <td style="text-align:center;">Ketersediaan alat penyerap tumpahan</td>
                                                    <td><?=$kondisi[14]->ta;?></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" style="text-align:center;">4. PERALATAN</td>
                                                </tr>
                                                <tr>
                                                    <td><?=$kondisi[15]->tta;?></td>
                                                    <td style="text-align:center;"> Alat Pelindung Diri</td>
                                                    <td><?=$kondisi[15]->ta;?></td>
                                                </tr>
                                                <tr>
                                                    <td><?=$kondisi[16]->tta;?></td>
                                                    <td style="text-align:center;">Alat portabel</td>
                                                    <td><?=$kondisi[16]->ta;?></td>
                                                </tr>
                                                <tr>
                                                    <td><?=$kondisi[17]->tta;?></td>
                                                    <td style="text-align:center;">Alat Mekanis</td>
                                                    <td><?=$kondisi[17]->ta;?></td>
                                                </tr>
                                                <tr>
                                                    <td><?=$kondisi[18]->tta;?></td>
                                                    <td style="text-align:center;">Listrik</td>
                                                    <td><?=$kondisi[18]->ta;?></td>
                                                </tr>
                                                <tr>
                                                    <td><?=$kondisi[19]->tta;?></td>
                                                    <td style="text-align:center;">Kendaraan/alat berat</td>
                                                    <td><?=$kondisi[19]->ta;?></td>
                                                </tr> -->
                                            </table>
                                        </div>
                                        <div class="col-xl-6">
                                            <br>
                                            <?php 
                                                $ck1="";$ck2="";$ck3="";
                                                if($data->diamati1){$ck1="checked";}
                                                if($data->diamati2){$ck2="checked";}
                                                if($data->perbaikan){$ck3="checked";}
                                            ?>
                                            <div class="form-group mb-0 justify-content-end">
                                                <div class="checkbox">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1" name="diamati1" value="1" <?=$ck1;?> disabled>
                                                        <label for="checkbox-1" class="custom-control-label mt-1">KONDISI AMAN YANG DIAMATI</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Tindakan</label>
                                                <p style="min-height: 75px;"><?=$data->tindakan1;?></p>
                                            </div>
                                            <div class="form-group mb-0 justify-content-end">
                                                <div class="checkbox">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2" name="diamati2" value="1" <?=$ck2;?> disabled>
                                                        <label for="checkbox-2" class="custom-control-label mt-1">KONDISI TIDAK AMAN YANG DIAMATI</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Tindakan</label>
                                                <p style="min-height: 75px;"><?=$data->tindakan2;?></p>
                                            </div>
                                            <div class="form-group mb-0 justify-content-end">
                                                <div class="checkbox">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-3" name="perbaikan" value="1" <?=$ck3;?> disabled>
                                                        <label for="checkbox-3" class="custom-control-label mt-1">TINDAKAN YANG DILAKUKAN</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Tindakan</label>
                                                <p style="min-height: 75px;"><?=$data->tindakan3;?></p>
                                            </div>
                                            <br>Bukti Dokumentasi<br>
                                            <table width="100%" border="1">
                                                <tr>
                                                    <th width="50%" style="height:100px;text-align:center">Foto Sebelum</th>
                                                    <th width="50%" style="height:100px;text-align:center">Foto Sesudah</th>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <br>
								</div>
							</div>
						</div>
                    </div>