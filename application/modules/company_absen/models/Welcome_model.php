<?php 
 
class Welcome_model extends CI_Model{
	
	function __construct()
    {
        parent::__construct();
		$this->DB = $this->load->database('default', TRUE);

    }
	
	function getData(){
		$query = $this->DB->query("SELECT id, payroll_id, nama_karyawan, jabatan, jam_masuk FROM absen ORDER BY id DESC");
		$result = $query->result_array();
		return $result;
	}
	
	function a()
	{

	

	}
 
	public function removeData($id)
	{
		$query = $this->DB->query("DELETE FROM absen WHERE id = '".$id."'"); 
		if ($query){
			return true;
		}else{
			return false;
		}
	}
 
	function b()
	{

	

	}
}