<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen extends MX_Controller {

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
		/* if (!$this->ion_auth->logged_in())
	  	{
			redirect('auth/login');
	  	} */
		//$this->load->model('company_information');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('PHPExcel/IOFactory');
        $this->load->library('upload');
		$this->DB = $this->load->database('company_information', TRUE);
    }
	
	public function index()
	{
		$this->load->helper('xcrud');
        
        $xcrud = xcrud_get_instance();
        $xcrud->table('absen');
		$xcrud->order_by('id','desc');
        $data['content'] = $xcrud->render();
        
		$this->load->view('commons/commons_from_gentelella/header');
		$this->load->view('message',$data);
		$this->load->view('commons/commons_from_gentelella/footer');
	}
	
	public function uploadExcel() {
        //ambil data form
        $file = $_FILES['input_upload']['tmp_name'];
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
            for ($col = 0; $col < 3; $col++) {//
                if ($worksheet->getCellByColumnAndRow(1, $row)->getValue() == '') $end = true;
                else {
					$val = $worksheet->getCellByColumnAndRow($col, $row)->getCalculatedValue();
                        
					//$val = $worksheet->getCellByColumnAndRow($col, $row)->getCalculatedValue();
					$arr[$row][$col] = $val;
                }
            }
            if ($end) break;
        }
		
		// print_r($arr);
		// die();
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
						$field = "payroll_id";
						break;
					case 2:
						$field = "nama_karyawan";
						break;
					case 3:
						$field = "jam_masuk";
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
