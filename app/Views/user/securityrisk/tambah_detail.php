                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Security Risk / Detail Security Risk</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Tambah</span>
							</div>
						</div>
					</div>
                    <div class="row row-sm">
                        <div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
							<div class="card  box-shadow-0 ">
								<div class="card-header">
									<h4 class="card-title mb-1">Tambah Detail Security Risk</h4>
								</div>
								<div class="card-body pt-0">
									<form >
										<div class="">
                                            <div class="form-group">
                                                <label>Nama Aktifitas</label>
                                                <?php
                                                    $aktv = "";
                                                    if($id == "1"){
                                                        $aktv = "Pemeriksaan Keluar Masuk Tamu";
                                                    }else{
                                                        $aktv = "Operasional produksi";
                                                    }
                                                ?>
												<input type="text" class="form-control" id="name" placeholder="Nama Aktifitas" value="<?=$aktv;?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Aset</label>
												<input type="text" class="form-control" id="aset" placeholder="Aset">
                                            </div>
                                            <div class="form-group">
                                                <label>Ancaman</label>
												<input type="text" class="form-control" id="ancaman" placeholder="Ancaman">
                                            </div>
                                            <div class="form-group">
                                                <label>Kontrol yang ada</label>
												<input type="text" class="form-control" id="kontrol" placeholder="Kontrol yang ada">
                                            </div>
                                            <div class="form-group">
                                                <label>Kelemahan atas kontrol yang ada</label>
												<input type="text" class="form-control" id="kelemahan" placeholder="Kelemahan atas kontrol yang ada">
                                            </div>
                                            <div class="form-group">
                                                <label>Kemungkinan (K)</label>
                                                <select class="form-control" id="kemungkinan">
                                                    <option>A - Hampir tidak mungkin terjadi</option>
                                                    <option>B - Kemungkinan kecil terjadi</option>
                                                    <option>C - Dapat terjadi, dapat tidak terjadi (50/50)</option>
                                                    <option>D - Kemungkinan besar terjadi</option>
                                                    <option>E - Hampir pasti terjadi</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Tingkat Dampak (D)</label>
												<select class="form-control" id="dampak">
                                                    <option>1 - Tidak mengganggu proses pekerjaan, tidak ada luka, kerugian finansial sangat kecil</option>
                                                    <option>2 - Tidak mengganggu proses pekerjaan, berpotensi menimbulkan luka ringan, kerugian finansial kecil</option>
                                                    <option>3 - Mengganggu proses pekerjaan, berpotensi menimbulkan luka sedang, kerugian finansial sedang</option>
                                                    <option>4 - Mengganggu proses produksi, berpotensi menimbulkan luka berat, kerugian finansial besar</option>
                                                    <option>5 - Dapat mengakibatkan terhentinya proses produksi, berpotensi menimbulkan korban jiwa, kerugian finansial sangat besar</option>
                                                </select>
                                            </div>
										</div>
										<button type="submit" class="btn btn-primary mt-3 mb-0">Simpan</button>
									</form>
								</div>
							</div>
						</div>
                    </div>