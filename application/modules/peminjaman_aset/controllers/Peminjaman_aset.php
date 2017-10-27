<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman_aset extends CI_Controller {

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
    }
	
	public function index()
	{
		$this->load->helper('xcrud');
        
        $xcrud = xcrud_get_instance();
        $xcrud->table('peminjaman_aset');
        $data['content'] = $xcrud->render();
        
		$this->load->view('commons/commons_from_gentelella/header');
		$this->load->view('message',$data);
		$this->load->view('commons/commons_from_gentelella/footer');
	}
}
