<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company_absen extends MX_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
        parent::__construct();
		ini_set('display_errors', 1);
        error_reporting(E_ALL);
		$this->load->library('auth/ion_auth');//include auth on certain controller
		// check if user logged in 
		if (!$this->ion_auth->logged_in())
	  	{
			redirect('auth/login');
	  	}
		$this->load->library('session');
		
		$this->load->library('email');
                $this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
                $this->load->library('PHPExcel/IOFactory');
                $this->load->library('upload');
		$this->load->model('Company_information_model');		
		$this->DB = $this->load->database('company_information', TRUE);
    } 
	
	public function adddata()
    {  
		$this->load->view('commons/commons_from_gentelella_ocs/header');		
		$this->load->view('adddata');
		$this->load->view('commons/commons_from_gentelella_ocs/footer'); 
    }	
	
	public function editdata()
    {  
		$this->load->view('commons/commons_from_gentelella_ocs/header');		
		$this->load->view('editdata');
		$this->load->view('commons/commons_from_gentelella_ocs/footer'); 
    }
	/*
	$id = $u->id;
	$payroll_id = $u->payroll_id;
	$nama_karyawan = $u->nama_karyawan;
	$jabatan = $u->jabatan;
	$jam_masuk = $u->jam_masuk;
	*/
	public function adddataproses()
    {  
		//$id = $_POST['id'];
		$payroll_id = $_POST['payroll_id'];
		$nama_karyawan = $_POST['nama_karyawan'];
		$jabatan = $_POST['jabatan']; 
		$jam_masuk = date('Y-m-d H:i:s',strtotime($_POST['jam_masuk']));//date('d-m-Y HH:mm:ss',strtotime($jam_masuk))
		
	    $data = $this->Company_information_model->adddataproses($payroll_id, $nama_karyawan, $jabatan, $jam_masuk);
		echo json_encode($data);
    }
	
	public function editdataproses()
    {  
		$id = $_POST['id'];
		$payroll_id = $_POST['payroll_id'];
		$nama_karyawan = $_POST['nama_karyawan'];
		$jabatan = $_POST['jabatan']; 
		$jam_masuk = date('Y-m-d H:i:s',strtotime($_POST['jam_masuk']));//date('d-m-Y HH:mm:ss',strtotime($jam_masuk))
		
	    $data = $this->Company_information_model->editdataproses($id, $payroll_id, $nama_karyawan, $jabatan, $jabatan, $jam_masuk);
		echo json_encode($data);
    }
	
	public function removedata()
    { 
		$id = $_POST['id']; 
		$data = $this->Company_information_model->removedata($id); 
        
        echo json_encode($data); 
    }
	
	public function getdata()
	{
		
		$data = $this->Company_information_model->getdata();
		echo json_encode($data);
		
	}
	
	public function index()
	{
		$this->load->view('commons/commons_from_gentelella_ocs/header');
		$this->load->view('company_absen');
		$this->load->view('commons/commons_from_gentelella_ocs/footer');
	}
	
	public function unggahexcel() {
        //ambil data form
        $file = $_FILES['company_absen_name']['tmp_name'];
        //$created_by = USER_NAME;
        
        //die("$created_by");
        //identify jenis file
        $inputFileType = $this->iofactory->identify($file);
        //buat reader objectnya
        $objReader = $this->iofactory->createReader($inputFileType);

        $objPHPExcel = $objReader->load($file);
        //default active sheet = 0
        $objPHPExcel->setActiveSheetIndex(0);

        //ambil cell collection
        //$cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();

        $worksheet = $objPHPExcel->getActiveSheet();

        $end = false;
        //ambil row tertinggi
        $highestRow = $worksheet->getHighestRow();
        //ambil column tertinggi
        $highestColumn = $worksheet->getHighestColumn();
        //ambil index column tertinggi
        $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
        
         for ($row = 2; $row <= 1515; $row++) {//dimulai dari baris kedua setelah column name
			$val = array();
            for ($col = 0; $col < 2; $col++) {//
                if ($worksheet->getCellByColumnAndRow(1, $row)->getValue() == '') $end = true;
                else {
					$val = $worksheet->getCellByColumnAndRow($col, $row)->getCalculatedValue();
                        
					//$val = $worksheet->getCellByColumnAndRow($col, $row)->getCalculatedValue();
					$arr[$row][$col] = $val;
                }
            }
            if ($end) break;
        }
		
		//print_r($arr);
		//die();
		 /* isi dari  for ($col = 0; $col < 3; $col++)
		 Array ( 
			[2] => Array ( [0] => 0101.3125 [1] => Ja [2] => 1) 
			)
		 */

        //restruktur array
        $x = 0;
        $emp = array();
        
        foreach ($arr as $value) {
            $y = 1;
            foreach ($value as $item) {
                switch($y){
                    case 1:
                            $field = "finger_no";
                            break;
                    case 2:
                            //$tgl = "jam_masuk";
                            $field = "jam_masuk";
                                    //date('yyyy-mm-dd hh:mm:ss', strtotime($tgl)); 
                            break;
									
				}
                $emp[$x][$field] = $item;
                $y++;
            }
            $x++;
        }

        foreach ($emp as $value) {
			$query = $this->DB->insert('absen', $value);
                        
        }
        
        echo "Upload Excel Berhasil";
        die();
            
    }
}
