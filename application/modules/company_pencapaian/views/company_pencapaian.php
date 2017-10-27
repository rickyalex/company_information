	<style>
		.btn-customize {
		padding: 1.5px 17.5px;
		border-radius: 10px; */
		}
		
		.btn-customize-tambah {
		padding: 1.5px 30.5px;
		border-radius: 10px; */
		}
		
		body.loading {
			overflow: hidden;   
		}

		body.loading .modal {
			display: block;
		}

	</style>
	<!-- Bootstrap Table -->
	<link href="<?php echo base_url();?>assets/assets_from_bootstrap_table/bootstrap-table-develop/dist/bootstrap-table.css" rel="stylesheet" type="text/css" /> 
	<!-- jquery -->
	<script src="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- Graph -->
	<script src="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/vendors/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/vendors/morris.js/morris.min.js"></script>
	<link href="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	
	<script src="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/vendors/moment/min/moment.min.js"></script>
	<link href="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/vendors/datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/vendors/datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
	
	<!-- Datatables -->
	<link href="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/vendors/bootstrap-table/dist/bootstrap-table.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/vendors/bootstrap-table/dist/bootstrap-editable.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/vendors/bootstrap-table/dist/bootstrap-table.js"></script>
	<script src="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/vendors/bootstrap-table/dist/bootstrap-table-editable.js"></script>
	<script src="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/vendors/bootstrap-table/dist/bootstrap-editable.js"></script>
	<script src="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/vendors/bootstrap-table/dist/tableExport.js"></script>
	
	<link href="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/vendors/select2/dist/js/select2.full.min.js"></script>
	
	<link href="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/vendors/timepickermaster/jquery.ui.timepicker.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/vendors/timepickermaster/jquery.ui.timepicker.js"></script>
	<!-- Bootstrap Table Export-->
	<script src="<?php echo base_url();?>assets/assets_from_bootstrap_table/bootstrap-table-develop/dist/bootstrap-table.js"></script>
	<script src="<?php echo base_url();?>assets/assets_from_bootstrap_table/bootstrap-table-develop/src/extensions/filter-control/bootstrap-table-filter-control.js"></script>
	<script src="<?php echo base_url();?>assets/assets_from_bootstrap_table/bootstrap-table-develop/src/extensions/export/bootstrap-table-export.js"></script>
	
	<?php $fonsize=12; ?>
        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="title_left">
            <h3>
				<?php
					/* $judul = $this->uri->segment(2);
					$judul = judul_halaman($judul);
					echo $judul; */
				?>
			</h3>
           </div>
          <!-- /top tiles -->
		  <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
			  <div class="x_panel tile fixed_height_400">
				
					
							<?php
							$attributes = array('id' => 'company_pencapaian');
							echo form_open_multipart('Company_pencapaian/unggahexcel', $attributes);
							?>
							<div class="form-group">
								<input type="file" id="company_pencapaian_id" name="company_pencapaian_name" />
							</div>
							<div>
									<button id="buttonSubmit" type="submit" class="btn btn-default btn-customize" title="Upload Excel">Upload File Excel</button>
								
							</div>
							</form>
							<div>
									<a href="<?php echo base_url();?>company_pencapaian/adddata/">
										<button id="buttonAdd" type="submit" class="btn btn-default btn-customize-tambah" title="Upload Excel">Tambah Data</button>
									</a>
							</div>
							<table id="table"></table>
							
		
			  </div>
              <div class="x_panel tile fixed_height_400">

				<div class="col-md-12 col-sm-12 col-xs-12 bg-white">
					<div id="getdata">
						<table id="table" 
							data-toggle="table"
							data-search="true"
							data-show-refresh="true"
							data-show-toggle="true"
							data-show-columns="true"
							data-show-export="true" 
							data-minimum-count-columns="2"
							data-show-pagination-switch="true"
							data-pagination="true"
							data-page-list="[10, 25, 50, 100, ALL]"
							data-show-footer="false"
							data-export-data-type="all"
							data-export-types="['excel','csv']"
							data-height="100%"
                            sortable="true"
							data-url="<?php echo base_url();?>company_pencapaian/getdata">
							<thead>
								<tr> 
									<th data-field="payroll_id" width="auto" data-sortable="true"><center>Payroll Id</center></th> 
									<th data-field="nama_karyawan" width="auto" data-sortable="true"><center>Nama karyawan</center></th>
									<th data-field="jabatan" width="auto" data-sortable="true"><center>Jabatan</center></th> 
									<!--<th data-formatter="formattanggal" data-field="jam_masuk" width="auto" data-sortable="true"><center>Jam Masuk</center></th>--> 
									<th data-field="jam_masuk" width="auto" data-sortable="true"><center>Jam Masuk</center></th> 
									
									<th data-field="action" style="" data-formatter="actionFormatter" data-events="actionEvents"><center>Action</center></th>
								</tr>    
							</thead>
						</table>
					</div>
                </div>
              </div>
             </div>
           </div>
		</div>
<script = type="text/javascript">
	var base_url = "<?php echo base_url(); ?>";
	var uri3 = "<?php echo $this->uri->segment(1); ?>";
	/* onMsoNumberFormat = function(cell, row, col) {
		if (row > 0 && col == 0) {
			return "\\@";
		}
		if (row > 0 && col == 1) {
			return "\\@";
		}
	}; */
	
	function formattanggal(value, row, index) {
		return moment(value).format('DD/MM/YYYY');
	}//lagi coba buat 31 Agustus 2017, 08:09:00
	
	function actionFormatter(value, row, index) {
		var myObj  = JSON.stringify(row);
		var objek = JSON.parse(myObj);
    	var id = objek.id;
				return [
    				'<center><a class="remove btn btn-danger btn-xs" href="javascript:void(0)" title="Hapus">',
    				'<i class="fa fa-trash-o"></i>',
    				'</a>    ',
    				'<a class="edit btn btn-info btn-xs" href="'+base_url+'company_pencapaian/editdata/'+id+'" title="Ubah">',
    				'<i class="fa fa-pencil"></i>',
    				'</a></center>'
    			].join(''); 
    }
	window.actionEvents = {
        'click .edit': function (e, value, row, index) {
                //alert('You click edit icon, row: ' + JSON.stringify(row));
           console.log(value, row, index);
        },
        'click .remove': function (e, value, row, index) {
          //  alert('delete: ' + JSON.stringify(row));
    		var myObj  = JSON.stringify(row);
    		var objek = JSON.parse(myObj);
    		var id = objek.id;
    		var cari = objek.cari;
			//alert(id);
     	    $.ajax({
    			  url: '<?php echo base_url();?>company_pencapaian/removedata/',
    			  dataType: 'json',
    			  type: 'POST',
    			  data: {id: id}, // contains changed cells' data
    			  success: function (data){
    				  if(data == true){
    					  alert("Data telah dihapus");
                          location.reload();
    					  $('#getdata').load('company_pencapaian');
    				  }
    			  }
    			}); 
            console.log(value, row, index);
        }
    };
	//form submit menggunakan FormData harus menggunakan browser versi IE 10+, Firefox 4.0+, Chrome 7+, Safari 5+, Opera 12+
			jQuery("form#company_pencapaian").submit(function (event) {
				event.preventDefault();
				//var e = $('#input_upload').val();
				var form = jQuery(this)[0];
				var formData = new FormData(form);
				jQuery.ajax({
					type: "POST",
					data: formData,
					contentType: false,
					processData: false,
					url: "<?php echo base_url(); ?>company_pencapaian/unggahexcel/",
					success: function (response) {
						console.log(response);
						alert(response);
						location.reload();
    					$('#getdata').load('company_pencapaian');
					},
					error: function (response) {
						//console.log(response);
						alert('Upload gagal !');
						//alert("Upload Gagal : "+response);
					}
				});
				return false;
			});

			$body = $("body");

			$(document).on({
				ajaxStart: function () {
					$body.addClass("loading");
				},
				ajaxStop: function () {
					$body.removeClass("loading");
				}
			});
</script>