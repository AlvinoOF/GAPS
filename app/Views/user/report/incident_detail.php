                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Report</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Incident Report / Detail Incident Report</span>
							</div>
						</div>
                    </div>
                    <?php $rw = $data->row();?>
                    <div class="row row-sm">
                        <div class="col-xl-8">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
                                        <h4 class="card-title mg-b-0">Detail Incident Report</h4>
                                        <div class="d-flex my-xl-auto right-content">
                                            <div class="mb-3 mb-xl-0">
                                                <a href="<?=base_url('user/report_incident/');?>" class="btn btn-secondary">
                                                    <i class="mdi mdi-arrow-left"></i> Back
                                                </a>
                                            </div>
                                        </div>
									</div>
								</div>
								<div class="card-body">
                                    <h4 class="font-weight-semibold tx-15">IR Number</h4>
                                    <p><?=$rw->incident_no;?></p>
                                </div>
                                <div class="card-body">
                                    <h4 class="font-weight-semibold tx-18">Pembuat Berita Acara</h4>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <h4 class="font-weight-semibold tx-15">Name / Nama</h4>
                                            <p><?=$rw->incident_no;?></p>
                                        </div>
                                        <div class="col-xl-6">
                                            <h4 class="font-weight-semibold tx-15">Job Title / Jabatan</h4>
                                            <p><?=$rw->incident_no;?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="font-weight-semibold tx-18">Berita Acara</h4>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <h4 class="font-weight-semibold tx-15">Subject / Judul</h4>
                                            <p><?=$rw->incident_title;?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <h4 class="font-weight-semibold tx-15">Location / Tempat</h4>
                                            <p><?=$rw->incident_location;?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <h4 class="font-weight-semibold tx-15">Date / Tanggal</h4>
                                            <p><?=$rw->incident_date;?></p>
                                        </div>
                                        <div class="col-xl-6">
                                            <h4 class="font-weight-semibold tx-15">Time / Waktu</h4>
                                            <p><?=$rw->incident_time;?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <h4 class="font-weight-semibold tx-15">Reported By / Pelapor</h4>
                                            <p><?=$rw->reported_by;?></p>
                                        </div>
                                        <div class="col-xl-6">
                                            <h4 class="font-weight-semibold tx-15">Date Reported / Tanggal Dilaporkan</h4>
                                            <p><?=$rw->reported_date;?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="font-weight-semibold tx-15">Uraian Berita Acara</h4>
                                    <p><?=$rw->incident_detail;?></p>
                                </div>
                                <div class="card-body">
                                    <h4 class="font-weight-semibold tx-15">Kesimpulan</h4>
                                    <p><?=$rw->kesimpulan;?></p>
                                </div>
                                <div class="card-body">
                                    <h4 class="font-weight-semibold tx-15">Rekomendasi / Saran</h4>
                                    <ul>
                                        <?php foreach($saran->result() as $rw) { ?>
                                            <li><?=$rw->rekomendasi;?></li>
                                        <?php } ?>
                                    </ul>
                                    </p>
                                </div>
                                <div class="card-body">
                                    <h4 class="font-weight-semibold tx-15">Dokumentasi</h4>
                                    <div class="table-responsive">
										<table id="example1" class="table key-buttons text-md-nowrap">
											<thead>
												<tr>
													<th class="border-bottom-0">No</th>
													<th class="border-bottom-0">Foto</th>
													<th class="border-bottom-0">Keterangan</th>
													<th class="border-bottom-0">Tanggal</th>
												</tr>
											</thead>
											<tbody>
												<?php
													$no = 0;
													foreach($doc->result() as $rw){
														$no++;
												?>
												<tr>
													<td><?=$no;?></td>
													<td><img src="<?=base_url('user_data/incident/doc/'.$rw->incident_foto);?>" style="max-height:100px"></td>
													<td><?=$rw->keterangan;?></td>
													<td><?=$rw->tanggal;?></td>
												</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
                                </div>
							</div>
						</div>
                        <div class="col-xl-4">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
                                        <h4 class="card-title mg-b-0">Detail Incident Report</h4>
									</div>
								</div>
								<div class="card-body">
									
								</div>
                            </div>
                            <div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Detail Incident Report</h4>
									</div>
								</div>
								<div class="card-body">
									
								</div>
							</div>
						</div>
                    </div>