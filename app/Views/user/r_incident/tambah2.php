<link href="<?=base_url('assets/main/');?>plugins/sweet-alert/sweetalert.css" rel="stylesheet">
<!---Internal Fileupload css-->
<link href="<?=base_url('assets/main/');?>plugins/fileuploads/css/fileupload.css" rel="stylesheet" type="text/css"/>
	
                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
                            <h4 class="content-title mb-0 my-auto">Security Report</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Incident Report/ Update Incident Report</span>
							</div>
						</div>
					</div>
                    <!-- <form action="#" method="post" id="formInput"> -->
                    <form action="<?=base_url('user/r_incident/tambah_save2');?>" method="post" id="formInput">
                    <input type="hidden" name="inc_id" value="<?=$data->id_incident;?>">
                    <div class="row row-sm">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Update Incident Report</h4>
									</div>
								</div>
								<div class="card-body pt-0">
                                <div id="wizard1">
										<h3>Incident Report</h3>
										<section>
                                        <div class="row">
                                            <div class="col-xl-6">
                                            <div class="control-group form-group">
												<label class="form-label">NAMA KEJADIAN</label>
												<input type="text" name="nm_inc" class="form-control required" placeholder="Nama Kejadian" value="<?=$data->nm_inc;?>">
											</div>
											<div class="control-group form-group">
												<label class="form-label">SITE/LOKASI</label>
												<input type="text" name="site" class="form-control required" placeholder="Site/Lokasi" value="<?=$data->site;?>">
											</div>
											<div class="control-group form-group">
												<label class="form-label">NAMA KLIEN & JABATAN</label>
												<input type="text" name="klien" class="form-control required" placeholder="Nama Klien & Jabatan" value="<?=$data->klien;?>">
											</div>
											<div class="control-group form-group">
												<label class="form-label">TANGGAL & WAKTU</label>
												<input type="datetime-local" name="tgl" class="form-control required" value="<?=date("Y-m-d\TH:i",strtotime($data->tgl_incident));?>">
											</div>
											<div class="control-group form-group mb-0">
												<label class="form-label">NAMA (GAPARA)</label>
												<input type="text" name="nama_gapara" class="form-control required" placeholder="Nama (Gapara)" value="<?=$data->nama_gapara;?>">
											</div>
											<div class="control-group form-group mb-0">
												<label class="form-label">Jabatan</label>
												<input type="text" name="jab_gapara" class="form-control required" placeholder="Jabatan" value="<?=$data->jabatan;?>">
											</div>
                                            </div>
                                            <div class="col-xl-6">
                                            <div class="control-group form-group">
												<label class="form-label">PERINGKAT EKSPOSURE</label>
												<input type="text" name="eksposure" class="form-control required" placeholder="Peringkat Eksposure" value="<?=$data->eksposure;?>">
											</div>
											<div class="control-group form-group">
												<label class="form-label">PERINGKAT KEAMANAN FASILITAS</label>
												<input type="text" name="keamanan" class="form-control required" placeholder="Peringkat Keamanan Fasilitas" value="<?=$data->keamanan;?>">
											</div>
											<div class="control-group form-group mb-0">
												<label class="form-label">ESKALASI ANCAMAN SEMENTARA</label>
												<input type="text" name="eskalasi" class="form-control required" placeholder="Eskalasi Ancaman Sementara" value="<?=$data->eskalasi;?>">
											</div>
                                            </div>
                                        </div>
										</section>
										<h3>Kategori Ancaman</h3>
										<section>
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
                                                        <div class="form-group mb-0 justify-content-end">
                                                            <div class="checkbox">
                                                                <div class="custom-checkbox custom-control">
                                                                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-<?=$row->id_mst_ancaman;?>" name="kt_ancaman[]" value="<?=$row->id_mst_ancaman;?>" <?=$chk;?>>
                                                                    <label for="checkbox-<?=$row->id_mst_ancaman;?>" class="custom-control-label mt-1"><?=$no.$urut." ".$row->nm_ancaman;?></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php   
                                                            generate_anak($array,$row->id_mst_ancaman,$lst,$no.$urut);
                                                        }
                                                    }
                                                }
                                                generate_anak($isi,0,$kt_ancaman);
                                            ?>
                                                </div>
                                            </div>
										</section>
										<h3>Identitas</h3>
										<section>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <h4>Identitas Pelaku (KTP)</h4>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Nama</label>
                                                        <input type="text" name="nama1" class="form-control required" placeholder="Nama" value="<?=$data->nama1;?>">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Alamat</label>
                                                        <input type="text" name="alm1" class="form-control required" placeholder="Alamat" value="<?=$data->alm1;?>">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Telephone</label>
                                                        <input type="text" name="tlp1" class="form-control required" placeholder="Telephone" value="<?=$data->tlp1;?>">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Tempat Lahir</label>
                                                        <input type="text" name="tmp1" class="form-control required" placeholder="Tempat Lahir" value="<?=$data->tmp1;?>">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Tanggal Lahir</label>
                                                        <input type="date" name="tgl1" class="form-control required" value="<?=$data->tgl1;?>">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Agama</label>
                                                        <input type="text" name="agama1" class="form-control required" placeholder="Agama" value="<?=$data->agama1;?>">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Menikah</label>
                                                        <select name="nikah1" class="form-control required">
                                                            <option <?php if($data->nikah1 == "Belum Menikah"){echo "Selected";}?>)>Belum Menikah</option>
                                                            <option <?php if($data->nikah1 == "Menikah"){echo "Selected";}?>>Menikah</option>
                                                        </select>
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Suami/Istri</label>
                                                        <input type="text" name="suami1" class="form-control required" placeholder="Suami/Istri" value="<?=$data->suami1;?>">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Anak</label>
                                                        <input type="text" name="anak1" class="form-control required" placeholder="Anak" value="<?=$data->anak1;?>">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <h4>Identitas Target/Korban (KTP)</h4>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Nama</label>
                                                        <input type="text" name="nama2" class="form-control required" placeholder="Nama" value="<?=$data->nama2;?>">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Alamat</label>
                                                        <input type="text" name="alm2" class="form-control required" placeholder="Alamat" value="<?=$data->alm2;?>">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Telephone</label>
                                                        <input type="text" name="tlp2" class="form-control required" placeholder="Telephone" value="<?=$data->tlp2;?>">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Tempat Lahir</label>
                                                        <input type="text" name="tmp2" class="form-control required" placeholder="Tempat Lahir" value="<?=$data->tmp2;?>">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Tanggal Lahir</label>
                                                        <input type="date" name="tgl2" class="form-control required" value="<?=$data->tgl2;?>">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Agama</label>
                                                        <input type="text" name="agama2" class="form-control required" placeholder="Agama" value="<?=$data->agama2;?>">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Menikah</label>
                                                        <select name="nikah2" class="form-control required">
                                                            <option <?php if($data->nikah2 == "Belum Menikah"){echo "Selected";}?>)>Belum Menikah</option>
                                                            <option <?php if($data->nikah2 == "Menikah"){echo "Selected";}?>>Menikah</option>
                                                        </select>
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Suami/Istri</label>
                                                        <input type="text" name="suami2" class="form-control required" placeholder="Suami/Istri" value="<?=$data->suami2;?>">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Anak</label>
                                                        <input type="text" name="anak2" class="form-control required" placeholder="Anak" value="<?=$data->anak2;?>">
                                                    </div>
                                                </div>
                                            </div>
										</section>
                                        <h3>Detail Kronologi</h3>
										<section>
											<div class="control-group form-group">
												<label class="form-label">1. Apa</label>
												<textarea name="apa" class="form-control required"><?=$data->apa;?></textarea>
											</div>
											<div class="control-group form-group">
												<label class="form-label">2. Dimana</label>
												<textarea name="dimana" class="form-control required"><?=$data->dimana;?></textarea>
											</div>
											<div class="control-group form-group">
												<label class="form-label">3. Dengan Apa</label>
												<textarea name="dengan" class="form-control required"><?=$data->dengan;?></textarea>
											</div>
											<div class="control-group form-group">
												<label class="form-label">4. Mengapa</label>
												<textarea name="mengapa" class="form-control required"><?=$data->mengapa;?></textarea>
											</div>
											<div class="control-group form-group">
												<label class="form-label">5. Bagaimana</label>
												<textarea name="bagaimana" class="form-control required"><?=$data->bagaimana;?></textarea>
											</div>
											<div class="control-group form-group">
												<label class="form-label">6. Bilamana</label>
												<textarea name="bilamana" class="form-control required"><?=$data->bilamana;?></textarea>
											</div>
										</section>
                                        <h3>Potensi Kerugian & Diamankan</h3>
										<section>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <h4>Potensi Kerugian</h4>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Aset (stok, barang, unit, dll)</label>
                                                        <input type="number" name="aset1" class="form-control required" value="<?=$data->aset1;?>">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Uang (rupiah)</label>
                                                        <input type="number" name="uang1" class="form-control required" value="<?=$data->uang1;?>">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Peralatan Kerja</label>
                                                        <input type="number" name="alat1" class="form-control required" value="<?=$data->alat1;?>">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Lainnya</label>
                                                        <input type="number" name="lainnya1" class="form-control required" value="<?=$data->lainnya1;?>">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <h4>Potensi Diamankan</h4>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Aset (stok, barang, unit, dll)</label>
                                                        <input type="number" name="aset2" class="form-control required" value="<?=$data->aset2;?>">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Uang (rupiah)</label>
                                                        <input type="number" name="uang2" class="form-control required" value="<?=$data->uang2;?>">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Peralatan Kerja</label>
                                                        <input type="number" name="alat2" class="form-control required" value="<?=$data->alat2;?>">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Lainnya</label>
                                                        <input type="number" name="lainnya2" class="form-control required" value="<?=$data->lainnya2;?>">
                                                    </div>
                                                </div>
                                            </div>
										</section>
                                        <h3>Tindakan oleh petugas keamanan</h3>
										<section>
                                            <div class="row">
                                                <?php $tindakan = json_decode($data->tindakan);;?>
                                                <div class="col-xl-2">
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Metode & Kontrol</label>
                                                        <input type="text" name="tindakan[0][metode]" class="form-control required" value="<?=$tindakan[0]->metode;?>">
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Tanggal & Waktu</label>
                                                        <input type="datetime-local" name="tindakan[0][tw]" class="form-control required" value="<?=$tindakan[0]->tw;?>">
                                                    </div>
                                                </div>
                                                <div class="col-xl-3">
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Bentuk Tindakan</label>
                                                        <input type="text" name="tindakan[0][tindakan]" class="form-control required" value="<?=$tindakan[0]->tindakan;?>">
                                                    </div>
                                                </div>
                                                <div class="col-xl-3">
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Disetujui Oleh</label>
                                                        <input type="text" name="tindakan[0][setuju]]" class="form-control required" value="<?=$tindakan[0]->setuju;?>">
                                                    </div>
                                                </div>
                                            </div>
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
                                        <h3>Kesimpulan, Analisa dan Identifikasi</h3>
										<section>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Kejadian telah muncul</label>
                                                        <input type="text" name="kesimpulan[0]" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Kejadian merupakan kemungkinan</label>
                                                        <input type="text" name="kesimpulan[1]" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Kerugian</label>
                                                        <input type="text" name="kesimpulan[2]" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Sumber resiko : External / Internal</label>
                                                        <input type="text" name="kesimpulan[3]" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Penerima resiko</label>
                                                        <input type="text" name="kesimpulan[4]" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Hirarki resiko : strategik, program, proyek, operasional</label>
                                                        <input type="text" name="kesimpulan[5]" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Penilaian kualitatif : Positif & negative</label>
                                                        <input type="text" name="kesimpulan[6]" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Penilian kuantitatif : Positif dan negatif</label>
                                                        <input type="text" name="kesimpulan[7]" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Strenghts/ kekuatan</label>
                                                        <input type="text" name="kesimpulan[8]" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Weakness/ kelemahan</label>
                                                        <input type="text" name="kesimpulan[9]" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Opportunity/ peluang</label>
                                                        <input type="text" name="kesimpulan[10]" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Threats/ ancaman</label>
                                                        <input type="text" name="kesimpulan[11]" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Elemen resiko</label>
                                                        <input type="text" name="kesimpulan[12]" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Konsekuensi dari resiko</label>
                                                        <input type="text" name="kesimpulan[13]" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Tingkat kemungkinan resiko</label>
                                                        <input type="text" name="kesimpulan[14]" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Kemungkinan resiko retrospektif</label>
                                                        <input type="text" name="kesimpulan[15]" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Kemungkinan resiko prospekif</label>
                                                        <input type="text" name="kesimpulan[16]" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Tingkat dampak resiko</label>
                                                        <input type="text" name="kesimpulan[17]" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Tingkat/Status analisis resiko : sangat jarang / kemungkinan kecil / mungkin / kemungkinan besar / hampir pasti</label>
                                                        <input type="text" name="kesimpulan[18]" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Analisa frekuensi status resiko</label>
                                                        <input type="text" name="kesimpulan[19]" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Tingkat analisa pengendalian resiko : sangat baik / cukup / belum cukup</label>
                                                        <input type="text" name="kesimpulan[20]" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Analisa frekuensi pengendalian resiko :</label>
                                                        <input type="text" name="kesimpulan[21]" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Toleransi resiko : dapat diterima / dipantau / perlu pengendalian menajemen / harus menjadi perhatian manajemen / belum dapat diterima</label>
                                                        <input type="text" name="kesimpulan[22]" class="form-control required">
                                                    </div>
                                                </div>
                                            </div>
										</section>
                                        <h3>Saran dan Rekomendasi</h3>
										<section>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Target respon dan tanggap pengendalian resiko : </label>
                                                        <input type="text" name="saran[0]" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Elemen Informasi & komuniikasi</label>
                                                        <input type="text" name="saran[1]" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Elemen Fasilitas</label>
                                                        <input type="text" name="saran[2]" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Elemen Safety</label>
                                                        <input type="text" name="saran[3]" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Elemen Security</label>
                                                        <input type="text" name="saran[4]" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Target kemungkinan</label>
                                                        <input type="text" name="saran[5]" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Target dampak resiko :</label>
                                                        <input type="text" name="saran[6]" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Target tingkat/status resiko :</label>
                                                        <input type="text" name="saran[7]" class="form-control required">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Target toleransi resiko :	</label>
                                                        <input type="text" name="saran[8]" class="form-control required">
                                                    </div>
                                                </div>
                                            </div>
										</section>
                                        <h3>Tindakan yang sudah Dilakukan oleh Klien di Site :</h3>
                                        <section>
                                            <div class="row">
                                                <div class="col-xl-2">
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Metode & Kontrol</label>
                                                        <input type="text" name="tindakan2[0][metode]" class="form-control required">
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Tanggal & Waktu</label>
                                                        <input type="datetime-local" name="tindakan2[0][tanggal]" class="form-control required">
                                                    </div>
                                                </div>
                                                <div class="col-xl-3">
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Bentuk Tindakan</label>
                                                        <input type="text" name="tindakan2[0][tindakan]" class="form-control required">
                                                    </div>
                                                </div>
                                                <div class="col-xl-3">
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Dilakukan Oleh</label>
                                                        <input type="text" name="tindakan2[0][dilakukan]" class="form-control required">
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <h3>KEPUTUSAN MANAGEMENT KLIEN </h3>
										<section>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Selesai</label>
                                                        <input type="text" name="keputusan[0]" class="form-control required" placeholder="Keterangan">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Tunda (target)</label>
                                                        <input type="text" name="keputusan[1]" class="form-control required" placeholder="Keterangan">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Proses (target)</label>
                                                        <input type="text" name="keputusan[2]" class="form-control required" placeholder="Keterangan">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Perbaikan (target)</label>
                                                        <input type="text" name="keputusan[3]" class="form-control required" placeholder="Keterangan">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Pengembangan (target)</label>
                                                        <input type="text" name="keputusan[4]" class="form-control required" placeholder="Keterangan">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Apresiasi</label>
                                                        <input type="text" name="keputusan[5]" class="form-control required" placeholder="Keterangan">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Saran & Rekomendasi</label>
                                                        <input type="text" name="keputusan[6]" class="form-control required" placeholder="Keterangan">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Disetujui oleh :</label>
                                                        <input type="text" name="keputusan[7]" class="form-control required" placeholder="Keterangan">
                                                    </div>
                                                </div>
                                            </div>
										</section>
								</div>
							</div>
						</div>
                    </div>
                    </form>

<script src="<?=base_url('assets/main/');?>plugins/jquery-steps/jquery.steps.min.js"></script>

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
</script>