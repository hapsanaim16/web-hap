<?php  

class Web extends CI_Controller 
{
	
	function __construct()
	{
		parent:: __construct();
	}
	function index()
	{
		$data['judul']="Passing Data ke View";
		$data['isi']="Ini adalah data dari controller";
		$this->load->view('hallo',$data);
	}

}
?>