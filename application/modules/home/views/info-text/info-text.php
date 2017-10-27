<?php
	foreach($info_text->result() as $tampil){
		echo'
			<span> ------ '.$tampil->tgl.' - '.$tampil->devisi.': '.$tampil->info.' ------ </span>
			';	
		}
?>