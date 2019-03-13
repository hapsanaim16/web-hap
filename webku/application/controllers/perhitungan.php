<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hitung extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->helper(array('url','form')); 
    }
	
	public function index()
	{
		$this->load->view('menu_hitung');
		
	}
	
	function perkalian(){
		$data['angka1']=(int)$this->input->post('angka1',true);
		$data['angka2']=(int)$this->input->post('angka2',true);
		$data['hasil']=$data['angka1']*$data['angka2'];
		$this->load->view('perkalian',$data);
	}
}
