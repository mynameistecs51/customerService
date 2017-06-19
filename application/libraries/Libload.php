<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Libload
{
	protected $ci;

	public function __construct()
	{
		$this->ci =& get_instance();
	}

	public function loadView($viewName,$data){
		$this->ci->load->view('template/Header',$data);
		$this->ci->load->view($viewName,$data);
		$this->ci->load->view('template/Footer',$data);
	}

	public  function getMonth() {
		return  array(
			'01' => 'มกราคม',
			'02' => 'กุมภาพันธ์',
			'03' => 'มีนาคม',
			'04' => 'เมษายน',
			'05' => 'พฤษภาคม',
			'06' => 'มิถุนายน',
			'07' => 'กรกฏาคม',
			'08' => 'สิงหาคม',
			'09' => 'กันยายน',
			'10' => 'ตุลาคม',
			'11' => 'พฤศจิกายน',
			'12' => 'ธันวาคม'
			);
	}



}

/* End of file Libload.php */
/* Location: ./application/libraries/Libload.php */
