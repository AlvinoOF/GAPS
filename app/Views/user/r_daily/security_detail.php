<div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Security Report</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Daily Report / Daily Security Report / Detail Daily Security Report</span>
							</div>
						</div>
					</div>
                    <div class="row row-sm">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Detail Daily Security Report</h4>
										<div class="d-flex my-xl-auto right-content">
                                            <div class="mb-3 mb-xl-0" style="margin-right: 10px;">
												<a href="#" class="btn btn-warning"><i class="mdi mdi-plus"></i> Edit</a>
											</div>
                                            <div class="mb-3 mb-xl-0" style="margin-right: 10px;">
												<a href="<?=base_url('user/r_daily/security_delete/'.$data->id_daily_security);?>" class="btn btn-danger"><i class="mdi mdi-delete"></i> Delete</a>
											</div>
                                        </div>
									</div>
								</div>
								<div class="card-body">
                                    <h4 style="text-align:center">FORMULIR LAPORAN HARIAN & MINGGUAN SECURITY (DRAFT)</h4><br>
                                    <div class="row">
                                        <div class="col-xl-8">
                                            <b>PERISTIWA PENTING KEGIATAN PENGAMANAN : </b><br>
                                            <ol>
                                            <?php 
                                            $peristiwa = json_decode($data->peristiwa);
                                            if(is_array($peristiwa)){
                                                foreach($peristiwa as $row){
                                                    $date = new DateTime($row->tanggal);
                                            ?>
                                                
                                                
                                                <li><?=$date->format('l, d-m-Y H:i');?>, <?=$row->peristiwa;?></li>
                                            <?php }} ?>
                                            </ol>
                                        </div>
                                        <div class="col-xl-4">
                                            <table width="100%" border="1">
                                                <tr>
                                                    <td width="40%">SITE/LOKASI</td>
                                                    <td width="60%"><?=$data->site;?></td>
                                                </tr>
                                                <tr>
                                                    <td>TANGGAL & WAKTU</td>
                                                    <?php $tw = new DateTime($data->tgl);?>
                                                    <td><?=$tw->format('d-m-Y H:i');?></td>
                                                </tr>
                                                <tr>
                                                    <td>SHIFT</td>
                                                    <td><?=$data->shift;?></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-xl-8">
                                            <b>RINGKASAN UMUM KEGIATAN PENGAMANAN :</b><br>
                                            <p><?=$data->ringkasan;?></p>
                                        </div>
                                        <div class="col-xl-4">
                                            <table width="100%" border="1">
                                                <tr>
                                                    <td width="40%">LOGISTIK & ADMIN</td>
                                                    <td width="60%"><?=$data->logistik;?></td>
                                                </tr>
                                                <tr>
                                                    <td>INTEL & INVESTIGATOR</td>
                                                    <td><?=$data->intel;?></td>
                                                </tr>
                                                <tr>
                                                    <td>SUPERVISOR</td>
                                                    <td><?=$data->supervisor;?></td>
                                                </tr>
                                                <tr>
                                                    <td>SHIFT LEADER</td>
                                                    <td><?=$data->leader;?></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <br>
                                    <b>* Pengendalian Resiko Keamanan</b><br>
                                    <?php
                                        $rinc = $inc->result();
                                        $aset1=0;$uang1=0;$alat1=0;$lain1=0;
                                        $aset2=0;$uang2=0;$alat2=0;$lain2=0;
                                        foreach($rinc as $rw){
                                            $aset1 += $rw->aset1;
                                            $uang1 += $rw->uang1;
                                            $alat1 += $rw->alat1;
                                            $lain1 += $rw->lainnya1;
                                            $aset2 += $rw->aset2;
                                            $uang2 += $rw->uang2;
                                            $alat2 += $rw->alat2;
                                            $lain2 += $rw->lainnya2;

                                        }

                                        $pra = json_decode($data->pra);
                                        $pkk = json_decode($data->pkk);
                                        $jpra = 0;
                                        $jpkk = 0;
                                        $jinc = 0;
                                        if(is_array($pra)){$jpra=count(array_keys($pra,"Ada"));}
                                        if(is_array($pkk)){$jpkk=count(array_keys($pkk,"Perbaikan"));}
                                        if(is_array($rinc)){$jinc=count($rinc);}
                                    ?>
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <table width="100%" border="1">
                                                <tr>
                                                    <th colspan="2">Potensi Kerugian</th>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Aset (stok,barang,unit,dll)</th>
                                                    <td width="70%"><?=$aset1;?></td>
                                                </tr>
                                                <tr>
                                                    <th>Uang (rupiah)</th>
                                                    <td><?=$uang1;?></td>
                                                </tr>
                                                <tr>
                                                    <th>Peralatan kerja</th>
                                                    <td><?=$alat1;?></td>
                                                </tr>
                                                <tr>
                                                    <th>Lainnya</th>
                                                    <td><?=$lain1;?></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-xl-4">
                                            <table width="100%" border="1">
                                                <tr>
                                                    <th colspan="2">Potensi Diamankan</th>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Aset (stok,barang,unit,dll)</th>
                                                    <td width="70%"><?=$aset2;?></td>
                                                </tr>
                                                <tr>
                                                    <th>Uang (rupiah)</th>
                                                    <td><?=$uang2;?></td>
                                                </tr>
                                                <tr>
                                                    <th>Peralatan kerja</th>
                                                    <td><?=$alat2;?></td>
                                                </tr>
                                                <tr>
                                                    <th>Lainnya</th>
                                                    <td><?=$lain2;?></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-xl-4">
                                            <table width="100%" border="1">
                                                <tr>
                                                    <td width="60%">TOTAL INSIDEN KEAMANAN</td>
                                                    <td width="40%"><?=$jinc;?></td>
                                                </tr>
                                                <tr>
                                                    <td>TOTAL KECELAKAAN KEAMANAN</td>
                                                    <td><?=$data->tk_keamanan;?></td>
                                                </tr>
                                                <tr>
                                                    <td>TOTAL KECELAKAAN KARYAWAN</td>
                                                    <td><?=$data->tk_karyawan;?></td>
                                                </tr>
                                                <tr>
                                                    <td>TOTAL POTENSI RESIKO ANCAMAN</td>
                                                    <td><?=$jpra;?></td>
                                                </tr>
                                                <tr>
                                                    <td>TOTAL POTENSI RESIKO RAWAN</td>
                                                    <td><?=$jpkk;?></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-xl-8">
                                            <b>* Temuan Aktifitas Keamanan</b><br>
                                            <table width="100%" border="1">
                                                <tr>
                                                    <th>TANGGAL & WAKTU</th>
                                                    <th>PETUGAS  PATROLI</th>
                                                    <th>AREA & OBYEK</th>
                                                    <th>TEMUAN</th>
                                                    <th>LAPORAN AWAL</th>
                                                    <th>STATUS</th>
                                                </tr>
                                                <?php 
                                                $temuan = json_decode($data->temuan);
                                                if(is_array($temuan)){
                                                    foreach($temuan as $row){
                                                        $date = new DateTime($row->tanggal);
                                                        ?>
                                                <tr>
                                                    <td><?=$date->format('d-m-Y H:i');?></td>
                                                    <td><?=$row->petugas;?></td>
                                                    <td><?=$row->area;?></td>
                                                    <td><?=$row->temuan;?></td>
                                                    <td><?=$row->laporan;?></td>
                                                    <td><?=$row->status;?></td>
                                                </tr>
                                                <?php }} ?>
                                            </table>
                                            <br>
                                            <table width="100%" border="1">
                                                <tr>
                                                    <th>BENTUK TINDAKAN & DOKUMENTASI</th>
                                                </tr>
                                                <?php 
                                                $tindakan = json_decode($data->tindakan);
                                                if(is_array($tindakan)){
                                                    foreach($tindakan as $row){
                                                ?>
                                                <tr>
                                                    <td><?=$row;?></td>
                                                </tr>
                                                <?php }} ?>
                                            </table>
                                        </div>
                                        <div class="col-xl-4">
                                            <b>*Disiplin Kinerja Keamanan</b><br>
                                            <?php
                                                $dk = json_decode($data->dk);
                                                if(is_array($dk)){
                                            ?>
                                            <table width="100%" border="1">
                                            
                                                <tr>
                                                    <td width="60%">JUMLAH & NAMA POS</td>
                                                    <td width="40%"><?=$dk[0];?></td>
                                                </tr>
                                                <tr>
                                                    <td>JUMLAH SOP & POS ORDER</td>
                                                    <td><?=$dk[1];?></td>
                                                </tr>
                                                <tr>
                                                    <td>MUTASI  & ALAT TULIS</td>
                                                    <td><?=$dk[2];?></td>
                                                </tr>
                                                <tr>
                                                    <td>JUMLAH & NO KENDARAAN</td>
                                                    <td><?=$dk[3];?></td>
                                                </tr>
                                                <tr>
                                                    <td>P3K POS UTAMA & MOBIL</td>
                                                    <td><?=$dk[4];?></td>
                                                </tr>
                                                <tr>
                                                    <td>JUMLAH HELM & ROPMI</td>
                                                    <td><?=$dk[5];?></td>
                                                </tr>
                                                <tr>
                                                    <td>JUMLAH GATUR & HT</td>
                                                    <td><?=$dk[6];?></td>
                                                </tr>
                                                <tr>
                                                    <td>JUMLAH SENTER</td>
                                                    <td><?=$dk[7];?></td>
                                                </tr>
                                                <tr>
                                                    <td>JUMLAH JAS HUJAN</td>
                                                    <td><?=$dk[8];?></td>
                                                </tr>
                                                <tr>
                                                    <td>JUMLAH TONGKAT/BORGOL</td>
                                                    <td><?=$dk[9];?></td>
                                                </tr>
                                                <tr>
                                                    <td>JUMLAH SAFETY MIRROR</td>
                                                    <td><?=$dk[10];?></td>
                                                </tr>
                                                <tr>
                                                    <td>ID BED - KTA - SIMPER</td>
                                                    <td><?=$dk[11];?></td>
                                                </tr>
                                                <tr>
                                                    <td>KELENGKAPAN SERAGAM</td>
                                                    <td><?=$dk[12];?></td>
                                                </tr>
                                                <tr>
                                                    <td>APAR MOBIL & POS</td>
                                                    <td><?=$dk[13];?></td>
                                                </tr>
                                                <tr>
                                                    <td>JUMLAH HP, PC & LAPTOP</td>
                                                    <td><?=$dk[14];?></td>
                                                </tr>
                                                <tr>
                                                    <td>JMLH TAMU MASUK & KELUAR</td>
                                                    <td><?=$dk[15];?></td>
                                                </tr>
                                                <tr>
                                                    <td>JMLH BARANG MASUK&KELUAR</td>
                                                    <td><?=$dk[16];?></td>
                                                </tr>
                                                <tr>
                                                    <td>TOTAL KARYAWAN</td>
                                                    <td><?=$dk[17];?></td>
                                                </tr>
                                                <tr>
                                                    <td>TOTAL KONTRAKTOR</td>
                                                    <td><?=$dk[18];?></td>
                                                </tr>
                                            </table>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <b>*Potensi Resiko Ancaman</b><br>
                                            <table width="100%" border="1">
                                            
                                                <tr>
                                                    <th width="60%">SITUASI & KONDISI</th>
                                                    <th width="40%">ADA / TIDAK</th>
                                                </tr>
                                            <?php
                                                $pra = json_decode($data->pra);
                                                if(is_array($pra)){
                                            ?>
                                                <tr>
                                                    <td>Upaya Penyusupan</td>
                                                    <td><?=$pra[0];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Masuk tanpa izin</td>
                                                    <td><?=$pra[1];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Penipuan aset</td>
                                                    <td><?=$pra[2];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Manipulasi Informasi</td>
                                                    <td><?=$pra[3];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Penggelapan</td>
                                                    <td><?=$pra[4];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Kerjasama dg Kejahatan</td>
                                                    <td><?=$pra[5];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Pencurian oleh Karyawan</td>
                                                    <td><?=$pra[6];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Pencurian oleh pihak luar</td>
                                                    <td><?=$pra[7];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Penyerangan/dg senjata</td>
                                                    <td><?=$pra[8];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Pemerasan</td>
                                                    <td><?=$pra[9];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Penculikan</td>
                                                    <td><?=$pra[10];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Pengancaman/dg senjata</td>
                                                    <td><?=$pra[11];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Pembunuhan</td>
                                                    <td><?=$pra[12];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Perampokan</td>
                                                    <td><?=$pra[13];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Pembajakan bersenjata</td>
                                                    <td><?=$pra[14];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Blokade kerja/jalan</td>
                                                    <td><?=$pra[15];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Perusakan aset</td>
                                                    <td><?=$pra[16];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Sabotase</td>
                                                    <td><?=$pra[17];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Pembakaran aset</td>
                                                    <td><?=$pra[18];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Unjuk rasa</td>
                                                    <td><?=$pra[19];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Penambang liar</td>
                                                    <td><?=$pra[20];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Aktifis Sosial</td>
                                                    <td><?=$pra[21];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Pelecehan seksual</td>
                                                    <td><?=$pra[22];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Infrastruktur</td>
                                                    <td><?=$pra[23];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Anti Warga Asing</td>
                                                    <td><?=$pra[24];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Sengketa</td>
                                                    <td><?=$pra[25];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Teroris</td>
                                                    <td><?=$pra[26];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Bencana Alam</td>
                                                    <td><?=$pra[27];?></td>
                                                </tr>
                                            <?php } ?>
                                            </table>
                                        </div>
                                        <div class="col-xl-4">
                                            <b>**Potensi Kemungkinan / Kerawanan</b><br>
                                            <table width="100%" border="1">
                                            
                                                <tr>
                                                    <th width="60%">SITUASI & KONDISI</th>
                                                    <th width="40%">NORMAL / PERBAIKAN</th>
                                                </tr>
                                            <?php
                                                $pkk = json_decode($data->pkk);
                                                if(is_array($pkk)){
                                            ?>
                                                <tr>
                                                    <td>Gerbang/gate utama</td>
                                                    <td><?=$pkk[0];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Gerbang/ gate pendukung</td>
                                                    <td><?=$pkk[1];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Pagar / tembok perimeter</td>
                                                    <td><?=$pkk[2];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Lampu perimeter</td>
                                                    <td><?=$pkk[3];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Lampu pos</td>
                                                    <td><?=$pkk[4];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Panel listrik</td>
                                                    <td><?=$pkk[5];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Genset</td>
                                                    <td><?=$pkk[6];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Bangunan Kantor Karyawan</td>
                                                    <td><?=$pkk[7];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Bangunan Dormitory</td>
                                                    <td><?=$pkk[8];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Kabel listrik / Kabel telepon</td>
                                                    <td><?=$pkk[9];?></td>
                                                </tr>
                                                <tr>
                                                    <td>CCTV (tiang dan instalasi)</td>
                                                    <td><?=$pkk[10];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Kunci dan gembok</td>
                                                    <td><?=$pkk[11];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Barier pagar/tembok/gate</td>
                                                    <td><?=$pkk[12];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Gudang utama</td>
                                                    <td><?=$pkk[13];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Gudang bahan peledak</td>
                                                    <td><?=$pkk[14];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Gudang Bahan Bakar</td>
                                                    <td><?=$pkk[15];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Instalasi/area terbatas</td>
                                                    <td><?=$pkk[16];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Kondisi akses jalan</td>
                                                    <td><?=$pkk[17];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Rambu keselamatan</td>
                                                    <td><?=$pkk[18];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Rambu keamanan</td>
                                                    <td><?=$pkk[19];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Kelengkapan kendaraan</td>
                                                    <td><?=$pkk[20];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Alat Pelindung Diri</td>
                                                    <td><?=$pkk[21];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Barang terlarang</td>
                                                    <td><?=$pkk[22];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Cuaca / Suhu</td>
                                                    <td><?=$pkk[23];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Tanah / lahan / alam</td>
                                                    <td><?=$pkk[24];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Akses menuju site</td>
                                                    <td><?=$pkk[25];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Komunikasi / signal</td>
                                                    <td><?=$pkk[26];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Lingkungan</td>
                                                    <td><?=$pkk[27];?></td>
                                                </tr>
                                            <?php } ?>
                                            </table>
                                        </div>
                                        <div class="col-xl-4">
                                            <br>
                                            <table width="100%" border="1">
                                                <tr><th>PERBAIKAN KEAMANAN</th></tr>
                                                <tr><td><?=$data->perbaikan;?></td></tr>
                                                <tr><td></td></tr>
                                                <tr><th>PENGEMBANGAN KEAMANAN</th></tr>
                                                <tr><td><?=$data->pengembangan;?></td></tr>
                                                <tr><td></td></tr>
                                                <tr><th>KOMUNIKASI/KONTROL</th></tr>
                                                <tr><td><?=$data->komunikasi;?></td></tr>
                                                <tr><td></td></tr>
                                                <tr><th>INFORMASI LAIN</th></tr>
                                                <tr><td><?=$data->infolain;?></td></tr>
                                                <tr><td></td></tr>
                                                <tr><th>SARAN TINDAK LANJUT YANG DIPERLUKAN OLEH KANTOR PUSAT PT.GAPARA</th></tr>
                                                <tr><td><?=$data->saran_tl;?></td></tr>
                                                <tr><td></td></tr>
                                                <tr><th>SARAN REKOMENDASI UNTUK PENGGUNA JASA DI SITE</th></tr>
                                                <tr><td><?=$data->saran_rek;?></td></tr>
                                                <tr><td></td></tr>
                                                <tr><th>KESIMPULAN</th></tr>
                                                <tr><td><?=$data->kesimpulan;?></td></tr>
                                                <tr><td></td></tr>
                                            </table>
                                            <br>
                                            <table width="100%">
                                                <tr>
                                                    <td width="50%"></td>
                                                    <td width="50%">Site, <?=$tw->format('d-m-Y');?></td>
                                                </tr>
                                                <tr>
                                                    <td>Dilaporkan oleh,<br><br><br><br>Admin Support</td>
                                                    <td>Ditinjau oleh,<br><br><br><br>Project Manager</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <br>
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
                                    <?php 
                                        $lampiran = json_decode($data->lampiran);
                                        if(is_array($lampiran)){
                                            foreach($lampiran as $row){
                                                ?>
                                            <div class="col-sm-4">
                                                <div class=" border p-1 card thumb  mb-xl-0">
                                                    <a href="#" class="image-popup" title="Screenshot-2" style="text-align: center;"> <img src="<?=base_url('user_data/report/daily/lampiran/'.$row->foto);?>" class="thumb-img" alt="work-thumbnail"> </a>
                                                    <h4 class="text-center tx-14 mt-3 mb-0"><?=$row->nama;?></h4>
                                                    <div class="ga-border"></div>
                                                </div>
                                            </div>                                            
                                        
                                    <?php }} ?>
                                    </div>
								</div>
							</div>
						</div>
                    </div>