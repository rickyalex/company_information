<?php 
 
class Company_information_model extends CI_Model{
	
	function __construct()
    {
        parent::__construct();
		$this->DB = $this->load->database('company_information', TRUE);
    }
	
	public function getdata()
	{
		$query = $this->DB->query("SELECT id, payroll_id, nama_karyawan, jabatan, jam_masuk FROM absen ORDER BY nama_karyawan ASC");
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
         
        $query = $this->DB->query("UPDATE
										absen
									SET
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