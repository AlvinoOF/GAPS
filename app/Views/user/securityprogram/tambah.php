<link href="<?=base_url('assets/main/');?>plugins/sweet-alert/sweetalert.css" rel="stylesheet">
<!---Internal Fileupload css-->
<link href="<?=base_url('assets/main/');?>plugins/fileuploads/css/fileupload.css" rel="stylesheet" type="text/css"/>
	
                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
                            <h4 class="content-title mb-0 my-auto">Security Plan</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Site Security Activity Plan / Tambah Site Security Activity Plan</span>
							</div>
						</div>
					</div>
                    <!-- <form action="#" method="post" id="formInput"> -->
                    <form action="<?=base_url('user/securityprogram/tambah_save');?>" method="post" id="formInput">
                    <div class="row row-sm">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Tambah Site Security Activity Plan</h4>
									</div>
								</div>
								<div class="card-body pt-0">
                                    <div class="control-group form-group">
                                        <label class="form-label">Sub Of</label>
                                        <select class="form-control required" name="master">
                                            <option value=0></option>
                                        <?php
                                            $isi = $data->result();
                                            function generate_anak($array,$head,$tab = null){
                                                $flt = array_filter($array,function($v) use ($head){
                                                    return($v->id_mst == $head);
                                                });
                                                if($tab != null){
                                                    
                                                }
                                                if(count($flt) > 0){
                                                    foreach($flt as $row){
                                                ?>
                                                    <option value="<?=$row->id_activiry_program;?>"><?=$row->no_act;?> - <?=$row->nama_act;?></option>
                                                <?php   
                                                        generate_anak($array,$row->id_activiry_program,0);
                                                    }
                                                }
                                            }
                                            generate_anak($isi,0);
                                        ?>
                                        </select>
                                    </div>
                                    <div class="control-group form-group">
                                        <label class="form-label">No. </label>
                                        <input type="text" name="no" class="form-control required" placeholder="No.">
                                    </div>
                                    <div class="control-group form-group">
                                        <label class="form-label">Operation Program</label>
                                        <input type="text" name="operation" class="form-control required" placeholder="Operation Program">
                                    </div>
                                    <div class="control-group form-group">
                                        <label class="form-label">Periodic</label>
                                        <select class="form-control required" name="periodic">
                                            <option></option>
                                            <option>as required</option>
                                            <option>Semi Annualy</option>
                                            <option>Daily</option>
                                            <option>Weekly</option>
                                            <option>Monthly</option>
                                            <option>Quarterly</option>
                                            <option>Yearly</option>
                                        </select>
                                    </div>
                                    <div class="control-group form-group mb-0">
                                        <label class="form-label">PIC</label>
                                        <input type="text" name="pic" class="form-control required" placeholder="PIC">
                                    </div>
                                    <div class="control-group form-group mb-0">
                                        <label class="form-label">Plan</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group mb-0 justify-content-end">
                                                <div class="checkbox">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1" name="plan[]" value="1">
                                                        <label for="checkbox-1" class="custom-control-label mt-1">Januari</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-0 justify-content-end">
                                                <div class="checkbox">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2" name="plan[]" value="2">
                                                        <label for="checkbox-2" class="custom-control-label mt-1">Februari</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-0 justify-content-end">
                                                <div class="checkbox">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-3" name="plan[]" value="3">
                                                        <label for="checkbox-3" class="custom-control-label mt-1">Maret</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-0 justify-content-end">
                                                <div class="checkbox">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-4" name="plan[]" value="4">
                                                        <label for="checkbox-4" class="custom-control-label mt-1">April</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-0 justify-content-end">
                                                <div class="checkbox">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-5" name="plan[]" value="5">
                                                        <label for="checkbox-5" class="custom-control-label mt-1">Mei</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-0 justify-content-end">
                                                <div class="checkbox">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-6" name="plan[]" value="6">
                                                        <label for="checkbox-6" class="custom-control-label mt-1">Juni</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="form-group mb-0 justify-content-end">
                                                <div class="checkbox">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-7" name="plan[]" value="7">
                                                        <label for="checkbox-7" class="custom-control-label mt-1">Juli</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-0 justify-content-end">
                                                <div class="checkbox">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-8" name="plan[]" value="8">
                                                        <label for="checkbox-8" class="custom-control-label mt-1">Agustus</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-0 justify-content-end">
                                                <div class="checkbox">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-9" name="plan[]" value="9">
                                                        <label for="checkbox-9" class="custom-control-label mt-1">September</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-0 justify-content-end">
                                                <div class="checkbox">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-10" name="plan[]" value="10">
                                                        <label for="checkbox-10" class="custom-control-label mt-1">Oktober</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-0 justify-content-end">
                                                <div class="checkbox">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-11" name="plan[]" value="11">
                                                        <label for="checkbox-11" class="custom-control-label mt-1">November</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-0 justify-content-end">
                                                <div class="checkbox">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-12" name="plan[]" value="12">
                                                        <label for="checkbox-12" class="custom-control-label mt-1">Desember</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
<script>
    // $('#wizard1').steps({
	// 	headerTag: 'h3',
	// 	bodyTag: 'section',
	// 	autoFocus: true,
	// 	titleTemplate: '<span class="number">#index#<\/span> <span class="title">#title#<\/span>',
    //     onFinished: function (event, currentIndex) {
    //         $("#formInput").submit();
    //     }
	// });
    // $( "#formInput" ).submit(function( event ) {
    //     event.preventDefault();

    //     var $form = $( this ),
    //         data = $( ":input" ).serializeArray(),
    //         url = "<?=base_url('user/r_daily/security_save');?>";

    //     var posting = $.post( url, data );
    //     posting.done(function( data ) {
    //         if(data == "Success"){
    //             swal({
    //                 title: 'Success!',
    //                 text: 'Security Report berhasil ditambah!',
    //                 type: 'success',
    //                 showConfirmButton: false,
    //                 timer: 2000
    //             },function () {
    //                 window.location.replace("<?=base_url('user/r_daily/security');?>");
    //             });
    //         }else{
    //             swal({
    //                 title: 'Error!',
    //                 text: 'Security Report gagal ditambah!',
    //                 type: 'error',
    //                 showConfirmButton: false,
    //                 timer: 3000
    //             });
    //         }
    //     });
    // });
</script>