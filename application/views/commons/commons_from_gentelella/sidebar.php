<div class="left_col scroll-view">
            
            <!-- menu profile quick info -->
             <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url(); ?>assets/assets_from_gentelella/production/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span><br/>
				<span><?php //echo $this->ion_auth->user()->row()->first_name." ".$this->ion_auth->user()->row()->last_name;?></span>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  
                      <li><a href="<?php echo base_url(); ?>absen"><i class="fa fa-table"></i>Absen</a></li>
                      <li><a href="<?php echo base_url(); ?>peminjaman_aset"><i class="fa fa-car"></i>Peminjaman Aset</a></li>
                      <li><a href="<?php echo base_url(); ?>pencapaian"><i class="fa fa-bar-chart-o"></i>Pencapaian</a></li>
                      <li><a href="<?php echo base_url(); ?>safety_information"><i class="fa fa-info-circle"></i>Safety Information</a></li>
					  <li><a href="<?php echo base_url(); ?>"><i class="fa fa-laptop"></i>Landing Page <span class="label label-success pull-right">Information</span></a></li>
                   
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url();?>auth/logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>