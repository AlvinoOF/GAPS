                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Security Report</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Incident Report / Detail Incident Report</span>
							</div>
						</div>
					</div>
                    <div class="row row-sm">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Detail Incident Report</h4>
										<div class="d-flex my-xl-auto right-content">
                                        <?php
                                            $akses = $this->session->userdata('akses');
                                            if(!$data->is_r2 && $akses != "guard"){
                                        ?>
                                            <div class="mb-3 mb-xl-0" style="margin-right: 10px;">
												<a href="<?=base_url('user/r_incident/up/'.$data->id_incident);?>" class="btn btn-success"><i class="mdi mdi-up"></i> Make R2</a>
											</div>
                                        <?php } ?>
                                            <div class="mb-3 mb-xl-0" style="margin-right: 10px;">
												<a href="<?=base_url('user/r_incident/close/'.$data->id_incident);?>" class="btn btn-primary"><i class="mdi mdi-up"></i> Close Incident</a>
											</div>
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
                                    <h4 style="text-align:center">SECURITY INCIDENT REPORTING FORM</h4><br>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <table width="100%" border="1">
                                                <tr>
                                                    <th width="40%">SITE/LOKASI</th>
                                                    <td width="60%"><?=$data->site;?></td>
                                                </tr>
                                                <tr>
                                                    <th width="40%">NAMA KLIEN & JABATAN</th>
                                                    <td width="60%"><?=$data->klien;?></td>
                                                </tr>
                                                <?php if($data->is_r2){?>
                                                <tr>
                                                    <th width="40%">PERINGKAT EKSPOSURE</th>
                                                    <td width="60%"><?=$data->eksposure;?></td>
                                                </tr>
                                                <tr>
                                                    <th width="40%">PERINGKAT KEAMANAN FASILITAS</th>
                                                    <td width="60%"><?=$data->keamanan;?></td>
                                                </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                        <div class="col-xl-6">
                                            <table width="100%" border="1">
                                                <tr>
                                                    <th width="40%">TANGGAL & WAKTU</th>
                                                    <td width="60%"><?=$data->tgl_incident;?></td>
                                                </tr>
                                                <tr>
                                                    <th width="40%">NAMA (GAPARA)</th>
                                                    <td width="60%"><?=$data->nama_gapara;?></td>
                                                </tr>
                                                <?php if($data->is_r2){?>
                                                <tr>
                                                    <th width="40%">JABATAN</th>
                                                    <td width="60%"><?=$data->jabatan;?></td>
                                                </tr>
                                                <tr>
                                                    <th width="40%">ESKALASI ANCAMAN SEMENTARA</th>
                                                    <td width="60%"><?=$data->eskalasi;?></td>
                                                </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                    <br>
                                    <?php if($data->is_r2){ ?>
                                    <b>Kategory Ancaman</b>
                                    <div class="row">
                                        <div class="col-xl-3">
                                        <?php
                                            $kt_ancaman = json_decode($data->kt_ancaman);
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

                                            function generate_anak($array,$head,$lst,$no = null){
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
                                                        $chk = "";
                                                        if(is_array($lst)){
                                                            foreach($lst as $lst2){
                                                                if($lst2 == $row->id_mst_ancaman){
                                                                    $chk="checked";
                                                                }
                                                            }
                                                        }
                                                        $urut++;
                                                ?>
                                        <table width="100%">
                                            <tr>
                                                <td width="80%"><?=$no.$urut." ".$row->nm_ancaman;?></td>
                                                <th width="20%"><input type="checkbox" <?=$chk;?> disabled></th>
                                            </tr>
                                        </table>
                                                <?php   
                                                        generate_anak($array,$row->id_mst_ancaman,$lst,$no.$urut);
                                                    }
                                                }
                                            }
                                            generate_anak($isi,0,$kt_ancaman);
                                        ?>
                                        </div>
                                    </div>
                                    <br>
                                    <?php } ?>
                                    <b></b>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <table width="100%">
                                                <tr>
                                                    <th colspan="2">IDENTITAS PELAKU (KTP)</th>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Nama</th>
                                                    <td width="70%"><?=$data->nama1;?></td>
                                                </tr>
                                                <tr>
                                                    <th>Alamat</th>
                                                    <td><?=$data->alm1;?></td>
                                                </tr>
                                                <tr>
                                                    <th>Telepon</th>
                                                    <td><?=$data->tlp1;?></td>
                                                </tr>
                                                <tr>
                                                    <th>Tempat / Tgl. Lahir</th>
                                                    <td><?=$data->tmp1;?> / <?=$data->tgl1;?></td>
                                                </tr>
                                                <tr>
                                                    <th>Agama</th>
                                                    <td><?=$data->agama1;?></td>
                                                </tr>
                                                <tr>
                                                    <th>Menikah</th>
                                                    <td><?=$data->nikah1;?></td>
                                                </tr>
                                                <tr>
                                                    <th>Suami/Istri</th>
                                                    <td><?=$data->suami1;?></td>
                                                </tr>
                                                <tr>
                                                    <th>Anak</th>
                                                    <td><?=$data->anak1;?></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-xl-6">
                                            <table width="100%">
                                                <tr>
                                                    <th colspan="2">IDENTITAS TARGET/KORBAN (KTP)</th>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Nama</th>
                                                    <td width="70%"><?=$data->nama2;?></td>
                                                </tr>
                                                <tr>
                                                    <th>Alamat</th>
                                                    <td><?=$data->alm2;?></td>
                                                </tr>
                                                <tr>
                                                    <th>Telepon</th>
                                                    <td><?=$data->tlp2;?></td>
                                                </tr>
                                                <tr>
                                                    <th>Tempat / Tgl. Lahir</th>
                                                    <td><?=$data->tmp2;?> / <?=$data->tgl2;?></td>
                                                </tr>
                                                <tr>
                                                    <th>Agama</th>
                                                    <td><?=$data->agama2;?></td>
                                                </tr>
                                                <tr>
                                                    <th>Menikah</th>
                                                    <td><?=$data->nikah2;?></td>
                                                </tr>
                                                <tr>
                                                    <th>Suami/Istri</th>
                                                    <td><?=$data->suami2;?></td>
                                                </tr>
                                                <tr>
                                                    <th>Anak</th>
                                                    <td><?=$data->anak2;?></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <br>
                                    <b>Detail Kronologi</b>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="control-group form-group">
												<label class="form-label">1. Apa</label>
												<textarea name="apa" class="form-control required" readonly><?=$data->apa;?></textarea>
											</div>
											<div class="control-group form-group">
												<label class="form-label">2. Dimana</label>
												<textarea name="dimana" class="form-control required" readonly><?=$data->dimana;?></textarea>
											</div>
											<div class="control-group form-group">
												<label class="form-label">3. Dengan Apa</label>
												<textarea name="dengan" class="form-control required" readonly><?=$data->dengan;?></textarea>
											</div>
                                            <?php if(!$data->is_r2){?>
											<div class="control-group form-group">
												<label class="form-label">4. Informasi Lain</label>
												<textarea name="lain" class="form-control required" readonly><?=$data->lain;?></textarea>
											</div>
                                            <?php } ?>
                                            <?php if($data->is_r2){?>
                                            <div class="control-group form-group">
												<label class="form-label">4. Mengapa</label>
												<textarea name="lain" class="form-control required" readonly><?=$data->mengapa;?></textarea>
											</div>
                                            <div class="control-group form-group">
												<label class="form-label">5. Bagaimana</label>
												<textarea name="lain" class="form-control required" readonly><?=$data->bagaimana;?></textarea>
											</div>
                                            <div class="control-group form-group">
												<label class="form-label">6. Bilamana</label>
												<textarea name="lain" class="form-control required" readonly><?=$data->bilamana;?></textarea>
											</div>

                                            <?php } ?>
                                        </div>
                                    </div>
                                    <br>
                                    <b></b>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <table width="100%">
                                                <tr>
                                                    <th colspan="2">Potensi Kerugian</th>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Aset (stok,barang,unit,dll)</th>
                                                    <td width="70%"><?=$data->aset1;?></td>
                                                </tr>
                                                <tr>
                                                    <th>Uang (rupiah)</th>
                                                    <td><?=$data->uang1;?></td>
                                                </tr>
                                                <tr>
                                                    <th>Peralatan kerja</th>
                                                    <td><?=$data->alat1;?></td>
                                                </tr>
                                                <tr>
                                                    <th>Lainnya</th>
                                                    <td><?=$data->lainnya1;?></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-xl-6">
                                            <table width="100%">
                                                <tr>
                                                    <th colspan="2">Potensi Diamankan</th>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Aset (stok,barang,unit,dll)</th>
                                                    <td width="70%"><?=$data->aset2;?></td>
                                                </tr>
                                                <tr>
                                                    <th>Uang (rupiah)</th>
                                                    <td><?=$data->uang2;?></td>
                                                </tr>
                                                <tr>
                                                    <th>Peralatan kerja</th>
                                                    <td><?=$data->alat2;?></td>
                                                </tr>
                                                <tr>
                                                    <th>Lainnya</th>
                                                    <td><?=$data->lainnya2;?></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <br>
                                    <b>Tindakan Yang Sudah Dilakukan oleh Petugas Keamanan</b>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <table width="100%" border="1">
                                                <tr>
                                                    <th>Metode & Kontrol</td>
                                                    <th colspan="2">Tanggal & Waktu</td>
                                                    <th>Bentuk Tindakan</td>
                                                    <th>Disetujui Oleh</td>
                                                </tr>
                                                <?php
                                                    $tindakan = json_decode($data->tindakan);
                                                    if(is_array($tindakan)){
                                                        foreach($tindakan as $tnd){
                                                            $date = new DateTime($tnd->tw);
                                                            
                                                ?>
                                                <tr>
                                                    <td><?=$tnd->metode;?></td>
                                                    <td><?=$date->format('d-m-Y');?></td>
                                                    <td><?=$date->format('H:i');?></td>
                                                    <td><?=$tnd->tindakan;?></td>
                                                    <td><?=$tnd->setuju;?></td>
                                                </tr>
                                                <?php }} ?>
                                            </table>
                                        </div>
                                    </div>
                                    <br>
                                    <!-- Untuk Upload Dokumen -->
                                    <?php if($data->is_r2){ ?>
                                    <b>KESIMPULAN, ANALISA DAN IDENTIFIKASI</b>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <table width="100%" border="1">
                                            <?php $kesimpulan = json_decode($data->kesimpulan);?>
                                                <tr><td>> Kejadian telah muncul : <b><?=$kesimpulan[0];?></b></td></tr>
                                                <tr><td>> Kejadian merupakan kemungkinan : <b><?=$kesimpulan[1];?></b></td></tr>
                                                <tr><td>> Kerugian : <b><?=$kesimpulan[2];?></b></td></tr>
                                                <tr><td>> Sumber resiko : <b><?=$kesimpulan[3];?></b></td></tr>
                                                <tr><td>> Penerima resiko :	<b><?=$kesimpulan[4];?></b></td></tr>
                                                <tr><td>> Hirarki resiko : <b><?=$kesimpulan[5];?></b></td></tr>
                                                <tr><td>> Penilaian kualitatif : <b><?=$kesimpulan[6];?></b></td></tr>
                                                <tr><td>> Penilian kuantitatif : <b><?=$kesimpulan[7];?></b></td></tr>
                                                <tr><td>> Strenghts/ kekuatan :	<b><?=$kesimpulan[8];?></b></td></tr>
                                                <tr><td>> Weakness/ kelemahan : <b><?=$kesimpulan[9];?></b></td></tr>
                                                <tr><td>> Opportunity/ peluang : <b><?=$kesimpulan[10];?></b></td></tr>
                                                <tr><td>> Threats/ ancaman : <b><?=$kesimpulan[11];?></b></td></tr>
                                                <tr><td>> Elemen resiko : <b><?=$kesimpulan[12];?></b></td></tr>
                                                <tr><td>> Konsekuensi dari resiko : <b><?=$kesimpulan[13];?></b></td></tr>
                                                <tr><td>> Tingkat kemungkinan resiko : <b><?=$kesimpulan[14];?></b></td></tr>
                                                <tr><td>> Kemungkinan resiko retrospektif : <b><?=$kesimpulan[15];?></b></td></tr>
                                                <tr><td>> Kemungkinan resiko prospekif : <b><?=$kesimpulan[16];?></b></td></tr>
                                                <tr><td>> Tingkat dampak resiko : <b><?=$kesimpulan[17];?></b></td></tr>
                                                <tr><td>> Tingkat/Status analisis resiko : <b><?=$kesimpulan[18];?></b></td></tr>
                                                <tr><td>> Analisa frekuensi status resiko :	<b><?=$kesimpulan[19];?></b></td></tr>
                                                <tr><td>> Tingkat analisa pengendalian resiko : <b><?=$kesimpulan[20];?></b></td></tr>
                                                <tr><td>> Analisa frekuensi pengendalian resiko : <b><?=$kesimpulan[21];?></b></td></tr>
                                                <tr><td>> Toleransi resiko : <b><?=$kesimpulan[22];?></b></td></tr>
                                            </table>
                                        </div>
                                    </div>
                                    <br>
                                    <b>SARAN DAN REKOMENDASI</b>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <table width="100%" border="1">
                                            <?php $saran = json_decode($data->saran);?>
                                                <tr><td>> Target respon dan tanggap pengendalian resiko : <b><?=$saran[0];?></b></td></tr>
                                                <tr><td>> Elemen Informasi & komuniikasi : <b><?=$saran[1];?></b></td></tr>
                                                <tr><td>> Elemen Fasilitas : <b><?=$saran[2];?></b></td></tr>
                                                <tr><td>> Elemen Safety : <b><?=$saran[3];?></b></td></tr>
                                                <tr><td>> Elemen Security :	<b><?=$saran[4];?></b></td></tr>
                                                <tr><td>> Target kemungkinan : <b><?=$saran[5];?></b></td></tr>
                                                <tr><td>> Target dampak resiko : <b><?=$saran[6];?></b></td></tr>
                                                <tr><td>> Target tingkat/status resiko : <b><?=$saran[7];?></b></td></tr>
                                                <tr><td>> Target toleransi resiko :	<b><?=$saran[8];?></b></td></tr>
                                            </table>
                                        </div>
                                    </div>
                                    <br>
                                    <b>TINDAKAN YANG SUDAH DILAKUKAN OLEH KLIEN DI SITE :</b>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <table width="100%" border="1">
                                                <tr>
                                                    <th>Metode & Kontrol</td>
                                                    <th colspan="2">Tanggal & Waktu</td>
                                                    <th>Bentuk Tindakan</td>
                                                    <th>Dilakukan Oleh</td>
                                                </tr>
                                                <?php
                                                    $tindakan2 = json_decode($data->tindakan2);
                                                    if(is_array($tindakan2)){
                                                        foreach($tindakan2 as $tnd){
                                                            $date = new DateTime($tnd->tanggal);
                                                            
                                                ?>
                                                <tr>
                                                    <td><?=$tnd->metode;?></td>
                                                    <td><?=$date->format('d-m-Y');?></td>
                                                    <td><?=$date->format('H:i');?></td>
                                                    <td><?=$tnd->tindakan;?></td>
                                                    <td><?=$tnd->dilakukan;?></td>
                                                </tr>
                                                <?php }} ?>
                                            </table>
                                        </div>
                                    </div>
                                    <br>
                                    <b>KEPUTUSAN MANAGEMENT KLIEN</b>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <table width="100%" border="1">
                                                <tr>
                                                    <th>STATUS</th>
                                                    <th>KETERANGAN</th>
                                                </tr>
                                            <?php $keputusan = json_decode($data->keputusan);?>
                                                <tr><td>Selesai</td><td><b><?=$keputusan[0];?></b></td></tr>
                                                <tr><td>Tunda (target)</td><td><b><?=$keputusan[1];?></b></td></tr>
                                                <tr><td>Proses (target)</td><td><b><?=$keputusan[2];?></b></td></tr>
                                                <tr><td>Perbaikan (target)</td><td><b><?=$keputusan[3];?></b></td></tr>
                                                <tr><td>Pengembangan (target)</td><td><b><?=$keputusan[4];?></b></td></tr>
                                                <tr><td>Apresiasi</td><td><b><?=$keputusan[5];?></b></td></tr>
                                                <tr><td>Saran & Rekomendasi</td><td><b><?=$keputusan[6];?></b></td></tr>
                                                <tr><td>Disetujui oleh :</td><td><b><?=$keputusan[7];?></b></td></tr>
                                            </table>
                                        </div>
                                    </div>
                                    <br>
                                    <?php } ?>
								</div>
							</div>
						</div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Lampiran</h4>
									</div>
								</div>
								<div class="card-body">
                                    <div class="row">
                                        <?php if($data->dok != null && $data->dok != ""){?>
                                        <div class="col-sm-4">
                                            <div class=" border p-1 card thumb  mb-xl-0">
                                                <a href="#" class="image-popup" title="Screenshot-2" style="text-align: center;"> <img src="<?=base_url('user_data/report/incident/lampiran/'.$data->dok);?>" class="thumb-img" alt="work-thumbnail"> </a>
                                                <h4 class="text-center tx-14 mt-3 mb-0">Dokumen pendukung</h4>
                                                <div class="ga-border"></div>
                                            </div>
                                        </div>
                                        <?php } if($data->gam1 != null && $data->gam1 != ""){ ?>
                                        <div class="col-sm-4">
                                            <div class=" border p-1 card thumb  mb-xl-0">
                                                <a href="#" class="image-popup" title="Screenshot-2" style="text-align: center;"> <img src="<?=base_url('user_data/report/incident/lampiran/'.$data->gam1);?>" class="thumb-img" alt="work-thumbnail"> </a>
                                                <h4 class="text-center tx-14 mt-3 mb-0">Gambar Pelaku</h4>
                                                <div class="ga-border"></div>
                                            </div>
                                        </div>
                                        <?php } if($data->gam2 != null && $data->gam2 != ""){ ?>
                                        <div class="col-sm-4">
                                            <div class=" border p-1 card thumb  mb-xl-0">
                                                <a href="#" class="image-popup" title="Screenshot-2" style="text-align: center;"> <img src="<?=base_url('user_data/report/incident/lampiran/'.$data->gam2);?>" class="thumb-img" alt="work-thumbnail"> </a>
                                                <h4 class="text-center tx-14 mt-3 mb-0">Gambar Target/Korban</h4>
                                                <div class="ga-border"></div>
                                            </div>
                                        </div>
                                        <?php } if($data->bukti1 != null && $data->bukti1 != ""){ ?>
                                        <div class="col-sm-4">
                                            <div class=" border p-1 card thumb  mb-xl-0">
                                                <a href="#" class="image-popup" title="Screenshot-2" style="text-align: center;"> <img src="<?=base_url('user_data/report/incident/lampiran/'.$data->bukti1);?>" class="thumb-img" alt="work-thumbnail"> </a>
                                                <h4 class="text-center tx-14 mt-3 mb-0">Bukti Tindakan</h4>
                                                <div class="ga-border"></div>
                                            </div>
                                        </div>
                                        <?php } if($data->bukti2 != null && $data->bukti2 != ""){ ?>
                                        <div class="col-sm-4">
                                            <div class=" border p-1 card thumb  mb-xl-0">
                                                <a href="#" class="image-popup" title="Screenshot-2" style="text-align: center;"> <img src="<?=base_url('user_data/report/incident/lampiran/'.$data->bukti2);?>" class="thumb-img" alt="work-thumbnail"> </a>
                                                <h4 class="text-center tx-14 mt-3 mb-0">Bukti Tindakan</h4>
                                                <div class="ga-border"></div>
                                            </div>
                                        </div>
                                        <?php } if($data->bukti3 != null && $data->bukti3 != ""){ ?>
                                        <div class="col-sm-4">
                                            <div class=" border p-1 card thumb  mb-xl-0">
                                                <a href="#" class="image-popup" title="Screenshot-2" style="text-align: center;"> <img src="<?=base_url('user_data/report/incident/lampiran/'.$data->bukti3);?>" class="thumb-img" alt="work-thumbnail"> </a>
                                                <h4 class="text-center tx-14 mt-3 mb-0">Bukti Tindakan Klien</h4>
                                                <div class="ga-border"></div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
								</div>
							</div>
						</div>
                    </div>