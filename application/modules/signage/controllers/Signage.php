<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signage extends MX_Controller {

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
		//$this->load->model('company_information');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('PHPExcel/IOFactory');
        $this->load->library('upload');
		$this->DB = $this->load->database('company_information', TRUE);
    }
	
	public function index()
	{
        
		//$this->load->view('index');

	}
	
	public function indexchart_absen()
	{
        
		$this->load->view('indexchart_absen');

	}
	
	public function indexchart_peminjaman_aset()
	{
        
		$this->load->view('indexchart_peminjaman_aset');

	}
	
	public function indexchart_pencapaian()
	{
        
		$this->load->view('indexchart_pencapaian');

	}
	
	public function indexchart_safety_information()
	{
        
		$this->load->view('indexchart_safety_information');

	}
	
}
