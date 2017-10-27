<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Home extends MX_Controller {

 
	function __construct(){
		ini_set('display_error',1);
		error_reporting(E_ALL);
		
		parent::__construct();		
		$this->load->model('m_data');
                $this->load->helper('url');
	}
 
	function index(){
		$this->load->view('home/vhome/vhome',$data);
	}
        
	function get_absen(){
		$data['rekap_absen_bulanan'] = $this->m_data->tampil_data2();
                return $data;
	}
        
        function view_absen(){
                $data = $this->get_absen();
		$this->load->view('home/absen/absen',$data);
	}
        
        function get_info_text(){
		$data['info_text'] = $this->m_data->running_text()->result_array();
                return $data;
	}
        
        function view_info_text(){
		$data = $this->get_info_text();
                $this->load->view('home/info-text/info-text',$data);
	}
        
	function get_denda(){
		$data['denda_keterlambatan'] = $this->m_data->tampil_denda2();
		return $data;
	}
        
        function view_denda(){
                $data = $this->get_denda();
		$this->load->view('home/denda/denda',$data);
	}
        
	function get_bar_portal(){
		$data['get_portal'] = $this->m_data->portal_ga();
		return $data;
	}
        
        function view_bar_portal(){
		$data = $this->get_bar_portal();
		$this->load->view('home/portal_ga/portal_ga',$data);
	}

}
