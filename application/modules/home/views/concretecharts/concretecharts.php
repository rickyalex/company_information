    <h1>B & D On Target</h1>
    <div>
        <canvas id="CircleChart_1"></canvas>
        <canvas id="CircleChart_2"></canvas>
        <canvas id="CircleChart_3"></canvas>
    </div>
	<div id="judul">
		<span class="judul">REVENUE/TARGET</span>
		<span class="judul">COST/REVENUE</span>
		<span class="judul">MARGIN/REVENUE</span>
	<div>
	<?php
		foreach($q_resume_revenue->result() as $tampil){
			$hasil1=ceil($tampil->pencapaian1);
			$hasil2=ceil($tampil->pencapaian2);
			$hasil3=ceil($tampil->pencapaian3);
	?>
    <script type="application/javascript">
        var chart1 = new CircleChart();
        chart1.init("CircleChart_1", <?php echo $hasil1 ?>);

        var chart2 = new CircleChart();
        chart2.setColors('#e5eaf1', '#4c709d');
        chart2.init("CircleChart_2", <?php echo $hasil2 ?>);
		
		var chart3 = new CircleChart();
        chart3.setColors('#000000','#ff8000');
        chart3.init("CircleChart_3", <?php echo $hasil3 ?>);
    </script>
		<?php } ?>