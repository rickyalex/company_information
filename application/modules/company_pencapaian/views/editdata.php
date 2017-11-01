<!-- jQuery -->	
	<script src="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
	
	 <link href="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/vendors/bootstrap-table/dist/bootstrap-table.min.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/vendors/bootstrap-table/dist/bootstrap-table.min.js"></script>
	
	<link href="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/vendors/select2/dist/js/select2.full.min.js"></script>
	
	<link href="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/vendors/timepickermaster/jquery.ui.timepicker.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/vendors/timepickermaster/jquery.ui.timepicker.js"></script>
	
	<script src="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/vendors/moment/min/moment.min.js"></script>
	<link href="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/vendors/datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/vendors/datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<?php
	$id =  $this->uri->segment(3);
	$data = $this->Company_information_model->editdata_pencapaian($id);
		foreach($data as $u){
			$id = $u->id;
			$tanggal = $u->tanggal;
			$target = $u->target;
			$revenue = $u->revenue;
			$cost = $u->cost;
                        $margin = $u->margin;
                        $cost_margin = $u->cost_margin;
		}
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ubah Data <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <!--<ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>-->
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <div data-parsley-validate class="form-horizontal form-label-left">
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Id <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id" name="id" required="required" class="form-control col-md-7 col-xs-12" readonly="readonly" value="<?php echo $id; ?>">
                        </div>
                      </div>
                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class='input-group date' id='myDatepicker'>
                                <input type="text"  min="1" id="tanggal" name="tanggal" class="date-picker form-control col-md-7 col-xs-12" required="required" readonly="readonly" value="<?php echo $tanggal;?>">
                                <span class="input-group-addon">
                                     <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Target<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="target" name="target" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $target; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Revenue<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="revenue" name="revenue" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $revenue; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Cost<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="cost" name="cost" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $cost; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Margin<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="margin" name="margin" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $margin; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Cost Margin<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="cost_margin" name="cost_margin" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $cost_margin; ?>">
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button id="halaman_sebelumnya" class="btn btn-primary" type="button">Kembali</button>
						  <!--<button class="btn btn-primary" type="reset">Reset</button>-->
                          <button id="simpan_perubahan" type="submit" class="btn btn-success">Simpan</button>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>

           
          </div>
        </div>
        <!-- /page content -->
<script>
    $('#myDatepicker').datetimepicker({
		ignoreReadonly: true,
        allowInputToggle: true,
		format: 'YYYY-MM-DD HH:mm' //mencegah error
	});
    
    $("#halaman_sebelumnya").click(function(){ 
	   window.location = '<?php echo base_url();?>company_pencapaian/company_pencapaian';        
	})
	/*
	$id = $u->id;
	$payroll_id = $u->payroll_id;
	$nama_karyawan = $u->nama_karyawan;
	$jabatan = $u->jabatan;
	$jam_masuk = $u->jam_masuk;
	*/
	$(document).ready(function(){
		$("#simpan_perubahan").click(function(){
			
			var data; 
			var id = $("#id").val();
                        var target = $("#target").val();
                        var revenue = $("#revenue").val();
                        var cost = $("#cost").val();
                        var margin = $("#margin").val();
                        var cost_margin = $("#cost_margin").val();
//			var payroll_id = $("#payroll_id").val();
//			var nama_karyawan = $("#nama_karyawan").val();
//			var jabatan = $("#jabatan").val();
//			var jam_masuk = $("#jam_masuk").val();
			$.ajax({
				  url: '<?php echo base_url();?>company_pencapaian/editdataproses',
				  dataType: 'json',
				  type: 'POST', 
                                  data: {id : id, target:target, revenue:revenue, cost:cost, margin:margin, cost_margin:cost_margin},
                                  success: function (result){   
                                        if(result == true){
                                            alert("data telah disimpan");
                                            window.location = '<?php echo base_url();?>company_pencapaian/company_pencapaian';
                                                }
                                            }
                                });
		});
	});
</script>