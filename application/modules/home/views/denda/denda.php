<!-- col bar 3 -->
<script type='text/javascript'>
	   new Highcharts.Chart({
		chart: {
			height:(6 / 16 * 100) + '%',
                        renderTo: 'container3',
			type: 'bar',
			events: {
                load: function () {
                }
            }
		},
		title: {
			text: '<h1>TOP 10 DENDA KETERLAMBATAN KARYAWAN <br/>PERIODE <b><u><?php echo date('d M Y'); ?><u/></b></h1>'
		},
		xAxis: {
			categories: [
			<?php
			foreach($denda_keterlambatan as $tampil){?>
				'<?php $tampil->jabatan ?>',
			<?php	
				}
			?>
			],
			crosshair: true
		},
		yAxis: {
			min: 0,
			title: {
				text: 'Dalam Satuan Rupaih (K = Ribu)'
			},
			max: 1000000
		},
		tooltip: {
			headerFormat: '<span style=font-size:10px>{point.key}</span><table>',
			pointFormat: '<tr><td style=color:{series.color};padding:0>{series.name}: </td>' +
				'<td style=padding:0><b>{point.y:.0f} Rupiah</b></td></tr>',
			footerFormat: '</table>',
			shared: true,
			useHTML: true
		},
		plotOptions: {
			column: {
				pointPadding: 0,
				groupPadding: 0,
				borderWidth: 0
			}
		},
		series: [
		<?php
			foreach($denda_keterlambatan->result() as $tampil){
		?>
			{
				name:'<?php echo $tampil->nama_karyawan ?>',
				data:[<?php echo  $tampil->denda ?>]
			},
		<?php
			}
		?>
		]
	}); 
</script>