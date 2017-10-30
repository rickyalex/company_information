<?php 
 
class Company_information_model extends CI_Model{
	
	function __construct()
    {
        parent::__construct();
		$this->DB = $this->load->database('company_information', TRUE);
    }
	
	public function getdata()
	{
		$query = $this->DB->query("SELECT 
                        CONCAT(                        
                        IF (MONTH(a.tanggal)=1,'JANUARI',
                        IF (MONTH(a.tanggal)=2,'FEBRUARI',
                        IF (MONTH(a.tanggal)=3,'MARET',
                        IF (MONTH(a.tanggal)=4,'APRIL',
                        IF (MONTH(a.tanggal)=5,'MEI',
                        IF (MONTH(a.tanggal)=6,'JUNI',
                        IF (MONTH(a.tanggal)=7,'JULI',
                        IF (MONTH(a.tanggal)=8,'AGUSTUS',
                        IF (MONTH(a.tanggal)=9,'SEPTEMBER',
                        IF (MONTH(a.tanggal)=10,'OKTOBER',
                        IF (MONTH(a.tanggal)=11,'NOVEMBER',
                        IF (MONTH(a.tanggal)=12,'JANUARI',0)))))))))))),' ',YEAR(a.tanggal))AS bln,
                        YEAR(a.tanggal) AS thn,
                      IF(((MONTH(`a`.`tanggal`) = MONTH(NOW())) AND (YEAR(`a`.`tanggal`) = YEAR(NOW()))),((`a`.`revenue` / `a`.`target`) * 100),0) AS `pencapaian1`,
                      IF(((MONTH(`a`.`tanggal`) = MONTH(NOW())) AND (YEAR(`a`.`tanggal`) = YEAR(NOW()))),((`a`.`cost` / `a`.`revenue`) * 100),0) AS `pencapaian2`,
                      IF(((MONTH(`a`.`tanggal`) = MONTH(NOW())) AND (YEAR(`a`.`tanggal`) = YEAR(NOW()))),((`a`.`margin` / `a`.`revenue`) * 100),0) AS `pencapaian3`
                    FROM company_information.`upload_resume_revenue` `a`");
		$result = $query->result_array();
		return $result;
	}
	
	public function adddataproses($payroll_id, $nama_karyawan, $jabatan, $jam_masuk)
    {
         
        $query = $this->DB->query("INSERT INTO
										absen(payroll_id, nama_karyawan, jabatan, jam_masuk)
									VALUES
										('".$payroll_id."', '".$nama_karyawan."', '".$jabatan."', '".$jam_masuk."')");  
	  	if($query){
	 		return true;
    	}else{
	 		return false;
	 	} 
	}
	
	public function editdata($id="")
    {         
  		$query = $this->DB->query("SELECT id, payroll_id, nama_karyawan, jabatan, jam_masuk FROM  absen WHERE id = '".$id."'"); 
        return $query->result();  
    }
	
	public function editdataproses($id, $payroll_id, $nama_karyawan, $jabatan, $jabatan, $jam_masuk)
        {
         
        $query = $this->DB->query("UPDATE absen SET
		id ='".$id."',payroll_id='".$payroll_id."', nama_karyawan='".$nama_karyawan."', jabatan='".$jabatan."', jam_masuk = '".$jam_masuk."'
		WHERE
                id = '".$id."'");  
	  	if($query){
	 		return true;
    	}else{
	 		return false;
	 	} 
	}
	
	public function removedata($id)
	{
		$query = $this->DB->query("DELETE FROM absen WHERE id = '".$id."'"); 
		if ($query){
			return true;
		}else{
			return false;
		}
	}
//====================================================================================================================================================================================================================================================================	
	public function getdata_peminjaman_aset()
	{
		$query = $this->DB->query("SELECT
                            `portal`.`car`.`car_user`  AS `car_user`,
                            `portal`.`car`.`car_nopol` AS `car_nopol`,
                            `portal`.`car`.`car_id`    AS `car_id`,
                            IF((`portal`.`carpool`.`carpool_date` = CAST(NOW() AS DATE)),`portal`.`carpool`.`carpool_costcenter`,NULL) AS `carpool_costcenter`,
                            IF((`portal`.`carpool`.`carpool_date` = CAST(NOW() AS DATE)),`portal`.`carpool`.`carpool_date`,NULL) AS `carpool_date`,
                            IF((`portal`.`carpool`.`carpool_date` = CAST(NOW() AS DATE)),`portal`.`carpool`.`carpool_tujuan`,NULL) AS `carpool_tujuan`,
                            IF((`portal`.`carpool`.`carpool_date` = CAST(NOW() AS DATE)),`hris`.`m_dept`.`dept_name`,NULL) AS `dept_name`,
                            IF((`portal`.`carpool`.`carpool_date` = CAST(NOW() AS DATE)),`portal`.`carpool`.`carpool_jamawal`,NULL) AS `carpool_jamawal`,
                            IF((`portal`.`carpool`.`carpool_date` = CAST(NOW() AS DATE)),`portal`.`carpool`.`carpool_jamakhir`,NULL) AS `carpool_jamakhir`,
                            IF((`portal`.`carpool`.`carpool_date` = CAST(NOW() AS DATE)),((`portal`.`carpool`.`carpool_jamakhir` - `portal`.`carpool`.`carpool_jamawal`) / 1000),0) AS `progress`,
                            IF((`portal`.`carpool`.`carpool_date` = CAST(NOW() AS DATE)),(TIMEDIFF(`portal`.`carpool`.`carpool_jamawal`,'08:00:00') / 1000),0) AS `mulai`
                          FROM (`portal`.`car`
                             LEFT JOIN `portal`.`carpool`
                               ON ((`portal`.`car`.`car_id` = `portal`.`carpool`.`carpool_car_id`)))
                          LEFT JOIN  hris.m_dept  ON ( hris.m_dept.`dept_code`  =  portal.carpool.`carpool_costcenter`)
                          GROUP BY `portal`.`car`.`car_user`");
		$result = $query->result_array();
		return $result;
	}
	
	public function adddataproses_peminjaman_aset($no_unit, $status, $dipakai_oleh, $jam_booking, $dengan_tujuan, $akan_tersedia_pada_pukul)
    {
         
        $query = $this->DB->query("INSERT INTO
										peminjaman_aset(no_unit, status, dipakai_oleh, jam_booking, dengan_tujuan, akan_tersedia_pada_pukul)
									VALUES
										('".$no_unit."', '".$status."', '".$dipakai_oleh."', '".$jam_booking."', '".$dengan_tujuan."', '".$akan_tersedia_pada_pukul."')");  
	  	if($query){
	 		return true;
    	}else{
	 		return false;
	 	} 
	}
	
	public function editdata_peminjaman_aset($id="")
    {         
  		$query = $this->DB->query_peminjaman_aset("SELECT id, no_unit, status, dipakai_oleh, jam_booking, dengan_tujuan, akan_tersedia_pada_pukul FROM peminjaman_aset WHERE id = '".$id."'"); 
        return $query->result();  
    }
	
	public function editdataproses_peminjaman_aset($id, $no_unit, $status, $dipakai_oleh, $jam_booking, $dengan_tujuan, $akan_tersedia_pada_pukul)
    {
         
        $query = $this->DB->query("UPDATE
										peminjaman_aset
									SET
										id ='".$id."',no_unit='".$no_unit."', status='".$status."', dipakai_oleh='".$dipakai_oleh."', jam_booking = '".$jam_booking."', dengan_tujuan = '".$dengan_tujuan."', akan_tersedia_pada_pukul = '".$akan_tersedia_pada_pukul."'
									WHERE
										id = '".$id."'");  
	  	if($query){
	 		return true;
    	}else{
	 		return false;
	 	} 
	}
	
	public function removedata_peminjaman_aset($id)
	{
		$query = $this->DB->query("DELETE FROM peminjaman_aset WHERE id = '".$id."'"); 
		if ($query){
			return true;
		}else{
			return false;
		}
	}
//====================================================================================================================================================================================================================================================================	
	/* public function getdata_peminjaman_aset()
	{
		$query = $this->DB->query("SELECT id, no_unit, status, dipakai_oleh, jam_booking, dengan_tujuan, akan_tersedia_pada_pukul FROM peminjaman_aset ORDER BY akan_tersedia_pada_pukul ASC");
		$result = $query->result_array();
		return $result;
	}
	
	public function adddataproses_peminjaman_aset($no_unit, $status, $dipakai_oleh, $jam_booking, $dengan_tujuan, $akan_tersedia_pada_pukul)
    {
         
        $query = $this->DB->query("INSERT INTO
										peminjaman_aset(no_unit, status, dipakai_oleh, jam_booking, dengan_tujuan, akan_tersedia_pada_pukul)
									VALUES
										('".$no_unit."', '".$status."', '".$dipakai_oleh."', '".$jam_booking."', '".$dengan_tujuan."', '".$akan_tersedia_pada_pukul."')");  
	  	if($query){
	 		return true;
    	}else{
	 		return false;
	 	} 
	}
	
	public function editdata_peminjaman_aset($id="")
    {         
  		$query = $this->DB->query_peminjaman_aset("SELECT id, no_unit, status, dipakai_oleh, jam_booking, dengan_tujuan, akan_tersedia_pada_pukul FROM peminjaman_aset WHERE id = '".$id."'"); 
        return $query->result();  
    }
	
	public function editdataproses_peminjaman_aset($id, $no_unit, $status, $dipakai_oleh, $jam_booking, $dengan_tujuan, $akan_tersedia_pada_pukul)
    {
         
        $query = $this->DB->query("UPDATE
										peminjaman_aset
									SET
										id ='".$id."',no_unit='".$no_unit."', status='".$status."', dipakai_oleh='".$dipakai_oleh."', jam_booking = '".$jam_booking."', dengan_tujuan = '".$dengan_tujuan."', akan_tersedia_pada_pukul = '".$akan_tersedia_pada_pukul."'
									WHERE
										id = '".$id."'");  
	  	if($query){
	 		return true;
    	}else{
	 		return false;
	 	} 
	}
	
	public function removedata_peminjaman_aset($id)
	{
		$query = $this->DB->query("DELETE FROM peminjaman_aset WHERE id = '".$id."'"); 
		if ($query){
			return true;
		}else{
			return false;
		}
	} */
 
}