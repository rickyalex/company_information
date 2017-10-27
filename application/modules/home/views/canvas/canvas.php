 
      <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/assets_front/canvas/css/style.css">


  		<div class="container">
				<h1>B & D on Target</h1>
					<div class="graphs stats-container centered biggie">			
							<div class="animated" 
								data-provide="circular" 
								data-fill-color="#db4dc2" 
								data-percent="true" 									
								data-initial-value=<?php foreach($upload_resume_revenue as $tampil){ ?> "<?php echo $tampil->revenue ?>" <?php } ?>									
								data-max-value=<?php foreach($upload_resume_revenue as $tampil){ ?> "<?php echo $tampil->target ?>" <?php } ?>									
								data-label="Revenue / Target" 
								data-title="Hasil Tercapai" 
								data-dates="2011 - Present" 
								style="width: 272px; height: 272px;">
							</div>
							<div class="animated" 
								data-provide="circular" 
								data-fill-color="#db4dc2" 
								data-percent="true" 
								data-initial-value=<?php foreach($upload_resume_revenue as $tampil){ ?> "<?php echo $tampil->cost ?>" <?php } ?>
								data-max-value=<?php foreach($upload_resume_revenue as $tampil){ ?> "<?php echo $tampil->revenue ?>" <?php } ?> 
								data-label="Cost / Revenue" 
								data-title="Chart CSS 2" 
								data-dates="2005 - 2010" 
								style="width: 272px; height: 272px;">
							</div>
							<div class="animated" 
								data-provide="circular" 
								data-fill-color="#db4dc2" 
								data-percent="true"
								data-initial-value=<?php foreach($upload_resume_revenue as $tampil){ ?> "<?php echo $tampil->margin ?>" <?php } ?>
								data-max-value=<?php foreach($upload_resume_revenue as $tampil){ ?> "<?php echo $tampil->revenue ?>" <?php } ?> 
								data-label="Margin / Revenue" 
								data-title="Chart CSS 3" 
								data-dates="2012 - Present" 
								style="width: 272px; height: 272px;">
							</div>                     
					</div>
			</div>
		
  <!-- <script src="<?php echo base_url(); ?>assets/canvas/js/jquery_2.1.3.min.js"></script> -->
  <script  src="<?php echo base_url(); ?>/assets/assets_front/canvas/js/index.js"></script>

