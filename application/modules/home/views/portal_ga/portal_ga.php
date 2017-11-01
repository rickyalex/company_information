<?php 
date_default_timezone_set('Asia/Jakara');

		$i=1;
	  foreach ($get_portal->result() as $refresh_portal_ga ) {
		  
	 $progress =$refresh_portal_ga->progress;
	 $mulai =$refresh_portal_ga->mulai;
	 
	 if ($mulai  <0 ){
	  $mulai = 0;
	  $sisa =100 - $refresh_portal_ga->progress;
	 }else{
	  $mulai = $refresh_portal_ga->mulai;
	  $sisa =100 - $refresh_portal_ga->progress - $refresh_portal_ga->mulai;
	 }
		 
	 if ($refresh_portal_ga->carpool_tujuan != ""||$refresh_portal_ga->carpool_tujuan != null){
		 echo '
		 <tr>
			 <td>'.$i.'</td>
			 <td> Avansa</td>
			<td>'.$refresh_portal_ga->car_nopol.'</td>
			 <td>'.$refresh_portal_ga->dept_name.'</td>
			 <td>'.$refresh_portal_ga->carpool_tujuan.'</td>
			<td colspan="10">
			  <div class="progress">
				<div class="progress-bar progress-bar-success" style="width:'.$mulai.'%"></div>
				<div class="progress-bar progress-bar-danger" style="width:'.$progress.'%"></div>
				<div class="progress-bar progress-bar-success" style="width:'.$sisa.'%"></div>
			  </div>
			</td>
		</tr>';
			 }else if($refresh_portal_ga->carpool_tujuan == null){
			  echo '
		<tr>
			<td>'.$i.'</td>
			<td> Avansa</td>
			<td>'.$refresh_portal_ga->car_nopol.'</td>
			<td>'.$refresh_portal_ga->dept_name.'</td>
			<td>'.$refresh_portal_ga->carpool_tujuan.'</td>
			<td colspan="10">
			  <div class="progress">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0"  aria-valuemax="100" style="width:100%"></div>
			  </div>
			</td>
		</tr>';
		 
		 }
		 
	  $i++; } 
	   ?>