
      <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/assets_front/animated-bar/css/style.css">

  <div class="wrap">
  <h1>B & D on Target</h1>
	<div class="holder">
		<?php
			foreach($upload_revenue as $tampil){
		?>
		<div class="bar cf" data-percent="<?php echo  $tampil->percent ?>%"> <span class="label"><?php echo $tampil->business_unit ?></span></div>
		<?php
			}
		?>
  </div>
  
 <!-- <script src="<?php echo base_url(); ?>assets/animated-bar/js/jquery.min.js"></script>  -->
  <script  src="<?php echo base_url(); ?>/assets/assets_front/animated-bar/js/index.js"></script> 

