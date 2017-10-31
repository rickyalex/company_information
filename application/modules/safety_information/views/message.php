	<style>
		.btn-customize {
		padding: 1.5px 17.5px;
		border-radius: 10px; */
		}
		
		body.loading {
			overflow: hidden;   
		}

		body.loading .modal {
			display: block;
		}
	</style>
	<!-- jquery -->
	<script src="<?php echo base_url(); ?>assets/assets_from_gentelella/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/assets_from_gentelella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- Graph -->
	<script src="<?php echo base_url(); ?>assets/assets_from_gentelella/vendors/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets_from_gentelella/vendors/morris.js/morris.min.js"></script>
	<link href="<?php echo base_url(); ?>assets/assets_from_gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	
	<script src="<?php echo base_url(); ?>assets/assets_from_gentelella/vendors/moment/min/moment.min.js"></script>
	<link href="<?php echo base_url(); ?>assets/assets_from_gentelella/vendors/datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>assets/assets_from_gentelella/vendors/datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
	
	<!-- Datatables -->
	<?php $base = base_url()."assets/assets_from_gentelella/"; ?>
	<link href="<?php echo base_url(); ?>assets/assets_from_gentelella/vendors/bootstrap-table/dist/bootstrap-table.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/assets_from_gentelella/vendors/bootstrap-table/dist/bootstrap-editable.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>assets/assets_from_gentelella/vendors/bootstrap-table/dist/bootstrap-table.js"></script>
	<script src="<?php echo base_url(); ?>assets/assets_from_gentelella/vendors/bootstrap-table/dist/bootstrap-table-editable.js"></script>
	<script src="<?php echo base_url(); ?>assets/assets_from_gentelella/vendors/bootstrap-table/dist/bootstrap-editable.js"></script>
	<script src="<?php echo base_url(); ?>assets/assets_from_gentelella/vendors/bootstrap-table/dist/tableExport.js"></script>
	
	<link href="<?php echo base_url(); ?>assets/assets_from_gentelella/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>assets/assets_from_gentelella/vendors/select2/dist/js/select2.full.min.js"></script>
	
	<link href="<?php echo base_url(); ?>assets/assets_from_gentelella/vendors/timepickermaster/jquery.ui.timepicker.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>assets/assets_from_gentelella/vendors/timepickermaster/jquery.ui.timepicker.js"></script>
	
	
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
					<div class="box-body">
						<div class="x_panel tile fixed_height_400">
							
								
										<?php
										$attributes = array('id' => 'upload');
										echo form_open_multipart('safety_information/uploadExcel', $attributes);
										?>
										<div class="form-group">
											<input type="file" id="input_upload" name="input_upload" />
										</div>
										<div>
											<button id="buttonSubmit" type="submit" class="btn btn-default btn-customize" title="Upload Excel">Upload</button>
										</div>
										</form>
										
										<table id="table"></table>
										<?php echo $content ?>
					
						</div>
					</div>
				</div>
				
			</div>
		</div>
		
		<script>
			//form submit menggunakan FormData harus menggunakan browser versi IE 10+, Firefox 4.0+, Chrome 7+, Safari 5+, Opera 12+
			jQuery("form#upload").submit(function (event) {
				event.preventDefault();
				//var e = $('#input_upload').val();
				var form = jQuery(this)[0];
				var formData = new FormData(form);
				jQuery.ajax({
					type: "POST",
					data: formData,
					contentType: false,
					processData: false,
					url: "<?php echo base_url(); ?>safety_information/unggahexcel/",
					success: function (response) {
						//console.log(response);
						alert(response);
						location.reload();
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
