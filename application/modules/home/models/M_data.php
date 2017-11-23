<?php 
date_default_timezone_set('Asia/Jakarta');

class M_data extends CI_Model{
	
	function __construct()
    {
        parent::__construct();
		$this->DB = $this->load->database('company_information', TRUE);
		$this->DB_GA = $this->load->database('portal', TRUE);
		$this->DB_HRIS = $this->load->database('hris', TRUE);
    }
	
	function running_text(){
		$sql = $this->DB->query("SELECT * FROM info_text where status='1'");
		return $sql;
	}
	function tampil_data(){
		return $this->DB->get('rekap_absen_bulanan');
	}
	function tampil_data2(){
		$sql = $this->DB->query("SELECT * FROM rekap_absen_bulanan ");
		return $sql;
	}
	function tampil_denda(){
		return $this->DB->get('denda_keterlambatan');
	}
	function tampil_denda2(){
		$sql = $this->DB->query("SELECT * FROM denda_keterlambatan ");
		return $sql;
	}
	function pencapaian_r(){
		return $this->DB->get('upload_revenue');
	}
	function pencapaian_resume(){
		return $this->DB->get('q_resume_revenue');
	}
	function portal_ga(){
		date_default_timezone_set('Asia/Jakara');
		$sql = $this->DB->query("SELECT
	portal.car.`car_user`,
	a.carpool_date,
	a.carpool_tujuan,
	a.carpool_jamawal,
	a.carpool_jamakhir,
	(a.carpool_jamakhir-a.carpool_jamawal) / 1000 AS progress,
	TIMEDIFF(a.`carpool_jamawal`,'08:00:00') / 1000 AS mulai
FROM `portal`.`car`
    LEFT JOIN (SELECT * FROM `portal`.`carpool` WHERE carpool_date = DATE(NOW())) a
      ON `portal`.`car`.`car_id` = a.`carpool_car_id`");
		return $sql;
		
		//$query = $this->DB_GA->query("SELECT a.`car_user`,a.car_nopol, b.carpool_costcenter,b.carpool_tujuan, d.dept_name AS dept_name,
		//b.carpool_jamawal,b.carpool_jamakhir,((b.carpool_jamakhir-b.carpool_jamawal)/1000) AS progress, ((TIMEDIFF(b.carpool_jamawal,'08:00:00'))/1000) AS mulai 
		//FROM portal.`car` a LEFT JOIN portal.`carpool` b
		//ON a.`car_id` = b.`carpool_car_id`
		//LEFT JOIN  hris.m_dept d  ON ( d.`dept_code` =  b.`carpool_costcenter`)  
		//GROUP BY a.`car_user`");
		
		//return $query->result();
	}
	
	function load_portal_ga(){
		
	$query = $this->DB->query("SELECT * FROM get_portal");
	
	$sql = $query->result_array();

	
	//die(print_r($sql));
		foreach ($sql as $key => $item )
		{
			if($sql[$key]['progress']==null||$sql[$key]['progress']=='') $array[$key]['progress'] = 0;
			if($sql[$key]['mulai']==null||$sql[$key]['mulai']=='') $array[$key]['mulai'] = 0;
			if($sql[$key]['sisa']==null||$sql[$key]['sisa']=='') $array[$key]['sisa'] = 100;
			if($sql[$key]['carpool_tujuan']==null||$sql[$key]['carpool_tujuan']=='') $array[$key]['carpool_tujuan'] ='';
			
			
			if ($array[$key]['mulai'] <=0 ){
			  $array[$key]['mulai']=0;
			  $array[$key]['sisa'] =100 - $array[$key]['progress'];
			 }else{
			  $array[$key]['mulai']=$array[$key]['mulai'];
			  $array[$key]['sisa'] =100 - $array[$key]['progress'] - $array[$key]['mulai'];
			 }

		}
	return $array;
	}
		
}